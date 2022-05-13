<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import { ref } from 'vue';
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
})
</script>

<template>
    <Head title="Welcome" />

    <header>
        <!-- Navbar -->
        <nav class="py-2 bg-white">
            <div class="md:container px-2 md:px-0 mx-auto flex justify-between">
            <Link :href="route('welcome')">
                <BreezeApplicationLogo class="block h-40 w-auto" />
            </Link>
            <div class="space-y-1.5 cursor-pointer">
                <BreezeDropdown align="right" width="48">
                    <template #trigger>
                        <span class="inline-flex rounded-md">
                            <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </button>
                        </span>
                    </template>

                    <template #content>
                        <div v-if="canLogin">
                            <BreezeDropdownLink v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm text-gray-700 underline">
                                Dashboard
                            </BreezeDropdownLink>

                            <template v-else>
                                <BreezeDropdownLink :href="route('login')" class="text-sm text-gray-700 underline">
                                    Log in
                                </BreezeDropdownLink>

                                <BreezeDropdownLink v-if="canRegister" :href="route('register')" class="text-sm text-gray-700 underline">
                                    Register
                                </BreezeDropdownLink>
                            </template>
                        </div>
                    </template>
                </BreezeDropdown>
            </div>
            </div>
        </nav>

        <!-- Section Hero -->
        <div class="bg-neutral-900 py-14">
            <h1 class="mt-8 text-center text-5xl text-yellow-600 font-bold">Welcome to Domu Trusted.</h1>

            <!-- Box -->
            <div class="md:flex md:justify-center md:space-x-8 md:px-14">
            <!-- box-1 -->
            <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                <div class="w-sm">
                <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/a17abde8d83650a582a28432/users-with-speech-bubbles-vector_53876-82250.jpg" alt="" />
                <div class="mt-4 text-yellow-600 text-center">
                    <h1 class="text-xl font-bold">History</h1>
                    <p class="mt-4 text-gray-600">Pretium lectus quam id leo in vitae turpis. Mattis pellentesque id nibh tortor id.</p>
                    <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</button>
                </div>
                </div>
            </div>

            <!-- box-2 -->
            <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                <div class="w-sm">
                <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/3b242447f922540fbe750cab/fdf.jpg" alt="" />
                <div class="mt-4 text-yellow-600 text-center">
                    <h1 class="text-xl font-bold">Mission</h1>
                    <p class="mt-4 text-gray-600">Nunc consequat interdum varius sit amet mattis vulputate enim nulla. Risus feugiat.</p>
                    <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</button>
                </div>
                </div>
            </div>

            <!-- box-3 -->
            <div class="mt-16 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
                <div class="w-sm">
                <img class="w-64" src="https://images01.nicepage.com/c461c07a441a5d220e8feb1a/8cc47b39e719570b996d9879/dsds.jpg" alt="" />
                <div class="mt-4 text-yellow-600 text-center">
                    <h1 class="text-xl font-bold">Contact Us</h1>
                    <p class="mt-4 text-gray-600">Nisl purus in mollis nunc sed id semper. Rhoncus aenean vel elit scelerisque mauris.</p>
                    <button class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</button>
                </div>
                </div>
            </div>
            </div>
        </div>
    </header>

            <!-- Footer -->
    <footer class="text-center py-1 bg-neutral-700 text-sm">
        <p class="mt-4 text-white">
            Domu Trusted <br />
            Miami FL <br />
            <br />
            Copyright © 2022 Domu Trusted<br />
            Powered by Neutron Technologies
            <center>
                <img src="./NeutronB.png" alt="" class="w-20 h-20">
            </center>
        </p>
    </footer>
</template>