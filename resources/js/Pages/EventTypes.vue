<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import Pagination from '@/Components/Pagination.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    eventTypesArr: Object,
})
</script>

<template>
    <Head title="EventTypes" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Event Types
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                            <div class="p-4">
                                <div class="relative mt-1">
                                    <form class="flex items-center">   
                                        <label for="simple-search" class="sr-only">Search</label>
                                        <div class="relative w-full">
                                            <div class="flex absolute inset-y-0 left-0 items-center pl-3 pointer-events-none">
                                                <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                                            </div>
                                            <input type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
                                        </div>
                                        <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg></button>
                                    </form>
                                </div>
                            </div>

                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            Name
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Description
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            Actions
                                        </th>
                                    </tr>
                                </thead>
                                <tbody v-if="eventTypesArr.data.length > 0">
                                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700" v-for="eventType in eventTypesArr.data">
                                        <td class="px-6 py-4"> {{ eventType.name }} </td>
                                        <td class="px-6 py-4"> {{ eventType.description }} </td>
                                        <tr>
                                            <td class="px-6 py-4 text-right">
                                                <Link class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    View
                                                </Link>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <Link class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Edit
                                                </Link>
                                            </td>
                                            <td class="px-6 py-4 text-right">
                                                <Link class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Delete
                                                </Link>
                                            </td>
                                        </tr>
                                    </tr>
                                </tbody>
                                <tbody v-else>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="flex flex-col items-center">
                            <!-- Help text -->
                            <span class="text-sm text-gray-700 dark:text-gray-400">
                                Showing <span class="font-semibold text-gray-900 dark:text-white">{{ eventTypesArr.to }}</span> of <span class="font-semibold text-gray-900 dark:text-white">{{ eventTypesArr.total }}</span> Entries
                            </span>

                            <div class="inline-flex mt-2 xs:mt-0">
                                <Pagination class="mt-6" :links="eventTypesArr.links"> 

                                </Pagination>
                            </div>
                        </div>
                        <br>
                        <div class="flex flex-col items-center">
                            <Link>
                                <button type="button" class="text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 shadow-lg shadow-blue-500/50 dark:shadow-lg dark:shadow-blue-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 ">
                                    New Event Type
                                </button>
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>