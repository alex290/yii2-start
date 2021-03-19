INSTALLATION
------------

    git clone https://github.com/alex290/yii2-start.git ./

    composer update

    php yii migrate
    
    php yii migrate --migrationPath=@yii/rbac/migrations


Добавить пользователя
------------

раскоментировать 

в SiteController.php

    public function actionAddUser()

и старт  http://ваш_домен/site/add-user

Добавить права  и роли (RBAC)
------------

раскоментировать 

в SiteController.php

    public function actionRbac()

и старт  http://ваш_домен/site/rbac