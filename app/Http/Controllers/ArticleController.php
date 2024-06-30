<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Auteur;
use App\Models\Categorie;
use DB;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles=DB::select("select * from articles a join categories c on a.categorie=c.id join auteurs au on a.auteur=au.id where a.isdeleted=false order by a.id desc");
        return view("articles.liste", compact('articles'));
     }
     public function form(){
        $categories=DB::select("select * from categories where isdeleted=false order by id desc");
        $auteurs=DB::select("select * from auteurs where isdeleted=false order by id desc");
        return view('articles.form', compact('categories','auteurs'));
     }
  
     public function save(Request $request){
       Article::create($request->all());
       return redirect('/article/index');
     }
  
     public function formEdit($id){
      
     }
  
     public function edit(Request $request){
       
     }
  
     public function delete(Request $request){
  
  
     }
     
}
