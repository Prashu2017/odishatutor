<?php
use yii\helpers\Html;
use frontend\models\Student;

/* @var $this \yii\web\View */
/* @var $content string */
$id = Yii::$app->user->identity->id;
$studentid = Student::find()->where(['user_id' => $id])->one();
if(!empty($studentid)){

    $student_id = $studentid->id;
}else{
    $student_id = null;
}
 $model= new Student();
?>

<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                
            </div>
            <div class="pull-left info">
                <p><?php if (!empty(Yii::$app->user->identity->username)): ?><?= Yii::$app->user->identity->username;?><?php endif; ?> </p>

                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu Yii2', 'options' => ['class' => 'header']],
                    ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii']],
                    ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug']],
                    ['label' => 'Login', 'url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    [
                        'label' => 'Profile',
                        'icon' => 'user',
                        'url' => '#',
                        'items' => [
                                        ['label' => 'view profile', 'icon' => 'file-code-o', 'url' => ['/student/view?id='.$student_id],
                                        ],
                                        ['label' => $model->isNewRecord ? 'Create Profile': 'Update ', 'icon' => 'pencil', 'url' => ['/student/create'],
                                        ], 
                                        
                                            ['label' => 'Update profile', 'icon' => 'pencil', 'url' => ['/student/update?id='.$student_id],
                                        ],
                                        

                                        
                                        // ['label' => $model->isNewRecord ? 'Create Profile' : 'Update Profile', 'icon' => 'pencil','url' => [ $model->isNewRecord ? 'student/create' : 'student/update', 'visible'=>$model->isNewRecord],
                                        // ],
                                    ]
                    ],
                    [
                        'label' => 'Search tutor',
                        'icon' => 'search',
                        'url' => '#',
                        'items' => [
                                       // [
                                       //      'label' => 'View Requests',
                                       //      'icon' => 'circle-o',
                                       //      'url' => ['/quickrequest/index'],
                                       //  ],
                                        [
                                            'label' => 'Create New Search',
                                            'icon' => 'pencil',
                                            'url' => ['/quickrequest/create'],
                                        ],
                                        [
                                            'label' => 'Search from Tutors',
                                            'icon' => 'pencil',
                                            'url' => ['/student/searchtutor'],
                                        ],
                                    ],
                    ],
                    // [
                    //     'label' => 'Bus Amenities',
                    //     'icon' => 'circle-o',
                    //     'url' => '#',
                    //     'items' => [
                    //                    [
                    //                         'label' => 'View Amenities',
                    //                         'icon' => 'circle-o',
                    //                         'url' => ['/amenity/index'],
                    //                     ],
                    //                     [
                    //                         'label' => 'Create Amenities',
                    //                         'icon' => 'pencil',
                    //                         'url' => ['/amenity/create'],
                    //                     ],
                    //                 ],
                    // ],
                    // [
                    //     'label' => 'Bus Stand',
                    //     'icon' => 'circle-o',
                    //     'url' => '#',
                    //     'items' => [
                    //                    [
                    //                         'label' => 'View Bus Stand',
                    //                         'icon' => 'circle-o',
                    //                         'url' => ['/busstand/index'],
                    //                     ],
                    //                     [
                    //                         'label' => 'Create Bus Stand',
                    //                         'icon' => 'pencil',
                    //                         'url' => ['/busstand/create'],
                    //                     ],
                    //                 ],
                    // ],
                    // [
                    //     'label' => 'Bus Seat Layout',
                    //     'icon' => 'map',
                    //     'url' => '#',
                    //     'items' => [
                    //                    [
                    //                         'label' => 'View Seat Layout',
                    //                         'icon' => 'list',
                    //                         'url' => ['/seatlayout/index'],
                    //                     ],
                    //                     [
                    //                         'label' => 'Create Seat Layout',
                    //                         'icon' => 'pencil',
                    //                         'url' => ['/seatlayout/create'],
                    //                     ],
                    //                 ],
                    // ],
                    // [
                    //     'label' => 'Site Setting',
                    //     'icon' => 'gear',
                    //     'url' => '#',
                    //     'items' => [
                    //                    [
                    //                         'label' => 'View Setting',
                    //                         'icon' => 'list',
                    //                         'url' => ['/setting/index'],
                    //                     ],
                    //                     [
                    //                         'label' => 'Create Setting',
                    //                         'icon' => 'pencil',
                    //                         'url' => ['/setting/create'],
                    //                     ],
                    //                 ],
                    // ],
                ],
            ]
         ) ?>

    </section>

</aside>
