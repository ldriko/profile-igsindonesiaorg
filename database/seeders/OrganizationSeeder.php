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
                'organization_name' => 'Indonesia Artificial Intelligence Society',
                'role' => 'Litbang',
                'membership_type' => 'Scientific',
                'start_year' => 2021,
                'end_year' => null,
            ],
            [
                'organization_name' => 'APTIKOM (Association of Higher Education in Informatics and Computer Science)',
                'role' => 'Member',
                'membership_type' => 'Professional',
                'start_year' => 2016,
                'end_year' => null,
            ],
            [
                'organization_name' => 'APIGS Indonesia (Indonesian Association of Informatics, Graphics, and Data Science Practitioners)',
                'role' => 'Leader',
                'membership_type' => 'Professional',
                'start_year' => 2022,
                'end_year' => null,
            ],
            [
                'organization_name' => 'Indonesian Computer, Electronics and Instrumentation Support Society (IndoCEISS)',
                'role' => 'Department of Certification',
                'membership_type' => 'Professional',
                'start_year' => 2024,
                'end_year' => null,
            ],
            [
                'organization_name' => 'Asesor LAM INFOKOM (Assessor of the Computer Informatics Management Accreditation Institute)',
                'role' => 'Assessor',
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
