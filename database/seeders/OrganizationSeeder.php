<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
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

        $organizations = [
            [
                'organization_name' => [
                    'id' => 'Indonesia Artificial Intelligence Society',
                    'en' => 'Indonesia Artificial Intelligence Society',
                ],
                'role' => [
                    'id' => 'Litbang',
                    'en' => 'Research and Development',
                ],
                'membership_type' => 'Scientific',
                'start_year' => 2021,
                'end_year' => null,
            ],
            [
                'organization_name' => [
                    'id' => 'APTIKOM (Asosiasi Perguruan Tinggi Informatika dan Komputer)',
                    'en' => 'APTIKOM (Association of Higher Education in Informatics and Computer Science)',
                ],
                'role' => [
                    'id' => 'Anggota',
                    'en' => 'Member',
                ],
                'membership_type' => 'Professional',
                'start_year' => 2016,
                'end_year' => null,
            ],
            [
                'organization_name' => [
                    'id' => 'APIGS Indonesia (Asosiasi Praktisi Informatika, Grafika, dan Sains Data Indonesia)',
                    'en' => 'APIGS Indonesia (Indonesian Association of Informatics, Graphics, and Data Science Practitioners)',
                ],
                'role' => [
                    'id' => 'Ketua',
                    'en' => 'Leader',
                ],
                'membership_type' => 'Professional',
                'start_year' => 2022,
                'end_year' => null,
            ],
            [
                'organization_name' => [
                    'id' => 'Masyarakat Pendukung Komputer, Elektronika dan Instrumentasi Indonesia (IndoCEISS)',
                    'en' => 'Indonesian Computer, Electronics and Instrumentation Support Society (IndoCEISS)',
                ],
                'role' => [
                    'id' => 'Departemen Sertifikasi',
                    'en' => 'Department of Certification',
                ],
                'membership_type' => 'Professional',
                'start_year' => 2024,
                'end_year' => null,
            ],
            [
                'organization_name' => [
                    'id' => 'Asesor LAM INFOKOM (Asesor Lembaga Akreditasi Manajemen Informatika Komputer)',
                    'en' => 'Asesor LAM INFOKOM (Assessor of the Computer Informatics Management Accreditation Institute)',
                ],
                'role' => [
                    'id' => 'Asesor',
                    'en' => 'Assessor',
                ],
                'membership_type' => 'Professional',
                'start_year' => 2022,
                'end_year' => null,
            ],
        ];

        foreach ($organizations as $organization) {
            $personalInfo->organizations()->create($organization);
        }
    }
}
