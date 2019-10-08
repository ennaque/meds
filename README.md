# PyroCMS

# Several steps to install project #

git clone https://ennaque@bitbucket.org/lob_lba/meds.git

sudo chmod -R 777 meds

cd meds/docker

docker-compose up --build

docker exec -ti p_php_fpm fish

composer install

php artisan install --ready

php artisan db:seed --addon=ennq.theme.meds
