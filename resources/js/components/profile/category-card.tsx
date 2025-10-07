import { Badge } from "@/components/ui/badge";
import { Card } from "@/components/ui/card";
import { ChevronRight, FileText, LucideIcon } from "lucide-react";

interface CategoryCardProps {
    name: string;
    description: string;
    icon: LucideIcon;
    count: number;
    onClick: () => void;
}

export function CategoryCard({
    name,
    description,
    icon: Icon,
    count,
    onClick,
}: CategoryCardProps) {
    return (
        <button
            onClick={onClick}
            className="group w-full sm:w-[calc(50%-0.5rem)] md:w-[calc(33.333%-1rem)]"
        >
            <Card className="h-full transform border-border bg-muted p-0.5 transition-all duration-500 hover:-translate-y-2 hover:scale-105 hover:border-primary hover:shadow-xl">
                <Card className="h-full bg-gradient-to-br from-card to-muted p-6 group-hover:from-card group-hover:to-primary/5">
                    <div className="flex flex-col items-center space-y-4 text-center">
                        {/* Icon */}
                        <div className="flex h-16 w-16 items-center justify-center rounded-xl bg-gradient-to-br from-primary/10 to-primary/20 transition-colors group-hover:from-primary/20 group-hover:to-primary/30">
                            <Icon className="h-8 w-8 text-primary" />
                        </div>

                        <div className="space-y-1">
                            {/* Category Name */}
                            <h3 className="text-xl font-semibold text-foreground transition-colors group-hover:text-primary">
                                {name}
                            </h3>
                            {/* Description */}
                            <p className="text-sm leading-relaxed text-muted-foreground">
                                {description}
                            </p>
                        </div>

                        {/* Count */}
                        <Badge variant="outline" className="gap-2">
                            <FileText className="h-3 w-3" />
                            <span>{count} items</span>
                        </Badge>

                        {/* Arrow */}
                        <div className="flex items-center text-primary transition-transform group-hover:translate-x-1">
                            <span className="text-sm font-medium">
                                View Details
                            </span>
                            <ChevronRight className="ml-1 h-4 w-4" />
                        </div>
                    </div>
                </Card>
            </Card>
        </button>
    );
}
