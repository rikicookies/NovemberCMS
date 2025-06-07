# CMS Modular Personalizado estilo OctoberCMS

Este CMS ha sido construido desde cero en PHP + MySQL, inspirado en la arquitectura de OctoberCMS y con elementos funcionales de PHP-Nuke.

---

## ✅ Características Actuales (Parte 1 - 10)

### 🧱 Núcleo del CMS
- Enrutamiento MVC básico
- Sistema modular: carga automática de módulos (plugins)
- Soporte para temas seleccionables
- Sistema de traducción multiidioma (`lang/` con función `__()`)

### 🔐 Sistema de Usuarios
- Registro con confirmación vía token
- Login de administrador y panel protegido
- Roles: `admin`, `editor`, `viewer`
- Edición y eliminación de usuarios desde el panel
- Página de perfil para cada usuario

### 📝 Sistema de Contenido
- CRUD de entradas tipo Blog
- Módulo de Noticias con:
  - Comentarios por usuarios registrados
  - Likes y Dislikes
  - Guardar noticias como favoritas
  - Botones para compartir (simulados)

---

## 📂 Estructura del Proyecto

```
cms/
├── config/            # Configuraciones globales y tema activo
├── core/              # Núcleo: enrutador, DB, helpers, auth, loader
├── database/          # Archivos SQL (migraciones)
├── lang/              # Archivos de idiomas (es.php, en.php...)
├── modules/           # Módulos: admin, blog, news, auth, etc.
├── public/            # Punto de entrada (index.php)
├── themes/            # Plantillas front (default, dark...)
└── .htaccess          # Redirecciones para Apache
```

---

## 🚀 Instalación

1. Configura un servidor con PHP 8+, MySQL y Apache.
2. Importa los archivos `.sql` desde la carpeta `database/`.
3. Ajusta tu conexión en `core/database.php`.
4. Asegúrate de que tu servidor apunta a `/public` como raíz del sitio.
5. Abre `http://localhost/` para comenzar.

---

## 👤 Usuario por defecto

```
Usuario: admin
Contraseña: admin
```

> La contraseña está en texto plano o hash básico. Cámbiala antes de usar en producción.

---

## 📚 Módulos Incluidos

- **Pages:** Página de inicio
- **Admin:** Panel y usuarios
- **Blog:** CRUD de publicaciones
- **News:** Noticias con comentarios, likes, favoritos, compartir
- **Auth:** Registro y confirmación
- **Profile:** Vista de perfil de usuario
- **Themes:** Selector de temas
- **Lang:** Traductor con idiomas disponibles

---

## 🛠️ Próximos pasos

- Editor visual de contenido
- Buscador interno
- Sistema de notificaciones
- Foros estilo PHP-Nuke
- Módulo de encuestas y banners
- Sistema de plugins externos e instalador automático

---

## 📌 Créditos

- Inspirado en: [OctoberCMS](https://octobercms.com) y [PHP-Nuke](https://phpnuke.org)
- Desarrollado como proyecto educativo personal

---

© 2025 - TuCMS Modular
