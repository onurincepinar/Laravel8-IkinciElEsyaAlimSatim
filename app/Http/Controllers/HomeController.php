<?php

namespace App\Http\Controllers;

use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Image;
use App\Models\Message;
use App\Models\Setting;
use \App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use MongoDB\Driver\Session;

class HomeController extends Controller
{


    public static function categorylist()
    {
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }


    public function index($category = null, $subcategory = null)
    {
        //slider
        $setting = Setting::first();
        $slider = Product::select('id', 'title', 'image', 'price', 'slug')->limit(3)->get();
        $last = Product::select('id', 'title', 'image', 'price', 'slug')->limit(3)->get();
        $product = Product::all();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'products' => $product,
            'last' => $last,
            'page' => 'home'

        ];
        return view('HomeScreen.index')->with('data', $data);
    }

    //sliderda geçen ürüne gözatma
    public function addtocart($id)
    {
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    public function product($id)
    {
        $data = Product::find($id);
        print_r($data);
        exit();
    }

    //ürünleri listeleme
    public function product_category($id)
    {
        //kategoriye ait ürünler
        $datalist = Product::where('category_id', $id)->get();
        //kategori bilgisi
        $data = Category::find($id);
        //print_r($data);
        //exit();
        return view('HomeScreen.index', ['data' => $data, 'datalist' => $datalist]);
    }

    public function product_detail($id)
    {
        $product_detail = Product::find($id);
        //$datalist=Image::where('product_id',$id)->get();
        $reviews =Review::where('product_id', $id)->get();
        return view('HomeScreen.product_detail')->with('product', ['$product_detail' => $product_detail, 'reviews' => $reviews]);
    }


    public function getproduct(Request $request)
    {
        $data = Product::where('title', $request->input('search'))->first();
        return redirect()->route('product_detail', ['id' => $data->id]);
    }

    public function about()
    {
        return view('HomeScreen.about');

    }

    public function contact()
    {
        return view('HomeScreen.contact');

    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();

        return redirect()->route('contact')->with('succes', 'Message added succesfully!');

    }

    public function references()
    {
        return view('HomeScreen.references');

    }

    public function asked_questions()
    {
        return view('HomeScreen.asked_questions');
    }

    public function login()
    {
        return view('admin.login');
    }


    public function logincheck(Request $request, $role = '')
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();
                if ($role == 'user') {
                    return redirect('/');
                }
                return redirect()->intended('admin');
            }
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records',
            ]);
        } else {
            return redirect('admin.login');
        }
    }

    public function logout(Request $request, $role = '')
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        if ($role == 'user') {
            return redirect('/');
        }
        return redirect('/admin/login');
    }
    /*
    public function logout( Request $request )
    {
        if(Auth::guard('admin')->check())
        {
            Auth::guard('admin')->logout();
            return redirect()->route('admin.login');
        }

        $this->guard()->logout();
        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect('/');
    }
*/
    /*public function login(){
        return view('admin.login');
    }*/


}
