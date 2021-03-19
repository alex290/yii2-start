INSTALLATION
------------


    php yii migrate
    
    php yii migrate --migrationPath=@yii/rbac/migrations


Добавить пользователя
------------

раскоментировать 

в SiteController.php

    public function actionAddUser()

и старт  http://ваш_домен/site/add-user