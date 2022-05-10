<script setup>
import XenBaseLayout from '@/Layouts/Base.vue';
import { ChevronDoubleDownIcon } from '@heroicons/vue/solid'
import { ArrowUpIcon } from '@heroicons/vue/solid'
import { Head, Link } from '@inertiajs/inertia-vue3';

defineProps({

});
</script>

<template>
    <Head title="Works" />

    <XenBaseLayout>
        <template #link_portfolio>
            <ChevronDoubleDownIcon class="text-yel h-6 w-6 sm:h-8 sm:w-8"/>
            <span class="text-base font-semibold sm:text-lg xl:text-xl text-gray-700">
                My&nbsp;Works
            </span>
        </template>

        <div class="sm:py-4 xl:py-12">
            <div class=" max-w-7xl mx-auto sm:px-6 lg:p-8 ">
                <div class="sm:flex  bg-white/10 overflow-hidden shadow-sm sm:rounded-lg">
                    <h2 class="p-6 text-2xl font-bold border-b border-gray-200  pb-96">
                        What I Do
                    </h2>
                </div>
                <div class="pt-5  bg-red-200/10 pt-96">
                    <table id="worksList" class="table-auto">
                        <thead>
                        <tr>
                            <th>Song</th>
                            <th>Artist</th>
                            <th>Year</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>The Sliding Mr. Bones (Next Stop, Pottersville)</td>
                            <td>Malcolm Lockyer</td>
                            <td>1961</td>
                        </tr>
                        <tr>
                            <td>Witchy Woman</td>
                            <td>The Eagles</td>
                            <td>1972</td>
                        </tr>
                        <tr>
                            <td>Shining Star</td>
                            <td>Earth, Wind, and Fire</td>
                            <td>1975</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            <div class="pt-[700px]  bg-green-200/10">
                <table id="ttt333">
                    <thead>
                    <tr>ddd</tr>
                    </thead>
                    <tbody>
                    <tr>uuuu</tr>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
        <button id="myBtn" onclick="window.scroll(0,0);" class=" text-stone-400 bg-stone-100/20 fixed bottom-4 lg:bottom-20 right-2 md:right-4 border-2 rounded-md p-2 hover:bg-stone-200" title="To top">
            <ArrowUpIcon class="text-inherit h-6 w-6 lg:h-8 lg:w-8" />
        </button>
    </XenBaseLayout>
</template>
