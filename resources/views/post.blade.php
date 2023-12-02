<x-layout>

    <article>
        <h2>
            {{$post->title}}
        </h2>
        <div style="display:flex;align-items: baseline;justify-content: end">
            <span style="margin-right: 5px">By <a href="/authors/{{$post->user->username}}">{{$post->user->username}}</a></span>
            <h4 style="margin: 4px 0">
                In
                <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>
            </h4>
        </div>
        <div>
            {!! $post->body !!}
        </div>

        <a href="/">Go Back</a>
    </article>

</x-layout>
