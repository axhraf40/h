<?php
// database/seeders/OwnerSeeder.php
namespace Database\Seeders;

use App\Models\Owner;
use Illuminate\Database\Seeder;

class OwnerSeeder extends Seeder
{
    public function run()
    {
        $owners = [
            [
                'name' => 'Jean Dupont',
                'email' => 'jean.dupont@email.com',
            ],
            [
                'name' => 'Marie Martin',
                'email' => 'marie.martin@email.com',
            ],
            [
                'name' => 'Pierre Bernard',
                'email' => 'pierre.bernard@email.com',
            ],
            [
                'name' => 'Sophie Petit',
                'email' => 'sophie.petit@email.com',
            ],
            [
                'name' => 'Lucas Dubois',
                'email' => 'lucas.dubois@email.com',
            ],
        ];

        foreach ($owners as $owner) {
            Owner::create($owner);
        }
    }
}
