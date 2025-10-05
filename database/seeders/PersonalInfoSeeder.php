<?php

namespace Database\Seeders;

use App\Models\PersonalInfo;
use Illuminate\Database\Seeder;

class PersonalInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PersonalInfo::create([
            'name' => 'Dr. Ir. I Gede Susrama Mas Diyasa, ST., MT., IPU',
            'academic_titles' => 'Dr. Ir.',
            'nidn' => '0019067008',
            'nip' => '197006192021211009',
            'birth_place' => 'Bungkulan',
            'birth_date' => '1970-06-19',
            'gender' => 'male',
            'marital_status' => 'Get married',
            'functional_position' => 'Lektor',
            'structural_position' => 'Vice Dean I',
            'academic_position' => 'Lecturer in Master of Information Technology-Faculty of Computer Science – UPN "Veteran" Jawa Timur',
            'institution' => 'UPN "Veteran" Jawa Timur',
            'address_office' => 'Jalan Rungkut Madya Gunung Anyar Surabaya',
            'address_home' => 'Jalan Gunung Anyar Jaya III, Perum. New Syandana A9 Surabaya',
            'phone' => '0318796257',
            'email' => 'igsusrama.if@upnjatim.ac.id',
            'produced_graduates_s1' => 79,
            'produced_graduates_s2' => 2,
            'produced_graduates_s3' => 1,
            'scopus_id' => '57189690019',
            'sinta_id' => '5977757',
            'google_scholar_id' => '-KS9t4QAAAAJ',
        ]);
    }
}
