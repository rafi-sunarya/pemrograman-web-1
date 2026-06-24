// nuxt.config.ts
export default defineNuxtConfig({
  css: [
    'swiper/css',
    'swiper/css/navigation'
  ],
  compatibilityDate: '2025-05-15',
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxtjs/google-fonts'
  ],
  googleFonts: {
    families: {
      Poppins: [300, 400, 500, 600, 700],
    },
    display: 'swap',
  },
  postcss: {
    plugins: {
      tailwindcss: {},
      autoprefixer: {},
    }
  },
  // ✅ Tambahkan ini supaya bisa jadi static site
  nitro: {
    preset: 'static'
  }
})