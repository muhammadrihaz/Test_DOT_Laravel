<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Cara Instalasi

Website ini adalah CRUD (Create,Read,Update and Delete) Sederhana, agar dapat menjalankan program ini dengan benar harap ikuti langkah berikut :

-   Lakukan Clone Project [https://github.com/muhammadrihaz/Test_DOT_Laravel.git](https://github.com/muhammadrihaz/Test_DOT_Laravel.git).
-   Masuk kedalam folder lalu lakukan .git bash ketikan <code>composer install</code>
-   Lalu copy folder <code>.env.example</code> dan ubah menjadi <code>.env</code>
-   ketikan didalam terminal <code>php artisan key:generate</code>
-   buatlah database baru bernama <code>crud_dot</code>
-   lakukan konfigurasi database di <code>.env</code>
-   lalu ketikan dialam terminal <code>php artisan migrate</code>
-   selanjutnya ketikan <code>php artisan db:seed</code>
-   ketikan <code>php artisan serve</code>
-   langkah selanjutnya ketikan di url browser [http://127.0.0.1:8000/](http://127.0.0.1:8000/)
-   Masukan Email : <code>admin@gmail.com</code> dan Password :<code>admin123</code>

jika ingin menggunankan dummy data silangkan import <code>crud_dot.sql</code> yang ada di dalam folder database .Selesai.
