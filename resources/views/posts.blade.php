<x-layout>
    @include('_post-header')

    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if($posts->count())
            <x-post-featured :post="$posts[0]"/>

            <div class="lg:grid lg:grid-cols-6">
                @foreach($posts->skip(1) as $post)
                    <x-post-card :post="$post" class="{{$loop->iteration < 3 ? 'col-span-3':'col-span-2'}}"/>
                @endforeach
            </div>
        @else
            <h1 class="text-center">No Posts, yet to be displayed</h1>
        @endif
    </main>
</x-layout>


{{--        @foreach($posts as $post)--}}
{{--            <article>--}}
{{--                <div style="display: flex;align-items: baseline;justify-content: space-between">--}}
{{--                    <h1>--}}
{{--                        <a href="/posts/{{$post->slug}}">--}}
{{--                            {{$post->title}}--}}
{{--                        </a>--}}
{{--                    </h1>--}}
{{--                    <sub>--}}
{{--                        By: <a href="/authors/{{$post->user->username}}">{{$post->user->username}}</a>--}}
{{--                    </sub>--}}
{{--                </div>--}}
{{--                <h4>--}}
{{--                    <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
{{--                </h4>--}}
{{--                <div>--}}
{{--                   <p>{!! $post->excerpt !!}</p>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        @endforeach--}}
