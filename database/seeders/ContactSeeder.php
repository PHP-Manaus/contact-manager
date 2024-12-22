<?php

namespace Database\Seeders;

use App\Models\Contact;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // $contacts = [
        //     [
        //         'id' => 1,
        //         'name' => 'Fulano',
        //         'email' => 'fulano@example.com',
        //         'phone' => 92999999999,
        //         'city' => 'Manaus',
        //         'state' => 'Amazonas',
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Ciclano',
        //         'email' => 'ciclano@example.com',
        //         'phone' => 21999999998,
        //         'city' => 'Rio de Janeiro',
        //         'state' => 'Rio de Janeiro',
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Jeremias',
        //         'email' => 'jeremias@example.com',
        //         'phone' => 23999999998,
        //         'city' => 'São Paulo',
        //         'state' => 'São Paulo',
        //     ]
        // ];

        // Contact::insert($contacts);

        Contact::factory(10)->create();
    }
}
