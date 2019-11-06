@extends('layouts.app')
@section('content')
<style>
 ul.pagination li {
    display: inline; font-size: 12px;  font-weight: bold;
}
ul.pagination li a {
    color: black;    padding: 8px 8px;
    text-decoration: none;    transition: background-color .3s;
    border: 1px solid #ddd;    margin: 4px;
}
ul.pagination li a.active {
    background-color: #4CAF50;    padding: 8px 8px;
    margin: 4px;    color: white;
    border: 1px solid #4CAF50;
}
ul.pagination li.active {
    background-color: #687282;   padding: 8px 8px;
    margin: 4px;    color: white;    border: 1px solid #4CAF50;
}
ul.pagination li a:hover {background-color: #999999;}
ul.pagination li.disabled {
    color: #ddd;    padding: 8px 8px;
    border: 1px solid #ddd;    margin: 4px;
}
</style>
 

    <section class="tm-section">
                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <h3 class="tm-gold-text">Tabel list Artikel</h3>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <span>
                                 <!-- <a href="{{ route('articles.create')}}"><button class="btn btn-primary">Tambah Data Buku</button></a> -->
                            </span>
                        </div>
                    </div>
                    <br/>   
                    <form action="{{route('articles.index')}}" method="get" class="tm-contact-form">
                {{ csrf_field() }}{{ method_field('post')}}
                <div class="form-group">
                    <input type="text"  name="content" class="form-control" placeholder="content" />
                </div>
                 <button type="submit" class="tm-btn">Cari</button>                          
                </form>   
                <table class="table table-striped" style="width:100%;">
                    <tr>
                        <th>ID</th>
                        <th>title</th>
                        <th>content</th>
                        <th>Detail</th>
                        
                    </tr>
                    @foreach ($articles as $data)
                    <tr>
                        <td>{!! $data->id !!}</td>
                        <td>{!! $data->title !!}</td>
                        <td>{!! $data->content !!}</td> 
                        <td> <a href=" {{route('articles.show',$data->id)}}">detail</a> </td> 
                       
                    </tr>        
                    @endforeach

                </table>
                    {!! $articles->links() !!}
                </div>
            
         
    </section>    
@endsection

        