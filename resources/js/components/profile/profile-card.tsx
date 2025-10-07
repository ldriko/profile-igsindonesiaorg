import { Card } from "@/components/ui/card";

interface PersonalInfo {
    name: string;
    picture: string | null;
    short_description: {
        en: string;
        id: string;
    };
    institution: string;
    academic_position: string;
    scopus_id: string;
    sinta_id: string;
    google_scholar_id: string;
}

interface ProfileCardProps {
    personalInfo: PersonalInfo;
    locale: string;
}

export function ProfileCard({ personalInfo, locale }: ProfileCardProps) {
    return (
        <Card className="overflow-hidden bg-gradient-to-br from-card to-muted/30 py-6 lg:py-0">
            <div className="flex flex-col items-center gap-6 lg:flex-row lg:items-start lg:gap-12">
                {/* Profile Picture */}
                {personalInfo.picture && (
                    <div className="aspect-square px-6 lg:aspect-auto lg:self-stretch lg:px-0">
                        <img
                            src={`/storage/${personalInfo.picture}`}
                            alt={personalInfo.name}
                            className="aspect-square h-full rounded-lg border-2 object-cover lg:aspect-auto lg:rounded-none lg:border-0 lg:border-r-2"
                        />
                    </div>
                )}

                {/* Profile Info */}
                <div className="flex-1 px-6 pb-12 text-center lg:px-0 lg:py-12 lg:pr-12 lg:text-justify">
                    <h2 className="mb-2 text-3xl font-bold text-foreground">
                        {personalInfo.name}
                    </h2>
                    <p className="mb-2 text-lg font-medium text-primary">
                        {personalInfo.academic_position}
                    </p>
                    <p className="mb-4 text-sm text-muted-foreground">
                        {personalInfo.institution}
                    </p>
                    <p className="text-base leading-relaxed text-foreground">
                        {locale === "en"
                            ? personalInfo.short_description.en
                            : personalInfo.short_description.id}
                    </p>

                    {/* Academic Profile Links */}
                    <div className="mt-6 flex flex-wrap justify-center gap-8">
                        {personalInfo.scopus_id && (
                            <a
                                href={`https://www.scopus.com/authid/detail.uri?authorId=${personalInfo.scopus_id}`}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="transition-opacity hover:opacity-80"
                            >
                                <img
                                    src="/img/scopus.png"
                                    alt="SCOPUS"
                                    className="h-12 w-auto object-contain"
                                />
                            </a>
                        )}
                        {personalInfo.sinta_id && (
                            <a
                                href={`https://sinta.kemdiktisaintek.go.id/authors/profile/${personalInfo.sinta_id}`}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="transition-opacity hover:opacity-80"
                            >
                                <img
                                    src="/img/sinta.jpg"
                                    alt="SINTA"
                                    className="h-12 w-auto object-contain"
                                />
                            </a>
                        )}
                        {personalInfo.google_scholar_id && (
                            <a
                                href={`https://scholar.google.com/citations?user=${personalInfo.google_scholar_id}`}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="transition-opacity hover:opacity-80"
                            >
                                <img
                                    src="/img/scholar.jpg"
                                    alt="Google Scholar"
                                    className="h-12 w-auto object-contain"
                                />
                            </a>
                        )}
                    </div>
                </div>
            </div>
        </Card>
    );
}
