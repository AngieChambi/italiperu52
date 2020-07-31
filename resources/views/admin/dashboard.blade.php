@extends('admin.layout')
@section('title','Home')

@section('content')
    usuari: {{auth()->user()->name}}
@endsection