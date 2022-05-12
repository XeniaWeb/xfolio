<script setup>
import XenBaseLayout from '@/Layouts/Base.vue';
import {ChevronDoubleDownIcon, ExternalLinkIcon} from '@heroicons/vue/solid'
import {ArrowUpIcon} from '@heroicons/vue/solid'
import {Head, Link} from '@inertiajs/inertia-vue3';

defineProps({
    works: Object,
});
</script>

<template>
    <Head title="Works"/>

    <XenBaseLayout>
        <!--        <pre>{{ // works }} </pre>-->
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-100 bg-right-top bg-no-repeat fixed"></div>
        </template>
        <!--        <template #link_portfolio>-->
        <!--            <ChevronDoubleDownIcon class="text-myYellow h-6 w-6 sm:h-8 sm:w-8"/>-->
        <!--            <span class="text-base font-semibold sm:text-lg xl:text-xl text-gray-700">-->
        <!--                My&nbsp;Works-->
        <!--            </span>-->
        <!--        </template>-->
        <template #header>
            <div class="py-6">
                <h2 class="text-2xl font-bold text-greenGray-intense leading-tight flex items-center">
                    <ChevronDoubleDownIcon class="text-myYellow h-6 w-6 sm:h-8 sm:w-8"/>
                    What I Do
                </h2>
            </div>
        </template>
        <ul>
            <li v-for="work in works" class="mb-4">
                <!--                <pre>{{ work.link }} </pre>-->
                <div class="sm:pb-12 sm:pt-0 grid-work min-h-[60vh]">
                    <div
                        class="grid-header rounded-lg  bg-greenGray-light/90 text-2xl font-bold text-white p-2 md:p-5 z-10 mb-2">
                        {{ work.title }}
                    </div>
                    <ul class="grid-back flex flex-col justify-between bg-white/70 rounded-lg p-6 mb-2">
                        <li class="pb-6 text-greenGray-intense">
                            <h3 class="font-bold pb-2 text-xl md:text-base">Used technologies: </h3>
                            <p class="px-2 md:max-w-[35%]">{{ work.technologies.toString().replace(/[,]/g, ', ') }}
                            </p>
                        </li>
                        <li class="italic flex justify-between flex-wrap md:block">
                            <p class="group pb-6 md:pb-2">
                                <a :href="work.link"
                                   class="text-gray-400 flex items-center group-hover:text-gray-300 font-light "
                                   title="Link will open in a new window" target="_blank">
                                    <span class="block border-b-2 border-gray-400 group-hover:border-gray-300 text-xl md:text-base">View this project </span>
                                    <ExternalLinkIcon class="pl-2 block text-inherit font-light h-8 w-8 md:h-6 md:w-6"/>
                                </a>
                            </p>
                            <p class="group">
                                <a :href="work.github_link"
                                   class="text-gray-400 flex items-center group-hover:text-gray-300 font-light"
                                   title="Link will open in a new window" target="_blank">
                                    <span class="block border-b-2 border-gray-400 group-hover:border-gray-300 text-xl md:text-base">View project's code </span>
                                    <ExternalLinkIcon class="pl-2 block text-inherit font-light h-8 md:h-6 w-8 md:w-6"/>
                                </a>
                            </p>
                        </li>
                    </ul>
                    <div class="z-10 grid-desc  min-h-[50px] p-6 text-white bg-greenGray-light/90 rounded-lg mb-2">
                        Очень красивый сайт на Вордпрессе
                    </div>
                    <div
                        class="grid-image min-h-[30vh] sm:min-h-[50vh] p-4 bg-clip-padding rounded-lg work-img bg-white/90 box-border border md:border-4 border-greenGray-light/40 w-full h-auto bg-blend-luminosity hover:bg-blend-normal bg-[url('@@/work3.jpg')] mb-2">
                        <!--                <img src="@@/work5.jpg" alt="photo5" class=" w-full h-auto block rounded-lg bg-blue-100/50 bg-blend-luminosity">-->
                    </div>

                </div>
            </li>
        </ul>
        <button id="myBtn" onclick="window.scroll(0,0);"
                class=" text-greenGray-dark bg-greenGray-light/40 fixed bottom-28 right-2 md:right-4 border-2 rounded-md p-2 hover:bg-greenGray-light/20"
                title="To top">
            <ArrowUpIcon class="text-inherit h-6 w-6 lg:h-8 lg:w-8"/>
        </button>
    </XenBaseLayout>
</template>

<style scoped>
.bg-works {
    background-color: #757575;
    opacity: 0.1;
}

.work-img {
    /*background-color: rgba(47,76,115, 0.7);*/
    /*background-image: url('@@/work5.jpg');*/
    background-size: cover;
    background-repeat: no-repeat;
}

/*.work-img {*/
/*    background-color: yellowgreen;*/
/*    background-blend-mode: color-dodge;*/
/*}*/
/*.work-img-box::before {*/
/*    content: '';*/
/*    position: absolute;*/
/*    top: 0;*/
/*    left: 0;*/
/*    right: 0;*/
/*    bottom: 0;*/
/*    z-index: 10;*/
/*    !*background: red; !*rgb(0, 0, 0, 0.9);*!*!*/
/*    background:  rgba(47,76,115, 0.2) linear-gradient(0deg, rgba(47,76,115, 0.3) 0%, rgb(255, 255, 250, 0) 30%);*/
/*    border-radius: 0.5rem;*/
/*}*/
/*.work-img-box:hover  .work-img-box::before {*/
/*    opacity: 0;*/
/*}*/

.grid-work {
    display: block;
}

/*@media (min-width: 640px) {*/
/*    .grid-work {*/
/*        display: grid;*/
/*        grid-template-columns: 1fr 2fr 1fr 2fr 3fr;*/
/*        grid-template-rows: auto 1rem 2rem 4fr auto auto 2fr;*/
/*    }*/
/*}*/

@media (min-width: 768px) {
    .grid-work {
        display: grid;
        grid-template-columns: 1fr 2fr 1fr 4fr 3fr;
        grid-template-rows: auto 2rem 1fr 4fr auto 2fr 2fr;
    }
}

.grid-header {
    /*grid-area: header;*/
    grid-column: 1 / 4;
    grid-row: 1 / 3;
    /*opacity: 0.5;*/
    /*align-self: start;*/
}

.grid-image {
    /*grid-area: image;*/
    grid-column: 3 / 6;
    grid-row: 2 / 7;
    /*opacity: 0.5;*/
}

.grid-desc {
    /*grid-area: desc;*/
    grid-column: 2 / 4;
    grid-row: 5 / 6;
    /*opacity: 0.5;*/
}

.grid-back {
    /*grid-area: back;*/
    grid-column: 1 / 5;
    grid-row: 4 / 8;
    /*background: #01325a;*/
    /*background: #00587E;*/
    /*opacity: 0.5;*/
}

.bg-w1 {
    background-image: url('@@/work1.jpg');
    background-size: cover;
}
</style>
