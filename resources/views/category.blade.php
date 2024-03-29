<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Category</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="bg-gray-200 p-4">

    <div class="lg:w-3/4 mx-auto py-8 px-6 bg-white rounded-xl">
            <div class="flex flex-row space-y-4 w-[100%] height-[200px] items-center justify-center gap-16 pb-9">
                <h1 class="font-bold text-5xl text-center">
                    Category
                </h1>

                <form class="flex flex-row items-center justify-center gap-4" method="post" action="/searchCategory">
                    @csrf
                    @method('post')
                    <input type="text" name="search" placeholder="search" class="py-3 px-4 bg-gray-100 rounded-xl">
                    <button class=" py-3 px-3 bg-yellow-500 text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>
                <a class="py-4 px-4 bg-pink-500 text-center text-white font-bold rounded-xl" href="/"><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                  </svg>
                </a>
            </div>
            <div class="mb-6">
                <h1 class="font-bold text-3xl">
                    Add a Category
                </h1>
                <form class="flex flex-col space-y-4" method="POST" action="/category">
                    @csrf
                    <input type="text" name="categoryName" placeholder="add a category" class="py-3 px-4 bg-gray-100 rounded-xl">
                    <button class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>
                </form>

                <hr>


                <div class="mt-2">
                    @foreach ($category as $item)
                    <div 
                        class='py-4 flex items-center border-b border-gray-300 px-3'
                    >
                        <div class="flex-1 pr-8">
                            <h3 class="text-lg font-semibold">{{$item->categoryName}}</h3>
                        </div>

                        <div class="flex space-x-3">

                            <form method="post" action="/category/{{$item ->id}}">
                                @csrf
                                <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>

                            <form method="get" action="/category/{{$item ->id}}">
                                @csrf
                                <button class="py-2 px-2 bg-blue-500 text-white rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                            </form>

                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
    </div>

    </body>
</html>
