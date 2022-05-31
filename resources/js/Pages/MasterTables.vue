<script setup>
import CardVueComponent from '@/Components/Card.vue';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="MasterTables" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Master Tables
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="md:flex md:justify-center md:space-x-8 md:px-14">
                            <CardVueComponent title="Status Types" :href="route('masterTables.status')">
                                
                            </CardVueComponent>

                            <CardVueComponent title="User Types" :href="route('masterTables.users')">
                                
                            </CardVueComponent>

                            <CardVueComponent title="Identification Types" :href="route('masterTables.identifications')">
                                
                            </CardVueComponent>
                        </div>
                        <div class="md:flex md:justify-center md:space-x-8 md:px-14">
                            <CardVueComponent title="Contract Types" :href="route('masterTables.contracts')">
                                
                            </CardVueComponent>

                            <CardVueComponent title="Property Types" :href="route('masterTables.properties')">
                                
                            </CardVueComponent>

                            <CardVueComponent title="Event Types" :href="route('masterTables.events')">
                                
                            </CardVueComponent>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>