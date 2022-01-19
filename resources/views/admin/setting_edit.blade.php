@extends('layouts.admin')

@section('title','Edit Setting')

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Setting</h4>
                            <form class="forms-sample" action="{{route('admin_setting_update')}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control" placeholder="Title">
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
                                    <label >Company</label>
                                    <input type="text" name="company" value="{{$data->company}}" class="form-control" placeholder="Company">
                                </div>
                                <div class="form-group">
                                    <label >Adress</label>
                                    <input type="text" name="adress" class="form-control" value="{{$data->adress}}" placeholder="Adress">
                                </div>
                                <div class="form-group">
                                    <label >Phone</label>
                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control" placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label >Fax</label>
                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control" placeholder="Fax">
                                </div>
                                <div class="form-group">
                                    <label >Email</label>
                                    <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="email">
                                </div>
                                <div class="form-group">
                                    <label >Smtp Server</label>
                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control" placeholder="smtpserver">
                                </div>
                                <div class="form-group">
                                    <label >Smtp Email</label>
                                    <input type="text" name="smtpemail" value="{{$data->smtpemail}}" class="form-control" placeholder="Smtpemail">
                                </div>
                                <div class="form-group">
                                    <label >Smtp Password</label>
                                    <input type="password" name="smtppassword" value="{{$data->tax}}" class="form-control" placeholder="Smtppassword">
                                </div>
                                <div class="form-group">
                                    <label >Smtp Port</label>
                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control" placeholder="Smtpport">
                                </div>
                                <div class="form-group">
                                    <label >Facebook</label>
                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control" placeholder="Facebook">
                                </div>
                                <div class="form-group">
                                    <label >Instagram</label>
                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control" placeholder="Instagram">
                                </div>
                                <div class="form-group">
                                    <label >Twitter</label>
                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control" placeholder="Twitter">
                                </div>
                                <div class="form-group">
                                    <label >Linkedin</label>
                                    <input type="text" name="linkedin" value="{{$data->linkedin}}" class="form-control" placeholder="Linkedin">
                                </div>
                                <div class="form-group">
                                    <label >About Us</label>

                                    <textarea id="aboutus" name="aboutus">
                                       {!! $data->aboutus !!}
                                    </textarea>

                                </div>
                                <div class="form-group">
                                    <label >Contact Us</label>
                                    <textarea id="contact" name="contact">
                                       {!! $data->contact !!}
                                    </textarea>
                                </div>
                                <div class="form-group">
                                    <label >References</label>
                                    <textarea id="references" name="references">
                                          {!! $data->references !!}
                                    </textarea>
                                </div>
                                <script>
                                    $(document).ready(function() {
                                        $('#aboutus').summernote();
                                        $('#contact').summernote();
                                        $('#references').summernote();
                                    });
                                </script>
                                <div class="form-group">
                                    <label >Status</label>
                                    <select class="form-control" name="status" >
                                        <option selected="selected">{{$data->status}}</option>
                                        <option>False</option>
                                        <option>True</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2"> Edit Setting</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
