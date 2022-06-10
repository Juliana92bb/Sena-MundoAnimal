@extends('layout.app')

@section('title', 'Your page title')

@section('content')

{{Auth::user()->nombre}}

@endsection
