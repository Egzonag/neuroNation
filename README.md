
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

New database design:
 
![ERD Diagram](https://github.com/Egzonag/neuroNation/assets/36799658/73cd27e3-5dfd-47e3-b4b4-4f2b6a917bd2)


