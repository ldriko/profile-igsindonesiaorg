<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class PolicyExperienceSeeder extends Seeder
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

        $policyExperience = [
            'year' => 2021,
            'title' => 'Bali Backpacker as a Complete Travel Guide Platform with Bilingual (Indonesian and English) for Bali Tourism Recovery during the Covid New Normal Period',
            'role' => 'Leader',
            'institution' => 'PNBP of Bali Province',
            'description' => 'Developed a bilingual travel guide platform to assist in the recovery of Bali tourism during the COVID-19 pandemic.',
        ];

        $personalInfo->policyExperiences()->create($policyExperience);
    }
}
