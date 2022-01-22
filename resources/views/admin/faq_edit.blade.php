@extends('layouts.admin')

@section('title','Faq Edit')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Faq</h4>
                            <form class="forms-sample" action="{{route('admin_faq_update',['id'=>$data->id])}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <div class="form-group">
                                    <label >Position</label>
                                    <input type="number" name="position" class="form-control" value="{{$data->position}}" placeholder="Position">
                                </div>

                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" name="question" value="{{$data->question}}" class="form-control" placeholder="Title">
                                </div>
                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea id="summernote" name="answer">{!!$data->answer!!}</textarea>
                                    <script>

                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control"  name="status" >
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2"> Edit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
