<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%service}}`.
 */
class m191112_141234_create_service_table extends Migration
{
    public $tableName = '{{%service}}';
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($this->tableName, [
            'id' => $this->primaryKey(),
            'name_ru' => $this->string(),
            'name_kz' => $this->string(),
            'code' => $this->integer(),
            'reception_number' => $this->integer(),
            'price' => $this->float(),
            'notation' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable($this->tableName);
    }
}
