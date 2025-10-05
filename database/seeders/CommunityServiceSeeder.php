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
                'title' => [
                    'id' => 'Implementasi Aplikasi Sintaranum-19 Di Pelabuhan Ketapang Gilimanuk',
                    'en' => 'Implementation of Sintaranum-19 Application at Ketapang Gilimanuk Port',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Pengabdian Masyarakat Mandiri',
                    'en' => 'Independent Community Service',
                ],
                'fund_amount' => 43000000,
            ],
            [
                'year' => 2021,
                'title' => [
                    'id' => 'Pembelajaran Internet Of Things Dengan Modul Trainer Esp32 Di SMKN 1 Dlanggu Kabupaten Mojokerto',
                    'en' => 'Internet of Things Learning With Esp32 Trainer Module at SMKN 1 Dlanggu, Mojokerto Regency',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Pengabdian Masyarakat Mandiri UPN Veteran Jatim - Pemanfaatan Iptek Bagi Masyarakat (PIKAT)',
                    'en' => 'Independent Community Service UPN Veteran East Java - Science and Technology Utilization for Society (PIKAT)',
                ],
                'fund_amount' => 6000000,
            ],
            [
                'year' => 2021,
                'title' => [
                    'id' => 'Pelatihan Internet Of Things Untuk Keperluan Di Kantor MTC',
                    'en' => 'Internet of Things Training for MTC Office Needs',
                ],
                'role' => 'Leader',
                'funding_source' => [
                    'id' => 'Pengabdian Masyarakat Dana Fakultas Ilmu Komputer',
                    'en' => 'Community Service Faculty of Computer Science Fund',
                ],
                'fund_amount' => 5000000,
            ],
        ];

        foreach ($communityServices as $communityService) {
            $personalInfo->communityServices()->create($communityService);
        }
    }
}
