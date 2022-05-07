<template>
    <Head title="Welcome" />
    <Navbar :canLogin="canLogin" :canRegister="canRegister"></Navbar>
    <div class="relative flex items-top justify-center min-h-screen bg-gradient-to-br from-green-400 via-blue-400 to-purple-400 py-8 sm:py-0  sm:items-center sm:pt-0">
        <div class="text-center max-w-6xl mx-auto sm:px-6 lg:px-8">
            <Link href="/">
                <BreezeApplicationLogo class="w-auto h-20 animate__animated animate__zoomIn" />
            </Link>
            <small>Mini-CRM based on Laravel v8 | Vue.js v3 | Tailwindcss v2</small>
            <br />
            <b class="text-sm">by Yousaf Arshad (Expert Laravel & Vue.js developer)</b>
            <div class="p-3">
                <a href="https://www.upwork.com/freelancers/laraveldevelopers" class="animate__animated animate__fadeInDown inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-green-900 focus:shadow-outline-gray transition ease-in-out duration-150 bg-gradient-to-br from-purple-700 via-blue-700 to-green-700 shadow-lg">
                    Request for Demo
                </a>
            </div>
        </div>
    </div>
</template>


<script>
import { Head, Link } from '@inertiajs/inertia-vue3';
import BreezeApplicationLogo from '@/Components/ApplicationLogo.vue'
import BreezeButton from '@/Components/Button.vue'
import Navbar from '@/Components/Navbar.vue'

export default {
    components: {
      Head,
      Link,
      BreezeApplicationLogo,
      BreezeButton,
      Navbar
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
