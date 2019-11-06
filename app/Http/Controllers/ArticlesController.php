<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Http\Requests\ArticleRequest;
class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct() {
        // $this->middleware('sentinel');
    }
    public function index(Request $request)
    {
        $content = $request->input('content');
        if(!empty($content)){
            $articles = Article::Where('title', 'like', '%' . $content . '%')->orWhere('content', 'like', '%' . $content . '%')->paginate(10);
        }else{
            $articles = Article::orderBy('updated_at', 'desc')->paginate(10);
        }

       return view('artikel2/index')->with('articles',$articles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('artikel2/form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $pathImage = '/images/article/';

        $modelArtice = new Article();
        if($request->article_image){ 

            $article_image = 'image_article-'.str_random(5).time().'.'.$request->file('article_image')->getClientOriginalExtension();
            $request->article_image->move(public_path('images/article/'), $article_image);
            $modelArtice->article_image = $article_image;
        }
        $title = $request->get('title');
        $content = $request->get('content');
        $author = $request->get('author');
       
        $modelArtice->title = $title;
        $modelArtice->content = $content;
        $modelArtice->author = $author;
        $modelArtice->save();
        // Article::create($request->all());
        return redirect()->route('articles.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $article = Article::find($id);
        $comments = Article::find($id)->comments->sortBy('Comment.created_at');
        return view('artikel2/show')->with('article',$article)->with('comments',$comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
