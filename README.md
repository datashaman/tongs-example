# tongs-example

Example source for [Tongs static site generator](https://github.com/datashaman/tongs).

The built files are deployed at [tongs-example.datashaman.com](http://tongs-example.datashaman.com).

## setup

Install Composer dependencies:

    composer install

To require another plugin:

    composer require example/tongs-plugin

Generate the build folder:

    vendor/bin/tongs

Serve the build folder:

    php artisan serve -S localhost:8080 -t build

## source

The source for this example site was taken from the [static site samples](https://github.com/remotesynth/Static-Site-Samples) repository, using a slightly modified [metalsmith](https://metalsmith.io) sample.
