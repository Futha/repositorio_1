<?php
	class Alumno
	{
		public $edad ;
		public $nombre ;
		public $estatura ;
		public $sexo ;

		function aprobado ()
		{
			echo "he aprobado" ;
		}

		function reprobado ()
		{
			echo "he sido reprobado" ;
		}

		function baja ()
		{
			echo "me he dado de baja" ;
		}
	}

	class Maestro extends Alumno
	{
		public $clase ;
		public $profesion ;
		private $horaEntrada ;
		public $horaSalida ;

		function Maestro ()
		{
			$this -> horaEntrada = "8:00 a.m" ;
		}

		function obtenerHoraEntrada ()
		{
			return $this -> horaEntrada ;
		}

		function renuncia ()
		{
			parent :: baja () ;
			echo " (renuncia) soy maestro" ;
		}
	}

	$maestro1 = new Maestro () ;

	$maestro1 -> edad = 30 ;
	$maestro1 -> nombre = "Ana Laura" ;
	$maestro1 -> estatura = 1.60 ;
	$maestro1 -> sexo = "femenino" ;
	$maestro1 -> clase = "Física" ;
	$maestro1 -> profesion = "Ing. civil" ;

	echo 
		"Edad: " . $maestro1 -> edad  . "<br>" ,
		"Nombre: " . $maestro1 -> nombre . "<br>" ,
		"Estatura: " . $maestro1 -> estatura . "<br>" ,
		"Sexo: " . $maestro1 -> sexo . "<br>" ,
		"Clase: " . $maestro1 -> clase . "<br>" ,
		"Profesión: " . $maestro1 -> profesion . "<br>" ,
		"H. entrada: " . $maestro1 -> obtenerHoraEntrada () . "<br>" ;

	echo "Renunciado: " ; $maestro1 -> renuncia () ; echo "<br>" ;
	$maestro1 -> baja () ;
?>