@extends('layouts.app')

@section('content')
<br>

<h1><a href="">{{ $post->content }}</a></h1>
<br><br>
@forelse($post->comments as $comment)



<p>{{ $comment->content }} | created at {{ $comment->created_at->format('d m Y')}}</p>
@empty

<span>Aucun commentaire pour ce poste</span>
@endforelse

@endsection