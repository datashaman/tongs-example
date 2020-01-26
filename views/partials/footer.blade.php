<!-- Footer -->
<div id="footer-wrapper">
    <section id="footer" class="container">
        <div class="row">
            <div class="8u">
                <section>
                    <header>
                        <h2>More Episodes</h2>
                    </header>
                    <ul class="dates">
                    @foreach($episodes as $episode)
                        <li>
                            <!-- this is a really bad idea, but a temporary hack -->
                                <span class="date">{{ $episode['date']->format('M d') }}<strong>{{ $episode['date']->format('H:i') }}</strong></span>
                            <h3><a href="{{ $episode['path'] }}">{{ $episode['title'] }}</a></h3>
                            <p>{{ $episode['shortdesc'] }}</p>
                        </li>
                    @endforeach
                    </ul>
                </section>
            </div>
            <div class="4u">
                <section>
                    <header>
                        <h2>What's this all about?</h2>
                    </header>
                    <a href="#" class="image featured"><img src="{{ $site['banner'] }}" alt="" /></a>
                    <p>{{ $description }}</p>
                </section>
            </div>
        </div>
        <div class="row">
            <div class="12u">

                <!-- Copyright -->
                    <div id="copyright">
                        <ul class="links">
                            <li>&copy; {{$site['title']}}. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
                        </ul>
                    </div>

            </div>
        </div>
    </section>
</div>
