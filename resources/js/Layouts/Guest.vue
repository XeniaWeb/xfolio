<script setup>
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue';
import { Link } from '@inertiajs/inertia-vue3';
</script>

<template>
    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <Link :href="route('welcome')">
                <AppLogoXeniaWeb class="w-25 h-10 fill-current text-gray-500" />
            </Link>
        </div>

        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
            <slot />
        </div>
    </div>
</template>
