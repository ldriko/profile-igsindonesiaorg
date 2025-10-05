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
            'title' => [
                'id' => 'Bali Backpacker sebagai Platform Panduan Perjalanan Lengkap dengan Bilingual (Indonesia dan Inggris) untuk Pemulihan Pariwisata Bali di Masa New Normal Covid',
                'en' => 'Bali Backpacker as a Complete Travel Guide Platform with Bilingual (Indonesian and English) for Bali Tourism Recovery during the Covid New Normal Period',
            ],
            'role' => [
                'id' => 'Ketua',
                'en' => 'Leader',
            ],
            'institution' => [
                'id' => 'PNBP Provinsi Bali',
                'en' => 'PNBP of Bali Province',
            ],
            'description' => [
                'id' => 'Mengembangkan platform panduan perjalanan bilingual untuk membantu pemulihan pariwisata Bali selama pandemi COVID-19.',
                'en' => 'Developed a bilingual travel guide platform to assist in the recovery of Bali tourism during the COVID-19 pandemic.',
            ],
        ];

        $personalInfo->policyExperiences()->create($policyExperience);
    }
}
