/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.{blade.php,js,vue,jsx,ts}",
    ],
    theme: {
        extend:{
            padding: {
                '0.0625': '0.0625rem', // 1px для очень узких экранов
            },
            fontSize: {
                'xs': '0.625rem', // Дополнительный размер текста для очень узких экранов
            },
            fontFamily: {
                sans: ['Roboto', 'sans-serif'],
            },
            colors: {
                'mint': '#edffdb',
                'pastel_blue': '#c2fcfc',
                'yellow_bright': '#fcfc4e',
                'yellowish': '#fffa96',
                'coral': '#f57771',
                'blue_semi': '#5962e3',
                'green_neon': '#2aad48',
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
