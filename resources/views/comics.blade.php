@extends('layouts.layout')
@section('pageTitle') Laravel Comics @endsection

@section('content')
<div id="main-comics">
    <div class="jumbotron">
        <img src="{{Vite::asset('resources/img/jumbotron.jpg')}}" alt="">      
    </div>

    <div class="container">
        <h1>CURRENT SERIES</h1>

        <div class="cards">
            <div class="img-series">
                <img :src="src" :alt="title">
            </div>
            <p>ciao</p>
        </div>

        <div class="load">
            <button><a href="#">LOAD MORE</a></button>
        </div>
    </div>
</div>

@endsection
