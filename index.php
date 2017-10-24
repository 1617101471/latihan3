<?php

class domba{

	public $suara= 'mbee mbee';
	public $kaki= 4;
	public $hidung= 1;
	public $telinga= 2;
	public $jenis_kelamin= 'campuran';

}
 
 $domba1 = new domba;
 	echo "Domba" .'<br>' ;
 	echo "domba mempunyai suara : " .$domba1 ->suara. '<br>';
 	echo "dan mempunyai kaki sebanyak " .$domba1 ->kaki.' kaki' .'<br>';
 	echo "dan mempunyai Hidung sebanyak " .$domba1 ->hidung.' hidung' .'<br>';
 	echo "dan mempunyai telinga sebanyak " .$domba1 ->telinga.' telinga' .'<br>';
 	echo "dan mempunyai jenis kelamin " .$domba1 ->jenis_kelamin.' wkwkwk' .'<br>'.'<br>';

class monyet {
	public $suara='uuuaaaa uuuaaaa';
	public $berat = 10;
	
}

$monyet1 = new monyet;
	echo "Monyet" .'<br>';
	echo "monyet mempunyai suara : " .$monyet1 ->suara. '<br>';
	echo "dan mempunyai Berat : " .$monyet1 ->berat.' Kg' .'<br>'.'<br>';

class sapi {
	public $suara='mooo mooo';
	public $berat = 10;
	
}
$sapi1 = new sapi;
	echo "sapi" .'<br>';
	echo "sapi mempunyai suara : " .$sapi1 ->suara. '<br>';
	echo "dan mempunyai Berat : " .$sapi1 ->berat.' Kg' .'<br>'.'<br>';

class jangkrik {
	public $suara='krik krik';
	public $berat = 5;
	
}
$jangkrik1 = new jangkrik;
	echo "jangkrik" .'<br>';
	echo "jangkrik mempunyai suara : " .$jangkrik1 ->suara. '<br>';
	echo "dan mempunyai Berat : " .$jangkrik1 ->berat.' Kg' .'<br>'.'<br>';	

class kucing {
	public $suara='meong meong';
	public $berat = 5;
	
}
$kucing1 = new kucing;
	echo "kucing" .'<br>';
	echo "kucing mempunyai suara : " .$kucing1 ->suara. '<br>';
	echo "dan mempunyai Berat : " .$kucing1 ->berat.' Kg' .'<br>'.'<br>';		
?>