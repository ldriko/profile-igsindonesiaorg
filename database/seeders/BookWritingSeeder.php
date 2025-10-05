<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class BookWritingSeeder extends Seeder
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

        $bookWritings = [
            [
                'year' => 2025,
                'title' => 'Dasar Perencanaan Proyek Sains Data - Buku Ajar Berbasis OBE',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-634-7158-14-7',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/188',
            ],
            [
                'year' => 2025,
                'title' => 'ENTERPRISE RESOURCE PLANNING-Membangun Sistem Informasi Terintegrasi dengan Odoo dan Web: Pendekatan Problem-Based Learning',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-634-7158-39-0',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/189',
            ],
            [
                'year' => 2024,
                'title' => 'Problem Based Learning, Bahan Ajar Enterprise Resource Planning (ERP) Berbasis ODOO',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-8224-63-0',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/168',
            ],
            [
                'year' => 2024,
                'title' => 'Enterprise Resource Planning dengan Odoo',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-8224-29-6',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/192',
            ],
            [
                'year' => 2023,
                'title' => 'Enterprise Resource Planning',
                'publisher' => 'Indomedia Pustaka',
                'isbn' => '978-623-6133-82-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/24',
            ],
            [
                'year' => 2023,
                'title' => 'Smart Bali Backpacker: Sistem Informasi Rekomendasi Pemandu Perjalanan Wisata Backpacker',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-99861-9-3',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/200',
            ],
            [
                'year' => 2022,
                'title' => 'Panduan Praktis LATEX untuk Membuat Dokumen Ilmiah Edisi 1.0',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-99544-6-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/198',
            ],
            [
                'year' => 2022,
                'title' => 'Pola Pergerakan Spermatozoa',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-88380-2-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/199',
            ],
            [
                'year' => 2022,
                'title' => 'Standar Keamanan Pangan Produk UMKM',
                'publisher' => 'RFM PRAMEDIA (Grup Penerbitan CV. RFM PRAMEDIA JEMBER)',
                'isbn' => '978-623-5835-45-7',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/201',
            ],
            [
                'year' => 2022,
                'title' => 'Sistem Digitalisasi Parkir',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-88380-4-2',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/195',
            ],
            [
                'year' => 2022,
                'title' => 'Modul Pengolahan Dan Analisis Data Dengan SPSS',
                'publisher' => 'RFM PRAMEDIA (Grup Penerbitan CV. RFM PRAMEDIA JEMBER)',
                'isbn' => '978-623-88380-4-2',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/196',
            ],
            [
                'year' => 2022,
                'title' => 'Otomatisasi Penentuan Hasil Analisis Sperma-Aplikasi Pada Sistem Informasi Dan Sistem Keputusan',
                'publisher' => 'Thalibul Ilmi Publishing & Education',
                'isbn' => '978-623-88380-4-2',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/197',
            ],
            [
                'year' => 2021,
                'title' => 'Enterprise Resource Planning',
                'publisher' => 'Indomedia Pustaka',
                'isbn' => '978-623-6133-82-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/24',
            ],
            [
                'year' => 2020,
                'title' => 'Aplikasi Sistem Terintegrasi Uji Sertifikasi Kompetensi (SITUK)',
                'publisher' => 'Indomedia Pustaka',
                'isbn' => '9786237889977',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/193',
            ],
            [
                'year' => 2019,
                'title' => 'Tutorial Sederhana Menggunakan OJS3',
                'publisher' => 'Indomedia Pustaka',
                'isbn' => '9786237137511',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/198',
            ],
            [
                'year' => 2018,
                'title' => 'Sistem Cerdas Penjejakan Obyek Video Spermatozoa',
                'publisher' => 'Sejahtera Mandiri',
                'isbn' => '978-602-52190-2-3',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/199',
            ],
        ];

        foreach ($bookWritings as $bookWriting) {
            $personalInfo->bookWritings()->create($bookWriting);
        }
    }
}
