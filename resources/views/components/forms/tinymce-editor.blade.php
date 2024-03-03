<div>
    <div>
        <script src="https://cdn.tiny.cloud/1/f0ah2gw4hvesurive3j99tvns2tpl4u3obahgml8kvnvla78/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#default', // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: [
                    'advlist', 'autolink', 'link', 'image', 'lists', 'charmap', 'preview', 'anchor', 'pagebreak',
                    'searchreplace', 'wordcount', 'visualblocks', 'visualchars', 'code', 'fullscreen', 'insertdatetime',
                    'media', 'table', 'emoticons', 'template', 'help'
                ],
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table'
            });
        </script>
    </div>
    <form method="POST" action="{{ route('blog.store') }}">
        @csrf
        <div  class="pb-5">
            <x-input-label for="title" :value="__('Título')" />
            <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" required />
        </div>

        <textarea id="default" name="message" placeholder="{{ __('No que está pensando?') }}"></textarea>
        <x-input-error :messages="$errors->get('message')" class="mt-2" />

        <x-primary-button style="background-color: #5815DD" class="mt-4">{{ __('Publicar') }}</x-primary-button>
    </form>
</div>