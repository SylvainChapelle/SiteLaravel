<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
//use Illuminate\Http\Request;

//use App\Http\Requests\Request;

use App\Link;
use Illuminate\Support\Facades\Request;

class LinkController extends Controller{

    public function listLink(){

        $links=Link::all();
        //permet de transmettre des donnees dans la vue
        return view('link/listlink')->with('links',$links);
    }

    public function addLink(){
        return view('link/addLink');
    }

    public function  createLink(Request $req){
        $param=$req::all();
        $link=new Link();
        $link->nom=$param['nom'];
        $link->url=$param['lien'];
        $link->description=$param['description'];
        $link->save();
        //var_dump($param);
        return redirect()->route('listLink');
    }
}