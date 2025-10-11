import {
    Card,
    CardContent,
    CardDescription,
    CardHeader,
    CardTitle,
} from "@/components/ui/card";
import { useLanguage } from "@/contexts/language-context";
import { Head } from "@inertiajs/react";
import { Mail, MapPin, Phone } from "lucide-react";

interface PersonalInfo {
    name: string;
    institution: string;
    address_office: string;
    phone: string;
    email: string;
}

interface Props {
    personal_info: PersonalInfo | null;
}

export default function Contact({ personal_info }: Props) {
    const { t } = useLanguage();

    return (
        <>
            <Head title="Contact Us - IGS Indonesia" />

            <div className="min-h-screen bg-background">
                <div className="mx-auto max-w-screen-lg px-4 py-8">
                    <div className="space-y-8">
                        {/* Hero Section */}
                        <div className="text-center">
                            <h1 className="mb-4 text-4xl font-bold text-foreground">
                                {t("Contact Us")}
                            </h1>
                            <p className="mx-auto max-w-3xl text-xl text-muted-foreground">
                                {t(
                                    "Get in touch with us for inquiries, collaborations, or more information about our academic work.",
                                )}
                            </p>
                        </div>

                        {/* Contact Information Cards */}
                        <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
                            {/* Email Card */}
                            <Card className="text-center transition-all hover:shadow-lg">
                                <CardHeader>
                                    <div className="mb-2 flex justify-center">
                                        <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10">
                                            <Mail className="h-6 w-6 text-primary" />
                                        </div>
                                    </div>
                                    <CardTitle>{t("Email")}</CardTitle>
                                </CardHeader>
                                <CardContent>
                                    <p className="text-muted-foreground">
                                        {personal_info?.email}
                                    </p>
                                </CardContent>
                            </Card>

                            {/* Phone Card */}
                            <Card className="text-center transition-all hover:shadow-lg">
                                <CardHeader>
                                    <div className="mb-2 flex justify-center">
                                        <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10">
                                            <Phone className="h-6 w-6 text-primary" />
                                        </div>
                                    </div>
                                    <CardTitle>{t("Phone")}</CardTitle>
                                </CardHeader>
                                <CardContent>
                                    <p className="text-muted-foreground">
                                        {personal_info?.phone}
                                    </p>
                                </CardContent>
                            </Card>

                            {/* Address Card */}
                            <Card className="text-center transition-all hover:shadow-lg">
                                <CardHeader>
                                    <div className="mb-2 flex justify-center">
                                        <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10">
                                            <MapPin className="h-6 w-6 text-primary" />
                                        </div>
                                    </div>
                                    <CardTitle>{t("Address")}</CardTitle>
                                </CardHeader>
                                <CardContent>
                                    <p className="text-muted-foreground">
                                        {personal_info?.address_office}
                                    </p>
                                </CardContent>
                            </Card>
                        </div>

                        {/* Additional Info Card */}
                        <Card className="bg-gradient-to-r from-primary to-primary/80 text-primary-foreground">
                            <CardHeader className="text-center">
                                <CardTitle className="text-2xl">
                                    {t("We'd Love to Hear From You")}
                                </CardTitle>
                            </CardHeader>
                            <CardContent className="text-center">
                                <CardDescription className="text-primary-foreground/80">
                                    {t(
                                        "Whether you have questions about our research, want to collaborate, or simply want to learn more, feel free to reach out.",
                                    )}
                                </CardDescription>
                            </CardContent>
                        </Card>
                    </div>
                </div>
            </div>
        </>
    );
}
