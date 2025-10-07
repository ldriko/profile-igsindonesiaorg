import { Card } from "@/components/ui/card";

interface StatsCardProps {
    stats: {
        label: string;
        value: number | string;
    }[];
}

export function StatsCard({ stats }: StatsCardProps) {
    return (
        <Card className="bg-gradient-to-r from-primary to-primary/80 text-primary-foreground">
            <div className="grid grid-cols-1 gap-8 text-center md:grid-cols-3">
                {stats.map((stat, index) => (
                    <div key={index}>
                        <div className="mb-2 text-3xl font-bold">
                            {stat.value}
                        </div>
                        <div className="text-primary-foreground/80">
                            {stat.label}
                        </div>
                    </div>
                ))}
            </div>
        </Card>
    );
}
