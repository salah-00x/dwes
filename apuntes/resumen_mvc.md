# 📌 Resumen del flujo MVC en el proyecto `mvc25`

## 🔹 Esquema del flujo
```
   [ Navegador / Usuario ]
             │
             ▼
        (index.php)   ← Punto de entrada
             │
             ▼
      Controlador (Controllers)
   ┌─────────────────────────────┐
   │ mainController.php           │
   │ movieController.php          │
   │ userController.php           │
   └─────────────────────────────┘
             │
             ▼
        Modelo (Models)
   ┌─────────────────────────────┐
   │ Movie.php   ← lógica de BD   │
   │ User.php    ← lógica de BD   │
   └─────────────────────────────┘
             │
             ▼
         Vista (Views)
   ┌─────────────────────────────┐
   │ loginView.phtml              │
   │ mainView.phtml               │
   │ showMovie.phtml              │
   └─────────────────────────────┘
```

---

## 🔹 Resumen paso a paso

1. **Usuario accede a la app**  
   El navegador solicita una URL, por ejemplo:  
   `http://localhost/mvc25/index.php?controller=movie&action=show&id=1`

2. **index.php (Punto de entrada)**  
   - Recibe la petición.  
   - Decide qué **controlador** cargar según los parámetros (`controller`, `action`).  
   - Inicializa la conexión con la BD (`db.php`).  

3. **Controlador (Controllers)**  
   - Gestiona la lógica de negocio.  
   - Ejemplos:  
     - `mainController.php` → lógica principal.  
     - `movieController.php` → gestiona películas.  
     - `userController.php` → gestiona usuarios.  

4. **Modelo (Models)**  
   - Los controladores llaman a los modelos para acceder a la base de datos.  
     - `Movie.php` → obtiene datos de películas.  
     - `User.php` → obtiene datos de usuarios.  

5. **Vista (Views)**  
   - El controlador pasa los datos a la vista.  
   - La vista muestra HTML con la información renderizada.  

6. **Respuesta al Usuario**  
   - El navegador recibe el HTML final y lo presenta al usuario.  

---

👉 **En resumen:**  
El flujo de ejecución es:  

**Usuario → index.php → Controlador → Modelo → Controlador → Vista → Usuario**
