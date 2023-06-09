<?php
    /** @var $posts \Illuminate\Pagination\LengthAwarePaginator  */
?>
<x-app-layout :meta-description="'Laravel Blog'">
    <div class="container max-w-4xl mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Latest Posts -->
            <div class="col-span-2">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3" >
                    Latest Post
                </h2>
                <x-post-item :post="$latestPost"></x-post-item>
            </div>

            <!-- Top 10 popular posts -->
            <div class="col-span-1">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3" >
                    Popular Posts
                </h2>
                @foreach($popularPosts as $post)
                    <div class="grid grid-cols-4 gap-2 mb-4">
                        <a href="{{route('view', $post)}}" class="pt-2">
                            <img src="{{$post->getThumbnail()}}" alt="{{$post->title}}" />
                        </a>
                        <div class="col-span-3">
                            <a href="{{route('view', $post)}}">
                                <h3 class="text-bold uppercase whitespace-nowrap truncate">{{$post->title}}</h3>
                            </a>
                            <div class="flex gap-3">
                                @foreach($post->categories as $category)
                                    <a href="#" class="text-blue-500 text-xs font-bold uppercase pb-4">
                                        {{$category->title}}
                                    </a>
                                @endforeach
                            </div>
                            <div class="text-xs">
                                {{$post->shortBody(10)}}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Recommended posts -->
        <div>
            <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3" >
                Recommended Posts
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-3">
                @foreach($recommendedPosts as $post)
                    <x-post-item :post="$post"/>
                @endforeach
            </div>
        </div>
        <!-- Latest Categories -->
        @foreach($categories as $category)
            <div>
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3" >
                Posts for {{$category->title}} Category
                <a href="{{route('by-category', $category)}}">
                    <i class="fas fa-arrow-right"></i>
                </a>
                </h2>
                    <div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-3">
                            @foreach($category->posts as $post)
                                <x-post-item :post="$post"/>
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach

    </div>
    <!-- Posts Section -->


    <!-- Sidebar Section -->

</x-app-layout>
