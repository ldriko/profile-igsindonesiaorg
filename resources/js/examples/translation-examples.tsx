/**
 * Example component demonstrating how to use translations with model data
 * This shows the pattern for when you implement model translations in the frontend
 */

import { useLanguage } from "@/contexts/language-context";
import { createTranslator, getTranslation } from "@/lib/translation";

// Example: Education model with translatable fields
interface Education {
    id: number;
    degree: string; // Non-translatable
    institution: string; // Non-translatable
    year: number; // Non-translatable
    department: {
        // Translatable field
        id: string;
        en: string;
    };
    thesis_title: {
        // Translatable field
        id: string;
        en: string;
    };
}

// Example: Research model with translatable fields
interface Research {
    id: number;
    year: number;
    title: {
        id: string;
        en: string;
    };
    funding_source: {
        id: string;
        en: string;
    };
    scheme: {
        id: string;
        en: string;
    };
}

/**
 * Method 1: Using getTranslation directly
 * Good for single or few translations
 */
export function EducationCard({ education }: { education: Education }) {
    const { locale } = useLanguage();

    return (
        <div className="rounded-lg border p-4">
            <h3 className="text-xl font-semibold">
                {education.degree} - {education.institution}
            </h3>
            <p className="text-muted-foreground">
                {getTranslation(education.department, locale)}
            </p>
            <p className="mt-2 text-sm">
                {getTranslation(education.thesis_title, locale)}
            </p>
            <p className="mt-1 text-xs text-muted-foreground">
                {education.year}
            </p>
        </div>
    );
}

/**
 * Method 2: Using createTranslator
 * More efficient when translating multiple fields
 */
export function ResearchCard({ research }: { research: Research }) {
    const { locale } = useLanguage();
    const translate = createTranslator(locale);

    return (
        <div className="rounded-lg border p-4">
            <h3 className="text-xl font-semibold">{translate(research.title)}</h3>
            <div className="mt-2 space-y-1 text-sm">
                <p>
                    <span className="font-medium">Funding:</span>{" "}
                    {translate(research.funding_source)}
                </p>
                <p>
                    <span className="font-medium">Scheme:</span>{" "}
                    {translate(research.scheme)}
                </p>
                <p className="text-muted-foreground">{research.year}</p>
            </div>
        </div>
    );
}

/**
 * Method 3: Handling lists of translatable items
 */
export function ResearchList({ researches }: { researches: Research[] }) {
    const { locale, t } = useLanguage();
    const translate = createTranslator(locale);

    return (
        <div className="space-y-4">
            <h2 className="text-2xl font-bold">
                {t({ id: "Penelitian", en: "Research" })}
            </h2>

            {researches.length === 0 ? (
                <p className="text-muted-foreground">
                    {t({
                        id: "Belum ada penelitian",
                        en: "No research available",
                    })}
                </p>
            ) : (
                <div className="grid gap-4 md:grid-cols-2">
                    {researches.map((research) => (
                        <div key={research.id} className="rounded-lg border p-4">
                            <h3 className="font-semibold">
                                {translate(research.title)}
                            </h3>
                            <p className="text-sm text-muted-foreground">
                                {translate(research.funding_source)} •{" "}
                                {research.year}
                            </p>
                        </div>
                    ))}
                </div>
            )}
        </div>
    );
}

/**
 * Method 4: Handling optional/nullable translatable fields
 */
interface Publication {
    id: number;
    title: string; // Non-translatable
    abstract?: {
        // Optional translatable field
        id?: string;
        en?: string;
    } | null;
    publisher: string;
}

export function PublicationCard({ publication }: { publication: Publication }) {
    const { locale } = useLanguage();

    // getTranslation handles null/undefined gracefully
    const abstract = getTranslation(publication.abstract, locale);

    return (
        <div className="rounded-lg border p-4">
            <h3 className="text-lg font-semibold">{publication.title}</h3>
            <p className="text-sm text-muted-foreground">
                {publication.publisher}
            </p>
            {abstract && <p className="mt-2 text-sm">{abstract}</p>}
        </div>
    );
}

/**
 * Method 5: Using fallback locales
 * Useful when some translations might be missing
 */
export function FlexibleTranslationCard({
    data,
}: {
    data: { title: { id?: string; en?: string } };
}) {
    const { locale } = useLanguage();

    // Will try locale first, then fallback to 'en', then any available
    const title = getTranslation(data.title, locale, "en");

    return (
        <div className="rounded-lg border p-4">
            <h3>{title}</h3>
        </div>
    );
}
