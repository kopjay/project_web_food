<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipe') -> insert([
            [
                'description' => "Haluskan semua bahan yang",
            ],
            [
                'description' => "Panaskan minyak di wajan, lalu masukkan bawang merah, bawang putih. Tumis bersama bumbu halus hingga harum",
            ],
            [
                'description' => "Tambahkan taoge dan tomat. Masak hingga layu, lalu tambahkan garam, gula pasir, serta cuka.",
            ],
            [
                'description' => "Masukkan mie, kemudian taburi dengan daun bawang. Aduk hingga tercampur rata lalu angkat dan matikan api.",
            ],
            [
                'description' => "Sajikan dengan acar dan taburi bawang goreng.",
            ],
            [
                'description' => "Haluskan cabai merah teropong, cabai merah keriting, bawang merah, bawang putih, jahe, ketumbar, jinten, kemiri, garam, kaldu bubuk, lada, dan minyak menggunakan blender. Sisihkan.",
            ],
            [
                'description' => "Masak bumbu yang sudah dihaluskan, masukkan potongan daging sapi, tambahkan daun jeruk, kapulaga cengkih, lengkuas, daun salam, kayu manis, parutan pala, dan kelapa sangrai. Aduk-aduk. Tambahkan santan cair. Masak sebentar.",
            ],
            [
                'description' => "Masukkan santan kental, masak hingga kering. Angkat dan sajikan."
            ],
            [
                'description' => "Kocok telur bebek, masukkan udang kering, bumbu yang dihaluskan, bawang goreng, dan kelapa sangrai. Aduk rata."
            ],
            [
                'description' => "Panaskan wajan dadar antilengket. Tuang setengah bagian ketan. Ratakan di permukaan wajan. Masak hingga setengah matang."
            ],
            [
                'description' => "Tuang setengah bagian telur kocok berbumbu. Ratakan di seluruh permukaan sambil ditekan-tekan. Setelah bagian bawahnya matang, dapat dibalik agar matang merata. Angkat."
            ],
            [
                'description' => "Jumlah dan jenis sayuran untuk karedok bisa disesuaikan dengan selera. Sayuran perlu direndam dalam air dingin matang agar kotoran larut. Karena sayuran dimakan segar/mentah."
            ],
            [
                'description' => "Kekentalan bumbu dan tingkat kepedasannya bisa disesuaikan dengan selera."
            ],
            [
                'description' => "Panaskan minyak goreng dalam wajan, tumis bawang putih dan bawang merah hingga harum. Masukkan udang cincang, aduk hingga berubah warna. Tambahkan daging ayam, ebi, rebung, dan bumbu halus, masak hingga rebung layu."
            ],
            [
                'description' => "Masukkan daun bawang cung, aduk rata, angkat, sisihkan hingga dingin. Bagi isi menjadi 12 bagian."
            ],
            [
                'description' => "Tumpuk 2 lembar kulit lumpia, taruh 3-4 sdm isi di salah satu ujung kulit. Lipat sisi kiri dan kanan kulit ke tengah, lalu gulung hingga padat. Olesi bagian pinggirnya dengan putih telur, rekatkan. Lakukan hal yang sama untuk sisa bahan."
            ],
            [
                'description' => "Panaskan minyak goreng yang banyak dalam wajan di atas api besar. Masukkan lumpia, goreng hingga kekuningan dan matang, angkat, tiriskan. Sajikan lumpia dengan saus dan pelengkap."
            ],
            [
                'description' => "Lapisi dasar panci dengan daun jati, masukan nangka muda, dan bumbu yang sudah disiapkan. Tuang santan cair dan air kelapa. Tutup kembali dengan daun jati dan tutup panci, masak sampai kuah sedikit menyusut. Gunakan api kecil."
            ],
            [
                'description' => "Jika kuah sudah sedikit menyusut, tambahkan gula merah, garam, dan santan kental. Tutup kembali dengan daun jati dan tutup panci, lanjutkan dengan api kecil. Cicipi dan terakhir tambahkan telur rebus. Tutup panci kembali hingga matang dan benar-benar kering."
            ],
            [
                'description' => "Presto cingur sapi selama 2 jam, potong-potong lalu goreng sebentar (tidak perlu kering). Kupas nanas, cuci bersih, kupas bengkuang dan timun cucu bersih. Lalu potong sesuai selera."
            ],
            [
                'description' => "Uleg semua bumbu, lalu tambahkan air sedikit demi sedikit, kekentalan sesuaikan selera, lalu koreksi rasa. Sajikan rujak cingur bersama lontong, kangkung, tauge, tahu goreng, tempe goreng, nanas, bengkuang, timun dan siram dengan bumbu, tambahkan kerupuk."
            ],
            [
                'description' => "Haluskan bawang putih, kemiri, ketumbar, jintan, terasi, dan minyak dengan blender lalu masukkan kunyit, jahe, lengkuas, serai, cabai merah, bawang merah, dan cabai rawit, haluskan kembali. Panaskan wajan, tumis bumbu hingga wangi kemudian masukkan pala, cengkih, daun jeruk, dan daun salam, masak hingga matang kemudian sisihkan 2-3 sdm bumbu"
            ],
            [
                'description' => "Masukkan ayam, air, garam, merica, kaldu bubuk, dan gula merah, masak hingga empuk selama  90-120 menit. Untuk kacang panjang bejek, panaskan wajan, masukkan sisa bumbu halus lalu masukkan kacang panjang dan air. Tambahkan garam, merica, dan kaldu bubuk masak hingga air sedikit menyusut lalu masukkan santan, aduk rata"
            ],
            [
                'description' => "Sajikan makanan tersebut selagi hangat"
            ]

        ]);
    }
}
