<template>
    <div>
        <nav class="bg-gradient-to-br from-purple-700 via-blue-700 to-green-700 drop-shadow-2xl">
            <div class="max-w-7xl mx-auto px-2">
                <div class="relative flex items-center flex-row-reverse h-16">
                    <div class="flex-1 flex items-center flex-row-reverse sm:items-stretch">
                        <div class="sm:ml-6">
                            <div v-if="canLogin" class="flex space-x-4">
                                <a v-if="$page.props.auth.user" :href="route('dashboard')" class="animate__animated animate__zoomIn inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-green-900 focus:shadow-outline-gray transition ease-in-out duration-150 bg-gradient-to-br from-purple-400 via-blue-400 to-green-400 shadow-lg">Dashboard</a>
                                <template v-else>
                                    <a :href="route('login')" class="animate__animated animate__zoomIn inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-green-900 focus:shadow-outline-gray transition ease-in-out duration-150 bg-gradient-to-br from-purple-400 via-blue-400 to-green-400 shadow-lg">Login</a>
                                    <a v-if="canRegister" :href="route('register')" class="animate__animated animate__zoomIn inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-gray-900 focus:outline-none focus:border-green-900 focus:shadow-outline-gray transition ease-in-out duration-150 bg-gradient-to-br from-purple-400 via-blue-400 to-green-400 shadow-lg">Register</a>
                                </template>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</template>

<script>
export default {
    props: {
        canLogin: Boolean,
        canRegister: Boolean,
    },
}
</script>
