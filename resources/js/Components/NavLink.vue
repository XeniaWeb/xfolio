<script setup>
import { computed } from 'vue';
import { Link } from '@inertiajs/vue3';

const props = defineProps(['href', 'active']);

const classes = computed(() => props.active
    ? 'flex rounded-lg items-center px-2 pt-1 border-b-4 border-yellow-400 text-xl md:text-base font-medium leading-5 text-gray-900 focus:outline-2 focus:outline-offset-1 focus:outline-orange-100 focus:outline-double transition  duration-150 ease-in-out'
    : 'flex rounded-lg items-center px-2 pt-1 border-b-4 border-transparent  text-xl sm:text-sm md:text-base font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-2 focus:outline-offset-1 focus:outline-orange-100 focus:outline-double focus:text-gray-700 hover:bg-gray-50 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link :href="href" :class="classes">
        <slot />
    </Link>
</template>
