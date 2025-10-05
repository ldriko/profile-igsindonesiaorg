import { Navbar } from "@/components/navbar";
import {
    Accordion,
    AccordionContent,
    AccordionItem,
    AccordionTrigger,
} from "@/components/ui/accordion";
import { Card } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Head, Link } from "@inertiajs/react";
import { ChevronRight, HelpCircle, Home, Search } from "lucide-react";
import { useState } from "react";

interface Faq {
    id: number;
    question: string;
    question_en: string;
    question_id: string;
    answer: string;
    answer_en: string;
    answer_id: string;
}

interface FaqCategory {
    id: number;
    name: string;
    name_en: string;
    name_id: string;
    description: string;
    description_en: string;
    description_id: string;
    icon: string;
    activeFaqs: Faq[];
}

interface Props {
    category: FaqCategory & {
        activeFaqs: Faq[];
    };
}

export default function FaqCategory({ category }: Props) {
    const [searchTerm, setSearchTerm] = useState("");
    const locale = "en"; // You can get this from your Laravel app

    const getLocalizedName = () => {
        return locale === "en" ? category.name_en : category.name_id;
    };

    const getLocalizedDescription = () => {
        return locale === "en" ? category.description_en : category.description_id;
    };

    const getLocalizedQuestion = (faq: Faq) => {
        return locale === "en" ? faq.question_en : faq.question_id;
    };

    const getLocalizedAnswer = (faq: Faq) => {
        return locale === "en" ? faq.answer_en : faq.answer_id;
    };

    const filteredFaqs = category.activeFaqs.filter((faq) => {
        const question = getLocalizedQuestion(faq).toLowerCase();
        const answer = getLocalizedAnswer(faq).toLowerCase();
        const search = searchTerm.toLowerCase();
        return question.includes(search) || answer.includes(search);
    });

    return (
        <>
            <Head title={`${getLocalizedName()} - FAQ ASIIN`} />

            <Navbar />

            <div className="min-h-screen bg-background">
                <div className="container mx-auto px-4 py-8">
                    <div className="space-y-8">
                        {/* Breadcrumb */}
                        <nav className="flex" aria-label="Breadcrumb">
                            <ol className="flex items-center space-x-3">
                                <li>
                                    <Link
                                        href="/faq"
                                        className="text-muted-foreground hover:text-primary transition-colors group"
                                    >
                                        <Home className="h-5 w-5 group-hover:text-primary transition-colors" />
                                        <span className="sr-only">
                                            {locale === "en" ? "Home" : "Beranda"}
                                        </span>
                                    </Link>
                                </li>
                                <li>
                                    <div className="flex items-center">
                                        <ChevronRight className="h-4 w-4 text-muted-foreground" />
                                        <Link
                                            href="/faq"
                                            className="ml-3 text-sm font-medium text-muted-foreground hover:text-primary transition-colors"
                                        >
                                            FAQ
                                        </Link>
                                    </div>
                                </li>
                                <li>
                                    <div className="flex items-center">
                                        <ChevronRight className="h-4 w-4 text-muted-foreground" />
                                        <span className="ml-3 text-sm font-medium text-primary">
                                            {getLocalizedName()}
                                        </span>
                                    </div>
                                </li>
                            </ol>
                        </nav>

                        {/* Category Header */}
                        <Card className="bg-gradient-to-r from-primary to-primary/80 text-primary-foreground border-0">
                            <div className="p-8">
                                <div className="flex items-center space-x-4">
                                    <div className="w-16 h-16 bg-primary-foreground/20 rounded-xl flex items-center justify-center">
                                        <span className="text-3xl">{category.icon || "📄"}</span>
                                    </div>
                                    <div>
                                        <h1 className="text-3xl font-bold mb-2">{getLocalizedName()}</h1>
                                        <p className="text-primary-foreground/80 text-lg">
                                            {getLocalizedDescription()}
                                        </p>
                                        <div className="flex items-center mt-3 text-primary-foreground/70">
                                            <HelpCircle className="w-4 h-4 mr-2" />
                                            <span>
                                                {category.activeFaqs.length}{" "}
                                                {locale === "en" ? "questions available" : "pertanyaan tersedia"}
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </Card>

                        {category.activeFaqs.length > 0 ? (
                            <>
                                {/* Search FAQ */}
                                <div className="max-w-md mx-auto">
                                    <div className="relative group">
                                        <Search className="absolute left-3 top-1/2 -translate-y-1/2 h-5 w-5 text-muted-foreground transition-colors group-focus-within:text-primary" />
                                        <Input
                                            type="text"
                                            className="pl-10"
                                            placeholder={
                                                locale === "en"
                                                    ? "Search questions in this category..."
                                                    : "Cari pertanyaan dalam kategori ini..."
                                            }
                                            value={searchTerm}
                                            onChange={(e) => setSearchTerm(e.target.value)}
                                        />
                                    </div>
                                </div>

                                {/* FAQ Accordion */}
                                {filteredFaqs.length > 0 ? (
                                    <div className="max-w-7xl mx-auto">
                                        <Accordion type="single" collapsible className="space-y-4">
                                            {filteredFaqs.map((faq) => (
                                                <AccordionItem
                                                    key={faq.id}
                                                    value={`faq-${faq.id}`}
                                                    className="border border-border rounded-xl overflow-hidden bg-card hover:shadow-lg transition-all duration-300"
                                                >
                                                    <AccordionTrigger className="px-6 py-5 text-left hover:no-underline group">
                                                        <h3 className="text-lg font-semibold text-foreground pr-4 group-hover:text-primary transition-colors duration-200">
                                                            {getLocalizedQuestion(faq)}
                                                        </h3>
                                                    </AccordionTrigger>
                                                    <AccordionContent className="px-6 pb-6">
                                                        <div className="border-t border-border pt-4">
                                                            <div
                                                                className="text-muted-foreground leading-relaxed prose prose-blue max-w-none"
                                                                dangerouslySetInnerHTML={{
                                                                    __html: getLocalizedAnswer(faq),
                                                                }}
                                                            />
                                                        </div>
                                                    </AccordionContent>
                                                </AccordionItem>
                                            ))}
                                        </Accordion>
                                    </div>
                                ) : (
                                    /* No Results Message */
                                    <div className="text-center py-16">
                                        <div className="animate-bounce mb-6">
                                            <Search className="mx-auto h-16 w-16 text-primary/40" />
                                        </div>
                                        <h3 className="text-xl font-semibold text-foreground mb-2">
                                            {locale === "en" ? "No results found" : "Tidak ada hasil ditemukan"}
                                        </h3>
                                        <p className="text-muted-foreground text-lg max-w-md mx-auto">
                                            {locale === "en"
                                                ? "Try searching with different keywords or browse all questions below."
                                                : "Coba cari dengan kata kunci yang berbeda atau lihat semua pertanyaan di bawah."}
                                        </p>
                                    </div>
                                )}
                            </>
                        ) : (
                            /* Empty State */
                            <div className="text-center py-20">
                                <div className="animate-pulse mb-6">
                                    <HelpCircle className="mx-auto h-20 w-20 text-primary/30" />
                                </div>
                                <h3 className="text-2xl font-bold text-foreground mb-3">
                                    {locale === "en" ? "No FAQ Available Yet" : "Belum Ada FAQ"}
                                </h3>
                                <p className="text-muted-foreground text-lg max-w-md mx-auto mb-8">
                                    {locale === "en"
                                        ? "This category doesn't have any questions and answers yet. Check back later!"
                                        : "Kategori ini belum memiliki pertanyaan dan jawaban. Coba lagi nanti!"}
                                </p>
                                <Link
                                    href="/faq"
                                    className="inline-flex items-center px-6 py-3 bg-primary text-primary-foreground rounded-xl font-semibold hover:bg-primary/90 transition-all duration-300 transform hover:scale-105 shadow-lg"
                                >
                                    {locale === "en" ? "Browse Other Categories" : "Lihat Kategori Lain"}
                                </Link>
                            </div>
                        )}
                    </div>
                </div>
            </div>
        </>
    );
}
