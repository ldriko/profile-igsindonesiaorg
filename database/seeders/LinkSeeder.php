<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class LinkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $personalInfo = PersonalInfo::first();

        if (! $personalInfo) {
            $this->command->warn('No PersonalInfo found. Please run PersonalInfoSeeder first.');

            return;
        }

        $links = [
            [
                'platform' => 'Scopus',
                'url' => 'https://www.scopus.com/authid/detail.uri?authorId=57189690019',
            ],
            [
                'platform' => 'Sinta',
                'url' => 'https://sinta.kemdiktisaintek.go.id/authors/profile/5977757',
            ],
            [
                'platform' => 'Google Scholar',
                'url' => 'https://scholar.google.com/citations?user=-KS9t4QAAAAJ',
            ],
        ];

        foreach ($links as $link) {
            $personalInfo->links()->create($link);
        }
    }
}
