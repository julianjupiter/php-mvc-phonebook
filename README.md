# PHP MVC Phonebook
Simple phonebook application using MVC in PHP. This is the MVC version of phonebook I wrote for my [blog](http://jjupitersnotebook.blogspot.com/2012/10/phonebook-application-with-php-and-mysql-crud-operation.html).

## Cloning
To clone this project, simply execute the following command using Terminal:
```
$ git clone git://github.com/julianjupiter/php-mvc-phonebook.git
```
Or:
```
$ git clone https://github.com/julianjupiter/php-mvc-phonebook.git
```
You can also download it by clicking the **Clone or download** button.

## Running
To run this project, create database first:
```
CREATE DATABASE phpmvcphonebook;
USE phpmvcphonebook;
CREATE TABLE IF NOT EXISTS contact (
    id INT(11) NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    mobile_no VARCHAR(11) NOT NULL,
    address VARCHAR(255) NOT NULL,
    email_address VARCHAR(255) NOT NULL DEFAULT '',
    date_created DATETIME NOT NULL DEFAULT NOW(),
    PRIMARY KEY(id)
);
```
Go to the project directory:
```
$ cd php-mvc-phonebook
```
And execute **bin/server.sh** script. This will run the PHP built-in web server with port 8000 (can be changed to any available port) - as of PHP 5.4.0, the CLI SAPI provides a built-in web server.
```
$ ./bin/server.sh
```
This is the output in my personal machine:
```
julian@jupiter:~/Workspace/github/php-mvc-phonebook$ ./bin/server.sh
PHP 5.5.9-1ubuntu4.17 Development Server started at Mon Aug  8 13:27:17 2016
Listening on http://127.0.0.1:8000
Document root is /home/julian/Workspace/github/php-mvc-phonebook/public
Press Ctrl-C to quit.
``` 
Open your browser and point it to http://127.0.0.1:8000.

Disclaimer: This project is not complete yet (no validations, no exceptions, etc.) Your suggestions will be highly appreciated.
