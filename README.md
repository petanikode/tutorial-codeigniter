# BeritaCoding v1.0.0

Aplikasi BeritaCoding adalah sebauh aplikasi portal berita sederhana untuk
memahami dasar Codeigniter 3. Repository ini merupakan source code untuk 
tutorial Codeigniter di Petani Kode.

# List Tutorial

1. [Pengenalan Codeigniter untuk Pemula](https://www.petanikode.com/codeigniter-pemula/) (Source Code: n/a)
2. [Persiapan dan Instalasi Codeigniter](https://www.petanikode.com/codeigniter-install/) (Source Code: [first commit](https://github.com/petanikode/tutorial-codeigniter/tree/60562e67a920d3ca5d358d9c98bfca8e84fa102d))
3. [Memahami Konsep MVC di Codeigniter](https://www.petanikode.com/codeigniter-mvc/) (Source Code: [04-routing](https://github.com/petanikode/tutorial-codeigniter/tree/04-routing))
4. [Memahami Controller](https://www.petanikode.com/codeigniter-controller/) (Source Code: [04-routing](https://github.com/petanikode/tutorial-codeigniter/tree/04-routing))
5. [Memahami View dan Menggunakan CSS](https://www.petanikode.com/codeigniter-view/) (Source Code: [05-view-dan-css](https://github.com/petanikode/tutorial-codeigniter/tree/05-view-dan-css))
6. [Menggunakan Model dan Database](https://www.petanikode.com/codeigniter-model/) (Source Code: [06-model](https://github.com/petanikode/tutorial-codeigniter/tree/06-model))
7. [Membuat Halaman Admin](https://www.petanikode.com/codeigniter-admin/) (Source Code: [07-admin](https://github.com/petanikode/tutorial-codeigniter/tree/07-admin))
8. [Validasi Data Form](https://www.petanikode.com/codeigniter-validation/) (Source Code: [08-validation](https://github.com/petanikode/tutorial-codeigniter/tree/08-validation))
9. [Membuat FItur Login](https://www.petanikode.com/codeigniter-login/) (Source Code: [09-login](https://github.com/petanikode/tutorial-codeigniter/tree/09-login))
10. [Membuat FItur Setting Profile](https://www.petanikode.com/codeigniter-setting/) (Source Code: [10-setting](https://github.com/petanikode/tutorial-codeigniter/tree/10-setting))
11. [Membuat Fitur Upload Avatar](https://www.petanikode.com/codeigniter-upload/) (Source Code: [11-upload](https://github.com/petanikode/tutorial-codeigniter/tree/11-upload))
12. [Menambahkan Editor Artikel](http://www.petanikode.com/codeigniter-quilljs/) (Source Code: [12-editor](https://github.com/petanikode/tutorial-codeigniter/tree/12-editor))

Tutorial lengkapnya dapat dibaca di:

- [:book: List Tutorial Codeigniter 3 untuk Pemula](https://www.petanikode.com/tutorial/codeigniter/)

# Menjalankan Proyek

Lakukan instalasi semua depedencies yang dibutuhkan dengan composer. Ketik
perintah berikut pada root direktori project.

```bash
composer install
```

Buat database di Phpmyadmin dan ubah konfigurasi database di `application/config/database.php`.

```php
$active_group = 'default';
$query_builder = TRUE;

$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'root', // <- sesuaikan dengan username mysql
	'password' => '', // <- isi dengan password user mysql
	'database' => 'beritacoding', //<- sesuaikan nama database dengan yang kamu buat
	'dbdriver' => 'mysqli',
	'dbprefix' => '',
	'pconnect' => FALSE,
	'db_debug' => (ENVIRONMENT !== 'production'),
	'cache_on' => FALSE,
	'cachedir' => '',
	'char_set' => 'utf8',
	'dbcollat' => 'utf8_general_ci',
	'swap_pre' => '',
	'encrypt' => FALSE,
	'compress' => FALSE,
	'stricton' => FALSE,
	'failover' => array(),
	'save_queries' => TRUE
);
```

Kemudian lakukan migrasi database dengan perintah:

```bash
composer migrate
```

Tidak perlu membuat tabel atau impor secara manual, karena semua sudah dilakukan
dengan migrasi database.
