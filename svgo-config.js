module.exports = {
    plugins: [
        {
            name: 'preset-default',
            params: {
                overrides: {
                    // Отключаем некоторые плагины, которые могут нарушить работу схемы
                    removeViewBox: false,
                    removeTitle: false,
                },
            },
        },
        // Удаляем все namespace xhtml
        {
            name: 'removeXMLNS',
            active: false // Отключаем, так как может вызвать ошибки
        },
        // Преобразование div в g
        {
            name: 'convertPathData',
            active: true
        },
        // Удаление стилей и атрибутов, которые не работают в SVG
        {
            name: 'removeStyleElement',
            active: true
        }
    ]
};
