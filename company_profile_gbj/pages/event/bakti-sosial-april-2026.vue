<template>
  <div class="mt-20 font-poppins bg-[#f9f9f9]">
    <!-- Hero Image -->
    <div class="w-full overflow-hidden mb-16 relative h-[320px] sm:h-[400px] lg:h-[640px]">
      <img
        src="/article/baksos-4.jpg"
        alt="Bakti Sosial April 2026"
        class="absolute inset-0 w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
        <h1 class="text-white text-2xl sm:text-4xl lg:text-5xl font-bold text-center px-4">
          Yayasan Pelita Jiwa, Tangerang
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
            Yayasan Pelita Jiwa Tangerang, Tangerang
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
          25 April 2026 – Sabtu 15.00 PM - 17.00 PM WIB
        </p>

        <div class="text-gray-800 space-y-6 text-base sm:text-lg text-justify leading-relaxed">
          <FadeInOnScroll direction="down">
            <p>
              Pada tanggal <strong>25 April 2026</strong>, <strong>Heartifact</strong> kembali menjalankan program <strong>Bakti Sosial</strong> sebagai bagian dari komitmen berkelanjutan dalam memberikan kontribusi positif bagi masyarakat. Kegiatan ini berlangsung di <em>Yayasan Pelita Jiwa, Tangerang</em>, mulai pukul <strong> 15.00 hingga 17.00 WIB </strong> dengan fokus pada membangun kedekatan serta menghadirkan suasana yang hangat bagi para penghuni yayasan.
            </p>
          </FadeInOnScroll>

          <FadeInOnScroll direction="down">
            <p>
              Melalui kegiatan ini, <strong>Heartifact</strong> tidak hanya menyalurkan bantuan, tetapi juga ingin menciptakan ruang interaksi yang bermakna. Kehadiran tim diharapkan mampu memberikan semangat baru, sekaligus menunjukkan bahwa kepedulian dapat diwujudkan melalui hal-hal sederhana yang dilakukan bersama.
            </p>
          </FadeInOnScroll>

          <FadeInOnScroll direction="down">
            <p>
              Setelah menyelesaikan aktivitas kerja, tim <strong>Heartifact</strong> langsung bergerak menuju lokasi dengan persiapan yang telah dirancang sebelumnya. Setiap detail kegiatan dipersiapkan dengan baik agar seluruh rangkaian acara dapat berjalan secara tertib, nyaman, dan memberikan pengalaman yang menyenangkan bagi semua pihak yang terlibat.
            </p>
          </FadeInOnScroll>

          <p>
            Sesampainya di <strong>Yayasan Pelita Jiwa</strong>, kegiatan diawali dengan sesi interaksi santai yang bertujuan untuk membangun keakraban. Suasana cair dan penuh kehangatan tercipta melalui percakapan ringan serta aktivitas bersama yang melibatkan seluruh peserta. Momen ini menjadi bagian penting dalam menghadirkan kebersamaan yang tulus dan tidak dibuat-buat.
          </p>

          <p>
            Kegiatan kemudian dilanjutkan dengan penyerahan bantuan sosial kepada para penghuni yayasan. Bantuan tersebut diberikan sebagai bentuk dukungan dan perhatian, sekaligus menjadi simbol bahwa keberadaan mereka tetap diperhatikan. Bagi Heartifact, nilai utama dari kegiatan ini terletak pada makna kebersamaan yang terbangun, bukan semata pada bantuan yang disalurkan.
          </p>

          <p>
            Selama kegiatan berlangsung, tercipta interaksi yang positif dan penuh empati antara tim dan para penghuni yayasan. Hal ini menjadi pengalaman berharga yang memperkuat nilai kepedulian dalam lingkungan kerja <strong>Heartifact</strong>, sekaligus menjadi pengingat akan pentingnya berbagi waktu dan perhatian.
          </p>

          <p>
            Melalui program ini, <strong>Heartifact</strong> berkomitmen untuk terus menghadirkan kegiatan sosial secara konsisten di berbagai kesempatan. Perusahaan percaya bahwa langkah kecil yang dilakukan secara berkelanjutan dapat memberikan dampak yang berarti bagi banyak orang.
          </p>

          <p>
            Kegiatan di <strong>Yayasan Pelita Jiwa, Tangerang</strong> ini menjadi bagian dari perjalanan <strong>Heartifact</strong> dalam menebarkan nilai-nilai kemanusiaan. Ke depannya, <strong>Heartifact</strong> akan terus berupaya menciptakan lebih banyak inisiatif yang membawa manfaat serta mempererat hubungan dengan masyarakat.
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
          :src="`/article/batch4/galeri${i}.jpg`"
          alt="Dokumentasi"
          class="w-full rounded-xl cursor-zoom-in hover:scale-105 transition duration-300 shadow-md"
          @click="openModal(`/article/batch4/galeri${i}.jpg`)"
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
