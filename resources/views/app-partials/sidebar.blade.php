<aside class="bg-sidebar relative hidden h-screen w-64 shadow-xl sm:block">
    <div class="p-6">
        <a href="index.html" class="text-2xl font-semibold text-white hover:text-gray-300">
            {{ getAppTitle() }}
        </a>
        <a href="{{ getCTAConfig()['url'] }}" class="cta-btn mt-5 flex w-full items-center justify-center rounded-bl-lg rounded-br-lg rounded-tr-lg bg-white py-2 font-semibold shadow-lg hover:bg-gray-300 hover:shadow-xl">
            <i class="fas fa-plus mr-3"></i>
            {{ getCTAConfig()['label'] }}
        </a>
    </div>
    <nav class="pt-3 text-base font-semibold text-white">

        @foreach (getMenuItems() as $menu)
            <a
                href="/{{ $menu->url }}"
                class="flex items-center text-white py-4 pl-6 nav-item
                    {{ request()->is($menu->url.'*') ? 'active-nav-link' : 'opacity-75 hover:opacity-100' }}"
            >
                @svg($menu->icon, 'w-4 h-4 mr-3')
                {{ $menu->title }}
            </a>
        @endforeach
    </nav>
</aside>
