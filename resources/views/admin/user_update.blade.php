<html>
<head>
    <title>User Role</title>
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
                        <h4 class="card-title"><i>{{$user->name}}</i> </h4>
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    Id
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                   Active Roles
                                </th>
                                <th>
                                    Avaliable Roles
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr class="table table-bordered">
                                    <td>
                                        
                                        {{$user->id}}
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    <td>
                                        @foreach ($user->roles as $item)
                                        <a href="{{route('delete_role',[$user->id, $item->id])}}">{{$item->name}}</a>    
                                        @if (!$loop->last)
                                                -
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>
                                        @foreach (\App\Models\Roles::get() as $item)
                                            @if (!App\Models\Role_user::where('user_id',$user->id)->pluck('roles_id')->contains($item->id))
                                            <a href="{{route('add_role',[$user->id, $item->id])}}">{{$item->name}}</a>
                                            @if (!$loop->last)
                                                -
                                            @endif
                                            @endif
                                        @endforeach
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
