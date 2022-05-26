<script setup>
import XenFooter from '@/Elements/Footer.vue';
import XenTopMenu from '@/Elements/TopMenu.vue';
import XenSaidNavLink from '@/Components/SaidNavLink.vue';

</script>

<template>
    <!--  My basic guest template -->
    <div class="overflow-hidden min-h-screen">
        <div v-if="$slots.page_background">
            <slot name="page_background"/>
        </div>

        <div class="min-h-screen grid-admin-base relative">
            <XenTopMenu/>

            <!-- Page Content -->
            <main class="grid-main">
                <div class="wrapper grid-wrapper">
                    <div class="grid-said bg-white/80 rounded-lg p-4">
                        <!-- Admin Said Menu-->
                        <nav class="bg-white">
                            <div class="hidden sm:flex flex-col rounded-lg py-2 content-end ">
                                <XenSaidNavLink :href="route('admin.works.index')"
                                                class="sm:text-sm"
                                                :active="route().current('admin.works.index')">
                                    Works
                                </XenSaidNavLink>
                                <XenSaidNavLink :href="route('admin.technologies.index')"
                                                :active="route().current('admin.technologies.index')">
                                    Technologies
                                </XenSaidNavLink>
                                <XenSaidNavLink :href="route('admin.categories.index')"
                                                :active="route().current('admin.categories.index')">
                                    Categories
                                </XenSaidNavLink>
                                <XenSaidNavLink :href="route('admin.settings.appearance')"
                                                :active="route().current('admin.settings.appearance')">
                                    Settings
                                </XenSaidNavLink>
                            </div>
                        </nav>
                    </div>
                    <div class="grid-info rounded-lg bg-white/60">
                        <!-- Page Heading -->
                        <div class="">
                            <header v-if="$slots.header">
                                <slot name="header"/>
                            </header>
                        </div>
                        <slot/>
                    </div>
                </div>
            </main>
            <XenFooter/>
        </div>
    </div>
</template>

<style scoped>
.grid-admin-base {
    display: grid;
    grid-template-areas: "top-menu" "main" "footer";
    grid-template-rows: auto 1fr auto;
    gap: 1rem;
}

.grid-wrapper {
    display: grid;
    grid-template-areas: "said info";
    grid-template-columns: 200px 1fr;
    grid-template-rows: 1fr;
    min-height: 100%;
    gap: 1rem;
}

.grid-main {
    grid-area: main;
}

.grid-said {
    grid-area: said;
}

.grid-info {
    grid-area: info;
}

</style>
