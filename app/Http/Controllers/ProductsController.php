<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\products;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware("products_post");
    }

    public function index()
    {
        return view("products.index", ["data"=>Products::get()]);
    }

    public function create()
    {
    	return view("products.create");
    }

    public function store(Request $req)
    {
    	products::create([
    		"title"=>$req->input("title"),
    		"text"=>$req->input("text"),
    		"short_description"=>$req->input("short-description"),
    	]);

        return redirect()->action("ProductsController@index") ;
    }
}
