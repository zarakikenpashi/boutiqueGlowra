<header class="relative h-screen">
    <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
        <source src="{{ url('storage/Banner-Lifter-Plump.mp4') }}" type="video/mp4">
        Votre navigateur ne supporte pas la lecture de vidéos.
    </video>

    <nav x-data="{ open: false }" class="bg-gray-800 relative z-10">
        <!-- Primary Navigation Menu -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex w-full justify-between items-center ">
                        <!-- Logo -->
                        <div class="shrink-0 flex items-center">
                            <a href="{{ url('/') }}" class="flex flex-col sm:flex-row items-center text-white">
                                <x-application-logo class="block h-9 w-auto fill-current text-white" />
                                LaraShop
                            </a>
                        </div>
    
                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex text-white">
                        <x-nav-link 
                            :href="url('/maquillages')" 
                            class="text-white hover:border-white hover:text-white">
                            {{ __('Maquillages') }}
                        </x-nav-link>

                        <x-nav-link :href="url('/parfuns')" class="text-white hover:border-white hover:text-white">
                            {{ __('Parfuns') }}
                        </x-nav-link>
    
                        <x-nav-link :href="url('/soins')" class="text-white hover:border-white hover:text-white">
                            {{ __('Soins') }}
                        </x-nav-link>
    
                        <x-nav-link :href="url('/cheveux')" class="text-white hover:border-white hover:text-white">
                            {{ __('Cheveux') }}
                        </x-nav-link>

                        <x-nav-link :href="url('/accessoires')" class="text-white hover:border-white hover:text-white">
                            {{ __('Accessoires') }}
                        </x-nav-link>
                    </div>
    
    
                    <div class="relative">
                        <div class="absolute bottom-0 top-0 left-0 flex items-center justify-center p-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" class="w-5 h-5 text-slate-200">
                                <path fill-rule="evenodd" d="M9 3.5a5.5 5.5 0 100 11 5.5 5.5 0 000-11zM2 9a7 7 0 1112.452 4.391l3.328 3.329a.75.75 0 11-1.06 1.06l-3.329-3.328A7 7 0 012 9z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <input id="search" name="search" class="rounded-xl border-slate-200 ps-6" placeholder="Search" type="search">
                    </div>
    
    
    
                </div>
    
    
    
                <!-- Hamburger -->
                <div class="-me-2 flex items-center sm:hidden">
                    <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                        <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                            <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    
        <!-- Responsive Navigation Menu -->
        <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
            <div class="pt-2 pb-3 space-y-1">
                <x-responsive-nav-link :href="url('/maquillages')" class="text-white hover:border-white hover:text-white">
                    {{ __('Maquillages') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="url('/parfuns')" class="text-white hover:border-white hover:text-white">
                    {{ __('Parfuns') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="url('/soins')" class="text-white hover:border-white hover:text-white">
                    {{ __('Soins') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="url('/cheveux')" class="text-white hover:border-white hover:text-white">
                    {{ __('Cheveux') }}
                </x-responsive-nav-link>

                <x-responsive-nav-link :href="url('/accessoires')" class="text-white hover:border-white hover:text-white">
                    {{ __('Accessoires') }}
                </x-responsive-nav-link>
            </div>
    
    
            <!-- Responsive Settings Options -->
    
        </div>
    </nav>

    <div class="cover__description absolute bottom-0 max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <h2 class="text-4xl md:text-7xl text-white uppercase">Lifter Plump Gloss enrichi en piment</h2>
    </div>
</header>
