@extends('layouts.app')

@section('content')

<h1>Liste des articles</h1>
<br>
@if($posts->count() > 0)
@foreach($posts as $post)
<h3><a href="{{ route('posts.show', ['id' => $post-> id])}}"> {{ $post->title }} </a>
</h3>
<br>

@endforeach
@else
<span>Aucun post dans la base de donnees</span>

@endif

@endsection