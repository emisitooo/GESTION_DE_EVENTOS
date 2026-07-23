# 🎉 Sistema de Gestión de Eventos

## 📖 Descripción

El Sistema de Gestión de Eventos es una aplicación web desarrollada en **PHP**, **MySQL**, **HTML**, **CSS** y **JavaScript** que permite administrar eventos y asistentes mediante un sistema de inicio de sesión.

Este proyecto fue desarrollado como parte de un proyecto escolar.

---

## 🚀 Tecnologías utilizadas

- PHP
- MySQL
- HTML5
- CSS3
- JavaScript
- XAMPP
- phpMyAdmin
- Git
- GitHub

---

## 📂 Estructura del proyecto

```
GESTION_DE_EVENTOS/
│
├── imagenes/
├── actualizar_evento.php
├── borrar_evento.php
├── cerrar.html
├── cerrar.php
├── conexion.php
├── confirmar_eliminacion.html
├── consultar_evento.php
├── crear_evento.php
├── dashboard.html
├── dashboard.php
├── editar_evento.html
├── eliminar_evento.php
├── formulario_evento.html
├── guardar_evento.php
├── guardar_usuario.php
├── inicio_sesion.html
├── modificar_evento.php
├── registrarse.html
├── tabla_eventos.html
├── tabla_eventos.php
├── validar.php
├── estilos.css
├── database/
│   └── gestion_eventos.sql
└── README.txt
```

---

## ✨ Funcionalidades

- Registro de usuarios.
- Inicio de sesión.
- Crear eventos.
- Consultar eventos.
- Modificar eventos.
- Eliminar eventos.
- Cierre de sesión.
- Panel principal con información de eventos y usuario activo.

---

## 💻 Requisitos

Antes de ejecutar el proyecto es necesario tener instalado:

- XAMPP
- PHP 8 o superior
- MySQL
- phpMyAdmin
- Visual Studio Code
- Git

---

## ⚙️ Instalación

### 1. Clonar el repositorio

```bash
git clone https://github.com/TU_USUARIO/GESTION_DE_EVENTOS.git
```

### 2. Copiar el proyecto

Coloca la carpeta dentro de:

```
C:\xampp\htdocs\
```

### 3. Iniciar XAMPP

Inicia los servicios:

- Apache
- MySQL

---

### 4. Importar la base de datos

1. Abrir phpMyAdmin.
2. Crear una base de datos llamada:

```
gestion_eventos
```

3. Seleccionar la base de datos.
4. Ir a **Importar**.
5. Seleccionar el archivo:

```
database/gestion_eventos.sql
```

6. Hacer clic en **Continuar**.

---

### 5. Configurar la conexión

Verifica que el archivo `conexion.php` tenga la siguiente configuración:

```php
<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$bd = "gestion_eventos";

$conexion = new mysqli($servidor, $usuario, $password, $bd);

if($conexion->connect_error){
    die("Error de conexión: ".$conexion->connect_error);
}
?>
```

---

## ▶️ Ejecutar el proyecto

Abrir el navegador y escribir:

```
http://localhost/GESTION_DE_EVENTOS/
```

---

## 👤 Autor

**Emiliano Portillo Cervantes**

---

## 📄 Licencia

Este proyecto fue desarrollado con fines educativos.