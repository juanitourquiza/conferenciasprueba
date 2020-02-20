<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

//Extension que saca el ultimo digito del string
class SumaminutosExtension extends AbstractExtension
{
	public function getFunctions()
	{
		return array(
			new TwigFunction('suma_minutos', array($this, 'suma_minutos')),
		);
	}

	public function suma_minutos($horaInicial, $minutoAnadir)
	{
		//$horaInicial="14:00";
		//$minutoAnadir=2;
		//echo $horaInicial; die;
		$segundos_horaInicial = strtotime($horaInicial);
		$segundos_minutoAnadir = $minutoAnadir * 60;
		$nuevaHora = date("H:i", $segundos_horaInicial + $segundos_minutoAnadir);
		//echo "<br>".$nuevaHora;
		return $nuevaHora;
	}
}
