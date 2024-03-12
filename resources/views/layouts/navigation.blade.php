<!-- navigation.blade.php -->

<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">

    <!-- Primary Navigation Menu -->
    <div class="z-50 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="p-0 z-50 flex-shrink-0 flex items-center">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Neohubble" class="mr-5 block h-12 w-auto fill-current text-gray-600" />
                </a>
                <x-nav-link :active="request()->routeIs('#services')">
                    <a href="/#servicos" id="link-servicos" onclick="scrollToServices()" class="inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                        {{ __('Serviços') }}
                    </a>
                </x-nav-link>
                <x-nav-link :href="route('simulator')" :active="request()->routeIs('simulator')">
                    {{ __('Orçamento') }}
                </x-nav-link>
                <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')">
                    {{ __('Blog') }}
                </x-nav-link>
                <div style="z-index: 50; position: absolute; margin-left: 260px; margin-top: 2px" class="z-50 hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown class="custom-z-index" align="right" width="48" style="z-index: 50;">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150" style="z-index: 50;">
                                <div style="color: #5815DD; z-index: 50;">Redes</div>
                                <div class="ms-1" style="z-index: 50;">
                                    <svg style="color: #5815DD; z-index: 50;" class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>
                        <x-slot name="content">
                            <x-dropdown-link target="_blank" class="flex" href="https://www.linkedin.com/company/neohubble">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="25" height="25" fill="#5814dd" viewBox="0 0 256 256">
                                    <path d="M216,24H40A16,16,0,0,0,24,40V216a16,16,0,0,0,16,16H216a16,16,0,0,0,16-16V40A16,16,0,0,0,216,24Zm0,192H40V40H216V216ZM96,112v64a8,8,0,0,1-16,0V112a8,8,0,0,1,16,0Zm88,28v36a8,8,0,0,1-16,0V140a20,20,0,0,0-40,0v36a8,8,0,0,1-16,0V112a8,8,0,0,1,15.79-1.78A36,36,0,0,1,184,140ZM100,84A12,12,0,1,1,88,72,12,12,0,0,1,100,84Z"></path>
                                </svg>
                                {{ __('Likedin') }}
                            </x-dropdown-link>
                            <x-dropdown-link target="_blank" class="flex" href="https://www.instagram.com/neohubble">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="25" height="25" fill="#5814dd" viewBox="0 0 256 256">
                                    <path d="M128,80a48,48,0,1,0,48,48A48.05,48.05,0,0,0,128,80Zm0,80a32,32,0,1,1,32-32A32,32,0,0,1,128,160ZM176,24H80A56.06,56.06,0,0,0,24,80v96a56.06,56.06,0,0,0,56,56h96a56.06,56.06,0,0,0,56-56V80A56.06,56.06,0,0,0,176,24Zm40,152a40,40,0,0,1-40,40H80a40,40,0,0,1-40-40V80A40,40,0,0,1,80,40h96a40,40,0,0,1,40,40ZM192,76a12,12,0,1,1-12-12A12,12,0,0,1,192,76Z"></path>
                                </svg>
                                {{ __('Instagram') }}
                            </x-dropdown-link>
                            <x-dropdown-link target="_blank" class="flex" href="https://www.instagram.com/neohubble/">
                                <svg xmlns="http://www.w3.org/2000/svg" class="pr-2" width="25" height="25" fill="#5814dd" viewBox="0 0 256 256">
                                    <path d="M187.58,144.84l-32-16a8,8,0,0,0-8,.5l-14.69,9.8a40.55,40.55,0,0,1-16-16l9.8-14.69a8,8,0,0,0,.5-8l-16-32A8,8,0,0,0,104,64a40,40,0,0,0-40,40,88.1,88.1,0,0,0,88,88,40,40,0,0,0,40-40A8,8,0,0,0,187.58,144.84ZM152,176a72.08,72.08,0,0,1-72-72A24,24,0,0,1,99.29,80.46l11.48,23L101,118a8,8,0,0,0-.73,7.51,56.47,56.47,0,0,0,30.15,30.15A8,8,0,0,0,138,155l14.61-9.74,23,11.48A24,24,0,0,1,152,176ZM128,24A104,104,0,0,0,36.18,176.88L24.83,210.93a16,16,0,0,0,20.24,20.24l34.05-11.35A104,104,0,1,0,128,24Zm0,192a87.87,87.87,0,0,1-44.06-11.81,8,8,0,0,0-6.54-.67L40,216,52.47,178.6a8,8,0,0,0-.66-6.54A88,88,0,1,1,128,216Z"></path>
                                </svg>
                                {{ __('WhatsApp') }}
                            </x-dropdown-link>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Navigation Links -->
            @guest
            <div class="z-50 hidden space-x-4 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link class="text-sm font-semibold leading-6 text-gray-900" :href="route('register')" :active="request()->routeIs('register')">
                    Registrar-se
                </x-nav-link>
                <p style="padding-top: 18px; margin: 5px">/</p>
                <x-nav-link style="color: #5815DD; margin-left: -4px;" class="text-sm font-semibold leading-6 text-gray-900" :href="route('login')" :active="request()->routeIs('login')">
                    Entrar <span class="ml-1" aria-hidden="true">&rarr;</span>
                </x-nav-link>
            </div>
            @endguest

            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="z-50">{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>
                    <x-slot name="content">
                        <x-dropdown-link :href="route('dashboard')">
                            {{ __('Dashboard') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Perfil') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Sair') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
            @endauth

            <!-- Hamburger -->
            <div class="z-50 -mr-2 flex items-center sm:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-inset focus:ring-gray-500">
                    <span class="sr-only">Open main menu</span>o
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden sm:hidden">
        <div class="relative z-50 pt-2 pb-3 space-y-1">
            @guest
            <x-responsive-nav-link :href="route('login')">
                {{ __('Entrar') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('register')">
                {{ __('Register') }}
            </x-responsive-nav-link>
            @endguest
            @auth
            <x-responsive-nav-link :href="route('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Perfil') }}
            </x-responsive-nav-link>
            @endauth
            <x-responsive-nav-link target="_blank" href="https://www.linkedin.com/company/neohubble">
                {{ __('Linkedin') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link target="_blank" href="https://www.instagram.com/neohubble">
                {{ __('Instagram') }}
            </x-responsive-nav-link>
            <!-- Authentication -->
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                @auth
                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                    this.closest('form').submit();">
                    {{ __('Sair') }}
                </x-responsive-nav-link>
                @endauth
            </form>
            <!-- Add more responsive navigation links as needed -->
        </div>
    </div>
</nav>