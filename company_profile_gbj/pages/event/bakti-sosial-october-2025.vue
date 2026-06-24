<template>
  <div class="mt-20 font-poppins bg-[#f9f9f9]">
    <!-- Hero Image -->
    <div class="w-full overflow-hidden mb-16 relative h-[320px] sm:h-[400px] lg:h-[640px]">
      <img
        src="/article/baksos-2.jpg"
        alt="Bakti Sosial Juli 2025"
        class="absolute inset-0 w-full h-full object-cover"
      />
      <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center">
        <h1 class="text-white text-2xl sm:text-4xl lg:text-5xl font-bold text-center px-4">
          Bakti Sosial Bodhiarama Meditation Centre, Bogor
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
            Bakti Sosial Bodhiarama Meditation Centre, Bogor
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
          26 Oktober 2025, 11:00 AM – 12:00 PM WIB
        </p>

        <div class="text-gray-800 space-y-6 text-base sm:text-lg text-justify leading-relaxed">
          <FadeInOnScroll direction="down">
            <p>
              Pada tanggal <strong>26 Oktober 2025</strong>, <strong>Heartifact</strong> kembali mengadakan kegiatan <strong>Bakti Sosial</strong> sebagai wujud nyata dari semangat berbagi dan kepedulian terhadap sesama. Kegiatan kali ini dilaksanakan di <em>Bodhiarama Meditation Centre, Bogor</em>, sebuah tempat yang menumbuhkan nilai-nilai kedamaian dan kemanusiaan. Tujuan kami sederhana — menyebarkan kebaikan, membawa senyum, dan menjalin hubungan penuh kasih dengan masyarakat sekitar.
            </p>
          </FadeInOnScroll>

          <FadeInOnScroll direction="down">
            <p>
              Persiapan kegiatan ini telah dimulai jauh sebelum hari pelaksanaan. Tim <strong>Heartifact</strong> menyiapkan seluruh perlengkapan dan paket bantuan dari kantor, memastikan bahwa setiap kebutuhan dapat terpenuhi dengan baik. Tidak hanya itu, kami juga membagikan <strong>kupon atau tiket</strong> kepada masyarakat sekitar yang nantinya dapat ditukarkan dengan paket bantuan pada hari pelaksanaan. Sistem ini kami buat agar proses pembagian berlangsung lebih teratur dan merata.
            </p>
          </FadeInOnScroll>

          <FadeInOnScroll direction="down">
            <p>
              Pada hari Minggu yang cerah, tepatnya tanggal <strong>26 Oktober 2025</strong>, tim kami berangkat menuju lokasi di <em>Bodhiarama Meditation Centre, Bogor</em>. Dengan semangat kebersamaan, kami membawa seluruh paket bantuan yang telah disiapkan. Sesampainya di lokasi, suasana hangat langsung terasa — para penerima manfaat mulai berdatangan dengan membawa kupon masing-masing, siap untuk menukarkannya dengan paket bantuan yang telah kami siapkan dengan sepenuh hati.
            </p>
          </FadeInOnScroll>

          <p>
            Proses pembagian berlangsung dengan penuh ketertiban dan sukacita. Kami melihat senyum-senyum tulus dari para penerima bantuan yang membawa kebahagiaan tersendiri bagi seluruh tim. Setiap kupon yang ditukar bukan hanya simbol bantuan, tetapi juga jembatan kecil yang menghubungkan hati antara kami dan masyarakat. Di sela-sela kegiatan, tim Heartifact juga menyempatkan diri untuk berinteraksi dan berbincang hangat dengan warga sekitar, menciptakan momen kebersamaan yang sederhana namun bermakna.
          </p>

          <p>
            Seluruh kegiatan berjalan dengan lancar berkat kerja sama yang solid antara tim internal dan relawan yang turut serta membantu di lapangan. Kami memastikan setiap paket tersalurkan tepat sasaran dan semua penerima pulang dengan rasa senang serta harapan baru. Tak hanya membawa barang, kami ingin membawa <strong>semangat kepedulian</strong> — bahwa setiap orang berhak mendapatkan perhatian dan kasih sayang.
          </p>

          <p>
            Melalui kegiatan bakti sosial ini, <strong>Heartifact</strong> berharap dapat terus menjadi bagian dari gerakan kecil yang membawa perubahan besar. Kami percaya bahwa setiap tindakan baik, sekecil apapun, akan selalu meninggalkan dampak yang mendalam. Terima kasih kami ucapkan kepada semua pihak yang telah membantu, baik dari tim internal, relawan, maupun donatur yang mempercayakan kebaikannya melalui kami.
          </p>

          <p>
            Kegiatan <em>Bakti Sosial Bodhiarama Meditation Centre</em> menjadi pengingat bahwa kebahagiaan sejati bukan hanya tentang menerima, tetapi tentang memberi dengan sepenuh hati. Dengan langkah kecil ini, kami ingin terus menebarkan kebaikan, menginspirasi lebih banyak orang, dan menumbuhkan semangat berbagi yang tulus di setiap kesempatan.
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
          :src="`/article/batch2/galeri${i}.jpg`"
          alt="Dokumentasi"
          class="w-full rounded-xl cursor-zoom-in hover:scale-105 transition duration-300 shadow-md"
          @click="openModal(`/article/batch2/galeri${i}.jpg`)"
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
