<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'first_name' => 'Nicolas',
                'last_name' => 'Labrie',
                'path_photo' => 'nicolas.png',
                'adresse' => 'Paris',
                'email' => 'n.labrie@gmail.com',
                'password' => '$2y$10$TMJ7ojnzGJ8lM8i8EtxIVOwkShx65gCw.swPFTsIWruHT9m9l6aK.',
                'api_token' => '8cmLNmGL22a7kQQ3kxrYqN3TMlpn58GHIi4aE7PP1jwsVDAUtjLgTyKTNK2z',
            ],
            [
                'first_name' => 'Édith',
                'last_name' => 'Brunault',
                'path_photo' => 'edith.png',
                'adresse' => 'Rennes',
                'email' => 'e.brunault@gmail.com',
                'password' => '$2y$10$HKjTH9Pk9rMXYET3i.3fIe9tRPXADadAISh0okuVjPI35A6rkhdKy',
                'api_token' => 'fKqz39MpMqwRwnm2s8VWJYyJnA8ajigCKTTICU4LLPmF7jBKhlatvOYmIzWc',
            ],
        ]);
    }
}
