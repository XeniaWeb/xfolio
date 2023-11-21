<script setup>
import XenAdminBaseLayout from '@/Layouts/AdminBase.vue';
import XenSaidNavLink from '@/Components/SaidNavLink.vue';
import {Head} from '@inertiajs/vue3';

defineProps({
    categories: Object,
});
</script>

<template>
    <Head title="Categories"/>

    <XenAdminBaseLayout>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-dashboard bg-left-top bg-no-repeat fixed"></div>
        </template>
        <template #header>
            <div class="p-4 sm:py-8 bg-white rounded-lg">
                <h2 class="font-bold text-2xl md:text-xl text-zinc-700 leading-tight">
                    Categories
                </h2>
            </div>
        </template>
        <template #rightBlock>
            <XenSaidNavLink :href="route('admin.categories.create')" class="bg-gray-50 border-b-3 border-b-gray-200 py-2">
                Add Category
            </XenSaidNavLink>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Список категорий от админа-->
                    <div class="bg-orange-200/40">
                        <ul id="categoriesList">
                            <li v-for="category in categories" :key="category.key" class="mb-2">
                                {{ category.title }}
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
