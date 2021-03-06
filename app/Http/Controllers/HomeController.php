<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Admin\Entities\Category;
use Modules\Admin\Entities\Product;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $view['categories'] = Category::whereStatus('Enabled')->orderBy('name')->get();
        $view['products'] = Product::whereStatus('Enabled')->whereHas('category', function($q){
            $q->whereStatus('Enabled');
        })->latest()->limit(6)->get();
        return view('home')->with($view);
    }
}
