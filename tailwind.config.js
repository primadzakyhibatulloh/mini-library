import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    // 1. WAJIB: Aktifkan Dark Mode via class agar tombol matahari/bulan berfungsi
    darkMode: 'class',

    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/js/**/*.js',
    ],

    theme: {
        extend: {
            // 2. Konfigurasi Font
            fontFamily: {
                // Font Utama (Body Text) - Clean & Modern
                sans: ['Outfit', ...defaultTheme.fontFamily.sans],
                // Font Judul (Headings) - Mewah & Klasik (Serif Modern)
                serif: ['Playfair Display', ...defaultTheme.fontFamily.serif],
            },

            // 3. Palet Warna Custom: Modern Academic Indigo
            colors: {
                // Warna dasar gelap (untuk Hero Section, Footer, & Background Dark Mode)
                'acad-dark': {
                    800: '#1e293b', // Slate 800 (Card Dark)
                    900: '#0f172a', // Slate 900 (Background Dark)
                    950: '#020617', // Slate 950 (Deepest Dark)
                },
                // Warna aksen utama (Indigo/Ungu Kampus Modern)
                'acad-accent': {
                    500: '#6366f1', // Indigo 500 (Primary Button/Highlight)
                    600: '#4f46e5', // Indigo 600 (Hover State)
                },
                // Warna latar terang (untuk Light Mode)
                'acad-light': {
                    100: '#f8fafc', // Slate 50 (Background Light)
                    200: '#e2e8f0', // Slate 200 (Borders)
                }
            },

            // 4. Animasi Custom (Fade In Halus)
            animation: {
                'fade-in': 'fadeIn 0.8s ease-out forwards',
            },
            keyframes: {
                fadeIn: {
                    '0%': { opacity: '0', transform: 'translateY(20px)' },
                    '100%': { opacity: '1', transform: 'translateY(0)' },
                },
            },

            // 5. Background Pattern (Tekstur Halus untuk area gelap)
            backgroundImage: {
                'pattern-topo': "url(\"data:image/svg+xml,%3Csvg viewBox='0 0 200 200' xmlns='http://www.w3.org/2000/svg'%3E%3Cfilter id='noiseFilter'%3E%3CfeTurbulence type='fractalNoise' baseFrequency='0.65' numOctaves='3' stitchTiles='stitch'/%3E%3C/filter%3E%3Crect width='100%25' height='100%25' filter='url(%23noiseFilter)' opacity='0.05'/%3E%3C/svg%3E\")",
            },

            // 6. Custom Shadow (Bayangan Kartu & Glow)
            boxShadow: {
                'card-shadow': '0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06)',
                'accent-glow': '0 0 20px rgba(99, 102, 241, 0.5)', // Glow warna indigo
            }
        },
    },

    plugins: [forms],
};