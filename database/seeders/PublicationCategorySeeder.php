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
                'title' => [
                    'id' => 'Buku/Bab Buku/Jurnal',
                    'en' => 'Book/Chapter Book/Journal',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 2,
                'parent_id' => 1,
                'order' => 1,
                'title' => [
                    'id' => 'Jurnal Internasional Terindeks',
                    'en' => 'Indexed International Journal',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 3,
                'parent_id' => 1,
                'order' => 2,
                'title' => [
                    'id' => 'Jurnal Internasional',
                    'en' => 'International Journal',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 4,
                'parent_id' => 1,
                'order' => 3,
                'title' => [
                    'id' => 'Jurnal Nasional Terindeks Sinta',
                    'en' => 'Sinta Indexed National Journal',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 5,
                'parent_id' => 1,
                'order' => 4,
                'title' => [
                    'id' => 'Jurnal Nasional',
                    'en' => 'National Journal',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 6,
                'parent_id' => -1,
                'order' => 5,
                'title' => [
                    'id' => 'Makalah/Prosiding/Poster',
                    'en' => 'Papers/Proceedings/Posters',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 7,
                'parent_id' => 6,
                'order' => 6,
                'title' => [
                    'id' => 'Prosiding Internasional Terindeks',
                    'en' => 'Indexed International Proceedings',
                ],
                'code' => null,
                'description' => null,
                'is_active' => true,
            ],
            [
                'id' => 8,
                'parent_id' => 6,
                'order' => 7,
                'title' => [
                    'id' => 'Prosiding Internasional',
                    'en' => 'International Proceedings',
                ],
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
