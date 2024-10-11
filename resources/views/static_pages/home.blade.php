@extends('layouts.default')
@section('title', '主页')
@section('content')
<h1>主页</h1>
<a class="btn btn-lg btn-success" href="{{ route('signup') }}" role="button">现在注册</a>
@endsection
