@extends('layouts.admin')
@section('title','Product Panel')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Products</h4>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Product List</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Id
                                                </th>
                                                <th>
                                                    Photo
                                                </th>
                                                <th>
                                                    User Name
                                                </th>
                                                <th>
                                                    Email
                                                </th>
                                                <th>
                                                    Address
                                                </th>
                                                <th>
                                                    Phone
                                                </th>
                                                <th>Roles</th>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Delete
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $key=>$rs)
                                                <tr class="table table-bordered">
                                                    <td>
                                                        {{$key+1}}
                                                    </td>
                                                    <td>
                                                        <img src="{{Storage::url($rs->profile_photo_path)}}" style="min-height:60px;width: 60px" alt="">
                                                    </td>
                                                    <td>
                                                        {{$rs->name}}
                                                    </td>
                                                    <td>
                                                        {{$rs->email}}
                                                    </td>
                                                    <td>
                                                        {{$rs->address}}
                                                    </td>
                                                    <td>
                                                        {{$rs->phone}}
                                                    </td>
                                                    <td>
                                                        @foreach ($rs->roles as $role)
                                                            {{$role->name}}
                                                        @endforeach
                                                        <span></span>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('user_edit',['id'=>$rs->id])}}">  Edit </a>
                                                    </td>
                                                    <td>
                                                        <a href="{{route('delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection