@extends('layouts.master')

@section('title','Blog Sekolah koding')

@section('content')
	<h1>Selamat Datang di Rakaal Webisite</h1>
	<h2> {{ $blog->title }} </h2>
	<hr>
	<p>
		{{ $blog->description }}
	</p>
@endsection