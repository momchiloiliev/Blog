<x-layout>
    @foreach($posts as $post)

        <article>
            {{--        <a href="/posts/<?= $post->slug ?>">--}}
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {{ $post->title }}

                </a>

            </h1>

            <div>
                <article>
                    {!! $post->excerpt !!}


                </article>
            </div>
        </article>
    @endforeach
</x-layout>