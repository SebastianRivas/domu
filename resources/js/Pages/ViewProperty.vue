<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="ViewProperty" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View Property
            </h2>
        </template>

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
                                        <h2 class="md:w-1/3 mx-auto max-w-sm">Property</h2>
                                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                                        <div>
                                                <label class="text-sm text-gray-400">Owner</label>
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
                                                <label class="text-sm text-gray-400">Property Type</label>
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
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                                        <h2 class="md:w-1/3 mx-auto max-w-sm">Property Details</h2>
                                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                                        <div>
                                            <label class="text-sm text-gray-400">Name</label>
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
                                                    placeholder="First Name"
                                                />
                                            </div>
                                        </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Description</label>
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
                                                        placeholder="Last Name"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Price</label>
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
                                                        placeholder="Last Name"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Room</label>
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
                                                <label class="text-sm text-gray-400">Bath</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="pt-2 w-1/12 bg-gray-100">
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
                                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Phone Number"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Area</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="pt-2 w-1/12 bg-gray-100">
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
                                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Age"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Garaje</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="pt-2 w-1/12 bg-gray-100">
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
                                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Age"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Build Year</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="pt-2 w-1/12 bg-gray-100">
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
                                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Age"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Location</label>
                                                <div class="w-full inline-flex border">
                                                    <div class="pt-2 w-1/12 bg-gray-100">
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
                                                            d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                                                        />
                                                        </svg>
                                                    </div>
                                                    <input
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Age"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />
                                    <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                                        <h2 class="md:w-1/3 mx-auto max-w-sm">Property Multimedia</h2>
                                        <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                                        <div>
                                                <label class="text-sm text-gray-400">Photos</label>
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
                                                        placeholder="First Name"
                                                    />
                                                </div>
                                            </div>
                                            <div>
                                                <label class="text-sm text-gray-400">Videos</label>
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
                                                        placeholder="Last Name"
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
    </BreezeAuthenticatedLayout>
</template>