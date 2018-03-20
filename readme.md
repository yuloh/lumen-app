# Setup

- `cp .env.example .env`
- `touch database/database.sqlite`
- `php artisan migrate:fresh`

# Reproduction Steps

- Run the tests: `vendor/bin/phpunit`
- Check the schema: `php artisan doctrine:schema:validate --skip-sync`
