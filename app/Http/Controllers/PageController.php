<?php

namespace App\Http\Controllers;

use App\Models\BookWriting;
use App\Models\CommunityService;
use App\Models\Conference;
use App\Models\Education;
use App\Models\InstitutionPosition;
use App\Models\IntellectualProperty;
use App\Models\Organization;
use App\Models\PolicyExperience;
use App\Models\Publication;
use App\Models\Research;
use App\Models\TeachingExperience;
use App\Models\TeachingMaterial;
use App\Models\Training;
use Inertia\Inertia;

class PageController extends Controller
{
    public function index()
    {
        return Inertia::render('index', [
            'book_writings_count' => BookWriting::count(),
            'community_services_count' => CommunityService::count(),
            'conferences_count' => Conference::count(),
            'educations_count' => Education::count(),
            'institution_positions_count' => InstitutionPosition::count(),
            'intellectual_properties_count' => IntellectualProperty::count(),
            'organizations_count' => Organization::count(),
            'policy_experiences_count' => PolicyExperience::count(),
            'publications_count' => Publication::count(),
            'researches_count' => Research::count(),
            'teaching_experiences_count' => TeachingExperience::count(),
            'teaching_materials_count' => TeachingMaterial::count(),
            'trainings_count' => Training::count(),
        ]);
    }
}
