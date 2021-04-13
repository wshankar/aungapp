## 12-4-2021, Monday
## Install Fresh Laravel Project (Laravel version 7)
	#composer create-project laravel/laravel aungapp "7.0"

## Connect to database
	#change database name in env

## Frontend Scaffolding for Vue
	#composer require laravel/ui:^2.4
	#php artisan ui vue

## Create Model and Design Migration tables
	#User
	#DailyRecord
	#Investigation
	#Medication
	#UserFeedback
	#UserPromise
	#Profile
	- Subscription
	php artisan make:model Model/Subscription -mr
	
	#RecordComment
	#InvComment
	#MedComment
	php artisan make:model Model/Admin/MedComment -mr
	
## Define relationship between models

## Seeding database with fake data
