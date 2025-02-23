<!-- navigation.blade.php -->

<nav x-data="{ open: false }" class="bg-white border-b border-gray-200">
    <!-- Primary Navigation Menu -->
    <div class="z-50 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <!-- Logo -->
            <div class="z-50 flex-shrink-0 flex items-center">
                <a href="/">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo Neohubble"
                        class="mr-5 block h-12 w-auto fill-current text-gray-600" />
                </a>
                <x-nav-link :href="route('simulator')" :active="request()->routeIs('simulator')">
                    {{ __('Orçamento') }}
                </x-nav-link>
                <!-- <x-nav-link :href="route('dashboard')" :active="request()->routeIs('service')">
                    {{ __('Serviços') }}
                </x-nav-link> -->
                <x-nav-link :href="route('blog.index')" :active="request()->routeIs('blog.index')">
                    {{ __('Blog') }}
                </x-nav-link>
                <x-nav-link style="color: #4F46E5" target href="https://www.linkedin.com/in/brunocotaxavier/"
                    :active="request()->routeIs('linkedin')">
                    {{ __('Linkedin') }}
                </x-nav-link>
            </div>

            <!-- Navigation Links -->
            @guest
            <div class="z-50 hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                <x-nav-link class="text-sm font-semibold leading-6 text-gray-900" :href="route('dashboard')"
                    :active="request()->routeIs('dashboard')">
                    Entrar <span class="ml-1" aria-hidden="true">&rarr;</span>
                </x-nav-link>
                <!-- <a href="login" class="text-sm font-semibold leading-6 text-gray-900">Entrar <span aria-hidden="true">&rarr;</span></a> -->
                <!-- Add more navigation links as needed -->
            </div>
            @endguest

            @auth
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button
                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div class="z-50">{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
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
                <button @click="open = !open"
                    class="inline-flex items-center justify-center p-2 text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:ring focus:ring-inset focus:ring-gray-500">
                    <span class="sr-only">Open main menu</span>o
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                        xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16m-7 6h7"></path>
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
            @endguest
            @auth
            <x-responsive-nav-link :href="route('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('blog.index')">
                {{ __('Blog') }}
            </x-responsive-nav-link>
            <x-responsive-nav-link :href="route('profile.edit')">
                {{ __('Perfil') }}
            </x-responsive-nav-link>
            @endauth
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