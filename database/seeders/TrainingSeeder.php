<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class TrainingSeeder extends Seeder
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

        $trainings = [
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Pelatihan dan Uji Sertifikasi In-Company Trainer (Pelatih di Tempat Kerja / Metodologi Level III)',
                    'en' => 'In-Company Trainer Training and Certification Test (Workplace Trainer / Methodology Level III)',
                ],
                'type' => 'Domestic',
                'organizer' => [
                    'id' => 'HRD Indonesia Abadi',
                    'en' => 'HRD Indonesia Abadi',
                ],
                'duration_hours' => 16,
                'period' => 'Desember 19 - 20, 2024',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/185',
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Pendidikan dan Pelatihan Instruktur - Peningkatan Keterampilan Dasar Teknik Instruksional - Applied Approach (PEKERTI-AA)',
                    'en' => 'Instructor Education and Training - Basic Instructional Technical Skills Improvement - Applied Approach (PEKERTI-AA)',
                ],
                'type' => 'Domestic',
                'organizer' => [
                    'id' => 'Direktorat Inovasi dan Pengembangan Pendidikan Universitas Airlangga',
                    'en' => 'Directorate of Innovation and Educational Development, Airlangga University',
                ],
                'duration_hours' => 24,
                'period' => 'June 24 - 26, 2024',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/186',
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Workshop Pengembangan Pembelajaran Digital: Transformasi Pembelajaran Dengan Teknologi Ajar Berbasis LMS',
                    'en' => 'Digital Learning Development Workshop: Learning Transformation With LMS-Based Teaching Technology',
                ],
                'type' => 'Domestic',
                'organizer' => [
                    'id' => 'Lembaga Pengembangan Pembelajaran Dan Penjaminan Mutu UPN "Veteran" Jawa Timur',
                    'en' => 'Learning Development and Quality Assurance Institute UPN "Veteran" East Java',
                ],
                'duration_hours' => 16,
                'period' => 'April 22 - 23, 2024',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/187',
            ],
            [
                'year' => 2023,
                'title' => [
                    'id' => 'Sertifikat Kompetensi Program Studi Profesi Insinyur (Ir)',
                    'en' => 'Competency Certificate for Professional Engineer (Ir) Study Program',
                ],
                'type' => 'Domestic',
                'organizer' => [
                    'id' => 'Fakultas Teknik, Universitas Muhammadiyah Malang',
                    'en' => 'Faculty of Engineering, Universitas Muhammadiyah Malang',
                ],
                'duration_hours' => 36,
                'period' => 'February 4, 2023',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/22',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Pelatihan PPPK Dosen Angkatan XXX Tahun 2022',
                    'en' => 'PPPK Lecturer Training Batch XXX Year 2022',
                ],
                'type' => 'Domestic',
                'organizer' => [
                    'id' => 'Pusat Pendidikan dan Pelatihan Pegawai Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi',
                    'en' => 'Center for Education and Training of Employees, Ministry of Education, Culture, Research and Technology',
                ],
                'duration_hours' => 60,
                'period' => 'Desember 19 - 23, 2022',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/36',
            ],
        ];

        foreach ($trainings as $training) {
            $personalInfo->trainings()->create($training);
        }
    }
}
