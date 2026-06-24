<template>
  <div
    ref="el"
    :class="[
      'transition-all duration-1000 ease-out',
      isVisible ? 'opacity-100 translate-none' : ['opacity-0', directionClass]
    ]"
  >
    <slot />
  </div>
</template>

<script setup lang="ts">
import { ref, computed, onMounted, onUnmounted } from 'vue'

const props = defineProps<{
  direction?: 'up' | 'down' | 'left' | 'right'
}>()

const el = ref<HTMLElement | null>(null)
const isVisible = ref(false)

const directionClass = computed(() => {
  switch (props.direction) {
    case 'up':
      return 'translate-y-8'
    case 'down':
      return '-translate-y-8'
    case 'left':
      return 'translate-x-8'
    case 'right':
      return '-translate-x-8'
    default:
      return 'translate-y-8' // default dari bawah
  }
})

let observer: IntersectionObserver

onMounted(() => {
  observer = new IntersectionObserver((entries) => {
    const entry = entries[0]
    if (entry && entry.isIntersecting) isVisible.value = true
  }, { threshold: 0.1 })

  if (el.value) observer.observe(el.value)
})

onUnmounted(() => {
  if (el.value) observer.unobserve(el.value)
})
</script>
