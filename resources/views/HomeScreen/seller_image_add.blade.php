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

    <div class="content-wrapper auto-cols-auto">
        <div class="row">
            <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Image for <i>{{$data->title}}</i> </h4>
                        <form class="forms-sample" action="{{route('admin_image_store',['product_id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label >Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label>Image</label>
                                <input type="file" name="image" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Add Image</button>
                            <button class="btn btn-light">Cancel</button>
                        </form>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    Id
                                </th>

                                <th>
                                    Title
                                </th>

                                <th>
                                    Image
                                </th>
                                <th>
                                    Delete
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($images as $key=>$rs)
                                <tr class="table table-bordered">
                                    <td>
                                        {{$key+1}}
                                    </td>
                                    <td>
                                        {{$rs->title}}
                                    </td>
                                    <td>
                                        @if($rs->image)
                                            <img src="{{Storage::url($rs->image)}}" height="70" alt="">
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{route('admin_image_delete',['id'=>$rs->id,'product_id'=>$data->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
