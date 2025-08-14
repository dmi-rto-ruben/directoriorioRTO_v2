<script setup lang="ts">
import AdminLayout from '@/layouts/AdminLayout.vue'
import { useForm } from '@inertiajs/vue3'
import { Head } from '@inertiajs/vue3'

type User = { id:number; name:string; email:string }
const props = defineProps<{ user: User }>()

const form = useForm({
    name: props.user.name,
    email: props.user.email,
    password: '',
    password_confirmation: '',
})

const submit = () => {
    form.patch(`/admin/users/${props.user.id}`)
}
</script>

<template>
    <AdminLayout>
        <Head title="Edit" />
        <h1 class="text-xl font-semibold mb-4">Editar usuario</h1>

        <form @submit.prevent="submit" class="grid gap-3 max-w-xl">
            <label class="grid gap-1">
                <span>Nombre</span>
                <input v-model="form.name" type="text" class="border p-2 rounded" />
                <span v-if="form.errors.name" class="text-red-600 text-sm">{{ form.errors.name }}</span>
            </label>

            <label class="grid gap-1">
                <span>Email</span>
                <input v-model="form.email" type="email" class="border p-2 rounded" />
                <span v-if="form.errors.email" class="text-red-600 text-sm">{{ form.errors.email }}</span>
            </label>

            <label class="grid gap-1">
                <span>Contraseña (opcional)</span>
                <input v-model="form.password" type="password" class="border p-2 rounded" autocomplete="new-password" />
                <span v-if="form.errors.password" class="text-red-600 text-sm">{{ form.errors.password }}</span>
            </label>

            <label class="grid gap-1">
                <span>Confirmar contraseña</span>
                <input v-model="form.password_confirmation" type="password" class="border p-2 rounded" autocomplete="new-password" />
            </label>

            <div class="flex gap-2 mt-2">
                <button :disabled="form.processing" class="px-4 py-2 rounded border">
                    Guardar
                </button>
                <a href="/admin/users" class="px-4 py-2 rounded border">Cancelar</a>
            </div>
        </form>
    </AdminLayout>
</template>
