import { Badge } from "@/components/ui/badge";
import { Button } from "@/components/ui/button";
import {
    Card,
    CardDescription,
    CardFooter,
    CardHeader,
    CardTitle,
} from "@/components/ui/card";
import { Calendar, ChevronRight, ExternalLink } from "lucide-react";

interface ContentCardProps {
    title: string;
    description: string;
    date: string;
    url?: string;
    onViewDetails?: () => void;
    t: (key: string) => string;
}

export function ContentCard({
    title,
    description,
    date,
    url,
    onViewDetails,
    t,
}: ContentCardProps) {
    return (
        <Card
            className="group flex h-full transform flex-col border-border bg-card transition-all duration-300 hover:-translate-y-1 hover:border-primary hover:shadow-lg cursor-pointer"
            onClick={onViewDetails}
            role="button"
            tabIndex={0}
            aria-label={t("View Details")}
        >
            <div className="flex-1">
                <CardHeader>
                    <CardTitle className="text-lg group-hover:text-primary">
                        {title}
                    </CardTitle>
                    <CardDescription className="text-sm leading-relaxed">
                        {description}
                    </CardDescription>
                    <Badge variant="outline" className="gap-1.5">
                        <Calendar className="h-3 w-3" />
                        <span>{date}</span>
                    </Badge>
                </CardHeader>
            </div>
            <CardFooter className="mt-auto flex items-center justify-between">
                {url && (
                    <Button variant="outline" size="sm" asChild onClick={e => e.stopPropagation()}>
                        <a
                            href={url}
                            target="_blank"
                            rel="noopener noreferrer"
                            className="gap-1"
                        >
                            <ExternalLink className="h-4 w-4" />
                            {t("Open")}
                        </a>
                    </Button>
                )}
                <Button
                    variant="outline"
                    size="sm"
                    onClick={e => {
                        e.stopPropagation();
                        if (onViewDetails) onViewDetails();
                    }}
                    className="gap-1 transition-all hover:gap-2"
                >
                    {t("View Details")}
                    <ChevronRight className="h-4 w-4" />
                </Button>
            </CardFooter>
        </Card>
    );
}
