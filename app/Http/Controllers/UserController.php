<?php

namespace App\Http\Controllers;

use App\Models\Review;
use App\Models\User;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\orders_product;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('HomeScreen.user_profile');
    }

    public function product_add()
    {
        $datalist = Category::with('children')->get();
        return view('HomeScreen.product_add')->with('datalist',$datalist);
    }

    public function product_store(Request $request)
    {
        $data= new Product;
        $data->title = $request->input('title');
        $data->keywords = $request->input('keywords');
        $data->description = $request->input('description');
        $data->slug = $request->input('slug');
        $data->status = $request->input('status');
        $data->category_id= $request->input('category_id');
        $data->user_id= Auth::id();
        $data->price= $request->input('price');
        $data->quantity= $request->input('quantity');
        $data->minquantity= $request->input('minquantity');
        $data->tax= (int)$request->input('tax');
        $data->detail= $request->input('detail');
        $data->image= Storage::putFile('images',$request->file('image'));

        $data->save();
        return redirect()->back();
    }

    public function image_add($product_id)
    {
        $data=Product::find($product_id);
        $images = DB::table('images')->where('product_id','=',$product_id)->get();
        return view('HomeScreen.seller_image_add', ['data' => $data,'images'=>$images]);
    }

    public function products()
    {
        $uid = Auth()->user()->id;
        $products = Product::where('user_id',$uid)->get();
        return view('HomeScreen.myproducts')->with('products',$products);
    }

    public function myreviews(){
        $datalist = Review::orderBy("status")->where('user_id','=',Auth::user()->id)->get();
        return view('HomeScreen.user_reviews')->with('reviews',$datalist);
    }

    public function destroymyreview(Review $review,$id){
        $data=Review::find($id);
        $data->delete();

    }

    public function orders_product()
    {
        $orders_product = orders_product::where('user_id',Auth()->user()->id)->get();
        return view("HomeScreen.user_shopping_history")->with('orders_product',$orders_product);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
