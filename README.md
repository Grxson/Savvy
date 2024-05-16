
# Devstagram 🤖

Red social similar a Instagram hecha con Laravel 🔥


App hecha 100% con Laravel en su version 9




## Funciones

- Seguir a otros usuarios
- Crear publicaciones
- Dar like a posts
- Comentar posts
- Home con las ultimas publicaciones de los usuarios que sigo
- Autenticacion




## Herramientas

- Laravel v9.^

- Blade para los templates

- TailwindCSS

- Dropzone

- Livewire

- MySQL




## Ejecutar localmente

Para ejecutar localmente el proyecto: 

```bash
  composer install
```

```bash
  cp .env.example .env
```

```bash
  php artisan key:generate
```

```bash
  mysql -u root -p secret
```

```bash
  CREATE DATABASE tu_base_de_datos;
```

En el archivo .env, cambiar configuracion:
```bash
DB_HOST=localhost
DB_DATABASE=tu_base_de_datos
DB_USERNAME=root
DB_PASSWORD=
```

```bash
  php artisan migrate 
```

```bash
  npm install
```

```bash
  npm install
```

Para correr el proyecto:

```bash
  npm run dev
```

```bash
  php artisan serve
```
