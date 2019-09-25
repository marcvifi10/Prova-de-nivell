<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Llibre;
use App\Franchise;
use App\Order;
use App\Autor;
use App\Editorial;
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
  
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    
    public function llibres() 
    {

            $llibres = Llibre::get();

		    return view("frontend.llibres.cataleg",compact('llibres'));
    }
	
	public function editorials() 
    {

            $editorials = Editorial::get();

		    return view("frontend.editorials.cataleg",compact('editorials'));
    }
	
	 public function autors() 
    {

            $autors = Autor::get();

		    return view("frontend.autors.cataleg",compact('autors'));
    }
	
	public function llibresCategoria($nom) 
    {

         $llibres = Llibre::where('autor',$nom)->get();

		 return view("frontend.llibresCategoria.cataleg",compact('llibres'));
		
    }
	
	
	
	public function llibresInferiors15() 
    {

            $llibres = Llibre::where('preu', '<', 15)->get();

		   return view("frontend.llibresInferiors15.cataleg",compact('llibres'));
    }
	
	public function llibresIVA()
	{
		$llibres = Llibre::get();
		
		return view("frontend.llibresIVA.cataleg",compact('llibres'));
	}
	
	public function EditorialsCategoria(Request $nom) 
    {

            $editorials = Editorial::where('autor',$nom)->get();

		   return view("frontend.editorialsCategoria.cataleg",compact('editorials'));
    }

}
