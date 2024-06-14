<header x-data="{ isOpen: false }" class="bg-sidebar w-full px-6 py-5 sm:hidden">
    <div class="flex items-center justify-between">
        <a href="/" class="text-3xl font-semibold uppercase text-white hover:text-gray-300">
            {{ getAppTitle() }}
        </a>
        <button @click="isOpen = !isOpen" class="text-3xl text-white focus:outline-none">
            <i x-show="!isOpen" class="fas fa-bars"></i>
            <i x-show="isOpen" class="fas fa-times"></i>
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
    <a href="{{ getCTAConfig()['url'] }}" class="cta-btn mt-5 flex w-full items-center justify-center rounded-bl-lg rounded-br-lg rounded-tr-lg bg-white py-2 font-semibold shadow-lg hover:bg-gray-300 hover:shadow-xl">
        <i class="fas fa-plus mr-3"></i>
        {{ getCTAConfig()['label'] }}
    </a>
</header>
