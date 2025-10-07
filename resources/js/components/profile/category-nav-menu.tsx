import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { cn } from "@/lib/utils";
import { Home, LucideIcon } from "lucide-react";

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

interface CategoryNavMenuProps {
    categories: ModelCategory[];
    selectedCategory: string | null;
    onCategorySelect: (category: ModelCategory) => void;
    onBackToHome: () => void;
    getLocalizedName: (category: ModelCategory) => string;
    t: (key: string) => string;
}

export function CategoryNavMenu({
    categories,
    selectedCategory,
    onCategorySelect,
    onBackToHome,
    getLocalizedName,
    t,
}: CategoryNavMenuProps) {
    return (
        <div className="space-y-4">
            {/* Back to Home Button */}
            <Button
                onClick={onBackToHome}
                className="w-full justify-start gap-3"
                variant="outline"
            >
                <Home className="h-5 w-5" />
                <span>{t("Back to Home")}</span>
            </Button>

            {/* Category Menu Items */}
            <nav className="space-y-2">
                {categories.map((category, index) => {
                    const Icon = category.icon;
                    const isSelected = selectedCategory === category.name;
                    return (
                        <Button
                            key={index}
                            onClick={() => onCategorySelect(category)}
                            variant={isSelected ? "default" : "ghost"}
                            className={cn(
                                "h-auto w-full justify-start gap-3 py-3",
                                !isSelected && "hover:bg-primary/10",
                            )}
                        >
                            <Icon className="h-5 w-5 shrink-0" />
                            <div className="flex flex-1 flex-col items-start gap-0.5">
                                <span className="text-sm font-medium">
                                    {getLocalizedName(category)}
                                </span>
                                <Badge
                                    variant={
                                        isSelected ? "secondary" : "outline"
                                    }
                                    className="text-xs"
                                >
                                    {category.count} {t("items")}
                                </Badge>
                            </div>
                        </Button>
                    );
                })}
            </nav>
        </div>
    );
}
