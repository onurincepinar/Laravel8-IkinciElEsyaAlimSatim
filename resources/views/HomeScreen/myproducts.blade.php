@extends('HomeScreen.master') @section('title',$setting->title) @section('description',$setting->description) @section('keywords',$setting->keywords) @section('content') <section class="bg0 p-t-62 p-b-60">
    <div class="container">
      <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">My Products</h4>
              <p class="card-description"></p>
              <div class="card">
                <div class="card-body">
                  <a href="{{route('product_add')}}" class="card-header">Add a new product</a>
                  <div class="table-responsive pt-3">
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> Id </th>
                          <th> Image </th>
                          <th> Product </th>
                          <th> Category </th>
                          <th> Price </th>
                          <th> Image Gallery </th>
                          <th> Status </th>
                          <th> Date </th>
                        </tr>
                      </thead>
                      <tbody> @foreach($products as $key=>$rs) <tr class="tabl  e table-bordered">
                          <td>
                            {{$key+1}}
                          </td>
                          <td>
                            <img src="{{Storage::url($rs->image)}}" style="min-height:60px;width: 60px" alt="">
                          </td>
                          <td>
                            {{$rs->title}}
                          </td>
                          <td>
                            {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                        </td>
                          <td>
                              {{$rs->price}}
                          </td>
                          <td>
                            <a href="{{route('image_add',$rs->id)}}" onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                <img src="{{asset('assets/admin/icons')}}/gallery-add.png" style="max-height: 70px"></a>
                        </td>
                          <td>
                              {{ $rs->status }}
                          </td>
                          <td>
                            {{$rs->updated_at}}
                          </td>
                        </tr> @endforeach </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <div class="template-demo"></div>
            </div>
          </div>
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
              <h4 class="mtext-112 cl2 p-b-33"> User Panel </h4>
              <ul>
                <li class="bor18">
                  <a href="{{route('myprofile')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Profile </a>
                </li>
                  <li class="bor18">
                      <a href="{{route('myproducts')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> My Products </a>
                  </li>
                <li class="bor18">
                  <a href="{{route('orders_product')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Orders </a>
                </li>
                <li class="bor18">
                  <a href="{{route('myreviews')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Reviews </a>
                </li>
                <li class="bor18">
                  <a href="{{route('shopping_cart')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Shopcart </a>
                </li>
                <li class="bor18">
                  <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Messages </a>
                </li>
                <li class="bor18">
                  <a href="{{route('logout')}}" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Logout </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> @endsection
