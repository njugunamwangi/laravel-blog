<?php
    /** @var $posts \Illuminate\Pagination\LengthAwarePaginator  */
?>
<x-app-layout :meta-description="'Laravel Blog'">
    <div class="container mx-auto py-6">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Latest Posts -->
            <div class="col-span-2">
                <h2 class="text-lg sm:text-xl font-bold text-blue-500 uppercase pb-1 border-b-2 border-blue-500 mb-3" >
                    Latest Post
                </h2>
                <x-post-item :post="$latestPost"></x-post-item>
            </div>
    </div>
    <!-- Posts Section -->
    <section class="w-full md:w-2/3 flex flex-col items-center px-3">

        @foreach($posts as $post)
            <x-post-item :post="$post"></x-post-item>
        @endforeach


        {{$posts->onEachSide(1)->links()}}

    </section>

    <!-- Sidebar Section -->
    <x-sidebar />
</x-app-layout>
