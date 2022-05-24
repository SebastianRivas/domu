<script setup>
import CardVueComponent from '@/Components/Card.vue';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
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
                        <div class="md:flex md:justify-between gap-6">
                            <div class="grid grid-cols-4 gap-4">
                                <div>
                                    <CardVueComponent title="Status Types" :href="route('masterTables')">
                                        
                                    </CardVueComponent>
                                </div>
                                <div>
                                    <CardVueComponent title="User Types" :href="route('masterTables')">
                                        
                                    </CardVueComponent>
                                </div>
                                <div>
                                    <CardVueComponent title="Identification Types" :href="route('masterTables')">
                                        
                                    </CardVueComponent>
                                </div>
                                <div>
                                    <CardVueComponent title="Contract Types" :href="route('masterTables')">
                                        
                                    </CardVueComponent>
                                </div>
                                <div>
                                    <CardVueComponent title="Property Types" :href="route('masterTables')">
                                        
                                    </CardVueComponent>
                                </div>
                                <div>
                                    <CardVueComponent title="Event Types" :href="route('masterTables')">
                                        
                                    </CardVueComponent>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>