## FAST LOG


- composer require laravel/ui
- php artisan ui vue --auth
- Created Database, changed .env file for databse@local (Change your setup and config to your environmental setting if needed in root folder)

##### NEW BACKUP BRANCH CREATED "AUTH INIT"



NEXT: BASIC USER MANAGEMENT (ADMIN CONTROLLER)



UsersController created and binded to User Model

        php artisan make:controller \\Admin\\UsersController -r -mUser

#####   added routes

Route::resource('/admin/users','Admin\UsersController', ['except' => ['show', 'create', 'store']]);


##### grouped routes
1. registered namespace 'Admin' prefixed and assigned path 'admin.'
2. grouped ressource Controller

````
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function(){
    
    Route::resource('/users','UsersController', ['except' => ['show', 'create', 'store']]);

});

````

 view created + linked in dropdown

php artisan make:model Role -m


### CONSTRAIN
php artisan migrate:rollback


###Testing
php artisan make:test LoginProcessTest
./vendor/bin/phpunit
