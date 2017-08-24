# TravelPal

[View Live](http://travel-pal.adamsofokleous.com/)

My first Laravel project!

During the first couple weeks at the Alacrity Foundation we were taken through a 'boot camp' of development training, to be brought up to speed with building web applications with Laravel. The project I chose to build was a travelling app, aimed at the solo "lone wolf" travellers or even family holidaymakers. 

The main idea behind TravelPal was connecting local, genuine and (most importantly) friendly people with travellers looking to explore whilst saving £££ on expensive tour guides and tourist attractions. It was quite Uber-inspired, in that there are two market users who benefit from using it.

So i've set up various models of entities I thought were needed, and wrote the relationships between them. Up until this point, I was always used to recording entity relationships down in a diagram, on paper, or just in my head. So Eloquent took me a little by suprise. The syntax however, is expressive enough to understand and pick up very very quickly.

A poor inconsistency which you may or may not notice, throughout the system there are references to "Rover" and "Pal". These are meant to be the same entity, as mid-way through the project I decided to change the name from the original RentRovers to TravelPal. A rover was meant to be the local tourguide. 

Have a browse around the code, ping me any questions through email or just get in touch if you'd like. I have since explored Laravel much further, such as custom Http requests and API routes.  


# Build!


These instructions assume you have successfully run Laravel projects in the past. Refer to the [Laravel Docs](https://laravel.com/docs/5.3) for more information to set up Composer etc. 

To build, clone the repo and then run: 

Build Composer dependencies:
```bash
$ composer install
```

Build NPM dependencies:
```bash
$ npm install
```

Compile NPM dependencies (you may need to install gulp first):
```bash
$ npm i gulp -g
$ gulp
```

Run it!
```bash
$ php artisan serve
```
