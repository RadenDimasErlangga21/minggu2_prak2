<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function ArticleClass($id){
        return 'Halaman Artikel Dengan id '.$id;
    }
}
