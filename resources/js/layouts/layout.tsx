import { LanguageProvider } from "@/contexts/language-context";
import { ReactNode } from "react";

interface LayoutProps {
    children: ReactNode;
}

export default function Layout({ children }: LayoutProps) {
    return <LanguageProvider>{children}</LanguageProvider>;
}
