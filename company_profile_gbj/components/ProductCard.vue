<template>
  <NuxtLink 
    :to="`/produk/${product.slug}`"
    class="group relative block bg-white rounded-2xl overflow-hidden transition-all duration-500 hover:shadow-2xl hover:-translate-y-2"
  >
    <!-- Badge (if exists) -->
    <div v-if="product.badge" class="absolute top-4 right-4 z-10">
      <span 
        :class="[
          product.badgeColor || 'bg-red-500',
          'px-3 py-1 text-xs font-bold text-white rounded-full shadow-lg'
        ]"
      >
        {{ product.badge }}
      </span>
    </div>

    <!-- Image Container -->
    <div class="relative h-64 bg-gradient-to-br from-gray-50 to-gray-100 overflow-hidden">
      <!-- Decorative Background Pattern -->
      <div class="absolute inset-0 opacity-5">
        <div class="absolute inset-0" style="background-image: radial-gradient(circle at 2px 2px, #666 1px, transparent 0); background-size: 40px 40px;"></div>
      </div>
      
      <!-- Image -->
      <div class="relative h-full flex items-center justify-center p-8">
        <img 
          :src="product.image" 
          :alt="product.title" 
          class="max-h-full max-w-full object-contain transition-all duration-500 group-hover:scale-110 group-hover:rotate-2 drop-shadow-xl"
        />
      </div>

      <!-- Gradient Overlay on Hover -->
      <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-500"></div>
    </div>

    <!-- Content -->
    <div class="p-6 relative">
      <!-- Title -->
      <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-red-600 transition-colors duration-300">
        {{ product.title }}
      </h3>
      
      <!-- Description -->
      <p class="text-sm text-gray-600 mb-4 line-clamp-2">
        {{ product.description }}
      </p>

      <!-- Footer with CTA -->
      <div class="flex items-center justify-between pt-4 border-t border-gray-100">
        <span class="text-red-600 font-semibold text-sm inline-flex items-center gap-1 group-hover:gap-2 transition-all duration-300">
          <span>View Details</span>
          <svg class="w-4 h-4 transition-transform duration-300 group-hover:translate-x-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </span>

        <!-- Icon Decoration -->
        <div class="w-10 h-10 rounded-full bg-red-50 flex items-center justify-center group-hover:bg-red-100 transition-colors duration-300">
          <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>
        </div>
      </div>
    </div>

    <!-- Shine Effect on Hover -->
    <div class="absolute inset-0 -translate-x-full group-hover:translate-x-full transition-transform duration-1000 bg-gradient-to-r from-transparent via-white/20 to-transparent pointer-events-none"></div>
  </NuxtLink>
</template>

<script setup>
defineProps({
  product: {
    type: Object,
    required: true
  }
})
</script>

<style scoped>
.line-clamp-2 {
  display: -webkit-box;
  line-clamp: 2;
  -webkit-line-clamp: 2;
  -webkit-box-orient: vertical;
  overflow: hidden;
}
</style>