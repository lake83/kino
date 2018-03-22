<?php

use yii\db\Migration;

/**
 * Class m180322_132806_films
 */
class m180322_132806_films extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;

        if ($this->db->driverName === 'mysql')
        {
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_general_ci ENGINE=InnoDB';
        }

        $this->createTable('films', [
            'id' => $this->primaryKey(),
            'title' => $this->string()->notNull(),
            'slug' => $this->string()->notNull(),
            'description' => $this->text()->notNull(),
            'image' => $this->string(100)->notNull(),
            'year' => $this->string(4)->notNull(),
            'country' => $this->string(100)->notNull(),
            'genre' => $this->string(100)->notNull(),
            'director' => $this->string(100)->notNull(),
            'seo_key' => $this->string()->notNull(),
            'seo_description' => $this->text()->notNull(),
            'is_active' => $this->boolean()->defaultValue(1),
            'created_at' => $this->integer()->notNull(),
            'updated_at' => $this->integer()->notNull()
        ], $tableOptions);
    }

    public function safeDown()
    {
        $this->dropTable('films');
    }
}
