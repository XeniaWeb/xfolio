<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-1 border border-b-4 rounded-lg text-xl md:text-lg font-medium
        text-red-600 border-red-600 border-b-red-500
        hover:bg-red-300 hover:border-b-red-400 hover:text-red-900
        focus:outline-red-400 focus:text-red-700
        focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 rounded-md shadow-sm transition ease-in-out duration-150
">
        <slot />
    </button>
</template>

<style scoped>

</style>
