<template>
    <div class="mb-5">
        <label :for="to" class="block mb-2 text-md font-medium font-weight-bold text-white dark:text-white">{{
            title }}</label>
        <input :type="type" :id="to"
            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 placeholder-slate-950 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
            :placeholder="placeholder" autocomplete="off" required />
    </div>
</template>

<script setup>

const props = defineProps({
    type: {
        type: String,
        default: 'text'
    },
    to: String,
    title: String,
    placeholder: String
})
</script>