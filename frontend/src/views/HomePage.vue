<script setup>
import Fragment from '@/components/Fragment.vue';
</script>

<template>
    <Fragment>
        <div class="container text-white">
            <div class="logo flex justify-center">
                <img :src="'/logo.png'" :alt="'logo'" class="w-32">
            </div>
            <div class="layout-card mt-16">
                <div class="grid grid-cols-2 gap-4 border-red text-black">
                    <div class="flex justify-center">
                        <RouterLink to="/peminjaman">
                            <div class="bg-white shadow-md rounded-lg p-4 px-10">
                                <div class="flex justify-center">
                                    <img :src="'pinjam.png'" :alt="'peminjaman'" class="w-50">
                                </div>
                                <p class="mt-4 pb-3 text-2xl font-bold text-center text-blue-950">
                                    Peminjaman
                                </p>
                            </div>
                        </RouterLink>
                    </div>

                    <div class="flex justify-center">
                        <RouterLink to="/pengembalian">
                            <div class="bg-white shadow-md rounded-lg p-4 px-10">
                                <div class="flex justify-center">
                                    <img :src="'kembali.png'" :alt="'pengembalian'" class="w-50">
                                </div>
                                <p class="mt-4 text-2xl font-bold text-center text-blue-950">
                                    Pengembalian
                                </p>
                            </div>
                        </RouterLink>
                    </div>
                </div>
            </div>
        </div>

    </Fragment>
</template>