<x-layout>

    <x-setting heading="Publish new post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textArea name="excerpt"/>
            <x-form.textArea name="body"/>


            <x-form.wrap>
                <x-form.label name="category"/>

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach ($categories as $category)
                        <option
                            value="{{ $category->id }}" 
                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                            {{ ucwords($category->name) }}
                        </option>
                    @endforeach
                </select>

                <X-form.error name="category"/>         
            </x-form.wrap>

            <x-form.button>Publish</x-form.button>
        
        </form>
    </x-setting>

</x-layout>