<x-app-layout>
    @php
    $success = session('success');
    @endphp
    <script>
        @if($success)
        document.getElementById('meuBotao').disabled = false;
        document.getElementById('btnSubmit').innerHTML = 'Enviar'
        @endif

        function submitForm() {
            document.getElementById('btnSubmit').disabled = true;
            document.getElementById('btnSubmit').style.backgroundColor = 'gray';
            document.getElementById('btnSubmit').innerHTML = 'Enviando...'
            document.getElementById('form').submit();
        }
    </script>
    @if($errors->first())
    <div id="notificationError" class="z-50 relative isolate flex items-center gap-x-6 overflow-hidden bg-red-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
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
                </svg>
            <p>{{ $errors->first() }}</p>
            </p>
        </div>
        <div class="flex flex-1 justify-end">
            <button type="button" id="dismissBtnError" class="z-50 -m-3 p-3 focus-visible:outline-offset-[-4px]">
                <span class="sr-only">Dismiss</span>
                <svg class="h-5 w-5 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path d="M6.28 5.22a.75.75 0 00-1.06 1.06L8.94 10l-3.72 3.72a.75.75 0 101.06 1.06L10 11.06l3.72 3.72a.75.75 0 101.06-1.06L11.06 10l3.72-3.72a.75.75 0 00-1.06-1.06L10 8.94 6.28 5.22z" />
                </svg>
            </button>
        </div>
    </div>
    <script>
        document.getElementById('dismissBtnError').addEventListener('click', function() {
            document.getElementById('notificationError').style.display = 'none';
        });
    </script>
    @endif
    @if(session('success'))
    <div id="notification" class="z-50 relative isolate flex items-center gap-x-6 overflow-hidden bg-green-50 px-6 py-2.5 sm:px-3.5 sm:before:flex-1">
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
                </svg>{{ session('success') }}
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
    @once
    <script>
        document.getElementById('dismissBtn').addEventListener('click', function() {
            document.getElementById('notification').style.display = 'none';
        });
    </script>
    @endonce
    @endif
    <div class="isolate bg-white px-6 py-24 sm:py-32 lg:px-8">

        <div class="absolute -z-10 inset-x-0 top-[-10rem] 0 transform-gpu overflow-hidden blur-3xl sm:top-[-20rem]" aria-hidden="true">
            <div class="relative left-1/2 -z-10 aspect-[1155/678] w-[36.125rem] max-w-none -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-50 sm:left-[calc(50%-65rem)] sm:w-[102.1875rem]" style="margin-top: 100px; clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
            </div>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                Simule um Orçamento</h2>
            <p class="mt-2 text-lg leading-8 text-gray-600">Responda todas as perguntas de forma clara para um melhor
                entendimento.</p>
        </div>
        <form id="form" action="{{ route('send.email') }}" method="POST" class="mx-auto mt-16 max-w-xl sm:mt-20">
            @csrf
            <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
                <h3 class="mb-4 mt-4 mr-4" style="color: #5815DD">- Informação pessoal</h3>
                <br />
                <div>
                    <label for="first-name" class="block text-sm font-semibold leading-6 text-gray-900">
                        Primeiro nome
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="first-name" id="first-name" value="{{ old('first-name') }}" autocomplete="given-name" autofocus class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        @error('first-name')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
                <div>
                    <label for="last-name" class="block text-sm font-semibold leading-6 text-gray-900">Proximo
                        nome</label>
                    <div class="mt-2.5">
                        <input type="text" name="last-name" id="last-name" value="{{ old('last-name') }}" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('last-name')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="email" class="block text-sm font-semibold leading-6 text-gray-900">Email</label>
                    <div class="mt-2.5">
                        <input type="email" name="email" id="email" value="{{ old('email') }}" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="phone-number" class="block text-sm font-semibold leading-6 text-gray-900">
                        Celular
                    </label>
                    <div class="relative mt-2.5">
                        <div class="absolute inset-y-0 left-0 flex items-center">
                            <label for="country" class="sr-only">Country</label>
                            <select id="country" name="country" class="h-full rounded-md border-0 bg-transparent bg-none py-0 pl-4 pr-9 text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm">
                                <option>BR</option>
                            </select>
                            <svg class="pointer-events-none absolute right-3 top-0 h-full w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="tel" name="phone-number" id="phone-number" value="{{ old('phone-number') }}" autocomplete="tel" class="block w-full rounded-md border-0 px-3.5 py-2 pl-20 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('phone-number')" class="mt-2" />
                    </div>
                </div>

                <h3 class="mb-4 mt-4" style="color: #5815DD">- Informações sobre a empresa</h3>
                <br />
                <div>
                    <label for="company-name" class="block text-sm font-semibold leading-6 text-gray-900">
                        Nome fantasia
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="company-name" id="company-name" value="{{ old('company-name') }}" autocomplete="company-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('company-name')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="company-year" class="block text-sm font-semibold leading-6 text-gray-900">
                        Quantos anos ativa</label>
                    <div class="mt-2.5">
                        <input type="number" name="company-year" id="company-year" placeholder="informe apenas o numero" value="{{ old('company-year') }}" autocomplete="company-year" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('company-year')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="company-description" class="block text-sm font-semibold leading-6 text-gray-900">Descrição sobre a empresa</label>
                    <div class="mt-2.5">
                        <textarea name="company-description" id="company-description" value="{{ old('company-description') }}" rows="4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        <x-input-error :messages="$errors->get('company-description')" class="mt-2" />
                    </div>
                </div>
                <h3 class="mb-4 mt-4" style="color: #5815DD">- Estratégia</h3>
                <br />
                <div>
                    <label for="strategy-quest1" class="block text-sm font-semibold leading-6 text-gray-900">
                        Por que você está criando esse site?
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="strategy-quest1" id="strategy-quest1" value="{{ old('strategy-quest1') }}" autocomplete="strategy-quest1" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('strategy-quest1')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="strategy-quest2" class="block text-sm font-semibold leading-6 text-gray-900">
                        O que você oferece ao seu público?
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="strategy-quest2" id="strategy-quest2" value="{{ old('strategy-quest2') }}" autocomplete="strategy-quest2" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('strategy-quest2')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="strategy-quest3" class="block text-sm font-semibold leading-6 text-gray-900">
                        Quem é seu público-alvo?
                    </label>
                    <div class="mt-2.5">
                        <input type="text" name="strategy-quest3" id="strategy-quest3" value="{{ old('strategy-quest3') }}" autocomplete="strategy-quest3" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('strategy-quest3')" class="mt-2" />
                    </div>
                </div>
                <div>
                    <label for="strategy-quest4" class="block text-sm font-semibold leading-6 text-gray-900">
                        Quantas páginas deve ter? (estimativa)
                    </label>
                    <div class="mt-2.5">
                        <input type="number" name="strategy-quest4" placeholder="informe apenas o numero" id="strategy-quest4" value="{{ old('strategy-quest4') }}" autocomplete="strategy-quest4" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <x-input-error :messages="$errors->get('strategy-quest4')" class="mt-2" />
                    </div>
                </div>
                <div class="sm:col-span-2">
                    <label for="strategy-quest5" class="block text-sm font-semibold leading-6 text-gray-900">O que você
                        quer que seus usuários façam em seu site?</label>
                    <div class="mt-2.5">
                        <textarea name="strategy-quest5" id="strategy-quest5" value="{{ old('strategy-quest5') }}" rows="4" placeholder="Descreva sendo objetivo e claro." class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        <x-input-error :messages="$errors->get('strategy-quest5')" class="mt-2" />
                    </div>
                </div>
            </div>
            <div class="mt-10 mb-10">
                <button id="btnSubmit" onclick="submitForm()" class="w-full rounded-md bg-indigo-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Enviar
                </button>
            </div>
        </form>
    </div>
    @include('components.tabBottom.tabBottom')

</x-app-layout>