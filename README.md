# tongs-example

Example site for [Tongs static site generator](https://github.com/datashaman/tongs).

## setup

Install Composer dependencies:

    composer install

To require another plugin:

    composer require example/tongs-plugin

Install npm dependencies:

    npm install

Generate the build folder:

    vendor/bin/tongs

Serve the build folder:

    php artisan serve -S localhost:8080 -t build
