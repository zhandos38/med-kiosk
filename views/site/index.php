<?php

/* @var $this yii\web\View */

$this->title = 'Главная старница';
?>
<div class="main-menu">
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'График работы врачей') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/support']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Служба поддержки пациентов') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/our-services']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Наши услуги') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['employee/index']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Платные услуги') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/insurance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'ОСМС') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/guarantee']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'ГОБМП') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/health-codex']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Кодекс здоровья') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/disease']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Перечень социально значимых заболеваний') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/ambulance']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Правила оказания скорой медицинской помощи') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/organization']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Правила прикрепления к организациям  ПМСП') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/inspection']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Проф.осмотр') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/direction']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Руководство') ?></div>
        </a>
    </div>
    <div class="main-menu__item-wrapper">
        <a href="<?= \yii\helpers\Url::to(['site/medicine-help']) ?>" class="main-menu__item-link">
            <div class="main-menu__item"><?= Yii::t('site', 'Правил оказания стационарной помощи') ?></div>
        </a>
    </div>
</div>
