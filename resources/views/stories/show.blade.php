<x-app>
    <article class="md:mx-20 my-6 p-7 shadow rounded-box">
        <div class="text-sm pb-2 flex items-center gap-1">
            <span class="badge badge-sm badge-outline gap-0.5">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3 h-3" color="currentColor"
                    fill="none">
                    <path
                        d="M21.544 11.045C21.848 11.4713 22 11.6845 22 12C22 12.3155 21.848 12.5287 21.544 12.955C20.1779 14.8706 16.6892 19 12 19C7.31078 19 3.8221 14.8706 2.45604 12.955C2.15201 12.5287 2 12.3155 2 12C2 11.6845 2.15201 11.4713 2.45604 11.045C3.8221 9.12944 7.31078 5 12 5C16.6892 5 20.1779 9.12944 21.544 11.045Z"
                        stroke="currentColor" stroke-width="1.5" />
                    <path
                        d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z"
                        stroke="currentColor" stroke-width="1.5" />
                </svg>
                {{ $story->views }}
            </span>
            <span class="badge badge-sm badge-accent">{{ $story->date }}</span>
            <a href="{{ route('stories.index', ['identity' => $story->identity_id, 'genre' => $story->genre_id]) }}"
                class="link link-hover btn btn-xs btn-ghost rounded-full">{{ $story->genre->name }}</a>
        </div>
        <h1 class="text-xl font-semibold pb-3 text-justify">{{ $story->title }}</h1>
        <p>
            {{ $story->body }}
        </p>
    </article>
</x-app>
