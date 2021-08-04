<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class itemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'id' => 'Sacha Striped Shirt',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Barcelona-born M.N.G dresses the modern woman with quality, chic designs that combine the best of this season’s trends with timeless appeal. From trench coats to tailored blazers, relaxed knits, leather handbags, covetable shoes and glamorous maxi gowns, M.N.G delivers a range of designs to suit every style profile and dress code.',
                'price' => 400000,
            ],
            [
                'id' => 'Keirra Midi Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Reach your new season fashion goals with the latest from Atmos&Here. From must-have dresses to classic off-duty tees and denim you’ll never want to take off, look to the brand for on-trend pieces in the latest shapes, colours and prints to match any dress code.',
                'price' => 930000,
            ],
            [
                'id' => 'Cavanaugh Layered Dress',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'The Cavanaugh Layered Dress by Willa embodies contemporary femininity, transporting you from the office to the bar with sophistication and poise. With tailoring accents and details, this chic piece remains a timeless and adaptable wardrobe staple.',
                'price' => 748000,
            ],
            [
                'id' => 'Classic Pullover Jumper',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'The Classic Pullover Jumper by Calli is the perfect staple piece to add to your wardrobe this season. Designed with a luxe fabric and form-flattering silhouette, this piece is sure to take you seamlessly from work, to weekend and anywhere in-between.',
                'price' => 240000,
            ],
            [
                'id' => 'Chill Pullover',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Daytime dressing just got easier with Callis Chill Pullover. Cut in a ribbed fabrication and embellished with tortoise shell buttons, style yours with our popular Luna Relaxed Jeans.',
                'price' => 320000,
            ],
            [
                'id' => 'Amy Button Front Shirt',
                'category_id' => 'women',
                'rating' => rand(2, 5),
                'description' => 'Reach your new season fashion goals with the latest from Atmos&Here. From must-have dresses to classic off-duty tees and denim you’ll never want to take off, look to the brand for on-trend pieces in the latest shapes, colours and prints to match any dress code.',
                'price' => 375000,
            ],
        
            // men
            [
                'id' => 'Bligh Car Coat',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Based in Sydney, menswear label Staple Superior delivers wardrobe essentials made with superior grade cotton fabrics, which offer a superior handfeel, strength and lasting quality. With a focus on key styles and shapes that every man needs in his wardrobe, you’ll be ready for anything life may throw at you.',
                'price' => 559000,
            ],
            [
                'id' => 'Phoenix Check Shirt',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Based in Sydney, menswear label Staple Superior delivers wardrobe essentials made with superior grade cotton fabrics, which offer a superior handfeel, strength and lasting quality. With a focus on key styles and shapes that every man needs in his wardrobe, you’ll be ready for anything life may throw at you.',
                'price' => 599000,
            ],
            [
                'id' => 'Smitty Short Sleeve Tee',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Launched in 1973, surf icon Billabong has cemented its status as a leader in apparel and accessories that cater to an action-packed lifestyle. From go-anywhere logo tees and tanks to walkshorts, swimwear and breezy jersey basics, the brand offers a wide range of casual clothing bound to win a place in any weekend wardrobe.',
                'price' => 369000,
            ],
            [
                'id' => 'Dunstan Waistcoat',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'The Tarocash Dunstan Waistcoat is the perfect addition to your wardrobe. Tarocash Waistcoats are for the everyday modern man. Tarocash offers accessible and affordable mens fashion that ensures you look sharp for any occasion.',
                'price' => 820000,
            ],
            [
                'id' => 'Jakob Micro Print Shirt',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Capturing the bold, masculine charisma of the modern Australian man, yd. is an aspirational lifestyle brand with premium appeal and an unwavering focus on accessible tailoring, classic staples and on-the-pulse casualwear that asserts a refined and confident attitude.',
                'price' => 450000,
            ],
            [
                'id' => 'Maiden Shirt',
                'category_id' => 'men',
                'rating' => rand(2, 5),
                'description' => 'Capturing the bold, masculine charisma of the modern Australian man, yd. is an aspirational lifestyle brand with premium appeal and an unwavering focus on accessible tailoring, classic staples and on-the-pulse casualwear that asserts a refined and confident attitude.',
                'price' => 445000,
            ],
        
        ];

        foreach($items as $item){
            Item::create($item);
        }
        
    }
}
