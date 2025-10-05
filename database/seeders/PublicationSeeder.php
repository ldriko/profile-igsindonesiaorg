<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class PublicationSeeder extends Seeder
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

        $publications = [
            [
                'year' => 2025,
                'title' => 'Improving Classification Accuracy of Breast Ultrasound Images Using Wasserstein GAN for Synthetic Data Augmentation',
                'publication_category_id' => 2,
                'publication_type' => 'Journal',
                'journal_name' => 'Journal of Robotics and Control (JRC)',
                'doi' => 'https://doi.org/10.18196/jrc.v6i4.25075',
                'url' => 'https://journal.umy.ac.id/index.php/jrc/article/view/25075/11747',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q2',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2025,
                'title' => 'Enhancing Non-Formal Learning Certificate Classification with Text Augmentation: A Comparison of Character, Token, and Semantic Approaches',
                'publication_category_id' => 3,
                'publication_type' => 'Journal',
                'journal_name' => 'Interdisciplinary Journal of Information, Knowledge, and Management (IJIKM)',
                'doi' => 'https://doi.org/10.28945/5525',
                'url' => 'https://www.informingscience.org/Publications/5525?Type=ConferenceProceedingsandConferenceID%3D47',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q3',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2025,
                'title' => 'Optimization of 3D printing parameters for carbon fiber reinforced polymer (CFRP) material: Impact and hardness analysis using Taguchi method',
                'publication_category_id' => 2,
                'publication_type' => 'Journal',
                'journal_name' => 'Materials',
                'doi' => 'https://doi.org/10.1016/j.rinma.2025.100727',
                'url' => 'https://www.sciencedirect.com/science/article/pii/S2590048X2500072X',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q2',
                'author_role' => '4th Author',
            ],
            [
                'year' => 2025,
                'title' => 'Optimization of Multi-Section and Partially Augmented Magnetic Resonance Imaging (MRI) Images for Brain Tumor Classification Using ResNet-50',
                'publication_category_id' => 2,
                'publication_type' => 'Journal',
                'journal_name' => 'CommIT (Communication and Information Technology) Journal',
                'doi' => 'https://doi.org/10.21512/commit.v19i1.12467',
                'url' => 'https://journal.binus.ac.id/index.php/commit/article/view/12467/5408',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q3',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2025,
                'title' => 'Enhanced Human Hitting Movement Recognition Using Motion History Image and Approximated Ellipse Techniques',
                'publication_category_id' => 2,
                'publication_type' => 'Journal',
                'journal_name' => 'International Journal of Robotics and Control Systems (IJRCS)',
                'doi' => 'https://doi.org/10.31763/ijrcs.v5i1.1599',
                'url' => 'https://pubs2.ascee.org/index.php/IJRCS/article/view/1599/pdf',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q3',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2024,
                'title' => 'Impact of Smart Greenhouse Using IoT for Enhanced Quality of Plant Growth',
                'publication_category_id' => 2,
                'publication_type' => 'Journal',
                'journal_name' => 'International Journal of Robotics and Control Systems (IJRCS)',
                'doi' => 'https://doi.org/10.31763/ijrcs.v4i3.1277',
                'url' => 'https://pubs2.ascee.org/index.php/IJRCS/article/view/1277/pdf',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q3',
                'author_role' => 'Corresponding Author',
            ],
            [
                'year' => 2024,
                'title' => 'Abnormality Determination of Spermatozoa Motility Using Gaussian Mixture Model and Matching-based Algorithm',
                'publication_category_id' => 2,
                'publication_type' => 'Journal',
                'journal_name' => 'Journal of Robotics and Control (JRC)',
                'doi' => 'https://doi.org/10.18196/jrc.v5i1.20686',
                'url' => 'https://journal.umy.ac.id/index.php/jrc/article/view/20686/8920',
                'publisher' => null,
                'index_type' => 'Scopus',
                'rank' => 'Q2',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2024,
                'title' => 'Detection of Abnormal Human Sperm Morphology Using Support Vector Machine (SVM) Classification',
                'publication_category_id' => 3,
                'publication_type' => 'Journal',
                'journal_name' => 'Information Technology International Journal',
                'doi' => 'https://doi.org/10.33005/itij.v2i2.36',
                'url' => 'https://itijournal.org/index.php/ITIJ/article/view/36/16',
                'publisher' => null,
                'index_type' => 'Sinta',
                'rank' => 'Q4',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2024,
                'title' => 'Analysis of Factors Affecting Minimum Salary of Workers in Indonesia Using Binary Logistic Regression',
                'publication_category_id' => 3,
                'publication_type' => 'Journal',
                'journal_name' => 'Information Technology International Journal',
                'doi' => 'https://doi.org/10.33005/itij.v2i1.20',
                'url' => 'https://itijournal.org/index.php/ITIJ/article/view/20/14',
                'publisher' => null,
                'index_type' => 'Sinta',
                'rank' => 'Q4',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2024,
                'title' => 'Long Short Term Memory Method and Social Media Sentiment Analysis for Stock Price Prediction',
                'publication_category_id' => 3,
                'publication_type' => 'Journal',
                'journal_name' => 'Information Technology International Journal',
                'doi' => 'https://doi.org/10.33005/itij.v2i1.13',
                'url' => 'https://itijournal.org/index.php/ITIJ/article/view/13/9',
                'publisher' => null,
                'index_type' => 'Sinta',
                'rank' => 'Q4',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2023,
                'title' => 'Wireframe Creation on SIOBEL Application User Interface Design using User Centered Design',
                'publication_category_id' => 3,
                'publication_type' => 'Proceeding',
                'journal_name' => 'Information Technology International Journal',
                'doi' => 'https://doi.org/10.33005/itij.v2i1.13',
                'url' => 'https://itijournal.org/index.php/ITIJ/article/view/12/7',
                'publisher' => null,
                'index_type' => 'Sinta',
                'rank' => 'Q4',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2020,
                'title' => 'QR-Barcode Application for Barrier Gate Opener based on Android',
                'publication_category_id' => 8,
                'publication_type' => 'Proceeding',
                'journal_name' => 'International Journal of Computer, Network Security and Information System',
                'doi' => 'https://doi.org/10.33005/ijconsist.v2i1.37',
                'url' => 'https://ijconsist.org/index.php/ijconsist/article/view/37/32',
                'publisher' => null,
                'index_type' => 'Other',
                'rank' => 'N/A',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2020,
                'title' => 'Daily Forecasting for Antam\'s Certified Gold Bullion Prices in 2018-2020 using Polynomial Regression and Double Exponential Smoothing',
                'publication_category_id' => 8,
                'publication_type' => 'Proceeding',
                'journal_name' => 'Journal of International Conference Proceedings',
                'doi' => 'https://doi.org/10.32535/jicp.v3i4.1009',
                'url' => 'http://ejournal.aibpm.org/index.php/JICP/article/view/1009/942',
                'publisher' => null,
                'index_type' => 'Other',
                'rank' => 'N/A',
                'author_role' => '1st Author',
            ],
            [
                'year' => 2021,
                'title' => 'Geometric Brownian Motion and Value at Risk For Analysis Stock Price Of Bumi Serpong Damai Ltd',
                'publication_category_id' => 8,
                'publication_type' => 'Proceeding',
                'journal_name' => 'Internasional Journal of Data Science, Engineering, and Anaylitics',
                'doi' => 'https://doi.org/10.33005/ijdasea.v1i1.3',
                'url' => 'http://ijdasea.upnjatim.ac.id/index.php/ijdasea/article/view/3/2',
                'publisher' => null,
                'index_type' => 'Sinta',
                'rank' => 'N/A',
                'author_role' => '1st Author',
            ],
        ];

        foreach ($publications as $publication) {
            $personalInfo->publications()->create($publication);
        }
    }
}
