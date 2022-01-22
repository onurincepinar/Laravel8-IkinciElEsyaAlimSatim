@extends('layouts.admin')

@section('title','Faq List')

@section('content')

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">

                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Frequently Asked Questions</h4>
                            <p class="card-description">

                            </p>
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Faq List</h4>
                                    <div class="table-responsive pt-3">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>
                                                    Id
                                                </th>
                                                <th>
                                                    Position
                                                </th>
                                                <th>
                                                    Question
                                                </th>
                                                <th>
                                                    Answer
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
                                                        {{$rs->position}}
                                                    </td>
                                                    <td>
                                                        {{$rs->question}}
                                                    </td>
                                                    <td>
                                                        {!!$rs->answer!!}
                                                    </td>
                                                    <td>
                                                        {{$rs->status}}
                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_faq_edit',['id'=>$rs->id])}}">  Edit </a>

                                                    </td>
                                                    <td>
                                                        <a href="{{route('admin_faq_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
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
