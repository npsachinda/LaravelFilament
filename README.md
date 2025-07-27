# Laravel Filament Admin Panel

A modern admin panel built with Laravel, Filament, and Livewire. This project includes a complete product management system with categories, colors, types, and user management.

## Features

- 🛡️ User Authentication & Authorization
- 📦 Product Management
- 🏷️ Category Management
- 🎨 Color Management
- 📝 Type Management with API Integration
- 🔄 Many-to-Many Relationship Handling
- 🎯 Custom Relationship Management UI
- 🌓 Dark Mode Support
- 📱 Responsive Design

## Requirements

- PHP >= 8.2
- Composer
- Node.js & NPM
- MySQL/MariaDB
- MAMP/XAMPP/Valet (for local development)

## Installation

1. Clone the repository
```bash
git clone https://github.com/npsachinda/larafilament.git
cd larafilament
```

2. Install PHP dependencies
```bash
composer install
```

3. Install NPM dependencies
```bash
npm install
```

4. Create environment file
```bash
cp .env.example .env
```

5. Generate application key
```bash
php artisan key:generate
```

6. Configure your database in `.env`
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database_name
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

7. Run migrations
```bash
php artisan migrate
```

8. Build assets
```bash
npm run build
```

## Development

1. Start the Laravel development server
```bash
php artisan serve
```

2. Watch for asset changes
```bash
npm run dev
```

## Project Structure

```
app/
├── Filament/
│   └── Admin/
│       └── Resources/
│           ├── ProductResource/
│           ├── CategoryResource/
│           ├── ColorResource/
│           ├── TypeResource/
│           └── UserResource/
├── Models/
│   ├── Product.php
│   ├── Category.php
│   ├── Color.php
│   ├── Type.php
│   ├── TypeAssignment.php
│   └── User.php
```

## Database Schema

### Products
- id
- name
- description
- category_id
- color_id
- timestamps

### Categories
- id
- name
- description
- external_url
- timestamps

### Colors
- id
- name
- description
- hex_code
- timestamps

### Types
- id
- name
- api_unique_number
- timestamps

### Type Assignments (Pivot)
- id
- type_id
- product_id
- api_unique_number
- timestamps

## Usage

1. Access the admin panel at `/admin`
2. Default login credentials:
   - Email: admin@example.com
   - Password: password

## Key Features Usage

### Product Management
- Create/Edit/Delete products
- Assign categories and colors
- Manage product types with API integration
- View relationships in a user-friendly interface

### Type Assignment
- Attach multiple types to products
- Manage API unique numbers for each assignment
- Bulk detach/manage type assignments

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Acknowledgments

- [Laravel](https://laravel.com)
- [Filament](https://filamentphp.com)
- [Livewire](https://livewire.laravel.com)
- [TailwindCSS](https://tailwindcss.com)