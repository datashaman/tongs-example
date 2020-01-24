@extends('default')

@section('content')
@foreach($posts as $post)
  <article class="pure-g">
    <div class="pure-u-1-6">
        <a href="{{ $post['path'] }}"><time>{{ @$post['date'] ? $post['date']->format('c') : '' }}</time></a>
    </div>

    <div class="pure-u-5-6">
      @if(@$post['summary'] || @$post['contents'])
        <div class="e-content">
          {!! @$post['summary'] ?: $post['contents'] !!}
          @if(@$post['summary'])<a href="{{ $post['path'] }}">more</a>@endif
        </div>
      @endif
      @if(@$post['photos'])
        @include('partials.gallery', [
            'photos' => $post['photos'],
            'height' => 120,
        ])
      @endif
    </div>
  </article>
@endforeach
@endsection
