# tongs-example

Example source for [Tongs static site generator](https://github.com/datashaman/tongs).

The built files are deployed at [http://tongs-example.datashaman.com](http://tongs-example.datashaman.com).

## setup

Install Composer dependencies:

    composer install

To require another plugin:

    composer require example/tongs-plugin

Generate the build folder:

    vendor/bin/tongs

Serve the build folder:

    php artisan serve -S localhost:8080 -t build
