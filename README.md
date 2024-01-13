
# Laravel Dockerized Project

## Prerequisites

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

## Getting Started

1. **Clone the repository:**

   git clone https://github.com/Egzonag/neuroNation.git

2. **Navigate to the project directory:**

   cd neuroNation

3. **Build and start the Docker containers:**

   docker-compose up -d --build

4. **Install Laravel dependencies:**

   docker-compose exec app composer install

5. **Generate Laravel key and run migrations:**

   docker-compose exec app php artisan key:generate
   docker-compose exec app php artisan migrate

Now, your Laravel application is accessible at [http://localhost:8000](http://localhost:8000).