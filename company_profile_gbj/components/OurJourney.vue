<template>
  <section class="relative mx-auto bg-white overflow-hidden font-poppins">
    <!-- Bagian atas seperti OLFA -->    
    <div class="relative bg-[url('/asset/index/our-journey-bg-1.png')] bg-cover bg-center bg-no-repeat">
      <div class="absolute inset-0 bg-gradient-to-b from-red-900/20 via-black/50 to-black/70"></div>

      <!-- pakai container yang sama -->
      <div class="relative max-w-screen-2xl mx-auto px-4 py-48">
        <div class="w-12 h-1 bg-red-600 mb-3"></div>

        <p class="text-md tracking-wide text-red-500 font-bold">
          Discover the history of GBJ
        </p>
        <h2 class="text-7xl font-bold text-white mt-2 py-12">
          Turning idea <br />
          into an invention
        </h2>
        <p class="mt-4 text-gray-100 text-2xl">
          Do you know how our first innovation was made?
        </p>
      </div>
    </div>

    <!-- Timeline Our Journey -->
    <div class="relative bg-[url('/asset/index/our-journey-bg.png')] bg-cover bg-no-repeat py-16">
      <!-- Overlay gradient di dalam section -->
      <div class="absolute inset-0 bg-gradient-to-b from-black/70 via-black/60 to-red-900/20"></div>

      <div class="max-w-5xl mx-auto relative z-10">
        <!-- Garis tengah -->
        <div class="absolute top-0 left-1/2 -translate-x-1/2 h-full w-1 bg-red-700"></div>

        <div class="space-y-16">
          <div
            v-for="(item, index) in journey"
            :key="item.year"
            class="flex items-center w-full"
          >
            <!-- Kiri -->
            <div
              class="w-1/2 pr-8 text-right"
              v-if="index % 2 === 0"
            >
              <h3 class="font-bold text-6xl text-white">{{ item.year }}</h3>
              <p class="text-white text-xl py-12">{{ item.text }}</p>
            </div>
            <div class="w-1/2" v-else></div>

            <!-- Bulatan -->
            <div class="relative">
              <div
                class="w-8 h-8 bg-red-700 rounded-full border-4 border-white shadow-md"
              ></div>
            </div>

            <!-- Kanan -->
            <div
              class="w-1/2 pl-8 text-left"
              v-if="index % 2 !== 0"
            >
              <h3 class="font-bold text-6xl text-white">{{ item.year }}</h3>
              <p class="text-white text-xl py-12">{{ item.text }}</p>
            </div>
            <div class="w-1/2" v-else></div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
const journey = [
  { year: '2018', text: 'PT Global Bestindo Jaya resmi berdiri dengan fokus pada produk berkualitas tinggi untuk kebutuhan nasional.' },
  { year: '2019', text: 'Memperluas jaringan distribusi dan menjalin kemitraan strategis dengan berbagai mitra retail nasional.' },
  { year: '2020', text: 'Meluncurkan produk unggulan pertama yang menjadi fondasi pertumbuhan perusahaan di tahun-tahun berikutnya.' },
  { year: '2021', text: 'Melakukan ekspansi pasar ke seluruh wilayah Indonesia guna memperkuat jangkauan distribusi nasional.' },
  { year: '2022', text: 'Menghadirkan lini produk premium sebagai bentuk inovasi dan peningkatan standar kualitas perusahaan.' },
  { year: '2023', text: 'Membuka gudang baru di Surabaya untuk mempercepat pengiriman ke wilayah Indonesia Timur secara efisien.' },
  { year: '2024', text: 'Melakukan diversifikasi usaha dan memperkuat sistem operasional melalui integrasi teknologi digital.' },
  { year: '2025', text: 'Meluncurkan akun Instagram resmi sebagai langkah awal transformasi digital dan pendekatan ke pelanggan.' }
]
</script>
<style>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}
</style>
