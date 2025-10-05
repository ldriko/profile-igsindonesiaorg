<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class IntellectualPropertySeeder extends Seeder
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

        $intellectualProperties = [
            [
                'title' => 'Aplikasi Klasifikasi Tumor Otak Berdasarkan Citra MRI Dengan Model Ensemble Learning Dan GRAD-CAM',
                'type' => 'Copyright',
                'registration_number' => 'EC00202519580',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/202',
            ],
            [
                'title' => 'HEMOPREDICT - Aplikasi Prediksi Komplikasi Hemodialisis Berbasis Website',
                'type' => 'Copyright',
                'registration_number' => 'EC002025067292',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/259',
            ],
            [
                'title' => 'Aplikasi E-Commerce Huriel Cosmetic',
                'type' => 'Copyright',
                'registration_number' => 'EC002025028125',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/260',
            ],
            [
                'title' => 'LOPENWA',
                'type' => 'Copyright',
                'registration_number' => 'EC002025055997',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/261',
            ],
            [
                'title' => 'Aplikasi E-Commerce Penjualan Alat Dan Obat Kesehatan (Lifepack) Berbasis Website',
                'type' => 'Copyright',
                'registration_number' => 'EC002025067299',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/262',
            ],
            [
                'title' => 'Aplikasi Sistem Toko Obat Berbasis Website',
                'type' => 'Copyright',
                'registration_number' => 'EC002025067294',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/263',
            ],
            [
                'title' => 'Aplikasi SITUK (Sistem Terintegrasi Uji Sertifikasi Kompetensi) Berbasis Mobile',
                'type' => 'Copyright',
                'registration_number' => 'EC00202398658',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/207',
            ],
            [
                'title' => 'Aplikasi Web Smart Bali Backpacker (S-BALIBACK) Versi-2.1',
                'type' => 'Copyright',
                'registration_number' => 'EC00202398656',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/205',
            ],
            [
                'title' => 'FISHGROM',
                'type' => 'Copyright',
                'registration_number' => 'EC002023100614',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/206',
            ],
            [
                'title' => 'Logbook Kegiatan MBKM',
                'type' => 'Copyright',
                'registration_number' => 'EC00202386302',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/210',
            ],
            [
                'title' => 'Modul Human Resource Odoo Open Source ERP and CRM',
                'type' => 'Copyright',
                'registration_number' => 'EC00202399159',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/212',
            ],
            [
                'title' => 'Sistem Informasi Perawatan Gedung (SITEDU)',
                'type' => 'Copyright',
                'registration_number' => 'EC00202386301',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/209',
            ],
            [
                'title' => 'Sistem Outbond Bela Negara Online',
                'type' => 'Copyright',
                'registration_number' => 'EC00202386298',
                'year' => 2023,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/213',
            ],
            [
                'title' => 'JALAN TANGGAP',
                'type' => 'Copyright',
                'registration_number' => 'EC002025088860',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/267',
            ],
            [
                'title' => 'TIXSHOP-Aplikasi Web Penjualan Tiket Events',
                'type' => 'Copyright',
                'registration_number' => 'EC002025028127',
                'year' => 2025,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/268',
            ],
            [
                'title' => 'Aplikasi E-RPL (Elektronik Rekognisi Pembelajaran Lampau) Berbasis WEB',
                'type' => 'Copyright',
                'registration_number' => 'EC002024203469',
                'year' => 2024,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/269',
            ],
            [
                'title' => 'Clustering Data Obat Dengan Kmeans Dan Hierarchical',
                'type' => 'Copyright',
                'registration_number' => 'EC00202481663',
                'year' => 2024,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/270',
            ],
            [
                'title' => 'Implementasi Soft Voting Classifier Dalam Memprediksi Atrisi Voluntary Karyawan',
                'type' => 'Copyright',
                'registration_number' => 'EC00202475754',
                'year' => 2024,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/271',
            ],
            [
                'title' => 'Implementasi Metode Long Short-Term Memory (LSTM) Untuk Optimalisasi Dan Peramalan Kata Kunci Pada Situs Web Monstermac',
                'type' => 'Copyright',
                'registration_number' => 'EC00202475753',
                'year' => 2024,
                'status' => 'Registered',
                'url' => 'https://arsip.igsindonesia.org/umum/C_penelitian/detail/264',
            ],
        ];

        foreach ($intellectualProperties as $intellectualProperty) {
            $personalInfo->intellectualProperties()->create($intellectualProperty);
        }
    }
}
