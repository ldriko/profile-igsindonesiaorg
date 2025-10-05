import { Card } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { useLanguage } from "@/contexts/language-context";
import { Head, Link } from "@inertiajs/react";
import {
    Award,
    BookOpen,
    Briefcase,
    Building,
    FileEdit,
    FileText,
    FlaskConical,
    GraduationCap,
    Lightbulb,
    LucideIcon,
    Newspaper,
    Presentation,
    School,
    Search as SearchIcon,
    Users,
} from "lucide-react";
import { useState } from "react";

interface ModelCategory {
    name: string;
    name_en: string;
    name_id: string;
    description_en: string;
    description_id: string;
    icon: LucideIcon;
    count: number;
    route: string;
}

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

interface Props {
    personal_info: PersonalInfo | null;
    awards_count: number;
    book_writings_count: number;
    community_services_count: number;
    conferences_count: number;
    educations_count: number;
    institution_positions_count: number;
    intellectual_properties_count: number;
    links_count: number;
    organizations_count: number;
    policy_experiences_count: number;
    publications_count: number;
    researches_count: number;
    teaching_experiences_count: number;
    teaching_materials_count: number;
    trainings_count: number;
}

export default function ProfileIndex({
    personal_info,
    book_writings_count,
    community_services_count,
    conferences_count,
    educations_count,
    institution_positions_count,
    intellectual_properties_count,
    organizations_count,
    policy_experiences_count,
    publications_count,
    researches_count,
    teaching_experiences_count,
    teaching_materials_count,
    trainings_count,
}: Props) {
    const { locale, t } = useLanguage();
    const [searchTerm, setSearchTerm] = useState("");

    const categories: ModelCategory[] = [
        {
            name: "Book Writings",
            name_en: t("Book Writings"),
            name_id: t("Book Writings"),
            description_en: t("Published books and written works"),
            description_id: t("Published books and written works"),
            icon: BookOpen,
            count: book_writings_count,
            route: "/book-writings",
        },
        {
            name: "Community Services",
            name_en: t("Community Services"),
            name_id: t("Community Services"),
            description_en: t("Contributions and services to the community"),
            description_id: t("Contributions and services to the community"),
            icon: Users,
            count: community_services_count,
            route: "/community-services",
        },
        {
            name: "Conferences",
            name_en: t("Conferences"),
            name_id: t("Conferences"),
            description_en: t(
                "Academic conferences and presentations attended",
            ),
            description_id: t(
                "Academic conferences and presentations attended",
            ),
            icon: Presentation,
            count: conferences_count,
            route: "/conferences",
        },
        {
            name: "Education",
            name_en: t("Education"),
            name_id: t("Education"),
            description_en: t(
                "Educational background and academic qualifications",
            ),
            description_id: t(
                "Educational background and academic qualifications",
            ),
            icon: GraduationCap,
            count: educations_count,
            route: "/education",
        },
        {
            name: "Institution Positions",
            name_en: t("Institution Positions"),
            name_id: t("Institution Positions"),
            description_en: t("Positions held within various institutions"),
            description_id: t("Positions held within various institutions"),
            icon: Briefcase,
            count: institution_positions_count,
            route: "/institution-positions",
        },
        {
            name: "Intellectual Properties",
            name_en: t("Intellectual Properties"),
            name_id: t("Intellectual Properties"),
            description_en: t(
                "Patents, copyrights, and other intellectual property rights",
            ),
            description_id: t(
                "Patents, copyrights, and other intellectual property rights",
            ),
            icon: Lightbulb,
            count: intellectual_properties_count,
            route: "/intellectual-properties",
        },
        {
            name: "Organizations",
            name_en: t("Organizations"),
            name_id: t("Organizations"),
            description_en: t(
                "Professional and academic organizations memberships",
            ),
            description_id: t(
                "Professional and academic organizations memberships",
            ),
            icon: Building,
            count: organizations_count,
            route: "/organizations",
        },
        {
            name: "Policy Experiences",
            name_en: t("Policy Experiences"),
            name_id: t("Policy Experiences"),
            description_en: t("Experience in policy-making and advisory roles"),
            description_id: t("Experience in policy-making and advisory roles"),
            icon: FileText,
            count: policy_experiences_count,
            route: "/policy-experiences",
        },
        {
            name: "Publications",
            name_en: t("Publications"),
            name_id: t("Publications"),
            description_en: t("Academic publications and research papers"),
            description_id: t("Academic publications and research papers"),
            icon: Newspaper,
            count: publications_count,
            route: "/publications",
        },
        {
            name: "Research",
            name_en: t("Research"),
            name_id: t("Research"),
            description_en: t("Research projects and funded studies"),
            description_id: t("Research projects and funded studies"),
            icon: FlaskConical,
            count: researches_count,
            route: "/research",
        },
        {
            name: "Teaching Experiences",
            name_en: t("Teaching Experiences"),
            name_id: t("Teaching Experiences"),
            description_en: t(
                "Teaching positions and academic instruction experience",
            ),
            description_id: t(
                "Teaching positions and academic instruction experience",
            ),
            icon: School,
            count: teaching_experiences_count,
            route: "/teaching-experiences",
        },
        {
            name: "Teaching Materials",
            name_en: t("Teaching Materials"),
            name_id: t("Teaching Materials"),
            description_en: t(
                "Educational materials and course content developed",
            ),
            description_id: t(
                "Educational materials and course content developed",
            ),
            icon: FileEdit,
            count: teaching_materials_count,
            route: "/teaching-materials",
        },
        {
            name: "Trainings",
            name_en: t("Trainings"),
            name_id: t("Trainings"),
            description_en: t(
                "Professional development and training programs attended",
            ),
            description_id: t(
                "Professional development and training programs attended",
            ),
            icon: Award,
            count: trainings_count,
            route: "/trainings",
        },
    ];

    const getLocalizedName = (category: ModelCategory) => {
        return locale === "en" ? category.name_en : category.name_id;
    };

    const getLocalizedDescription = (category: ModelCategory) => {
        return locale === "en"
            ? category.description_en
            : category.description_id;
    };

    const filteredCategories = categories.filter((category) => {
        const name = getLocalizedName(category).toLowerCase();
        const description = getLocalizedDescription(category).toLowerCase();
        const search = searchTerm.toLowerCase();
        return name.includes(search) || description.includes(search);
    });

    return (
        <>
            <Head title="Academic Profile - IGS Indonesia" />

            <div className="min-h-screen bg-background">
                <div className="mx-auto max-w-screen-lg px-4 py-4 lg:py-8">
                    <div className="space-y-16">
                        {/* Personal Info Section */}
                        {personal_info && (
                            <Card className="bg-gradient-to-tb overflow-hidden from-card to-muted/20 py-6 lg:py-0">
                                <div className="flex flex-col items-center gap-6 lg:flex-row lg:items-start lg:gap-12">
                                    {/* Profile Picture */}
                                    {personal_info.picture && (
                                        <div className="aspect-square px-6 lg:aspect-auto lg:self-stretch lg:px-0">
                                            <img
                                                src={`/storage/${personal_info.picture}`}
                                                alt={personal_info.name}
                                                className="aspect-square h-full rounded-lg border-2 object-cover lg:aspect-auto lg:rounded-none lg:border-0 lg:border-r-2"
                                            />
                                        </div>
                                    )}

                                    {/* Profile Info */}
                                    <div className="flex-1 px-6 pb-12 text-center lg:px-0 lg:py-12 lg:pr-12 lg:text-justify">
                                        <h2 className="mb-2 text-3xl font-bold text-foreground">
                                            {personal_info.name}
                                        </h2>
                                        <p className="mb-2 text-lg font-medium text-primary">
                                            {personal_info.academic_position}
                                        </p>
                                        <p className="mb-4 text-sm text-muted-foreground">
                                            {personal_info.institution}
                                        </p>
                                        <p className="text-base leading-relaxed text-foreground">
                                            {locale === "en"
                                                ? personal_info
                                                      .short_description.en
                                                : personal_info
                                                      .short_description.id}
                                        </p>

                                        {/* Academic Profile Links */}
                                        <div className="mt-6 flex flex-wrap justify-center gap-8">
                                            {personal_info.scopus_id && (
                                                <a
                                                    href={`https://www.scopus.com/authid/detail.uri?authorId=${personal_info.scopus_id}`}
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
                                            {personal_info.sinta_id && (
                                                <a
                                                    href={`https://sinta.kemdiktisaintek.go.id/authors/profile/${personal_info.sinta_id}`}
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
                                            {personal_info.google_scholar_id && (
                                                <a
                                                    href={`https://scholar.google.com/citations?user=${personal_info.google_scholar_id}`}
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
                        )}

                        {/* Search Bar */}
                        <div className="space-y-8">
                            <div className="text-center">
                                <h1 className="mb-4 text-4xl font-bold text-foreground">
                                    {t("Academic Profile")}
                                </h1>
                                <p className="mx-auto max-w-3xl text-lg text-muted-foreground">
                                    {t(
                                        "Explore comprehensive academic achievements, research contributions, and professional experience. Select a category below to view detailed information.",
                                    )}
                                </p>
                            </div>
                            <div className="mx-auto max-w-md">
                                <div className="group relative">
                                    <SearchIcon className="absolute top-1/2 left-3 h-5 w-5 -translate-y-1/2 text-muted-foreground transition-colors group-focus-within:text-primary" />
                                    <Input
                                        type="text"
                                        className="pl-10"
                                        placeholder={t("Search categories...")}
                                        value={searchTerm}
                                        onChange={(e) =>
                                            setSearchTerm(e.target.value)
                                        }
                                    />
                                </div>
                            </div>
                        </div>

                        {/* Categories Grid */}
                        {filteredCategories.length > 0 ? (
                            <div className="flex flex-wrap justify-center gap-4 md:gap-6">
                                {filteredCategories.map((category, index) => {
                                    const IconComponent = category.icon;
                                    return (
                                        <Link
                                            key={index}
                                            href={category.route}
                                            className="group w-full sm:w-[calc(50%-0.5rem)] md:w-[calc(33.333%-1rem)]"
                                        >
                                            <Card className="h-full transform border-border p-6 transition-all duration-500 hover:-translate-y-2 hover:scale-105 hover:border-primary hover:shadow-xl">
                                                <div className="flex flex-col items-center space-y-4 text-center">
                                                    {/* Icon */}
                                                    <div className="flex h-16 w-16 items-center justify-center rounded-xl bg-gradient-to-br from-primary/10 to-primary/20 transition-colors group-hover:from-primary/20 group-hover:to-primary/30">
                                                        <IconComponent className="h-8 w-8 text-primary" />
                                                    </div>

                                                    {/* Category Name */}
                                                    <h3 className="text-xl font-semibold text-foreground transition-colors group-hover:text-primary">
                                                        {getLocalizedName(
                                                            category,
                                                        )}
                                                    </h3>

                                                    {/* Description */}
                                                    <p className="text-sm leading-relaxed text-muted-foreground">
                                                        {getLocalizedDescription(
                                                            category,
                                                        )}
                                                    </p>

                                                    {/* Count */}
                                                    <div className="flex items-center space-x-2 text-sm text-muted-foreground">
                                                        <FileText className="h-4 w-4" />
                                                        <span>
                                                            {category.count}{" "}
                                                            {t("items")}
                                                        </span>
                                                    </div>

                                                    {/* Arrow */}
                                                    <div className="flex items-center text-primary transition-transform group-hover:translate-x-1">
                                                        <span className="text-sm font-medium">
                                                            {t("View Details")}
                                                        </span>
                                                        <svg
                                                            className="ml-2 h-4 w-4"
                                                            fill="none"
                                                            stroke="currentColor"
                                                            viewBox="0 0 24 24"
                                                        >
                                                            <path
                                                                strokeLinecap="round"
                                                                strokeLinejoin="round"
                                                                strokeWidth={2}
                                                                d="M9 5l7 7-7 7"
                                                            />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </Card>
                                        </Link>
                                    );
                                })}
                            </div>
                        ) : (
                            /* No Results Message */
                            <div className="py-12 text-center">
                                <SearchIcon className="mx-auto mb-4 h-12 w-12 text-muted-foreground" />
                                <p className="text-lg text-muted-foreground">
                                    {t(
                                        "No categories found matching your search.",
                                    )}
                                </p>
                            </div>
                        )}

                        {/* Stats Section */}
                        <Card className="bg-gradient-to-r from-primary to-primary/80 text-primary-foreground">
                            <div className="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                                <div>
                                    <div className="mb-2 text-3xl font-bold">
                                        {categories.length}
                                    </div>
                                    <div className="text-primary-foreground/80">
                                        {t("Categories")}
                                    </div>
                                </div>
                                <div>
                                    <div className="mb-2 text-3xl font-bold">
                                        {categories.reduce(
                                            (sum, cat) => sum + cat.count,
                                            0,
                                        )}
                                    </div>
                                    <div className="text-primary-foreground/80">
                                        {t("Total Items")}
                                    </div>
                                </div>
                                <div>
                                    <div className="mb-2 text-3xl font-bold">
                                        {new Date().getFullYear()}
                                    </div>
                                    <div className="text-primary-foreground/80">
                                        {t("Updated")}
                                    </div>
                                </div>
                            </div>
                        </Card>
                    </div>
                </div>
            </div>
        </>
    );
}
