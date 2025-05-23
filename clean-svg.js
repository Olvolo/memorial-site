import fs from 'fs';

// Обновленные пути к файлам
const inputPath = 'N:/www/memorial-site/public/images/diagram2.svg';
const outputPath = 'N:/www/memorial-site/public/images/cleaned-diagram.svg';

// Читаем файл
let svgContent = fs.readFileSync(inputPath, 'utf8');

// Заменяем XHTML div на SVG g элементы
svgContent = svgContent
    // Удаляем XHTML namespace
    .replace(/xmlns:xhtml="http:\/\/www\.w3\.org\/1999\/xhtml"/g, '')
    // Заменяем div на g
    .replace(/<div/g, '<g')
    .replace(/<\/div>/g, '</g>')
    // Удаляем inline стили
    .replace(/style="[^"]*"/g, '')
    // Удаляем атрибуты box-sizing
    .replace(/box-sizing:[^;]*;/g, '')
    // Исправляем xhtml: префиксы
    .replace(/xhtml:/g, '');

// Сохраняем результат
fs.writeFileSync(outputPath, svgContent);
console.log('SVG файл успешно очищен и сохранен в ' + outputPath);
