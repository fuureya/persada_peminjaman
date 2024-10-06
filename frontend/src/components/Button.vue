<template>
    <button :type="type"
        class="text-white bg-gradient-to-r from-blue-600 via-blue-750 to-blue-950 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">{{
            title }}
    </button>
</template>

<script setup>
const props = defineProps({
    type: { type: String, default: 'button' },
    title: String
})
</script>