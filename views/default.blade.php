<!DOCTYPE html>
<html>
  @include('partials.head')

  <body>
    @include('partials.header')

    <!-- Main -->
    <div id="main-wrapper">
        <div class="container">
            <!-- characters -->
            <div class="row">
                <div class="12u">

                    <!-- Characters -->
                        <section>
                            <header class="major">
                                <h2>Characters</h2>
                            </header>
                            <div class="row">
                            @foreach($characters as $character)
                                <div class="4u">
                                    <section class="box">
                                        <span class="image featured"><img src="/assets{{$character['image']}}" alt="" /></span>
                                        <header>
                                            <h3>{{$character['name']}}</h3>
                                        </header>
                                        <p>{{$character['description']}}</p>
                                    </section>
                                </div>
                            @endforeach
                            </div>
                        </section>
                </div>
            </div>
            <div class="row">
                <div class="12u">

                    <!-- Blog -->
                        <section>
                            <header class="major">
                                <h2>Recent Episodes</h2>
                            </header>
                            <div class="row">
                            @foreach($featured as $post)
                                <div class="6u">
                                    <section class="box">
                                        <a href="{{ $post['path'] }}" class="image featured"><img src="/assets{{ $post['banner'] }}" alt="" /></a>
                                        <header>
                                            <h3>{{ $post['title'] }}</h3>
                                            <p>Posted {{ $post['date']->format('Y/m/d H:i:s') }}</p>
                                        </header>
                                        {!! $post['excerpt'] !!}</p>
                                        <footer>
                                            <ul class="actions">
                                                <li><a href="{{ $post['path'] }}" class="button icon fa-file-text">Continue Reading</a></li>
                                            </ul>
                                        </footer>
                                    </section>
                                </div>
                            @endforeach
                            </div>
                        </section>

                </div>
            </div>
        </div>
    </div>
    @include('partials.footer')

  </body>

</html>
