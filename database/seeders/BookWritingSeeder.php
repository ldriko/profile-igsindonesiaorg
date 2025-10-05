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
                'title' => [
                    'id' => 'Dasar Perencanaan Proyek Sains Data - Buku Ajar Berbasis OBE',
                    'en' => 'Fundamentals of Data Science Project Planning - OBE-Based Textbook',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-634-7158-14-7',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/188',
            ],
            [
                'year' => 2025,
                'title' => [
                    'id' => 'ENTERPRISE RESOURCE PLANNING - Membangun Sistem Informasi Terintegrasi dengan Odoo dan Web: Pendekatan Problem-Based Learning',
                    'en' => 'ENTERPRISE RESOURCE PLANNING - Building Integrated Information Systems with Odoo and Web: Problem-Based Learning Approach',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-634-7158-39-0',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/189',
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Problem Based Learning, Bahan Ajar Enterprise Resource Planning (ERP) Berbasis ODOO',
                    'en' => 'Problem Based Learning, ODOO-Based Enterprise Resource Planning (ERP) Teaching Materials',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-8224-63-0',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/168',
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Enterprise Resource Planning dengan Odoo',
                    'en' => 'Enterprise Resource Planning with Odoo',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-8224-29-6',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/192',
            ],
            [
                'year' => 2023,
                'title' => [
                    'id' => 'Enterprise Resource Planning',
                    'en' => 'Enterprise Resource Planning',
                ],
                'publisher' => [
                    'id' => 'Indomedia Pustaka',
                    'en' => 'Indomedia Pustaka',
                ],
                'isbn' => '978-623-6133-82-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/24',
            ],
            [
                'year' => 2023,
                'title' => [
                    'id' => 'Smart Bali Backpacker: Sistem Informasi Rekomendasi Pemandu Perjalanan Wisata Backpacker',
                    'en' => 'Smart Bali Backpacker: Backpacker Travel Guide Recommendation Information System',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-99861-9-3',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/200',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Panduan Praktis LATEX untuk Membuat Dokumen Ilmiah Edisi 1.0',
                    'en' => 'Practical Guide to LATEX for Creating Scientific Documents Edition 1.0',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-99544-6-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/198',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Pola Pergerakan Spermatozoa',
                    'en' => 'Spermatozoa Movement Patterns',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-88380-2-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/199',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Standar Keamanan Pangan Produk UMKM',
                    'en' => 'Food Safety Standards for MSME Products',
                ],
                'publisher' => [
                    'id' => 'RFM PRAMEDIA (Grup Penerbitan CV. RFM PRAMEDIA JEMBER)',
                    'en' => 'RFM PRAMEDIA (CV. RFM PRAMEDIA JEMBER Publishing Group)',
                ],
                'isbn' => '978-623-5835-45-7',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/201',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Sistem Digitalisasi Parkir',
                    'en' => 'Parking Digitalization System',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-88380-4-2',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/195',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Modul Pengolahan Dan Analisis Data Dengan SPSS',
                    'en' => 'Data Processing and Analysis Module with SPSS',
                ],
                'publisher' => [
                    'id' => 'RFM PRAMEDIA (Grup Penerbitan CV. RFM PRAMEDIA JEMBER)',
                    'en' => 'RFM PRAMEDIA (CV. RFM PRAMEDIA JEMBER Publishing Group)',
                ],
                'isbn' => '978-623-88380-4-2',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/196',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'Otomatisasi Penentuan Hasil Analisis Sperma - Aplikasi Pada Sistem Informasi Dan Sistem Keputusan',
                    'en' => 'Automation of Sperm Analysis Results Determination - Application in Information Systems and Decision Systems',
                ],
                'publisher' => [
                    'id' => 'Thalibul Ilmi Publishing & Education',
                    'en' => 'Thalibul Ilmi Publishing & Education',
                ],
                'isbn' => '978-623-88380-4-2',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/197',
            ],
            [
                'year' => 2021,
                'title' => [
                    'id' => 'Enterprise Resource Planning',
                    'en' => 'Enterprise Resource Planning',
                ],
                'publisher' => [
                    'id' => 'Indomedia Pustaka',
                    'en' => 'Indomedia Pustaka',
                ],
                'isbn' => '978-623-6133-82-8',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/24',
            ],
            [
                'year' => 2020,
                'title' => [
                    'id' => 'Aplikasi Sistem Terintegrasi Uji Sertifikasi Kompetensi (SITUK)',
                    'en' => 'Integrated Competency Certification Test System Application (SITUK)',
                ],
                'publisher' => [
                    'id' => 'Indomedia Pustaka',
                    'en' => 'Indomedia Pustaka',
                ],
                'isbn' => '9786237889977',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/193',
            ],
            [
                'year' => 2019,
                'title' => [
                    'id' => 'Tutorial Sederhana Menggunakan OJS3',
                    'en' => 'Simple Tutorial Using OJS3',
                ],
                'publisher' => [
                    'id' => 'Indomedia Pustaka',
                    'en' => 'Indomedia Pustaka',
                ],
                'isbn' => '9786237137511',
                'type' => 'Textbook',
                'authors' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
                'role' => 'Author',
                'url' => 'https://arsip.igsindonesia.org/umum/C_pendidikan/detail/198',
            ],
            [
                'year' => 2018,
                'title' => [
                    'id' => 'Sistem Cerdas Penjejakan Obyek Video Spermatozoa',
                    'en' => 'Intelligent System for Spermatozoa Video Object Tracking',
                ],
                'publisher' => [
                    'id' => 'Sejahtera Mandiri',
                    'en' => 'Sejahtera Mandiri',
                ],
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
