# uploadFile
#1/ after git pull

- Composer update
- php bin/console doctrine:schema:update --force
- new Command: php bin/console file:parse
- test: php bin/phpunit

#2/ after git clone
- Composer install
- php bin/console doctrine:database:create
- php bin/console make:migration
- php bin/console doctrine:migrations:migrate
- new Command: php bin/console file:parse
- test: php bin/phpunit

