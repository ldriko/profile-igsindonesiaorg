<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class ConferenceSeeder extends Seeder
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

        $conferences = [
            [
                'year' => 2016,
                'title' => [
                    'id' => 'Analisis Otomatis Jumlah dan Konsentrasi Sperma Manusia (Oligospermia) Menggunakan Metode OTSU Threshold dan Labelling',
                    'en' => 'Automated analysis of human sperm number and concentration (oligospermia) using OTSU threshold method and labelling',
                ],
                'conference_name' => [
                    'id' => 'Seri Konferensi IOP: Ilmu Material dan Teknik 105',
                    'en' => 'IOP Conference Series: Materials Science and Engineering 105',
                ],
                'location' => [
                    'id' => 'Yogyakarta, Indonesia',
                    'en' => 'Yogyakarta, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Analisis Otomatis Jumlah dan Konsentrasi Sperma Manusia (Oligospermia) Menggunakan Metode OTSU Threshold dan Labelling',
                    'en' => 'Automated analysis of human sperm number and concentration (oligospermia) using OTSU threshold method and labelling',
                ],
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2016,
                'title' => [
                    'id' => 'Klasifikasi Teratozoospermia Berdasarkan Bentuk Kepala Sperma Menggunakan OTSU Threshold dan Decision Tree',
                    'en' => 'Teratozoospermia Classification Based on the Shape of Sperm Head Using OTSU Threshold and Decision Tree',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Web MATEC 58',
                    'en' => 'MATEC Web of Conferences 58',
                ],
                'location' => [
                    'id' => 'Denpasar, Bali, Indonesia',
                    'en' => 'Denpasar, Bali, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Klasifikasi Teratozoospermia Berdasarkan Bentuk Kepala Sperma Menggunakan OTSU Threshold dan Decision Tree',
                    'en' => 'Teratozoospermia Classification Based on the Shape of Sperm Head Using OTSU Threshold and Decision Tree',
                ],
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2018,
                'title' => [
                    'id' => 'Menghitung Jumlah Spermatozoa Aktif Per Frame Video Menggunakan Morfologi dan Local Adaptive Threshold',
                    'en' => 'Counting the Amount of Spermatozoa Active Perframe Video Using Morphology and Local Adaptive Threshold',
                ],
                'conference_name' => [
                    'id' => 'Prosiding Sains dan Teknologi Nusantara',
                    'en' => 'Nusantara Science and Technology Proceedings',
                ],
                'location' => [
                    'id' => 'UPN Veteran Jawa Timur, Indonesia',
                    'en' => 'UPN Veteran Jawa Timur, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Menghitung Jumlah Spermatozoa Aktif Per Frame Video Menggunakan Morfologi dan Local Adaptive Threshold',
                    'en' => 'Counting the Amount of Spermatozoa Active Perframe Video Using Morphology and Local Adaptive Threshold',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2019,
                'title' => [
                    'id' => 'Metode Baru Untuk Klasifikasi Abnormalitas Morfologi Spermatozoa Berdasarkan Video Makroskopis Semen Manusia',
                    'en' => 'New Method For Classification Of Spermatozoa Morphology Abnormalities Based On Macroscopic Video Of Human Semen',
                ],
                'conference_name' => [
                    'id' => 'Seminar Internasional Aplikasi Teknologi Informasi dan Komunikasi (iSemantic)',
                    'en' => 'International Seminar on Application for Technology of Information and Communication (iSemantic)',
                ],
                'location' => [
                    'id' => 'Semarang, Indonesia',
                    'en' => 'Semarang, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Metode Baru Untuk Klasifikasi Abnormalitas Morfologi Spermatozoa Berdasarkan Video Makroskopis Semen Manusia',
                    'en' => 'New Method For Classification Of Spermatozoa Morphology Abnormalities Based On Macroscopic Video Of Human Semen',
                ],
                'url' => 'https://doi.org/10.31763/ijrcs.v5i1.1599',
            ],
            [
                'year' => 2019,
                'title' => [
                    'id' => 'Rancang Bangun Aplikasi Informatif Penyakit Kronis Berbasis Android',
                    'en' => 'Design and Development of Android-Based Chronic Disease Information Application',
                ],
                'conference_name' => [
                    'id' => 'Seminar Nasional SANTIKA ke-1',
                    'en' => 'National Seminar SANTIKA 1st',
                ],
                'location' => [
                    'id' => 'Informatika, UPN Veteran Jawa Timur',
                    'en' => 'Informatics, UPN Veteran Jawa Timur',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Rancang Bangun Aplikasi Informatif Penyakit Kronis Berbasis Android',
                    'en' => 'Design and Development of Android-Based Chronic Disease Information Application',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2024.4136',
            ],
            [
                'year' => 2020,
                'title' => [
                    'id' => 'Pengaruh Efikasi Diri Terhadap Kompetensi Taruna di Politeknik Penerbangan Surabaya',
                    'en' => 'The Effects of Self-Efficacy on the Competency of Cadets in Aviation Polytechnic of Surabaya',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Bersama Internasional tentang Sains dan Teknik (IJCSE 2020)',
                    'en' => 'International Joint Conference on Science and Engineering (IJCSE 2020)',
                ],
                'location' => [
                    'id' => 'Semarang, Indonesia',
                    'en' => 'Semarang, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Pengaruh Efikasi Diri Terhadap Kompetensi Taruna di Politeknik Penerbangan Surabaya',
                    'en' => 'The Effects of Self-Efficacy on the Competency of Cadets in Aviation Polytechnic of Surabaya',
                ],
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2020,
                'title' => [
                    'id' => 'Perancangan dan Pengembangan Chatbot Menggunakan Dialog Flow di PDAM Surya Sembada Kota Surabaya',
                    'en' => 'Design and Development of Chatbot Using Dialog Flow in Surya Sembada PDAM Surabaya City',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Bersama Internasional tentang Sains dan Teknik (IJCSE 2020)',
                    'en' => 'International Joint Conference on Science and Engineering (IJCSE 2020)',
                ],
                'location' => [
                    'id' => 'Semarang, Indonesia',
                    'en' => 'Semarang, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Perancangan dan Pengembangan Chatbot Menggunakan Dialog Flow di PDAM Surya Sembada Kota Surabaya',
                    'en' => 'Design and Development of Chatbot Using Dialog Flow in Surya Sembada PDAM Surabaya City',
                ],
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2020,
                'title' => [
                    'id' => 'Analisis Reverse Image Search Berdasarkan Model Convolutional Neural Network Pre-Trained',
                    'en' => 'Reverse Image Search Analysis Based on Pre-Trained Convolutional Neural Network Model',
                ],
                'conference_name' => [
                    'id' => 'Seminar Internasional Teknologi Informasi ke-6 (ITIS)',
                    'en' => '6th Information Technology International Seminar (ITIS)',
                ],
                'location' => [
                    'id' => 'Surabaya, Indonesia',
                    'en' => 'Surabaya, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Analisis Reverse Image Search Berdasarkan Model Convolutional Neural Network Pre-Trained',
                    'en' => 'Reverse Image Search Analysis Based on Pre-Trained Convolutional Neural Network Model',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2020,
                'title' => [
                    'id' => 'Analisis Algoritma Levenshtein Distance pada Aplikasi Pendaftaran dan Disposisi Surat',
                    'en' => 'Levenshtein Distance Algorithm Analysis on Enrollment and Disposition of Letters Application',
                ],
                'conference_name' => [
                    'id' => 'Seminar Internasional Teknologi Informasi ke-6 (ITIS)',
                    'en' => '6th Information Technology International Seminar (ITIS)',
                ],
                'location' => [
                    'id' => 'Surabaya, Indonesia',
                    'en' => 'Surabaya, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Analisis Algoritma Levenshtein Distance pada Aplikasi Pendaftaran dan Disposisi Surat',
                    'en' => 'Levenshtein Distance Algorithm Analysis on Enrollment and Disposition of Letters Application',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2021,
                'title' => [
                    'id' => 'Algoritma Profile Matching dalam Menentukan Posisi Rekan Kerja',
                    'en' => 'Profile Matching Algorithm in Determining the Position of Colleagues',
                ],
                'conference_name' => [
                    'id' => 'Seminar Internasional Teknologi Informasi ke-7 (ITIS)',
                    'en' => '7th Information Technology International Seminar (ITIS)',
                ],
                'location' => [
                    'id' => 'Surabaya, Indonesia',
                    'en' => 'Surabaya, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Algoritma Profile Matching dalam Menentukan Posisi Rekan Kerja',
                    'en' => 'Profile Matching Algorithm in Determining the Position of Colleagues',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2021,
                'title' => [
                    'id' => 'Memahami Serangan Adversarial pada Deep Convolutional Neural Networks untuk Klasifikasi Cholangiocarcinoma',
                    'en' => 'Grasping Adversarial Attacks on Deep Convolutional Neural Networks for Cholangiocarcinoma Classification',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Internasional tentang e-Kesehatan dan Bioengineering (EHB)',
                    'en' => 'International Conference on e-Health and Bioengineering (EHB)',
                ],
                'location' => [
                    'id' => 'Surabaya, Indonesia',
                    'en' => 'Surabaya, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Memahami Serangan Adversarial pada Deep Convolutional Neural Networks untuk Klasifikasi Cholangiocarcinoma',
                    'en' => 'Grasping Adversarial Attacks on Deep Convolutional Neural Networks for Cholangiocarcinoma Classification',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2021,
                'title' => [
                    'id' => 'Analisis Sentimen Twitter sebagai Evaluasi dan Basis Layanan Menggunakan Python Textblob',
                    'en' => 'Twitter Sentiment Analysis as an Evaluation and Service Base On Python Textblob',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Internasional tentang Informatika, Multimedia, Cyber dan Sistem Informasi (ICIMCIS)',
                    'en' => 'International Conference on Informatics, Multimedia, Cyber and Information System (ICIMCIS)',
                ],
                'location' => [
                    'id' => 'Indonesia',
                    'en' => 'Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Analisis Sentimen Twitter sebagai Evaluasi dan Basis Layanan Menggunakan Python Textblob',
                    'en' => 'Twitter Sentiment Analysis as an Evaluation and Service Base On Python Textblob',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2022,
                'title' => [
                    'id' => 'F.Q.A.M Feyn-Qlattice Automation Modelling: Modul Python Machine Learning untuk Klasifikasi Data dalam Probabilitas Air',
                    'en' => 'F.Q.A.M Feyn-Qlattice Automation Modelling : Python Module of Machine Learning for Data Classification in Water Probability',
                ],
                'conference_name' => [
                    'id' => 'Seminar Internasional Teknologi Informasi ke-8 (ITIS)',
                    'en' => '8th Information Technology International Seminar (ITIS)',
                ],
                'location' => [
                    'id' => 'Surabaya, Indonesia',
                    'en' => 'Surabaya, Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'F.Q.A.M Feyn-Qlattice Automation Modelling: Modul Python Machine Learning untuk Klasifikasi Data dalam Probabilitas Air',
                    'en' => 'F.Q.A.M Feyn-Qlattice Automation Modelling : Python Module of Machine Learning for Data Classification in Water Probability',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2023,
                'title' => [
                    'id' => 'Prediksi Waktu Kelulusan Berdasarkan Aktivitas Non-Akademik Menggunakan Naive Bayes',
                    'en' => 'The Time Based Graduates Predictions on Non-Academic Activities using Naive Bayes',
                ],
                'conference_name' => [
                    'id' => 'Workshop Internasional tentang Kecerdasan Buatan dan Pemrosesan Gambar (IWAIIP)',
                    'en' => 'International Workshop on Artificial Intelligence and Image Processing (IWAIIP)',
                ],
                'location' => [
                    'id' => 'Indonesia',
                    'en' => 'Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Prediksi Waktu Kelulusan Berdasarkan Aktivitas Non-Akademik Menggunakan Naive Bayes',
                    'en' => 'The Time Based Graduates Predictions on Non-Academic Activities using Naive Bayes',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2023,
                'title' => [
                    'id' => 'Pemetaan Jaringan Legislasi Berbasis Topik dengan ChatGPT dan NEO4J',
                    'en' => 'Topic-Based Legislation Network Mapping with Chatgpt and NEO4J',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Internasional tentang Informatika, Multimedia, Cyber dan Sistem Informasi (ICIMCIS)',
                    'en' => 'International Conference on Informatics, Multimedia, Cyber and Information System (ICIMCIS)',
                ],
                'location' => [
                    'id' => 'Indonesia',
                    'en' => 'Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Pemetaan Jaringan Legislasi Berbasis Topik dengan ChatGPT dan NEO4J',
                    'en' => 'Topic-Based Legislation Network Mapping with Chatgpt and NEO4J',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2024,
                'title' => [
                    'id' => 'Mengeksplorasi Store-Carry-Forward Networking pada Diseminasi Peringatan Darurat Sistem Rel Terintegrasi Jakarta',
                    'en' => 'Exploring Store-Carry-Forward Networking on Emergency Alert Dissemination of Jakarta\'s Integrated Rail System',
                ],
                'conference_name' => [
                    'id' => 'Konferensi Internasional tentang Informatika, Multimedia, Cyber dan Sistem Informasi (ICIMCIS)',
                    'en' => 'International Conference on Informatics, Multimedia, Cyber and Information System (ICIMCIS)',
                ],
                'location' => [
                    'id' => 'Indonesia',
                    'en' => 'Indonesia',
                ],
                'role' => 'Presenter',
                'paper_title' => [
                    'id' => 'Mengeksplorasi Store-Carry-Forward Networking pada Diseminasi Peringatan Darurat Sistem Rel Terintegrasi Jakarta',
                    'en' => 'Exploring Store-Carry-Forward Networking on Emergency Alert Dissemination of Jakarta\'s Integrated Rail System',
                ],
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
        ];

        foreach ($conferences as $conference) {
            $personalInfo->conferences()->create($conference);
        }
    }
}
