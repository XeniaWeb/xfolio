<script setup>
defineProps({
    type: {
        type: String,
        default: 'submit',
    },
});
</script>

<template>
    <button :type="type" class="inline-flex items-center px-4 py-1 border border-b-4 rounded-lg text-xl md:text-lg font-medium leading-5  tracking-widest

      focus:outline-2 focus:outline-offset-2 focus:outline-double focus:shadow-outline-gray transition ease-in-out duration-150

     text-gray-600 border-gray-300 border-b-gray-300
     hover:text-gray-800 hover:bg-gray-200
     focus:outline-orange-100
     focus:text-gray-700 active:bg-orange-300 focus:border-gray-300 ">
            <slot />
    </button>
</template>
