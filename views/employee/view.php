<?php

/* @var $model \app\models\Employee */
/* @var $this \yii\web\View */

$this->title = 'График врача';
?>
<div class="employee-card">
    <div class="buttons-group">
        <div class="go-home-button__wrapper">
            <a href="/" class="go-home-button__link">
                <div class="go-home-button">
                    <i class="fas fa-home"></i> <?= Yii::t('site', 'На главную страницу') ?>
                </div>
            </a>
        </div>
        <div class="back-button__wrapper">
            <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="back-button__link">
                <div class="back-button">
                    <i class="fa fa-arrow-left"></i> <?= Yii::t('site', 'Назад') ?>
                </div>
            </a>
        </div>
    </div>
    <div class="employee-card__info-wrapper">
        <div class="employee-card__image-wrapper">
            <img src="/img/employee/<?= $model->image ?>" alt="<?= $model->image ?>" class="employee-card__image">
        </div>
        <div class="employee-card__info">
            <div class="employee-card__full-name">
                <?= $model->full_name ?>
            </div>
            <div class="employee-card__position">
                <?= $model->position->name ?>
            </div>
            <div class="employee-card__cabinet">
                <?= Yii::t('site', 'Кабинет') ?> <?= $model->cabinet ?>
            </div>
            <div class="employee-card__schedule">
                <table class="table">
                    <thead>
                        <tr>
                            <th><?= Yii::t('site', 'Понидельник') ?></th>
                            <th><?= Yii::t('site', 'Вторник') ?></th>
                            <th><?= Yii::t('site', 'Среда') ?></th>
                            <th><?= Yii::t('site', 'Четверг') ?></th>
                            <th><?= Yii::t('site', 'Пятника') ?></th>
                            <th><?= Yii::t('site', 'Суббота') ?></th>
                            <th><?= Yii::t('site', 'Воскресенье') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><?= $model->monday ?></th>
                            <th><?= $model->tuesday ?></th>
                            <th><?= $model->wednesday ?></th>
                            <th><?= $model->thursday ?></th>
                            <th><?= $model->friday ?></th>
                            <th><?= $model->saturday ? $model->saturday : 'Выходной' ?></th>
                            <th><?= $model->sunday ? $model->sunday : 'Выходной' ?></th>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
