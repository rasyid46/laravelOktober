@extends('layouts.app')
@section('content')
    <section class="tm-section">
    <form action="{{route('articles.store')}}" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}

  <div class="form-group">
    <label>title</label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Enter title">
    <div class="text-danger">{!! $errors->first('title') !!}</div>

  </div>
  <div class="form-group">
    <label>content</label>
    <input type="text" name="content" class="form-control" id="content" placeholder="Enter content">
    <div class="text-danger">{!! $errors->first('content') !!}</div>

  </div>
  <div class="form-group">
    <label>author</label>
    <input type="text" name="author" class="form-control" id="author" placeholder="Enter author">
    <div class="text-danger">{!! $errors->first('author') !!}</div>
  </div>

  <div class="form-group">
    <label>article_image</label>
    <input type="file" name="article_image" class="form-control" id="article_image" placeholder="Enter article_image">
    <div class="text-danger">{!! $errors->first('article_image') !!}</div>
  </div>
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
    </section>    
@endsection

        