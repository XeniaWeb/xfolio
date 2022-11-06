<script setup>
import XenBaseLayout from '@/Layouts/Base.vue';
import {ChevronDoubleDownIcon} from '@heroicons/vue/solid'
import {Head, Link} from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="Contacts"/>

    <XenBaseLayout>
        <template #link_portfolio>
            <ChevronDoubleDownIcon class="text-myYellow h-6 w-6 sm:h-8 sm:w-8"/>
            <span class="text-base font-semibold sm:text-lg xl:text-xl text-gray-700">
                My&nbsp;Works
            </span>
        </template>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-contacts bg-left bg-no-repeat fixed"></div>
        </template>
        <template #header>
            <div class="p-4 sm:py-8">
                <h2 class="font-bold text-2xl md:text-xl text-zinc-700 leading-tight">
                    My contacts
                </h2>
            </div>
        </template>

        <div class="py-12">
            <div class="flex overflow-hidden sm:rounded-lg">
                <div class="py-6 px-10 sm:px-12 lg:px-16 text-xl md:text-base">
                    <strong>Web Development</strong>
                    <br>
                    <br>
                    <p>
                        xenia1898@gmail.com <br>
                        +41 76 410 410 1
                    </p><br>
                    <strong>Oksana Bürki</strong>
                </div>
            </div>
        </div>
    </XenBaseLayout>
</template>

<style scoped>
.bg-contacts {
    /*background-color:  #757575;*/
    background-image: /*linear-gradient(to left, transparent 25%, rgba(255,255,255, 0.7) 98%),*/ linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0.7) 15%, transparent),
    url( '/images/bg-bayern3.jpg');
}
</style>
