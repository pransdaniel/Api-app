API-APP (Laravel 12)
Task :
Buatlah aplikasi API menggunakan bahasa berbasis OOP(contoh: java, c#), dengan requirement sebagai berikut:

Protocol: HTTP
Data: JSON
Method: GET
Response, sesuai pada file "viewData.json"
Logic aplikasi mengambil data dari database(contoh: mysql, sql server, postgre, atau lainnya)
Struktur database dan table bisa dibuat sesuai respon yang akan ditampilkan pada API
delivered :
API dibuat menggunakan laravel 11 (php) => masih berbasis OOP
sudah menggunakan Protocol: Http (sudah bawaan dari laravel), Route::get(...) mendefenisikan HTTP GET route
sudah menggunakan Method: Get untuk endpoint /product
Response sudah sesuai dengan file "viewData.json"
Logic aplikasi mengambil data dari database sudah ada, tinggal ambil data seperti 'data' => Transaction::all(), (mengambil semua data dari tabel Transaction)
untuk connectivity ke database sudah bawaan dari laravel, tinggal setting database di .env
Struktur database dan table bisa dilihat di folder migration (table product dan table status)
note :
untuk tabel tabel seperti session, user, dll dihiraukan saja, karna bawaan dari framework
Environment Setup
make sure sudah install composer dan php
make sure punya mysql, jika tidak bisa diganti configurasinya di .env
create database api_app
Database Setup
koneksi database bisa diatur di file .env : DB_CONNECTION=mysql DB_HOST=127.0.0.1 DB_PORT=3306 DB_DATABASE=api_app DB_USERNAME=root DB_PASSWORD=

run :
composer install
php artisan migrate:fresh --seed
jalanakan web servernya : php artisan serve (bisa juga dari xampp/laragon)
Test api diendpoint :
http://localhost:8000/api/view
