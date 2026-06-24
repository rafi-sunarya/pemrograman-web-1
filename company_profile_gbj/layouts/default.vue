<template>
  <header class="bg-white text-black fixed top-0 left-0 right-0 z-50 text-sm font-poppins">
    <div class="container mx-auto px-2 py-3 md:px-4 md:py-4 flex justify-between items-center">
      <!-- Logo -->
      <NuxtLink to="/" class="flex items-center space-x-2 min-w-0">
        <img src="/assets/Header Navbar/company_logo.png" alt="Logo" class="w-8 h-8 md:w-10 md:h-10 object-contain" />
        <span class="font-bold truncate text-red-600 hidden md:inline text-sm lg:text-lg">
          PT Global Bestindo Jaya
        </span>
        <span class="font-bold truncate text-red-600 inline md:hidden text-sm">
          Global Bestindo Jaya
        </span>
      </NuxtLink>

      <!-- Desktop/Tablet Menu -->
      <nav class="hidden md:flex flex-1 items-center text-sm lg:text-base">
        <div class="flex flex-1 justify-end items-center gap-6 mr-4">
          <NuxtLink to="/" @click.prevent="scrollToTop" :class="[activeSection === 'home' && route.path === '/' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Home</NuxtLink>
          <NuxtLink to="/" @click.prevent="scrollToAbout"
            :class="[
              (activeSection === 'about' && route.path === '/') ||
              route.path === '/article-page' ||
              route.path.startsWith('/event') ? 'text-red-600 font-bold' : 'hover:text-red-500'
            ]"
          >
            About Us
          </NuxtLink>
          <a href="https://glatinopremium.com/product" target="_blank" @click="closeMenus" :class="[route.path === '/produk' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Product</a>
          <!-- <NuxtLink to="/product" @click="closeMenus" :class="[route.path.startsWith('/product') || route.path.startsWith('/produk') ? 'text-red-600 font-bold' : 'hover:text-red-500']">Product</NuxtLink> -->
          <!-- <NuxtLink to="/team" @click="closeMenus" :class="[route.path === '/team' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Team</NuxtLink> -->
          <NuxtLink to="/contact" @click="closeMenus" :class="[route.path === '/contact' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Contact</NuxtLink>
        </div>

        <!-- Online Store Dropdown -->
        <div class="relative" @click="toggleStoreDropdown">
          <button class="ml-2 bg-red-700 hover:bg-red-800 text-white px-3 py-2 rounded-md transition font-semibold flex items-center">
            Online Store
            <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
            </svg>
          </button>
          <div v-if="showStoreDropdown" class="absolute right-0 mt-2 bg-white text-black rounded-md shadow-lg w-48 z-50">
            <a href="https://shopee.co.id/glatino.official" target="_blank" class="block px-4 py-2 hover:bg-gray-100">Shopee</a>
            <a href="https://www.tokopedia.com/glatino-official-store" target="_blank" class="block px-4 py-2 hover:bg-gray-100">Tokopedia</a>
          </div>
        </div>
      </nav>

      <!-- Burger Menu (Mobile Only) -->
      <button @click="isOpen = !isOpen" class="md:hidden text-black focus:outline-none">
        <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
        <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
        </svg>
      </button>
    </div>

    <!-- Mobile Menu -->
    <div v-if="isOpen" class="md:hidden bg-white px-4 pb-4 space-y-2 text-sm text-black border-t border-gray-200">
      <NuxtLink to="/" class="block" @click.prevent="scrollToTop" :class="[activeSection === 'home' && route.path === '/' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Home</NuxtLink>
      <NuxtLink to="/" class="block" @click.prevent="scrollToAbout" :class="[activeSection === 'about' && route.path === '/' ? 'text-red-600 font-bold' : 'hover:text-red-500']">About Us</NuxtLink>
      <NuxtLink to="/product" class="block" @click="closeMenus" :class="[route.path.startsWith('/product') || route.path.startsWith('/produk') ? 'text-red-600 font-bold' : 'hover:text-red-500']">Product</NuxtLink>
      <!-- <NuxtLink to="/team" class="block" @click="closeMenus" :class="[route.path === '/team' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Team</NuxtLink> -->
      <NuxtLink to="/contact" class="block" @click="closeMenus" :class="[route.path === '/contact' ? 'text-red-600 font-bold' : 'hover:text-red-500']">Contact</NuxtLink>

      <!-- Online Store Dropdown (Mobile) -->
      <div class="relative">
        <button @click="toggleStoreDropdown" class="w-full bg-red-700 hover:bg-red-800 text-white px-4 py-2 rounded-md mt-2 text-center font-semibold flex justify-between items-center">
          Online Store
          <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19 9l-7 7-7-7" />
          </svg>
        </button>
        <div v-if="showStoreDropdown" class="bg-white text-black rounded-md shadow mt-2">
          <a href="https://shopee.co.id/glatino.official" target="_blank" class="block px-4 py-2 hover:bg-gray-100">Shopee</a>
          <a href="https://www.tokopedia.com/glatino-official-store" target="_blank" class="block px-4 py-2 hover:bg-gray-100">Tokopedia</a>
        </div>
      </div>
    </div>
  </header>

  <main>
    <slot />
  </main>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount, nextTick, watch } from 'vue'
import { useRoute, useRouter } from '#imports'

const isOpen = ref(false)
const showStoreDropdown = ref(false)
const activeSection = ref('home')
const isScrollListenerAttached = ref(false)
const route = useRoute()
const router = useRouter()

const toggleStoreDropdown = () => {
  showStoreDropdown.value = !showStoreDropdown.value
}

const closeMenus = () => {
  isOpen.value = false
  showStoreDropdown.value = false
}

const scrollToTop = () => {
  closeMenus()
  if (route.path === '/') {
    window.scrollTo({ top: 0, behavior: 'smooth' })
    activeSection.value = 'home'
  } else {
    router.push('/')
  }
}

const scrollToAbout = () => {
  closeMenus()
  if (route.path === '/') {
    const about = document.getElementById('about-us')
    if (about) {
      about.scrollIntoView({ behavior: 'smooth' })
    }
  } else {
    router.push('/').then(() => {
      nextTick(() => {
        const interval = setInterval(() => {
          const about = document.getElementById('about-us')
          if (about) {
            about.scrollIntoView({ behavior: 'smooth' })
            clearInterval(interval)
          }
        }, 100)
        setTimeout(() => clearInterval(interval), 2000)
      })
    })
  }
}

const handleScroll = () => {
  if (route.path !== '/') return
  
  const about = document.getElementById('about-us')
  if (!about) return
  
  const scrollPos = window.scrollY + 150 // Offset dari top navbar
  
  if (scrollPos >= about.offsetTop) {
    activeSection.value = 'about'
  } else {
    activeSection.value = 'home'
  }
}

onMounted(() => {
  if (process.client && route.path === '/') {
    window.addEventListener('scroll', handleScroll)
    isScrollListenerAttached.value = true
    handleScroll() // Initial check
  }
})

watch(
  () => route.path,
  (newPath) => {
    if (process.client) {
      if (newPath === '/') {
        nextTick(() => {
          if (!isScrollListenerAttached.value) {
            window.addEventListener('scroll', handleScroll)
            isScrollListenerAttached.value = true
          }
          handleScroll() // Check initial state
        })
      } else {
        if (isScrollListenerAttached.value) {
          window.removeEventListener('scroll', handleScroll)
          isScrollListenerAttached.value = false
        }
        activeSection.value = 'home' // Reset to home
      }
    }
  },
  { immediate: true }
)

onBeforeUnmount(() => {
  if (isScrollListenerAttached.value) {
    window.removeEventListener('scroll', handleScroll)
  }
})
</script>

<style>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}
</style>