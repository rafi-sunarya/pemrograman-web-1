<template>
  <footer class="bg-white border-t border-red-700 text-black px-6 py-10 lg:px-20 font-poppins">
    <div class="max-w-screen-2xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
      
      <!-- Company Info -->
      <div>
        <h2 class="text-2xl font-bold text-red-600 mb-4">PT Global Bestindo Jaya</h2>        
        <p class="mb-3">Follow us more in:</p>        
        <div class="flex space-x-4">
          <!-- Instagram Icon -->
          <a href="https://www.instagram.com/glatino_official/" target="_blank" rel="noopener noreferrer" class="p-2 border border-black rounded hover:bg-red-600 transition">
            <svg fill="#000000" viewBox="0 0 32 32" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg">
              <path d="M22.3,8.4c-0.8,0-1.4,0.6-1.4,1.4s0.6,1.4,1.4,1.4c0.8,0,1.4-0.6,1.4-1.4S23.1,8.4,22.3,8.4z"/>
              <path d="M16,10.2c-3.3,0-5.9,2.7-5.9,5.9s2.7,5.9,5.9,5.9s5.9-2.7,5.9-5.9S19.3,10.2,16,10.2z M16,19.9
                c-2.1,0-3.8-1.7-3.8-3.8c0-2.1,1.7-3.8,3.8-3.8c2.1,0,3.8,1.7,3.8,3.8C19.8,18.2,18.1,19.9,16,19.9z"/>
              <path d="M20.8,4h-9.5C7.2,4,4,7.2,4,11.2v9.5c0,4,3.2,7.2,7.2,7.2h9.5c4,0,7.2-3.2,7.2-7.2v-9.5C28,7.2,24.8,4,20.8,4z
                M25.7,20.8c0,2.7-2.2,5-5,5h-9.5c-2.7,0-5-2.2-5-5v-9.5c0-2.7,2.2-5,5-5h9.5c2.7,0,5,2.2,5,5V20.8z"/>
            </svg>
          </a>

          <!-- NEW LinkedIn Icon -->
          <a href="https://www.linkedin.com/company/pt-global-bestindo-jaya/" target="_blank" rel="noopener noreferrer" class="p-2 border border-black rounded hover:bg-red-600 transition">
            <svg fill="#000000" viewBox="0 0 256 256" class="w-6 h-6" xmlns="http://www.w3.org/2000/svg">
              <path d="M96,80a8,8,0,1,1-8-8A7.99993,7.99993,0,0,1,96,80Zm-8,28.001a4,4,0,0,0-4,4v64a4,4,0,1,0,8,0v-64A4,4,0,0,0,88,108.001Zm60,0a31.92463,31.92463,0,0,0-24,10.86767V112.001a4,4,0,0,0-8,0v64a4,4,0,1,0,8,0v-36a24,24,0,0,1,48,0v36a4,4,0,1,0,8,0v-36A32.03619,32.03619,0,0,0,148,108.001ZM224,44V212a12.01375,12.01375,0,0,1-12,12H44a12.01375,12.01375,0,0,1-12-12V44A12.01359,12.01359,0,0,1,44,32H212A12.01359,12.01359,0,0,1,224,44Zm-8,0a4.00458,4.00458,0,0,0-4-4H44a4.00458,4.00458,0,0,0-4,4V212a4.00458,4.00458,0,0,0,4,4H212a4.00458,4.00458,0,0,0,4-4Z"/>
            </svg>
          </a>
        </div>        
      </div>

      <!-- Useful Links -->
      <div>
        <h3 class="text-lg font-semibold text-red-600 mb-4">Useful Links</h3>
        <ul class="space-y-2">
          <li><NuxtLink to="/" class="hover:text-red-500">Home</NuxtLink></li>
          <li><NuxtLink to="/#about-gbj" class="hover:text-red-500">About us</NuxtLink></li>
          <!-- <li><NuxtLink to="/product" class="hover:text-red-500">Product</NuxtLink></li> -->
          <!-- <li><NuxtLink to="/team" class="hover:text-red-500">Team</NuxtLink></li> -->
          <li><NuxtLink to="/article-page" class="hover:text-red-500">Event</NuxtLink></li>
        </ul>
      </div>

      <!-- Products -->
      <div>
        <h3 class="text-lg font-semibold text-red-600 mb-4">VIsit Our Brand</h3>
        <div class="space-y-2">
          <a href="https://glatinopremium.com" target="_blank" rel="noopener noreferrer">
            <img
              src="/asset/footer/logo-lengkap.png"
              alt="Glatino Premium"
              class="h-auto w-[200px] mb-4"
            >
          </a>
        </div>
      </div>

      <!-- Contact Info -->
      <div>
        <h3 class="text-lg font-semibold text-red-600 mb-4">Contact Us</h3>
        <p>Jurumudi Batuceper Km.19 No.37 Kota Tangerang, Banten 15000 Indonesia</p>
        <p class="mt-2">
          <strong>Phone:</strong>
          <a
            href="https://wa.me/6288809873224?text=Halo%20saya%20ingin%20bertanya"
            target="_blank"
            class=" hover:underline"
          >
            +62 213 8764 362
          </a>
        </p>
        <p><strong>Email:</strong> office.globalbestindojaya@gmail.com</p>
      </div>
    </div>
  </footer>
<!-- Footer Bottom -->
  <div class="border-t border-gray-700 py-6 text-sm text-center bg-red-700 text-white font-poppins">
    <p>© Copyright <strong>PT Global Bestindo Jaya</strong> All Rights Reserved</p>
  </div>

</template>

<script>
export default {
  name: 'FooterComponent'
}
</script>

<style scoped>
/* Custom hover effects */
a:hover svg {
  transform: translateY(-2px);
  transition: transform 0.2s ease;
}

.font-poppins {
  font-family: 'Poppins', sans-serif;
}
</style>