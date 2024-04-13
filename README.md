# frontend для редизайна rscable.ru

`work in progress`

Тест: https://rscable.ninthtown.ru/

## Общая информация

* npm 8+, node 18+
* webpack 5
* mobile-first
* php 8.1, html
* typescript, scss

## Важно

`docker конфигурации для php и apache/nginx нет (временно).`

* пути для изображений, видео и импортируемых файлов от папки src. Например:

````html
<img src="src/assets/img/placeholder.jpg" loading="lazy" alt="img">
````

````typescript
import 'src/scripts/global-scroll-controller'
````

````scss
@use 'src/styles/shared' as *;
````

## Скрипты

`frontend assets собираются в папку public/assets.`

* `npm run dev` собрать frontend
* `npm run watch` собирать frontend и пересобирать в случае изменений
* `npm run build` собрать и оптимизировать frontend

