@php use App\Models\Category; @endphp
<x-layout>
    <x-setting-page heading="Publish new post">
        <form method="POST" action="/admin/posts" class="" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title" />
            <x-form.input name="slug" />
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>


            <x-form.field>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id">
                    @php
                        $categories = Category::all()
                    @endphp

                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}"> {{ ucwords($category->name) }}</option>
                    @endforeach
                </select>

                <x-form.error name="category"/>
            </x-form.field>



            <div class="flex justify-end mt-6 border-t border-gray-200 pt-6">
                <button type="submit" class="bg-blue-400 text-white uppercase font-semibold text-xs py-2 px-10 hover:bg-blue-600">Post</button>
            </div>
        </form>
    </x-setting-page>

</x-layout>
