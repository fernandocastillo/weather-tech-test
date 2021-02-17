<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Fernando's Weather Project

###Installation instructions
```
    composer install
```

###Running migrations and seeders (Initial fake data for 3 tables)
```
    php artisan migrate --seed
```

###Start server for api testing
```
    php artisan serve
```

###CRUD City Controller

List all cities (paginated):
```
GET http://localhost:8000/api/city
```

Create a city:
```
POST http://localhost:8000/api/city
```

View one single city:
```
GET http://localhost:8000/api/city/{ID}/view
```

Update a city:
```
PUT http://localhost:8000/api/city/{ID}/update
```

Delete a city:
```
DELETE http://localhost:8000/api/city/{ID}/delete
```

###Forecast controller
Look for a city by name and return city detail with forecast info:
```
GET http://localhost:8000/api/forecast/{CITY_NAME}
```
