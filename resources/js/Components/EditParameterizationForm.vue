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

        <hr />
        <div class="md:inline-flex w-full space-y-4 md:space-y-0 p-8 text-gray-500 items-center">
            <div class="md:w-3/12 text-center md:pl-6">
                <button class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-yellow-700 hover:bg-yellow-800 focus:outline-none focus:ring-yellow-300 dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800 py-2 px-4 inline-flex items-center focus:outline-none md:float-right">
                    <svg
                        fill="none"
                        class="w-4 text-white mr-2"
                        viewBox="0 0 24 24"
                        stroke="currentColor"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                    />
                    </svg>
                    Edit
                </button>
            </div>
        </div>
    </div>
</template>