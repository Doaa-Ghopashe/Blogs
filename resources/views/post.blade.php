<x-layout>
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <img src="/images/illustration-1.png" alt="" class="rounded-xl">

                    <p class="mt-4 block text-gray-400 text-xs">
                        Published <time>{{$post->created_at->diffForHumans()}}</time>
                    </p>

                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <img src="/images/lary-avatar.svg" alt="Lary avatar">
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">{{$post->user->username}}</h5>
                        </div>
                    </div>
                </div>

                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500">
                            <svg width="22" height="22" viewBox="0 0 22 22" class="mr-2">
                                <g fill="none" fill-rule="evenodd">
                                    <path stroke="#000" stroke-opacity=".012" stroke-width=".5" d="M21 1v20.16H.84V1z">
                                    </path>
                                    <path class="fill-current"
                                          d="M13.854 7.224l-3.847 3.856 3.847 3.856-1.184 1.184-5.04-5.04 5.04-5.04z">
                                    </path>
                                </g>
                            </svg>

                            Back to Posts
                        </a>

                        <div class="space-x-2">
                            <x-category-button :slug="$post->category->slug" :name="$post->category->name" />

                        </div>
                    </div>

                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{$post->title}}
                    </h1>

                    <div class="space-y-4 lg:text-lg leading-loose">
                        <p>{{$post->body}}</p>
                    </div>
                </div>
            </article>
        </main>

</x-layout>

{{--<article>--}}

{{--    <h2>--}}
{{--        {{$post->title}}--}}
{{--    </h2>--}}
{{--    <div style="display:flex;align-items: baseline;justify-content: end">--}}
{{--        <span style="margin-right: 5px">By <a href="/authors/{{$post->user->username}}">{{$post->user->username}}</a></span>--}}
{{--        <h4 style="margin: 4px 0">--}}
{{--            In--}}
{{--            <a href="/categories/{{$post->category->slug}}">{{$post->category->name}}</a>--}}
{{--        </h4>--}}
{{--    </div>--}}
{{--    <div>--}}
{{--        {!! $post->body !!}--}}
{{--    </div>--}}

{{--    <a href="/">Go Back</a>--}}
{{--</article>--}}
