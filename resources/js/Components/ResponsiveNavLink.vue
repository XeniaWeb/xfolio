<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'flex pl-3 pr-4 py-2 border-r-4 border-yellow-400 text-xl md:text-base font-medium text-gray-800 text-semibold bg-yellow-50 focus:outline-none focus:text-gray-800 focus:bg-yellow-200 focus:border-yellow-800 transition duration-150 ease-in-out text-right'
    : 'flex pl-3 pr-4 py-2 border-r-4 border-transparent text-xl md:text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes" class="ml-auto">
        <slot />
    </Link>
</template>
