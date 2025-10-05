<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class ResearchSeeder extends Seeder
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

        $researches = [
            [
                'year' => 2025,
                'title' => 'Development of a UI/UX Interface For Real-Time Detection of Abnormal Sperm Motility Using Deep Learning',
                'role' => 'Leader',
                'funding_source' => 'Program Hibah: Dipa Universitas Pembangunan Nasional Veteran Jawa Timur',
                'scheme' => 'Penelitian Skripsi',
                'fund_amount' => 10000000,
            ],
            [
                'year' => 2025,
                'title' => 'Reduksi Noise Pada Citra Magnetic Resonance Imaging (MRI) Otak Menggunakan Convolutional Autoencoder (CAE)',
                'role' => 'Leader',
                'funding_source' => 'Program Hibah: Dipa Universitas Pembangunan Nasional Veteran Jawa Timur',
                'scheme' => 'Penelitian Kerjasama Internasional',
                'fund_amount' => 42000000,
            ],
            [
                'year' => 2024,
                'title' => 'Real-Time Detection of Abnormal Sperm Motility with Deep Learning Mobilenet-SSD',
                'role' => 'Leader',
                'funding_source' => 'Program Hibah: Dipa Universitas Pembangunan Nasional Veteran Jawa Timur',
                'scheme' => 'Penelitian Kerjasama Internasional',
                'fund_amount' => 42000000,
            ],
            [
                'year' => 2024,
                'title' => 'Design and implementation of VIRTUAL REALITY E-TOURISM (VIRETO) Tourism Village, realizing the destination experience in Banten Province',
                'role' => 'Member',
                'funding_source' => 'Program Hibah: Penelitian Kompetitif Nasional',
                'scheme' => 'Penelitian Fundamental',
                'fund_amount' => 97750000,
            ],
            [
                'year' => 2023,
                'title' => 'Smart Sim-Fare: A Smart System-Based Prior Learning Recognition (RPL) Application Form Management Information System & E-Portfolio',
                'role' => 'Leader',
                'funding_source' => 'Program Hibah: DIPA Universitas Pembangunan Nasional Veteran Jawa Timur',
                'scheme' => 'Terapan',
                'fund_amount' => 32000000,
            ],
        ];

        foreach ($researches as $research) {
            $personalInfo->researches()->create($research);
        }
    }
}
