@extends('layouts.app')
@section('content')
<section class="tm-section">
    <?php
        $user =Sentinel::getUser();
        $role = $user->roles()->first()->slug;
    ?>
    Selamat datang {{$role}}  : {{$user->first_name}} {{$user->last_name}}  
</section>    
@endsection

        