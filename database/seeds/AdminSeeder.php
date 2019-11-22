<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        for ($jumlah =0; $jumlah < 50; $jumlah++) {
            DB::table('admin')->insert([
                'nama' => $faker->name,
                'email' => $faker->email,
                'telp' => $faker->phoneNumber,
                'image' => '0',
                'username' => $faker->username,
                'password' => $faker->randomNumber($nbDigits = NULL, $strict = false)
            ]);
        }
    }
}
