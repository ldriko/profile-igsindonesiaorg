import React, { createContext, useContext, useEffect, useState } from "react";

export type Locale = "id" | "en";

interface LanguageContextType {
    locale: Locale;
    setLocale: (locale: Locale) => void;
    t: (translations: Record<Locale, string>) => string;
}

const LanguageContext = createContext<LanguageContextType | undefined>(
    undefined,
);

export function LanguageProvider({ children }: { children: React.ReactNode }) {
    const [locale, setLocaleState] = useState<Locale>(() => {
        // Get from localStorage or default to 'id' (Indonesian)
        if (typeof window !== "undefined") {
            const saved = localStorage.getItem("locale");
            return (saved === "id" || saved === "en" ? saved : "id") as Locale;
        }
        return "id";
    });

    const setLocale = (newLocale: Locale) => {
        setLocaleState(newLocale);
        if (typeof window !== "undefined") {
            localStorage.setItem("locale", newLocale);
        }
    };

    // Translation helper function for simple translations
    const t = (translations: Record<Locale, string>): string => {
        return translations[locale] || translations.id;
    };

    useEffect(() => {
        // Update HTML lang attribute
        if (typeof document !== "undefined") {
            document.documentElement.lang = locale;
        }
    }, [locale]);

    return (
        <LanguageContext.Provider value={{ locale, setLocale, t }}>
            {children}
        </LanguageContext.Provider>
    );
}

export function useLanguage() {
    const context = useContext(LanguageContext);
    if (context === undefined) {
        throw new Error("useLanguage must be used within a LanguageProvider");
    }
    return context;
}
