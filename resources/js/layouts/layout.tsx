import { Footer } from "@/components/footer";
import { Navbar } from "@/components/navbar";
import { LanguageProvider } from "@/contexts/language-context";
import { ReactNode } from "react";

interface LayoutProps {
    children: ReactNode;
}

export default function Layout({ children }: LayoutProps) {
    return (
        <LanguageProvider>
            <div className="flex min-h-screen flex-col">
                <Navbar />
                <main className="flex-1">{children}</main>
                <Footer />
            </div>
        </LanguageProvider>
    );
}
