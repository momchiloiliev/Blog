<x-layout>
    <article>
        <h1>{!! $post->title !!}</h1>
{{--        <p>--}}
{{--            <a href="#">{{ $post->category->name }}</a>--}}
{{--        </p>--}}
        <div>
            <article>
                {!! $post->body !!}
            </article>
        </div>
    </article>

    <a href="/">Go Back</a>
</x-layout>






