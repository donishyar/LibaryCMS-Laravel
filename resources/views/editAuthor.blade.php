<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Author Edit</title>

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
            <h1 class="font-bold text-5xl text-center mb-8">
                Author
            </h1>
            <div class="mb-6">
                <form class="flex flex-col space-y-4" method="POST" action="/author{{$author->id}}">
                    @csrf
                    @method('PUT')
                    <input type="text" name="author" placeholder="author" class="py-3 px-4 bg-gray-100 rounded-xl" value="{{$author->author}}">
                    <button class="w-28 py-4 px-8 bg-green-500 text-white rounded-xl">Save</button>
                </form>

                <hr>


            </div>
    </div>

    </body>
</html>
