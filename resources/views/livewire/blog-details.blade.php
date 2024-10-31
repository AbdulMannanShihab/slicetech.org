<div class="bg-white">
    <!-- Blog Article -->
    <div class="max-w-4xl px-4 pt-6 lg:pt-10 pb-12 sm:px-6 lg:px-8 mx-auto">
        <div class="max-w-2xl">
        <!-- Avatar Media -->
        <div class="flex justify-between items-center mb-6">
            <div class="flex w-full sm:items-center gap-x-5 sm:gap-x-3">
            <div class="shrink-0">
                <img class="size-12 rounded-full" src="{{ asset('asset/images/SliceTechFavicon.png') }}" alt="Avatar">
            </div>
    
            <div class="grow">
                <div class="flex justify-between items-center gap-x-2">
                <div>
                    <!-- Tooltip -->
                    <div class="hs-tooltip [--trigger:hover] [--placement:bottom] inline-block">
                    <div class="hs-tooltip-toggle sm:mb-1 block text-start cursor-pointer">
                        <span class="font-semibold text-gray-800 dark:text-neutral-200">
                            {{$auther}}
                        </span>
    
                        <!-- Dropdown Card -->
                        <div class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 max-w-xs cursor-default bg-gray-900 divide-y divide-gray-700 shadow-lg rounded-xl dark:bg-neutral-950 dark:divide-neutral-700" role="tooltip">
                        <!-- Body -->
                        {{-- <div class="p-4 sm:p-5">
                            <div class="mb-2 flex w-full sm:items-center gap-x-5 sm:gap-x-3">
                            <div class="shrink-0">
                                <img class="size-8 rounded-full" src="{{ asset('asset/images/SliceTechFavicon.png') }}" alt="Avatar">
                            </div>
    
                            <div class="grow">
                                <p class="text-lg font-semibold text-gray-200 dark:text-neutral-200">
                                    {{$auther}}
                                </p>
                            </div>
                            </div>
                            <p class="text-sm text-gray-400 dark:text-neutral-400">
                                A web developer with a passion for building scalable, efficient, and well-documented web applications. Proficient in a range of programming languages, including HTML, CSS, JavaScript, and PHP. Strong understanding of web development principles and best practices. Experience with popular web frameworks and libraries such as Laravel and Livewire.
                            </p>
                        </div> --}}
                        <!-- End Body -->
    
                        <!-- Footer -->
                       {{--  <div class="flex justify-between items-center px-4 py-3 sm:px-5">
                            <ul class="text-xs space-x-3">
                            <li class="inline-block">
                                <span class="font-semibold text-gray-200 dark:text-neutral-200">56</span>
                                <span class="text-gray-400 dark:text-neutral-400">articles</span>
                            </li>
                            <li class="inline-block">
                                <span class="font-semibold text-gray-200 dark:text-neutral-200">1k+</span>
                                <span class="text-gray-400 dark:text-neutral-400">followers</span>
                            </li>
                            </ul>
    
                            <div>
                            <button type="button" class="py-1.5 px-2.5 inline-flex items-center gap-x-2 text-xs font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                                <svg class="shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                <path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5z"/>
                                </svg>
                                Follow
                            </button>
                            </div>
                        </div> --}}
                        <!-- End Footer -->
                        </div>
                        <!-- End Dropdown Card -->
                    </div>
                    </div>
                    <!-- End Tooltip -->
    
                    <ul class="text-xs text-gray-500 dark:text-neutral-500">
                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                        {{$create_at}}
                    </li>
                    <li class="inline-block relative pe-6 last:pe-0 last-of-type:before:hidden before:absolute before:top-1/2 before:end-2 before:-translate-y-1/2 before:size-1 before:bg-gray-300 before:rounded-full dark:text-neutral-400 dark:before:bg-neutral-600">
                        {{ ceil(str_word_count($description) / 200) }} min read
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
    
        <!-- Content -->
        <div class="space-y-5 md:space-y-8">
            <div class="space-y-3">
            <h2 class="text-2xl font-bold md:text-3xl dark:text-white">{{ $title }}</h2>
    
            <figure>
                <img class="w-full object-cover rounded-xl" src="{{ asset($image) }}" alt="Blog Image">
                <figcaption class="mt-3 text-sm text-center text-gray-500 dark:text-neutral-500">
                    {{ $title }}
                </figcaption>
            </figure>
           
            <div class="prose prose-xl dark:prose-dark text-justify">
                {!! $description !!}
            </div>
    
            
        </div>
        <!-- End Content -->
        </div>
    </div>
    <!-- End Blog Article -->
  
    <!-- Sticky Share Group -->
    <div class="pt-6 pb-6 inset-x-0 text-center">
        <div class="inline-block bg-white shadow-md rounded-full py-3 px-4 dark:bg-neutral-800">
            <div class="flex items-center gap-x-1.5">
                <!-- Button -->
                <div class="hs-tooltip inline-block">
                    <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 14c1.49-1.46 3-3.21 3-5.5A5.5 5.5 0 0 0 16.5 3c-1.76 0-3 .5-4.5 2-1.5-1.5-2.74-2-4.5-2A5.5 5.5 0 0 0 2 8.5c0 2.3 1.5 4.05 3 5.5l7 7Z"/></svg>
                        0
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black" role="tooltip">
                        Like
                        </span>
                    </button>
                </div>
                <!-- Button -->
        
                <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>
        
                <!-- Button -->
                <div class="hs-tooltip inline-block">
                    <button type="button" class="hs-tooltip-toggle flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m3 21 1.9-5.7a8.5 8.5 0 1 1 3.8 3.8z"/></svg>
                        0
                        <span class="hs-tooltip-content hs-tooltip-shown:opacity-100 hs-tooltip-shown:visible opacity-0 transition-opacity inline-block absolute invisible z-10 py-1 px-2 bg-gray-900 text-xs font-medium text-white rounded shadow-sm dark:bg-black" role="tooltip">
                        Comment
                        </span>
                    </button>
                </div>
                <!-- Button -->
        
                <div class="block h-3 border-e border-gray-300 mx-3 dark:border-neutral-600"></div>
        
                <!-- Button -->
                <div class="hs-dropdown relative inline-flex">
                    <button id="hs-blog-article-share-dropdown" type="button" class="flex items-center gap-x-2 text-sm text-gray-500 hover:text-gray-800 focus:outline-none focus:text-gray-800 dark:text-neutral-400 dark:hover:text-neutral-200 dark:focus:text-neutral-200" aria-haspopup="menu" aria-expanded="false" aria-label="Dropdown">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8"/><polyline points="16 6 12 2 8 6"/><line x1="12" x2="12" y1="2" y2="15"/></svg>
                        Share
                    </button>
                    <div class="hs-dropdown-menu w-56 transition-[opacity,margin] duration hs-dropdown-open:opacity-100 opacity-0 hidden mb-1 z-10 bg-gray-900 shadow-md rounded-xl p-2 dark:bg-neutral-950" role="menu" aria-orientation="vertical" aria-labelledby="hs-blog-article-share-dropdown">
                        <a class="flex items-center gap-x-3.5 py-2 px-3 rounded-lg text-sm text-gray-400 hover:bg-white/10 focus:outline-none focus:bg-white/10 dark:text-neutral-400 dark:hover:bg-neutral-900 dark:focus:bg-neutral-900" href="#" onclick="
                            var copyText = document.createElement('textarea');
                            copyText.value = window.location.href;
                            document.body.appendChild(copyText);
                            copyText.select();
                            document.execCommand('copy');
                            document.body.removeChild(copyText);
                            return false;
                            ">
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"/></svg>
                            Copy link
                        </a>
                    
                    </div>
                </div>
                <!-- Button -->
            </div>
        </div>
    </div>
  <!-- End Sticky Share Group -->
    
</div>
