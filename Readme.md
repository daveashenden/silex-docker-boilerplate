Codetest Boilerplate Built upon Silex API Template
===

Modified the starting point from [https://github.com/arnaudbaali/silex-docker-php7]. Incoroporates DBAL and phpunit.

This is a Silex project running with Docker, utilising docker-compose that I use for small proof of concept apis and codetests ( when using PHP)

# Requirements

    - Docker installed on your machine

# Install the project

## 1. Clone this project from github

`git clone ...`

## 2. Install Silex dependencies via Composer

`docker-compose up -d `
`docker exec codetest_db bash /tmp/init_db.sh`
`docker run --rm -v $(pwd):/app composer/composer install`

Here we are using a Composer via Docker to reduce requirements on your machine.

## 3. Access the default page on your browser

go to: [http://127.0.0.1:8080/hello](http://127.0.0.1:8080/hello)

## 4. Build Tests, Write Code, Run tests

`docker exec -ti codetest_php bash -c '/var/www/silex/vendor/bin/phpunit -c /var/www/silex/'`
