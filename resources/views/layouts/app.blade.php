<!DOCTYPE html>
<html lang="en" data-theme="lofi">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bits & Bytes</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>

<body class="montserrat-regular antialiased p-3 h-screen flex flex-col tracking-wide">
    <header class="mb-3 flex items-center justify-between">
        <div class="flex items-center gap-1">
            <a href="{{ url('/') }}" class="font-sans tracking-tight btn btn-sm btn-ghost">Bits & Bytes</a>
            <form action="{{ route('subscribers.store') }}" method="post">
                @csrf
                <div class="join">
                    <div>
                        <label class="input input-xs validator join-item @error('email') border-error  @enderror">
                            <svg class="h-[1em] opacity-50" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <g stroke-linejoin="round" stroke-linecap="round" stroke-width="2.5" fill="none"
                                    stroke="currentColor">
                                    <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                    <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                                </g>
                            </svg>
                            <input type="email" name="email" value="{{ old('email') }}" placeholder="mail@site.com"
                                required />
                        </label>
                        <div class="validator-hint hidden">Enter valid email address</div>
                        @error('email')
                            <div class="text-xs text-error">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-xs btn-neutral join-item">Enter</button>
                </div>
            </form>
        </div>
        <div class="flex items-center gap-1.5">
            <div class="tooltip tooltip-bottom  " data-tip="About">
                <a href="{{ route('about') }}" class="btn btn-sm btn-ghost btn-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5" color="currentColor"
                        fill="none">
                        <path
                            d="M22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12Z"
                            stroke="currentColor" stroke-width="1.5" />
                        <path
                            d="M12.2422 17V12C12.2422 11.5286 12.2422 11.2929 12.0957 11.1464C11.9493 11 11.7136 11 11.2422 11"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        <path d="M11.992 8H12.001" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                            stroke-linejoin="round" />
                    </svg> 
                </a>
            </div>
            <a href="{{ route('stories.create') }}"
                class="btn btn-xs btn-primary {{ request()->routeIs('stories.create') ? 'btn-disabled' : '' }}">Create</a>
        </div>
    </header>
    <main class="grow">
        {{ $slot }}
    </main>
</body>

</html>
