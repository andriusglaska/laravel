<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ShowPage extends Controller
{
public function __invoke($pageTitle){

  if(\View::exists($pageTitle)){
    return view($pageTitle);
  }
      abort (404);

      //ar tks view egzistuoja
      //jeigu views'o nera ismesti klaidos langa 404 error

        //abort(404);
    // return view($pageTitle);
    }

}
