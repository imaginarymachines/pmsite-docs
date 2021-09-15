# Plugin Machine Docs

## Installation

- Git clone:
    - `git clone git@github.com:imaginary-machines/pmsite-docs.git`
- Install javascript dependencies
    - `yarn`

## Working With JavaScript

- Build JS/CSS
    - `yarn build`
- Start JS/CSS for development
    - `yarn start`
- Test changed files
    - `yarn test --watch`
- Test all files once
    - `yarn test`
    - `yarn test --ci`


## Local Development Environment

A [docker-compose](https://docs.docker.com/samples/wordpress/)-based local development environment is provided.

- Start server
    - `docker-compose up -d`
- Acess Site
    - [http://localhost:6100](http://localhost:6100)
- Run WP CLI command:
    - `docker-compose run wpcli wp user create admin admin@example.com --role=admin user_pass=pass`

