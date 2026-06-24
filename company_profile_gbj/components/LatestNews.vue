<template>
  <section class="bg-white py-24 font-poppins">
    <div class="max-w-screen-2xl mx-auto px-6">
      <!-- Title -->
      <div class="flex items-center gap-4 mb-6">
        <h2 class="text-3xl md:text-4xl font-bold whitespace-nowrap">
          LATEST NEWS
        </h2>
        <div class="flex-1 border-t-2 border-black"></div>
      </div>

      <!-- Desktop layout -->
      <div class="hidden lg:grid lg:grid-cols-3 py-16 gap-8">
        <!-- Left big article -->
        <div class="lg:col-span-2">
          <NuxtLink
            to="/event/bakti-sosial-april-2026"
            class="block group"
          >
            <div class="overflow-hidden"> <!-- penting supaya gambar tidak keluar kotak -->
              <img
                src="/article/baksos-4.jpg"
                alt="article 1"
                class="w-full h-auto object-cover mb-4 transition-transform duration-300 ease-in-out rounded-xl group-hover:scale-105"
              />
            </div>
            <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
              CHARITY
            </span>
            <h3 class="text-xl font-semibold text-gray-900">
              Yayasan Pelita Jiwa, Tangerang
            </h3>
            <p class="text-gray-500 text-sm mt-1">
              25 April 2026 | By Heartifact
            </p>
          </NuxtLink>
        </div>


        <!-- Right list -->
        <div class="flex flex-col divide-y">
          <!-- article item -->        
          <NuxtLink
            to="/event/bakti-sosial-january-2026"
            class="flex gap-5 py-16 group transition"
          >
            <div class="flex-1">
              <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
                CHARITY
              </span>
              <h4
                class="text-md font-semibold text-gray-900 transition-colors duration-300"
              >
                Charity Program Kemah Beth Salom, Tangerang
              </h4>
              <p class="text-gray-500 text-sm mt-1">
                31 January 2026 | By Heartifact
              </p>
            </div>
            <div class="overflow-hidden rounded-xl flex-shrink-0 w-48 h-32">
              <img
                src="/article/baksos-3.jpg"
                alt="Bakti Sosial Kemah Beth Salom, Tangerang"
                class="w-auto h-32 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105"
              />
            </div>
          </NuxtLink>

          <NuxtLink
            to="/event/bakti-sosial-october-2025"
            class="flex gap-5 py-16 group transition"
          >
            <div class="flex-1">
              <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
                CHARITY
              </span>
              <h4
                class="text-md font-semibold text-gray-900 transition-colors duration-300"
              >
                Charity Program of the Bodhiarama Meditation Centre, Bogor
              </h4>
              <p class="text-gray-500 text-sm mt-1">
                26 October 2025 | By Heartifact
              </p>
            </div>
            <div class="overflow-hidden rounded-xl flex-shrink-0 w-48 h-32">
              <img
                src="/article/baksos-2.jpg"
                alt="Bakti Sosial Bodhiarama Meditation Centre"
                class="w-auto h-32 object-cover transition-transform duration-300 ease-in-out group-hover:scale-105"
              />
            </div>
          </NuxtLink>

          <div class="flex gap-5 py-16">
            <NuxtLink
              to="/event/bakti-sosial-july-2025"
              class="flex gap-5 group flex-1"
            >
              <div class="flex-1">
                <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
                  CHARITY
                </span>
                <h4 class="text-md font-semibold text-gray-900">
                  Charity Program of the Angku Budi Sati Bhakti Pertiwi Orphanage & Underprivileged Foundation
                </h4>
                <p class="text-gray-500 text-sm mt-1">
                  27 July 2025 | By Heartifact
                </p>
              </div>

              <img
                src="/article/baksos-1.jpg"
                alt="article baksos"
                class="w-auto h-32 rounded-xl object-cover flex-shrink-0 w-48 h-32 transition-transform duration-300 ease-in-out group-hover:scale-105"
              />
            </NuxtLink>
          </div>

          <!-- <div class="flex gap-5 py-16">
            <div class="flex-1">
              <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
                CHARITY [Comming Soon]
              </span>
              <h4 class="text-md font-semibold text-gray-900">
                You should blur the faces in your protest photos. Here’s how
              </h4>
              <p class="text-gray-500 text-sm mt-1">
                5 June 2020 | By Rob Verger
              </p>
            </div>
            <img
              src="/article/baksos-1.jpg"
              alt="article 4"
              class="w-auto h-32 rounded-xl object-cover flex-shrink-0 w-48 h-32"
            />
          </div> -->
        </div>
      </div>

      <!-- Tablet / Mobile layout -->
      <div class="lg:hidden space-y-12">
        <!-- Atas 1 berita besar -->
        <NuxtLink
          to="/event/bakti-sosial-july-2025"
          class="block group"
        >
          <div class="lg:col-span-2">
            <img
              src="/article/baksos-1.jpg"
              alt="article 1"
              class="w-full h-auto object-cover mb-4 group-hover:opacity-90 transition"
            />
            <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
              CHARITY
            </span>
            <h3 class="text-xl font-semibold text-gray-900 group-hover:text-red-500 transition">
              Bakti Sosial Yayasan Yatim Piatu & Dhuafa Angku Budi Sati Bhakti Pertiwi.
            </h3>
            <p class="text-gray-500 text-sm mt-1">
              27 July 2025 | By Heartifact
            </p>
          </div>
        </NuxtLink>

        <!-- Bawah 3 grid berita -->
        <div class="grid md:grid-cols-3 gap-6 relative">
          <!-- garis vertikal pembatas tengah -->
          <div class="absolute top-0 bottom-0 left-1/3 w-px bg-gray-300 hidden md:block"></div>
          <div class="absolute top-0 bottom-0 left-2/3 w-px bg-gray-300 hidden md:block"></div>

          <!-- Item 1 -->
          <NuxtLink
            to="/event/bakti-sosial-october-2025"
            class="block group"
          >
            <div class="flex flex-col">
              <img src="/article/baksos-2.jpg" alt="Bakti Sosial Bodhiarama Meditation Centre" class="w-full h-auto object-cover mb-2" />
              <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
                CHARITY
              </span>
              <h4 class="text-md font-semibold text-gray-900">
                Bakti Sosial Bodhiarama Meditation Centre, Bogor
              </h4>
              <p class="text-gray-500 text-sm mt-1">
                26 Oktober 2025 | By Heartifact
              </p>
            </div>
          </NuxtLink>

          <!-- Item 2 (tetap, tidak diubah karena hanya diminta memindahkan satu artikel) -->
          <NuxtLink
            to="/event/bakti-sosial-january-2026"
            class="block group"
          >  
            <div class="flex flex-col">
              <img src="/article/baksos-3.jpg" alt="" class="w-full h-auto object-cover mb-2" />
              <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
                CHARITY
              </span>
              <h4 class="text-md font-semibold text-gray-900">
                Bakti Sosial Kemah Beth Salom, Tangerang
              </h4>
              <p class="text-gray-500 text-sm mt-1">
                31 January 2026 | By Heartifact
              </p>
            </div>
          </NuxtLink>

          <!-- Item 3 -->
          <!-- <div class="flex flex-col">
            <img src="/article/baksos-1.jpg" alt="" class="w-full h-auto object-cover mb-2" />
            <span class="uppercase text-red-500 text-xs font-semibold block mb-1">
              COMMING SOON
            </span>
            <h4 class="text-md font-semibold text-gray-900">
              COMMING SOON
            </h4>
            <p class="text-gray-500 text-sm mt-1">
              5 June 2020 | By Rob Verger
            </p>
          </div> -->
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
// static
</script>

<style>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}
</style>