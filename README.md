## Cara Menjalankan Projek Di Local Server

### Buat file env
Kamu tinggal men-copy file .env.example dengan nama .env

### Buat database baru di DBMS mu
Namanya terserah

### Masukkan nama database ke file .env
```
DB_DATABASE=NAMA_DATABASE
```

### Install dulu keperluan laravel
```
composer install
```

### Generate app key-nya
```
php artisan key:generate
```

### Migrate database
```
php artisan migrate:fresh
```

### Jalankan
```
php artisan serve
```
