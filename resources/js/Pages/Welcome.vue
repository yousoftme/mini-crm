<template>
    <Head title="Welcome" />

    <div class="relative flex items-top justify-center min-h-screen bg-gradient-to-br from-green-400 via-blue-400 to-purple-400 sm:items-center sm:pt-0">
        <div v-if="canLogin" class="font-semibold text-green-900 hidden fixed top-0 right-0 px-6 py-4 sm:block">
            <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="text-sm underline">
                Dashboard
            </Link>

            <template v-else>
                <Link :href="route('login')" class="text-sm underline">
                    Log in
                </Link>

                <Link v-if="canRegister" :href="route('register')" class="ml-4 text-sm underline">
                    Register
                </Link>
            </template>
        </div>

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

export default {
    components: {
      Head,
      Link,
      BreezeApplicationLogo,
      BreezeButton
    },
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
