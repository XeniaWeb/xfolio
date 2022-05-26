<script setup>
import XenAdminBaseLayout from '@/Layouts/AdminBase';
import {Head} from '@inertiajs/inertia-vue3';
</script>

<template>
    <Head title="Works"/>

    <XenAdminBaseLayout>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-dashboard bg-left-top bg-no-repeat fixed"></div>
        </template>
        <template #header>
            <div class="p-4 sm:py-8 bg-white rounded-lg">
                <h2 class="font-bold text-2xl md:text-xl text-zinc-700 leading-tight">
                    List of Works
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
<!--                    <div class="p-6 bg-white border-b border-gray-200">-->
<!--                        You're logged in!-->
<!--                    </div>-->
                    <p>
                        Здесь будет список работ от админа
                    </p>
                </div>
            </div>
        </div>
    </XenAdminBaseLayout>
</template>

<style scoped>
.bg-dashboard {
    background-color: #757575;
    background-image:
        /*linear-gradient(to left, transparent 25%, rgba(255, 255, 255, 0.7) 98%),*/ /*linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0.7) 15%, transparent),*/
        url('@@/bg-bayern5.jpg');
    opacity: 0.2;
}
</style>
