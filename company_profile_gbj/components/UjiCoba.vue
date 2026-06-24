<template>
  <section class="relative mx-auto py-10 bg-white overflow-hidden font-poppins">
    <div class="relative bg-[url('/asset/index/our-journey-bg-1.png')] bg-cover bg-center bg-no-repeat">
      <div class="absolute inset-0 bg-gradient-to-b from-red-900/20 via-black/50 to-black/10"></div>

      <!-- pakai container yang sama -->
      <div class="relative max-w-screen-2xl mx-auto px-4 py-10 md:py-48">
        <div class="w-12 h-1 bg-red-600 mb-3"></div>

        <p class="text-md tracking-wide text-red-500 font-bold">
          Discover the history of GBJ
        </p>
        <h2 class="text-7xl font-bold text-white mt-2 py-12">
          Turning idea <br />
          into an invention
        </h2>
        <p class="mt-4 text-gray-100 text-2xl">
          Do you know how our first innovation was made?
        </p>
      </div>
    </div>

    <div class="flex overflow-x-auto gap-20 py-36 md:px-40 px-10">
      <!-- LEFT -->
      <div class="w-1/4 min-w-[380px] bg-white flex items-center">
        <div class="px-8">
          <!-- parent flex untuk teks + gambar -->
          <div class="flex items-end gap-4">
            <!-- dua baris teks -->
            <div class="flex flex-col ">
              <h1 class="uppercase tracking-[0.86em] text-gray-500 font-extrabold text-xs mb-1">
                OUR HISTORY OF
              </h1>
              <h2 class="text-4xl md:text-5xl font-extrabold text-gray-800 leading-tight">
                CREATING
              </h2>
            </div>

            <!-- gambar panah: posisinya align-bottom ke teks, tapi “nembus” ke atas -->
            <img
              src="/asset/index/element-our-story.png"
              alt="element"
              class="object-contain pt-5 h-[125px] -translate-y-2"
            />
          </div>

          <!-- INNOVATION tetap di bawah sendiri -->
          <h2 class="text-4xl md:text-5xl font-extrabold text-red-700 mt-2 pl-7">
            INNOVATION
          </h2>

          <p class="text-md text-gray-600 leading-relaxed mt-4 pl-7">
            The birth of PT Global Bestindo Jaya paved the way for national industry to enjoy high quality products, just like the dream of its founders to bring new standards to the country. This is the story of how this company is slowly changing the face of Indonesian industry, and helping thousands of business people meet their needs better.
          </p>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="flex-1">
        <div class="min-w-max flex flex-col">

          <!-- ROW 1: DESKRIPSI ATAS -->
          <div class="flex justify-between items-end">
            <!-- Awal Banner -->
            <div class="flex-shrink-0 w-[125px] pl-6 pr-6 pt-6"></div>
            <!-- 2018 kosong (bawah) -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6"></div>
            <!-- 2019 deskripsi atas -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">Network Begins to Expand</h3>
                <p class="text-gray-600 text-xs">
                  A year on, they have not remained silent. 2019 witnessed the company expanding its distribution network and collaborating with national retail partners. Products that were previously only available in a few spots are now starting to be easily found in various regions. Everything feels like the road is increasingly wide open.
                </p>
              </div>
            </div>
            <!-- 2020 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6"></div>
            <!-- 2021 deskripsi atas -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">Greeting the Archipelago</h3>
                <p class="text-gray-600 text-xs">
                  The story continues in 2021. The company is strengthening distribution throughout Indonesia. From big cities to remote areas, their products are now closer. As the story becomes more exciting, services become more evenly distributed throughout the country.
                </p>
              </div>
            </div>
            <!-- 2022 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6"></div>
            <!-- 2023 deskripsi atas -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6">
              <div class="bg-white p-4">                
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">Surabaya Warehouse Officially Operates</h3>
                <p class="text-gray-600 text-xs">
                  In 2023, the company opens a new warehouse in Surabaya. This facility is a logistics center to speed up deliveries to Eastern Indonesia. Like adding a new "heart", service is faster and customers in the east experience the same quality.
                </p>
                <img
                  src="/asset/index/gudang.png"
                  alt="Gudang Surabaya"
                  class="w-[200px] h-auto mt-3 object-cover"
                />
              </div>
            </div>
            <!-- 2024 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6"></div>
            <!-- 2025 deskripsi atas -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pt-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">Greeting the Digital World</h3>
                <p class="text-gray-600 text-xs">
                  Finally, 2025 becomes the beginning of digital transformation. PT Global Bestindo Jaya, with the launch of its official Instagram account— a new window to directly tell stories to consumers, build closeness, and expand reach online. A small step that becomes the beginning of a big journey in the digital world.
                </p>
              </div>
            </div>
            <!-- 2026 kosong untuk gambar kosong -->
            <div class="flex-shrink-0 w-[125px] pl-6 pr-6 pt-6"></div>
            <!-- tambahkan blok selanjutnya -->
          </div>

          <!-- ROW 2: STRIP + TAHUN -->
          <div class="relative">
            <!-- background panjang -->
            <div class="absolute inset-0 bg-cover bg-center"></div>
            <div class="absolute inset-0"></div> <!-- bg-red-900/10 -->

            <div class="relative z-10 flex">
              <!-- Awal Banner -->
              <div class="flex-shrink-0 w-[125px] h-[256px]">
                <img src="/asset/index/depan.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2018.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2019.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2020.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2021.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2022.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2023.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2024.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[400px] h-[256px]">
                <img src="/asset/index/2025.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <div class="flex-shrink-0 w-[125px] h-[256px]">
                <img src="/asset/index/belakang.png"
                    alt=""
                    class="w-full h-full object-cover" />
              </div>
              <!-- tambahkan tahun lainnya -->
            </div>
          </div>

          <!-- ROW 3: DESKRIPSI BAWAH -->
          <div class="flex justify-between items-start">
            <!-- Awal Banner -->
            <div class="flex-shrink-0 w-[125px] pl-6 pr-6 pb-6"></div>
            <!-- 2018 deskripsi bawah -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">A New Dream Begins</h3>
                <p class="text-gray-600 text-xs">
                  Everything started in 2018. PT Global Bestindo Jaya was born from the spirit of delivering high-quality products to the Indonesian people. In a simple workspace, a grand vision was formulated, and efforts were unified. Like the beginning of a long story, this year became the foundation for future steps.
                </p>
              </div>
            </div>
            <!-- 2019 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6"></div>
            <!-- 2020 deskripsi bawah -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">First Premium Product</h3>
                <p class="text-gray-600 text-xs">
                  This year became a pivotal point. PT Global Bestindo Jaya launched its first premium product— the result of hard work and extensive research. The market response was positive, and this product became a symbol that their initial dreams were on the right path.
                </p>
              </div>
            </div>
            <!-- 2021 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6"></div>
            <!-- 2022 deskripsi bawah -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">Premium Line Launch</h3>
                <p class="text-gray-600 text-xs">
                  This year marks a new beginning. PT Global Bestindo Jaya launches its premium product line— not just a new product, but proof of innovation and quality improvement. With this line, they meet the needs of consumers who want higher standards.
                </p>
              </div>
            </div>
            <!-- 2023 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6"></div>
            <!-- 2024 deskripsi bawah -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6">
              <div class="bg-white p-4">
                <h3 class="text-red-600 font-bold mb-2 text-xl uppercase">Technology Digital Enters the Story</h3>
                <p class="text-gray-600 text-xs">
                  Entering 2024, PT Global Bestindo Jaya begins integrating digital technology into its operational systems. Processes become faster and more efficient—from inventory, distribution, to customer service. This is a sign they are ready to face the new digital era.
                </p>
              </div>
            </div>
            <!-- 2025 kosong -->
            <div class="flex-shrink-0 w-[400px] pl-6 pr-6 pb-6"></div>
            <!-- 2026 kosong untuk gambar kosong -->
            <div class="flex-shrink-0 w-[125px] pl-6 pr-6 pb-6"></div>
            <!-- tambahkan blok selanjutnya -->
          </div>
        </div>
      </div>      
    </div>
    <!-- Bottom Nav -->
      <div class="flex justify-center mt-8">
        <div class="flex items-center gap-2 text-gray-600 text-sm bg-gray-100 rounded-full px-6 py-3">
          <span>Scroll horizontally to explore our journey</span>
          <div class="text-lg">→</div>
        </div>
      </div>
  </section>
</template>

<style>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}

/* scrollbar custom */
.overflow-x-auto::-webkit-scrollbar {
  height: 8px;
}

.overflow-x-auto::-webkit-scrollbar-track {
  background: #f1f1f1;
  border-radius: 4px;
}

.overflow-x-auto::-webkit-scrollbar-thumb {
  background: #dc2626;
  border-radius: 4px;
}

.overflow-x-auto::-webkit-scrollbar-thumb:hover {
  background: #b91c1c;
}
</style>
