import { Badge } from "@/components/ui/badge";
import { Separator } from "@/components/ui/separator";
import {
    Award,
    BookOpen,
    Briefcase,
    Building,
    Calendar,
    DollarSign,
    ExternalLink,
    FileText,
    GraduationCap,
    Hash,
    MapPin,
    Newspaper,
    Presentation,
    School,
    Tag,
    Users,
} from "lucide-react";
import type { ReactNode } from "react";

interface ContentItem {
    id: number;
    title: string;
    description: string;
    date: string;
    [key: string]: unknown;
}

interface ContentDetailViewProps {
    item: ContentItem;
    category: string;
    t: (key: string) => string;
}

interface DetailFieldProps {
    icon: React.ElementType;
    label: string;
    value: string | number | null | undefined;
    type?: "text" | "link" | "badge";
}

function DetailField({ icon: Icon, label, value, type = "text" }: DetailFieldProps) {
    if (!value) return null;

    return (
        <div className="flex items-start gap-3 py-3">
            <Icon className="h-5 w-5 mt-0.5 text-muted-foreground shrink-0" />
            <div className="flex-1 min-w-0">
                <p className="text-sm font-medium text-muted-foreground">{label}</p>
                {type === "link" ? (
                    <a
                        href={value as string}
                        target="_blank"
                        rel="noopener noreferrer"
                        className="text-sm text-primary hover:underline inline-flex items-center gap-1 mt-1"
                    >
                        {value as string}
                        <ExternalLink className="h-3 w-3" />
                    </a>
                ) : type === "badge" ? (
                    <Badge variant="secondary" className="mt-1">
                        {value}
                    </Badge>
                ) : (
                    <p className="text-sm mt-1 break-words">{value}</p>
                )}
            </div>
        </div>
    );
}

export function ContentDetailView({ item, category, t }: ContentDetailViewProps) {
    const renderPublicationDetails = () => (
        <>
            <DetailField icon={FileText} label={t("Publication Type")} value={item.publication_type as string} type="badge" />
            <DetailField icon={Newspaper} label={t("Journal")} value={item.journal_name as string} />
            <DetailField icon={Hash} label="DOI" value={item.doi as string} />
            <DetailField icon={Tag} label={t("Index Type")} value={item.index_type as string} type="badge" />
            {item.url && <DetailField icon={ExternalLink} label={t("URL")} value={item.url as string} type="link" />}
        </>
    );

    const renderBookWritingDetails = () => (
        <>
            <DetailField icon={Building} label={t("Publisher")} value={item.publisher as string} />
            <DetailField icon={Hash} label="ISBN" value={item.isbn as string} />
            <DetailField icon={Tag} label={t("Type")} value={item.type as string} type="badge" />
            <DetailField icon={Users} label={t("Authors")} value={item.authors as string} />
            <DetailField icon={Award} label={t("Role")} value={item.role as string} type="badge" />
            {item.url && <DetailField icon={ExternalLink} label={t("URL")} value={item.url as string} type="link" />}
        </>
    );

    const renderConferenceDetails = () => (
        <>
            <DetailField icon={Presentation} label={t("Conference Name")} value={item.conference_name as string} />
            <DetailField icon={MapPin} label={t("Location")} value={item.location as string} />
            <DetailField icon={Award} label={t("Role")} value={item.role as string} type="badge" />
            <DetailField icon={FileText} label={t("Paper Title")} value={item.paper_title as string} />
            {item.url && <DetailField icon={ExternalLink} label={t("URL")} value={item.url as string} type="link" />}
        </>
    );

    const renderEducationDetails = () => (
        <>
            <DetailField icon={School} label={t("Level")} value={item.level as string} type="badge" />
            <DetailField icon={Building} label={t("Institution")} value={item.institution as string} />
            <DetailField icon={BookOpen} label={t("Department")} value={item.department as string} />
            <DetailField icon={GraduationCap} label={t("Major")} value={item.major as string} />
            <DetailField icon={FileText} label={t("Thesis Title")} value={item.thesis_title as string} />
            <DetailField icon={Calendar} label={t("Graduation Year")} value={item.graduation_year as string} />
        </>
    );

    const renderInstitutionPositionDetails = () => (
        <>
            <DetailField icon={Briefcase} label={t("Position")} value={item.position as string} />
            <DetailField icon={Building} label={t("Institution")} value={item.institution as string} />
            <DetailField icon={Calendar} label={t("Start Year")} value={item.start_year as string} />
            <DetailField icon={Calendar} label={t("End Year")} value={item.end_year as string || t("Present")} />
            <DetailField icon={FileText} label={t("Description")} value={item.description as string} />
        </>
    );

    const renderIntellectualPropertyDetails = () => (
        <>
            <DetailField icon={Tag} label={t("Type")} value={item.type as string} type="badge" />
            <DetailField icon={Hash} label={t("Registration Number")} value={item.registration_number as string} />
            <DetailField icon={Award} label={t("Status")} value={item.status as string} type="badge" />
            <DetailField icon={Calendar} label={t("Registration Date")} value={item.registration_date as string} />
            {item.url && <DetailField icon={ExternalLink} label={t("URL")} value={item.url as string} type="link" />}
        </>
    );

    const renderOrganizationDetails = () => (
        <>
            <DetailField icon={Building} label={t("Organization")} value={item.organization_name as string} />
            <DetailField icon={Award} label={t("Role")} value={item.role as string} />
            <DetailField icon={Calendar} label={t("Start Year")} value={item.start_year as string} />
            <DetailField icon={Calendar} label={t("End Year")} value={item.end_year as string || t("Present")} />
            <DetailField icon={FileText} label={t("Description")} value={item.description as string} />
        </>
    );

    const renderPolicyExperienceDetails = () => (
        <>
            <DetailField icon={Award} label={t("Role")} value={item.role as string} />
            <DetailField icon={Building} label={t("Institution")} value={item.institution as string} />
            <DetailField icon={Calendar} label={t("Year")} value={item.year as string} />
            <DetailField icon={FileText} label={t("Description")} value={item.description as string} />
        </>
    );

    const renderResearchDetails = () => (
        <>
            <DetailField icon={DollarSign} label={t("Funding Source")} value={item.funding_source as string} />
            <DetailField icon={DollarSign} label={t("Fund Amount")} value={item.fund_amount as string} />
            <DetailField icon={Tag} label={t("Scheme")} value={item.scheme as string} />
            <DetailField icon={Calendar} label={t("Year")} value={item.year as string} />
            <DetailField icon={FileText} label={t("Description")} value={item.description as string} />
        </>
    );

    const renderTeachingExperienceDetails = () => (
        <>
            <DetailField icon={BookOpen} label={t("Course Name")} value={item.course_name as string} />
            <DetailField icon={Building} label={t("Institution")} value={item.institution as string} />
            <DetailField icon={Tag} label={t("Program")} value={item.program as string} />
            <DetailField icon={Calendar} label={t("Academic Year")} value={item.academic_year as string} />
            <DetailField icon={Users} label={t("Student Count")} value={item.student_count as number} />
        </>
    );

    const renderTeachingMaterialDetails = () => (
        <>
            <DetailField icon={Tag} label={t("Program")} value={item.program as string} />
            <DetailField icon={Tag} label={t("Type")} value={item.type as string} type="badge" />
            <DetailField icon={FileText} label={t("Format")} value={item.format as string} />
            <DetailField icon={Hash} label="ISBN" value={item.isbn as string} />
            <DetailField icon={Calendar} label={t("Year")} value={item.year as string} />
            {item.url && <DetailField icon={ExternalLink} label={t("URL")} value={item.url as string} type="link" />}
        </>
    );

    const renderCommunityServiceDetails = () => (
        <>
            <DetailField icon={Award} label={t("Role")} value={item.role as string} />
            <DetailField icon={Building} label={t("Institution")} value={item.institution as string} />
            <DetailField icon={DollarSign} label={t("Funding Source")} value={item.funding_source as string} />
            <DetailField icon={MapPin} label={t("Location")} value={item.location as string} />
            <DetailField icon={Calendar} label={t("Year")} value={item.year as string} />
        </>
    );

    const renderTrainingDetails = () => (
        <>
            <DetailField icon={Building} label={t("Organizer")} value={item.organizer as string} />
            <DetailField icon={Tag} label={t("Type")} value={item.type as string} type="badge" />
            <DetailField icon={Calendar} label={t("Duration (hours)")} value={item.duration_hours as number} />
            <DetailField icon={Calendar} label={t("Date")} value={item.date as string} />
            {item.url && <DetailField icon={ExternalLink} label={t("URL")} value={item.url as string} type="link" />}
        </>
    );

    const renderCategoryDetails = (): ReactNode => {
        switch (category) {
            case "Publications":
                return renderPublicationDetails();
            case "Book Writings":
                return renderBookWritingDetails();
            case "Conferences":
                return renderConferenceDetails();
            case "Education":
                return renderEducationDetails();
            case "Institution Positions":
                return renderInstitutionPositionDetails();
            case "Intellectual Properties":
                return renderIntellectualPropertyDetails();
            case "Organizations":
                return renderOrganizationDetails();
            case "Policy Experiences":
                return renderPolicyExperienceDetails();
            case "Research":
                return renderResearchDetails();
            case "Teaching Experiences":
                return renderTeachingExperienceDetails();
            case "Teaching Materials":
                return renderTeachingMaterialDetails();
            case "Community Services":
                return renderCommunityServiceDetails();
            case "Trainings":
                return renderTrainingDetails();
            default:
                return null;
        }
    };

    return (
        <div className="flex flex-col h-full px-4 pb-4">
            {/* Header */}
            <div className="space-y-4 pb-4">
                <div>
                    <h2 className="text-2xl font-bold text-foreground leading-tight">
                        {item.title}
                    </h2>
                    <p className="text-muted-foreground mt-2">{item.description}</p>
                </div>

                <div className="flex items-center gap-2 text-sm text-muted-foreground">
                    <Calendar className="h-4 w-4" />
                    <span>{item.date}</span>
                </div>
            </div>

            <Separator className="my-4" />

            {/* Details */}
            <div className="space-y-1 flex-1 overflow-y-auto">
                {renderCategoryDetails()}
            </div>

            {/* Footer with URL button if available */}
            {/* {item.url && (
                <>
                    <Separator className="my-4" />
                    <div className="pt-4">
                        <Button className="w-full" asChild>
                            <a
                                href={item.url as string}
                                target="_blank"
                                rel="noopener noreferrer"
                                className="gap-2"
                            >
                                <ExternalLink className="h-4 w-4" />
                                {t("Visit Website")}
                            </a>
                        </Button>
                    </div>
                </>
            )} */}
        </div>
    );
}
