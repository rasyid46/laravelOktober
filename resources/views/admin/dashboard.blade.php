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
        Selamat datang admin
    </section>    
@endsection

        