<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    title: String,
    href: String,
});
</script>

<template>
    <div class="mt-6 py-4 px-4 bg-whit w-72 bg-white rounded-xl shadow-lg hover:shadow-xl transform hover:scale-110 transition duration-500 mx-auto md:mx-0">
        <div class="w-sm">
            <div class="mt-4 text-yellow-600 text-center">
                <Link :href="href">
                    <h1 class="text-xl font-bold">{{ title }}</h1>
                </Link>
                <p class="mt-4 text-gray-600">Specific module for the {{ title }}</p>
                <Link :href="href" class="inline-flex items-center py-2 px-3 text-sm font-medium text-center text-white bg-yellow-700 rounded-lg hover:bg-yellow-800 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    Go
                    <svg class="ml-2 -mr-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </Link>
            </div>
        </div>
    </div>
</template>
