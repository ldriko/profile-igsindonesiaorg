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
                'title' => 'Pelatihan dan Uji Sertifikasi In-Company Trainer (Pelatih di Tempat Kerja / Metodologi Level III)',
                'type' => 'Domestic',
                'organizer' => 'HRD Indonesia Abadi',
                'duration_hours' => 16,
                'period' => 'Desember 19 - 20, 2024',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/185',
            ],
            [
                'year' => 2024,
                'title' => 'Pendidikan dan Pelatihan Instruktur - Peningkatan Keterampilan Dasar Teknik Instruksional - Applied Approach (PEKERTI-AA)',
                'type' => 'Domestic',
                'organizer' => 'Direktorat Inovasi dan Pengembangan Pendidikan Universitas Airlangga',
                'duration_hours' => 24,
                'period' => 'June 24 - 26, 2024',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/186',
            ],
            [
                'year' => 2024,
                'title' => 'Workshop Pengembangan Pembelajaran Digital: (Transformasi Pembelajaran Dengan Teknologi Ajar Berbasis LMS)',
                'type' => 'Domestic',
                'organizer' => 'Lembaga Pengembangan Pembelajaran Dan Penjaminan Mutu UPN "Veteran" Jawa Timur',
                'duration_hours' => 16,
                'period' => 'April 22 - 23, 2024',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/187',
            ],
            [
                'year' => 2023,
                'title' => 'Sertifikat Kompetensi Program Studi Profesi Insinyur (Ir)',
                'type' => 'Domestic',
                'organizer' => 'Fakultas Teknik (Faculty of Engineering), Universitas Muhammadiyah Malang',
                'duration_hours' => 36,
                'period' => 'February 4, 2023',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/22',
            ],
            [
                'year' => 2022,
                'title' => 'Pelatihan PPPK Dosen Angkatan XXX Tahun 2022',
                'type' => 'Domestic',
                'organizer' => 'Pusat Pendidikan dan Pelatihan Pegawai Kementerian Pendidikan, Kebudayaan, Riset dan Teknologi',
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
