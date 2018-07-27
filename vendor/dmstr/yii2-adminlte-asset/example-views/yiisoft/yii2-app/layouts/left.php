<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p><?= Yii::$app->user->identity->username; ?></p>

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
                        'label' => 'Setting',
                        'icon' => 'gears',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create Setting', 'icon' => 'plus-circle', 'url' => ['settings/create'],],
                            ['label' => 'View Setting', 'icon' => 'eye', 'url' => ['settings/index'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Gallery',
                        'icon' => 'image',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create gallery', 'icon' => 'plus-circle', 'url' => ['gallery/create'],],
                            ['label' => 'View gallery', 'icon' => 'eye', 'url' => ['gallery/index'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Academic-level',
                        'icon' => 'bar-chart-o',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create academic level', 'icon' => 'plus-circle', 'url' => ['academic-level/create'],],
                            ['label' => 'View academic level', 'icon' => 'eye', 'url' => ['academic-level/index'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Subjects',
                        'icon' => 'book',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create Subjects', 'icon' => 'plus-circle', 'url' => ['subjects/create'],],
                            ['label' => 'View Subjects', 'icon' => 'eye', 'url' => ['subjects/index'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Students',
                        'icon' => 'graduation-cap',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create Students', 'icon' => 'plus-circle', 'url' => ['student/create'],],
                            ['label' => 'View Student', 'icon' => 'eye', 'url' => ['student/student'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Tutors',
                        'icon' => 'chalkboard-teacher',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create Students', 'icon' => 'plus-circle', 'url' => ['student/create'],],
                            ['label' => 'View Teachers', 'icon' => 'eye', 'url' => ['tutor/tutor'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Profession',
                        'icon' => 'briefcase',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create Profession', 'icon' => 'plus-circle', 'url' => ['profession/create'],],
                            ['label' => 'View Profession', 'icon' => 'eye', 'url' => ['profession/index'],],
                            
                        ],
                    ],
                    [
                        'label' => 'Quick Request',
                        'icon' => 'fighter-jet',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Create Quick Request', 'icon' => 'plus-circle', 'url' => ['quickrequest/create'],],
                            ['label' => 'View Quick Request', 'icon' => 'eye', 'url' => ['quickrequest/index'],],
                            
                        ],
                    ],
                ],
            ]
        ) ?>

    </section>

</aside>
