<script setup lang="ts">
import Button from '@/components/Button.vue';
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
        <form>
          <InputForm to="nama_pengembali" title="Masukkan Nama Pengembali" placeholder="Nama" />
          <InputForm to="kelas" title="Masukkan Kelas" placeholder="Kelas" />
          <InputForm to="jurusan" title="Masukkan jurusan" placeholder="Jurusan" />
          <InputForm to="tanggal_pengembali" title="Masukkan Tanggal Pengembali" type="date" />
          <InputForm to="alat_kembali" title="Masukkan Alat Pengembalian" placeholder="Alat" />
          <InputForm to="keperluan" title="Masukkan Keperluan" placeholder="Keperluan" />
          <div class="flex justify-end">
            <Button type="submit" title="Buat Peminjaman" />
          </div>
        </form>
      </div>
    </div>
  </Fragment>
</template>