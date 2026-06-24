<template>
  <div class="font-poppins">
    <!-- Hero Section with Slideshow -->
    <section class="relative w-full h-screen flex items-center justify-center text-center overflow-hidden mt-16">
      <!-- Slideshow Background (Desktop) -->
      <div class="hidden md:block absolute inset-0 z-[-2]">
        <div
          v-for="(image, index) in heroImages"
          :key="index"
          class="absolute inset-0 bg-cover bg-center bg-no-repeat transition-opacity duration-1000"
          :class="currentSlide === index ? 'opacity-100' : 'opacity-0'"
          :style="{ backgroundImage: `url(${image})` }"
        ></div>
      </div>

      <!-- Single Background (Mobile) -->
      <div
        class="md:hidden absolute inset-0 bg-cover bg-center bg-no-repeat z-[-2]"
        :style="{ backgroundImage: `url(${heroImages[0]})` }"
      ></div>

      <!-- Dark Overlay untuk readability -->
      <div class="absolute inset-0 bg-black/30 z-[-1]"></div>

      <!-- Slide Indicators (Desktop only) -->
      <div class="hidden md:flex absolute bottom-8 left-1/2 transform -translate-x-1/2 space-x-2 z-10">
        <button
          v-for="(image, index) in heroImages"
          :key="index"
          @click="currentSlide = index"
          class="w-3 h-3 rounded-full transition-all duration-300"
          :class="currentSlide === index ? 'bg-white w-8' : 'bg-white/50 hover:bg-white/75'"
        ></button>
      </div>

      <!-- Navigation Arrows (Desktop only) -->
      <button
        @click="prevSlide"
        class="hidden md:flex absolute left-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white w-12 h-12 rounded-full items-center justify-center transition z-10"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button
        @click="nextSlide"
        class="hidden md:flex absolute right-4 top-1/2 transform -translate-y-1/2 bg-black/30 hover:bg-black/50 text-white w-12 h-12 rounded-full items-center justify-center transition z-10"
      >
        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
        </svg>
      </button>

      <!-- Text Content -->
      <FadeInOnScroll direction="up">
        <div class="relative z-10 px-4 max-w-4xl text-white">
          <h1 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold leading-tight mb-6 drop-shadow-lg">
            Our Dedicated Team
          </h1>
          <p class="text-base sm:text-lg md:text-xl leading-relaxed mb-8 drop-shadow-md">
            Behind every product and service we deliver is a dedicated team working with integrity, expertise, and a passion for continuous improvement.
          </p>
          <button
            @click="scrollToStructure"
            class="bg-white text-black px-8 py-3 rounded-full hover:bg-gray-200 transition font-semibold shadow-lg"
          >
            View Team Structure
          </button>
        </div>
      </FadeInOnScroll>
    </section>

    <!-- Struktur Organisasi -->
    <FadeInOnScroll direction="down">
      <section id="structure-section" class="py-16 px-4 md:px-20 bg-white">
        <div class="max-w-7xl mx-auto">
          <div class="text-center mb-12">
            <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-800">Organizational structure</h2>
            <p class="text-gray-600 max-w-2xl mx-auto">
              Our organization is structured with a clear structure to ensure optimal efficiency and collaboration.
            </p>
          </div>

          <div class="bg-gray-50 rounded-2xl p-6 md:p-8 shadow-lg">
            <img
              :src="strukturOrganisasi"
              alt="Struktur Organisasi"
              class="rounded-xl shadow-md mx-auto w-full cursor-zoom-in hover:shadow-xl transition-shadow"
              @click="toggleZoom"
            />
            <p class="text-sm text-gray-500 mt-4 text-center">
              <svg class="w-4 h-4 inline mr-1" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7" />
              </svg>
              Click image to zoom in and view details
            </p>
          </div>

          <!-- Modal Zoom -->
          <div
            v-if="isZoomOpen"
            class="fixed inset-0 z-50 bg-black bg-opacity-95 flex flex-col items-center justify-center"
            @click.self="toggleZoom"
          >
            <!-- Close Button -->
            <button
              @click="toggleZoom"
              class="absolute top-4 right-4 text-white bg-black/50 hover:bg-black/70 rounded-full w-12 h-12 flex items-center justify-center transition z-10 text-2xl"
            >
              ✕
            </button>

            <!-- Zoom Controls -->
            <div class="absolute top-4 left-4 flex flex-col gap-2 z-10">
              <button
                @click="zoomIn"
                class="text-white bg-black/50 hover:bg-black/70 rounded-full w-12 h-12 flex items-center justify-center transition text-2xl font-bold"
                title="Zoom In (Ctrl + Scroll)"
              >
                +
              </button>
              <button
                @click="zoomOut"
                class="text-white bg-black/50 hover:bg-black/70 rounded-full w-12 h-12 flex items-center justify-center transition text-2xl font-bold"
                title="Zoom Out (Ctrl + Scroll)"
              >
                −
              </button>
              <button
                @click="resetZoom"
                class="text-white bg-black/50 hover:bg-black/70 rounded-full w-12 h-12 flex items-center justify-center transition text-lg"
                title="Reset Zoom"
              >
                ⟲
              </button>
            </div>

            <!-- Zoom Level Indicator -->
            <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 text-white bg-black/50 px-4 py-2 rounded-full text-sm z-10">
              {{ Math.round(zoomLevel * 100) }}%
            </div>

            <!-- Scrollable Container (seperti Figma) -->
            <div
              ref="zoomContainer"
              class="w-full h-full overflow-auto"
              @wheel="onWheelZoom"
              style="cursor: default;"
            >
              <div 
                class="inline-block"
                :style="{
                  width: `${baseImageWidth * zoomLevel}px`,
                  height: `${baseImageHeight * zoomLevel}px`,
                  minWidth: '100%',
                  minHeight: '100%'
                }"
              >
                <div class="w-full h-full flex items-center justify-center">
                  <img
                    ref="zoomImage"
                    :src="strukturOrganisasi"
                    alt="Zoomed Struktur Organisasi"
                    class="select-none"
                    :style="{ 
                      width: `${baseImageWidth * zoomLevel}px`,
                      height: 'auto'
                    }"
                    draggable="false"
                    @load="onImageLoad"
                  />
                </div>
              </div>
            </div>

            <!-- Instructions -->
            <div class="absolute bottom-4 right-4 text-white/80 text-sm text-right z-10 bg-black/50 px-4 py-2 rounded-lg">
              <p class="hidden md:block">📌 Ctrl + Scroll for zoom</p>
              <p class="hidden md:block">📌 Shift + Scroll for horizontal scroll</p>
              <p class="md:hidden">📌 Pinch for zoom</p>
            </div>
          </div>
        </div>
      </section>
    </FadeInOnScroll>

    <!-- Penjelasan Warna -->
    <section class="py-16 px-4 bg-gray-50">
      <div class="max-w-7xl mx-auto">
        <div class="text-center mb-12">
          <h2 class="text-3xl sm:text-4xl font-bold mb-4 text-gray-800">Meaning of Colors</h2>
          <p class="text-gray-600 max-w-2xl mx-auto">
            Each color in our organizational structure has a meaning and philosophy that represents the team's values.
          </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
          <div
            v-for="(item, index) in colorDescriptions"
            :key="index"
            class="bg-white rounded-xl p-6 shadow-md hover:shadow-xl transition-shadow flex items-start space-x-4"
          >
            <div
              class="w-12 h-12 rounded-lg flex-shrink-0 shadow-md"
              :style="{ backgroundColor: item.color }"
            ></div>
            <div>
              <p class="font-bold text-gray-800 mb-1">{{ item.title }}</p>
              <p class="text-sm italic text-gray-500">{{ item.subtitle }}</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <FooterComponent />
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import FooterComponent from '../components/footer.vue'
import strukturOrganisasi from '@/assets/team/struktur-organisasi.png'

// Hero Images untuk slideshow (ganti dengan path gambar Anda)
const heroImages = ref([
  '/asset/team/bg-img-team.jpeg',
  '/asset/team/bg-img-team-2.jpeg', // tambahkan gambar baru
  '/asset/team/bg-img-team-4.jpeg', // tambahkan gambar baru
])

const currentSlide = ref(0)
let slideInterval = null

// Slideshow functions
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % heroImages.value.length
}

const prevSlide = () => {
  currentSlide.value = currentSlide.value === 0 ? heroImages.value.length - 1 : currentSlide.value - 1
}

const startSlideshow = () => {
  slideInterval = setInterval(() => {
    nextSlide()
  }, 5000) // Ganti slide setiap 5 detik
}

const stopSlideshow = () => {
  if (slideInterval) {
    clearInterval(slideInterval)
  }
}

// Zoom modal
const isZoomOpen = ref(false)
const zoomLevel = ref(1)
const zoomContainer = ref(null)
const zoomImage = ref(null)
const baseImageWidth = ref(1200)
const baseImageHeight = ref(800)

const toggleZoom = () => {
  isZoomOpen.value = !isZoomOpen.value
  if (isZoomOpen.value) {
    zoomLevel.value = 1
    setTimeout(() => {
      if (zoomContainer.value) {
        const container = zoomContainer.value
        container.scrollLeft = (container.scrollWidth - container.clientWidth) / 2
        container.scrollTop = (container.scrollHeight - container.clientHeight) / 2
      }
    }, 10)
  }
}

const onImageLoad = (e) => {
  baseImageWidth.value = e.target.naturalWidth
  baseImageHeight.value = e.target.naturalHeight
}

const zoomIn = () => {
  const oldZoom = zoomLevel.value
  zoomLevel.value = Math.min(zoomLevel.value + 0.3, 5)
  adjustScrollAfterZoom(oldZoom, zoomLevel.value)
}

const zoomOut = () => {
  const oldZoom = zoomLevel.value
  zoomLevel.value = Math.max(zoomLevel.value - 0.3, 0.5)
  adjustScrollAfterZoom(oldZoom, zoomLevel.value)
}

const resetZoom = () => {
  zoomLevel.value = 1
  if (zoomContainer.value) {
    const container = zoomContainer.value
    setTimeout(() => {
      container.scrollLeft = (container.scrollWidth - container.clientWidth) / 2
      container.scrollTop = (container.scrollHeight - container.clientHeight) / 2
    }, 10)
  }
}

const adjustScrollAfterZoom = (oldZoom, newZoom) => {
  if (!zoomContainer.value) return
  
  const container = zoomContainer.value
  const rect = container.getBoundingClientRect()
  const centerX = container.scrollLeft + rect.width / 2
  const centerY = container.scrollTop + rect.height / 2
  
  const zoomRatio = newZoom / oldZoom
  
  setTimeout(() => {
    container.scrollLeft = centerX * zoomRatio - rect.width / 2
    container.scrollTop = centerY * zoomRatio - rect.height / 2
  }, 10)
}

const onWheelZoom = (e) => {
  if (e.ctrlKey || e.metaKey) {
    e.preventDefault()
    const oldZoom = zoomLevel.value
    const delta = e.deltaY > 0 ? -0.1 : 0.1
    zoomLevel.value = Math.max(0.5, Math.min(5, zoomLevel.value + delta))
    
    if (zoomContainer.value) {
      const container = zoomContainer.value
      const rect = container.getBoundingClientRect()
      const mouseX = e.clientX - rect.left + container.scrollLeft
      const mouseY = e.clientY - rect.top + container.scrollTop
      
      const zoomRatio = zoomLevel.value / oldZoom
      
      setTimeout(() => {
        container.scrollLeft = mouseX * zoomRatio - (e.clientX - rect.left)
        container.scrollTop = mouseY * zoomRatio - (e.clientY - rect.top)
      }, 10)
    }
  } else if (e.shiftKey) {
    e.preventDefault()
    if (zoomContainer.value) {
      zoomContainer.value.scrollLeft += e.deltaY
    }
  }
}

const scrollToStructure = () => {
  const target = document.getElementById('structure-section')
  if (!target) return

  const startY = window.scrollY
  const endY = target.getBoundingClientRect().top + window.scrollY - 80
  const duration = 1500
  const startTime = performance.now()

  const animateScroll = (currentTime) => {
    const elapsed = currentTime - startTime
    const progress = Math.min(elapsed / duration, 1)
    const easeInOut = progress < 0.5
      ? 2 * progress * progress
      : -1 + (4 - 2 * progress) * progress

    window.scrollTo(0, startY + (endY - startY) * easeInOut)

    if (elapsed < duration) {
      requestAnimationFrame(animateScroll)
    }
  }

  requestAnimationFrame(animateScroll)
}

const colorDescriptions = [
  {
    color: '#333333',
    title: 'Bijaksana, tenang, dan profesionalisme',
    subtitle: 'Sensible, composed, and guided by professionalism',
  },
  {
    color: '#134161',
    title: 'Profesional, dapat dipercaya, stabil',
    subtitle: 'Professional, trustworthy, and dependable',
  },
  {
    color: '#b20000',
    title: 'Sigap, penuh energi, bertanggung jawab',
    subtitle: 'Responsive, energetic, and accountable',
  },
  {
    color: '#808000',
    title: 'Kehati-hatian, perhitungan, kemandirian',
    subtitle: 'Prudence, calculated decision-making, and self-sufficiency',
  },
  {
    color: '#737373',
    title: 'Netral, konservatif, terpercaya',
    subtitle: 'Neutral, conservative, and reliable',
  },
  {
    color: '#ff581b',
    title: 'Energi, semangat, daya tarik',
    subtitle: 'Energetic, passionate, and attention-grabbing',
  },
  {
    color: '#ffc107',
    title: 'Percaya diri, ambisius, optimis',
    subtitle: 'Confident, ambitious, and optimistic',
  },
  {
    color: '#013120',
    title: 'Kuat, andal, membumi',
    subtitle: 'Robust, dependable, and grounded',
  },
  {
    color: '#4682b4',
    title: 'Stabil, tenang, dan sistematis',
    subtitle: 'Stable, composed, and methodical',
  },
  {
    color: '#49326b',
    title: 'Imajinatif, inovatif, estetika tinggi',
    subtitle: 'Imaginative, innovative, and aesthetically driven',
  },
  {
    color: '#000000',
    title: 'Modern, canggih, efisien',
    subtitle: 'Modern, sophisticated, and efficient',
  },
]

onMounted(() => {
  startSlideshow()
})

onBeforeUnmount(() => {
  stopSlideshow()
})
</script>

<style scoped>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}
</style>