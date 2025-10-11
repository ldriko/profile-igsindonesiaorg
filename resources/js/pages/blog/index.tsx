import { BlogPostCard } from "@/components/blog/blog-post-card";
import { Input } from "@/components/ui/input";
import { useLanguage } from "@/contexts/language-context";
import { Head, router } from "@inertiajs/react";
import { Newspaper, Search as SearchIcon } from "lucide-react";
import { useEffect, useState } from "react";

interface PersonalInfo {
    name: string;
    picture: string | null;
}

interface BlogPost {
    id: number;
    slug: string;
    title: string;
    excerpt: string;
    published_at: string;
    featured_image: string;
}

interface Props {
    personal_info: PersonalInfo | null;
    posts: BlogPost[];
    search: string;
}

export default function BlogIndex({ posts, search: initialSearch }: Props) {
    const { t } = useLanguage();
    const [searchTerm, setSearchTerm] = useState(initialSearch);

    // Debounced search using Inertia reload
    useEffect(() => {
        const timer = setTimeout(() => {
            router.reload({
                data: { search: searchTerm },
                only: ["posts"],
            });
        }, 300);

        return () => clearTimeout(timer);
    }, [searchTerm]);

    return (
        <>
            <Head title={`${t("Blog")} - IGS Indonesia`} />

            <div className="min-h-screen bg-background">
                {/* Header Section */}
                <div className="border-b-1 bg-gradient-to-br from-primary/5 to-primary/10 py-12 lg:py-20">
                    <div className="mx-auto max-w-screen-lg px-4">
                        <div className="text-center">
                            <div className="mx-auto mb-6 flex h-16 w-16 items-center justify-center rounded-2xl bg-gradient-to-br from-primary/20 to-primary/30">
                                <Newspaper className="h-8 w-8 text-primary" />
                            </div>
                            <h1 className="mb-4 text-4xl font-bold text-foreground lg:text-5xl">
                                {t("Blog")}
                            </h1>
                            <p className="mx-auto max-w-2xl text-lg text-muted-foreground">
                                {t("Read our latest articles and insights")}
                            </p>
                        </div>
                    </div>
                </div>

                {/* Content Section */}
                <div className="mx-auto max-w-screen-lg px-4 py-8 lg:py-12">
                    {/* Search Bar */}
                    <div className="mb-8">
                        <div className="group relative mx-auto max-w-md">
                            <SearchIcon className="absolute top-1/2 left-3 h-5 w-5 -translate-y-1/2 text-muted-foreground transition-colors group-focus-within:text-primary" />
                            <Input
                                type="text"
                                className="pl-10"
                                placeholder={t("Search blog posts...")}
                                value={searchTerm}
                                onChange={(e) => setSearchTerm(e.target.value)}
                            />
                        </div>
                    </div>

                    {/* Blog Posts Grid */}
                    {posts.length > 0 ? (
                        <div className="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">
                            {posts.map((post) => (
                                <BlogPostCard key={post.id} post={post} t={t} />
                            ))}
                        </div>
                    ) : (
                        /* Empty State */
                        <div className="py-16 text-center">
                            <Newspaper className="mx-auto mb-4 h-16 w-16 text-muted-foreground" />
                            <h3 className="mb-2 text-xl font-semibold text-foreground">
                                {t("No blog posts found")}
                            </h3>
                            <p className="text-muted-foreground">
                                {searchTerm
                                    ? t(
                                          "No blog posts match your search. Try different keywords.",
                                      )
                                    : t(
                                          "There are currently no published blog posts.",
                                      )}
                            </p>
                        </div>
                    )}
                </div>
            </div>
        </>
    );
}
