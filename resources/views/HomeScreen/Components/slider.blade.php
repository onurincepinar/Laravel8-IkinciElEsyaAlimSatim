<!-- Slider -->
<section class="section-slide">

    <div class="wrap-slick1">

        <div class="slick1">
            @foreach($data['slider'] as $rs)
            <div class="item-slick1" style="background-image: url({{Storage::url($rs->image)}});  ">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
								<span class="ltext-101 cl2 respon2">
									{{$rs->title}}
								</span>
                        </div>

                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="{{route('product_detail',$rs->id)}}"
                               class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                {{$rs->price}}₺
                            </a>

                        </div>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
