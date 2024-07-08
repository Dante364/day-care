<!-- Improved compatibility of back to top link: See: https://github.com/othneildrew/Best-README-Template/pull/73 -->
<a name="readme-top"></a>


<!-- PROJECT LOGO -->
<br />
<div align="left">

  <h1 align="left">Kindy Joy A Web-based Information Management Application for Daycare Centers </h1>
  <h2 align="left">Description</h2>
  <p align="left">
     
Daycare centers in Kenya face significant administrative challenges due to outdated manual bookkeeping, leading to delays and inefficiencies.
My Web-based Information Management Application "Kindy-joy"addresses these issues by providing a centralized platform for managing staff, parent,
and child data, improving payment tracking, and creating organized schedules. Additionally, the system includes a robust notification feature to 
enhance communication among parents and staff, fostering a sense of community. This comprehensive solution streamlines administrative operations,
enhances productivity, and ensures smooth daycare management.

  </p>
</div>

<h2>Project Setup/Installation Instructions</h2>

### Built With


* [![Laravel][Laravel.com]][Laravel-url]
* [![Tailwind][Tailwindcss.com]][Tailwind-url]
* [![Bootstrap][Bootstrap.com]][Bootstrap-url]
* [![Livewire][Livewire.com]][Livewire-url]
* [![DaisyUI][DaisyUI.com]][DaisyUI-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started

To get a local copy up and running, follow these steps.

### Dependencies
Ensure you have the following installed:
* Node.js (npm/yarn)
* PHP >= 8.2
* Composer
* SQLite

### Installation
1. Clone the repository
   ```sh
   git clone https://github.com/mangong34/kindy-joy
   cd kindy-joy

2.Install Composer Dependencies:

    composer install

3.Install NPM dependecies: 

    npm install

4.Set up environment file

    cp .env.example .env
    php artisan key:generate

5.Run the development server

      php artisan serve



<!-- USAGE EXAMPLES -->
## Usage

<h3>How to Run</h3>
1.Start the application <br>
2.Navigate to the project directory and run:
      
      
     php artisan serve
3.Then, open your web browser and visit http://127.0.0.1:8000.

_For more examples, please refer to the [Documentation](https://example.com)_

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<h3>Input/Output</h3>
<b>Input</b>: User data, day care details, scheduling information.<br>
<b>Output</b>: Management reports, billing information, schedules.
<!-- CONTRIBUTING -->

## Contributing

Contributions are what make the open source community such an amazing place to learn, inspire, and create. Any contributions you make are **greatly appreciated**.

If you have a suggestion that would make this better, please fork the repo and create a pull request. You can also simply open an issue with the tag "enhancement".
Don't forget to give the project a star! Thanks again!

1. Fork the Project
2. Create your Feature Branch (`git checkout -b feature/AmazingFeature`)
3. Commit your Changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the Branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

<p align="right">(<a href="#readme-top">back to top</a>)</p>



## Project Structure
<h3>Overview</h3>
<pre>
├── .editorconfig
├── .env
├── .env.example
├── .gitattributes
├── .gitignore
├── .vscode/
│   └── settings.json
├── app/
│   ├── Http/
│   ├── Livewire/
│   ├── Models/
│   ├── Providers/
│   └── View/
├── artisan
├── bootstrap/
│   ├── app.php
│   └── cache/
│       └── providers.php
├── bun.lockb
├── composer.json
├── composer.lock
├── config/
│   ├── app.php
│   ├── auth.php
│   ├── cache.php
│   ├── database.php
│   ├── filesystems.php
│   ├── logging.php
│   ├── mail.php
│   ├── queue.php
│   ├── services.php
│   ├── session.php
│   └── ...
├── database/
├── package.json
├── phpunit.xml
├── postcss.config.js
├── public/
├── README.md
├── resources/
├── routes/
├── storage/
├── tailwind.config.js
├── tests/
├── vendor/
└── vite.config.js
</pre>

## Key Files
<pre>
### Key Files in the Project

## `.editorconfig`
Defines coding styles for the project to maintain consistency across different editors and IDEs.

### `.env.example`
Serves as a template for the `.env` file, which contains environment-specific variables such as database credentials and API keys. Users should copy this file to `.env` and set the appropriate values.

### `.gitattributes`
Specifies attributes for files in the repository, such as line endings, diff settings, and merge strategies.

### `.gitignore`
Lists files and directories that should be ignored by Git, preventing them from being tracked in the version control system.

### `README.md`
Provides an overview of the project, including installation instructions, usage guidelines, and other relevant information.

### `artisan`
The command-line interface included with Laravel, used for running various Artisan commands to manage and build the application.

### `composer.json`
Specifies the dependencies and package information for the project. It is used by Composer to install and manage PHP packages.

### `composer.lock`
Locks the versions of the dependencies listed in `composer.json` to ensure consistent installations across different environments.

### `package.json`
Specifies the JavaScript dependencies and scripts for the project. It is used by npm or yarn to install and manage these dependencies.

### `phpunit.xml`
Configuration file for PHPUnit, specifying how tests should be run.

### `postcss.config.js`
Configuration file for PostCSS, a tool for transforming CSS with JavaScript plugins.

### `tailwind.config.js`
Configuration file for Tailwind CSS, a utility-first CSS framework.

### `vite.config.js`
Configuration file for Vite, a front-end build tool and development server.

### `bootstrap/app.php`
Bootstraps the Laravel application by loading the necessary configurations and services.

### `config/app.php`
Contains the configuration settings for the Laravel application, such as timezone, locale, and service providers.

### `config/auth.php`
Configuration file for the authentication services in the application.

### `config/cache.php`
Defines the cache settings for the application.

### `config/database.php`
Specifies the database connections and settings for the application.

### `config/filesystems.php`
Configuration for the file storage systems used by the application.

### `config/logging.php`
Defines the logging settings and channels for the application.

### `config/mail.php`
Configuration for the mail services used by the application.

### `config/queue.php`
Specifies the queue connections and settings for handling background jobs.

### `config/services.php`
Contains the configuration for various third-party services used by the application.

### `config/session.php`
Defines the session management settings for the application.

### `bootstrap/cache/.gitignore`
Prevents cached configuration files from being tracked by Git.

### `storage/app/.gitignore`
Prevents files in the storage directory from being tracked by Git.

### `storage/app/public/.gitignore`
Prevents public storage files from being tracked by Git.

### `storage/framework/.gitignore`
Prevents framework-specific storage files from being tracked by Git.
```
</pre>

## Additional Sections



## Project Status
Pending

## Known issues
None at the moment

<!-- CONTACT -->
## Contact

Project Link: [https://github.com/mangong34/kindy-joy](https://github.com/mangong34/kindy-joy)

<p align="right">(<a href="#readme-top">back to top</a>)</p>


<!-- ACKNOWLEDGMENTS -->
## Acknowledgments
Thanks to the developers of Laravel,Tailwind CSS,Bootstrap,Livewire and Daisy UI powerful tools

<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- LICENSE -->
## License

Distributed under the MIT License. See `LICENSE.txt` for more information.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/othneildrew/Best-README-Template.svg?style=for-the-badge
[contributors-url]: https://github.com/othneildrew/Best-README-Template/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/othneildrew/Best-README-Template.svg?style=for-the-badge
[forks-url]: https://github.com/othneildrew/Best-README-Template/network/members
[stars-shield]: https://img.shields.io/github/stars/othneildrew/Best-README-Template.svg?style=for-the-badge
[stars-url]: https://github.com/othneildrew/Best-README-Template/stargazers
[issues-shield]: https://img.shields.io/github/issues/othneildrew/Best-README-Template.svg?style=for-the-badge
[issues-url]: https://github.com/othneildrew/Best-README-Template/issues
[license-shield]: https://img.shields.io/github/license/othneildrew/Best-README-Template.svg?style=for-the-badge
[license-url]: https://github.com/othneildrew/Best-README-Template/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/othneildrew
[product-screenshot]: public/logo/image2.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Tailwindcss.com]: https://img.shields.io/badge/Tailwind_CSS-38B2AC?style=for-the-badge&logo=tailwind-css&logoColor=white
[Tailwind-url]: https://tailwindcss.com/
[Livewire.com]: https://img.shields.io/badge/Livewire-FF2D20?style=for-the-badge&logo=livewire&logoColor=white
[Livewire-url]: https://laravel-livewire.com/
[DaisyUI.com]: https://img.shields.io/badge/DaisyUI-7C3AED?style=for-the-badge&logo=daisyui&logoColor=white
[DaisyUI-url]: https://daisyui.com/
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
