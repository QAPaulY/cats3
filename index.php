<?php 


class Cats
{

public $name;
public $age;
public $color = array();
public static $canFly = false;
const Foooots = 4;
public $isAlive;

//hdfghfghdfhfdhfghfgh

function __construct($a,$b,$c,$l)
{
	$this->name = $a;	
	$this->age = $b;	
	$this->color = $c;	
	$this->isAlive = $l;
}

function error()
{
throw new Exception ("That's my error");
}



function __destruct()

{
	$this->isAlive = false;
	echo '<br>Cat '. $this->name. ' was kliled by distructor';

}

 
}
$kitten = array();
for ($i=1; $i <6 ; $i++) { 
	$kitten[$i] = $cat = new Cats($a = $i, $b = $i , $c = array (1,2,3,4), $l = true
);
	echo '<br> Cat ' . $i . ' was created by cycle FOR';
}

//echo '<pre> Cats descriptoins ';
//var_dump($kitten);

$summ = 0;
$mult = 1;
for ($i=1; $i <6 ; $i++) { 
	
$summ = $summ + $kitten[$i]->age;
$mult = $mult * $kitten[$i]->age;

}

echo '<pre> Summ is '.$summ;
echo '<pre> Mult is '.$mult;

$old = 0;
for ($i=1; $i <6 ; $i++) { 
	
	if ($kitten[$i]->age>3)
	{
		echo '<br>Cat '.$i.' older that 3 years';
		$old += $i*$i; 
	}



}
echo '<pre> Old is '.$old;


for ($i=1; $i <100 ; $i++)
	{
		for ($j=1; $j <100 ; $j++)
		{
			if ((($i*$j)%29)==0) {
				goto label;
			}
		}

}
label:

if ($cat->canFly==false) {
	echo "<br>Cats can't fly";}
		else 
			{echo "<br>Cats can fly";
}