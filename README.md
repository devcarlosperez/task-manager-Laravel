# TaskManager 📝

A web application to manage your personal tasks. You can create, view, update, and delete tasks as an authenticated user.

## Features ✨

- User authentication (registration, login, password reset).
- Each user manages their own tasks.
- Create, read, update, and delete (CRUD) tasks.
- Task priorities (high, medium, low).
- Responsive and modern UI with Laravel.

## Getting Started 🚀

Follow these steps to run the application locally with [Laragon](https://laragon.org/):

1. **Clone the repository:**
   ```sh
   git clone https://github.com/devcarlosperez/TaskManager.git
   cd TaskManager
   ```

2. **Install PHP dependencies via Composer:**
   ```sh
   composer install
   ```

3. **Configure your environment:**
   Edit `.env` and set your MySQL database credentials:
   ```
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=task_manager
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate the application key:**
   ```sh
   php artisan key:generate
   ```

5. **Run database migrations:**
   ```sh
   php artisan migrate
   ```

6. **Run seeder:**
   ```sh
   php artisan db:seed --class=TasksTableSeeder
   ```

7. **Enjoy**
   ```sh
   php artisan serve
   ```
   Visit http://127.0.0.1:8000 in your browser

## Project Structure 🗂️

- `app/` - Application core (models, controllers, etc.).
- `resources/views/` - Blade templates for the UI.
- `routes/` - Route definitions.
- `database/migrations/` - Database schema migrations.
- `database/seeders/` - Database seeders.
- `public/` - Public assets and entry point.
- `config/` - Configuration files.

## Build With 🛠️

- [Laragon](https://laragon.org/)
- [Laravel](https://laravel.com/)
- [MySQL](https://www.mysql.com/)

## Third-party Components Used 🖇️

- [Laravel Breeze](https://laravel.com/docs/10.x/starter-kits)
- [Heroicons](https://heroicons.com/)

## Suggestions 💡


## Acknowledgments 🎁

Special thanks to my classmates and my teacher Tiburcio for their support, guidance, and encouragement throughout this project.

## Author ✒️

Carlos Luis Pérez Santana.