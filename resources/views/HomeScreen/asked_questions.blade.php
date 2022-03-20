@extends('HomeScreen.master')
@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('assets')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            Frequently Asked Questions
        </h2>
    </section>


    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            Frequently Asked Questions
                        </h3>

                        @foreach($datalist as $rs)
                        <div class="container">
                            <div class="accordion" id="accordionExample{{$rs->id}}">
                                <div class="item">
                                    <div class="item-header" id="headingOne{{$rs->id}}">
                                        <h2 class="mb-0">
                                            <button class="btn btn-link" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne{{$rs->id}}" aria-expanded="true" aria-controls="collapseOne{{$rs->id}}">
                                                {!! $rs->question !!}
                                                <i class="fa fa-angle-down"></i>
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseOne{{$rs->id}}" class="collapse show" aria-labelledby="headingOne{{$rs->id}}"
                                         data-parent="#accordionExample{{$rs->id}}">
                                        <div class="t-p">
                                          {!! $rs->answer !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
@endsection
