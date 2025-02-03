<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bits & Bytes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="montserrat-regular antialiased p-3 h-screen flex flex-col tracking-wide">
    <main class="grow flex flex-col gap-2 justify-start items-center">
        <a href="{{ url('/') }}" class="font-sans tracking-tight btn btn-sm btn-ghost w-fit">Bits & Bytes</a>
        {{ $slot }}
    </main>
</body>

</html>
