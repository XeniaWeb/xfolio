<script setup>
import {computed} from 'vue';
import {Link} from '@inertiajs/inertia-vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'flex rounded-lg bg-gray-100/60 items-center px-3 pt-2 pb-1 mb-1 border-b-4 border-yellow-400 text-xl md:text-base font-medium leading-5 text-gray-900 font-bold focus:outline-2 focus:outline-offset-2 focus:outline-orange-100 focus:outline-double transition duration-150 ease-in-out'
    : 'flex rounded-lg items-center px-3 pt-2 pb-1 mb-1 border-b-4 border-transparent  text-xl md:text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 hover:bg-gray-100 focus:outline-2 focus:outline-offset-2 focus:outline-orange-100 focus:outline-double focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot/>
    </Link>
</template>
