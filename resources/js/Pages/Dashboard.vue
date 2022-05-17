<script setup>
import XenBaseLayout from '@/Layouts/Base.vue';
import BreezeAuthenticatedLayout from '@/Layouts/Authenticated.vue';
import {Head} from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Dashboard"/>

    <XenBaseLayout>
        <template #header>
            <div class="p-4 sm:py-8">
                <h2 class="font-bold text-2xl md:text-xl text-zinc-700 leading-tight">
                    Dashboard
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200">
                        You're logged in!
                    </div>
                </div>
            </div>
        </div>
    </XenBaseLayout>
</template>
