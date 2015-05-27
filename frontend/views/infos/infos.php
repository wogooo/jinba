<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>
<h1>Infos</h1>
<ul>
<?php foreach ($infos as $info): ?>
    <li>
        <?= Html::encode("{$info->id} ({$info->name})") ?>:
        <?= $info->mobile ?>
    </li>
<?php endforeach; ?>
</ul>

<?= LinkPager::widget(['pagination' => $pagination]) ?>