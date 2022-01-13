@extends('layouts.admin')

@section('title','Add Product')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Product</h4>
                            <form class="forms-sample" action="{{route('admin_product_store')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Parent</label>
                                    <select class="form-control" name="category_id">

                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"> {{$rs->title}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label >Title</label>
                                    <input type="text" name="title" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label >Keywords</label>
                                    <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                                </div>
                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" class="form-control" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label >Price</label>
                                    <input type="number" name="price" value="0" class="form-control" placeholder="Price">
                                </div>
                                <div class="form-group">
                                    <label >Quantity</label>
                                    <input type="number" name="quantity" class="form-control" value="1" placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                    <label >Minimum Quantity</label>
                                    <input type="number" name="minquantity" value="5" class="form-control" placeholder="Minimum Quantity">
                                </div>
                                <div class="form-group">
                                    <label >Tax</label>
                                    <input type="number" name="tax" value="18" class="form-control" placeholder="Tax">
                                </div>
                                <div class="form-group">
                                    <label >Detail</label>
                                    <textarea id="summernote" name="detail"></textarea>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" name="slug" class="form-control" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status" >
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
