<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>library</title>

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
                    Library 
                </h1>


                <form class="flex flex-row items-center justify-center gap-4" method="post" action="/search">
                    @csrf
                    @method('post')
                    <input type="text" name="search" placeholder="search" class="py-3 px-4 bg-gray-100 rounded-xl">
                    <button class=" py-3 px-3 bg-yellow-500 text-white rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                        </svg>
                    </button>
                </form>

                <a class="w-28 py-4 px-4 bg-green-500 text-center text-white font-bold rounded-xl" href="/category">Category</a>
                <a class="w-28 py-4 px-4 bg-red-500 text-center text-white font-bold rounded-xl" href="/author">Author</a>
            </div>
            <div class="mb-6">
                <h1 class="font-bold text-3xl">
                    Add a Book
                </h1>
                <form class="flex flex-col space-y-4" method="POST" action="/book">
                    @csrf
                    <input type="text" name="todoName" placeholder="title" class="py-3 px-4 bg-gray-100 rounded-xl">
                    <input type="text" name="todoName" placeholder="description" class="py-3 px-4 bg-gray-100 rounded-xl">
                    <h1 class="font-bold text-xl ">
                        Select a category
                    </h1>
                    <select name="type" id="type" class="py-3 px-4 bg-gray-100 rounded-xl">
                        <option value="1" class="py-3 px-4 bg-gray-100 rounded-xl">COM01</option>
                        <option value="2" class="py-3 px-4 bg-gray-100 rounded-xl" selected>COM02</option>
                        <option value="3" class="py-3 px-4 bg-gray-100 rounded-xl">COM03</option>
                    </select>
                    <h1 class="font-bold text-xl ">
                        Select an Author
                    </h1>
                    <select name="type" id="type" class="py-3 px-4 bg-gray-100 rounded-xl">
                        <option value="1" class="py-3 px-4 bg-gray-100 rounded-xl">COM01</option>
                        <option value="2" class="py-3 px-4 bg-gray-100 rounded-xl" selected>COM02</option>
                        <option value="3" class="py-3 px-4 bg-gray-100 rounded-xl">COM03</option>
                    </select>
                    <button class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Add</button>
                </form>

                <hr>


                <div class="mt-2">
                    <div 
                        class='py-4 flex items-center border-b border-gray-300 px-3'
                    >
                        <div class="flex-1 pr-8">
                            <h3 class="text-lg font-semibold"></h3>
                        </div>

                        <div class="flex space-x-3">

                            <form method="POST" action="/}">
                                @csrf
                                @method('PATCH')
                                <button class="py-2 px-2 bg-green-500 text-white rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </button>
                            </form>

                            <form method="POST" action="/">
                                @csrf
                                @method('DELETE') 
                                <button class="py-2 px-2 bg-red-500 text-white rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                    </svg>
                                </button>
                            </form>

                            <form method="POST" action="/">
                                @csrf
                                @method('GET')
                                <button class="py-2 px-2 bg-blue-500 text-white rounded-xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>

                </div>

            </div>
    </div>

    </body>
</html>
