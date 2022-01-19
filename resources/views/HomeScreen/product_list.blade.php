
        <div class="row isotope-grid">
            @foreach($data['products'] as $rs)
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                <div class="block2">
                    <div class="block2-pic hov-img0">
                        <img src="{{Storage::url($rs->image)}}" alt="IMG-PRODUCT">

                        <a href="{{route('addtocart',['id'=>$rs->id])}}"
                           class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04">
                            Add To Cart
                        </a>
                    </div>

                    <div class="block2-txt flex-w flex-t p-t-14">
                        <div class="block2-txt-child1 flex-col-l ">
                            <a href="{{route('product_detail',['id'=>$rs->id])}}"
                               class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                {{$rs->title}}
                            </a>

                            <span class="stext-105 cl3">
									{{$rs->price}}
								</span>
                        </div>

                        <div class="block2-txt-child2 flex-r p-t-3">
                            <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                <img class="icon-heart1 dis-block trans-04" src="{{asset('assets')}}/images/icons/icon-heart-01.png"
                                     alt="ICON">
                                <img class="icon-heart2 dis-block trans-04 ab-t-l"
                                     src="{{asset('assets')}}/images/icons/icon-heart-02.png" alt="ICON">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
