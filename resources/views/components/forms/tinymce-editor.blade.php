<div>
    <div>
        <script src="https://cdn.tiny.cloud/1/f0ah2gw4hvesurive3j99tvns2tpl4u3obahgml8kvnvla78/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#default', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code table advlist link image lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
        </script>
    </div>
    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        <!-- <textarea id="myeditorinstance" name="message" placeholder="{{ __('No que está pensando?') }}"
            class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('message') }}</textarea> -->
        <textarea id="default" name="message" placeholder="{{ __('No que está pensando?') }}"></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />
        <x-primary-button style="background-color: #4F46E5" class="mt-4">{{ __('Publicar') }}</x-primary-button>
    </form>
</div>