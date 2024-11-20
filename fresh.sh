
rm -f composer.lock
rm -Rf vendor

docker compose run --rm web composer update

git add .
