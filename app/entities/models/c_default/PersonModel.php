<?php
/* ########################################################################## *
 * #####################   Auto Generated File    ########################### *
 * #####################      DO NOT MODIFY       ########################### *
 * ########################################################################## */

namespace App\Entities\Models\C_default;

use Rf\Core\Entity\Entity;

abstract class PersonModel extends Entity {

	// Constants
	const conn_name = 'default';
	const table_name = 'person';
	const table_structure = [
		'id'=> [
			'Type'    => 'bigint(20) unsigned',
			'Null'    => 'NO',
			'Key'     => 'PRI',
			'Default' => '',
			'Extra'   => 'auto_increment',
		],
		'firstname'=> [
			'Type'    => 'varchar(255)',
			'Null'    => 'NO',
			'Key'     => '',
			'Default' => '',
			'Extra'   => '',
		],
		'lastname'=> [
			'Type'    => 'varchar(255)',
			'Null'    => 'NO',
			'Key'     => '',
			'Default' => '',
			'Extra'   => '',
		],
		'birthday'=> [
			'Type'    => 'date',
			'Null'    => 'NO',
			'Key'     => '',
			'Default' => '',
			'Extra'   => '',
		],
		'gender'=> [
			'Type'    => 'smallint(1)',
			'Null'    => 'NO',
			'Key'     => '',
			'Default' => '',
			'Extra'   => '',
		],
		'created_at'=> [
			'Type'    => 'datetime',
			'Null'    => 'NO',
			'Key'     => '',
			'Default' => '',
			'Extra'   => '',
		],
		'updated_at'=> [
			'Type'    => 'datetime',
			'Null'    => 'YES',
			'Key'     => '',
			'Default' => '',
			'Extra'   => '',
		]
	];

	// Properties
	protected $id;
	protected $firstname;
	protected $lastname;
	protected $birthday;
	protected $gender;
	protected $created_at;
	protected $updated_at;

	// Getters and setters
	public function getId() {
		return $this->id;
	}
	public function setId($id) {
		$this->id = $id;
	}
	public function getFirstname() {
		return $this->firstname;
	}
	public function setFirstname($firstname) {
		$this->firstname = $firstname;
	}
	public function getLastname() {
		return $this->lastname;
	}
	public function setLastname($lastname) {
		$this->lastname = $lastname;
	}
	public function getBirthday() {
		return $this->birthday;
	}
	public function setBirthday($birthday) {
		$this->birthday = $birthday;
	}
	public function getGender() {
		return $this->gender;
	}
	public function setGender($gender) {
		$this->gender = $gender;
	}
	public function getCreatedAt() {
		return $this->created_at;
	}
	public function setCreatedAt($createdAt) {
		$this->created_at = $createdAt;
	}
	public function getUpdatedAt() {
		return $this->updated_at;
	}
	public function setUpdatedAt($updatedAt) {
		$this->updated_at = $updatedAt;
	}

}