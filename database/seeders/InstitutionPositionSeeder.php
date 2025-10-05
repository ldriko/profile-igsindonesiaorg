<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class InstitutionPositionSeeder extends Seeder
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

        $institutionPositions = [
            [
                'position' => 'Ka. LSP',
                'institution' => 'UPN "Veteran" Jawa Timur (LP3M)',
                'start_year' => 2019,
                'end_year' => 2020,
                'description' => 'Head of the LSP (Lembaga Sertifikasi Profesi) at UPN Veteran Jawa Timur',
            ],
            [
                'position' => 'Koorprodi (Study Program Coordinator)',
                'institution' => 'Data Science Program - Faculty of Computer Science, UPN Veteran Jawa Timur',
                'start_year' => 2020,
                'end_year' => 2022,
                'description' => 'Coordinated the Data Science Program at the Faculty of Computer Science',
            ],
            [
                'position' => 'Vice Dean I (Academic)',
                'institution' => 'Faculty of Computer Science, UPN Veteran Jawa Timur',
                'start_year' => 2022,
                'end_year' => null,
                'description' => 'Responsible for academic matters at the Faculty of Computer Science',
            ],
        ];

        foreach ($institutionPositions as $institutionPosition) {
            $personalInfo->institutionPositions()->create($institutionPosition);
        }
    }
}
