<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Llibre;
use App\Autor;
use App\ProductCategory;
use App\Ingredient;
use Illuminate\Support\Facades\Validator;

class AutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$autors = Autor::get();
		return view("backend.autors.index", compact("autors"));
    }
	
}
