import defaultTheme from "tailwindcss/defaultTheme";
import forms from "@tailwindcss/forms";
import typography from "@tailwindcss/typography";

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./vendor/laravel/jetstream/**/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ["Figtree", ...defaultTheme.fontFamily.sans],
                inter: ["'Inter', sans-serif"],
            },
            textColor: {
                rosa: "#FF2171",
            },
            padding: {
                headerPadding: "10px 120px",
            },
            backgroundColor: {
                headerBlack: "#191825",
                dark: "#32343b",
                dark2: "#242430",
                gray2: "#DDE6ED",
                divs: "#272930",
                azul: "#2E6FFD",
                divsProfile: "#1D2333",
                fundoProfile: "#161b28",
            },
            height: {
                bannerxl: "600px",
                bannerlg: "500px",
                altura550px: "550px",
                alturamax: "846px",
                footeraltura: "52px",
                bannerPerfilAltura: "426px",
            },
            maxHeight: {
                alturamax: "792.4px",
            },
            minHeight: {
                alturamax: "792.4px",
            },
            maxWidth: {
                maxCardImg: "1000px",
                maximg: "288px",
            },
            borderColor: {
                rosa: "#FF2171",
            },
            inset: {
                perfil: "112px",
            },
            width: {
                bannerPerfil: "1184px",
            },
        },
    },

    plugins: [forms, typography],
};
