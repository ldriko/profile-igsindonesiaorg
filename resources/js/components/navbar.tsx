import { LanguageToggle } from "@/components/language-toggle";
import {
    NavigationMenu,
    NavigationMenuContent,
    NavigationMenuItem,
    NavigationMenuLink,
    NavigationMenuList,
    NavigationMenuTrigger,
    navigationMenuTriggerStyle,
} from "@/components/ui/navigation-menu";
import { useLanguage } from "@/contexts/language-context";
import { Link } from "@inertiajs/react";
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
    Newspaper,
    Presentation,
    School,
    Users,
} from "lucide-react";

export function Navbar() {
    const { t } = useLanguage();

    return (
        <header className="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
            <div className="mx-auto flex h-16 max-w-screen-lg items-center px-4 md:px-6">
                {/* Logo and App Title */}
                <div className="mr-4 flex items-center space-x-2 md:mr-6">
                    <Link href="/" className="flex items-center space-x-2">
                        <GraduationCap className="h-6 w-6 text-primary" />
                        <span className="hidden font-bold sm:inline-block">
                            IGS Indonesia
                        </span>
                    </Link>
                </div>

                {/* Navigation Menu */}
                <NavigationMenu className="ml-auto" viewport={true}>
                    <NavigationMenuList>
                        <NavigationMenuItem>
                            <NavigationMenuLink
                                asChild
                                className={navigationMenuTriggerStyle({
                                    className: "bg-transparent",
                                })}
                            >
                                <Link href="/">{t("Home")}</Link>
                            </NavigationMenuLink>
                        </NavigationMenuItem>
                        <NavigationMenuItem>
                            <NavigationMenuTrigger className="bg-transparent">
                                {t("Profile")}
                            </NavigationMenuTrigger>
                            <NavigationMenuContent>
                                <ul className="grid w-[400px] gap-3 p-4 md:w-[500px] md:grid-cols-2 lg:w-[600px]">
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/book-writings"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <BookOpen className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Book Writings")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Published books and written works",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/community-services"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Users className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t(
                                                            "Community Services",
                                                        )}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Contributions and services to the community",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/conferences"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Presentation className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Conferences")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Academic conferences and presentations attended",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/education"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <GraduationCap className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Education")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Educational background and academic qualifications",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/institution-positions"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Briefcase className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t(
                                                            "Institution Positions",
                                                        )}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Positions held within various institutions",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/intellectual-properties"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Lightbulb className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t(
                                                            "Intellectual Properties",
                                                        )}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Patents, copyrights, and other intellectual property rights",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/organizations"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Building className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Organizations")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Professional and academic organizations memberships",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/policy-experiences"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <FileText className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t(
                                                            "Policy Experiences",
                                                        )}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Experience in policy-making and advisory roles",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/publications"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Newspaper className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Publications")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Academic publications and research papers",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/research"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <FlaskConical className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Research")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Research projects and funded studies",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/teaching-experiences"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <School className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t(
                                                            "Teaching Experiences",
                                                        )}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Teaching positions and academic instruction experience",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/teaching-materials"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <FileEdit className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t(
                                                            "Teaching Materials",
                                                        )}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Educational materials and course content developed",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                    <li>
                                        <NavigationMenuLink asChild>
                                            <Link
                                                href="/trainings"
                                                className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                            >
                                                <div className="flex items-center gap-2">
                                                    <Award className="h-4 w-4" />
                                                    <div className="text-sm leading-none font-medium">
                                                        {t("Trainings")}
                                                    </div>
                                                </div>
                                                <p className="text-xs leading-snug text-muted-foreground">
                                                    {t(
                                                        "Professional development and training programs attended",
                                                    )}
                                                </p>
                                            </Link>
                                        </NavigationMenuLink>
                                    </li>
                                </ul>
                            </NavigationMenuContent>
                        </NavigationMenuItem>
                        <NavigationMenuItem>
                            <NavigationMenuLink
                                asChild
                                className={navigationMenuTriggerStyle({
                                    className: "bg-transparent",
                                })}
                            >
                                <Link href="/contact">{t("Contact Us")}</Link>
                            </NavigationMenuLink>
                        </NavigationMenuItem>
                    </NavigationMenuList>
                </NavigationMenu>

                {/* Language Toggle */}
                <div className="ml-2">
                    <LanguageToggle />
                </div>
            </div>
        </header>
    );
}
