@extends('layouts.base')

@section("title","Login")

@section('header-nav')
    @include('partials.header.header_nav')
@endsection

@section('main-content')
    @include('partials.main.main_login_form')
@endsection