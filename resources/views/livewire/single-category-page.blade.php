<div class="bg-white">
    <!-- Search Box -->
    <div class="max-w-xl mx-auto pt-10">
        <form class="flex items-center w-full px-4 max-w-md mx-auto">
            <label for="search" class="sr-only">Search</label>
            <input type="text" wire:model.live.debounce.250ms="search" name="search" id="search" placeholder="Search" class="w-full px-4 py-2 rounded-md border-t border-b border-l border-r border-blue-200 border-t-blue-400 border-b-blue-600 focus:outline-none focus:ring-1 focus:ring-gray-500">
        </form>
    </div>
    <!-- Search Box -->
    <!-- Card Blog -->
    <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
        <!-- Grid -->
        <div class="grid lg:grid-cols-2 lg:gap-y-16 gap-10">
        
            @forelse ($blogs as $blog)
                <!-- Card -->
                <a class="group block rounded-xl overflow-hidden focus:outline-non" 
                href="{{ route('blog-details', $blog->slug) }}">
                    <div class="flex flex-col sm:flex-row sm:items-center gap-3 sm:gap-5">
                        <div class="shrink-0 relative rounded-xl overflow-hidden w-full sm:w-56 h-44">
                            <img class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out size-full absolute top-0 start-0 object-cover rounded-xl" 
                            src="{{asset($blog->image)}}" alt="{{$blog->image.'image'}}">
                        </div>
            
                        <div class="grow">
                            <h3 class="text-xl font-semibold text-gray-800 group-hover:text-gray-600 dark:text-neutral-300 dark:group-hover:text-white">
                                {{$blog->title}}
                            </h3>
                            <p class="mt-3 text-gray-600 dark:text-neutral-400">
                                {!! Str::limit($blog->description, 100) !!}
                            </p>
                            <p class="mt-4 inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 group-hover:underline group-focus:underline font-medium dark:text-blue-500">
                            Read more
                            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                            </p>
                        </div>
                    </div>
                </a>
                <!-- End Card -->
            @empty
                <div class="text-center text-xl text-gray-500 dark:text-neutral-400">
                    <p>No Post Found</p>
                </div>
            @endforelse
           
        </div>
        <!-- End Grid -->
    </div>
    <!-- End Card Blog -->
    <div class="flex justify-end pb-5 md:pt-0 mr-10">
        <a wire:navigate class="py-2.5 px-4 inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" href="/"> 
            Read More
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
        </a>
    </div>
</div>
