<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::take(12)->get();
        $categories= Category::wherenull('parent_id')->get();
        return view('home')->with('product', $products)->with('categories',$categories);
    }
}
