<script setup>
import XenAdminBaseLayout from '@/Layouts/AdminBase.vue';
import XenSaidNavLink from '@/Components/SaidNavLink.vue';
import {Head} from '@inertiajs/inertia-vue3';

defineProps({
    technologies: Object,
});
</script>
<template>
    <Head title="Technologies"/>
<!--    <pre>{{ technologies }}</pre>-->

    <XenAdminBaseLayout>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-dashboard bg-left-top bg-no-repeat fixed"></div>
        </template>
        <template #header>
                <h2 class="font-bold text-2xl md:text-xl text-zinc-700 leading-tight">
                    List of Technologies
                </h2>
        </template>
        <template #rightBlock>
                <XenSaidNavLink :href="route('admin.technologies.create')" class="bg-gray-50 border-b-3 border-b-gray-200 py-2">
                    Add Technology
                </XenSaidNavLink>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Список технологий от админа-->
                    <div class="bg-green-400/40">
                        <ul id="technologiesList">
                            <li v-for="technology in technologies" :key="technology.key"  class="mb-2">
                                {{ technology.title }}
                            </li>
                        </ul>
                    </div>
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
        url('/images/bg-bayern5.jpg');
    opacity: 0.2;
}
</style>
