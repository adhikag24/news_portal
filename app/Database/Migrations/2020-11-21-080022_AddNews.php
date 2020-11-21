<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddNews extends Migration
{
	public function up()
	{
			
		$this->forge->addField([
			'news_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'news_title'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'news_content' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'author_id' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'date_created' => [
				'type'           => 'timestamp'
			],

	]);
	$this->forge->addKey('news_id', true);
	$this->forge->createTable('news');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('news');
	}
}
