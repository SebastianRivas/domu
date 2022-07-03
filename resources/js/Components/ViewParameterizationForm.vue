<script setup>

</script>

<template>
    <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-yellow-600 rounded-t">
        <div class="max-w-sm mx-auto md:w-full md:mx-0">
            <div class="inline-flex items-center space-x-4">
                <h1 class="text-gray-600">  </h1>
            </div>
        </div>
    </div>
    
    <div class="bg-white space-y-6">
        <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-gray-500 items-center">
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
            </div>
        </div>
    </div>
</template>