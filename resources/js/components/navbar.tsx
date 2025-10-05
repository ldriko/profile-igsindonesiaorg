import { LanguageToggle } from "@/components/language-toggle";
import { Button } from "@/components/ui/button";
import {
    NavigationMenu,
    NavigationMenuContent,
    NavigationMenuItem,
    NavigationMenuLink,
    NavigationMenuList,
    NavigationMenuTrigger,
    navigationMenuTriggerStyle,
} from "@/components/ui/navigation-menu";
import {
    Sheet,
    SheetContent,
    SheetHeader,
    SheetTitle,
    SheetTrigger,
} from "@/components/ui/sheet";
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
    Menu,
    Newspaper,
    Presentation,
    School,
    Users,
} from "lucide-react";
import { useState } from "react";

// Navigation menu items configuration
const profileMenuItems = [
    {
        href: "/book-writings",
        icon: BookOpen,
        title: "Book Writings",
        description: "Published books and written works",
    },
    {
        href: "/community-services",
        icon: Users,
        title: "Community Services",
        description: "Contributions and services to the community",
    },
    {
        href: "/conferences",
        icon: Presentation,
        title: "Conferences",
        description: "Academic conferences and presentations attended",
    },
    {
        href: "/education",
        icon: GraduationCap,
        title: "Education",
        description: "Educational background and academic qualifications",
    },
    {
        href: "/institution-positions",
        icon: Briefcase,
        title: "Institution Positions",
        description: "Positions held within various institutions",
    },
    {
        href: "/intellectual-properties",
        icon: Lightbulb,
        title: "Intellectual Properties",
        description:
            "Patents, copyrights, and other intellectual property rights",
    },
    {
        href: "/organizations",
        icon: Building,
        title: "Organizations",
        description: "Professional and academic organizations memberships",
    },
    {
        href: "/policy-experiences",
        icon: FileText,
        title: "Policy Experiences",
        description: "Experience in policy-making and advisory roles",
    },
    {
        href: "/publications",
        icon: Newspaper,
        title: "Publications",
        description: "Academic publications and research papers",
    },
    {
        href: "/research",
        icon: FlaskConical,
        title: "Research",
        description: "Research projects and funded studies",
    },
    {
        href: "/teaching-experiences",
        icon: School,
        title: "Teaching Experiences",
        description: "Teaching positions and academic instruction experience",
    },
    {
        href: "/teaching-materials",
        icon: FileEdit,
        title: "Teaching Materials",
        description: "Educational materials and course content developed",
    },
    {
        href: "/trainings",
        icon: Award,
        title: "Trainings",
        description: "Professional development and training programs attended",
    },
];

export function Navbar() {
    const { t } = useLanguage();
    const [mobileMenuOpen, setMobileMenuOpen] = useState(false);

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

                {/* Desktop Navigation Menu */}
                <NavigationMenu
                    className="ml-auto hidden lg:flex"
                    viewport={true}
                >
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
                                    {profileMenuItems.map((item) => {
                                        const Icon = item.icon;
                                        return (
                                            <li key={item.href}>
                                                <NavigationMenuLink asChild>
                                                    <Link
                                                        href={item.href}
                                                        className="flex flex-col gap-1 rounded-md p-3 leading-none no-underline transition-colors outline-none select-none hover:bg-accent hover:text-accent-foreground focus:bg-accent focus:text-accent-foreground"
                                                    >
                                                        <div className="flex items-center gap-2">
                                                            <Icon className="h-4 w-4" />
                                                            <div className="text-sm leading-none font-medium">
                                                                {t(item.title)}
                                                            </div>
                                                        </div>
                                                        <p className="text-xs leading-snug text-muted-foreground">
                                                            {t(
                                                                item.description,
                                                            )}
                                                        </p>
                                                    </Link>
                                                </NavigationMenuLink>
                                            </li>
                                        );
                                    })}
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

                {/* Mobile Menu Button */}
                <div className="ml-auto flex items-center gap-2 lg:hidden">
                    <Sheet
                        open={mobileMenuOpen}
                        onOpenChange={setMobileMenuOpen}
                    >
                        <SheetTrigger asChild>
                            <Button
                                variant="ghost"
                                size="icon"
                                className="lg:hidden"
                            >
                                <Menu className="h-5 w-5" />
                                <span className="sr-only">Toggle menu</span>
                            </Button>
                        </SheetTrigger>
                        <SheetContent
                            side="left"
                            className="flex w-[300px] flex-col p-0 sm:w-[400px]"
                        >
                            <SheetHeader className="px-4 pt-4 pb-2">
                                <SheetTitle className="flex items-center gap-2">
                                    <GraduationCap className="h-5 w-5 text-primary" />
                                    IGS Indonesia
                                </SheetTitle>
                            </SheetHeader>
                            <nav className="flex-1 overflow-y-auto px-4 pb-4">
                                <div className="mt-0 flex flex-col gap-4">
                                    {/* Home Link */}
                                    <Link
                                        href="/"
                                        className="rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
                                        onClick={() => setMobileMenuOpen(false)}
                                    >
                                        {t("Home")}
                                    </Link>

                                    {/* Profile Section */}
                                    <div className="flex flex-col gap-2">
                                        <div className="px-3 text-sm font-semibold text-muted-foreground">
                                            {t("Profile")}
                                        </div>
                                        <div className="flex flex-col gap-1">
                                            {profileMenuItems.map((item) => {
                                                const Icon = item.icon;
                                                return (
                                                    <Link
                                                        key={item.href}
                                                        href={item.href}
                                                        className="flex items-center gap-3 rounded-md px-3 py-2 text-sm transition-colors hover:bg-accent hover:text-accent-foreground"
                                                        onClick={() =>
                                                            setMobileMenuOpen(
                                                                false,
                                                            )
                                                        }
                                                    >
                                                        <Icon className="h-4 w-4 shrink-0" />
                                                        <span>
                                                            {t(item.title)}
                                                        </span>
                                                    </Link>
                                                );
                                            })}
                                        </div>
                                    </div>

                                    {/* Contact Link */}
                                    <Link
                                        href="/contact"
                                        className="rounded-md px-3 py-2 text-sm font-medium transition-colors hover:bg-accent hover:text-accent-foreground"
                                        onClick={() => setMobileMenuOpen(false)}
                                    >
                                        {t("Contact Us")}
                                    </Link>
                                </div>
                            </nav>
                        </SheetContent>
                    </Sheet>
                </div>

                {/* Language Toggle */}
                <div className="ml-2">
                    <LanguageToggle />
                </div>
            </div>
        </header>
    );
}
