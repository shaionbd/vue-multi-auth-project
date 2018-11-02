## Project Configuration
- Clone the project
- Create the vendor file using "composer update"
- Create the node_module using "npm install"
- Rename .env.example to .env 
- Add you db credentials on .env file
- generate project key using "php artisan key:generate"
- php artisan migrate
- php artisan db:seed (all the password for Teacher, Student, Admin is '123456')
- php artisan serve

#### Terminal/Command prompt
``` Terminal
git clone https://github.com/<username>/vue-multi-auth-project.git
cd vue-multi-auth-project
composer update
npm install

php artisan key:generate
php artisan migrate
php artisan db:seed

php artisan serve
```

#### Database Credential
- On .env file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=database name
DB_USERNAME=db username
DB_PASSWORD=db password
```
## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
