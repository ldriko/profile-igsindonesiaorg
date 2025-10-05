<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class CommunityServiceSeeder extends Seeder
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

        $communityServices = [
            [
                'year' => 2020,
                'title' => 'Implementasi Aplikasi Sintaranum-19 Di Pelabuhan Ketapang Gilimanuk',
                'role' => 'Leader',
                'funding_source' => 'Pengabdian Masyarakat Mandiri',
                'fund_amount' => 43000000,
            ],
            [
                'year' => 2021,
                'title' => 'Pembelajaran Internet Of Things Dengan Modul Trainer Esp32 Di Smkn 1 Dlanggu Kabupaten Mojokerto',
                'role' => 'Leader',
                'funding_source' => 'Pengabdian Masyarakat Mandiri UPN Veteran Jatim - Pemanfaatan Iptek Bagi Masyarakat (PIKAT)',
                'fund_amount' => 6000000,
            ],
            [
                'year' => 2021,
                'title' => 'Pelatihan Internet Of Things Untuk Keperluan Di Kantor MTC',
                'role' => 'Leader',
                'funding_source' => 'Pengabdian Masyarakat Dana Fakultas Ilmu Komputer',
                'fund_amount' => 5000000,
            ],
        ];

        foreach ($communityServices as $communityService) {
            $personalInfo->communityServices()->create($communityService);
        }
    }
}
