/**
 * Common translations used across the application
 * Import and use these for consistency
 */

import { Locale } from "@/contexts/language-context";

export const commonTranslations = {
    // Navigation
    home: { id: "Beranda", en: "Home" },
    profile: { id: "Profil", en: "Profile" },
    contact: { id: "Hubungi Kami", en: "Contact Us" },
    about: { id: "Tentang", en: "About" },

    // Actions
    view: { id: "Lihat", en: "View" },
    viewDetails: { id: "Lihat Detail", en: "View Details" },
    edit: { id: "Edit", en: "Edit" },
    delete: { id: "Hapus", en: "Delete" },
    save: { id: "Simpan", en: "Save" },
    cancel: { id: "Batal", en: "Cancel" },
    search: { id: "Cari", en: "Search" },
    filter: { id: "Filter", en: "Filter" },
    sort: { id: "Urutkan", en: "Sort" },
    download: { id: "Unduh", en: "Download" },
    upload: { id: "Unggah", en: "Upload" },
    submit: { id: "Kirim", en: "Submit" },
    back: { id: "Kembali", en: "Back" },
    next: { id: "Selanjutnya", en: "Next" },
    previous: { id: "Sebelumnya", en: "Previous" },

    // Common labels
    title: { id: "Judul", en: "Title" },
    description: { id: "Deskripsi", en: "Description" },
    year: { id: "Tahun", en: "Year" },
    date: { id: "Tanggal", en: "Date" },
    startDate: { id: "Tanggal Mulai", en: "Start Date" },
    endDate: { id: "Tanggal Selesai", en: "End Date" },
    location: { id: "Lokasi", en: "Location" },
    status: { id: "Status", en: "Status" },
    type: { id: "Tipe", en: "Type" },
    category: { id: "Kategori", en: "Category" },
    categories: { id: "Kategori", en: "Categories" },

    // Counts
    items: { id: "item", en: "items" },
    results: { id: "hasil", en: "results" },
    totalItems: { id: "Total Item", en: "Total Items" },

    // Messages
    loading: { id: "Memuat...", en: "Loading..." },
    noData: { id: "Tidak ada data", en: "No data available" },
    noResults: {
        id: "Tidak ada hasil yang ditemukan",
        en: "No results found",
    },
    searchPlaceholder: { id: "Cari...", en: "Search..." },
    error: { id: "Terjadi kesalahan", en: "An error occurred" },
    success: { id: "Berhasil", en: "Success" },

    // Time periods
    present: { id: "Sekarang", en: "Present" },
    ongoing: { id: "Sedang Berlangsung", en: "Ongoing" },
    completed: { id: "Selesai", en: "Completed" },

    // Academic specific
    academicProfile: { id: "Profil Akademik", en: "Academic Profile" },
    publications: { id: "Publikasi", en: "Publications" },
    research: { id: "Penelitian", en: "Research" },
    education: { id: "Pendidikan", en: "Education" },
    teaching: { id: "Pengajaran", en: "Teaching" },
    awards: { id: "Penghargaan", en: "Awards" },
    conferences: { id: "Konferensi", en: "Conferences" },
    books: { id: "Buku", en: "Books" },
} as const;

/**
 * Helper to get a common translation
 * @param key - Key from commonTranslations
 * @param locale - Current locale
 */
export function getCommonTranslation(
    key: keyof typeof commonTranslations,
    locale: Locale,
): string {
    return commonTranslations[key][locale];
}

/**
 * Date formatting helpers for different locales
 */
export const dateFormats: Record<Locale, Intl.DateTimeFormatOptions> = {
    id: {
        year: "numeric",
        month: "long",
        day: "numeric",
    },
    en: {
        year: "numeric",
        month: "long",
        day: "numeric",
    },
};

/**
 * Format a date according to the locale
 */
export function formatDate(date: Date | string, locale: Locale): string {
    const dateObj = typeof date === "string" ? new Date(date) : date;
    return new Intl.DateTimeFormat(locale, dateFormats[locale]).format(dateObj);
}

/**
 * Format a year range (e.g., "2020 - 2024" or "2020 - Present")
 */
export function formatYearRange(
    startYear: number,
    endYear: number | null,
    locale: Locale,
): string {
    const present = locale === "id" ? "Sekarang" : "Present";
    return `${startYear} - ${endYear ?? present}`;
}
