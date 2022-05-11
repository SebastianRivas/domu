<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Properties" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Properties
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're in properties module!
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
        <!-- Footer -->
    <footer class="text-center py-1 bg-gray-700 text-sm">
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