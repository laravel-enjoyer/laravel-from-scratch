@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments" class="">
            @csrf
            <header class="flex items-center">
                <img src="https://i.pravatar.cc/100?id={{ auth()->id() }}" alt="" width="60" height="60" class="rounded-full"/>
                <h2 class="ml-3">Want to participate?</h2>
            </header>

            <div class="mt-6">
                    <textarea name="body" cols="30" rows="5"
                              class="w-full focus:outline-none focus:ring"
                              placeholder="Quick, think of something to asy!" required></textarea>

                @error('body')
                <span class="text-xs red">{{ $message }}</span>
                @enderror
            </div>

            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <button type="submit" class="bg-blue-400 text-white uppercase font-semibold text-xs py-2 px-10 hover:bg-blue-600">Post</button>
            </div>
        </form>
    </x-panel>
@else
    <a href="/login">Log in to leave a comment</a>
@endauth
