<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Pizza;
use Illuminate\Http\Request;

class ApiPizzaController extends Controller
{
    public function index(){
         $pizzas = Pizza::all();
    
    //oppure per avere anche le relazioni
    
        // $pizzas = Pizza::with('ingredient')->get();
    
    //oppure per avere tot(3) elementi per pagina 
    
        // $posts = Pizza::with('','')->paginate(3);
    
        return response()->json([
            'success' => true,
            'pizzas' => $pizzas
        ]);
    }
}
