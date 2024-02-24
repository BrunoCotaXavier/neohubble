<x-app-layout>
    <div id="notification" class="z-50 relative isolate flex items-center gap-x-6 overflow-hidden bg-gray-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)">
            </div>
        </div>
        <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
            <p class="text-sm leading-6 text-gray-900">
                <strong class="font-semibold">Neohubble informa</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true">
                    <circle cx="1" cy="1" r="1" />
                </svg> Aqui você pode aprender mais com a gente, acompanhe nossas dicas, noticias e muito mais!
            </p>
        </div>
        <div class="flex flex-1 justify-end">
            <button type="button" id="dismissBtn" class="z-50 -m-3 p-3 focus-visible:outline-offset-[-4px]">
                <span class="sr-only">Dismiss</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
        </div>
    </div>
    <script>
        document.getElementById('dismissBtn').addEventListener('click', function() {
            document.getElementById('notification').style.display = 'none';
        });
    </script>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        @role('admin')
        <x-forms.tinymce-editor />
        @endrole
        <div class="mt-6 bg-gray shadow-sm rounded-lg">
            @foreach ($blog as $blog_item)
            <div class="bg-white p-6 flex space-x-2" style="margin-bottom: 20px; border-width: 1px; padding-right: 55px;">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600 -scale-x-100" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                </svg>
                <div class="flex-1">
                    <div class="flex justify-between items-center">
                        <div>
                            <span class="text-gray-800">{{ $blog_item->user->name }}</span>
                            <small class="ml-2 text-sm text-gray-600">{{ $blog_item->created_at->format('j M Y, g:i a') }}</small>
                            @unless ($blog_item->created_at->eq($blog_item->updated_at))
                            <small class="text-sm text-gray-600"> &middot; {{ __('editado') }}</small>
                            @endunless
                        </div>
                        @if ($blog_item->user->is(auth()->user()))
                        <x-dropdown>
                            <x-slot name="trigger">
                                <button>
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                            </x-slot>
                            <x-slot name="content">
                                <x-dropdown-link :href="route('blog.edit', $blog_item)">
                                    {{ __('Editar') }}
                                </x-dropdown-link>
                                <form method="POST" action="{{ route('blog.destroy', $blog_item) }}">
                                    @csrf
                                    @method('delete')
                                    <x-dropdown-link :href="route('blog.destroy', $blog_item)" onclick="event.preventDefault(); this.closest('form').submit();">
                                        {{ __('Deletar') }}
                                    </x-dropdown-link>
                                </form>
                            </x-slot>
                        </x-dropdown>
                        @endif
                    </div>
                    <div class="content-expander">
                        <p>{!! $blog_item->message !!}</p>
                    </div>
                    <a class="mt-2 text-blue-500 hover:underline" style="color: #4F46E5" href="{{route('blog.show', $blog_item->title)}}">Ver Mais</a>
                </div>
            </div>
            @endforeach
        </div>
        <style>
            .content-expander {
                max-height: 650px;
                /* Defina a altura máxima inicial para mostrar */
                overflow: hidden;
                transition: max-height 0.3s ease;
            }
        </style>
    </div>
</x-app-layout>