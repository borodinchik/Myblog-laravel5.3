@extends('layouts.default')
@section('content')
    @if($posts->count())
        @foreach($posts as $post)
            <article>
                <h2>{{ $post->title }}</h2>{{--титулка поста --}}
               <p>{{ str_limit($post->body, 50) }}</p>   {{--Выводим 50 первых символов поста --}}
                <a href="{{ route('get-post', ['slug'=>$post->slug]) }}">Читать дальше...</a>{{--Ссылка на весь пост --}}
            </article>
        @endforeach
    @endif
@stop