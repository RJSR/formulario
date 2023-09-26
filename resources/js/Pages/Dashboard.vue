<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';

const props = defineProps({
            color:{type:Object,default:() => ({})},
            colors:{type:Object}

}); 
</script>

<template v-for="color, i in colors" :key="color.id">
    <Head title="Dashboard"  />

    <AuthenticatedLayout >
        <template #header :style="{ backgroundColor: color.bgcolor, color: color.fontcolor }" >
            <h2 class="font-semibold text-xl text-gray-800 leading-tight" >Dashboard</h2>
        </template>

        <div class="py-12" v-for="color, i in colors" :key="color.id" >
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8" >
                <div class="overflow-hidden shadow-sm sm:rounded-lg" :style="{ backgroundColor: color.bgcolor, color: color.fontcolor }" >
                    <div class="p-6 text-gray-900">Has iniciado sesión correctamente!</div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
