# Laravel Swagger Demo

This project shows how [Swagger](http://swagger.io/) can be integrated into a Laravel project using the [`L5-Swagger` package](https://github.com/DarkaOnLine/L5-Swagger). This demonstration is part of the ongoing engineering talks over at [Pixel Fusion](https://pixelfusion.co.nz), a digital strategy and product development studio based in Auckland, New Zealand.

:fire::fire: **[DEMO HERE](http://swagger.test.jpcaparas.com)** :fire::fire:  
_Note: The database resets every hour_

## :question: What is Swagger and why use it?

According [to their own blog post](http://swagger.io/getting-started-with-swagger-i-what-is-swagger/):

> Swagger is a set of rules (in other words, a specification) for a format **describing REST APIs**. The format is both machine-readable **and human-readable**. As a result, it can be used to **share documentation** among **product managers, testers and developers**, but can also be used by various tools to automate API-related processes.

It has been an ongoing constraint for API developers to communicate (let alone present) the features of an API-driven product to **internal & external stakeholders** (who most of the time **don't even know what APIs are**). Swagger provides a **intuitive web interface** where users of various disciplines, whether it be front-end, back-end, business development, and all those in between, can easily understand (and test) the features of an API-driven product.

## Frequently asked questions

1. **How do you generate docs?**  
Firstly, you need to create annotations that Swagger can parse and turn into an `api-docs.json` file after running the `php artisan l5-swagger:generate` command. [This gist](https://gist.github.com/nostah/d610459d50564c729c56) provides some good examples of Swagger annotations. This is particularly useful for those just scratching the surface of how Doctrine annotations are written.

On this project, annotations have been segmented on these paths:

| Type | Location |
| --- | --- |
| Metadata | [`app/Http/Controllers/Api/Controller.php`](app/Http/Controllers/Api/Controller.php) |
| Paths | [`app/Http/Controllers/Api/**/*`](app/Http/Controllers/Api) |
| Definitions | [`app/Models/**/*`](app/Models) |

2. **Why not just put all the annotations/definitions on a single file?**  
While that is possible, some developers (myself included) prefer "spreading out" annotations to where they semantically belong. It also makes more sense to spread out the annotations when working with team members. For this project, I added `path` annotations on top of _controller_ files (some put theirs on route files) and `definition` annotations on _model_ files. Running `php artisan l5-swagger:generate` then scans the entire application directory for annotations and generates an `api-docs.json` out of it.

3. **Is Swagger enough to test APIs if they work?**  
Swagger is used primarily for documenting API endpoints, **not** testing them. For that, you'll need to write integration tests through tools like [Behat](http://behat.org/en/latest/) or [Codeception](http://codeception.com/).

4. **I don't like the default theme, can I customise it?**  
Definitely! You can write a theme from scratch or, like most people, try and test free templates [like these](https://github.com/ostranme/swagger-ui-themes).

5. **When I update an annotation, how do I generate new docs**  
You'll need to run `l5-swagger:generate` in order to generate a fresh `api-docs.json`. Additionally, we recommend generating a configuration file with `l5-swagger:publish-config` so you have more control over the package.

## :books: Resources
- [Swagger Pet Store API docs demo](http://petstore.swagger.io/)
- [DarkaOnLine/L5-Swagger - Laravel package for integrating Swagger](https://github.com/DarkaOnLine/L5-Swagger)
- [Swagger annotation reference](https://gist.github.com/nostah/d610459d50564c729c56)
- [Doctrine Annotations reference](http://docs.doctrine-project.org/projects/doctrine-orm/en/latest/reference/annotations-reference.html)
- [Converting Swagger _Definitions_ to Postman _Collections_](https://www.getpostman.com/docs/importing_swagger)

## :sweat_drops: TODO

### Sections
- [x] What is Swagger and why use it?
- [x] Good annotation practices (e.g. where to put them, how they are read).
- [x] Where to place annotations.
- [x] A working demo (deployed thru either Beanstalk or Forge).
- [x] Examples of well-thought Swagger docs.

### Technical
- [x] Annotation proper.
- [x] Artisan commands.

## :alien: Technical notes
- ~~[Laravel Passport](https://laravel.com/docs/5.4/passport), which gives the framework the ability to act as an OAuth2 server, is already [installed and configured](https://github.com/jpcaparas/laravel-passport-demo) on this installation.~~ Actually, due to time constraints, I'll go with publicly accessible endpoints for the meantime.
