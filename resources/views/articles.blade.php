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
<br>
<h1>Liste de video</h1>

@forelse($video->comments as $comment)

<p>{{ $comment->content }} | created at {{ $comment->created_at->format('d m Y')}}</p>

@empty

<span>Aucun commentaire pour ce poste</span>
@endforelse


@endsection