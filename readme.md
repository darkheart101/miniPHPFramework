# mini PHP Framework
The mini PHP Framework is a small framework using MVC pattern, inspired by Laravel.

## Installation
Use 'composer update' .

### Configuration
Configuration happens in env.php file by setting the environmental variables for
database connection

### Routing
Routing occures at routes.php file. Mini PHP Framework supports GET, POST, PUT and DELETE
http methods.

### Model
Mini PHP Framework uses ReadBeans for database actions and Models. For more information
and ways to use it go to [https://redbeanphp.com](https://redbeanphp.com).

Every model of the framework resides in the folder /app/Models.

### View
Mini PHP Framework uses php as template engine. View files should be stored in the folder
/app/Views/

### Controllers
Controllers of Mini PHP Framework are saved at the folder /app/Controllers.

