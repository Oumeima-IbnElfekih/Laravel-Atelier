<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {       $id = Auth::id();
        $prod = DB::table('products')
            ->join('user_products', 'user_products.product_id', '=', 'products.id')
            ->join('users', 'user_products.user_id', '=', 'users.id')
            ->where('user_products.user_id', '=', $id)
            ->select('products.*')
            ->get();
        return view('home',['prod'=>$prod]);
    }
}
