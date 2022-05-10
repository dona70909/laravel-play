@extends('layouts.base')

@section("title","Home")

@section('header-nav')
    @include('partials.header.header_nav')
@endsection

@section('main-content')
    @include('partials.main.main_products')
@endsection