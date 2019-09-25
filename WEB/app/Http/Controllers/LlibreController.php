<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Llibre;
use App\ProductCategory;
use App\Ingredient;
use Illuminate\Support\Facades\Validator;

class LlibreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$llibres = Llibre::get();
		return view("backend.products.index", compact("llibres"));
    }
	
	public function index2($nom)
    {
		$llibres = Llibre::get();
		return view("backend.products.index", compact("llibres"));
    }
	
}
