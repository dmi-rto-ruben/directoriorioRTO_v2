<template>
    <div class="admin-app min-h-screen flex flex-col">
        <header class="bg-gray-800 text-white p-4">
            <h1 class="text-lg font-semibold">Panel de Administración</h1>
        </header>

        <main class="flex-1 p-4">
            <Link :href="route('dashboard')" class="text-blue-600 underline">
                Escritorio
            </Link>
            <slot />
        </main>

        <footer class="bg-gray-200 p-2 text-center text-sm">
            &copy; {{ new Date().getFullYear() }} - Admin
        </footer>
    </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
</script>

<style scoped>
.admin-app {
    font-family: ui-sans-serif, system-ui;
}
</style>
