# TestWebApp
This is basic web application made for Assignment purpose. 

## Application feature

This application have two features:
- Anyone can submit application form 
- Log first to view submitted application by users.
- If you're running this first time then register first (password must be minimum 8 characters)

## Installation



After download/ clone this repository, change the console/terminal  directory to this application folder. 
>Run composer
```bash
composer install
```

 Open Xampp and Start "Apache" & "MySQL" service. 
 Then create an database and name database as you named in your .env file. 

> Run migration first
```bash
php artisan migrate
```
 

## Run 
> Run this command

```bash
php artisan serve
```
Type this [http://127.0.0.1:8000](http://127.0.0.1:8000) into address bar. 
