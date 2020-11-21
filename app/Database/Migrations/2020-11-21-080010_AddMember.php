<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddMember extends Migration
{
	public function up()
	{
		
		$this->forge->addField([
			'member_id'          => [
					'type'           => 'INT',
					'constraint'     => 5,
					'unsigned'       => true,
					'auto_increment' => true,
			],
			'member_fn'       => [
					'type'           => 'VARCHAR',
					'constraint'     => '100',
			],
			'member_ln' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],
			'member_email' => [
				'type'           => 'VARCHAR',
				'constraint'     => '100',
			],

	]);
	$this->forge->addKey('member_id', true);
	$this->forge->createTable('member');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('member');
	}
}
