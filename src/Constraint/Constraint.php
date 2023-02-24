<?php 

namespace Nourman\SimpleTest\Constraint;

interface Constraint {

	public function message(): string;

	public function handle();

	public function getResult();

	public function passMessage(): string;

	public function failMessage(): string;
}

 ?>