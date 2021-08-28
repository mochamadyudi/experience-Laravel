<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="bg-gray-100">
<header class="w-full h-20 bg-white">

</header>
<section class="w-full h-full">
    <div class="w-7/12 mx-auto space-y-6 ">
        @yield('container')
    </div>
</section>

</body>
</html>
