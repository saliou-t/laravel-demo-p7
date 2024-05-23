<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function myFunction(){
        
        $mes_articles = [
            [
                'id'=>1,
                'nom'=>'un premier article',
                'image_url'=>'https://place-hold.it/300',
                'description'=>'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsam asperiores nemo consectetur quos, ab quasi inventore expedita commodi, non fuga, eaque repudiandae quae ex molestiae dignissimos aut tenetur quidem magni!'
            ],

            [
                'id'=>2,
                'nom'=>'un second article',
                'image_url'=>'https://place-hold.it/300',
                'description'=>'Lorem 2 ipsum dolor sit amet consectetur adipisicing elit. Ipsam asperiores nemo consectetur quos, ab quasi inventore expedita commodi, non fuga, eaque repudiandae quae ex molestiae dignissimos aut tenetur quidem magni!'
            ],

            [
                'id'=>3,
                'nom'=>'un troisieme article',
                'image_url'=>'https://place-hold.it/300',
                'description'=>'Lorem 3 ipsum dolor sit amet consectetur adipisicing elit. Ipsam asperiores nemo consectetur quos, ab quasi inventore expedita commodi, non fuga, eaque repudiandae quae ex molestiae dignissimos aut tenetur quidem magni!'
            ],

            [
                'id'=>4,
                'nom'=>'un quatrieme article',
                'image_url'=>'https://place-hold.it/300',
                'description'=>'Lorem 4 ipsum dolor sit amet consectetur adipisicing elit. Ipsam asperiores nemo consectetur quos, ab quasi inventore expedita commodi, non fuga, eaque repudiandae quae ex molestiae dignissimos aut tenetur quidem magni!'
            ],
        ];

        $ma_variable = array_map(function($item){
            return (object) $item;
        }, $mes_articles);

       
      

        return view('articles/articles', ['mes_donnees_a_afficher'=>$ma_variable]);
    }
}
