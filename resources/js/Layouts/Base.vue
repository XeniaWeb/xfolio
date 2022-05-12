<script setup>
import {ref} from 'vue';
import AppLogoXeniaWeb from '@/Components/AppLogoXeniaWeb.vue';
import SocialLink from '@/Components/SocialLink.vue';
import BreezeDropdown from '@/Components/Dropdown.vue';
import BreezeDropdownLink from '@/Components/DropdownLink.vue';
import BreezeNavLink from '@/Components/NavLink.vue';
import BreezeResponsiveNavLink from '@/Components/ResponsiveNavLink.vue';
import {Link} from '@inertiajs/inertia-vue3';

const showingNavigationDropdown = ref(false);
</script>

<template>
    <!--    My basic guest template without registration and login-->
    <div class="overflow-hidden min-h-screen">
        <div v-if="$slots.page_background">
            <slot name="page_background"/>
        </div>

        <div class="min-h-screen grid-base relative">
            <nav class="bg-white/80 backdrop-blur-sm border-b border-gray-100">
                <!-- Primary Navigation Menu -->
                <div class="wrapper">
                    <div class="flex justify-between h-16">
                        <div class="flex w-full">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <Link :href="route('web-works.index')">
                                    <AppLogoXeniaWeb class="w-25 h-10 fill-current text-gray-500"/>
                                </Link>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex flex-wrap">
                                <BreezeNavLink :href="route('page.about')" :active="route().current('page.about')">
                                    About&nbsp;me
                                </BreezeNavLink>
                                <BreezeNavLink :href="route('web-works.index')" :active="route().current('web-works.index')">
                                    Portfolio
                                </BreezeNavLink>
                                <BreezeNavLink :href="route('page.contacts')"
                                               :active="route().current('page.contacts')">
                                    Contacts
                                </BreezeNavLink>
                                <a href="https://blog.xeniaweb.ru" target="_blank"
                                   class="flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    Blog(Ru)
                                </a>
                                <a href="https://stock.adobe.com/ru/contributor/207527840/Oksana%20B%C3%BCrki"
                                   target="_blank"
                                   class="flex items-center px-1 pt-1 border-b-4 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                    Photo & Video
                                </a>
                            </div>
                            <div v-if="$slots.link_portfolio"
                                 class="hidden md:flex mr-2 sm:-my-px ml-auto hover:bg-gray-100 sm:hover:bg-transparent">
                                <BreezeNavLink :href="route('web-works.index') + '#worksList'">
                                    <slot name="link_portfolio"/>
                                </BreezeNavLink>
                            </div>
                        </div>
                        <!-- Hamburger -->
                        <div class="-mr-2 flex items-center sm:hidden">
                            <button @click="showingNavigationDropdown = ! showingNavigationDropdown"
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                    <path
                                        :class="{'hidden': showingNavigationDropdown, 'inline-flex': ! showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16"/>
                                    <path
                                        :class="{'hidden': ! showingNavigationDropdown, 'inline-flex': showingNavigationDropdown }"
                                        stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <!-- Responsive Navigation Menu -->
                    <div :class="{'block': showingNavigationDropdown, 'hidden': ! showingNavigationDropdown}"
                         class="sm:hidden pl-[60%]  duration-200 ease-in-out">
                        <div class="pt-2 pb-3 space-y-1  absolute pl-[60%] w-[100vw] h-[40vh] left-0 right-0 top-56px bg-white">
                            <BreezeResponsiveNavLink :href="route('page.about')"
                                                     :active="route().current('page.about')">
                                About me
                            </BreezeResponsiveNavLink>
                            <BreezeResponsiveNavLink :href="route('web-works.index')"
                                                     :active="route().current('web-works.index')">
                                Portfolio
                            </BreezeResponsiveNavLink>
                            <BreezeResponsiveNavLink :href="route('page.contacts')"
                                                     :active="route().current('page.contacts')">
                                Contacts
                            </BreezeResponsiveNavLink>
                            <a href="https://blog.xeniaweb.ru" target="_blank"
                               class="flex pl-3 pr-4 py-2 border-r-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out">
                                Blog (Ru)
                            </a>
                            <a href="https://stock.adobe.com/ru/contributor/207527840/Oksana%20B%C3%BCrki" target="_blank"
                               class="flex pl-3 pr-4 py-2 border-r-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-100 hover:border-gray-400 focus:outline-none focus:text-gray-800 focus:bg-gray-100 focus:border-gray-400 transition duration-150 ease-in-out">
                                Photo & Video
                            </a>
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main>
                <div class="wrapper">
                    <!-- Page Heading -->
                    <div>
                        <header v-if="$slots.header">
                            <slot name="header"/>
                        </header>
                    </div>

                    <slot/>
                </div>
            </main>
            <footer class="bg-white/40 mt-auto border-t">
                <div class="wrapper">
                    <div class="relative flex justify-between py-4">
                        <div class="flex">
                            <ul class="flex mr-auto pt-1 pr-4 justify-start items-center align-middle flex-wrap sm:flex-nowrap">
                                <SocialLink href="https://www.linkedin.com/in/xeniaweb" title="Xenia on Linkedin">
                                    <svg
                                        width="15.74" height="15.05"
                                        class="w-auto h-8 sm:h-4" viewBox="0 0 15.74 15.05">
                                        <path class="fill-greenGray-dark  group-hover:fill-greenGray-light/50"
                                              d="M15.87,15.52V9.7c0-3.12-1.66-4.57-3.88-4.57A3.36,3.36,0,0,0,8.94,6.81V5.37H5.57c0,1,0,10.15,0,10.15H8.94V9.85A2.29,2.29,0,0,1,9.06,9,1.82,1.82,0,0,1,10.79,7.8c1.22,0,1.71.93,1.71,2.29v5.44ZM2,4A1.76,1.76,0,1,0,2,.47,1.76,1.76,0,1,0,2,4ZM3.7,15.52V5.37H.33V15.52Z"
                                              transform="translate(-0.13 -0.47)"/>
                                    </svg>
                                </SocialLink>
                                <SocialLink href="https://www.youtube.com/channel/UCKSXl_LlBNShvPMrxCDIcYw"
                                            title="Xenia on Youtube">
                                    <svg x="0px" y="0px" width="19.979px" height="14.015px" class="w-auto h-8 sm:h-4"
                                         viewBox="0 0 19.979 14.015">
                                        <path class="fill-greenGray-dark  group-hover:fill-greenGray-light/50"
                                              d="M17.145,0H2.835C1.275,0,0,1.275,0,2.835v8.345c0,1.56,1.275,2.835,2.835,2.835h14.31c1.56,0,2.835-1.275,2.835-2.835V2.835 C19.979,1.275,18.704,0,17.145,0z M7.036,10.392V3.623l6.769,3.384L7.036,10.392z"/>
                                    </svg>
                                </SocialLink>
                            </ul>
                        </div>
                        <div class="group block cursor-pointer sm:flex justify-center items-center py-3 align-middle">
                            <small class="block text-center sm:text-left py-2 mr-3 group-hover:text-blue-950/50">developed
                                by </small>
                            <a class="cursor-pointer z-50" href="https://xeniaweb.ch/" target="_blank"
                               title="Xenia WEB">
                                <span class="sr-only">Oksana Burki</span>
                                <Link href="/">
                                    <AppLogoXeniaWeb color-web="blue-950"
                                                     class="w-auto h-12 sm:h-10 group-hover:fill-blue-950/50"/>
                                </Link>
                            </a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</template>

<style scoped>
.grid-base {
    display: grid;
    grid-template-areas: "header" "main" "footer";
    grid-template-rows: auto 1fr auto;
}

.wrapper {
    min-width: 320px;
    max-width: 80rem; /* 1280px */
    padding: 0 15px;
    margin: 0 auto;
    box-sizing: border-box;
}

@media (min-width: 640px) {
    .wrapper {
        padding: 0 5%;
    }
}
</style>
