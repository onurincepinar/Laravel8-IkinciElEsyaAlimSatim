@extends('layouts.admin')

@section('title','Add Category')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Category</h4>
                            <form class="forms-sample" action="{{route('admin_category_create')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Parent</label>
                                    <select class="form-control" name="parent_id">
                                        <option value="0">Main Category</option>
                                        @foreach($datalist as $rs)
                                            <option value="{{$rs->id}}">{{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
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
                                <button type="submit" class="btn btn-primary mr-2">Add Category</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
