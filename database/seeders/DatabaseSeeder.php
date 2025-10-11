<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@igsindonesia.org',
            'password' => Hash::make('.Srimanik123.'),
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
            BlogPostSeeder::class,
        ]);
    }
}
