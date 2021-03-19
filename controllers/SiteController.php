<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    // Добавить пользователя
    /*
    public function actionAddUser()
	{
        $user = new \app\models\User();
        $user->username = 'admin';
        $user->password = \Yii::$app->getSecurity()->generatePasswordHash('admin');
        $user->first_name = 'Настя';
        $user->last_name = 'WebGoal';
        $user->mail = 'alex@webgoal.ru';
        $user->save();
        return 'ОК';
	}
    */
    
    // Добавить права  и роли (RBAC)
    /*
    public function actionRbac()
    {
        $auth = Yii::$app->authManager;

        // добавляем разрешение "userPermission"
        $userPermission = $auth->createPermission('userPermission');
        $userPermission->description = 'Разрешение пользователя';
        $auth->add($userPermission);

        // добавляем разрешение "adminPermission"
        $adminPermission = $auth->createPermission('adminPermission');
        $adminPermission->description = 'Разрешение администратора';
        $auth->add($adminPermission);

        // добавляем роль "user" и даём роли разрешение "userPermission"
        $user = $auth->createRole('user');
        $user->description = 'Пользователь';
        $auth->add($user);
        $auth->addChild($user, $userPermission);

        // добавляем роль "admin" и даём роли разрешение "adminPermission"
        // а также все разрешения роли "user"
        $admin = $auth->createRole('admin');
        $auth->add($admin);
        $auth->addChild($admin, $adminPermission);
        $auth->addChild($admin, $user);

        // Назначение ролей пользователям. 1 и 2 это IDs возвращаемые IdentityInterface::getId()
        // обычно реализуемый в модели User.
        $auth->assign($admin, 1);
        return 'ОК';
    }
    */
}
