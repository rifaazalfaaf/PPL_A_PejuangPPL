<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create(); //import library faker

        $limit = 30; //batasan berapa banyak data
        
        for ($i = 0; $i < $limit; $i++) {
            DB::table('pengguna')->insert([ //mengisi datadi database
                'username' => $faker->username,
                'password' => $faker->password,
                'email' => $faker->unique()->email, //email unique sehingga tidak ada yang sama
                'nohp' => $faker->phoneNumber,
                'alamat' => $faker->address
            ]);
        } 
        for ($i = 0; $i < $limit; $i++){
            DB::table('toko')->insert([
                'nama_toko' => $faker->company,
                'alamat_toko' => $faker->address,
                'bio_toko' => $faker->catchPhrase,
                'rating_toko' => $faker->numberBetween(1,5),
                'no_wa_toko' => $faker->tollfreePhoneNumber
            ]);
        }
        for ($i = 0; $i < $limit; $i++){
            DB::table('produk')->insert([
                'nama_produk' => $faker->word,
                'deskripsi_produk' => $faker->text($maxNbChars = 200),
                'kategori_produk' => $faker->jobTitle,
                'url_foto_produk' => $faker->imageUrl($widht=640,$height=480),
                'harga_produk' => $faker->numberBetween(500,2000),
                'stok_produk' => $faker->numberBetween(50,200),
                'bobot_produk' => $faker->numberBetween(1,10),
                'rating_produk' => $faker->numberBetween(1,5)
            ]);
        }
        for ($i = 0; $i < $limit; $i++){
            DB::table('jasa')->insert([
                'nama_jasa' => $faker->word,
                'deskripsi_jasa' => $faker->text($maxNbChars = 200),
                'kategori_jasa' => $faker->jobTitle,
                'harga_jasa' => $faker->numberBetween(500,2000),
                'rating_jasa' => $faker->numberBetween(1,5)
            ]);
        } 
    }
}
