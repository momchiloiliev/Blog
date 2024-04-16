<x-layout>
    @foreach($posts as $post)

        <article>
            {{--        <a href="/posts/<?= $post->slug ?>">--}}
            <h1>
                <a href="/posts/{{ $post->slug }}">
                    {!! $post->title !!}

                </a>

            </h1>

            <p>
                By <a href="/authors/{{$post->author->username}}">{{ $post->author->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a>
            </p>

            <div>
                <article>
                    {!! $post->excerpt !!}


                </article>
            </div>
        </article>
    @endforeach
</x-layout>
