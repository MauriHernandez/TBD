<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use Faker\Factory;

class ProfileSeeder extends Seeder
{
    public function run()
    {
        $faker = Factory::create();
        $posts = [];

        for ($i=0; $i < 10000; $i++) {
            $created_at = $faker->dateTime();
            $updated_at = $faker->dateTimeBetween($created_at);
            $deleted_at = $faker->dateTimeBetween($updated_at);
            $purchase_price = $faker->randomFloat(2, 0.1, 4500);
            $unit_price = $purchase_price + $faker->randomFloat(2, 0, 500);

            $posts[] = [
                'category'      => $faker->numberBetween(1, 14),
                'autor'         => $faker->numberBetween(1, 20),
                'title'         => $faker->sentence(),
                'content'       => $faker->paragraph(),
                'status'        => $faker->numberBetween(0, 1),
                'created_at'    => $created_at->format('Y-m-d H:i:s'),
                'updated_at'    => $updated_at->format('Y-m-d H:i:s'),
                'deleted_at'    => $deleted_at->format('Y-m-d H:i:s')
            ];
        }

        $builder = $this->db->table('posts');
        $builder->insertBatch($posts);
    }
}