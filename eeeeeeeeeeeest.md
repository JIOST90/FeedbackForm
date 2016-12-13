[Содержание](../../readme.md)

## Авторизация в соц сетях

### Для работы сервиса необходимы следующие расширения:
>
### Yii EAuth extension
- позволяет выполнять аутентификацию пользователей с учетными записями на других сайтах
- git clone https://github.com/Nodge/yii-eauth.git
- расширение использует EOAuth и loid
>
### Yii EOAuth extension
- реализует протокол OAuth
- git clone https://github.com/jorgebg/yii-eoauth.git
>
### Yii loid extension
- реализует поддержку LightOpenID класса в Yii Framework
- git clone https://github.com/GOshaSaveiko/loid.git
- расширение использует curl
>
### yii-curl
- Curl Обертка для фреймворка
- git clone https://github.com/hackerone/curl.git

### Установка
- Распаковать расширения в директорию  `protected/extensions`
- Добавить следующие строки в файл конфигурации 
```php
...
    'import' => [
        'ext.eoauth.*',
        'ext.eoauth.lib.*',
        'ext.lightopenid.*',
        'ext.eauth.*',
        'ext.eauth.services.*',
    ],
...
    'components' => [
        'loid' => [
            'class' => 'application.extensions.lightopenid.loid',
        ],
        'curl' => [
            'class' => 'ext.curl.Curl',
            'options' => array(/* additional curl options */),
        ],
        'eauth' => [
            'class' => 'ext.eauth.EAuth',
            'popup' => true, // Использовать всплывающее окно вместо перенаправления на сайт провайдера
            'cache' => false, // Названия компнента для кеширования. False для отключения кеша. По умолчанию 'cache'.
            'cacheExpire' => 0, // Время жизни кеша. По умолчанию 0 - означает перманентное кеширование.
            'services' => [ // Вы можете настроить список провайдеров и переопределить их классы
                'google_oauth' => [
                    // регистрация приложения: https://code.google.com/apis/console/
                    'class' => 'GoogleOAuthService',
                    'client_id' => '...',
                    'client_secret' => '...',
                    'title' => 'Google (OAuth)',
                ],
                'facebook' => [
                    // регистрация приложения: https://developers.facebook.com/apps/
                    'class' => 'FacebookOAuthService',
                    'client_id' => '...',
                    'client_secret' => '...',
                ],
                'vkontakte' => [
                    // регистрация приложения: http://vk.com/editapp?act=create&site=1
                    'class' => 'VKontakteOAuthService',
                    'client_id' => '...',
                    'client_secret' => '...',
                ],
                'odnoklassniki' => [
                    // регистрация приложения: http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=13992188
                    // ... или здесь: http://www.odnoklassniki.ru/dk?st.cmd=appsInfoMyDevList&st._aid=Apps_Info_MyDev
                    //http://dev.odnoklassniki.ru/wiki/pages/viewpage.action?pageId=13992188
                    'class' => 'OdnoklassnikiOAuthService',
                    'client_id' => '...',
                    'client_public' => '...',
                    'client_secret' => '...',
                    'title' => 'Однокл.',
                ],
            ],
        ],
    ...
    ],
```
