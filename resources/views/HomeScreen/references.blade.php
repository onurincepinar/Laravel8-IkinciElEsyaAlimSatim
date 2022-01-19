@extends('HomeScreen.master')
@section('title',$setting->title)
@section('description',$setting->description)
@section('keywords',$setting->keywords)
@section('content')
    <!-- Title page -->
    <section class="bg-img1 txt-center p-lr-15 p-tb-92" style="background-image: url('{{ asset('assets')}}/images/bg-01.jpg');">
        <h2 class="ltext-105 cl0 txt-center">
            References
        </h2>
    </section>
    <!-- Content page -->
    <section class="bg0 p-t-75 p-b-120">
        <div class="container">
            <div class="row p-b-148">
                <div class="col-md-7 col-lg-8">
                    <div class="p-t-7 p-r-85 p-r-15-lg p-r-0-md">
                        <h3 class="mtext-111 cl2 p-b-16">
                            References
                        </h3>
                        <div>
                            {!! $setting->references !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
