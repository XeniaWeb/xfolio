<script setup>
import BreezeButton from '@/Components/Buttons/Button.vue';
import XenAdminBaseLayout from '@/Layouts/AdminBase.vue';
import XenSaidNavLink from '@/Components/SaidNavLink.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';

const form = useForm({
    title: '',
    key: '',
    comment: '',
});

const submit = () => {
    form.post(route('admin.categories.store'), {
        onFinish: () => form.reset('title', 'key', 'comment'),
    });
};
</script>

<template>
    <XenAdminBaseLayout>
        <Head title="Add "/>
        <template #page_background>
            <div class="-z-50 h-full w-screen bg-gray-500 bg-dashboard bg-left-top bg-no-repeat fixed"></div>
        </template>
        <template #header>
            <h2 class="font-bold text-2xl md:text-xl text-zinc-700 leading-tight">
                New Category
            </h2>
        </template>
        <!--  @todo нарисовать компонент кнопки -->
        <template #rightBlock>
            <XenSaidNavLink :href="route('admin.technologies.index')" class="bg-gray-50 border-b-3 border-b-gray-200 ml-auto">
                Back to List
            </XenSaidNavLink>
        </template>
        <BreezeValidationErrors class="mb-4"/>

        <form @submit.prevent="submit">
            <div>
                <BreezeLabel for="title" value="Title"/>
                <BreezeInput id="title" type="text" class="mt-1 block w-full" v-model="form.title" required autofocus
                             autocomplete="title"/>
            </div>

            <div class="mt-4">
                <BreezeLabel for="key" value="Key"/>
                <BreezeInput id="key" type="text" class="mt-1 block w-full" v-model="form.key" required
                             autocomplete="key"/>
            </div>

            <div class="mt-4">
                <BreezeLabel for="comment" value="Comment"/>
                <BreezeInput id="comment" type="text" class="mt-1 block w-full" v-model="form.comment"
                             autocomplete="comment"/>
            </div>

            <div class="flex items-center mt-4">
                <!--                <Link :href="route('login')" class="underline text-sm text-gray-600 hover:text-gray-900">-->
                <!--                    Already registered?-->
                <!--                </Link>-->

                <BreezeButton class="group border border-green-600 border-b-4 border-b-green-500 hover:border-b-green-500 hover:bg-green-600 bg-white" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                    <span class="text-green-600 group-hover:text-green-100"> Save </span>
                </BreezeButton>
            </div>
        </form>
    </XenAdminBaseLayout>
</template>

<style scoped>
.bg-dashboard {
    background-color: #757575;
    background-image: /*linear-gradient(to left, transparent 25%, rgba(255, 255, 255, 0.7) 98%),*/ /*linear-gradient(to top, #ffffff, rgba(255, 255, 255, 0.7) 15%, transparent),*/ url('/images/bg-bayern5.jpg');
    opacity: 0.2;
}
</style>
