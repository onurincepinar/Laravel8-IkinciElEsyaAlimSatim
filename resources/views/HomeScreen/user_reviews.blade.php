@extends('HomeScreen.master')
@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('content')
    <section class="bg0 p-t-62 p-b-60">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-lg-10 p-b-80">

                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>
                                Id
                            </th>
                            <th>
                                Product
                            </th>
                            <th>
                                Subject
                            </th>
                            <th>
                                Review
                            </th>
                            <th>
                                Rate
                            </th>
                            <th>
                                Status
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
                                    <a href="{{route('product',['id'=>$rs->product->id])}}" target="_blank">{{$rs->product->title}}</a>
                                </td>
                                <td>
                                    {{$rs->subject}}
                                </td>
                                <td>
                                    {{$rs->review}}
                                </td>
                                <td>
                                    {{$rs->rate}}
                                </td>
                                <td>
                                    {{$rs->status}}
                                </td>
                                <td>
                                    {{$rs->created_at}}
                                </td>
                                <td>
                                    <a href="{{route('user_review_delete',['id'=>$rs->id])}}" onclick="return confirm('Are you sure?')"> Delete </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                </div>
    <div class="col-md-2 col-lg-2 p-b-80">
        <div class="side-menu">
            <div class="bor17 of-hidden pos-relative">
                <input class="stext-103 cl2 plh4 size-116 p-l-28 p-r-55" type="text" name="search" placeholder="Search">

                <button class="flex-c-m size-122 ab-t-r fs-18 cl4 hov-cl1 trans-04">
                    <i class="zmdi zmdi-search"></i>
                </button>
            </div>

            <div class="p-t-55">
                <h4 class="mtext-112 cl2 p-b-33">
                    User Panel
                </h4>

                <ul>
                    <li class="bor18">
                        <a href="{{route('myprofile')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                            Profile
                        </a>
                    </li>

                    <li class="bor18">
                        <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                            Orders
                        </a>
                    </li>

                    <li class="bor18">
                        <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                            Reviews
                        </a>
                    </li>

                    <li class="bor18">
                        <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                            Shopcart
                        </a>
                    </li>

                    <li class="bor18">
                        <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                            Messages
                        </a>
                    </li>

                    <li class="bor18">
                        <a href="{{route('logout')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4">
                            Logout
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
        </div>
    </section>
@endsection
