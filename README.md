﻿# FeedbackForm
Форма обратной связи на yii 1.1


Демонстрация: 
 
# wickflame.top

Установка:

1) Для запуска приложения необходимо скопировать файлы репозитория в папку WebRoot/testdrive
где WebRoot — корневая директория приложения, предполагается что yii уже установлен,
testdrive — директория нашего приложения

2)Используя свои настройки для MySql редактируем файл testdrive/protected/config/database.php 

3) Для работы приложения необходима таблица email_history.
Создать ее можно при помощи подготовленной миграции,
запустите команду в консоли php testdrive/protected/yiic.php migrat