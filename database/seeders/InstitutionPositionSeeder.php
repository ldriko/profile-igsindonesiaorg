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
                'position' => [
                    'id' => 'Ka. LSP',
                    'en' => 'Head of LSP',
                ],
                'institution' => [
                    'id' => 'UPN "Veteran" Jawa Timur (LP3M)',
                    'en' => 'UPN "Veteran" Jawa Timur (LP3M)',
                ],
                'start_year' => 2019,
                'end_year' => 2020,
                'description' => [
                    'id' => 'Kepala Lembaga Sertifikasi Profesi (LSP) di UPN Veteran Jawa Timur',
                    'en' => 'Head of the Professional Certification Institution (LSP) at UPN Veteran Jawa Timur',
                ],
            ],
            [
                'position' => [
                    'id' => 'Koorprodi (Koordinator Program Studi)',
                    'en' => 'Study Program Coordinator',
                ],
                'institution' => [
                    'id' => 'Program Studi Sains Data - Fakultas Ilmu Komputer, UPN Veteran Jawa Timur',
                    'en' => 'Data Science Program - Faculty of Computer Science, UPN Veteran Jawa Timur',
                ],
                'start_year' => 2020,
                'end_year' => 2022,
                'description' => [
                    'id' => 'Mengkoordinasikan Program Studi Sains Data di Fakultas Ilmu Komputer',
                    'en' => 'Coordinated the Data Science Program at the Faculty of Computer Science',
                ],
            ],
            [
                'position' => [
                    'id' => 'Wakil Dekan I (Akademik)',
                    'en' => 'Vice Dean I (Academic)',
                ],
                'institution' => [
                    'id' => 'Fakultas Ilmu Komputer, UPN Veteran Jawa Timur',
                    'en' => 'Faculty of Computer Science, UPN Veteran Jawa Timur',
                ],
                'start_year' => 2022,
                'end_year' => null,
                'description' => [
                    'id' => 'Bertanggung jawab atas bidang akademik di Fakultas Ilmu Komputer',
                    'en' => 'Responsible for academic matters at the Faculty of Computer Science',
                ],
            ],
        ];

        foreach ($institutionPositions as $institutionPosition) {
            $personalInfo->institutionPositions()->create($institutionPosition);
        }
    }
}
