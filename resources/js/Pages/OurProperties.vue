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
    <Head title="OurProperties" />

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
                            <BreezeDropdownLink v-if="$page.props.auth.user" :href="route('dashboard.index')" class="text-sm text-gray-700 underline">
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
        <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto max-w-7x1">
            <div class="flex flex-wrap w-full mb-4 p-4">
            <div class="w-full mb-6 lg:mb-0">
                <h1 class="sm:text-4xl text-5xl font-medium font-bold title-font mb-2 text-gray-900">Our Properties</h1>
                <div class="h-1 w-20 bg-indigo-500 rounded"></div>
            </div>
            </div>
            <div class="flex flex-wrap -m-4">
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="bg-white p-6 rounded-lg">
                <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72  rounded w-full object-cover object-center mb-6" src="https://kuyou.id/content/images/ctc_2020021605150668915.jpg" alt="Image Size 720x400">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Chichen Itza</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <p>
                    <br>
                    <a :href="route('public.property.show', { property_id: 1 })" class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</a>
                </p>                
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="bg-white p-6 rounded-lg">
                <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://asset.kompas.com/crops/Pk_pN6vllxXy1RshYsEv74Q1BYA=/56x0:1553x998/750x500/data/photo/2021/06/16/60c8f9d68ff4a.jpg" alt="Image Size 720x400">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Colosseum Roma</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <p>
                    <br>
                    <a :href="route('public.property.show', { property_id: 1 })" class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</a>
                </p> 
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="bg-white p-6 rounded-lg">
                <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://images.immediate.co.uk/production/volatile/sites/7/2019/07/33-GettyImages-154260931-216706f.jpg?quality=90&resize=768%2C574" alt="Image Size 720x400">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">Great Pyramid of Giza</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <p>
                    <br>
                    <a :href="route('public.property.show', { property_id: 1 })" class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</a>
                </p> 
                </div>
            </div>
            <div class="xl:w-1/3 md:w-1/2 p-4">
                <div class="bg-white p-6 rounded-lg">
                <img class="lg:h-60 xl:h-56 md:h-64 sm:h-72 xs:h-72 h-72 rounded w-full object-cover object-center mb-6" src="https://wisatamuda.com/wp-content/uploads/2019/02/1-Golden-Gate-Bridge-Gambar-dan-Foto-Tempat-Wisata-Terbaik-di-San-Fransisco-USA.jpg" alt="Image Size 720x400">
                <h3 class="tracking-widest text-indigo-500 text-xs font-medium title-font">SUBTITLE</h3>
                <h2 class="text-lg text-gray-900 font-medium title-font mb-4">San Francisco</h2>
                <p class="leading-relaxed text-base">Fingerstache flexitarian street art 8-bit waistcoat. Distillery hexagon disrupt edison bulbche.</p>
                <p>
                    <br>
                    <a :href="route('public.property.show', { property_id: 1 })" class="mt-8 mb-4 py-2 px-14 rounded-full bg-yellow-600 text-white tracking-widest hover:bg-yellow-500 transition duration-200">MORE</a>
                </p> 
                </div>
            </div>
            </div>
        </div>
        </section>
    </header>
</template>