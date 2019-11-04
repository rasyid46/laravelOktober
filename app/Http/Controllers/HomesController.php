<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class HomesController extends Controller
{
    public function index(){
        return view('artikel/profile');
    }

    public function post(){
        $articles = Article::all();
        return view('artikel/post')->with('articles', $articles);
    }

    public function newForm(){
        return view('eloquent/form_article');
    }

    public function store(Request $request){
        Article::create($request->all());
        return redirect()->route('blog');        
    }

    public function editForm($id){
        $articles = Article::find($id);

        return view('eloquent/edit_article')->with('article',$articles);
    }

    public function updateForm(Request $request, $id){
        Article::find($id)->update($request->all());
        return redirect()->route('blog');
    }

    public function hapus($id){
        Article::destroy($id);
        return redirect()->route('blog');
    }

    public function about(){
        return view('artikel/about');
    }

    public function contact(){
        return view('artikel/contact');
    }

    public function simpan(Request $request){
        $nama = $request->input('contact_name');
        $email = $request->input('contact_email');
        $subject = $request->input('contact_subject');
        $message = $request->input('contact_message');
        return "nama :".$nama."<br>"." Email : ".$email."<br>"." Subject :".$subject."<br>"." Message : ".$message;
    }
}
