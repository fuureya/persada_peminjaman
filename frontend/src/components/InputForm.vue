<template>
    <div class="mb-5">
    <label for="{{ for }}" class="block mb-2 text-md font-medium font-weight-bold text-gray-900 dark:text-white">{{ title }}</label>
    <input :type="type" id="{{ for }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" :placeholder=" placeholder " required />
  </div>
</template>

<script setup>

const props = defineProps({
    type: {
        type: String,
        default: 'text'
    },
    for: String,
    title: String,
    placeholder: String
})
</script>