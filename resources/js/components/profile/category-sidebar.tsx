import { LucideIcon } from "lucide-react";
import { CategoryNavMenu } from "./category-nav-menu";

interface ModelCategory {
    name: string;
    name_en: string;
    name_id: string;
    description_en: string;
    description_id: string;
    icon: LucideIcon;
    count: number;
    route: string;
}

interface CategorySidebarProps {
    categories: ModelCategory[];
    selectedCategory: string | null;
    onCategorySelect: (category: ModelCategory) => void;
    onBackToHome: () => void;
    getLocalizedName: (category: ModelCategory) => string;
    t: (key: string) => string;
}

export function CategorySidebar({
    categories,
    selectedCategory,
    onCategorySelect,
    onBackToHome,
    getLocalizedName,
    t,
}: CategorySidebarProps) {
    return (
        <aside className="hidden w-64 border-r border-border bg-muted/30 p-4 lg:block">
            <div className="sticky top-4">
                <CategoryNavMenu
                    categories={categories}
                    selectedCategory={selectedCategory}
                    onCategorySelect={onCategorySelect}
                    onBackToHome={onBackToHome}
                    getLocalizedName={getLocalizedName}
                    t={t}
                />
            </div>
        </aside>
    );
}
