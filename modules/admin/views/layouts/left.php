<?php
app\assets\AdminAsset::register($this);

/* @var $this \yii\web\View */
/* @var $content string */

?>
<aside class="main-sidebar">
    <section class="sidebar">
<?= dmstr\widgets\Menu::widget([
    'options' => ['class' => 'sidebar-menu'],
    'encodeLabels' => false,
    'items' => [
        ['label' => 'Пользователи', 'url' => ['/admin/user/index'], 'icon' => 'users'],
        ['label' => 'Фильмы', 'url' => ['/admin/films/index'], 'icon' => 'film'],
        ['label' => 'Новости', 'url' => ['/admin/news/index'], 'icon' => 'file']
    ]
]);	
?>
    </section>
</aside>