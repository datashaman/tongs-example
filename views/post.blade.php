<!DOCTYPE html>
<html>
  @include('partials.head')

  <body>
    @include('partials.header')

    <!-- Main -->
    <div id="main-wrapper">
        <div class="container">
           <!-- Content -->
            <article class="box post">
                <div class="image featured" style="background-image: url('/assets{{ $banner }}');"></div>
                <header>
                    <h2>{{ $title }}</h2>
                    <p>{{ $shortdesc }}</p>
                </header>
                {!! $contents !!}
            </article>
        </div>
    </div>
    @include('partials.footer')

  </body>

</html>
