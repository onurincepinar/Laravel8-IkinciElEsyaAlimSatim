@extends('layouts.admin')

@section('title','Faq Add')


@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Product</h4>
                            <form class="forms-sample" action="{{route('admin_faq_store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label >Position</label>
                                    <input type="number" name="position" class="form-control" value="0" placeholder="Position">
                                </div>

                                <div class="form-group">
                                    <label >Question</label>
                                    <input type="text" name="question" class="form-control" placeholder="Title">
                                </div>

                                <div class="form-group">
                                    <label >Answer</label>
                                    <textarea id="summernote" name="answer"></textarea>
                                    <script>
                                        $(document).ready(function() {
                                            $('#summernote').summernote();
                                        });
                                    </script>
                                </div>

                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status" >
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>

                                <button type="submit" class="btn btn-primary mr-2">Add</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
