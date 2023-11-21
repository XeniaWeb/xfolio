<script setup>
import XenBaseLayout from '@/Layouts/Base.vue';
import {ChevronDoubleDownIcon} from '@heroicons/vue/solid'
import {Head, Link} from '@inertiajs/vue3';

</script>

<template>
    <Head title="About"></Head>

    <XenBaseLayout>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-about bg-left-top bg-no-repeat fixed"></div>
        </template>
        <template #link_portfolio>
            <div class="inline-flex ml-auto">
                <ChevronDoubleDownIcon class="text-myYellow h-6 w-6 sm:h-8 sm:w-8"/>
                <span class="text-base font-semibold sm:text-lg xl:text-xl text-gray-700">
                My&nbsp;Works
                </span>
            </div>
        </template>

        <div class="py-4 xl:py-12">
                <div class="grid-about shadow-sm sm:rounded-lg min-h-[60vh]">
                    <div class="grid-text py-8 md:py-12 sm:mr-4 xl:mr-8 border-radius sm:rounded-lg px-[10%] bg-white/80 border-b border-gray-200 w-full rounded-lg mb-4">
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
                        <p class="">
                            I'm glad to acquaint you with
                            <a href="https://stock.adobe.com/ru/contributor/207527840/Oksana%20B%C3%BCrki" class="text-stone-500 hover:bg-gray-200 underline" target="_blank"> my creativity  </a>
                            in the field of photography.
                        </p>
                    </div>

                    <div class="grid-photo w-full lg:h-auto rounded-lg  mx-auto">
                        <img src="/images/1.jpg" alt="Photo" class="block mx-auto w-[100%] max-w-[400px] text-center rounded-lg">
                    </div>
                </div>
        </div>
    </XenBaseLayout>
</template>

<style scoped>
.grid-about {
    display: block;
}

@media (min-width: 640px) {
    .grid-about {
        display: grid;
        grid-template-areas: "text photo";
        grid-template-columns: 1fr 1fr;
        grid-template-rows: 1fr;
        grid-gap: 20px;
    }
}

@media (min-width: 1024px) {
    .grid-about {
        display: grid;
        grid-template-areas: "text photo";
        grid-template-columns: 2fr 1fr;
        grid-template-rows: 1fr;
        grid-gap: 30px;
    }
}

.grid-text {
    grid-area: text;
    align-self: start;
}

.grid-photo {
    grid-area: photo;
}

.bg-about {
    background-color: #757575;
    background-image:
        /*linear-gradient(to left, transparent 25%, rgba(255, 255, 255, 0.7) 98%),*/ /*linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0.7) 15%, transparent),*/
        url('/images/bg-bayern5.jpg');
    opacity: 0.7;
}

.bg-wh {
    background-color: #9aeaaa;
}

.bg-w1 {
    background-image: url('/images/work1.jpg');
    background-size: cover;
}
</style>
