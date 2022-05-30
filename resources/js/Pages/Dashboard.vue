<script setup>
import CardVueComponent from '@/Components/Card.vue';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        <div class="md:flex md:justify-center md:space-x-8 md:px-14">
                            <CardVueComponent title="Registered User Administration" :href="route('users.index')">
                                
                            </CardVueComponent>
                            
                            <CardVueComponent title="Master Tables Administration" :href="route('masterTables.index')">
                                
                            </CardVueComponent>
                            
                            <CardVueComponent title="Purchaser Administration" :href="route('purchaser.index')">
                                
                            </CardVueComponent>
                        </div>

                        <div class="md:flex md:justify-center md:space-x-8 md:px-14">
                            <CardVueComponent title="Property Management" :href="route('properties.index')">
                                
                            </CardVueComponent>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </BreezeAuthenticatedLayout>
</template>

