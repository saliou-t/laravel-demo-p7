<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Request;

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
        // $article = Article::find($id);
        $article = Article::findOrFail($id);

        return view('articles/details', ['article'=>$article]);
    }
    
    public function ajouter_article(Request $request) {
        $article = new Article();
        $article->nom = $request->nom;
        $article->description= $request->description;
        $article->url_image= $request->image_url;
        $article->categorie= $request->categorie;

        $article->save();

         $mes_articles =  Article::all();

        //    dd($mes_articles);
    
            return view('articles/articles', [
                'mes_donnees_a_afficher'=>$mes_articles
            ]);
    }
}
