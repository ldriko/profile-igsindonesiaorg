<?php

namespace App\Http\Controllers;

use App\Models\BookWriting;
use App\Models\CommunityService;
use App\Models\Conference;
use App\Models\Education;
use App\Models\InstitutionPosition;
use App\Models\IntellectualProperty;
use App\Models\Organization;
use App\Models\PersonalInfo;
use App\Models\PolicyExperience;
use App\Models\Publication;
use App\Models\Research;
use App\Models\TeachingExperience;
use App\Models\TeachingMaterial;
use App\Models\Training;
use Illuminate\Database\Eloquent\Collection;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{
    private function getPersonalInfo(): ?array
    {
        $personalInfo = PersonalInfo::first();

        return $personalInfo ? [
            'name' => $personalInfo->name,
            'picture' => $personalInfo->picture,
            'short_description' => $personalInfo->short_description,
            'institution' => $personalInfo->institution,
            'academic_position' => $personalInfo->academic_position,
            'scopus_id' => $personalInfo->scopus_id,
            'sinta_id' => $personalInfo->sinta_id,
            'google_scholar_id' => $personalInfo->google_scholar_id,
        ] : null;
    }

    private function getCounts(): array
    {
        return [
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
        ];
    }

    private function formatItems(Collection $items, string $type): array
    {
        return $items->map(function ($item) use ($type) {
            $formatted = [
                'id' => $item->id,
                'title' => $this->getItemTitle($item, $type),
                'description' => $this->getItemDescription($item, $type),
                'date' => $this->getItemDate($item, $type),
            ];

            // Add additional fields based on type
            return array_merge($formatted, $this->getTypeSpecificFields($item, $type));
        })->toArray();
    }

    private function getItemTitle($item, string $type): string
    {
        return match ($type) {
            'publications' => $item->title,
            'book_writings' => $item->title ?? 'Untitled',
            'conferences' => $item->title ?? $item->conference_name ?? 'Conference',
            'researches' => $item->title ?? 'Research Project',
            'teaching_materials' => $item->title ?? 'Teaching Material',
            'educations' => $item->level . ' - ' . $item->institution,
            'institution_positions' => $item->position . ' at ' . $item->institution,
            'organizations' => $item->organization_name ?? 'Organization',
            'community_services' => $item->title ?? 'Community Service',
            'policy_experiences' => $item->title ?? $item->role ?? 'Policy Experience',
            'intellectual_properties' => $item->title ?? 'IP',
            'teaching_experiences' => $item->course_name . ' at ' . $item->institution,
            'trainings' => $item->title ?? 'Training',
            default => 'Item',
        };
    }

    private function getItemDescription($item, string $type): string
    {
        return match ($type) {
            'publications' => ($item->journal_name ?? '') . ' (' . $item->year . ')',
            'book_writings' => ($item->publisher ?? '') . ' (' . ($item->year ?? 'N/A') . ')',
            'conferences' => ($item->location ?? '') . ' - ' . ($item->year ?? 'N/A'),
            'researches' => ($item->funding_source ?? '') . ' (' . ($item->year ?? 'N/A') . ')',
            'educations' => $item->department ?? '',
            'institution_positions' => $item->description ?? '',
            'organizations' => $item->role ?? '',
            'community_services' => $item->role ?? '',
            'policy_experiences' => $item->institution ?? '',
            'intellectual_properties' => $item->type ?? $item->registration_number ?? '',
            'teaching_experiences' => $item->academic_year ?? '',
            'teaching_materials' => $item->program ?? '',
            'trainings' => $item->organizer ?? '',
            default => '',
        };
    }

    private function getItemDate($item, string $type): string
    {
        // For educations, use graduation_year
        if ($type === 'educations' && isset($item->graduation_year)) {
            return (string) $item->graduation_year;
        }

        // For institution_positions and organizations, use start_year and end_year
        if (in_array($type, ['institution_positions', 'organizations'])) {
            $start = $item->start_year ?? null;
            $end = $item->end_year ?? null;
            
            if ($start && $end) {
                return $start . ' - ' . $end;
            }
            
            if ($start) {
                return $start . ' - Present';
            }
        }

        // For teaching_experiences, use academic_year
        if ($type === 'teaching_experiences' && isset($item->academic_year)) {
            return $item->academic_year;
        }

        $year = $item->year ?? null;
        $startDate = $item->start_date ?? $item->date ?? null;
        $endDate = $item->end_date ?? null;

        if ($startDate && $endDate) {
            return date('F Y', strtotime($startDate)) . ' - ' . date('F Y', strtotime($endDate));
        }

        if ($startDate) {
            return date('F d, Y', strtotime($startDate));
        }

        if ($year) {
            return (string) $year;
        }

        return date('Y');
    }

    private function getTypeSpecificFields($item, string $type): array
    {
        return match ($type) {
            'publications' => [
                'publication_type' => $item->publication_type ?? null,
                'doi' => $item->doi ?? null,
                'url' => $item->url ?? null,
                'index_type' => $item->index_type ?? null,
            ],
            'conferences' => [
                'location' => $item->location ?? null,
                'role' => $item->role ?? null,
            ],
            'researches' => [
                'funding_source' => $item->funding_source ?? null,
                'fund_amount' => $item->fund_amount ?? null,
            ],
            default => [],
        };
    }

    public function bookWritings(): Response
    {
        $items = BookWriting::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Book Writings',
            'category_items' => $this->formatItems($items, 'book_writings'),
        ]);
    }

    public function communityServices(): Response
    {
        $items = CommunityService::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Community Services',
            'category_items' => $this->formatItems($items, 'community_services'),
        ]);
    }

    public function conferences(): Response
    {
        $items = Conference::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Conferences',
            'category_items' => $this->formatItems($items, 'conferences'),
        ]);
    }

    public function education(): Response
    {
        $items = Education::orderBy('graduation_year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Education',
            'category_items' => $this->formatItems($items, 'educations'),
        ]);
    }

    public function institutionPositions(): Response
    {
        $items = InstitutionPosition::orderBy('start_year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Institution Positions',
            'category_items' => $this->formatItems($items, 'institution_positions'),
        ]);
    }

    public function intellectualProperties(): Response
    {
        $items = IntellectualProperty::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Intellectual Properties',
            'category_items' => $this->formatItems($items, 'intellectual_properties'),
        ]);
    }

    public function organizations(): Response
    {
        $items = Organization::orderBy('start_year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Organizations',
            'category_items' => $this->formatItems($items, 'organizations'),
        ]);
    }

    public function policyExperiences(): Response
    {
        $items = PolicyExperience::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Policy Experiences',
            'category_items' => $this->formatItems($items, 'policy_experiences'),
        ]);
    }

    public function publications(): Response
    {
        $items = Publication::with('publicationCategory')->orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Publications',
            'category_items' => $this->formatItems($items, 'publications'),
        ]);
    }

    public function research(): Response
    {
        $items = Research::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Research',
            'category_items' => $this->formatItems($items, 'researches'),
        ]);
    }

    public function teachingExperiences(): Response
    {
        $items = TeachingExperience::orderBy('academic_year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Teaching Experiences',
            'category_items' => $this->formatItems($items, 'teaching_experiences'),
        ]);
    }

    public function teachingMaterials(): Response
    {
        $items = TeachingMaterial::orderBy('year', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Teaching Materials',
            'category_items' => $this->formatItems($items, 'teaching_materials'),
        ]);
    }

    public function trainings(): Response
    {
        $items = Training::orderBy('created_at', 'desc')->get();

        return Inertia::render('index', [
            'personal_info' => $this->getPersonalInfo(),
            ...$this->getCounts(),
            'selected_category' => 'Trainings',
            'category_items' => $this->formatItems($items, 'trainings'),
        ]);
    }
}
