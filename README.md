# PHP challenge

## About

This is a PHP challenge. It's a simple application that prints a cross or a X, depending on the user's input.

## How to prepare your environment

### Windows

An easy way to install things on Windows is using [Chocolatey](https://chocolatey.org/) on PowerShell with administrative rights. It's a package manager for Windows, similar to `brew` on Mac and `apt`/`apt-get` on Linux. This section will suggest how to install the required tools using Chocolatey. Feel free to use any other method you prefer.

0. [Install Chocolatey](https://chocolatey.org/install#install-step2);
1. Open PowerShell with administrative rights by pressing `Win + X` and then pressing `A`;
2. Make sure you have git installed;
   - Check your git version with `git --version`;
   - If it is not installed, run: `choco install git.install`;
3. Install php;
   - Check your php version with `php -v`;
   - If it is not installed, run: `choco install php`;
4. Install composer;
   - Check your composer version with `composer --version`;
   - If it is not installed, run: `choco install composer`;
5. Change directory to somewhere where you want to clone this repository;
6. Clone this repository;
   - `git clone https://github.com/ArielMAJ/php-challenge.git`;
7. Change directory to the cloned repository's `src` (source) folder;
   - `cd php-challenge/src`;
8. Install dependencies (this may take a while);
   - `composer install --prefer-source`;

### Mac and Linux

If you are a Mac or Linux user, feel free to follow the [windows step-by-step](#windows) above using your package manager of choice. I'm assuming that if you use one of these operating systems, you know how to install these things.

## How to run the application

1. Make sure you're in the src folder;
   - `cd src/` (if you're in this repository's root folder);
2. Run the application;
   - `php core/main.php`;
3. Follow the instructions on the screen, which are:
   - Press `C` then `Enter` to print a Cross;
   - Press `X` then `Enter` to print a X;
   - Press `Ctrl + C` to exit the application, at any point;

## How to test the application

To run the unit tests:

1. Make sure you're in the src folder;
   - `cd src/` (if you're in this repository's root folder);
2. Run the tests (make sure you did step 8 of the [preparing you enviroment step-by-step](#windows));
   - ` ./vendor/bin/phpunit --testdox tests/`;

## Compatibility

This application was developed and tested on Windows 11, using PHP 8.2.4 and Composer 2.5.5. It should work on any other operating system, but it was not tested.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Author

- [@ArielMAJ](https://ariel.artadevs.tech/): ariel.maj@hotmail.com

Feel free to contact me, open issues or a discussion if you have any questions or suggestions. I'm always open to feedback. :smile:

### Author's Front&Back-end Projects

- React+Python: https://github.com/ArielMAJ/Python_API_Challenge
- React Client: https://github.com/ArielMAJ/Spotify-Client-Challenge
- HTML/CSS/JS/Bootstrap: https://github.com/tauanesales/GES_website
- HTML/CSS/JS+Python+Jinja: https://github.com/ArielMAJ/CoGES_Web_App
- React (incomplete project): https://github.com/ArielMAJ/Alura_7DaysOfCode
- HTML/CSS: https://github.com/ArielMAJ/arielmaj.github.io