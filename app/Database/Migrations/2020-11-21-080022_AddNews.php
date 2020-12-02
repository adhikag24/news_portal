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
				'type'           => 'TEXT',
			],
			'author_id' => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'news_image' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'news_slug' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
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
