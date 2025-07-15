<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'slug' => 'belajar-laravel-dari-nol',
            'title' => 'Belajar Laravel dari Nol',
            'author_id' => 1, // pastikan user id 1 ada
            'category_id' => 2, // misalnya kategori 2 adalah "Laravel"
            'body' => 'Laravel adalah framework PHP yang sangat populer karena sintaksnya yang elegan dan kemudahan penggunaannya. 
Framework ini mempermudah pengembangan aplikasi web dengan menyediakan berbagai fitur built-in seperti routing, middleware, 
authentication, hingga ORM (Eloquent). Dalam artikel ini, kita akan membahas langkah-langkah awal menggunakan Laravel, mulai dari 
instalasi menggunakan Composer, struktur folder, hingga membuat aplikasi CRUD sederhana. Dengan memahami konsep dasar Laravel, 
kamu bisa membangun aplikasi web modern secara efisien dan terstruktur.'
        ]);

        Article::create([
            'slug' => 'mengenal-algoritma-dan-struktur-data',
            'title' => 'Mengenal Algoritma dan Struktur Data',
            'author_id' => 2, // pastikan user id 2 ada
            'category_id' => 1, // misalnya kategori 1 adalah "Dasar Pemrograman"
            'body' => 'Algoritma dan struktur data merupakan fondasi penting dalam dunia pemrograman. Tanpa pemahaman yang baik terhadap keduanya, 
developer akan kesulitan menyusun solusi yang efisien dan optimal. Artikel ini mengulas berbagai jenis struktur data seperti array, linked list, stack, 
dan queue, serta algoritma dasar seperti pencarian (searching), pengurutan (sorting), dan rekursi. Kita juga akan melihat bagaimana pemilihan 
struktur data yang tepat dapat memengaruhi performa aplikasi secara keseluruhan. Materi ini sangat direkomendasikan bagi programmer pemula 
yang ingin meningkatkan logika dan efisiensi kodenya.'
        ]);

        Article::create([
            'slug' => 'tips-menjadi-fullstack-developer',
            'title' => 'Tips Menjadi Full-Stack Developer',
            'author_id' => 1,
            'category_id' => 3, // misal kategori 3 adalah "Karir Programmer"
            'body' => 'Full-stack developer adalah seseorang yang mampu mengembangkan baik sisi frontend maupun backend dari sebuah aplikasi. 
Menjadi full-stack developer membutuhkan pemahaman yang luas, mulai dari HTML, CSS, dan JavaScript di sisi frontend, hingga PHP, Node.js, 
atau Python di sisi backend. Dalam artikel ini, kita akan membahas roadmap yang dapat kamu ikuti untuk menjadi seorang full-stack developer, 
beserta tips memilih teknologi, membangun portofolio, dan mengatur waktu belajar. Dengan dedikasi dan latihan yang konsisten, kamu bisa 
menguasai kedua sisi pengembangan dan menjadi developer yang serba bisa.'
        ]);
        Article::create([
            'slug' => 'pemrograman-berorientasi-objek-dalam-php',
            'title' => 'Pemrograman Berorientasi Objek dalam PHP',
            'author_id' => 1,
            'category_id' => 1,
            'body' => 'Pemrograman Berorientasi Objek (OOP) adalah paradigma pemrograman yang memodelkan konsep dunia nyata ke dalam objek dan kelas. 
PHP mendukung OOP sejak versi 5, dan sekarang menjadi bagian penting dalam pengembangan aplikasi modern. Artikel ini akan membahas 
konsep OOP seperti encapsulation, inheritance, polymorphism, dan abstraction dalam konteks PHP. Contoh kode juga disediakan untuk 
memudahkan pemahaman, sehingga kamu bisa langsung menerapkannya dalam proyek Laravel atau proyek PHP murni lainnya.'
        ]);

        Article::create([
            'slug' => 'membuat-api-dengan-laravel-sanctum',
            'title' => 'Membuat API dengan Laravel Sanctum',
            'author_id' => 2,
            'category_id' => 2,
            'body' => 'Laravel Sanctum adalah paket resmi dari Laravel yang digunakan untuk otentikasi API sederhana menggunakan token. 
Sanctum cocok untuk aplikasi SPA dan mobile karena mudah diimplementasikan dan fleksibel. Dalam artikel ini, kamu akan belajar 
cara menginstal dan mengkonfigurasi Sanctum, membuat login endpoint, serta mengamankan route API dengan middleware. 
Dengan pendekatan ini, kamu bisa membangun REST API yang aman dan efisien.'
        ]);

        Article::create([
            'slug' => 'pengantar-database-mysql-untuk-pemula',
            'title' => 'Pengantar Database MySQL untuk Pemula',
            'author_id' => 1,
            'category_id' => 4, // misalnya kategori 4 adalah "Database"
            'body' => 'MySQL adalah salah satu sistem manajemen basis data relasional (RDBMS) paling populer di dunia. 
Dalam artikel ini, kamu akan belajar dasar-dasar database seperti membuat tabel, tipe data, relasi antar tabel, 
dan penggunaan query dasar seperti SELECT, INSERT, UPDATE, dan DELETE. Artikel ini sangat cocok bagi pemula yang ingin memahami 
cara menyimpan dan mengelola data menggunakan SQL.'
        ]);

        Article::create([
            'slug' => 'cara-kerja-git-dan-github',
            'title' => 'Cara Kerja Git dan GitHub',
            'author_id' => 2,
            'category_id' => 5, // misalnya kategori 5 adalah "Version Control"
            'body' => 'Git adalah sistem kontrol versi terdistribusi yang digunakan untuk melacak perubahan dalam kode program. 
GitHub adalah layanan hosting untuk repositori Git yang memungkinkan kolaborasi dan manajemen proyek. 
Artikel ini membahas dasar penggunaan Git seperti inisialisasi repositori, commit, branch, merge, serta cara push ke GitHub. 
Kamu juga akan belajar praktik terbaik dalam kolaborasi tim dan pull request.'
        ]);

        Article::create([
            'slug' => 'memahami-flexbox-dan-grid-di-css',
            'title' => 'Memahami Flexbox dan Grid di CSS',
            'author_id' => 1,
            'category_id' => 6, // misalnya kategori 6 adalah "Frontend"
            'body' => 'Flexbox dan CSS Grid adalah dua metode layout modern yang sangat membantu dalam mengatur tampilan halaman web. 
Artikel ini akan membahas perbedaan keduanya, kapan sebaiknya menggunakan flexbox dan kapan menggunakan grid. 
Contoh layout nyata juga akan ditampilkan agar kamu bisa memahami implementasinya secara praktis.'
        ]);

        Article::create([
            'slug' => 'belajar-javascript-asynchronous',
            'title' => 'Belajar JavaScript Asynchronous',
            'author_id' => 2,
            'category_id' => 6,
            'body' => 'Pemrograman asynchronous di JavaScript sangat penting terutama dalam pengembangan frontend modern. 
Artikel ini menjelaskan konsep asynchronous, callback, promise, dan async/await secara mendalam. 
Kamu akan belajar bagaimana cara menangani operasi asynchronous seperti HTTP request menggunakan `fetch`, 
serta bagaimana menangani error secara efisien.'
        ]);

        Article::create([
            'slug' => 'perbedaan-rest-dan-graphql',
            'title' => 'Perbedaan REST dan GraphQL',
            'author_id' => 1,
            'category_id' => 2,
            'body' => 'REST dan GraphQL adalah dua pendekatan populer dalam membangun API. 
REST menggunakan endpoint berbeda untuk setiap jenis data, sedangkan GraphQL memungkinkan pengambilan data spesifik 
dengan satu query. Artikel ini akan membandingkan kelebihan dan kekurangan keduanya, serta memberikan studi kasus 
penggunaan yang sesuai dalam proyek web dan mobile.'
        ]);

        Article::create([
            'slug' => 'membangun-website-dengan-bootstrap',
            'title' => 'Membangun Website dengan Bootstrap',
            'author_id' => 2,
            'category_id' => 6,
            'body' => 'Bootstrap adalah framework CSS paling populer yang mempermudah pembuatan website responsif dan modern. 
Artikel ini akan menunjukkan cara menginstal Bootstrap, struktur grid system-nya, penggunaan komponen seperti navbar, 
card, dan modal, serta tips untuk menyesuaikan tema agar lebih sesuai dengan kebutuhan proyek kamu.'
        ]);

        Article::create([
            'slug' => 'pengenalan-no-sql-dengan-mongodb',
            'title' => 'Pengenalan NoSQL dengan MongoDB',
            'author_id' => 1,
            'category_id' => 4,
            'body' => 'MongoDB adalah database NoSQL yang menyimpan data dalam format dokumen JSON. 
Cocok untuk aplikasi modern yang membutuhkan fleksibilitas data tinggi. Dalam artikel ini, kamu akan mengenal konsep koleksi, 
dokumen, dan operasi dasar seperti insert, find, update, dan delete. Artikel ini juga mencakup perbandingan antara MongoDB dan 
RDBMS seperti MySQL.'
        ]);

        Article::create([
            'slug' => 'menjadi-backend-developer-profesional',
            'title' => 'Menjadi Backend Developer Profesional',
            'author_id' => 2,
            'category_id' => 3,
            'body' => 'Backend developer bertanggung jawab dalam mengatur logika aplikasi, mengelola data, serta memastikan komunikasi antara frontend dan database berjalan lancar. 
Artikel ini membahas keterampilan utama yang harus dikuasai backend developer, seperti pemrograman server-side (PHP, Node.js, Python), desain database, API development, 
keamanan, dan deployment. Kamu juga akan mendapatkan saran tools dan sumber belajar yang relevan.'
        ]);
    }
}
