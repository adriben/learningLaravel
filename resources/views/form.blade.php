@extends('layouts.app')

@section('content')
<br><br>

<h1>Creer un nouveau post</h1>

<form action="{{ route('posts.store') }}" method="POST">
    @csrf
    <input type="text" name="title" class="border-gray-600 border-2">
    <textarea name="content" id="" cols="30" rows="10" class="border-gray-600 border-2"></textarea>
    <button type="submit" class="bg-green-300">Creer</button>
</form>

@endsection