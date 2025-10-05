<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            PersonalInfoSeeder::class,
            EducationSeeder::class,
            TrainingSeeder::class,
            TeachingExperienceSeeder::class,
            TeachingMaterialSeeder::class,
            ResearchSeeder::class,
            CommunityServiceSeeder::class,
            PublicationCategorySeeder::class,
            PublicationSeeder::class,
            BookWritingSeeder::class,
            ConferenceSeeder::class,
            IntellectualPropertySeeder::class,
            PolicyExperienceSeeder::class,
            InstitutionPositionSeeder::class,
            AwardSeeder::class,
            OrganizationSeeder::class,
            LinkSeeder::class,
        ]);
    }
}
