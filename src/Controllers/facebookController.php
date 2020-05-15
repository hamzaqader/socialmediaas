<?php
namespace usama165\facebook\Controllers;
use App\Http\Controllers\Controller;
class facebookController extends Controller{

    
     public function index(){
         return view('used::home');
     }
}