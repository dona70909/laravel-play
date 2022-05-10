@extends('layouts.base')

@section("title","Basket")

@section('header-nav')
    @include('partials.header.header_nav')
@endsection

@section('main-content')
    @include('partials.main.main_basket')
@endsection