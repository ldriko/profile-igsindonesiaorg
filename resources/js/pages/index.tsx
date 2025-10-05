import { Navbar } from "@/components/navbar";
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

interface Props {
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
            name_en: "Book Writings",
            name_id: "Penulisan Buku",
            description_en: "Published books and written works",
            description_id: "Buku yang diterbitkan dan karya tulis",
            icon: BookOpen,
            count: book_writings_count,
            route: "/book-writings",
        },
        {
            name: "Community Services",
            name_en: "Community Services",
            name_id: "Layanan Masyarakat",
            description_en: "Contributions and services to the community",
            description_id: "Kontribusi dan layanan kepada masyarakat",
            icon: Users,
            count: community_services_count,
            route: "/community-services",
        },
        {
            name: "Conferences",
            name_en: "Conferences",
            name_id: "Konferensi",
            description_en: "Academic conferences and presentations attended",
            description_id: "Konferensi akademik dan presentasi yang dihadiri",
            icon: Presentation,
            count: conferences_count,
            route: "/conferences",
        },
        {
            name: "Education",
            name_en: "Education",
            name_id: "Pendidikan",
            description_en:
                "Educational background and academic qualifications",
            description_id:
                "Latar belakang pendidikan dan kualifikasi akademik",
            icon: GraduationCap,
            count: educations_count,
            route: "/education",
        },
        {
            name: "Institution Positions",
            name_en: "Institution Positions",
            name_id: "Posisi Institusi",
            description_en: "Positions held within various institutions",
            description_id: "Posisi yang dipegang dalam berbagai institusi",
            icon: Briefcase,
            count: institution_positions_count,
            route: "/institution-positions",
        },
        {
            name: "Intellectual Properties",
            name_en: "Intellectual Properties",
            name_id: "Kekayaan Intelektual",
            description_en:
                "Patents, copyrights, and other intellectual property rights",
            description_id:
                "Paten, hak cipta, dan hak kekayaan intelektual lainnya",
            icon: Lightbulb,
            count: intellectual_properties_count,
            route: "/intellectual-properties",
        },
        {
            name: "Organizations",
            name_en: "Organizations",
            name_id: "Organisasi",
            description_en:
                "Professional and academic organizations memberships",
            description_id: "Keanggotaan organisasi profesional dan akademik",
            icon: Building,
            count: organizations_count,
            route: "/organizations",
        },
        {
            name: "Policy Experiences",
            name_en: "Policy Experiences",
            name_id: "Pengalaman Kebijakan",
            description_en: "Experience in policy-making and advisory roles",
            description_id:
                "Pengalaman dalam pembuatan kebijakan dan peran penasihat",
            icon: FileText,
            count: policy_experiences_count,
            route: "/policy-experiences",
        },
        {
            name: "Publications",
            name_en: "Publications",
            name_id: "Publikasi",
            description_en: "Academic publications and research papers",
            description_id: "Publikasi akademik dan makalah penelitian",
            icon: Newspaper,
            count: publications_count,
            route: "/publications",
        },
        {
            name: "Research",
            name_en: "Research",
            name_id: "Penelitian",
            description_en: "Research projects and funded studies",
            description_id: "Proyek penelitian dan studi yang didanai",
            icon: FlaskConical,
            count: researches_count,
            route: "/research",
        },
        {
            name: "Teaching Experiences",
            name_en: "Teaching Experiences",
            name_id: "Pengalaman Mengajar",
            description_en:
                "Teaching positions and academic instruction experience",
            description_id: "Posisi mengajar dan pengalaman instruksi akademik",
            icon: School,
            count: teaching_experiences_count,
            route: "/teaching-experiences",
        },
        {
            name: "Teaching Materials",
            name_en: "Teaching Materials",
            name_id: "Materi Pengajaran",
            description_en:
                "Educational materials and course content developed",
            description_id:
                "Materi pendidikan dan konten kursus yang dikembangkan",
            icon: FileEdit,
            count: teaching_materials_count,
            route: "/teaching-materials",
        },
        {
            name: "Trainings",
            name_en: "Trainings",
            name_id: "Pelatihan",
            description_en:
                "Professional development and training programs attended",
            description_id:
                "Pengembangan profesional dan program pelatihan yang diikuti",
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

            <Navbar />

            <div className="min-h-screen bg-background">
                <div className="mx-auto max-w-screen-lg px-4 py-8">
                    <div className="space-y-8">
                        {/* Hero Section */}
                        <div className="text-center">
                            <h1 className="mb-4 text-4xl font-bold text-foreground">
                                {t({
                                    id: "Profil Akademik",
                                    en: "Academic Profile",
                                })}
                            </h1>
                            <p className="mx-auto max-w-3xl text-xl text-muted-foreground">
                                {t({
                                    id: "Jelajahi pencapaian akademik, kontribusi penelitian, dan pengalaman profesional yang komprehensif. Pilih kategori di bawah ini untuk melihat informasi detail.",
                                    en: "Explore comprehensive academic achievements, research contributions, and professional experience. Select a category below to view detailed information.",
                                })}
                            </p>
                        </div>

                        {/* Search Bar */}
                        <div className="mx-auto max-w-md">
                            <div className="group relative">
                                <SearchIcon className="absolute top-1/2 left-3 h-5 w-5 -translate-y-1/2 text-muted-foreground transition-colors group-focus-within:text-primary" />
                                <Input
                                    type="text"
                                    className="pl-10"
                                    placeholder={t({
                                        id: "Cari kategori...",
                                        en: "Search categories...",
                                    })}
                                    value={searchTerm}
                                    onChange={(e) =>
                                        setSearchTerm(e.target.value)
                                    }
                                />
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
                                                            {t({
                                                                id: "item",
                                                                en: "items",
                                                            })}
                                                        </span>
                                                    </div>

                                                    {/* Arrow */}
                                                    <div className="flex items-center text-primary transition-transform group-hover:translate-x-1">
                                                        <span className="text-sm font-medium">
                                                            {t({
                                                                id: "Lihat Detail",
                                                                en: "View Details",
                                                            })}
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
                                    {t({
                                        id: "Tidak ada kategori yang cocok dengan pencarian Anda.",
                                        en: "No categories found matching your search.",
                                    })}
                                </p>
                            </div>
                        )}

                        {/* Stats Section */}
                        <Card className="bg-gradient-to-r from-primary to-primary/80 text-primary-foreground">
                            <div className="p-8">
                                <div className="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                                    <div>
                                        <div className="mb-2 text-3xl font-bold">
                                            {categories.length}
                                        </div>
                                        <div className="text-primary-foreground/80">
                                            {t({
                                                id: "Kategori",
                                                en: "Categories",
                                            })}
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
                                            {t({
                                                id: "Total Item",
                                                en: "Total Items",
                                            })}
                                        </div>
                                    </div>
                                    <div>
                                        <div className="mb-2 text-3xl font-bold">
                                            {new Date().getFullYear()}
                                        </div>
                                        <div className="text-primary-foreground/80">
                                            {t({
                                                id: "Diperbarui",
                                                en: "Updated",
                                            })}
                                        </div>
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
