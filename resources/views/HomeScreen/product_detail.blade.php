@extends('HomeScreen.master') @section('title',$setting->title) @section('description',$setting->description) @section('keywords',$setting->keywords) @section('content')
<!-- Product Detail -->
<section class="sec-product-detail bg0 p-t-65 p-b-60">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-lg-7 p-b-30">
        <div class="p-l-25 p-r-30 p-lr-0-lg">
          <div class="wrap-slick3 flex-sb flex-w">
            <div class="wrap-slick3-dots"></div>
            <div class="wrap-slick3-arrows flex-sb-m flex-w"></div>
            <div class="slick3 gallery-lb"> @foreach(\App\Models\Image::where('product_id',$product->id)->get() as $photo) <div class="item-slick3" data-thumb="{{Storage::url($photo->image)}}">
                <div class="wrap-pic-w pos-relative">
                  <img src="{{Storage::url($photo->image)}}" alt="IMG-PRODUCT">
                  <a class="flex-c-m size-108 how-pos1 bor0 fs-16 cl10 bg0 hov-btn3 trans-04" href="{{Storage::url($photo->image)}}">
                    <i class="fa fa-expand"></i>
                  </a>
                </div>
              </div> @endforeach </div>
          </div>
        </div>
      </div>
      <div class="col-md-6 col-lg-5 p-b-30">
        <div class="p-r-50 p-t-5 p-lr-0-lg">
          <h4 class="mtext-105 cl2 js-name-detail p-b-14">
            {{$product->title}}
          </h4>
          <span class="mtext-106 cl2">
            {{$product->price}}₺ </span>
          <div class="flex-w flex-r-m p-b-10">
            <div class="size-204 flex-w flex-m respon6-next">
              <div class="wrap-num-product flex-w m-r-20 m-tb-10">
                <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                  <i class="fs-16 zmdi zmdi-minus"></i>
                </div>
                <input class="mtext-104 cl3 txt-center num-product" type="number" name="num-product" value="1">
                <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                  <i class="fs-16 zmdi zmdi-plus"></i>
                </div>
              </div>
                <a href="{{route('addtocart',['id'=>$product->id])}}">
                    <button class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail"> Add to cart </button>
                </a>

            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="bor10 m-t-50 p-t-43 p-b-40">
      <!-- Tab01 -->
      <div class="tab01">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item p-b-10">
            <a class="nav-link active" data-toggle="tab" href="#description" role="tab">Description</a>
          </li>
          <li class="nav-item p-b-10">
            <a class="nav-link" data-toggle="tab" href="#reviews" role="tab">Reviews ({{$reviews->count()}})</a>
          </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content p-t-43">
          <!-- - -->
          <div class="tab-pane fade show active" id="description" role="tabpanel">
            <div class="how-pos2 p-lr-15-md">
              <p class="stext-102 cl6">
                {{$product->description}}
              </p>
            </div>
          </div>
          <!-- - -->
          <div class="tab-pane fade" id="reviews" role="tabpanel">
            <div class="row">
              <div class="col-sm-10 col-md-8 col-lg-6 m-lr-auto">
                <div class="p-b-30 m-lr-15-sm">
                  <!-- Review -->
                  <div> @foreach($reviews as $rs)
                    <div class="flex-w flex-t p-b-68">
											<div class="wrap-pic-s size-109 bor0 of-hidden m-r-18 m-t-6">
												<img src="{{Storage::url($rs->user->profile_photo_path)}}" alt="AVATAR">
											</div>

											<div class="size-207">
												<div class="flex-w flex-sb-m p-b-17">
													<span class="mtext-107 cl2 p-r-20">
														{{$rs->user->name}}
													</span>
												</div>
                        <h4>{{$rs->subject}}</h4>
												<p class="stext-102 cl6">
													{{$rs->review}}
												</p>
											</div>
										</div>
@endforeach
@auth()
                          @livewire('review', ['id' => $product->id])
                      @elseauth()
                      @endauth
                      @guest()
                          <p>Yorum yapmak için giriş yapmanız gerekiyor. Giriş yapmak için <a href="{{ route('login') }}">buraya</a> tıklayın.</p>

                      @endguest
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</section> @endsection
