# Cyberbility Custom Starter Theme

### Requirements
* [Node](https://nodejs.org/en/) >= v4.x <br>
* [NPM](https://www.npmjs.com/) >= v3.1

## Download & Install
`git clone https://github.com/benwhit/cyberbility-theme.git [theme-name]` - Download theme into your themes folder <br>
`cd theme-name` - Navigate to your themes folder <br>
`npm install && gulp build` - Install dependencies and build `./build` folder

## Gulp Tasks
| Tasks         | Description  |
| ------------- |:-------------|
| `gulp`      | Watches with Browser Sync enabled. Watches for php & sass changes. |
| `gulp build`| Builds `./build` folder, necessary for gulp tasks |
| `gulp sass` | Compiles sass files.  `./sass/` into `./css/style.css` |
| `gulp scripts`| Compiles all scripts.  `./src/js/` into `./js/theme.js` |

## Basic Configuration
| File         | Description    |
| ------------- |:-------------|
|`/style.css` |				Placeholder file for WordPress <br>
|`/sass/theme/theme.scss` |	Add basic sass styles <br>
|`/js/custom.js` |			Add additional javascript

## Included
Scroll Reveal - [NPM](https://www.npmjs.com/package/scrollreveal) <br>
FullPage.js  - [NPM](https://www.npmjs.com/package/fullpage.js) <br>
Parallax.js  - [Github](https://github.com/pixelcog/parallax.js) <br>
Masonry  - [Github](https://github.com/desandro/masonry) <br>
Lightbox2 - [NPM](https://www.npmjs.com/package/lightbox2)

