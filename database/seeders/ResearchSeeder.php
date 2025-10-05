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
                'title' => [
                    'id' => 'Pengembangan Antarmuka UI/UX Untuk Deteksi Real-Time Motilitas Sperma Abnormal Menggunakan Deep Learning',
                    'en' => 'Development of a UI/UX Interface For Real-Time Detection of Abnormal Sperm Motility Using Deep Learning',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Program Hibah: DIPA Universitas Pembangunan Nasional Veteran Jawa Timur',
                    'en' => 'Grant Program: DIPA National Development University Veteran East Java',
                ],
                'scheme' => [
                    'id' => 'Penelitian Skripsi',
                    'en' => 'Thesis Research',
                ],
                'fund_amount' => 10000000,
            ],
            [
                'year' => 2025,
                'title' => [
                    'id' => 'Reduksi Noise Pada Citra Magnetic Resonance Imaging (MRI) Otak Menggunakan Convolutional Autoencoder (CAE)',
                    'en' => 'Noise Reduction in Brain Magnetic Resonance Imaging (MRI) Images Using Convolutional Autoencoder (CAE)',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Program Hibah: DIPA Universitas Pembangunan Nasional Veteran Jawa Timur',
                    'en' => 'Grant Program: DIPA National Development University Veteran East Java',
                ],
                'scheme' => [
                    'id' => 'Penelitian Kerjasama Internasional',
                    'en' => 'International Collaborative Research',
                ],
                'fund_amount' => 42000000,
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Deteksi Real-Time Motilitas Sperma Abnormal Menggunakan Deep Learning Mobilenet-SSD',
                    'en' => 'Real-Time Detection of Abnormal Sperm Motility with Deep Learning Mobilenet-SSD',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Program Hibah: DIPA Universitas Pembangunan Nasional Veteran Jawa Timur',
                    'en' => 'Grant Program: DIPA National Development University Veteran East Java',
                ],
                'scheme' => [
                    'id' => 'Penelitian Kerjasama Internasional',
                    'en' => 'International Collaborative Research',
                ],
                'fund_amount' => 42000000,
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Desain dan Implementasi VIRTUAL REALITY E-TOURISM (VIRETO) Desa Wisata, Mewujudkan Pengalaman Destinasi di Provinsi Banten',
                    'en' => 'Design and Implementation of VIRTUAL REALITY E-TOURISM (VIRETO) Tourism Village, Realizing the Destination Experience in Banten Province',
                ],
                'role' => 'Member',
                'funding_source' => [
                    'id' => 'Program Hibah: Penelitian Kompetitif Nasional',
                    'en' => 'Grant Program: National Competitive Research',
                ],
                'scheme' => [
                    'id' => 'Penelitian Fundamental',
                    'en' => 'Fundamental Research',
                ],
                'fund_amount' => 97750000,
            ],
            [
                'year' => 2023,
                'title' => [
                    'id' => 'Smart Sim-Fare: Sistem Informasi Manajemen Formulir Aplikasi Rekognisi Pembelajaran Lampau (RPL) Berbasis Sistem Cerdas & E-Portfolio',
                    'en' => 'Smart Sim-Fare: A Smart System-Based Prior Learning Recognition (RPL) Application Form Management Information System & E-Portfolio',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Program Hibah: DIPA Universitas Pembangunan Nasional Veteran Jawa Timur',
                    'en' => 'Grant Program: DIPA National Development University Veteran East Java',
                ],
                'scheme' => [
                    'id' => 'Penelitian Terapan',
                    'en' => 'Applied Research',
                ],
                'fund_amount' => 32000000,
            ],
        ];

        foreach ($researches as $research) {
            $personalInfo->researches()->create($research);
        }
    }
}
