@extends('layouts.admin')

@section('title','Admin Panel')

@section('content')

<div class="main-panel">
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Categories</h4>
              <p class="card-description">
               <!-- Add tags <code>&lt;h1&gt;</code> to <code>&lt;h6&gt;</code> or class <code>.h1</code> to <code>.h6</code> --!>
              </p>
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Category List</h4>
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>
                                        Id
                                    </th>
                                    <th>
                                        Parent
                                    </th>
                                    <th>
                                        Title
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
                                @foreach($datalist as $rs)
                                <tr class="table table-bordered">
                                    <td>
                                        {{$rs->id}}
                                    </td>
                                    <td>
                                        {{$rs->parent_id}}
                                    </td>
                                    <td>
                                        {{$rs->title}}
                                    </td>
                                    <td>
                                        {{$rs->status}}
                                    </td>
                                    <td>
                                        Edit
                                    </td>
                                    <td>
                                       <a href="{{route('admin_category_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
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
