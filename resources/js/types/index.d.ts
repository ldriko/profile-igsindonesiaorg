export interface Auth {
    user: User;
}

export interface SharedData {
    name: string;
    quote: { message: string; author: string };
    auth: Auth;
    [key: string]: unknown;
}

export interface User {
    id: number;
    name: string;
    email: string;
    avatar?: string;
    email_verified_at: string | null;
    created_at: string;
    updated_at: string;
    [key: string]: unknown; // This allows for additional properties...
}

/**
 * Translatable field type for models with multi-language support
 * Fields using this type store translations as { id: string, en: string }
 */
export interface Translatable {
    id: string;
    en: string;
}

/**
 * Optional translatable field type
 */
export interface OptionalTranslatable {
    id?: string;
    en?: string;
}

/**
 * Education model with translatable fields
 */
export interface Education {
    id: number;
    degree: string;
    institution: string;
    year: number;
    department: Translatable;
    thesis_title: Translatable;
}

/**
 * Research model with translatable fields
 */
export interface Research {
    id: number;
    year: number;
    title: Translatable;
    funding_source: Translatable;
    scheme: Translatable;
}

/**
 * Publication model (no translatable fields)
 */
export interface Publication {
    id: number;
    personal_info_id: number;
    publication_category_id: number;
    year: number;
    title: string;
    publication_type: string;
    journal_name: string;
    doi: string;
    url: string;
    publisher: string;
    index_type: string;
    rank: string;
    author_role: string;
}

/**
 * Award model with translatable fields
 */
export interface Award {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    organization: Translatable;
    description: Translatable;
}

/**
 * BookWriting model with translatable fields
 */
export interface BookWriting {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    publisher: Translatable;
    isbn: string;
    type: string;
    authors: string;
    role: string;
    url: string;
}

/**
 * Conference model with translatable fields
 */
export interface Conference {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    conference_name: Translatable;
    location: Translatable;
    role: string;
    paper_title: Translatable;
    url: string;
}

/**
 * CommunityService model with translatable fields
 */
export interface CommunityService {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    funding_source: Translatable;
}

/**
 * InstitutionPosition model with translatable fields
 */
export interface InstitutionPosition {
    id: number;
    personal_info_id: number;
    position: Translatable;
    institution: Translatable;
    description: Translatable;
    start_year: number;
    end_year?: number | null;
}

/**
 * IntellectualProperty model with translatable fields
 */
export interface IntellectualProperty {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    registration_number: string;
    type: string;
}

/**
 * Organization model with translatable fields
 */
export interface Organization {
    id: number;
    personal_info_id: number;
    organization_name: Translatable;
    role: Translatable;
    start_year: number;
    end_year?: number | null;
}

/**
 * PolicyExperience model with translatable fields
 */
export interface PolicyExperience {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    role: Translatable;
    institution: Translatable;
    description: Translatable;
}

/**
 * TeachingExperience model with translatable fields
 */
export interface TeachingExperience {
    id: number;
    personal_info_id: number;
    course_name: Translatable;
    program: Translatable;
    year: number;
    semester: string;
}

/**
 * TeachingMaterial model with translatable fields
 */
export interface TeachingMaterial {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    program: Translatable;
    type: Translatable;
    url?: string | null;
}

/**
 * Training model with translatable fields
 */
export interface Training {
    id: number;
    personal_info_id: number;
    year: number;
    title: Translatable;
    type: string;
    organizer: Translatable;
    duration_hours: number;
    period: string;
    url: string;
}

/**
 * PublicationCategory model with translatable fields
 */
export interface PublicationCategory {
    id: number;
    parent_id?: number | null;
    order: number;
    title: Translatable;
    code: string;
    description: Translatable;
    is_active: boolean;
}
