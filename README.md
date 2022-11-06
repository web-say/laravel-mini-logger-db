## Logging information in the database 

#### Installation steps

- composer require web-say/laravel-mini-logger-db
- php artisan migrate
- add 
- - MiniLoggerDb::error('Error text');
- - MiniLoggerDb::info('Info text');

