<script setup>
import { onMounted, ref } from 'vue';

defineProps(['modelValue']);

defineEmits(['update:modelValue']);

const textarea = ref(null);

// onMounted(() => {
//     if (textarea.value.hasAttribute('autofocus')) {
//         textarea.value.focus();
//     }
// });
</script>

<template>
    <textarea class="border-gray-300 focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 rounded-md shadow-sm" :value="modelValue" @input="$emit('update:modelValue', $event.target.value)" ref="input">
        <slot />
    </textarea>
</template>
