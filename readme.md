## Laravel test project

<p align="center"><img src="https://i.imgur.com/Ayk3DaX.png" width="850"></p>

### Simple CRUD app

Instructions:\
After downloading zip or cloning this repo, cd to project folder, and install all PHP packages with

```
composer install
```

Install npm packages

```
npm install
```

Create a copy of .env file

```
cp .env.example .env
```

Generate an app encryption key

```
php artisan key:generate
```

Create an empty database (in phpMyAdmin for instance)\
Fill .env file with credentials (DB_DATABASE, DB_USERNAME, DB_PASSWORD)
Migrate the database...

```
php artisan migrate
```

... or download it from [here](https://drive.google.com/file/d/1seZ8CKRfUud3QYVw6qZp5p0JYWhpbdto/view?usp=sharing) and import it into your newly created DB

run

```
php artisan serve
```

and open http://127.0.0.1:8000 in your browser
