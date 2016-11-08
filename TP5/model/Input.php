<?php

class Input {

	protected $type;
	protected $name;
	protected $value;
	protected $label;

	/* Constructeur */
	public function __construct($type, $name, $value, $label) {
		$this->type = $type;
		$this->name = $name;
		$this->value = $value;
		$this->label = $label;
	}
	
	/* Getters */
	public function getType() {
		return $this->type;
	}
	
	public function getName() {
		return $this->name;
	}
	
	public function getValue() {
		return $this->value;
	}
	
	public function getLabel() {
		return $this->label;
	}
	
	/* Setters */
	public function setType($type) {
		$this->type = $type;
	}
	
	public function setName($name) {
		$this->name = $name;
	}
	
	public function setValue() {
		$this->value = value;
	}
	
	public function setLabel() {
		$this->label = label;
	}
}
?>