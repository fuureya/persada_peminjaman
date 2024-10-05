<script setup>
import Fragment from '@/components/Fragment.vue';
</script>

<template>
    <Fragment>
        <div class="container text-white">
            <div class="logo flex justify-center">
                <img :src="'../../public/logo.png'" :alt="logo" class="w-32">
            </div>
            <div class="layout-card">
                <div class="grid grid-cols-12 border-red text-black">
                    <div class="cols-span-6 ">
                        test
                    </div>
                    <div class="cols-span-6 text-black">
                        test
                    </div>
                </div>

            </div>
        </div>
    </Fragment>
</template>