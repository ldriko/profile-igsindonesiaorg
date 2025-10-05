import { LanguageToggle } from "@/components/language-toggle";
import {
    NavigationMenu,
    NavigationMenuItem,
    NavigationMenuLink,
    NavigationMenuList,
    navigationMenuTriggerStyle,
} from "@/components/ui/navigation-menu";
import { useLanguage } from "@/contexts/language-context";
import { Link } from "@inertiajs/react";
import { GraduationCap } from "lucide-react";

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
                <NavigationMenu className="ml-auto">
                    <NavigationMenuList>
                        <NavigationMenuItem>
                            <NavigationMenuLink
                                asChild
                                className={navigationMenuTriggerStyle()}
                            >
                                <Link href="/">
                                    {t({ id: "Profil", en: "Profile" })}
                                </Link>
                            </NavigationMenuLink>
                        </NavigationMenuItem>
                        <NavigationMenuItem>
                            <NavigationMenuLink
                                asChild
                                className={navigationMenuTriggerStyle()}
                            >
                                <Link href="/contact">
                                    {t({
                                        id: "Hubungi Kami",
                                        en: "Contact Us",
                                    })}
                                </Link>
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
