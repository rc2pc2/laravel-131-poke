# Nuovo progetto in Laravel 10 + Bootstrap 5.x + SASS
<p align="center">
<a href="https://getbootstrap.com" target="_blank"><img src="https://miro.medium.com/v2/resize:fit:400/1*onZhQJU7A3ab6V1sHfMRkQ.jpeg" height="150"></a>
    <a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" height="150"></a>
<a href="https://laravel.com" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/1200px-Sass_Logo_Color.svg.png" height="150"></a>
</p>

Prima di tutto eseguiamo il solito comando di installazione di npm

- Eseguiamo `npm install`
- Eseguiamo il comando per aggiungere sass `npm i --save-dev sass` o  `npm install -D sass`
- Modifichiamo la cartella `resources/css` in `resources/scss` 
- Modifichiamo il file `resources/css/app.css` in `resources/scss/app.scss` 
- Modifichiamo il file vite.config.js aggiungendo a plugins il path giusto da `'resources/css/app.css'` a `'resources/scss/app.scss'` ,
- Aggiungiamo un alias al file vite.config.js per facilitare l'accesso a resources:
```
resolve: {
        alias: {
            '~resources' : "/resources/"
        }
} 
```
- Aggiungiamo `import "~resources/scss/app.scss";` al file  `resources/js/app.js`
- Aggiungiamo `@vite("resources/js/app.js")` ad ogni layout della nostra applicazione
- Aggiungiamo a `resources/js/app.js` una direttiva per la corretta gestione delle immagini
    ```
    import.meta.glob([
        '../img/**'
    ]);
    ```
- Aggiungiamo la riga `package-lock.json` al file `.gitignore`

## Aggiungiamo Bootstrap 5 al nostro progetto
- Installiamo attraverso npm i due pacchetti necessari a Bootstrap `npm i bootstrap @popperjs/core`
- Aggiungo in cima al file `vite.config.js` questa riga `const path = require("path");`
- Aggiungo agli alias sempre in `vite.config.js`
    ```
    alias: {
                '~resources' : "/resources/",
                '~bootstrap' : path.resolve(__dirname, "node_modules/bootstrap")
            }
    ```
- Aggiungiamo `@use "~bootstrap/scss/bootstrap" as *;` al nostro file `app.scss`
- Aggiungiamo `import * as bootstrap from "bootstrap";` al nostro file `app.js`
