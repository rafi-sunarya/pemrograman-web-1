<template>
  <div class="relative min-h-screen font-poppins">
    <!-- Background image untuk semua device -->
    <div class="absolute inset-0 -z-10">
      <!-- Smartphone -->
      <img 
        src="@/assets/bg-image-smartphone.jpg" 
        alt="Background Mobile"
        class="block sm:hidden w-full h-full object-cover"
      />
      <!-- Tablet -->
      <img 
        src="@/assets/bg-image-tablet.jpg" 
        alt="Background Tablet"
        class="hidden sm:block lg:hidden w-full h-full object-cover"
      />
      <!-- Desktop -->
      <img 
        src="@/assets/bg-image-dekstop.jpg" 
        alt="Background Desktop"
        class="hidden lg:block w-full h-full object-cover"
      />
      <!-- Gradasi ke putih bawah -->
      <div class="absolute bottom-0 w-full h-screen bg-gradient-to-b from-transparent to-white"></div>
    </div>

    <div class="max-w-screen-xl mx-auto px-4 mt-16 py-8 sm:py-16">
      <!-- Judul -->
      <FadeInOnScroll direction="up">
        <h1 class="text-xl text-center text-black sm:text-2xl md:text-3xl font-semibold leading-relaxed mb-4">
          Contact Us
        </h1>
        <p class="text-sm text-center sm:text-base md:text-lg text-black/80 mb-6">
          We’d love to hear from you! Please fill out the form below, and we’ll get back to you shortly
        </p>        
      </FadeInOnScroll>


      <!-- Form -->
      <FadeInOnScroll direction="right">
        <!-- Form Section (Top) -->
        <div class="mx-auto bg-transparent bg-opacity-90 backdrop-blur-sm rounded-xl p-6 sm:p-8 shadow-2xl mb-10">
          <form @submit.prevent="submitForm">
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 sm:gap-6">
              <!-- First Name -->
              <div>
                <label class="block text-sm text-black font-semibold mb-2">First name</label>
                <input
                  v-model="namaDepan"
                  type="text"
                  placeholder="First name"
                  class="w-full px-4 py-3 rounded-lg border border-red-300 bg-white focus:ring-red-700 focus:border-red-700"
                />
              </div>

              <!-- Last Name -->
              <div>
                <label class="block text-sm text-black font-semibold mb-2">Last name</label>
                <input
                  v-model="namaBelakang"
                  type="text"
                  placeholder="Last name"
                  class="w-full px-4 py-3 rounded-lg border border-red-300 bg-white focus:ring-red-700 focus:border-red-700"
                />
              </div>

              <!-- Email -->
              <div class="sm:col-span-2">
                <label class="block text-sm text-black font-semibold mb-2">Email</label>
                <input
                  v-model="email"
                  type="email"
                  placeholder="Email"
                  class="w-full px-4 py-3 rounded-lg border border-red-300 bg-white focus:ring-red-700 focus:border-red-700"
                />
              </div>

              <!-- Subject -->
              <div class="sm:col-span-2">
                <label class="block text-sm text-black font-semibold mb-2">Subject</label>
                <input
                  v-model="subject"
                  type="text"
                  placeholder="Subject"
                  class="w-full px-4 py-3 rounded-lg border border-red-300 bg-white focus:ring-red-700 focus:border-red-700"
                />
              </div>

              <!-- Phone -->
              <div class="sm:col-span-2">
                <label class="block text-sm text-black font-semibold mb-2">Phone</label>
                <div class="flex">
                  <span class="inline-flex items-center px-4 bg-red-50 border border-r-0 border-red-300 text-red-700 rounded-l-lg">
                    +62
                  </span>
                  <input
                    v-model="phone"
                    type="tel"
                    placeholder="821-0123-4567"
                    class="w-full px-4 py-3 rounded-r-lg border border-red-300 bg-white focus:ring-red-700 focus:border-red-700"
                  />
                </div>
              </div>

              <!-- Message -->
              <div class="sm:col-span-2">
                <label class="block text-sm text-black font-semibold mb-2">Message</label>
                <textarea
                  v-model="message"
                  rows="4"
                  placeholder="Write the message you want to send to us!"
                  class="w-full px-4 py-3 rounded-lg border border-red-300 bg-white focus:ring-red-700 focus:border-red-700"
                ></textarea>
              </div>
            </div>

            <!-- Buttons -->
            <div class="flex justify-end mt-6 sm:mt-8 space-x-4">
              <button
                type="button"
                @click="resetForm"
                class="px-6 py-2.5 bg-white border border-red-700 text-red-700 rounded-lg hover:bg-red-50 transition duration-300"
              >
                Batalkan
              </button>
              <button
                type="submit"
                class="px-6 py-2.5 bg-red-700 text-white rounded-lg hover:bg-black transition duration-300"
              >
                Kirim
              </button>
            </div>
          </form>
        </div>
      </FadeInOnScroll>
      

      <!-- Informasi Kontak -->
      <div class="container mx-auto py-10 px-4 text-black">
        <div class="flex flex-col lg:flex-row justify-between gap-8">
          <!-- Kiri -->
          <div class="space-y-8">
            <!-- Alamat -->
            <div class="flex items-start space-x-4">
              <div class="bg-red-600 p-3 rounded">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path d="M12 21C15.5 17.4 19 14.1764 19 10.2C19 6.22355 15.866 3 12 3C8.13401 3 5 6.22355 5 10.2C5 14.1764 8.5 17.4 12 21Z"/>
                  <path d="M12 13C13.6569 13 15 11.6569 15 10C15 8.34315 13.6569 7 12 7C10.3431 7 9 8.34315 9 10C9 11.6569 10.3431 13 12 13Z"/>
                </svg>
              </div>
              <div>
                <h4 class="text-lg font-semibold text-red-600">Alamat</h4>
                <p>Jurumudi Batuceper Km.19 No.37 Kota Tangerang, Banten 15000 Indonesia</p>
              </div>
            </div>
            <!-- Telepon -->
            <div class="flex items-start space-x-4">
              <div class="bg-red-600 p-3 rounded">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" stroke-width="2"
                  viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3 5a2 2 0 012-2h1.28a1 1 0 01.95.684l1.52 4.548a1 1 0 01-.211.992l-1.216 1.216a11.042 11.042 0 005.292 5.292l1.216-1.216a1 1 0 01.992-.211l4.548 1.52a1 1 0 01.684.95V19a2 2 0 01-2 2h-1C9.163 21 3 14.837 3 7V5z"/>
                </svg>
              </div>
              <div>
                <h4 class="text-lg font-semibold text-red-600">Call Us</h4>
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
              </div>
            </div>
            <!-- Email -->
            <div class="flex items-start space-x-4">
              <div class="bg-red-600 p-3 rounded">
                <svg
                  class="w-6 h-6 text-white"
                  viewBox="0 0 24 24"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M4 7.00005L10.2 11.65C11.2667 12.45 12.7333 12.45 13.8 11.65L20 7"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                  />
                  <rect
                    x="3"
                    y="5"
                    width="18"
                    height="14"
                    rx="2"
                    stroke="currentColor"
                    stroke-width="2"
                    stroke-linecap="round"
                  />
                </svg>
              </div>
              <div>
                <h4 class="text-lg font-semibold text-red-600">Email</h4>
                <p>office.globalbestindojaya@gmail.com</p>
              </div>
            </div>
          </div>

          <!-- Jam Operasional -->
          <div class="flex items-start space-x-4">
            <div class="bg-red-600 p-3 rounded">
              <svg class="w-6 h-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
              </svg>
            </div>
            <div>
              <h4 class="text-lg font-semibold text-red-600">Jam Operasional</h4>
              <p>Senin - Jumat : 08.00 AM – 17.00 PM</p>
              <p>Sabtu : 08.00 AM – 14.00 PM</p>
              <p>Minggu/Tanggal Merah : Libur</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <FooterComponent />
</template>

<script lang="ts" setup>
import { ref } from 'vue'
import emailjs from '@emailjs/browser';

const namaDepan = ref('')
const namaBelakang = ref('')
const email = ref('')
const subject = ref('')
const phone = ref('')
const message = ref('')

const submitForm = async () => {
  // Validasi form
  if (!namaDepan.value || !email.value || !message.value) {
    alert('Nama Depan, Email, dan Pesan wajib diisi!')
    return
  }

  try {
    // Credentials EmailJS
    // const serviceID = 'service_eanyvvs' (email willyamlouise4@gmail.com) service_e1lek5j 
    // const templateID = 'template_9fvsc9u' template_ukexk3u
    // const userID = 'X-LFzr-3ZKRiOwoZd' LKCShlSrviQRS_Xcd
    // Email: GBJ  
    const serviceID = 'service_ivndw2p'
    const templateID = 'template_tjif0rm'
    const userID = 'HfdOMy6E19DkT9Xjm' // User ID (Public Key)

    // Dapatkan tanggal dan waktu sekarang
    const now = new Date()
    const date = now.toLocaleString('id-ID', {
      weekday: 'long',
      year: 'numeric',
      month: 'long',
      day: 'numeric',
      hour: '2-digit',
      minute: '2-digit'
    })
    const year = now.getFullYear().toString()

    // Kirim email
    await emailjs.send(serviceID, templateID, {
      from_name: `${namaDepan.value} ${namaBelakang.value}`,
      from_email: email.value,
      subject: subject.value,
      phone: phone.value,
      message: message.value,
      date: date,   // variabel baru untuk tanggal lengkap
      year: year    // variabel baru untuk tahun saja
    }, userID)

    // Tampilkan alert sukses
    alert('Pesan berhasil dikirim! Terima kasih.')

    // Reset form
    namaDepan.value = ''
    namaBelakang.value = ''
    email.value = ''
    subject.value = ''
    phone.value = ''
    message.value = ''

  } catch (error) {
    console.error('Error:', error)
    
    // Tampilkan error spesifik jika ada
    if (error instanceof Error) {
      alert(`Terjadi kesalahan: ${error.message}`)
    } else {
      alert('Maaf, terjadi kesalahan. Silakan coba lagi.')
    }
  }
}

const resetForm = () => {
  namaDepan.value = ''
  namaBelakang.value = ''
  email.value = ''
  subject.value = ''
  phone.value = ''
  message.value = ''
}

import FooterComponent from '../components/footer.vue'
import bgImage from '@/assets/contact/bg-image.png'
</script>

<style scoped>
.font-poppins {
  font-family: 'Poppins', sans-serif;
}
/* Responsive adjustments */
@media (max-width: 1024px) {
  .lg\:border-r {
    border-right: none;
    padding-right: 0;
    margin-bottom: 2rem;
    padding-bottom: 2rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.2);
  }
  
  .lg\:pl-8 {
    padding-left: 0;
  }
}

@media (max-width: 640px) {
  .container {
    padding-top: 1rem;
    padding-bottom: 1rem;
  }
  
  .max-w-4xl {
    padding: 1.5rem;
  }
}

/* Smooth transitions */
button {
  transition: all 0.3s ease;
}

/* Better input focus */
input:focus, textarea:focus {
  box-shadow: 0 0 0 3px rgba(14, 116, 144, 0.2);
  outline: none;
}

/* Custom divider */
.divider {
  height: 1px;
  background: rgba(255, 255, 255, 0.2);
  margin: 2rem 0;
}
</style>