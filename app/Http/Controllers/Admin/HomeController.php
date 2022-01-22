<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class HomeController extends Controller
{
    public function index(){
        return view('admin.index');
    }
    public function status($id, $status)
    {
        $review = Review::find($id);
        if($status == "disable"){
            $review->status = "New";
        }
        else{
            $review->status = "Old";
        }
        $review->save();
        return redirect()->back();
    }

    public function reviews()
    {
        return view('admin.reviews')->with('reviews',\App\Models\Review::orderBy("status")->get());
    }
    public function delete($id)
    {
        $data = Review::find($id);
        $data->delete();
        return redirect()->back();
    }
}
