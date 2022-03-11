@extends('layouts.app')

@section('content')
<br>

<h1><a href="">{{ $post->content }}</a></h1>

<span>{{ $post->image ? $post->image->path : '' }}</span>
<br><br>
@forelse($post->comments as $comment)



<p>{{ $comment->content }} | created at {{ $comment->created_at->format('d m Y')}}</p>

@empty

<span>Aucun commentaire pour ce poste</span>
@endforelse
<hr>

@forelse($post->tags as $tag)
<span>{{ $tag-> name}}</span>
@empty
<span>Aucun tag pour ce poste</span>

@endforelse
<hr>

<span>Nom de l artiste de l image: {{ $post->image ? $post->imageArtist->name : ''}}</span>



@endsection