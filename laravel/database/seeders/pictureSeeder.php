<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Picture;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class pictureSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pictures = [
            [
                'id' => 1,
                'item_id' => 'Sacha Striped Shirt',
                'location' => 'women-1-1.jpg',
            ],
            [
                'id' => 2,
                'item_id' => 'Sacha Striped Shirt',
                'location' => 'women-1-2.jpg',
            ],
            [
                'id' => 3,
                'item_id' => 'Sacha Striped Shirt',
                'location' => 'women-1-3.jpg',
            ],
            [
                'id' => 4,
                'item_id' => 'Sacha Striped Shirt',
                'location' => 'women-1-4.jpg',
            ],

            [
                'id' => 5,
                'item_id' => 'Keirra Midi Dress',
                'location' => 'women-2-1.jpg',
            ],
            [
                'id' => 6,
                'item_id' => 'Keirra Midi Dress',
                'location' => 'women-2-2.jpg',
            ],
            [
                'id' => 7,
                'item_id' => 'Keirra Midi Dress',
                'location' => 'women-2-3.jpg',
            ],
            [
                'id' => 8,
                'item_id' => 'Keirra Midi Dress',
                'location' => 'women-2-4.jpg',
            ],

            [
                'id' => 9,
                'item_id' => 'Cavanaugh Layered Dress',
                'location' => 'women-3-1.jpg',
            ],
            [
                'id' => 10,
                'item_id' => 'Cavanaugh Layered Dress',
                'location' => 'women-3-2.jpg',
            ],
            [
                'id' => 11,
                'item_id' => 'Cavanaugh Layered Dress',
                'location' => 'women-3-3.jpg',
            ],
            [
                'id' => 12,
                'item_id' => 'Cavanaugh Layered Dress',
                'location' => 'women-3-4.jpg',
            ],

            [
                'id' => 13,
                'item_id' => 'Classic Pullover Jumper',
                'location' => 'women-4-1.jpg',
            ],
            [
                'id' => 14,
                'item_id' => 'Classic Pullover Jumper',
                'location' => 'women-4-2.jpg',
            ],
            [
                'id' => 15,
                'item_id' => 'Classic Pullover Jumper',
                'location' => 'women-4-3.jpg',
            ],
            [
                'id' => 16,
                'item_id' => 'Classic Pullover Jumper',
                'location' => 'women-4-4.jpg',
            ],

            [
                'id' => 17,
                'item_id' => 'Chill Pullover',
                'location' => 'women-5-1.jpg',
            ],
            [
                'id' => 18,
                'item_id' => 'Chill Pullover',
                'location' => 'women-5-2.jpg',
            ],
            [
                'id' => 19,
                'item_id' => 'Chill Pullover',
                'location' => 'women-5-3.jpg',
            ],
            [
                'id' => 20,
                'item_id' => 'Chill Pullover',
                'location' => 'women-5-4.jpg',
            ],

            [
                'id' => 21,
                'item_id' => 'Amy Button Front Shirt',
                'location' => 'women-6-1.jpg',
            ],
            [
                'id' => 22,
                'item_id' => 'Amy Button Front Shirt',
                'location' => 'women-6-2.jpg',
            ],
            [
                'id' => 23,
                'item_id' => 'Amy Button Front Shirt',
                'location' => 'women-6-3.jpg',
            ],
            [
                'id' => 24,
                'item_id' => 'Amy Button Front Shirt',
                'location' => 'women-6-4.jpg',
            ],

            [
                'id' => 25,
                'item_id' => 'Bligh Car Coat',
                'location' => 'men-1-1.jpg',
            ],
            [
                'id' => 26,
                'item_id' => 'Bligh Car Coat',
                'location' => 'men-1-2.jpg',
            ],
            [
                'id' => 27,
                'item_id' => 'Bligh Car Coat',
                'location' => 'men-1-3.jpg',
            ],
            [
                'id' => 28,
                'item_id' => 'Bligh Car Coat',
                'location' => 'men-1-4.jpg',
            ],

            [
                'id' => 29,
                'item_id' => 'Phoenix Check Shirt',
                'location' => 'men-2-1.jpg',
            ],
            [
                'id' => 30,
                'item_id' => 'Phoenix Check Shirt',
                'location' => 'men-2-2.jpg',
            ],
            [
                'id' => 31,
                'item_id' => 'Phoenix Check Shirt',
                'location' => 'men-2-3.jpg',
            ],
            [
                'id' => 32,
                'item_id' => 'Phoenix Check Shirt',
                'location' => 'men-2-4.jpg',
            ],

            [
                'id' => 33,
                'item_id' => 'Smitty Short Sleeve Tee',
                'location' => 'men-3-1.jpg',
            ],
            [
                'id' => 34,
                'item_id' => 'Smitty Short Sleeve Tee',
                'location' => 'men-3-2.jpg',
            ],
            [
                'id' => 35,
                'item_id' => 'Smitty Short Sleeve Tee',
                'location' => 'men-3-3.jpg',
            ],
            [
                'id' => 36,
                'item_id' => 'Smitty Short Sleeve Tee',
                'location' => 'men-3-4.jpg',
            ],

            [
                'id' => 37,
                'item_id' => 'Dunstan Waistcoat',
                'location' => 'men-4-1.jpg',
            ],
            [
                'id' => 38,
                'item_id' => 'Dunstan Waistcoat',
                'location' => 'men-4-2.jpg',
            ],
            [
                'id' => 39,
                'item_id' => 'Dunstan Waistcoat',
                'location' => 'men-4-3.jpg',
            ],
            [
                'id' => 40,
                'item_id' => 'Dunstan Waistcoat',
                'location' => 'men-4-4.jpg',
            ],

            [
                'id' => 41,
                'item_id' => 'Jakob Micro Print Shirt',
                'location' => 'men-5-1.jpg',
            ],
            [
                'id' => 42,
                'item_id' => 'Jakob Micro Print Shirt',
                'location' => 'men-5-2.jpg',
            ],
            [
                'id' => 43,
                'item_id' => 'Jakob Micro Print Shirt',
                'location' => 'men-5-3.jpg',
            ],
            [
                'id' => 44,
                'item_id' => 'Jakob Micro Print Shirt',
                'location' => 'men-5-4.jpg',
            ],

            [
                'id' => 45,
                'item_id' => 'Maiden Shirt',
                'location' => 'men-6-1.jpg',
            ],
            [
                'id' => 46,
                'item_id' => 'Maiden Shirt',
                'location' => 'men-6-2.jpg',
            ],
            [
                'id' => 47,
                'item_id' => 'Maiden Shirt',
                'location' => 'men-6-3.jpg',
            ],
            [
                'id' => 48,
                'item_id' => 'Maiden Shirt',
                'location' => 'men-6-4.jpg',
            ],

        ];

        foreach($pictures as $picture){
            Picture::create($picture);
        }
    }
}