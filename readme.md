# Country List
This package takes country names and codes from the <a href="https://gist.githubusercontent.com/cengizonkal/6dcd70faacaacb19fb2f6be43b0ee90c/raw/46a031558161b6b98acab9d892a1d86bf7aa05b3/countries.json">source</a> file and writes them to the database.

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
