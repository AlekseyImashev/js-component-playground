<!doctype html>
<html lang="en" xmlns:v-slot="http://www.w3.org/1999/XSL/Transform">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <title>Smooth Scrolling</title>
</head>

<body>
<div id="app" class="flex flex-col items-center p-8">
    <h1 class="text-2xl font-bold mb-8">Context Menu</h1>

    <div>
        <div class="bg-gray-400 w-64 h-64 flex items-center justify-center">
            <!-- Example 1 -->
            <drop-down>
                <template v-slot:trigger>
                    <button>...</button>
                </template>

                <li><a href="#" class="px-2 leading-loose pr-8 text-xs block hover:bg-gray-900">Edit</a></li>
                <li><a href="#" class="px-2 leading-loose pr-8 text-xs block hover:bg-gray-900">Delete</a></li>
                <li><a href="#" class="px-2 leading-loose pr-8 text-xs block hover:bg-gray-900">Report</a></li>
            </drop-down>
        </div>
    </div>

    <hr>

    <!-- Example 2 -->
    <drop-down classes="w-full">
        <template v-slot:trigger>
            <button>Click Me For More Options</button>
        </template>

        <li><a href="#" class="px-2 leading-loose pr-8 text-xs block hover:bg-gray-900">Edit</a></li>
        <li><a href="#" class="px-2 leading-loose pr-8 text-xs block hover:bg-gray-900">Delete</a></li>
        <li><a href="#" class="px-2 leading-loose pr-8 text-xs block hover:bg-gray-900">Report</a></li>
    </drop-down>
</div>

<script src="/js/app.js"></script>
</body>
</html>
