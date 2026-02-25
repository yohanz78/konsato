# Konsato

![Laravel](https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white)
![PHP](https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white)
![TailwindCSS](https://img.shields.io/badge/Tailwind_CSS-06B6D4?style=for-the-badge&logo=tailwind-css&logoColor=white)
![Vite](https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white)
![Redis](https://img.shields.io/badge/Redis-DC382D?style=for-the-badge&logo=redis&logoColor=white)
![AWS](https://img.shields.io/badge/AWS_S3-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white)
![Pusher](https://img.shields.io/badge/Pusher-300D4F?style=for-the-badge&logo=pusher&logoColor=white)

Konsato is a modern web application built with Laravel, designed to deliver a seamless and efficient user experience. This project leverages a robust full-stack architecture combining a powerful PHP backend with a responsive, utility-first frontend.

---

## 🚀 Features

- **User Authentication** — Secure login, registration, and session management
- **Role-based Access Control** — Manage user permissions and access levels
- **Mail Notifications** — Automated email delivery for user interactions and system events
- **Background Job Processing** — Queue-based task handling for heavy operations
- **Real-time Broadcasting** — Live event updates powered by Pusher
- **File Management** — Local and cloud (AWS S3) file storage support
- **Responsive UI** — Mobile-friendly interface built with Tailwind CSS
- **RESTful Routing** — Clean and organized API and web routes

---

## 🛠️ Tech Stack

### Backend

| Technology                      | Description                    |
| ------------------------------- | ------------------------------ |
| [Laravel](https://laravel.com/) | PHP web application framework  |
| PHP                             | Server-side scripting language |
| MySQL                           | Relational database management |
| Laravel Sanctum                 | API token authentication       |
| Laravel Queue                   | Background job processing      |

### Frontend

| Technology                               | Description                          |
| ---------------------------------------- | ------------------------------------ |
| [Tailwind CSS](https://tailwindcss.com/) | Utility-first CSS framework          |
| [Vite](https://vitejs.dev/)              | Next-generation frontend build tool  |
| Blade                                    | Laravel's built-in templating engine |

### Services & Integrations

| Service        | Description                      |
| -------------- | -------------------------------- |
| Pusher         | Real-time WebSocket broadcasting |
| AWS S3         | Cloud file storage               |
| Mailhog / SMTP | Email testing and delivery       |
| Redis          | Caching and session management   |

---

## ⚙️ Installation

### Prerequisites

- PHP >= 8.0
- Composer
- Node.js & NPM
- MySQL

### Steps

1. **Clone the repository**

    ```bash
    git clone https://github.com/your-username/konsato.git
    cd konsato
    ```

2. **Install PHP dependencies**

    ```bash
    composer install
    ```

3. **Install Node dependencies**

    ```bash
    npm install
    ```

4. **Set up environment**

    ```bash
    cp .env.example .env
    php artisan key:generate
    ```

5. **Configure your `.env` file**

    ```env
    DB_DATABASE=your_database
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
    ```

6. **Run migrations**

    ```bash
    php artisan migrate
    ```

7. **Build assets**

    ```bash
    npm run dev
    ```

8. **Start the server**
    ```bash
    php artisan serve
    ```

---

## 🧪 Testing

```bash
php artisan test
```

---

## 📄 License

This project is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
