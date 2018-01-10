@extends('layouts.master')

@section('title','Blog Sekolah koding')

@section('content')
	<h1>Edit Data</h1>

	<form action="/blog/{{$blog->id}}" method="post">
		<input type="text" name="title" value="{{$blog->title}}"><br>
		<textarea name="description" rows="8" cols="40"> {{$blog->description}} </textarea><br>

		<input type="submit" name="submit" value="Edit">
		{{ csrf_field() }}
		<input type="hidden" name="_method" value="PUT">
	</form>
@endsection