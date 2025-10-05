<?php

namespace Database\Seeders;

use App\Models\PublicationCategory;
use Illuminate\Database\Seeder;

class PublicationCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'id' => 1,
                'parent_id' => -1,
                'order' => 0,
                'title' => 'Book/Chapter Book/Journal',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'order' => 1,
                'title' => 'Indexed International Journal',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'order' => 2,
                'title' => 'International Journal',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 4,
                'parent_id' => 1,
                'order' => 3,
                'title' => 'Sinta Indexed National Journal',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 5,
                'parent_id' => 1,
                'order' => 4,
                'title' => 'National Journal',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 6,
                'parent_id' => -1,
                'order' => 5,
                'title' => 'Papers/Proceedings/Posters',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 7,
                'parent_id' => 6,
                'order' => 6,
                'title' => 'Indexed International Proceedings',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 8,
                'parent_id' => 6,
                'order' => 7,
                'title' => 'Prosiding Internasional',
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
        ];

        foreach ($categories as $category) {
            PublicationCategory::create($category);
        }
    }
}
