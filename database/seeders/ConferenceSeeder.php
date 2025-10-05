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
                'title' => 'Automated analysis of human sperm number and concentration (oligospermia) using OTSU threshold method and labelling',
                'conference_name' => 'IOP Conference Series: Materials Science and Engineering 105',
                'location' => 'Yogyakarta, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Automated analysis of human sperm number and concentration (oligospermia) using OTSU threshold method and labelling',
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2016,
                'title' => 'Teratozoospermia Classification Based on the Shape of Sperm Head Using OTSU Threshold and Decision Tree',
                'conference_name' => 'MATEC Web of Conferences 58',
                'location' => 'Denpasar, Bali, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Teratozoospermia Classification Based on the Shape of Sperm Head Using OTSU Threshold and Decision Tree',
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2018,
                'title' => 'Counting the Amount of Spermatozoa Active Perframe Video Using Morphology and Local Adaptive Threshold',
                'conference_name' => 'Nusantara Science and Technology Proceedings',
                'location' => 'UPN Veteran Jawa Timur, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Counting the Amount of Spermatozoa Active Perframe Video Using Morphology and Local Adaptive Threshold',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2019,
                'title' => 'New Method For Classification Of Spermatozoa Morphology Abnormalities Based On Macroscopic Video Of Human Semen',
                'conference_name' => 'International Seminar on Application for Technology of Information and Communication (iSemantic)',
                'location' => 'Semarang, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'New Method For Classification Of Spermatozoa Morphology Abnormalities Based On Macroscopic Video Of Human Semen',
                'url' => 'https://doi.org/10.31763/ijrcs.v5i1.1599',
            ],
            [
                'year' => 2019,
                'title' => 'Rancang Bangun Aplikasi INformatif Penyakit Kronis Berbasis Android',
                'conference_name' => 'National Seminar SANTIKA 1st',
                'location' => 'Informatika, UPN Veteran Jawa Timur',
                'role' => 'Presenter',
                'paper_title' => 'Rancang Bangun Aplikasi INformatif Penyakit Kronis Berbasis Android',
                'url' => 'https://doi.org/10.11594/nstp.2024.4136',
            ],
            [
                'year' => 2020,
                'title' => 'The Effects of Self-Efficacy on the Competency of Cadets in Aviation Polytechnic of Surabaya',
                'conference_name' => 'International Joint Conference on Science and Engineering (IJCSE 2020)',
                'location' => 'Semarang, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'The Effects of Self-Efficacy on the Competency of Cadets in Aviation Polytechnic of Surabaya',
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2020,
                'title' => 'Design and Development of Chatbot Using Dialog Flow in Surya Sembada PDAM Surabaya City',
                'conference_name' => 'International Joint Conference on Science and Engineering (IJCSE 2020)',
                'location' => 'Semarang, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Design and Development of Chatbot Using Dialog Flow in Surya Sembada PDAM Surabaya City',
                'url' => 'https://scholar.google.com/citations?view_op=view_citation&hl=id&user=-KS9t4QAAAAJ&cstart=20&pagesize=80&sortby=pubdate&citation_for_view=-KS9t4QAAAAJ:pqnbT2bcN3wC',
            ],
            [
                'year' => 2020,
                'title' => 'Reverse Image Search Analysis Based on Pre-Trained Convolutional Neural Network Model',
                'conference_name' => '6th Information Technology International Seminar (ITIS)',
                'location' => 'Surabaya, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Reverse Image Search Analysis Based on Pre-Trained Convolutional Neural Network Model',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2020,
                'title' => 'Levenshtein Distance Algorithm Analysis on Enrollment and Disposition of Letters Application',
                'conference_name' => '6th Information Technology International Seminar (ITIS)',
                'location' => 'Surabaya, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Levenshtein Distance Algorithm Analysis on Enrollment and Disposition of Letters Application',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2021,
                'title' => 'Profile Matching Algorithm in Determining the Position of Colleagues',
                'conference_name' => '7th Information Technology International Seminar (ITIS)',
                'location' => 'Surabaya, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Profile Matching Algorithm in Determining the Position of Colleagues',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2021,
                'title' => 'Grasping Adversarial Attacks on Deep Convolutional Neural Networks for Cholangiocarcinoma Classification',
                'conference_name' => 'International Conference on e-Health and Bioengineering (EHB)',
                'location' => 'Surabaya, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Grasping Adversarial Attacks on Deep Convolutional Neural Networks for Cholangiocarcinoma Classification',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2021,
                'title' => 'Twitter Sentiment Analysis as an Evaluation and Service Base On Python Textblob',
                'conference_name' => 'International Conference on Informatics, Multimedia, Cyber and Information System (ICIMCIS)',
                'location' => 'Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Twitter Sentiment Analysis as an Evaluation and Service Base On Python Textblob',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2022,
                'title' => 'F.Q.A.M Feyn-Qlattice Automation Modelling : Python Module of Machine Learning for Data Classification in Water Probability',
                'conference_name' => '8th Information Technology International Seminar (ITIS)',
                'location' => 'Surabaya, Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'F.Q.A.M Feyn-Qlattice Automation Modelling : Python Module of Machine Learning for Data Classification in Water Probability',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2023,
                'title' => 'The Time Based Graduates Predictions on Non-Academic Activities using Naive Bayes',
                'conference_name' => 'International Workshop on Artificial Intelligence and Image Processing (IWAIIP)',
                'location' => 'Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'The Time Based Graduates Predictions on Non-Academic Activities using Naive Bayes',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2023,
                'title' => 'Topic-Based Legislation Network Mapping with Chatgpt and NEO4J',
                'conference_name' => 'International Conference on Informatics, Multimedia, Cyber and Information System (ICIMCIS)',
                'location' => 'Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Topic-Based Legislation Network Mapping with Chatgpt and NEO4J',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
            [
                'year' => 2024,
                'title' => 'Exploring Store-Carry-Forward Networking on Emergency Alert Dissemination of Jakarta\'s Integrated Rail System',
                'conference_name' => 'International Conference on Informatics, Multimedia, Cyber and Information System (ICIMCIS)',
                'location' => 'Indonesia',
                'role' => 'Presenter',
                'paper_title' => 'Exploring Store-Carry-Forward Networking on Emergency Alert Dissemination of Jakarta\'s Integrated Rail System',
                'url' => 'https://doi.org/10.11594/nstp.2021.0942',
            ],
        ];

        foreach ($conferences as $conference) {
            $personalInfo->conferences()->create($conference);
        }
    }
}
