<script setup>
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    usersArr: Object,
})

let usersTableJS = new JSTable("#usersTable", {
    sortable: true,
    searchable: true,
});
</script>

<template>
    <Head title="Users" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Users
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <table id="usersTable">
                            <thead>
                                <tr>
                                    <th>user_type</th>
                                    <th>email</th>
                                    <th>created_at</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr v-for=" user in usersArr">
                                    <td> {{ user.user_type }} </td>
                                    <td> {{ user.email }} </td>
                                    <td> {{ user.created_at }} </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>