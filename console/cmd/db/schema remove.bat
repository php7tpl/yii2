@echo off
cd ../../..

cd vendor/yii2bundle/yii2-db/bin
php bin schema/remove
cd ../../../..

pause