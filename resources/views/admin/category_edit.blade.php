@extends('layouts.admin')

@section('title','Edit Category')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Category</h4>
                            <form class="forms-sample" action="{{route('admin_category_update',['id'=>$data->id])}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Parent</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Main Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}"@if($rs->id==$data->parent_id) selected=selected" @endif>
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
                                    <input type="text" name="keywords"value="{{$data->keywords}}" class="form-control" placeholder="Keywords">
                                </div>

                                <div class="form-group">
                                    <label >Description</label>
                                    <input type="text" name="description" value="{{$data->description}}" class="form-control" placeholder="Description">
                                </div>
                                <div class="form-group">
                                    <label >Slug</label>
                                    <input type="text" name="slug"value="{{$data->slug}}" class="form-control" placeholder="Slug">
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status" >
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>File upload</label>
                                    <input type="file" name="img[]" class="file-upload-default">
                                    <div class="input-group col-xs-12">
                                        <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                                        <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputCity1">City</label>
                                    <input type="text" class="form-control" id="exampleInputCity1" placeholder="Location">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Textarea</label>
                                    <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Save Changes</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
