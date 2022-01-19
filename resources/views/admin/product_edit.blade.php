@extends('layouts.admin')

@section('title','Edit Product')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Product</h4>
                            <form class="forms-sample" action="{{route('admin_product_update',['id'=>$data->id])}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Category</label>
                                    <select class="form-control" name="category_id">
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}" @if($rs->id==$data->category_id) selected=selected" @endif>
                                                {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" name="title" value="{{$data->title}}" class="form-control" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control" placeholder="Keywords">
                                </div>

                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label >Price</label>
                                    <input type="number" name="price" value="{{$data->price}}" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label >Quantity</label>
                                    <input type="number" name="quantity" class="form-control" value="{{$data->quantity}}" placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                    <label >Minimum Quantity</label>
                                    <input type="number" name="minquantity" value="{{$data->minquantity}}" class="form-control" placeholder="Minimum Quantity">
                                </div>
                                <div class="form-group">
                                    <label >Tax</label>
                                    <input type="number" name="tax" value="{{$data->tax}}" class="form-control" placeholder="Tax">
                                </div>
                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea id="summernote" name="detail">
                                        {{$data->detail}}
                                    </textarea>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" name="slug" value="{{$data->slug}}" class="form-control" placeholder="Slug">
                                </div>

                                <div class="form-group">
                                    <label>Image</label>
                                    <input type="file" name="image" value="{{$data->image}}" class="form-control">
                                    @if($data->image)
                                        <img src="{{Storage::url($data->image)}}" height="100" alt="">
                                    @endif
                                </div>


                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status" >
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2"> Edit Product</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
