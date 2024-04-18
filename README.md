## Pet Store Manager

This web app manages the employees, sales, and items of a Pet Store. It is built using Laravel, PHP, and Blade Engine.

Login Credentials:

username: test@example.com
password: password

Or you can register a brand new user using the register page.

## Features

- Register/Login functionality with Breeze. Creates an automatic admin user using seeders.
- CRUD functionality on Employees to see list of all employees, and to edit or delete them
- check out the sales made on a particular date

## Schema

There are three main entities: Employees, Sales, and Items. Employees has a one-to-many relationship with sales, since one employee can make multiple sales. Therefore the sales entity is connected to employees through a foreign key of employee_id.
There are also tables made to store registered users, which would represent any admin user for the Pet Store.

## Demo

Register

![Screenshot 2024-04-17 233359](https://github.com/sionara/http5225-laravelCMS/assets/35111239/655d54be-17b7-45d5-9b47-a5fcb474a557)


Login
![Screenshot 2024-04-17 222944](https://github.com/sionara/http5225-laravelCMS/assets/35111239/a79129bb-dec6-4bbe-8bf5-744dfb21b85c)

Dashboard
![Screenshot 2024-04-17 223002](https://github.com/sionara/http5225-laravelCMS/assets/35111239/48bb4bde-2a8b-435c-a4e3-d3f82a0fb829)

Employees list

![Screenshot 2024-04-17 230500](https://github.com/sionara/http5225-laravelCMS/assets/35111239/3afb4589-ca5b-49b7-a3b5-b4f9e057e7db)

Employee Details

![Screenshot 2024-04-17 230510](https://github.com/sionara/http5225-laravelCMS/assets/35111239/d129328e-27fa-4c23-9b2d-8811cd82c90f)

Add New Employee

![Screenshot 2024-04-17 232644](https://github.com/sionara/http5225-laravelCMS/assets/35111239/29743054-e96f-4065-bb7c-29a08c3998b2)

![Screenshot 2024-04-17 232703](https://github.com/sionara/http5225-laravelCMS/assets/35111239/8af4f7a5-2770-493a-a960-3718a174e94a)


Update Existing Employee

![Screenshot 2024-04-17 232721](https://github.com/sionara/http5225-laravelCMS/assets/35111239/1331aa3e-f32a-46cb-b5ab-0d0f5420f2bc)

![Screenshot 2024-04-17 232727](https://github.com/sionara/http5225-laravelCMS/assets/35111239/0a883eaa-6a96-4d45-bb0b-adac7595c053)

---------------------------------------------------------------------

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
