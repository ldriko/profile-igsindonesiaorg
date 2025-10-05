import { Locale } from "@/contexts/language-context";

/**
 * Get a translated field from a model that uses Spatie's HasTranslations trait.
 * The field should be stored as an object with locale keys (e.g., { id: "...", en: "..." })
 *
 * @param field - The translatable field from the model (can be string or object)
 * @param locale - The current locale
 * @param fallbackLocale - Fallback locale if translation doesn't exist (defaults to 'id')
 * @returns The translated string
 */
export function getTranslation(
    field: string | Record<string, string> | null | undefined,
    locale: Locale,
    fallbackLocale: Locale = "id",
): string {
    // If field is null or undefined, return empty string
    if (!field) {
        return "";
    }

    // If field is already a string, return it
    if (typeof field === "string") {
        return field;
    }

    // If field is an object (translations object)
    if (typeof field === "object") {
        // Try to get the translation for the current locale
        if (field[locale]) {
            return field[locale];
        }

        // Fallback to fallback locale
        if (field[fallbackLocale]) {
            return field[fallbackLocale];
        }

        // If both fail, try to return any available translation
        const availableTranslations = Object.values(field);
        if (availableTranslations.length > 0) {
            return availableTranslations[0];
        }
    }

    return "";
}

/**
 * Hook-like function to create a translation getter with the current locale
 * Use this in components after getting locale from useLanguage()
 *
 * @param locale - The current locale from useLanguage()
 * @returns A function to get translations
 */
export function createTranslator(locale: Locale) {
    return (
        field: string | Record<string, string> | null | undefined,
        fallbackLocale: Locale = "id",
    ): string => {
        return getTranslation(field, locale, fallbackLocale);
    };
}
