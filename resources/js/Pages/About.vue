<script setup>
import XenBaseLayout from '@/Layouts/Base.vue';
import {ChevronDoubleDownIcon} from '@heroicons/vue/solid'
import {Head, Link} from '@inertiajs/inertia-vue3';

</script>

<template>
    <Head title="About"></Head>

    <XenBaseLayout>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-about bg-left-top bg-left-top bg-no-repeat fixed"></div>
        </template>
        <template #link_portfolio>
            <div class="inline-flex ml-auto">
                <ChevronDoubleDownIcon class="text-myYellow h-6 w-6 sm:h-8 sm:w-8"/>
                <span class="text-base font-semibold sm:text-lg xl:text-xl text-gray-700">
                My&nbsp;Works
                </span>
            </div>
        </template>

        <div class="sm:py-4 xl:py-12">
<!--            <div class="max-w-7xl mx-auto sm:px-[5%]">-->
                <div class="lg:flex flex-row justify-end overflow-hidden shadow-sm sm:rounded-lg flex-wrap lg:flex-nowrap">
                    <div class="py-8 self-start sm:mr-4 xl:mr-8 border-radius sm:rounded-lg px-[10%] bg-white/80 border-b border-gray-200 w-full backdrop-blur-sm mb-4">
                        <h3  class="pb-3 text-xl">Hello, I am Oksana.</h3>
                        <p class="pb-2">
                            I'm a Web Developer and Photographer.
                            I'm happy to welcome you to my website.
                        </p>
                        <p class="pb-2">
                            Here you can see
                            <Link :href="route('web-works.index')" class="text-stone-500 hover:bg-gray-200 underline"> my projects </Link>
                            as a full-stack developer.
                        </p>
                        <p class="pb-2">
                            You can find here useful information about web
                            development and about turnkey website creation.
                        </p>
                        <p class="pb-2">
                            I'm glad to acquaint you with
                            <a href="https://stock.adobe.com/ru/contributor/207527840/Oksana%20B%C3%BCrki" class="text-stone-500 hover:bg-gray-200 underline" target="_blank"> my creativity  </a>
                            in the field of photography.
                        </p>
                    </div>
                    <div class=" flex justify-center w-auto lg:h-auto rounded-lg shrink-0 mx-auto">
                        <img src="@@/1.jpg" alt="Photo" class="w-[100%] max-w-[400px] text-center rounded-lg">
                    </div>
                </div>
<!--            </div>-->
        </div>
    </XenBaseLayout>
</template>

<style scoped>
.bg-about {
    background-color: #757575;
    background-image: /*linear-gradient(to left, transparent 25%, rgba(255, 255, 255, 0.7) 98%),*/ /*linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0.7) 15%, transparent),*/ url('@@/bg-bayern5.jpg');
}

.bg-wh {
    background-color: #9aeaaa;
}

.bg-w1 {
    background-image: url('@@/work1.jpg');
    background-size: cover;
}
</style>
