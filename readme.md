# Laravel Swagger Demo

This project shows how [Swagger](http://swagger.io/) can be integrated into a Laravel project. This demonstration is part of the ongoing engineering talks over at [Pixel Fusion](https://pixelfusion.co.nz), a digital strategy and product development studio based in Auckland, New Zealand.

:fire::fire: **[DEMO HERE](http://swagger.test.jpcaparas.com)** :fire::fire:  
_Note: The database resets every hour_

## :question: What is Swagger and why use it?

According [to their own blog post](http://swagger.io/getting-started-with-swagger-i-what-is-swagger/):

> Swagger is a set of rules (in other words, a specification) for a format **describing REST APIs**. The format is both machine-readable **and human-readable**. As a result, it can be used to **share documentation** among **product managers, testers and developers**, but can also be used by various tools to automate API-related processes.

It has been an ongoing constraint for API developers to communicate (let alone present) the features of an API-driven product to **internal & external stakeholders** (who most of the time **don't even know what APIs are**). Swagger provides a **intuitive web interface** where users of various disciplines, whether it be front-end, back-end, business development, and all those in between, can easily understand (and test) the features of an API-driven product.

## :books: Resources
- [Swagger Pet Store API docs demo](http://petstore.swagger.io/)
- [DarkaOnLine/L5-Swagger - Laravel package for integrating Swagger](https://github.com/DarkaOnLine/L5-Swagger)
- [Swagger annotation reference](https://gist.github.com/nostah/d610459d50564c729c56)
- [Doctrine Annotations reference](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/annotations-reference.html)
- [Converting Swagger _Definitions_ to Postman _Collections_](https://www.getpostman.com/docs/importing_swagger)

## :sweat_drops: TODO

### Sections
- [x] What is Swagger and why use it?
- [ ] Difference between generating Swagger docs on Laravel & Symfony.
- [ ] Good annotation practices (e.g. where to put them, how they are read).
- [ ] Where to place annotations.
- [x] A working demo (deployed thru either Beanstalk or Forge).
- [ ] Examples of well-thought Swagger docs.

### Technical
- [x] Annotation proper.
- [] Artisan commands.

## :alien: Technical notes
- ~~[Laravel Passport](https://laravel.com/docs/5.4/passport), which gives the framework the ability to act as an OAuth2 server, is already [installed and configured](https://github.com/jpcaparas/laravel-passport-demo) on this installation.~~ Actually, due to time constraints, I'll go with publicly accessible endpoints for the meantime.
