<x-app>
    <main class="h-full p-3">
        <h1 class="text-lg font-semibold underline mb-3">Create Story</h1>
        <div id="editor" class="">
            <form action="{{route('stories.store')}}" method="POST">
                @csrf
                <fieldset class="fieldset w-full border border-base-300 p-4 rounded-box">
                    <legend class="fieldset-legend">Story details</legend>

                    <div class="grid md:grid-cols-12 gap-8">
                        <div class="md:col-span-3">
                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">What is the story title?</legend>
                                <input name="title" type="text" class="input w-full" placeholder="Type here" required/>
                                <p class="fieldset-label text-error">Required</p>
                            </fieldset>

                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Which identity story belongs to?</legend>
                                <select name="identity" id="identities" class="select w-full" required>
                                    <option disabled selected>Pick an identity</option>
                                    @foreach ($identities as $id => $name)
                                        <option value="{{ $id }}">{{ $name }}</option>
                                    @endforeach
                                </select>
                                <p class="fieldset-label text-error">Required</p>
                            </fieldset>

                            <fieldset class="fieldset">
                                <legend class="fieldset-legend">Which genre story belongs to?</legend>
                                <select name="genre" id="genres" class="select w-full" disabled required>
                                    <option disabled selected>Pick a genre</option>
                                </select>
                                <p class="fieldset-label text-error">Required</p>
                            </fieldset>
                        </div>
                        <div class="md:col-span-9">
                            <fieldset class="fieldset w-full h-full">
                                <legend class="fieldset-legend">What's the story?</legend>
                                <textarea name="body" class="textarea w-full" style="height: 247px" placeholder="Write story here..." required></textarea>
                                <p class="fieldset-label text-error">Required</p>
                            </fieldset>
                        </div>
                    </div>
                    <button class="btn w-fit btn-primary" type="submit">Create</button>
                </fieldset>
            </form>
        </div>
    </main>
    <script>
        $(document).ready(function() {

            $('#identities').on('change', function() {
                $('#genres').html('<option disabled selected>Pick a genre</option>');
                const identityId = $('#identities').val();
                $.ajax({
                    type: "get",
                    url: "{{ route('genres.ofIdentity') }}",
                    data: {
                        "identity": identityId
                    },
                    success: function(response) {

                        $('#genres').attr('disabled', false);

                        $.map(response, function(value, indexOrKey) {
                            $('#genres').append(
                                `<option value="${value.id}">${value.name}</option>`
                                );
                        });

                    },
                    error: function(error) {
                        console.log(error);

                    }
                });
            });

        });
    </script>
</x-app>
