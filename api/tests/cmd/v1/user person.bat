@echo off
cd ../../..
php "../vendor/codeception/base/codecept" run functional v1/user/PersonTest.php
pause