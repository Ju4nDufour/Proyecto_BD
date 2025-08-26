# Proyecto_BD
“Proyecto académico Registro de alumnos”
[README.md](https://github.com/user-attachments/files/21998226/README.md)
# 📚 Proyecto Registro Académico

Aplicación web académica desarrollada como parte de la materia **Práctica Profesionalizante / Administración y Gestión de Bases de Datos**.  
El proyecto consiste en la migración de un front-end simple (HTML/CSS/JS) hacia un entorno profesional con **Node.js/Express (API simulada)** y la futura integración a **CodeIgniter 4 + MySQL** siguiendo arquitectura **MVC**.

---

## 🚀 Funcionalidades principales
- **Gestión de Categorías:** crear, buscar, eliminar y listar categorías.
- **Gestión de Carreras:** CRUD básico con validaciones y asociación a categorías.
- **Gestión de Estudiantes:** registrar, buscar, eliminar y filtrar estudiantes por carrera.
- **Interfaz web amigable:** páginas en HTML con Bootstrap 5 + estilos propios (`styles.css`).
- **Backend simulado:** API REST con Express.js que persiste datos en archivos JSON.

---

## 🛠️ Tecnologías utilizadas
- **Frontend:** HTML5, CSS3, Bootstrap 5, JavaScript (fetch API).
- **Backend simulado:** Node.js + Express.js.
- **Persistencia:** Archivos JSON locales (`students.json`, `careers.json`, `categories.json`).
- **Futuro alcance:** Migración a CodeIgniter 4 (PHP) + MySQL con migraciones y seeders.

---

## 📂 Estructura del repositorio
```
├── /docs                  # Documentación (plan, guías, glosario)
├── /css/styles.css        # Estilos visuales
├── /js/app.js             # Lógica de frontend (consumo API)
├── index.html             # Página principal
├── students.html          # Gestión de estudiantes
├── careers.html           # Gestión de carreras
├── categories.html        # Gestión de categorías
├── index.js               # Servidor Express (API REST)
├── students.json          # Datos persistentes de estudiantes
├── careers.json           # Datos persistentes de carreras
├── categories.json        # Datos persistentes de categorías
├── package.json           # Dependencias Node.js
└── README.md              # Este archivo
```

---

## ⚙️ Instalación y ejecución

### 1. Clonar repositorio
```bash
git clone https://github.com/usuario/proyecto-registro-academico.git
cd proyecto-registro-academico
```

### 2. Instalar dependencias
```bash
npm install
```

### 3. Ejecutar servidor API
```bash
node index.js
```
El backend quedará disponible en:  
👉 `http://localhost:5001/api`

### 4. Abrir el frontend
Abrir en navegador los archivos HTML (`index.html`, `students.html`, etc.) desde la carpeta raíz.

---

## 🔑 Endpoints principales
- **Categorías:**  
  - `POST /api/categories` – Crear  
  - `GET /api/categories` – Listar  
  - `GET /api/categories/:id` – Buscar por ID  
  - `DELETE /api/categories/:id` – Eliminar  

- **Carreras:**  
  - `POST /api/careers` – Crear  
  - `GET /api/careers` – Listar  
  - `GET /api/careers/:id` – Buscar por ID  
  - `DELETE /api/careers/:id` – Eliminar (solo si no tiene estudiantes asociados)  

- **Estudiantes:**  
  - `POST /api/students` – Crear  
  - `GET /api/students/:id` – Buscar por ID  
  - `GET /api/students?career=XYZ` – Listar por carrera  
  - `DELETE /api/students/:id` – Eliminar  

---

## 👥 Equipo
Trabajo grupal (4 integrantes) — sin roles fijos.  
Cada estudiante participó en **frontend, backend, base de datos y documentación**, bajo metodología **ágil (Scrum/Kanban)** con versionado en **GitHub**.

---

## 📑 Documentación de apoyo
- 📄 *Plan de Práctica Profesionalizante CI4 + MySQL*  
- 📄 *Glosario de Migración CI4*  
- 📄 *Guía de Migración a CodeIgniter 4*  
- 📄 *Guía de Proyecto Real (Scrum/Kanban/Git)*  

---

## ✅ Estado del proyecto
- [x] Frontend con API simulada (Node/Express + JSON)  
- [x] CRUD básico de estudiantes, carreras y categorías  
- [ ] Migración completa a CodeIgniter 4 + MySQL  
- [ ] Pruebas unitarias y demo final  

---

✍️ *Este repositorio forma parte de la entrega académica para la materia “Administración y Gestión de Bases de Datos / Práctica Profesionalizante: Aproximación al campo laboral”.*
