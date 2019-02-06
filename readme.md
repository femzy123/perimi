


## About Perimi

Perimi is a business directory web application. Below are the steps get it work

- Clone the repo and `cd` into it
- `composer install`
- Rename or copy `.env.example` file to `.env`
- `php artisan key:generate`
- Set your database credentials in your `.env` :file -database name is `perimi`
- Open your terminal and change directory to perimi
- create database **perimi** in MySql. Goto to the `users` table in your database and create a new user manually with role_id `1` to be able to login
- Set your `APP_URL` in your `.env` file. This is needed for Voyager to correctly resolve asset URLs.
- php artisan `migrate`. This will create all necessary table in database
- `npm install`
- `npm run dev`
- Visit `/admin` if you want to access the Voyager admin backend.



## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
