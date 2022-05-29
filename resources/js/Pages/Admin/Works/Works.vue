<script setup>
import XenAdminBaseLayout from '@/Layouts/AdminBase';
import XenSaidNavLink from '@/Components/SaidNavLink';
import {Head} from '@inertiajs/inertia-vue3';

defineProps({
    works: Object,
});
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
        <template #rightBlock>
            <XenSaidNavLink :href="route('admin.works.create')" class="bg-gray-50 border-b-3 border-b-gray-200 py-2">
                Add Work
            </XenSaidNavLink>
        </template>
<!--        <div class="">-->
<!--            <BreezeButton class="ml-4" :class="bg-red-100">-->
<!--                Add Work-->
<!--            </BreezeButton>-->
<!--        </div>-->

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <!-- Список работ от админа-->
                    <div class="bg-green-400/40">
                        <ul id="technologiesList">
                            <li v-for="work in works" :key="work.key" class="mb-2">
                                <h3 class="font-bold ">{{ work.title }}</h3>
                                <p class="">{{ work.description }}</p>

                                <img v-if="work.work_image" :src="work.work_image" height="200" width="300"/>
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
        url('@@/bg-bayern5.jpg');
    opacity: 0.2;
}
</style>
