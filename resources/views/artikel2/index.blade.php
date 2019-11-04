@extends('layout.master')
@section('content')
<style>
 ul.pagination li {
    display: inline;
    font-size: 12px;
    font-weight: bold;
}

ul.pagination li a {

    color: black;
    padding: 8px 8px;
    text-decoration: none;
    transition: background-color .3s;
    border: 1px solid #ddd;
    margin: 4px;
}

ul.pagination li a.active {
    background-color: #4CAF50;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
}

ul.pagination li.active {
    /*background-color: #4CAF50;*/
    background-color: #687282;
    padding: 8px 8px;
    margin: 4px;
    color: white;
    border: 1px solid #4CAF50;
}

/*ul.pagination li a:hover:not(.active) {background-color: #ddd;}*/
ul.pagination li a:hover {background-color: #999999;}

ul.pagination li.disabled {
    /*background-color: #cccccc;*/
    color: #ddd;
    padding: 8px 8px;
    border: 1px solid #ddd;
    margin: 4px;
}
</style>
<div class="tm-about-img-container">
            
    </div>

    <section class="tm-section">
        <div class="container-fluid">
            <div class="row tm-2-rows-sm-swap">
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-3 col-xl-3 tm-2-rows-sm-down-2">
                    
                    <h3 class="tm-gold-text">Sidebar Links</h3>
                    
                    <nav>
                        <ul class="nav">
                            <li><a href="#" class="tm-text-link">Halaman List Buku</a></li>
                            <li><a href="#" class="tm-text-link">Halaman List Buku</a></li>
                            <li><a href="#" class="tm-text-link">Halaman List Buku</a></li>
                            <li><a href="#" class="tm-text-link">Halaman List Buku</a></li>
                            <li><a href="#" class="tm-text-link">Halaman List Buku</a></li>
                            <li><a href="#" class="tm-text-link">Halaman List Buku</a></li>
                        </ul>
                    </nav>   

                </div>

                <div class="col-xs-12 col-sm-12 col-md-8 col-lg-9 col-xl-9 tm-2-rows-sm-down-1">
                    <div class="row">
                        <div class="col-xs-9 col-sm-9 col-md-9">
                            <h3 class="tm-gold-text">Tabel list Artikel</h3>
                        </div>
                        <div class="col-xs-3 col-sm-3 col-md-3">
                            <span>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="{{ route('about.create')}}"><button class="btn btn-primary">Tambah Data Buku</button></a>
                            </span>
                        </div>
                    </div>
                    <br/>    
                        <table class="table table-striped" style="width:100%;">
                            <tr>
                                <th>ID</th>
                                <th>title</th>
                                <th>content</th>
                             
                            </tr>
                            @foreach ($articles as $data)
                            <tr>
                                <td>{!! $data->id !!}</td>
                                <td>{!! $data->title !!}</td>
                                <td>{!! $data->content !!}</td> 
                              
                            </tr>        
                            @endforeach

                        </table>
                        <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link" href="#">Next</a></li>
  </ul>
</nav>
            {!! $articles->links() !!}
                </div>
            </div>
            <div class="row tm-margin-t-mid">
                <div class="col-xs-12">
                    
                </div>
            </div>

            <div class="row tm-margin-t-mid">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 tm-sm-m-b">
                    
                </div>

                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
                    
                </div>

            </div>

            <div class="row tm-margin-t-mid">
                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <div class="tm-content-box">
                        <img src="img/tm-img-310x180-1.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #1</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                        consequat mauris dapibus id. Donec
                        scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Detail</a>    
                    </div>  

                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <div class="tm-content-box">
                        <img src="img/tm-img-310x180-2.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #2</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                        consequat mauris dapibus id. Donec
                        scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Read More</a>    
                    </div>  

                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <div class="tm-content-box">
                        <img src="img/tm-img-310x180-3.jpg" alt="Image" class="tm-margin-b-30 img-fluid">
                        <h4 class="tm-margin-b-20 tm-gold-text">Lorem ipsum dolor #3</h4>
                        <p class="tm-margin-b-20">Aenean cursus tellus mauris, quis
                        consequat mauris dapibus id. Donec
                        scelerisque porttitor pharetra</p>
                        <a href="#" class="tm-btn text-uppercase">Detail</a>    
                    </div>  

                </div>

                <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3 col-xl-3">

                    <div class="tm-content-box tm-margin-b-30">
                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #1</h4></a>
                        <p class="tm-margin-b-30">Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p><hr>
                    </div>
                    <div class="tm-content-box">
                        <a href="#" class="tm-text-link"><h4 class="tm-margin-b-20 tm-thin-font">Duis sit amet tristique #2</h4></a>
                        <p>Vestibulum arcu erat, lobortis sit amet tellus ut, semper tristique nibh. Nunc in molestie elit.</p>
                        
                    </div>  

                </div>
            </div> <!-- row -->

        </div>
    </section>    
@endsection

        