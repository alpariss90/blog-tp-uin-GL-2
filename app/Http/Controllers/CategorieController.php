<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
   public function index(){
      $categories=DB::select("select * from categories where isdeleted=false order by id desc");
      return view("categories.liste", compact('categories'));
   }
   public function form(){
      return view('categories.form');
   }

   public function save(Request $request){
       //$categorie=new Categorie();
       //$categorie->libelle=$request->libelle;
       Categorie::create($request->all());
       return redirect('/categorie/index');
   }

   public function formEdit($id){
      $categorie=Categorie::find($id);
      return view('categories.formEdit', compact('categorie'));
   }

   public function edit(Request $request){
      $categorie=Categorie::find($request->id);
      $categorie->libelle=$request->libelle;
      $categorie->save();
      return redirect('/categorie/index');
   }

   public function delete(Request $request){

      DB::statement('update categories set isdeleted=true where id=?', [$request->id]);
      return redirect('/categorie/index');

   }
   


}
