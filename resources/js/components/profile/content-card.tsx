import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import { Card } from "@/components/ui/card";
import { Calendar, ChevronRight } from "lucide-react";

interface ContentCardProps {
    title: string;
    description: string;
    date: string;
    onViewDetails?: () => void;
}

export function ContentCard({
    title,
    description,
    date,
    onViewDetails,
}: ContentCardProps) {
    return (
        <Card className="group transform border-border bg-card transition-all duration-300 hover:-translate-y-1 hover:border-primary hover:shadow-lg">
            <div className="p-6">
                <h3 className="mb-2 text-lg font-semibold text-foreground group-hover:text-primary">
                    {title}
                </h3>
                <p className="mb-4 text-sm leading-relaxed text-muted-foreground">
                    {description}
                </p>
                <div className="flex items-center justify-between">
                    <Badge variant="outline" className="gap-1.5">
                        <Calendar className="h-3 w-3" />
                        <span>{date}</span>
                    </Badge>
                    <Button
                        variant="ghost"
                        size="sm"
                        onClick={onViewDetails}
                        className="gap-1 text-primary transition-all hover:gap-2"
                    >
                        View Details
                        <ChevronRight className="h-4 w-4" />
                    </Button>
                </div>
            </div>
        </Card>
    );
}
