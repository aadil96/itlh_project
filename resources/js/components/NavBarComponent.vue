<template>
    <div>
        <header>
            <nav class="flex items-center justify-between flex-wrap rounded bg-white p-6 shadow-lg md:pb-4">
                <div class="flex items-center flex-shrink-0 text-gray-800 mr-6">
                <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                <span class="font-semibold text-xl tracking-tight">Marketplace</span>
                </div>
                <div class="block lg:hidden">
                <button @click="isOpen = !isOpen" class="flex items-center px-3 py-2 border rounded text-teal-200 border-teal-400 hover:text-white hover:border-white">
                    <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Home</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                </button>
                </div>
                <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                <div id="nav-items" :class="isOpen ? 'block' : 'hidden'" class="text-base lg:flex-grow font-bold">
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-teal-500 mr-4">
                    Home
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-teal-500 mr-4">
                    Examples
                    </a>
                    <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 text-gray-800 hover:text-teal-500">
                    Blog
                    </a>
                </div>

            </div>

        </nav>
    </header>
    </div>

</template>

<script>
    export default {
            data(){
                return {
                    isOpen: false,
                }
            }
        }
</script>
