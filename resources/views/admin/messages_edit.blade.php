<html>
<head>
    <title>Image Galery</title>
    <!-- include summernote css/js -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/feather/feather.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->

    <link rel="stylesheet" href="{{ asset('assets')}}/admin/vendors/ti-icons/css/themify-icons.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('assets')}}/admin/css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('assets')}}/admin/images/favicon.png"/><!-- include libraries(jQuery, bootstrap) -->

</head>
<body>
    <div class="main-panel col-10">
        <div class="content-wrapper ">
            <div class="row">
                <div class="col-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Message Detail</h4>

                            <form class="forms-sample" action="{{route('admin_message_update',['id'=>$data->id])}}" enctype="multipart/form-data" method="post">
                                @csrf
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>
                                            Id
                                        <td>
                                            {{$data->id}}
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Name
                                        <td>
                                            {{$data->name}}
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Email
                                        <td>
                                            {{$data->email}}
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Phone
                                        <td>
                                            {{$data->phone}}
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Subject
                                        <td>
                                            {{$data->subject}}
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>

                                        <th>
                                            Message
                                        <td>
                                            {{$data->message}}
                                        </td>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th>
                                            Admin Note
                                            <textarea id="note" name="note">{{$data->note}}</textarea>
                                        </th>
                                    </tr>
                                    </thead>

                                </table>

                                <button type="submit" class="btn btn-primary mr-2"> Edit Message</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
