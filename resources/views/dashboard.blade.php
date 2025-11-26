<x-app-layout>


    <div class="py-4">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-4 text-gray-900">
                    <ul class="flex flex-wrap text-sm font-medium text-center text-body justify-center">
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 text-white bg-blue-600 rounded-lg active">All</a>
                        </li>
                        @foreach($categories as $category)
                        <li class="me-2">
                            <a href="#" class="inline-block px-4 py-2 rounded-lg hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-200 dar:hover:text-white" aria-current="page">{{$category->name}}</a>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="mt-8 text-gray-900">
                    @foreach($posts as $post)
                        <div class="flex bg-white border border-gray-200 rounded-lg
                            shadow-sm dark:bg:gray-800 mb-8">
                            <div class="p-5 flex-1">
                                <span class="inline-flex items-center bg-brand-softer border border-brand-subtle text-fg-brand-strong text-xs font-medium px-1.5 py-0.5 rounded-sm">
                                    <svg class="w-3 h-3 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.122 17.645a7.185 7.185 0 0 1-2.656 2.495 7.06 7.06 0 0 1-3.52.853 6.617 6.617 0 0 1-3.306-.718 6.73 6.73 0 0 1-2.54-2.266c-2.672-4.57.287-8.846.887-9.668A4.448 4.448 0 0 0 8.07 6.31 4.49 4.49 0 0 0 7.997 4c1.284.965 6.43 3.258 5.525 10.631 1.496-1.136 2.7-3.046 2.846-6.216 1.43 1.061 3.985 5.462 1.754 9.23Z"/></svg>
                                    Trending
                                </span>
                                <a href="#">
                                    <h5 class="mt-3 mb-6 text-2xl font-semibold tracking-tight text-heading">
                                        {{ \Illuminate\Support\Str::words($post->title, 20) }}
                                    </h5>
                                </a>
                                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                    {{$post->content}}
                                </div>
                                <a href="#" class="inline-flex items-center text-white bg-blue-600 box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-lg text-sm px-4 py-2.5 focus:outline-none">
                                    Read more
                                    <svg class="w-4 h-4 ms-1.5 rtl:rotate-180 -me-0.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24"><path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4"/></svg>
                                </a>
                            </div>
                            <a href="#">
                                <img class="w-48 h-full object-cover rounded-r-base" src="https://flowbite.com/docs/images/blog/image-1.jpg" alt="" />
                            </a>
                        </div>
                    @endforeach
            </div>
        </div>
    </div>
</x-app-layout>
