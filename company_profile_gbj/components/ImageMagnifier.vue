<!-- components/ImageMagnifier.vue -->
<template>
  <div class="relative" @mousemove="moveLens" @mouseenter="showZoom = true" @mouseleave="showZoom = false" ref="container">
    <img :src="src" class="w-full rounded-xl shadow-lg object-contain" ref="image" />
    <div
      v-if="showZoom"
      class="absolute border border-gray-300 bg-white bg-opacity-30 pointer-events-none"
      :style="{ top: lensY + 'px', left: lensX + 'px', width: lensSize + 'px', height: lensSize + 'px' }"
    ></div>

    <div
      v-if="showZoom"
      class="absolute top-0 left-full ml-6 border rounded shadow-lg overflow-hidden"
      :style="{ width: zoomSize + 'px', height: zoomSize + 'px' }"
    >
      <img
        :src="src"
        :style="{
          transform: `translate(-${zoomX}px, -${zoomY}px) scale(${zoomLevel})`,
          width: imageWidth + 'px',
          height: imageHeight + 'px'
        }"
      />
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted } from 'vue'

defineProps({
  src: String
})

const container = ref(null)
const image = ref(null)
const showZoom = ref(false)

const lensSize = 100
const zoomSize = 200
const zoomLevel = 2

const lensX = ref(0)
const lensY = ref(0)
const zoomX = ref(0)
const zoomY = ref(0)
const imageWidth = ref(0)
const imageHeight = ref(0)

function moveLens(e) {
  const rect = container.value.getBoundingClientRect()
  const x = e.clientX - rect.left
  const y = e.clientY - rect.top

  lensX.value = Math.max(0, Math.min(x - lensSize / 2, rect.width - lensSize))
  lensY.value = Math.max(0, Math.min(y - lensSize / 2, rect.height - lensSize))

  zoomX.value = lensX.value * zoomLevel
  zoomY.value = lensY.value * zoomLevel
}

onMounted(() => {
  imageWidth.value = image.value.offsetWidth * zoomLevel
  imageHeight.value = image.value.offsetHeight * zoomLevel
})
</script>

<style scoped>
img {
  display: block;
}
</style>
