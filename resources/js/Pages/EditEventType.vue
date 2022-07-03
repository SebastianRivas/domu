<script setup>
import EditParameterizationForm from '@/Components/EditParameterizationForm.vue';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import { Head } from '@inertiajs/inertia-vue3';
import { Link } from '@inertiajs/inertia-vue3';
import { useForm } from '@inertiajs/inertia-vue3';

const form = useForm({
    name: '',
    description: '',
});

const submit = () => {
    form.post(route('masterTables.events.update'))
};
</script>

<template>
    <Head title="EditEventType" />

    <BreezeAuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Edit Event Type
            </h2>
        </template>

        <form @submit.prevent="submit">
            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
                                <EditParameterizationForm>
                                    
                                </EditParameterizationForm>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </BreezeAuthenticatedLayout>
</template>