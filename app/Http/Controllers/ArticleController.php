<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function myFunction(){
        
    //    $mes_articles = DB::table('articles')->get();
       
    $mes_articles =  Article::all();

    //    dd($mes_articles);

        return view('articles/articles', [
            'mes_donnees_a_afficher'=>$mes_articles
        ]);
    }


    public function afficher_details($id){
        // $article = DB::table('articles')->where('id', $id)->get();
        $article = Article::find($id);
        

        return view('articles/details', ['article'=>$article]);
    }
}
