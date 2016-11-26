<?php

class m161125_201111_create_email_history extends CDbMigration
{
    public function safeUp()
    {
        $this->createTable('email_history', array(
             'id_email_his' => "pk",
             'u_name' => "varchar(50) NOT NULL",
             'u_email' => "varchar(50) NOT NULL",
             'u_message' => "text NOT NULL",
             'date_create' => "timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP",
        ));
    }

    public function safeDown()
    {
        $this->dropTable('tbl_news');
    }

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}