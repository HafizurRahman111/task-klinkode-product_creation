# Creating a Simple Form for Product Creation (with Polaris Blade Template)

This Laravel application provides a form where users can submit product details. It performs validation on inputs like the product title, description, price, and product type. After the form is successfully submitted, the product is saved to the database.
---------------------
# System Requirements
Ensure your system meets the following prerequisites to run the application:

- PHP >= 8.0
- Composer: PHP dependency manager
- Database: MySQL
- Node.js and NPM (if asset compilation is needed)
- Git for version control
----------------------
# Installation
Step 1: Clone the Repository
Clone the repository from GitHub:

```bash

git clone https://github.com/HafizurRahman111/task-klinkode-product_creation.git

```

Step 2: Install Dependencies
Navigate to the project directory and install the PHP dependencies using Composer:

```bash

cd task-klinkode-product_creation

composer install

```


Step 3: Set Up Environment Variables
Copy the .env.example file to create a new .env file:

```bash
cp .env.example .env
```

Update the .env file with your database credentials:

```bash

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=klinkode_shopify
DB_USERNAME=root
DB_PASSWORD=

SHOPIFY_API_KEY=
SHOPIFY_API_SECRET=
SHOPIFY_API_SCOPES=read_products,write_products
SHOPIFY_API_REDIRECT=
SHOPIFY_STORE=
SHOPIFY_ACCESS_TOKEN=

```

Step 4: Generate Application Key
Run the following command to generate a unique application key:

```bash
php artisan key:generate
```

Step 5: Run Migrations
Run the database migrations to create the necessary tables:

```bash
php artisan migrate
```
-----------------
# Project Structure
The project follows Laravel's standard structure:

- app/: Contains core application logic.
    - Http/Controllers: Controllers for handling requests (e.g., ProductController.php).
    - Models: Contains Eloquent models (e.g., Product.php).
- resources/views: Contains Blade templates for views.
- routes/web.php: Route definitions for the application.
- database/migrations/: Contains migration files to create the necessary tables.
----------------------

