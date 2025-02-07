## Perlu di sesuaikan
/mysql/.env
/src/.env

## Jalankan perintah ini
- docker-compose up -d --build
- docker-compose run --rm composer install 
- docker-compose run --rm artisan key:generate
- docker-compose run --rm artisan migrate
- docker-compose run --rm artisan db:seed --class=AdminUserSeeder
- docker-compose run --rm artisan storage:link

# Server
Berjalan di localhost:8081