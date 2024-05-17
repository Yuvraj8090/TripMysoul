<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <img src="{{ Voyager::image(setting('site.logo')) }}" alt="Trip My Soul" srcset="" id="navbarLogo">
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <!-- Teams Dropdown -->
                    @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                        <!-- Settings Dropdown -->
                        <div class="ms-3 relative">
                            @if(Auth::check() && Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <x-dropdown align="right" width="48">
                                    <!-- Dropdown Trigger -->
                                    <x-slot name="trigger">
                                        <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                            <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}"  />
                                        </button>
                                    </x-slot>
                        
                                    <!-- Dropdown Content -->
                                    <x-slot name="content">
                                        @if (Route::has('login'))
                                            <nav class="-mx-3 flex flex-1 justify-end">
                                                @auth
                                                <x-dropdown-link href="{{ route('profile.show') }}">
                                                    Profile
                                                </x-dropdown-link>
                        
                                                @else
                                                    <a
                                                        href="{{ route('login') }}"
                                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                                    >
                                                        Log in
                                                    </a>
                        
                                                    @if (Route::has('register'))
                                                        <a
                                                            href="{{ route('register') }}"
                                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                                        >
                                                            Register
                                                        </a>
                                                    @endif
                                                @endauth
                                            </nav>
                                        @endif
                                        </x-slot>
                                </x-dropdown>
                            @else
                        
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        Profile
                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                        </svg>
                                    </button>
                                </span>
                            @endif
                        </div>

                    @endif
    
                    <!-- Settings Dropdown -->
                    <div class="ms-3 relative">
                        <x-dropdown align="left" width="48">
                            <x-slot name="trigger">
                               
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                        border: none !important;
                                    ">
                                            Destinations
    
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                  
                            </x-slot>
    
                            <x-slot name="content">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        Profile
                                    </x-dropdown-link>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Log in
                                        </a>
    
                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                            </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                               
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                        border: none !important;
                                    ">
                                            Travel Styles
    
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                  
                            </x-slot>
    
                            <x-slot name="content">
                                @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            Profile
                                        </x-dropdown-link>
                                        @else
                                            <a
                                                href="{{ route('login') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Log in
                                            </a>
        
                                            @if (Route::has('register'))
                                                <a
                                                    href="{{ route('register') }}"
                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                                >
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                                </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                               
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                        border: none !important;
                                    ">
                                            Why Trip My Soul
    
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                  
                            </x-slot>
    
                            <x-slot name="content">
                             
                                    <nav class="-mx-4 flex flex-1 justify-start">
                                  
                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            About
                                        </x-dropdown-link>
                                      
                                    </nav>
                            
                                </x-slot>
                        </x-dropdown>
                    </div>
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="48">
                            <x-slot name="trigger">
                               
                                    <span class="inline-flex rounded-md">
                                        <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                        border: none !important;
                                    ">
                                    Deals    
                                            <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                            </svg>
                                        </button>
                                    </span>
                  
                            </x-slot>
    
                            <x-slot name="content">
                                @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            Profile
                                        </x-dropdown-link>
                                        @else
                                            <a
                                                href="{{ route('login') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Log in
                                            </a>
        
                                            @if (Route::has('register'))
                                                <a
                                                    href="{{ route('register') }}"
                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                                >
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                                </x-slot>
                        </x-dropdown>
                    </div>
                </div>
            </div>

            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <!-- Teams Dropdown -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="ms-3 relative">
                        <x-dropdown align="right" width="60">
                            <x-slot name="trigger">
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                        {{ Auth::user()->currentTeam->name }}

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 15L12 18.75 15.75 15m-7.5-6L12 5.25 15.75 9" />
                                        </svg>
                                    </button>
                                </span>
                            </x-slot>

                            <x-slot name="content">
                                @if (Route::has('login'))
                                    <nav class="-mx-3 flex flex-1 justify-end">
                                        @auth
                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            Profile
                                        </x-dropdown-link>
                                        @else
                                            <a
                                                href="{{ route('login') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Log in
                                            </a>
        
                                            @if (Route::has('register'))
                                                <a
                                                    href="{{ route('register') }}"
                                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                                >
                                                    Register
                                                </a>
                                            @endif
                                        @endauth
                                    </nav>
                                @endif
                                </x-slot>
                        </x-dropdown>
                    </div>
                @endif

                <!-- Settings Dropdown -->
                {{-- Search --}}
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                    border: none !important;
                                ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_499_297)">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.49146 16.1685C12.4997 16.1685 15.749 12.9191 15.749 8.9109C15.749 4.90265 12.4997 1.65332 8.49146 1.65332C4.48321 1.65332 1.23389 4.90265 1.23389 8.9109C1.23389 12.9191 4.48321 16.1685 8.49146 16.1685Z" stroke="#313041" stroke-width="1.74147" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M17.9253 18.3451L13.623 14.043" stroke="#313041" stroke-width="1.74147" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_499_297">
                                            <rect width="19.16" height="19.16" fill="white" transform="translate(0 0.419922)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            
                                            
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        Profile
                                    </x-dropdown-link>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Log in
                                        </a>
    
                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                            </x-slot>
                    </x-dropdown>
                </div>
                {{-- Call --}}
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>" />
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                    border: none !important;
                                ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_499_300)">
                                            <path d="M18.4492 14.2861V16.8988C18.4502 17.1413 18.4004 17.3814 18.3033 17.6036C18.2061 17.8259 18.0636 18.0254 17.8848 18.1893C17.7061 18.3533 17.4951 18.4782 17.2654 18.5559C17.0356 18.6336 16.7921 18.6624 16.5506 18.6406C13.8707 18.3494 11.2964 17.4336 9.03467 15.9669C6.93036 14.6297 5.14631 12.8457 3.80918 10.7415C2.33732 8.46942 1.42135 5.88264 1.13549 3.19066C1.11372 2.94983 1.14234 2.70709 1.21953 2.47793C1.29671 2.24876 1.42077 2.03818 1.5838 1.85958C1.74683 1.68099 1.94526 1.53829 2.16646 1.44059C2.38765 1.34289 2.62678 1.2923 2.8686 1.29208H5.48132C5.90398 1.28792 6.31373 1.43759 6.6342 1.7132C6.95467 1.98879 7.16398 2.37152 7.22313 2.79004C7.33342 3.62617 7.53793 4.44714 7.83278 5.23729C7.94995 5.54902 7.97531 5.88779 7.90585 6.21348C7.83639 6.53917 7.67502 6.83812 7.44086 7.07491L6.33482 8.18097C7.5746 10.3613 9.3799 12.1666 11.5603 13.4064L12.6664 12.3004C12.9031 12.0662 13.2021 11.9048 13.5278 11.8354C13.8534 11.7659 14.1922 11.7913 14.504 11.9085C15.2941 12.2033 16.1151 12.4078 16.9512 12.5181C17.3742 12.5778 17.7607 12.7909 18.0368 13.1169C18.313 13.4429 18.4597 13.8589 18.4492 14.2861Z" stroke="#313041" stroke-width="1.74147" stroke-linecap="round" stroke-linejoin="round"/>
                                            </g>
                                            <defs>
                                            <clipPath id="clip0_499_300">
                                            <rect width="19.16" height="19.16" fill="white" transform="translate(0.160156 0.419922)"/>
                                            </clipPath>
                                            </defs>
                                            </svg>
                                            
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            @if (Route::has('login'))
                                <nav class="-mx-3 flex flex-1 justify-end">
                                    @auth
                                    <x-dropdown-link href="{{ route('profile.show') }}">
                                        Profile
                                    </x-dropdown-link>
                                    @else
                                        <a
                                            href="{{ route('login') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                        >
                                            Log in
                                        </a>
    
                                        @if (Route::has('register'))
                                            <a
                                                href="{{ route('register') }}"
                                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20]"
                                            >
                                                Register
                                            </a>
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                            </x-slot>
                    </x-dropdown>
                </div>
                {{-- Profile --}}
                <div class="ms-3 relative">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                    <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                </button>
                            @else
                                <span class="inline-flex rounded-md">
                                    <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150" style="
                                    border: none !important;
                                ">
                                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M16.2768 16.7646V15.1679C16.2768 14.321 15.9403 13.5088 15.3414 12.9099C14.7426 12.311 13.9304 11.9746 13.0834 11.9746H6.69675C5.84982 11.9746 5.03759 12.311 4.43872 12.9099C3.83986 13.5088 3.50342 14.321 3.50342 15.1679V16.7646" stroke="#313041" stroke-width="1.59635" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M9.89011 8.7812C11.6537 8.7812 13.0834 7.35149 13.0834 5.58786C13.0834 3.82423 11.6537 2.39453 9.89011 2.39453C8.12648 2.39453 6.69678 3.82423 6.69678 5.58786C6.69678 7.35149 8.12648 8.7812 9.89011 8.7812Z" stroke="#313041" stroke-width="1.59635" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            
                                    </button>
                                </span>
                            @endif
                        </x-slot>

                        <x-slot name="content">
                            @if (Route::has('login'))
                                <nav class="flex items-center px-4">
                                    @auth
                                    <div class="mt-3 space-y-1">
                                        <!-- Account Management -->
                                        <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                                            {{ __('Profile') }}
                                        </x-responsive-nav-link>                        
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf
                        
                                            <x-responsive-nav-link href="{{ route('logout') }}"
                                                           @click.prevent="$root.submit();">
                                                {{ __('Log Out') }}
                                            </x-responsive-nav-link>
                                        </form>
                        
                                        <!-- Team Management -->
                                        @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                            <div class="border-t border-gray-200"></div>
                        
                                            <div class="block px-4 py-2 text-xs text-gray-400">
                                                {{ __('Manage Team') }}
                                            </div>
                        
                                            <!-- Team Settings -->
                                            <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                                                {{ __('Team Settings') }}
                                            </x-responsive-nav-link>
                        
                                            @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                                <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                                                    {{ __('Create New Team') }}
                                                </x-responsive-nav-link>
                                            @endcan
                        
                                            <!-- Team Switcher -->
                                            @if (Auth::user()->allTeams()->count() > 1)
                                                <div class="border-t border-gray-200"></div>
                        
                                                <div class="block px-4 py-2 text-xs text-gray-400">
                                                    {{ __('Switch Teams') }}
                                                </div>
                        
                                                @foreach (Auth::user()->allTeams() as $team)
                                                    <x-switchable-team :team="$team" component="responsive-nav-link" />
                                                @endforeach
                                            @endif
                                        @endif
                                    </div>
                                    @else
                                    <div class="mt-3 space-y-1">
                                        <!-- Account Management -->
                                        <x-responsive-nav-link href="{{ route('login') }}" >
                                            {{ __('Login') }}
                                        </x-responsive-nav-link>                        
                                        <!-- Authentication -->
                                                                            </div>
                                      
    
                                        @if (Route::has('register'))
                                        <x-responsive-nav-link href="{{ route('register') }}">
                                            {{ __('Register') }}
                                        </x-responsive-nav-link>  
                                        @endif
                                    @endauth
                                </nav>
                            @endif
                            </x-slot>
                    </x-dropdown>
                </div>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
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
            <x-responsive-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="flex items-center px-4">
                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                    <div class="shrink-0 me-3">
                        <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg>" />
                    </div>
                @endif

                <div>
                    <div class="font-medium text-base text-gray-800"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></div>
                    <div class="font-medium text-sm text-gray-500"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z"/></svg></div>
                </div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Account Management -->
                <x-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
                    Profile
                </x-responsive-nav-link>

                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                    <x-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
                        {{ __('API Tokens') }}
                    </x-responsive-nav-link>
                @endif

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf

                    <x-responsive-nav-link href="{{ route('logout') }}"
                                   @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>

                <!-- Team Management -->
                @if (Laravel\Jetstream\Jetstream::hasTeamFeatures())
                    <div class="border-t border-gray-200"></div>

                    <div class="block px-4 py-2 text-xs text-gray-400">
                        {{ __('Manage Team') }}
                    </div>

                    <!-- Team Settings -->
                    <x-responsive-nav-link href="{{ route('teams.show', Auth::user()->currentTeam->id) }}" :active="request()->routeIs('teams.show')">
                        {{ __('Team Settings') }}
                    </x-responsive-nav-link>

                    @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                        <x-responsive-nav-link href="{{ route('teams.create') }}" :active="request()->routeIs('teams.create')">
                            {{ __('Create New Team') }}
                        </x-responsive-nav-link>
                    @endcan

                    <!-- Team Switcher -->
                    @if (Auth::user()->allTeams()->count() > 1)
                        <div class="border-t border-gray-200"></div>

                        <div class="block px-4 py-2 text-xs text-gray-400">
                            {{ __('Switch Teams') }}
                        </div>

                        @foreach (Auth::user()->allTeams() as $team)
                            <x-switchable-team :team="$team" component="responsive-nav-link" />
                        @endforeach
                    @endif
                @endif
            </div>
        </div>
    </div>
</nav>
