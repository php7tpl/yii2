@echo off

cd ../../../..

cd vendor/yii2bundle/yii2-db/bin
php bin schema/remove
cd ../../../..

cd vendor/yii2bundle/yii2-db/bin
php bin schema/create
cd ../../../..

php yii migrate --interactive=0

cd vendor/yii2bundle/yii2-db/bin
php bin fixture -i -a
cd ../../../..

cd api
php "../vendor/codeception/base/codecept" run

pause