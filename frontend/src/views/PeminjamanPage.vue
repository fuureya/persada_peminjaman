<script setup lang="ts">
import Fragment from '@/components/Fragment.vue';
import InputForm from '@/components/InputForm.vue';
</script>

<template>
  <Fragment>
    <div class="container text-white">
      <div class="logo flex justify-center">
        <img :src="'/logo.png'" :alt="'logo'" class="w-32">
      </div>
      <div class="layout-card mt-16">
        <InputForm to="nama_peminjam" title="Masukkan Nama Peminjam" placeholder="Nama" />
        <InputForm to="kelas" title="Masukkan Kelas" placeholder="Kelas" />
        <InputForm to="jurusan" title="Masukkan jurusan" placeholder="Jurusan" />
      </div>
    </div>
  </Fragment>
</template>