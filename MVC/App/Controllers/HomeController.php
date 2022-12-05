<?php
namespace App\Controllers;
class HomeController{
    public function index(){
        return view('dashboard.index',['name'=>'mai']);
        // return abort(405);
    }
    public function create(){
        echo "create";
    }
}