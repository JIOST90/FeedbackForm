[Содержание](../../readme.md)

## Авторизация в соц сетях

Для работы сервиса необходимы следующие расширения:

### Yii EAuth extension
>
##### расширение использует EOAuth и loid
позволяет выполнять аутентификацию пользователей с учетными записями на других сайтах
#### Установка
- git clone https://github.com/Nodge/yii-eauth.git
- Распаковать расширение в директорию  `protected/extensions`
- Добавить следующие строки в файл конфигурации 
```php
...
    'import'=>array(
        'ext.eoauth.*',
        'ext.eoauth.lib.*',
        'ext.lightopenid.*',
        'ext.eauth.*',
        'ext.eauth.services.*',
    ),
...
    'components'=>array(
    ...
            'eauth' => array(
            'class' => 'ext.eauth.EAuth',
            'popup' => true, // Использовать всплывающее окно вместо перенаправления на сайт провайдера
            'cache' => false, // Названия компнента для кеширования. False для отключения кеша. По умолчанию 'cache'.
            'cacheExpire' => 0, // Время жизни кеша. По умолчанию 0 - означает перманентное кеширование.
            'services' => array( // Вы можете настроить список провайдеров и переопределить их классы
                'google_oauth' => array(
                    // регистрация приложения: https://code.google.com/apis/console/
                    'class' => 'GoogleOAuthService',
                    'client_id' => '...',
                    'client_secret' => '...',
                    'title' => 'Google (OAuth)',
                ),
                'facebook' => array(
                    // регистрация приложения: https://developers.facebook.com/apps/
                    'class' => 'FacebookOAuthService',
                    'client_id' => '...',
                    'client_secret' => '...',
                ),
                'vkontakte' => array(
                    // регистрация приложения: http://vk.com/editapp?act=create&site=1
                    'class' => 'VKontakteOAuthService',
                    'client_id' => '...',
                    'client_secret' => '...',
                ),
                'odnoklassniki' => array(
                    // регистрация приложения: http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=13992188
                    // ... или здесь: http://www.odnoklassniki.ru/dk?st.cmd=appsInfoMyDevList&st._aid=Apps_Info_MyDev
                    //http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=13992188
                    'class' => 'OdnoklassnikiOAuthService',
                    'client_id' => '...',
                    'client_public' => '...',
                    'client_secret' => '...',
                    'title' => 'Однокл.',
                ),
            ),
        ),
    ...
    ),
```

### Yii EOAuth extension
>
реализует протокол OAuth
#### Установка
- clone https://github.com/jorgebg/yii-eoauth.git
- Распаковать расширение в директорию  `protected/extensions`

### Yii 1.1: loid
>
##### расширение использует curl
реализует поддержку LightOpenID класса в Yii Framework
#### Установка
- clone https://github.com/GOshaSaveiko/loid.git
- Распаковать расширение в директорию  `protected/extensions`

### yii-curl
>
Curl Обертка для фреймворка
#### Установка
- clone https://github.com/hackerone/curl.git
- Распаковать расширение в директорию  `protected/extensions`

