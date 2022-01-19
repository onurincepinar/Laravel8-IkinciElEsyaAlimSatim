@extends('layouts.admin')

@section('title','Messages List')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Messages </h4>
                            <p class="card-description">

                            </p>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Messages List</h4>
                                    <div class="table-responsive pt-3">
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
                                                    Phone
                                                </th>
                                                <th>
                                                    Subject
                                                </th>

                                                <th>
                                                   Message
                                                </th>
                                                <th>
                                                    Admin Note
                                                </th>
                                                <th>
                                                   Status
                                                </th>
                                                <th>
                                                    Edit
                                                </th>
                                                <th>
                                                    Delete
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($datalist as $key=>$rs)
                                                <tr class="table table-bordered">
                                                    <td>
                                                        {{$key+1}}
                                                    </td>
                                                    <td>
                                                        {{$rs->name}}
                                                    </td>
                                                    <td>
                                                        {{$rs->email}}
                                                    </td>
                                                    <td>
                                                        {{$rs->phone}}
                                                    </td>
                                                    <td>
                                                        {{$rs->subject}}
                                                    </td>
                                                    <td>
                                                        {{$rs->message}}
                                                    </td>
                                                    <td>
                                                        {{$rs->note}}
                                                    </td>
                                                    <td>
                                                        {{$rs->status}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_message_edit',['id'=>$rs->id])}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                                             Edit</a>

                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_message_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>

                            <div class="template-demo">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
