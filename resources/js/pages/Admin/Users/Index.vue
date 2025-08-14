<template>
    <AdminLayout>

        <h1 class="text-xl font-semibold mb-4">Usuarios</h1>

        <div class="overflow-x-auto">
            <table class="min-w-full border">
                <thead>
                <tr>
                    <th class="p-2 border">ID</th>
                    <th class="p-2 border">Nombre</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Creado</th>
                    <th class="p-2 border">Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="u in users.data" :key="u.id">
                    <td class="p-2 border">{{ u.id }}</td>
                    <td class="p-2 border">{{ u.name }}</td>
                    <td class="p-2 border">{{ u.email }}</td>
                    <td class="p-2 border">{{ new Date(u.created_at).toLocaleString() }}</td>
                    <td class="p-2 border">
                        <!-- con Ziggy -->
                        <Link :href="route('admin.users.edit', u.id)" class="underline">Editar</Link>

                        <!-- sin Ziggy (alternativa):
                        <Link :href="`/admin/users/${u.id}/edit`" class="underline">Editar</Link>
                        -->
                    </td>
                </tr>
                </tbody>
            </table>
        </div>

        <nav class="flex gap-2 mt-4">
            <a v-for="l in users.links" :key="l.label"
               :href="l.url || '#'"
               :class="['px-3 py-1 border rounded', { 'font-bold underline': l.active, 'opacity-50 pointer-events-none': !l.url }]"
               v-html="l.label" />
        </nav>
    </AdminLayout>
</template>

<script setup lang="ts">
import AdminLayout from '@/Layouts/AdminLayout.vue'

import { Link } from '@inertiajs/vue3'

type LinkT = { url:string|null; label:string; active:boolean }

type User = { id:number; name:string; email:string; created_at:string }

type Pagination<T> = { data:T[]; links:LinkT[] }

const props = defineProps<{ users: Pagination<User> }>()
</script>

<style scoped>
table { border-collapse: collapse; }
</style>
