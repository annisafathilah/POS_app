import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                // Muted neutrals
                neutral: {
                    50: '#FBFBFC',
                    100: '#F3F4F6',
                    200: '#E5E7EB',
                    300: '#D1D5DB',
                    400: '#9CA3AF',
                    500: '#6B7280',
                    600: '#4B5563',
                    700: '#374151',
                    800: '#1F2937',
                    900: '#0F1724',
                },

                // Blue palette
                blue: {
                    50: '#F0F9FF',
                    100: '#E0F2FF',
                    200: '#BFE9FF',
                    300: '#80D0FF',
                    400: '#4AB8FF',
                    500: '#1E90FF',
                    600: '#176FCC',
                    700: '#114F99',
                    800: '#0A3566',
                    900: '#051B33',
                },

                // Red palette
                red: {
                    50: '#FFF5F5',
                    100: '#FFEFEF',
                    200: '#FFD6D6',
                    300: '#FFB3B3',
                    400: '#FF8A8A',
                    500: '#FF4D4D',
                    600: '#CC3C3C',
                    700: '#992B2B',
                    800: '#661B1B',
                    900: '#330D0D',
                },

                // Green palette
                green: {
                    50: '#F3FFF6',
                    100: '#E6FFED',
                    200: '#CFFFD4',
                    300: '#9FFFB0',
                    400: '#66FF86',
                    500: '#2EFF5E',
                    600: '#22CC4A',
                    700: '#189939',
                    800: '#0E6628',
                    900: '#073314',
                },

                // Yellow palette
                yellow: {
                    50: '#FFFBEB',
                    100: '#FFF6D6',
                    200: '#FFF0B3',
                    300: '#FFE780',
                    400: '#FFD84A',
                    500: '#FFCA1E',
                    600: '#CC9F18',
                    700: '#997714',
                    800: '#664F0E',
                    900: '#332708',
                },
            },
        },
    },

    plugins: [forms],
};
