<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Article;

class ArticleSeeder extends Seeder
{
    public function run(): void
    {
        Article::create([
            'slug' => 'kebangkitan-keluarga-stark',
            'title' => 'Kebangkitan Keluarga Stark',
            'author' => 'Abe Kolin',
            'tanggal' => '2024-05-28',
            'body' => 'Keluarga Stark dari Winterfell adalah salah satu keluarga bangsawan besar di Westeros dan merupakan penguasa utama wilayah Utara. Dikenal karena kehormatan dan kesetiaannya, keluarga ini telah memerintah selama beberapa generasi. Dari keyakinan pada Dewa Lama hingga perang melawan keluarga Lannister, jejak mereka tertanam dalam salju Utara.'
        ]);

        Article::create([
            'slug' => 'daenerys-dan-masa-kejayaan-naga',
            'title' => 'Daenerys dan Masa Kejayaan Naga',
            'author' => 'Abe Kolin',
            'tanggal' => '2024-07-16',
            'body' => 'Daenerys Targaryen, anak terakhir Raja Aerys II, bangkit dari pengasingan dan memimpin pasukan serta naga dalam perjalanannya merebut Tahta Besi. Dari Meereen hingga Westeros, ia membebaskan para budak dan membawa api serta darah kepada musuh-musuhnya. Kepemimpinannya menuai pujian sekaligus ketakutan, mengubah wajah Westeros selamanya.'
        ]);

        Article::create([
            'slug' => 'rahasia-di-balik-tembok',
            'title' => 'Rahasia di Balik Tembok',
            'author' => 'Abe Kolin',
            'tanggal' => '2024-07-10',
            'body' => 'Di balik Tembok besar di Utara, terdapat ancaman yang telah lama dilupakan oleh para bangsawan Westeros. White Walkers, makhluk es yang mengerikan, bangkit bersama pasukan orang mati. Night\'s Watch menjadi garis pertahanan terakhir, namun mampukah mereka menghadapi kegelapan yang semakin mendekat?'
        ]);

        Article::create([
            'slug' => 'kebangkitan-jon-snow',
            'title' => 'Kebangkitan Jon Snow',
            'author' => 'Abe Kolin',
            'tanggal' => '2024-07-12',
            'body' => 'Jon Snow, Komandan Night\'s Watch, dikhianati oleh saudara-saudaranya sendiri. Namun, kematiannya bukanlah akhir. Berkat sihir Melisandre, Jon dibangkitkan dan memimpin pasukan Utara untuk merebut kembali Winterfell. Kebangkitannya menimbulkan harapan baru, sekaligus pertanyaan tentang asal-usul sejatinya.'
        ]);
    }
}
