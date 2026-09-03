<x-layout>
    <x-slot name="title">Upcoming Events</x-slot>
    <x-slot name="description">The Birmingham Karate Open</x-slot>
    <div style="text-align: center; padding: 2rem 1rem;">
        <h1 style="font-size: 3rem; line-height: 1.2; margin: 0 0 1rem 0; text-align: center;">The Birmingham Karate Open</h1>
        <p style="font-size: 1.5rem; margin: 0; text-align: center;">Sunday 8th November 2026</p>
    </div>
    <section class="posts">
            @if(!empty($eventArticles) && is_array($eventArticles))
                @foreach($eventArticles as $partial)
                    @include($partial)
                @endforeach
            @else
                <article>
                    <header>
                        <h2><a href="#">Test</a></h2>
                    </header>
                    <a href="/pastResults" class="image fit"><img src="{{ asset('images/pic02.jpg') }}" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque
                        venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Test</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2><a href="#">Test</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="{{ asset('images/pic03.jpg') }}" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque
                        venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Test</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2><a href="#">Test</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="{{ asset('images/pic04.jpg') }}" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque
                        venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Test</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2><a href="#">Test<br />Test</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="{{ asset('images/pic05.jpg') }}" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque
                        venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Test</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2><a href="#">Test<br />Test</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="{{ asset('images/pic06.jpg') }}" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque
                        venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Test</a></li>
                    </ul>
                </article>
                <article>
                    <header>
                        <h2><a href="#">test</a></h2>
                    </header>
                    <a href="#" class="image fit"><img src="{{ asset('images/pic07.jpg') }}" alt="" /></a>
                    <p>Donec eget ex magna. Interdum et malesuada fames ac ante ipsum primis in faucibus. Pellentesque
                        venenatis dolor imperdiet dolor mattis sagittis magna etiam.</p>
                    <ul class="actions special">
                        <li><a href="#" class="button">Test</a></li>
                    </ul>
                </article>
            @endif
        </section>
</x-layout>