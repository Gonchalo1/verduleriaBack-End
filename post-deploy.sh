#!/bin/bash

# Salir inmediatamente si un comando falla
set -e

echo "Ejecutando migraciones..."
php artisan migrate --force


echo "Tareas post-deploy completadas."
