@extends('layouts.master')

@section('title','Blog Sekolah koding')

@section('content')
	<h1>Selamat Datang di Rakaal Webisite</h1>
	<p> Rakaal Web</p>

	<hr>

	@foreach($blogs as $blog)
		<li>
			<a href="/blog/{{$blog->id}}">{{ $blog->title }}</a>
			<form action="/blog/{{$blog->id}}" method="post">
				<input type="submit" name="submit" value="Delete">
				{{ csrf_field() }}
				<input type="hidden" name="_method" value="DELETE">
			</form>
		</li>
	@endforeach
@endsection