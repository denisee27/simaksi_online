<?php

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;


class GunungsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gunungs')->delete();
        \App\Gunung::create(array(
            'nama' => 'Sumbing',
            'poto_gunung' => 'backgroundSUMBING.jpg',
            'deskripsi'  => 'Gunung Sumbing adalah gunung api yang terdapat di Jawa Tengah, Indonesia. (Ketinggian puncak 3.371 mdpl), gunung Sumbing merupakan gunung tertinggi ketiga di Pulau Jawa setelah Gunung Semeru dan Gunung Slamet. Gunung ini secara administratif terletak di tiga wilayah kabupaten, yaitu Kabupaten Magelang; Kabupaten Temanggung; dan Kabupaten Wonosobo. Bersama dengan Gunung Sindoro, Gunung Sumbing membentuk bentang alam gunung kembar, seperti Gunung Merapi dan Gunung Merbabu, apabila dilihat dari arah Temanggung. Celah antara gunung ini dan Gunung Sindoro dilalui oleh jalan provinsi yang menghubungkan kota Temanggung dan kota Wonosobo. Jalan ini biasa dijuluki sebagai "Kledung Pass".'
        ));

        \App\Gunung::create(array(
            'nama' => 'Sindoro',
            'poto_gunung' => 'backgroundSINDORO.jpg',
            'deskripsi'  => 'Gunung Sindoro, biasa disebut Sindara, atau juga Sundoro (Ketinggian puncak 3.136 mdpl) (bahasa Jawa: ꦒꦸꦤꦸꦁ​ꦱꦶꦤ꧀ꦢꦫ, translit. Gunung Sindara) merupakan sebuah gunung volkano aktif yang terletak di Jawa Tengah, Indonesia, dengan Temanggung sebagai kota terdekat. Gunung Sindoro terletak berdampingan dengan Gunung Sumbing. Gunung sindara dapat terlihat jelas dari puncak sikunir dieng.'
        ));

        \App\Gunung::create(array(
            'nama' => 'Slamet',
            'poto_gunung' => 'backgroundSLAMET.jpg',
            'deskripsi'  => 'Gunung Slamet (3.432 meter dpl.)[1] adalah sebuah gunung berapi kerucut Tipe A yang terdapat di Jawa Tengah, Indonesia. Gunung Slamet terletak di antara 5 kabupaten, yaitu Kabupaten Brebes, Kabupaten Banyumas, Kabupaten Purbalingga, Kabupaten Tegal, dan Kabupaten Pemalang, Provinsi Jawa Tengah. Gunung Slamet merupakan gunung tertinggi di Jawa Tengah serta kedua tertinggi di Pulau Jawa setelah Gunung Semeru. Kawah IV merupakan kawah terakhir yang masih aktif sampai sekarang, dan terakhir aktif hingga pada level siaga medio-2009.'
        ));

        
    }
}
