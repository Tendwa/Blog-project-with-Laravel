<x-layout>

    <x-setting :heading="'Edit Post: ' . $posts->title">
        <form method="POST" action="/admin/posts/{{ $posts->id }}" enctype="multipart/form-data">
            @csrf
            @method('PATCH')

            <x-form.input name="title" :value="old('title', $posts->title)"/>
            <x-form.input name="slug" :value="old('slug', $posts->slug)"/>

            <div class="flex mt-6">
                <div class="flex-1">
                    <x-form.input name="thumbnail" type="file" :value="old('thumbnail', $posts->thumbnail)"/>
                </div>
                    <img src="{{ asset('storage/' . $posts->thumbnail) }}" alt="" class="rounded-xl ml-6" width="150">
            </div>    

            <x-form.textArea name="excerpt">{{ old('excerpt', $posts->excerpt) }}</x-form.textArea>
            <x-form.textArea name="body">{{ old('body', $posts->body) }}</x-form.textArea>



            <x-form.wrap>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}" 
                            {{ old('category_id', $posts->category_id) == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <X-form.error name="category"/>         
            </x-form.wrap>

            <x-form.button>Update</x-form.button>
        
        </form>
    </x-setting>

</x-layout>