<template>
  <div class="mt-20 font-poppins bg-[#f9f9f9]">
    <!-- Hero Image -->
    <div class="w-full overflow-hidden mb-16 relative h-[320px] sm:h-[400px] lg:h-[640px]">
      <img
        src="/article/baksos-3.jpg"
        alt="Bakti Sosial Juli 2025"
        class="absolute inset-0 w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
        <h1 class="text-white text-2xl sm:text-4xl lg:text-5xl font-bold text-center px-4">
          Bakti Sosial Kemah Beth Salom, Tangerang
        </h1>
      </div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Breadcrumb -->
      <nav class="text-sm text-gray-500 mb-6" aria-label="Breadcrumb">
        <ol class="flex items-center gap-2 overflow-x-auto whitespace-nowrap text-ellipsis scrollbar-hide">
          <li>
            <NuxtLink to="/" class="hover:underline text-black shrink-0">Home</NuxtLink>
          </li>
          <li class="shrink-0">/</li>
          <li>
            <NuxtLink to="/article-page" class="hover:underline text-black shrink-0">Article</NuxtLink>
          </li>
          <li class="shrink-0">/</li>
          <li class="text-black font-semibold truncate max-w-[200px] sm:max-w-[300px] md:max-w-[400px]">
            Bakti Sosial Kemah Beth Salom, Tangerang
          </li>
        </ol>
      </nav>
    </div>

    <!-- Article Content -->
    <div class="container mx-auto px-4 sm:px-6 pb-20">
      <div
        class="bg-white p-6 sm:p-10 shadow-lg rounded-2xl transition-all duration-300"
      >
        <p class="text-gray-500 text-sm mb-6 text-right italic">
          31 Januari 2026 – Sabtu 15.00 PM - 18.00 PM WIB
        </p>

        <div class="text-gray-800 space-y-6 text-base sm:text-lg text-justify leading-relaxed">
          <FadeInOnScroll direction="down">
            <p>
              Pada tanggal <strong>31 Januari 2026</strong>, <strong>Heartifact</strong> kembali mengadakan kegiatan <strong>Bakti Sosial</strong> sebagai bentuk nyata kepedulian dan semangat berbagi kepada sesama. Kegiatan kali ini dilaksanakan di <em>Kemah Beth Salom, Tangerang</em>, dengan fokus utama menghadirkan kebahagiaan dan kebersamaan bagi para lansia di panti jompo. Tujuan kami sederhana — hadir, berbagi perhatian, dan menciptakan momen hangat yang bisa dikenang bersama.
            </p>
          </FadeInOnScroll>

          <FadeInOnScroll direction="down">
            <p>
              Meski hari tersebut merupakan hari kerja, hal itu tidak mengurangi semangat tim <strong>Heartifact</strong>. Setelah menyelesaikan aktivitas kantor, tim langsung bersiap menuju lokasi kegiatan dengan membawa paket bantuan yang telah dipersiapkan sebelumnya. Seluruh perlengkapan dan kebutuhan acara disiapkan dengan penuh perhatian agar kegiatan dapat berjalan lancar dan membawa manfaat bagi para penghuni panti.
            </p>
          </FadeInOnScroll>

          <FadeInOnScroll direction="down">
            <p>
              Setibanya di <em>Kemah Beth Salom, Tangerang</em>, suasana hangat langsung terasa. Kegiatan diawali dengan sesi kebersamaan yang penuh keceriaan, di mana tim Heartifact dan para lansia bernyanyi bersama. Lagu-lagu yang dinyanyikan menghadirkan senyum, tawa, dan kenangan indah, menciptakan ikatan emosional yang sederhana namun begitu bermakna. Momen ini menjadi inti dari kegiatan — bukan sekadar hadir, tetapi benar-benar berbagi waktu dan perhatian.
            </p>
          </FadeInOnScroll>

          <p>
            Setelah sesi kebersamaan dan bernyanyi bersama, kegiatan dilanjutkan dengan pembagian paket bantuan sosial kepada para penghuni panti jompo. Setiap paket diberikan dengan penuh rasa hormat dan kasih, sebagai simbol kepedulian serta dukungan kami. Bagi kami, bantuan ini bukan hanya tentang barang yang diberikan, tetapi tentang pesan bahwa mereka tidak sendiri dan selalu ada yang peduli.
          </p>

          <p>
            Seluruh rangkaian acara berlangsung dengan lancar berkat kerja sama tim yang solid dan suasana penuh kekeluargaan yang tercipta. Interaksi hangat antara tim dan para lansia menjadi momen paling berharga, mengingatkan kami bahwa perhatian, waktu, dan kebersamaan sering kali jauh lebih berarti daripada apa pun yang bersifat materi.
          </p>

          <p>
            Melalui kegiatan ini, <strong>Heartifact</strong> berharap dapat terus menebarkan semangat kepedulian dan kemanusiaan di berbagai kesempatan. Kami percaya bahwa kebahagiaan sejati tumbuh ketika kita mau berbagi, mendengarkan, dan hadir bagi sesama, terutama bagi mereka yang membutuhkan perhatian lebih.
          </p>

          <p>
            Kegiatan bakti sosial di <em>Kemah Beth Salom, Tangerang</em> ini menjadi pengingat indah bahwa langkah kecil yang dilakukan dengan tulus dapat membawa dampak besar bagi banyak hati. Dengan semangat yang sama, kami akan terus melangkah, menyebarkan kebaikan, dan merangkai lebih banyak momen penuh makna di masa mendatang.
          </p>
        </div>
      </div>
    </div>


    <div class="mt-8 py-8 px-4 sm:px-6 container mx-auto">
      <h2 class="text-3xl font-bold mb-8 text-center">Dokumentasi Kegiatan</h2>

      <!-- Grid Galeri Acak -->
      <div class="columns-1 sm:columns-2 md:columns-3 gap-4 space-y-4">
        <img
          v-for="i in 13"
          :key="i"
          :src="`/article/batch3/galeri${i}.jpg`"
          alt="Dokumentasi"
          class="w-full rounded-xl cursor-zoom-in hover:scale-105 transition duration-300 shadow-md"
          @click="openModal(`/article/batch3/galeri${i}.jpg`)"
        />
      </div>
      <!-- Modal Zoom Gambar -->
      <div
        v-if="showModal"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/80 backdrop-blur-sm p-4"
        @click.self="closeModal"
      >
        <div class="relative max-w-5xl w-full">
          <img :src="zoomedImage" class="w-full max-h-[90vh] object-contain mx-auto rounded" />
          <button
            class="absolute top-2 right-2 text-white bg-black/60 hover:bg-black rounded-md p-2"
            @click="closeModal"
          >
            ✕
          </button>
        </div>
      </div>
    </div>
  </div>
  <FooterComponent />
</template>

<script lang="ts" setup>
import { ref } from 'vue'

const zoomedImage = ref('')
const showModal = ref(false)

const openModal = (src: string) => {
  zoomedImage.value = src
  showModal.value = true
}

const closeModal = () => {
  showModal.value = false
}

// Import FooterComponent dari file yang sama di folder 'pages'
import FooterComponent from '@/components/footer.vue'
</script>

<style>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}

/* Optional: hide scrollbar for breadcrumb on small screens */
.scrollbar-hide::-webkit-scrollbar {
  display: none;
}
.scrollbar-hide {
  -ms-overflow-style: none;
  scrollbar-width: none;
}

</style>
