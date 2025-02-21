/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.{blade.php,js,vue,jsx,ts}",
    ],
    theme: {
        extend: {
            colors: {
                beige: {
                    100: '#F5F5DC',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/typography'),
    ],
    // Опционально: Настройки для продакшена
    corePlugins: {
        preflight: true, // Включает базовые стили (reset)
    },
};
