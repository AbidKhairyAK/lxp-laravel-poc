<header x-data="{ isOpen: false }" class="bg-sidebar w-full px-6 py-5 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="/" class="text-3xl font-semibold uppercase text-white hover:text-gray-300">
            {{ config('app.short_name') }}
        </a>
        <button @click="isOpen = !isOpen" class="text-3xl text-white focus:outline-none">
            <x-lucide-menu x-show="!isOpen" class="h-8 w-8" />
            <x-lucide-x x-show="isOpen" class="h-8 w-8" />
        </button>
    </div>

    <!-- Dropdown Nav -->
    <nav :class="isOpen ? 'flex' : 'hidden'" class="flex flex-col pt-4">

        @foreach (getMenuItems() as $menu)
            <a
                href="/{{ $menu->url }}"
                class="flex items-center text-white py-2 pl-4 nav-item
                    {{ request()->is($menu->url.'*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}"
            >
                @svg($menu->icon, 'w-4 h-4 mr-3')
                {{ $menu->title }}
            </a>
        @endforeach
    </nav>
    <a href="{{ config('layout.cta.url') }}" class="cta-btn mt-5 flex w-full items-center justify-center rounded-bl-lg rounded-br-lg rounded-tr-lg bg-white py-2 font-semibold shadow-lg hover:bg-gray-300 hover:shadow-xl">
        @svg(config('layout.cta.icon'), 'w-5 h-5 mr-3')
        {{ config('layout.cta.label') }}
    </a>
</header>
