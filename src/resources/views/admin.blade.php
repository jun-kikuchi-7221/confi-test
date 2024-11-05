@extends('layouts.app')

@section('header-button')
<div class="header-btn">
    <a class="btn" type="submit" href="/login">logout</a>
</div>
@endsection

@section('css')
<link rel=" stylesheet" href="{{ asset('css/register.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="admin-form__heading">
    <p>Admin</p>
</div>
    <form class="form" action="/admin" method="post">
        <div class="admin_content">

        <!-- <div class="register-form"> -->
        <p>管理一覧画面</p>
        <!-- </div> -->
    </div>
    @endsection