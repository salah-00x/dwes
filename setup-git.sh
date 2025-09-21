#!/bin/bash

# Pedir nombre de usuario de Git
read -p "Introduce tu nombre de usuario de Git: " GIT_USER
git config --global user.name "$GIT_USER"

# Pedir email de Git
read -p "Introduce tu email de Git: " GIT_EMAIL
git config --global user.email "$GIT_EMAIL"

# Inicializar Git si aún no está inicializado
if [ ! -d ".git" ]; then
    git init
    echo "Repositorio Git inicializado."
else
    echo "Ya existe un repositorio Git."
fi

# Pedir mensaje del commit
read -p "Introduce el mensaje del commit: " COMMIT_MSG

# Añadir todos los archivos al staging
git add .

# Hacer commit con el mensaje introducido
git commit -m "$COMMIT_MSG"

# Pedir URL del repositorio remoto
read -p "Introduce la URL del repositorio remoto (origin): " REMOTE_URL

# Añadir el remoto o actualizar si ya existe
if git remote | grep origin > /dev/null; then
    git remote set-url origin "$REMOTE_URL"
    echo "URL del remoto 'origin' actualizada."
else
    git remote add origin "$REMOTE_URL"
    echo "Remoto 'origin' agregado."
fi

# Cambiar a la rama main y subir los cambios
git branch -M main
git push -u origin main

echo "¡Repositorio subido a GitHub exitosamente!"
