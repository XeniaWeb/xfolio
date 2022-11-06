<script setup>
import BreezeButton from '@/Components/Buttons/Button.vue';
import XenButtonDanger from '@/Components/Buttons/ButtonDanger.vue';
import XenTextArea from '@/Components/TextArea.vue';
import XenAdminBaseLayout from '@/Layouts/AdminBase.vue';
import XenSaidNavLink from '@/Components/SaidNavLink.vue';
import BreezeInput from '@/Components/Input.vue';
import BreezeLabel from '@/Components/Label.vue';
import BreezeValidationErrors from '@/Components/ValidationErrors.vue';
import {Head, Link, useForm} from '@inertiajs/inertia-vue3';
import {Inertia} from "@inertiajs/inertia";
import Input from "@/Components/Input.vue";

const form = useForm({
    title: '',
    description: '',
    work_image_file: File,
    link: '',
    github_link: '',
    comment: '',
    technologies: [],
});
//
// Inertia.post(route('admin.works.store'), work_image, {
//     forceFormData: true,
// });

const submit = () => {
    form.post(route('admin.works.store'), {
        onFinish: () => form.reset('work_image_file'),
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
                New Work
            </h2>
        </template>
        <!--  @todo нарисовать компонент кнопки -->
        <template #rightBlock>
            <XenSaidNavLink :href="route('admin.works.index')" class="bg-gray-50 border-b-3 border-b-gray-200 ml-auto">
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
            <div class="">
                <BreezeLabel for="workDescription" value="Description"/>
                <XenTextArea  id="workDescription"  rows="4" cols="50" v-model="form.description" play>

                </XenTextArea>
            </div>
            <div class="">
                <BreezeLabel for="work-file" value="Preview "/>
                <input id="work-file" type="file" class="border-gray-300 focus:outline-none focus:border-yellow-300 focus:ring focus:ring-yellow-200 focus:ring-opacity-50 rounded-md shadow-sm p-2 mt-1 block w-full" @input="form.work_image_file = $event.target.files[0]" />
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>
            </div>

            <div class="mt-4">
                <BreezeLabel for="link" value="Link"/>
                <BreezeInput id="link" type="text" class="mt-1 block w-full" v-model="form.link"
                             autocomplete="link"/>
            </div>

            <div class="mt-4">
                <BreezeLabel for="github_link" value="Github Link"/>
                <BreezeInput id="github_link" type="text" class="mt-1 block w-full" v-model="form.github_link"
                             autocomplete="github_link"/>
            </div>

            <div class="mt-4">
                <BreezeLabel for="comment" value="Comment"/>
                <BreezeInput id="comment" type="text" class="mt-1 block w-full" v-model="form.comment"
                             autocomplete="comment"/>
            </div>
            <div class="mt-4">
                <BreezeLabel for="technologies" value="Technologies"/>
                <BreezeInput id="technologies" type="text" class="mt-1 block w-full" v-model="form.technologies"
                             autocomplete="technologies"/>
            </div>

            <div class="flex items-center mt-4">
                 <XenButtonDanger>Save</XenButtonDanger>
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
input[type='file' i],
input[type='file' i]::-webkit-file-upload-button {
    background: white;
    border: 1px solid #d1d5db;
    border-radius: 0.375rem;
    font-size: 0.875rem;
    line-height: 1.25rem;
    color: rgb(55 65 81);
    padding: 5px 10px;
    cursor: pointer;
    box-sizing: border-box;
}

input[type='file' i]::-webkit-file-upload-button:hover {
    background: #f3f4f6; /* gray-200 */
    border-color: #e5e7eb; /* gray-200 */
    color: #1f2937; /* gray-800 */
}
</style>
