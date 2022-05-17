<script setup>
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import {Head, Link} from '@inertiajs/inertia-vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
})
</script>

<template>
    <Head title="Welcome"/>

    <div class="relative min-h-screen bg-gray-100 dark:bg-gray-900  sm:pt-0 bg-hero-bg">
        <div class="container mx-auto">

            <nav class="relative flex justify-between py-4 px-[5%] flex-wrap">
                <div class="shrink-0 flex items-center  px-0 xl:px-5 pb-4 pt-2 sm:py-2">
                    <Link :href="route('web-works.index')">
                        <AppLogoXeniaWeb color-web="#44403c" color-xenia="burlywood" class="w-50 h-20"/>
                    </Link>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center">
                        <BreezeNavLink :href="route('web-works.index')" :active="route().current('web-works.index')"
                                       class="mr-6 ">
                            <span class=" text-[burlywood] hover:text-yellow-200">My Works</span>
                        </BreezeNavLink>
                        <BreezeNavLink :href="route('page.about')" :active="route().current('page.about')"
                                       class="mr-6 text-[burlywood] ">
                            <span class=" text-[burlywood] hover:text-yellow-200">About me</span>
                        </BreezeNavLink>
                        <BreezeNavLink :href="route('page.contacts')" :active="route().current('page.contacts')"
                                       class="mr-6 text-[burlywood]">
                            <span class=" text-[burlywood] hover:text-yellow-200">Contacts</span>
                        </BreezeNavLink>
                    </div>
                    <div class="shrink-0 flex items-center px-3">
                        <Link v-if="canLogin" :href="route('admin.login')"
                              class="text-sm text-stone-400 hover:text-stone-300 underline pr-2">
                            Log in
                        </Link>
                    </div>
                    <div class="shrink-0 flex items-center px-3">

                        <Link v-if="canRegister" :href="route('admin.register')"
                              class="text-sm text-stone-400 hover:text-stone-300 underline pr-2">
                            Register
                        </Link>
                    </div>
                </div>
            </nav>
            <div class=" flex justify-center items-start  xl:items-center min-h-hero">
                <h1 class="my-8 lx:my-14 p-5 text-[burlywood] xl:text-right text-left rounded-xl text-xl sm:text-2xl  mr-auto  xl:mr-[5%] xl:ml-auto backdrop-blur backdrop-opacity-60">
                    Great site by <strong>XeniaWeb</strong> will be here soon <br> <br>xenia1898@gmail.com
                </h1>
            </div>
        </div>
    </div>
</template>

<style scoped>
.bg-hero-bg {
    background-image: url("@@/switz08.webp");
}
.min-h-hero {
    min-height: calc(100vh - 110px);
}

.bg-gray-100 {
    background-color: #f7fafc;
    background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
    border-color: #edf2f7;
    border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
    color: #a0aec0;
    color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
    color: #718096;
    color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
    color: #4a5568;
    color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
    color: #1a202c;
    color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
    .dark\:bg-gray-800 {
        background-color: #2d3748;
        background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
    }

    .dark\:bg-gray-900 {
        background-color: #1a202c;
        background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
    }

    .dark\:border-gray-700 {
        border-color: #4a5568;
        border-color: rgba(74, 85, 104, var(--tw-border-opacity));
    }

    .dark\:text-white {
        color: #fff;
        color: rgba(255, 255, 255, var(--tw-text-opacity));
    }

    .dark\:text-gray-400 {
        color: #cbd5e0;
        color: rgba(203, 213, 224, var(--tw-text-opacity));
    }
}
</style>
