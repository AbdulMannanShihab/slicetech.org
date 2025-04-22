<div class="bg-white">
    <div class="max-w-[85rem] px-4 sm:px-6 lg:px-8 mx-auto animate-fade-in-up">
        <div class="grid lg:grid-cols-3 gap-y-8 lg:gap-y-0 lg:gap-x-6">
            <!-- Content -->
            <div class="lg:col-span-2 overflow-x-auto">
                <div class="py-8 lg:pe-10">
                    <div class="space-y-5 lg:space-y-8">
                        <!-- Avatar Media -->
                        <div class="flex justify-between items-center mb-6">
                            <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                                <div class="shrink-0 hidden md:block">
                                    <img class="size-12 rounded-full" src="{{ asset($category_image) }}" alt="Avatar">
                                </div>
                                <div class="grow">
                                    <div class="flex justify-between items-center gap-x-2">
                                        <div>
                                            <!-- Tooltip -->
                                            <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                                                <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                                                    <span class="font-semibold text-gray-800 dark:text-neutral-200">
                                                        {{$category_name}}
                                                    </span>
                                                    <!-- Dropdown Card -->
                                                    <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                                                    </div>
                                                    <!-- End Dropdown Card -->
                                                </div>
                                            </div>
                                            <!-- End Tooltip -->
                                            <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                                <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                                    {{$title}}
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- Button Group -->
                                        <div>
                                            <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
                                                <svg class="size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                                </svg>
                                                Tweet
                                            </button>
                                        </div>
                                        <!-- End Button Group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- End Avatar Media -->
                        <figure>
                            <img class="w-full rounded-xl" src="{{ asset($image) }}" alt="Blog Image">
                            <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
                                <ul class="text-xs text-gray-500 dark:text-neutral-500">
                                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        {{$create_at}}
                                    </li>
                                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                                        {{ ceil(str_word_count($description) / 200) }} min read
                                    </li>
                                </ul>
                            </figcaption>
                        </figure>
                        <div class="prose prose-xl dark:prose-dark text-justify">
                            {!! $description !!}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Content -->

            <!-- Sidebar -->
            <div>
                <div class="sticky top-10 start-0 py-8 lg:ps-8">
                    @foreach ($posts as $post)
                        <!-- Service List -->
                        <a class="group flex flex-col mt-4 border shadow-sm rounded-xl hover:shadow-lg"
                            href="{{ route('blog-details', $post->slug) }}" wire:navigate>
                            <div class="p-4 md:p-5">
                                <div class="flex justify-between items-center">
                                    <div class="flex items-center">
                                        <img class="h-[2.375rem] w-[2.375rem] rounded-full" src="{{ asset($post->image) }}">
                                        <div class="ms-3">
                                            <h3 class="group-hover:text-blue-600 font-semibold {{ $post->slug == $slug ? 'text-red-600' : '' }}">
                                                {{$post->title}}
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                        <!-- End Service List -->
                    @endforeach
                </div>
            </div>
            <!-- End Sidebar -->
        </div>
    </div>
</div>

