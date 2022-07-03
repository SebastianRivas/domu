<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    userData: Object,
})
</script>

<template>
    <Head title="ViewUser" />
    
    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                View User
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
                                        <h1 class="text-gray-600"> {{ userData[0].first_name }} {{ userData[0].last_name }} </h1>
                                    </div>
                                </div>
                            </div>

                            <div class="bg-white space-y-6">
                                <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-gray-500 items-center">
                                    <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
                                    <div class="md:w-2/3 max-w-sm mx-auto">
                                        <label class="text-sm text-gray-400">Email</label>
                                        <div class="w-full inline-flex border">
                                            <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
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
                                                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                                                />
                                                </svg>
                                            </div>
                                            <input
                                                :value="userData[0].email" 
                                                type="email"
                                                class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                disabled
                                            />
                                        </div>
                                    </div>
                                </div>

                                <hr />
                                <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
                                    <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
                                    <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
                                        <div>
                                            <label class="text-sm text-gray-400">Full name</label>
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
                                                <div>
                                                    <input
                                                        :value="userData[0].first_name"
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="First Name"
                                                    />
                                                </div>
                                                <div>
                                                    <input
                                                        :value="userData[0].last_name"
                                                        type="text"
                                                        class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                        placeholder="Last Name"
                                                    />
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <label class="text-sm text-gray-400">Identification Type</label>
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
                                            <label class="text-sm text-gray-400">Identification Number</label>
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
                                                    :value="userData[0].identification_number"
                                                    type="text"
                                                    class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                    placeholder="Identification Number"
                                                />
                                            </div>
                                        </div>
                                        <div>
                                            <label class="text-sm text-gray-400">Phone number</label>
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
                                                    :value="userData[0].phone_number"
                                                    type="text"
                                                    class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                    placeholder="Phone Number"
                                                />
                                            </div>
                                        </div>
                                        <div>
                                            <label class="text-sm text-gray-400">Age</label>
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
                                                    :value="userData[0].age"
                                                    type="text"
                                                    class="w-11/12 border-gray-300 focus:border-yellow-600 focus:ring focus:ring-yellow-500 focus:outline-none focus:text-gray-600 p-2"
                                                    placeholder="Age"
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