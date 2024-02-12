<section class="px-6 py-8 mx-auto max-w-4xl">
    <h1 class="text-xl font-semibold mb-6 border-b pb-2">
        {{ $heading }}
    </h1>

    <div class="flex">
        <aside class="w-48 flex-shrink-0">
            <h4 class="font-semibold mb-4">Links</h4>
            <ul>
                <li>
                    <a href="/admin/posts/create/"
                       class="{{ request()->is('admin/posts/create') ? 'text-blue-500': '' }}">New post</a>
                </li>

                <li>
                    <a href="/admin/posts/dashboard/"
                       class="{{ request()->is('admin/posts') ? 'text-blue-500': '' }}">All posts</a>
                </li>
            </ul>
        </aside>


        <main class="flex-l">
            <x-panel>
                {{ $slot }}
            </x-panel>
        </main>
    </div>

</section>
