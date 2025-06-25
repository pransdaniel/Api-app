# API-APP (Laravel 12)

Aplikasi ini adalah contoh implementasi API berbasis OOP menggunakan Laravel 12, dengan fokus pada metode HTTP `GET` dan response berbentuk JSON.

---

## Task

Buatlah aplikasi API menggunakan bahasa berbasis OOP (contoh: Java, C#, PHP), dengan requirement sebagai berikut:

- **Protocol**: HTTP  
- **Data Format**: JSON  
- **Method**: GET  
- **Response**: Sesuai dengan file `viewData.json`  
- **Logic**: Mengambil data dari database (contoh: MySQL, SQL Server, PostgreSQL, atau lainnya)  
- **Struktur database dan tabel**: Dibuat sesuai dengan struktur response API

---

## Delivered

- ✅ API dibuat menggunakan **Laravel 12** (PHP berbasis OOP)
- ✅ Menggunakan **Protocol HTTP** (bawaan Laravel), dengan `Route::get(...)` untuk mendefinisikan HTTP GET route
- ✅ Menggunakan **Method GET** untuk endpoint `/view`
- ✅ Response telah sesuai dengan file `viewData.json`
- ✅ Logic pengambilan data dari database sudah tersedia, contoh:
  ```php
  'data' => Transaction::all()

  
---

  ## Environtment
  
- sudah install composer dan php
- punya mysql, jika tidak bisa diganti configurasinya di .env
- create database api_app

---

  ## Run
  
- composer install
- php artisan migrate
- php artisan db:seed
- php artisan serve

---

  ## Test Endpoint API

- http://localhost:8000/api/view
