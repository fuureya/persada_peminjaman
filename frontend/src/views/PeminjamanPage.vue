<script setup>
import Button from '@/components/Button.vue';
import CameraPreview from '@/components/CameraPreview.vue';
import Fragment from '@/components/Fragment.vue';
import InputForm from '@/components/InputForm.vue';
import { ref } from 'vue';
const images = ref(''); // Declare a ref to store the image data
</script>

<template>
  <Fragment>
    <div class="container text-white">
      <div class="logo flex justify-center">
        <img :src="'/logo.png'" :alt="'logo'" class="w-32">
      </div>
      <div class="layout-card mt-16">
        <form>
          <InputForm to="nama_peminjam" title="Masukkan Nama Peminjam" placeholder="Nama" />
          <InputForm to="kelas" title="Masukkan Kelas" placeholder="Kelas" />
          <InputForm to="jurusan" title="Masukkan jurusan" placeholder="Jurusan" />
          <InputForm to="tanggal_peminjaman" title="Masukkan Tanggal Peminjaman" type="date" />
          <InputForm to="alat_peminjaman" title="Masukkan Alat Peminjaman" placeholder="Alat" />
          <InputForm to="keperluan" title="Masukkan Keperluan" placeholder="Keperluan" />

          <img :src="images" :alt="'gambar preview'" id="preview">

          <CameraPreview @responseImage="(img) => { images.value = img }" />
          <div class="flex justify-end">
            <Button type="submit" title="Buat Peminjaman" />
          </div>
        </form>
      </div>
    </div>
  </Fragment>
</template>
