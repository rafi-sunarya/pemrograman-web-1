<template>
  <!--  Kalo Mau Update Website Run dit terminal
    npm install
    npx nuxi generate-->
  
  <!-- Section Awal dengan Carousel Banner -->
  <section class="relative w-full h-screen overflow-hidden">
    <!-- Background Carousel -->
    <div class="absolute inset-0 w-full h-full">
      <TransitionGroup name="fade">
        <div
          v-for="(banner, index) in banners"
          :key="index"
          v-show="currentSlide === index"
          class="absolute inset-0 w-full h-full transition-opacity duration-700"
        >
          <!-- Smartphone -->
          <img 
            :src="banner.bgMobile" 
            alt="Background Mobile"
            class="block sm:hidden w-full h-full object-cover"
          />
          <!-- Tablet -->
          <img 
            :src="banner.bgTablet" 
            alt="Background Tablet"
            class="hidden sm:block lg:hidden w-full h-full object-cover"
          />
          <!-- Desktop -->
          <img 
            :src="banner.bgDesktop" 
            alt="Background Desktop"
            class="hidden lg:block w-full h-full object-cover"
          />
          
          <!-- Gradient fade to white at bottom -->
          <div class="absolute bottom-0 w-full h-screen bg-gradient-to-b from-transparent to-white"></div>
        </div>
      </TransitionGroup>
    </div>

    <!-- Content -->
    <div class="font-poppins relative z-10 h-full">
      <div class="max-w-screen-2xl mx-auto px-4 h-full">
        <div class="grid grid-cols-1 md:grid-cols-2 h-screen md:h-auto">
          
          <!-- Kanan: Gambar (order 1 di hp, order 2 di desktop) - Hanya muncul kalau bukan fullImageOnly -->
          <div v-if="!activeBanner.fullImageOnly" class="flex justify-center md:justify-end items-center order-1 md:order-2">
            <TransitionGroup name="slide-fade">
              <img 
                v-for="(banner, index) in banners"
                :key="index"
                v-show="currentSlide === index && banner.image"
                :src="banner.image" 
                :alt="banner.title || 'Banner'" 
                class="w-full max-w-[800px] h-auto object-contain transition-all duration-700"
              />
            </TransitionGroup>
          </div>       

          <!-- Kiri: Text (order 2 di hp, order 1 di desktop) - Hanya muncul kalau bukan fullImageOnly -->
          <div v-if="!activeBanner.fullImageOnly" class="flex flex-col justify-center items-start text-left order-2 md:order-1 px-4 md:px-0">
            <FadeInOnScroll direction="up">
              <TransitionGroup name="text-fade" mode="out-in">
                <div :key="currentSlide" class="transition-all duration-500">
                  <div class="text-xl md:text-5xl font-extrabold text-red-700 leading-snug mb-6">
                    <p>{{ activeBanner.title }}</p>
                  </div>
                  <div class="text-red-700 text-sm md:text-lg mb-12">
                    <p>{{ activeBanner.description }}</p>
                  </div>
                  <div v-if="activeBanner.buttonText">
                    <button
                      @click="scrollToSection"
                      class="bg-red-700 hover:bg-red-800 text-white px-20 py-3 rounded-full font-semibold transition duration-300 pulse-btn"
                    >
                      {{ activeBanner.buttonText }}
                    </button>
                  </div>
                </div>
              </TransitionGroup>
            </FadeInOnScroll>          
          </div>         
        </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <button
      @click="prevSlide"
      class="hidden md:block absolute left-4 md:left-8 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-gray-800 p-3 rounded-full transition-all duration-300 hover:scale-110 shadow-lg"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <button
      @click="nextSlide"
      class="hidden md:block absolute right-4 md:right-8 top-1/2 -translate-y-1/2 z-20 bg-white/30 hover:bg-white/50 backdrop-blur-sm text-gray-800 p-3 rounded-full transition-all duration-300 hover:scale-110 shadow-lg"
    >
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Indicator Dots -->
    <div class="absolute bottom-8 left-1/2 -translate-x-1/2 z-20 flex gap-3">
      <button
        v-for="(banner, index) in banners"
        :key="index"
        @click="goToSlide(index)"
        class="transition-all duration-800"
        :class="currentSlide === index 
          ? 'w-12 h-1.5 bg-red-600 rounded-full' 
          : 'w-8 h-1.5 bg-gray-400 hover:bg-gray-600 rounded-full'"
      ></button>
    </div>
  </section> 

  <!-- Penjelasan GBJ -->
  <section  id="about-us" class="relative font-poppins bg-[url('asset/bg-repeat.jpg')] bg-repeat pb-12">
    <!-- Grid kiri kanan -->
    <div class="grid md:grid-cols-2">
      <!-- Kiri: Background merah + teks -->
      <div class="bg-red-800 flex items-center">
        <div class="max-w-xl mx-auto px-6 py-16 text-white">
          <h2 class="text-3xl md:text-4xl font-bold mb-4">PT. GLOBAL BESTINDO JAYA</h2>
          <p class="mb-4">
            <p><strong>PT Global Bestindo Jaya</strong> is a company that operates in the field of providing security devices and door locking systems for properties and buildings.</p> <br>
                <p>Starting from Batam in 2015, we were officially established in Jakarta in 2018 as a form of our expansion and commitment to reach a wider national market.</p> <br>
                <p>Through the brand <strong>Glatino</strong>, we bring high-quality product solutions designed to meet the security needs of modern homes and buildings in Indonesia.</p> <br>
                <p><strong>With Glatino, live safer, more comfortable, and smarter.</strong></p>
          </p>
        </div>
      </div>

      <!-- Kanan: Gambar -->
      <div class="bg-gray-100">
        <img src="/asset/index/gambar awal-1.png" alt="Building" class="w-full h-112 object-cover" />
      </div>
    </div>

    <!-- 3 Card putih yang overlap -->
    <div class="max-w-screen-xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-6 -mt-12 relative z-10">
      <div class="bg-white rounded-xl shadow-lg p-6 flex items-center gap-5 hover:shadow-xl transition">
        <div class="text-red-600 text-3xl">
          <img src="/asset/index/industry.png" alt="Experience" class="w-10 h-auto" />
        </div>
        <div>
          <h3 class="font-bold text-lg">Experience</h3>
          <p class="text-sm text-gray-600">20 years of activity</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-6 flex items-center gap-5 hover:shadow-xl transition">
        <div class="text-red-600 text-3xl">
          <img src="/asset/index/professional.png" alt="Professional" class="w-10 h-auto" />
        </div>
        <div>
          <h3 class="font-bold text-lg">Team</h3>
          <p class="text-sm text-gray-600">Professionals in the industry</p>
        </div>
      </div>

      <div class="bg-white rounded-xl shadow-lg p-6 flex items-center gap-5 hover:shadow-xl transition">
        <div class="text-red-600 text-3xl">
          <img src="/asset/index/best.png" alt="Quality" class="w-10 h-auto" />
        </div>
        <div>
          <h3 class="font-bold text-lg">Integrated Quality</h3>
          <p class="text-sm text-gray-600">Highest standards in every product</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Visi Misi Section -->
  <section class="relative bg-[url('/asset/bg-repeat.jpg')] bg-cover bg-center font-poppins pb-12 text-black">
    <div class="relative max-w-screen-xl mx-auto px-6 py-16">
      <!-- VISION -->
      <FadeInOnScroll direction="up">
        <div class="mb-16">
          <span class="inline-block bg-red-500 text-white font-semibold px-3 py-1 text-sm uppercase mb-4">
            What we aspire to be
          </span>
          <h2 class="text-4xl md:text-7xl font-bold mb-4">OUR VISION</h2>
          <p class="text-lg leading-relaxed text-red-500">
            With the spirit of <strong class="text-gray-800">"Smart Security for Modern Living"</strong>, 
          PT Global Bestindo Jaya is committed to becoming a leading, trusted, and innovative security solutions provider for homes and buildings in Indonesia.
          <br><br>
          We have a vision to shape the future of the security industry by creating a smarter and more practical environment 
          through smart security products such as fingerprint-based door access, facial recognition and connect to phone by apps. We also continue to strive to educate the Indonesian people about the importance of modern security systems in everyday life.          
          </p>
        </div>
      </FadeInOnScroll>

      <!-- MISSION -->
      <FadeInOnScroll direction="up">
        <div>
          <span class="inline-block bg-red-500 text-white font-semibold px-3 py-1 text-sm uppercase mb-4">
            Who we are, what we do
          </span>
          <h2 class="text-4xl md:text-7xl font-bold mb-10">OUR MISSION</h2>
          <div class="space-y-8">
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-1">QUALITY PRODUCTS AND THE LATEST TECHNOLOGY</h3>
              <p class="text-red-500 font-bold text-lg">
                Providing high-quality door locking and door accessory products with competitive pricing and the latest technology.
              </p>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-1">MAXIMAL SERVICE & CUSTOMER SATISFACTION</h3>
              <p class="text-red-500 font-bold text-lg">
                Prioritizing excellent service and customer satisfaction in every aspect of our business.
              </p>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-1">HUMAN RESOURCE DEVELOPMENT</h3>
              <p class="text-red-500 font-bold text-lg">
                Increasing human resource capabilities through continuous training to create professional and responsive services.
              </p>
            </div>
            <div>
              <h3 class="text-xl font-bold text-gray-800 mb-1">BECOMING A TRUSTED PARTNER</h3>
              <p class="text-red-500 font-bold text-lg">
                Becoming a trusted partner for property industry players in Indonesia and Southeast Asia.
              </p>
            </div>
          </div>
        </div>
      </FadeInOnScroll>
    </div>
  </section>
  
  <!-- Uji Coba Section -->
  <section>
    <div>
      <UjiCoba />
    </div>
  </section>

  <!-- Product Range Section - UPDATED PROFESSIONAL VERSION -->
  <!-- <section id="product-range" class="relative z-10 overflow-hidden py-20 md:py-28">
    Background Pattern
    <div class="absolute inset-0 bg-gradient-to-br from-gray-50 via-white to-gray-50">
      <div class="absolute inset-0 bg-[url('asset/bg-repeat.jpg')] bg-repeat opacity-30"></div>
    </div>

    <div class="relative max-w-screen-2xl mx-auto px-4 sm:px-6 lg:px-8">
      Section Header
      <div class="text-center mb-16 max-w-3xl mx-auto">
        <div class="inline-block mb-4">
          <span class="text-red-600 font-semibold text-sm tracking-wider uppercase"></span>
        </div>
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
          Product Range
        </h2>
        <p class="text-lg text-gray-600 max-w-2xl mx-auto">
          Discover our comprehensive selection of premium quality door and window hardware solutions
        </p>
      </div>

      Products Grid
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 lg:gap-8">
        <ProductCard
          v-for="product in products"
          :key="product.slug"
          :product="product"
        />
      </div>

      View All Button (Optional)
      <div class="text-center mt-12">
        <NuxtLink
          to="/product"
          class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-red-600 to-red-700 text-white font-semibold rounded-lg hover:from-red-700 hover:to-red-800 transition-all duration-300 shadow-lg hover:shadow-xl transform hover:-translate-y-0.5"
        >
          <span>View All Products</span>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
          </svg>
        </NuxtLink>
      </div>
    </div>
  </section> -->

  <!-- Latest News Section -->
  <section>
    <div>
      <LatestNews />
    </div>
  </section>

  <!-- Contact Section -->
  <section class="bg-[url('/asset/index/contact-bg.jpeg')] 
                  bg-cover bg-center 
                  text-white px-4 sm:px-6 lg:px-8 font-poppins relative">
    <div class="max-w-screen-2xl mx-auto grid grid-cols-1 md:grid-cols-2 items-center">
      
      <!-- Text + Form -->
      <FadeInOnScroll direction="up">
        <div class="order-2 md:order-1 pb-16 md:py-24">
          <h2 class="text-3xl md:text-4xl font-bold mb-4 md:text-white text-red-600 mt-10 md:mt-0">
            We're happy to connect with you.
          </h2>
          <p class="mb-8 text-white md:text-gray-300">
            Contact us for more information about our products, services, or partnership opportunities. Our team will respond quickly and provide the best solutions for your needs.
          </p>

          <!-- Form -->
          <div class="bg-white rounded-full flex overflow-hidden flex items-center justify-center max-w-xs">      
            <!-- Tombol CTA -->
          <NuxtLink 
            to="/contact" 
            class="
              relative 
              font-extrabold 
              text-transparent 
              bg-clip-text 
              bg-[url('/asset/index/contact-bg.jpeg')] 
              bg-cover bg-center 
              px-6 py-3 
              rounded-full 
              transition
              duration-300
              hover:scale-105
              hover:brightness-110
              mx-1 my-1
            ">
            Go to Contact Form
          </NuxtLink>
          </div>
        </div>
      </FadeInOnScroll>

      <!-- Laptop Image -->
      <FadeInOnScroll>
        <div class="order-1 md:order-2 flex justify-center md:justify-end relative">
          <img src="/asset/index/mockup-laptop.png"
              alt="Laptop" 
              class="w-[740px] h-auto -mt-6 md:-mt-10 md:-ml-16 relative z-20 floating" />
        </div>
      </FadeInOnScroll>
    </div>
  </section>

  <FooterComponent />
</template>

<script lang="ts" setup>
import { ref, computed, onMounted, onUnmounted } from 'vue'
import { useRouter } from 'vue-router'

const router = useRouter()



// State untuk carousel
const currentSlide = ref(0)
let autoPlayInterval: ReturnType<typeof setInterval> | null = null

// Data banner carousel - GANTI GAMBAR DI SINI
// Data banner carousel - UPDATE BANNER 3
interface Banner {
  bgDesktop: string
  bgTablet: string
  bgMobile: string
  image: string
  title: string
  description: string
  buttonText: string
  buttonAction: 'about-us' | 'product-range' | 'custom'
  buttonUrl?: string
  fullImageOnly?: boolean // Flag untuk menampilkan full image saja
}

const banners: Banner[] = [
  {
    bgDesktop: '/asset/bg-image-dekstop.jpg',
    bgTablet: '/asset/bg-image-tablet.jpg',
    bgMobile: '/asset/bg-image-smartphone.jpg',
    image: '/asset/index/gambar awal-2.png',
    title: 'PT GLOBAL BESTINDO JAYA',
    description: 'Creating Quality Aluminum Accessories',
    buttonText: 'FIND OUT MORE',
    buttonAction: 'about-us'
  },
  {
    bgDesktop: '/asset/bg-image-dekstop.jpg',
    bgTablet: '/asset/bg-image-tablet.jpg',
    bgMobile: '/asset/bg-image-smartphone.jpg',
    image: '/asset/index/gambar awal-1.png',
    title: 'HIGH QUALITY PRODUCTS',
    description: 'Modern Home Security Solutions with the Latest Technology',
    buttonText: 'VIEW PRODUCTS',
    buttonAction: 'custom',
    buttonUrl: 'https://glatinopremium.com/product'
  },
  {
    // BANNER 3 - FULL IMAGE ONLY
    bgDesktop: '/asset/index/banner3-pc.jpeg',
    bgTablet: '/asset/index/banner3-tablet.jpeg',
    bgMobile: '/asset/index/banner3-mobile.jpeg',
    image: '', // Kosongkan karena tidak digunakan
    title: '', // Kosongkan
    description: '', // Kosongkan
    buttonText: '', // Kosongkan
    buttonAction: 'about-us',
    fullImageOnly: true // Set true untuk menampilkan full image saja
  }
]

// Data products untuk Product Range section
const products = [
  {
    slug: 'handle-roses',
    title: 'Handle Roses',
    image: '/asset/product/Door-Lock.png',
    description: 'Premium door handle with rose design',
    badge: 'Popular',
    badgeColor: 'bg-blue-500'
  },
  {
    slug: 'patch-fitting',
    title: 'Patch Fitting',
    image: '/asset/product/patch-fitting.png',
    description: 'Glass door patch fittings',
    badge: 'New',
    badgeColor: 'bg-green-500'
  },
  {
    slug: 'sliding-rail',
    title: 'Sliding Rail',
    image: '/asset/product/sliding-rail.png',
    description: 'Smooth sliding door rail system',
    badge: null
  },
  {
    slug: 'alumunium-lock',
    title: 'Aluminium Lock',
    image: '/asset/product/alumunium-lock.png',
    description: 'Durable aluminium locking system',
    badge: null
  },
  {
    slug: 'roller-caster',
    title: 'Roller Caster',
    image: '/asset/product/roller-caster.png',
    description: 'Heavy-duty roller casters',
    badge: null
  },
  {
    slug: 'mortise-lock',
    title: 'Mortise Lock',
    image: '/asset/product/mortise-lock.png',
    description: 'Secure mortise lock mechanism',
    badge: 'Best Seller',
    badgeColor: 'bg-red-500'
  }
]

// Computed property untuk banner aktif
const activeBanner = computed<Banner>(() => {
  return banners[currentSlide.value] || banners[0]!
})

// Fungsi carousel
const nextSlide = () => {
  currentSlide.value = (currentSlide.value + 1) % banners.length
}

const prevSlide = () => {
  currentSlide.value = currentSlide.value === 0 ? banners.length - 1 : currentSlide.value - 1
}

const goToSlide = (index: number) => {
  currentSlide.value = index
}

// Auto play - ganti setiap 5 detik
const startAutoPlay = () => {
  if (banners.length > 1) {
    autoPlayInterval = setInterval(nextSlide, 5000)
  }
}

const stopAutoPlay = () => {
  if (autoPlayInterval) {
    clearInterval(autoPlayInterval)
  }
}

onMounted(() => {
  startAutoPlay()
})

onUnmounted(() => {
  stopAutoPlay()
})

// Scroll function - dinamis sesuai buttonAction
const scrollToSection = () => {
  const action = activeBanner.value.buttonAction;

  if (action === 'custom' && activeBanner.value.buttonUrl) {
    window.open(activeBanner.value.buttonUrl, '_blank')
    return
  }

  if (action === 'about-us' || action === 'product-range') {
    const target = document.getElementById(action)
    if (target) {
      const startY = window.scrollY;
      const endY = target.getBoundingClientRect().top + window.scrollY;
      const duration = 1500;
      const startTime = performance.now();

      const animateScroll = (currentTime: number) => {
        const elapsed = currentTime - startTime;
        const progress = Math.min(elapsed / duration, 1);
        const easeInOut = progress < 0.5
          ? 2 * progress * progress
          : -1 + (4 - 2 * progress) * progress;

        window.scrollTo(0, startY + (endY - startY) * easeInOut);

        if (elapsed < duration) {
          requestAnimationFrame(animateScroll);
        }
      };

      requestAnimationFrame(animateScroll);
    } else if (action === 'product-range') {
      // Kalau elemen product-range tidak ada, langsung ke halaman /product
      router.push('/')
    }
  } else if (action === 'custom') {
    // misal buat tombol custom
  }
}


import LatestNews from '~/components/LatestNews.vue'
import UjiCoba from '~/components/UjiCoba.vue'
import FooterComponent from '~/components/footer.vue'
import ProductCard from '~/components/ProductCard.vue'
</script>

<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap');

.font-poppins {
  font-family: 'Poppins', sans-serif;
}

@keyframes pulse {
  0%, 100% {
    transform: scale(1);
  }
  50% {
    transform: scale(1.08);
  }
}

.pulse-btn {
  animation: pulse 2s ease-in-out infinite;
}

@keyframes float {
  0%, 100% {
    transform: translateY(0);
  }
  50% {
    transform: translateY(-12px);
  }
}

.floating {
  animation: float 3s ease-in-out infinite;
}

/* Transition untuk carousel */
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.7s ease;
}

.fade-enter-from,
.fade-leave-to {
  opacity: 0;
}

.slide-fade-enter-active {
  transition: all 0.7s ease;
}

.slide-fade-leave-active {
  transition: all 0.5s ease;
}

.slide-fade-enter-from {
  transform: translateX(30px);
  opacity: 0;
}

.slide-fade-leave-to {
  transform: translateX(-30px);
  opacity: 0;
}

.text-fade-enter-active,
.text-fade-leave-active {
  transition: all 0.5s ease;
}

.text-fade-enter-from {
  opacity: 0;
  transform: translateY(20px);
}

.text-fade-leave-to {
  opacity: 0;
  transform: translateY(-20px);
}
</style>