import { Button } from "@/components/ui/button";
import {
    DropdownMenu,
    DropdownMenuContent,
    DropdownMenuItem,
    DropdownMenuTrigger,
} from "@/components/ui/dropdown-menu";
import { Locale, useLanguage } from "@/contexts/language-context";
import { Check, Globe } from "lucide-react";

const languages = [
    {
        code: "id" as Locale,
        name: "Indonesian",
        nameKey: "Indonesian",
        flag: "🇮🇩",
    },
    {
        code: "en" as Locale,
        name: "English",
        nameKey: "English",
        flag: "🇬🇧",
    },
];

export function LanguageToggle() {
    const { locale, setLocale, t } = useLanguage();

    const currentLanguage = languages.find((lang) => lang.code === locale);

    return (
        <DropdownMenu>
            <DropdownMenuTrigger asChild>
                <Button
                    variant="ghost"
                    size="sm"
                    className="h-9 gap-2 px-2 md:px-3"
                >
                    <span className="text-lg leading-none">
                        {currentLanguage?.flag}
                    </span>
                    <Globe className="h-4 w-4" />
                </Button>
            </DropdownMenuTrigger>
            <DropdownMenuContent align="end">
                {languages.map((language) => (
                    <DropdownMenuItem
                        key={language.code}
                        onClick={() => setLocale(language.code)}
                        className="cursor-pointer gap-2"
                    >
                        <span className="text-lg leading-none">
                            {language.flag}
                        </span>
                        <span>{t(language.nameKey)}</span>
                        {locale === language.code && (
                            <Check className="ml-auto h-4 w-4" />
                        )}
                    </DropdownMenuItem>
                ))}
            </DropdownMenuContent>
        </DropdownMenu>
    );
}
