# Directorio Ayuntamiento ver. 2
## 📌 Laravel 12 + Inertia.js + Vue 3 (TypeScript)
### — Panel Administrativo y Frontend Público

Este proyecto es una aplicación web desarrollada en **Laravel 12** con integración de **Inertia.js** y **Vue 3** (con soporte para TypeScript). 

Incluye un **panel administrativo** y un **frontend público** con compilación separada mediante Vite, para mantener hojas de estilo y scripts independientes.

## 🚀 Características principales

- **Laravel 12** como framework backend.
- **Vue 3 + Inertia.js** para el frontend reactivo.
- **TypeScript** para mayor seguridad y mantenibilidad en el código.
- **Separación de layouts y assets**:
  - Layout y bundle exclusivo para el **frontend público**.
  - Layout y bundle exclusivo para el **panel de administración**.
  - Layout independiente para **pantallas de autenticación**.
- **Jetstream** (opcional) para autenticación y gestión de foto de perfil.
- **Gestión de usuarios**:
  - Listado con paginación.
  - Edición de datos.
  - Subida de foto de perfil.
- Sistema escalable para añadir más módulos al panel administrativo.

---

## 📂 Estructura del proyecto

```
.
├── app
│   ├── Http
│   │   ├── Controllers
│   │   │   └── Admin
│   │   │       └── UserController.php
│   │   ├── Middleware
│   │   │   └── UseAdminInertiaRoot.php
│   │   └── Requests
│   │       └── Admin
│   │           └── UpdateUserRequest.php
│   └── Models
│       └── User.php
├── bootstrap
│   └── app.php
├── config
│   ├── inertia.php
│   ├── jetstream.php            # (si usas Jetstream)
│   └── vite.php
├── public
│   └── storage -> ../storage/app/public
├── resources
│   ├── css
│   │   ├── admin.css
│   │   ├── auth.css
│   │   └── public.css
│   ├── ts
│   │   ├── admin.ts             # entrada Vite para admin
│   │   ├── app.ts               # entrada Vite para público
│   │   ├── auth.ts              # entrada Vite para auth/login
│   │   ├── bootstrap.ts
│   │   ├── Layouts
│   │   │   ├── AdminLayout.vue
│   │   │   └── PublicLayout.vue
│   │   └── Pages
│   │       ├── Admin
│   │       │   ├── Dashboard.vue
│   │       │   └── Users
│   │       │       ├── Index.vue
│   │       │       └── Edit.vue
│   │       └── Public
│   │           └── Home.vue
│   └── views
│       ├── auth
│       │   └── login.blade.php
│       └── layouts
│           ├── admin.blade.php
│           └── public.blade.php
├── routes
│   └── web.php
├── storage
│   └── app
│       └── public
│           └── profile-photos   # subidas (si usas foto de perfil)
├── .env.example
├── artisan
├── composer.json
├── package.json
├── tsconfig.json
├── vite.config.ts
└── README.md
```

(localhost:8000)['localhost:8000']
