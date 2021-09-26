# Country List
This package takes country names and codes from the source file and writes them to the database.

### Install
```bash
composer require kodkraft/countries
```

### Configuration
```bash
php artisan vendor:publish --tag=kodkraft-config
```
After running this command, 
you can change the url from the "countries.php" config file 
so that the package uses a different source.

### Create table
```bash
php artisan migrate
```
### Update/Create Country List
```bash
php artisan countries:update
```
