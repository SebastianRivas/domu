<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    
})
</script>

<template>
    <Head title="ViewContract" />
    
 <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View Contract
            </h2>
        </template>

        <form @submit.prevent="submit">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                                <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-yellow-600 rounded-t">
                                    <div class="max-w-sm mx-auto md:w-full md:mx-0">
                                        <div class="inline-flex items-center space-x-4">
                                            <h1 class="text-gray-600">  </h1>
                                        </div>
                                    </div>
                                </div>

                                <div class="bg-white space-y-6">
                                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                                        <h2 class="md:w-1/3 mx-auto max-w-sm">Contract info</h2>
                                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                                        <div>
                                                <label class="text-sm text-gray-400">Contractor</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="w-1/12 pt-2 bg-gray-100">
                                                        <svg
                                                            fill="none"
                                                            class="w-6 text-gray-400 mx-auto"
                                                            viewBox="0 0 24 24"
                                                            stroke="currentColor"
                                                        >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <select
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Identification Type"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Property</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="w-1/12 pt-2 bg-gray-100">
                                                        <svg
                                                            fill="none"
                                                            class="w-6 text-gray-400 mx-auto"
                                                            viewBox="0 0 24 24"
                                                            stroke="currentColor"
                                                        >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <select
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Identification Type"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Serial</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="w-1/12 pt-2 bg-gray-100">
                                                        <svg
                                                            fill="none"
                                                            class="w-6 text-gray-400 mx-auto"
                                                            viewBox="0 0 24 24"
                                                            stroke="currentColor"
                                                        >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Identification Number"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Observations</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="w-1/12 pt-2 bg-gray-100">
                                                        <svg
                                                            fill="none"
                                                            class="w-6 text-gray-400 mx-auto"
                                                            viewBox="0 0 24 24"
                                                            stroke="currentColor"
                                                        >
                                                        <path
                                                            stroke-linecap="round"
                                                            stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Identification Number"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </BreezeAuthenticatedLayout>
</template>