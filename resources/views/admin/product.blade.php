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
                            <p class="card-description">

                            </p>
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
                                                    Category
                                                </th>
                                                <th>
                                                    Title
                                                </th>
                                                <th>
                                                    Quantity
                                                </th>
                                                <th>
                                                    Price
                                                </th>

                                                <th>
                                                    Image
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
                                                        {{$rs->category_id}}
                                                    </td>
                                                    <td>
                                                        {{$rs->title}}
                                                    </td>
                                                    <td>
                                                        {{$rs->quantity}}
                                                    </td>
                                                    <td>
                                                        {{$rs->price}}
                                                    </td>
                                                    <td>
                                                        @if($rs->image)
                                                            <img src="{{Storage::url($rs->image)}}" height="30" alt="">
                                                        @endif
                                                    </td>

                                                    <td>
                                                        {{$rs->status}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_product_edit',['id'=>$rs->id])}}">  Edit </a>

                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_product_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
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
