import "../css/app.css";

import Layout from "@/layouts/layout";
import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";
import { createRoot } from "react-dom/client";

const appName = import.meta.env.VITE_APP_NAME || "Laravel";

createInertiaApp({
    title: (title) => (title ? `${title} - ${appName}` : appName),
    resolve: async (name) => {
        const page = await resolvePageComponent(
            `./pages/${name}.tsx`,
            import.meta.glob("./pages/**/*.tsx"),
        );
        // eslint-disable-next-line @typescript-eslint/no-explicit-any
        (page as any).default.layout =
            // eslint-disable-next-line @typescript-eslint/no-explicit-any
            (page as any).default.layout ||
            ((page: React.ReactNode) => <Layout>{page}</Layout>);
        return page;
    },
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(<App {...props} />);
    },
    progress: {
        color: "#4B5563",
    },
});
