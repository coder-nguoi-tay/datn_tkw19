# go to project

# install app's dependencies

$ composer install

# install app's dependencies

$ install php >=7.3
$ install node v14.17.0

$ cp .env.example .env

# edit connect database

DB_HOST=127.0.0.1
DB_PORT=8889
DB_DATABASE=musashi
DB_USERNAME=root
DB_PASSWORD=root

### Next step

```bash
# in your app directory
# generate laravel APP_KEY
$ php artisan key:generate

# run database migration and seed
$ php artisan migrate:refresh --seed

# generate mixing
$ npm run dev or npm run build

# and repeat generate mixing
$ npm run dev

# login with account
# xxx/admin/login admin@gmail.com/12345678

# generate interface and repository run command
$ php artisan make:repository name

#generate model from database
$ php artisan krlove:generate:model Accuracy --table-name=accuracy

#general jwt secret key
php artisan jwt:secret

#check code before commit
$ phpmd app text musashi.xml

#create file unit test
$ php artisan make:test UserTest

#run unit test
$ php artisan test

# generate api docs, access xxx/api/documentation
$ php artisan l5-swagger:generate

# map storage link
$ php artisan storage:link

# install php cs fixer
$ create folder/tools/php-cs-fixer
$ composer require --working-dir=tools/php-cs-fixer friendsofphp/php-cs-fixer
# refactor code before commit
$ tools/php-cs-fixer/vendor/bin/php-cs-fixer fix folder_code
```
# loi khi chay khac phien ban 
# cach fix, chay cau lenh ben duoi
$ composer install --ignore-platform-reqs
# hoac

$ composer update --ignore-platform-reqs

$ npm install --save --legacy-peer-deps