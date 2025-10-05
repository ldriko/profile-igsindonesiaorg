import { Navbar } from "@/components/navbar";
import { Card } from "@/components/ui/card";
import { Head } from "@inertiajs/react";
import { Mail, MapPin, Phone } from "lucide-react";

export default function Contact() {
    const locale = "en"; // You can get this from your Laravel app

    return (
        <>
            <Head title="Contact Us - IGS Indonesia" />

            <Navbar />

            <div className="min-h-screen bg-background">
                <div className="mx-auto max-w-screen-lg px-4 py-8">
                    <div className="space-y-8">
                        {/* Hero Section */}
                        <div className="text-center">
                            <h1 className="mb-4 text-4xl font-bold text-foreground">
                                {locale === "en"
                                    ? "Contact Us"
                                    : "Hubungi Kami"}
                            </h1>
                            <p className="mx-auto max-w-3xl text-xl text-muted-foreground">
                                {locale === "en"
                                    ? "Get in touch with us for inquiries, collaborations, or more information about our academic work."
                                    : "Hubungi kami untuk pertanyaan, kolaborasi, atau informasi lebih lanjut tentang karya akademik kami."}
                            </p>
                        </div>

                        {/* Contact Information Cards */}
                        <div className="grid grid-cols-1 gap-6 md:grid-cols-3">
                            {/* Email Card */}
                            <Card className="p-6 text-center transition-all hover:shadow-lg">
                                <div className="mb-4 flex justify-center">
                                    <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10">
                                        <Mail className="h-6 w-6 text-primary" />
                                    </div>
                                </div>
                                <h3 className="mb-2 text-lg font-semibold text-foreground">
                                    {locale === "en" ? "Email" : "Email"}
                                </h3>
                                <p className="text-muted-foreground">
                                    contact@igsindonesia.org
                                </p>
                            </Card>

                            {/* Phone Card */}
                            <Card className="p-6 text-center transition-all hover:shadow-lg">
                                <div className="mb-4 flex justify-center">
                                    <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10">
                                        <Phone className="h-6 w-6 text-primary" />
                                    </div>
                                </div>
                                <h3 className="mb-2 text-lg font-semibold text-foreground">
                                    {locale === "en" ? "Phone" : "Telepon"}
                                </h3>
                                <p className="text-muted-foreground">
                                    +62 21 1234 5678
                                </p>
                            </Card>

                            {/* Address Card */}
                            <Card className="p-6 text-center transition-all hover:shadow-lg">
                                <div className="mb-4 flex justify-center">
                                    <div className="flex h-12 w-12 items-center justify-center rounded-full bg-primary/10">
                                        <MapPin className="h-6 w-6 text-primary" />
                                    </div>
                                </div>
                                <h3 className="mb-2 text-lg font-semibold text-foreground">
                                    {locale === "en" ? "Address" : "Alamat"}
                                </h3>
                                <p className="text-muted-foreground">
                                    Jakarta, Indonesia
                                </p>
                            </Card>
                        </div>

                        {/* Additional Info Card */}
                        <Card className="bg-gradient-to-r from-primary to-primary/80 text-primary-foreground">
                            <div className="p-8 text-center">
                                <h2 className="mb-2 text-2xl font-bold">
                                    {locale === "en"
                                        ? "We'd Love to Hear From You"
                                        : "Kami Ingin Mendengar Dari Anda"}
                                </h2>
                                <p className="text-primary-foreground/80">
                                    {locale === "en"
                                        ? "Whether you have questions about our research, want to collaborate, or simply want to learn more, feel free to reach out."
                                        : "Baik Anda memiliki pertanyaan tentang penelitian kami, ingin berkolaborasi, atau sekadar ingin mempelajari lebih lanjut, jangan ragu untuk menghubungi."}
                                </p>
                            </div>
                        </Card>
                    </div>
                </div>
            </div>
        </>
    );
}
