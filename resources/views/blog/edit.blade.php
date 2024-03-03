<x-app-layout>
    <div>
        <script src="https://cdn.tiny.cloud/1/f0ah2gw4hvesurive3j99tvns2tpl4u3obahgml8kvnvla78/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#edit', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table advlist link image lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
        </script>
    </div>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('blog.update', $blog) }}">
            @csrf
            @method('patch')
            <!-- <textarea
                name="message"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message', $blog->message) }}</textarea> -->
            <textarea id="edit" name="message"
                placeholder="{{ __('No que está pensando?') }}">{{ old('message', $blog->message) }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <div class="mt-4 space-x-2">
                <x-primary-button style="background-color: #5815DD">{{ __('Salvar') }}</x-primary-button>
                <a href="{{ route('blog.index') }}">{{ __('Cancelar') }}</a>
            </div>
        </form>
    </div>
</x-app-layout>