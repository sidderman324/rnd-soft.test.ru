Тестовое задание для Rnd-Soft.
Адаптивка при трех брейкпоинтах, между ними ширина контейнера не фиксированная.
Стили написаны с препроцессором LESS, сайт посторен на flexbox, без сетки.
Сделан паралакс в верхнем промоблоке.
Отправка заранее подготовленной формы через AJAX.

================Start kit================

Стартовый репозиторий для проектов.
Less, Pug, оптимизация изображений, SVG и PNG спрайты, слежение за файлами и обновление браузера
Deploy в GH-pages

Создание нового проекта:
1. Делаешь папку проекта <kbd>mkdir</kbd>.
2. Клонируешь этот репозиторий в папку поекта <kbd>git clone ...</kbd>.
3. Удаляешь стартовый репозиторий из удаленных <kbd>git remote rm origin</kbd>.
4. Создаешь на github.com новый репозиторий.
5. Привязываешь его к проекту <kbd>git remote add origin ... </kbd>.
6. Начинаешь работу.

Установка: `npm i`.

Запуск: `npm start`.

Для работы BrowserSync с php файлами необходимо добавить в домены Open Server папку build и указать доменное имя сайта в gulpfile.js (Строка ~215).

Запуск конкретной задачи: `npm start имя_задачи` (список задач смотри в `gulpfile.js`)

Остановка: <kbd>Ctrl + C</kbd>

ЖИВИ ДОЛГО И ПРОЦВЕТАЙ!
