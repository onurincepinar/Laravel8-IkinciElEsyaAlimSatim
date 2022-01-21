@extends('HomeScreen.master')
@section('script') 

@endsection
@section('title',$setting->title) @section('description',$setting->description) @section('keywords',$setting->keywords) @section('content') <section class="bg0 p-t-62 p-b-60">
    <div class="container">
      <div class="row">
        <div class="col-md-10 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Reviews</h4>
              <p class="card-description"></p>
              <div class="card">
                <form class="forms-sample" action="{{route('seller_product_store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label >Category</label>
                        <select class="form-control" name="category_id">

                            @foreach($datalist as $rs)
                                <option value="{{$rs->id}}"> {{\App\Http\Controllers\Admin\CategoryController::getParentsTree($rs,$rs->title)}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label >Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Title">
                    </div>
                    <div class="form-group">
                        <label >Keywords</label>
                        <input type="text" name="keywords" class="form-control" placeholder="Keywords">
                    </div>
                    <div class="form-group">
                        <label >Description</label>
                        <input type="text" name="description" class="form-control" placeholder="Description">
                    </div>
                    <div class="form-group">
                        <label >Price</label>
                        <input type="number" name="price" value="0" class="form-control" placeholder="Price">
                    </div>
                    <div class="form-group">
                        <label >Quantity</label>
                        <input type="number" name="quantity" class="form-control" value="1" placeholder="Quantity">
                    </div>
                    <div class="form-group">
                        <label >Minimum Quantity</label>
                        <input type="number" name="minquantity" value="5" class="form-control" placeholder="Minimum Quantity">
                    </div>
                    <div class="form-group">
                        <label >Tax</label>
                        <input type="number" name="tax" value="18" class="form-control" placeholder="Tax">
                    </div>
                    <div class="form-group">
                        <label >Detail</label>
                        <textarea id="summernote" name="detail"></textarea>
                        <script>
                            $(document).ready(function() {
                                $('#summernote').summernote();
                            });
                        </script>
                    </div>
                    <div class="form-group">
                        <label >Slug</label>
                        <input type="text" name="slug" class="form-control" placeholder="Slug">
                    </div>

                   <div class="form-group">
                       <label>Image</label>
                       <input type="file" name="image" class="form-control">
                   </div>

                    <div class="form-group">
                        <label >Status</label>
                        <select class="form-control" name="status" >
                            <option>False</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary mr-2">Add Product</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
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
                  <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Orders </a>
                </li>
                <li class="bor18">
                  <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Reviews </a>
                </li>
                <li class="bor18">
                  <a href="#" class="dis-block stext-115 cl6 hov-cl1 trans-04 p-tb-8 p-lr-4"> Shopcart </a>
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