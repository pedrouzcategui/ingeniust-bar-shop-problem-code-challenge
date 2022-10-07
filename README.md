## To run the project, is necessary to create a local database.

Uses MYSQL as a DB Driver.

Define the database name and credentials based in the .env.example file

Execute `php artisan migrate` to create the migrations in the database

Execute `php artisan db:seed` to create the migrations in the database

Execute `php artisan serve`

Create Symlink to Folder `php artisan storage:link`