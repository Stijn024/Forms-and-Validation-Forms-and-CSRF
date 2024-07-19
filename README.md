# Bit Academy

# Forms & Validation

### Installation

1. Download and extract the zip file.
2. Run `composer install` from command line.
3. In case of any problems you may need to run `composer update` first.
4. Copy `.env.example` to `.env`.
5. Run `php artisan key:generate` from the command line.
6. Migrate: Run `php artisan migrate` from the command line. This wil also create the SQLite database.
7. Seed: Run `php artisan db:seed` from the command line.
8. `php artisan serve`

### Intro

The repository is structured with separate commits for each exercise in the Eloquent - Being relatable module. This allows you to review each stage of the module independently, making it easier to provide targeted feedback.
Please refer to the specific commits to see the progress and implementation details for each of the four exercises.

### 1.Forms and CSRF → 1.Setting up the Library app

- Created new project
- Created Book-model
- Created migration Columns: `id, title, author, read_at,` + `timestamps() & softDeletes()`
- Created resource route & controller: **BookController**
- Created a basic layout component `layouts/app.blade.php`
- Created a view `books/add.blade.php` that uses it
- Bookcontrolller::create return: `add.blade.php` 

### 1.Forms and CSRF → 2.CSRF

- Created a form `add.blade.php` with CSRF-protection and **title** & **author** inputs
- Created a view `books/index.blade.php` that shows all books via `BooksController::index`
- Submit stores the records via `BooksController::store` and redirects to index
- Added `$fillable` in Book-model

### 1. Forms and CSRF → 3.Marking books as read

- Added a checkbox for each book in the listing. If the book has been read, the checkbox is checked via: `Book->isRead()` *
- Added a PUT route `books/toggle-read` in `web.php` (before the resource route) with controller action for marking a book as read
- Added `@stack('scripts')` to `components/layouts/app.blade.php`
- Added attached javascript script to the `index.blade.php` via `@push('scripts)`. It uses the fetch api to send a PUT request to toggle read/unread
- Tested the three solutions: kept the AXIOS solution
- Added `@vite` include to `components/layouts/app.blade.php` + `npm install & npm run dev`

*Note that using the Book->isRead() method to check if a book has been read is optional. 
It is just one of the possible solutions, and students may implement this functionality in different ways.*
