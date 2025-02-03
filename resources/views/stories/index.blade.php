<x-app>
    <form id="filter-form" action="{{ route('stories.index') }}" method="GET"
        class="py-1 flex justify-end items-center gap-1">
        <input type="hidden" value="{{ request('identity') }}" name="identity" />
        <div class="filter">
            <input onclick="disbleApplyButton()" class="btn btn-xs btn-square filter-reset" type="radio" name="genre"
                aria-label="All" />
            {{-- <input id="reset" onclick="disbleApplyButton()" class="btn btn-xs btn-square" type="reset" value="×" /> --}}
            @foreach ($genres as $id => $name)
                <input onclick="submitForm()" class="btn btn-xs" type="radio" name="genre"
                    aria-label="{{ $name }}" value="{{ $id }}"
                    {{ request('genre') == $id ? 'checked' : '' }} />
            @endforeach
        </div>
        <select name="sort_by" class="select select-xs select-neutral w-fit" onclick="submitForm()">
            <option value="latest" selected>Latest</option>
            <option value="popular" {{ request('sort_by') == 'popular' ? 'selected' : '' }}>Popular</option>
            <option value="trending" {{ request('sort_by') == 'trending' ? 'selected' : '' }}>Trending</option>
        </select>
        {{-- <button id="apply" type="hidden" class="btn btn-info btn-xs btn-disabled">Apply</button> --}}
    </form>
    <ul class="grid md:grid-cols-2 gap-2">
        @foreach ($stories as $story)
            <li>
                <a href="{{ route('stories.show', ['story' => $story->id]) }}"
                    class="card bg-base-100 shadow p-5 hover:bg-base-200 transition-all">
                    <div class="flex justify-between items-start gap-8">
                        <div class="flex-grow">
                            <div class="flex flex-col lg:flex-row lg:items-center gap-1 lg:gap-2">
                                <span class="font-semibold">
                                    {{ $story->title }}
                                </span>
                                <span class="text-xs">
                                    ({{ $story->date }})
                                </span>
                                <span class="badge badge-xs badge-outline flex items-center gap-0.5">
                                    {{ $story->views }}
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3 h-3"
                                        color="currentColor" fill="none">
                                        <path
                                            d="M21.544 11.045C21.848 11.4713 22 11.6845 22 12C22 12.3155 21.848 12.5287 21.544 12.955C20.1779 14.8706 16.6892 19 12 19C7.31078 19 3.8221 14.8706 2.45604 12.955C2.15201 12.5287 2 12.3155 2 12C2 11.6845 2.15201 11.4713 2.45604 11.045C3.8221 9.12944 7.31078 5 12 5C16.6892 5 20.1779 9.12944 21.544 11.045Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                        <path
                                            d="M15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15C13.6569 15 15 13.6569 15 12Z"
                                            stroke="currentColor" stroke-width="1.5" />
                                    </svg>
                                </span>
                            </div>
                            <div class="text-sm py-1">
                                {{ $story->preview }}
                            </div>
                        </div>
                        <div class="text-xs flex items-center gap-1">
                            {{ $story->genre->name }}
                        </div>
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
    <div class="p-2">
        {{ $stories->links() }}
    </div>
    <script>
        function submitForm() {
            document.querySelector('#filter-form').submit();
        }

        function disbleApplyButton() {
            event.preventDefault();
            document.querySelectorAll('input[type="radio"][name="genre"]').forEach(function(radio) {
                radio.checked = false;
            });
            document.querySelector('#filter-form').submit();
        }
    </script>
</x-app>
