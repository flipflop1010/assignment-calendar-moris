# Assignment Calendar Event (moris)

## Table of Contents

- [Prerequisites](#prerequisites)
- [Installation](#installation)
- [Features](#features)


## Prerequisites

Before you begin, ensure you have the following installed:
- For traditional way
    - [PHP](https://www.php.net/downloads.php)
    - [Composer](https://getcomposer.org/download/)
    - [MySQL](https://dev.mysql.com/downloads/)

- Docker way 
    - [Docker](https://docs.docker.com/engine/install/)
    - [Docker Compose](https://docs.docker.com/compose/install/linux/)
## Installation

1. Clone the repository:

   ```bash
   git clone https://github.com/flipflop1010/assignment-calendar-moris.git
    ```

### Method One (without docker) 

1. goto src directory,open a terminal (git bash)
2. run ```composer install```
3. create a file ```.env``` copied from .env.example setup  database credentials
4. run ```php artisan migrate``` for db migration
5. run ```php artisan serve``` to run the laravel dev server
6. goto ```http://localhost:8000``` 

### Method Two (with docker)

1. open terminal where docker-compose.yml file exists (project root dir)
2. create a file ```.env``` copied from .env.example (this is docker .env file) and put desired port number where the project and phpmyadmin should run
2. run ```docker-compose up -d```
2. goto src folder and create a file ```.env``` copied from .env.example setup  database credentials
    
    -Example of db  configuration
     ```
        DB_CONNECTION=mysql
        DB_HOST=db # here this should be unchanged
        DB_PORT=3306
        DB_DATABASE=moris
        DB_USERNAME=root
        DB_PASSWORD=abc123
    ```
2. run docker ```docker exec -it moris_app bash``` and u will see a terminal for that container

3. run ```composer install```

4. run ```php artisan migrate```
5. goto ```http://localhost:9010``` for projec
t demo

## Features

- we can see months calendar
- we can change next month or previous month
- we can add a event and that event shows in months view

## In-Progress
this project has much more features to implement that currently in progress

## screenshots

### calendar month view
![Alt text](/screenshots/cal-month-view.png "calendar month view")
### calendar events add
![Alt text](/screenshots/event-add.png "calendar month view")


