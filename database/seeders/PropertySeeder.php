<?php
// database/seeders/PropertySeeder.php
namespace Database\Seeders;

use App\Models\Property;
use Illuminate\Database\Seeder;

class PropertySeeder extends Seeder
{
    public function run()
    {
        $properties = [
            [
                'name' => 'Villa moderne avec piscine',
                'price' => 450000.00,
                'location' => 'Bordeaux Centre',
            ],
            [
                'name' => 'Appartement T3 lumineux',
                'price' => 280000.00,
                'location' => 'Quartier Saint-Michel',
            ],
            [
                'name' => 'Maison familiale avec jardin',
                'price' => 320000.00,
                'location' => 'Mérignac',
            ],
            [
                'name' => 'Studio rénové',
                'price' => 150000.00,
                'location' => 'Talence',
            ],
            [
                'name' => 'Loft contemporain',
                'price' => 380000.00,
                'location' => 'Chartrons',
            ],
            [
                'name' => 'Maison de ville avec terrasse',
                'price' => 295000.00,
                'location' => 'Saint-Pierre',
            ],
            [
                'name' => 'Duplex avec vue panoramique',
                'price' => 420000.00,
                'location' => 'Quai des Marques',
            ],
            [
                'name' => 'Appartement bourgeois',
                'price' => 520000.00,
                'location' => 'Triangle d\'Or',
            ],
            [
                'name' => 'Maison contemporaine',
                'price' => 580000.00,
                'location' => 'Le Bouscat',
            ],
            [
                'name' => 'Studio étudiant',
                'price' => 120000.00,
                'location' => 'Victoire',
            ],
        ];

        foreach ($properties as $property) {
            Property::create($property);
        }
    }
}