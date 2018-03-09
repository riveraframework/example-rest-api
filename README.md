Example - REST API
================

This repository contains a working example of a basic REST API built with the [Rivera Framework](https://github.com/riveraframework/rf-core).

## Install

This example can be installed in two easy steps:

1. Clone the repository 

        git clone https://github.com/riveraframework/example-rest-api.git
        
2. Install the vendors

        php composer.phar install
        
3. Create the database

    Create the database and import the `person.sql` file located in the `app/config` folder. Then update the application 
    configuration file. (If you are using docker, please refer to the Docker section to start the MySQL server)


## Run the app

### LAMP stack on host

1. Create a virtual host pointing to the `public` folder of the project.

2. Open the url in your favorite browser!


### Docker

1. Then run this example using docker-compose:

        docker-compose up
        
2. Open [http://localhost:8080/](http://localhost:8080/) in your favorite browser!

*Note: The MySQL server is accessible on port 3307*


## Useful commands

### Refresh model files

Run from the project:

    php app/tasks/refresh-models.php --env="local"

Run from Docker:

    docker exec -it rf_rest_api php /var/www/app/tasks/refresh-models.php --env="local"
