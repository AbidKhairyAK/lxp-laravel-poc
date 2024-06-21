<header class="hidden w-full items-center bg-white px-6 py-2 sm:flex">
    <div class="w-1/2"></div>
    <div x-data="{ isOpen: false }" class="relative flex w-1/2 justify-end">
        <button @click="isOpen = !isOpen"
            class="realtive z-10 h-12 w-12 overflow-hidden rounded-full border-4 border-gray-400 hover:border-gray-300 focus:border-gray-300 focus:outline-none">
            {{-- <img src="#"> --}}
        </button>
        <button x-show="isOpen" @click="isOpen = false" class="fixed inset-0 h-full w-full cursor-default"></button>
        <div x-show="isOpen" class="absolute mt-16 w-32 rounded-lg bg-white py-2 shadow-lg">
            <a href="#" class="account-link block px-4 py-2 hover:text-white">Account</a>
            <a href="#" class="account-link block px-4 py-2 hover:text-white">Support</a>
            <a href="#" class="account-link block px-4 py-2 hover:text-white">Sign Out</a>
        </div>
    </div>
</header>
