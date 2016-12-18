@include('layouts.default')
@yield('content')
<article>
    <h2>{{ $post->title }}</h2>
    {{ $post->body }}
    <p>{{ $post->created_at->format('d.m.Y H:i:s') }}</p>
</article>