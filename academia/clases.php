<?php
	
	class Grabar
	{
		private $conexion, $tabla, $campos, $valores;

		function __construct($t, $c, $v)
		{
			$this->tabla = $t;
			$this->campos = $c;
			$this->valores = $v;
			$this->conexion = new mysqli("10.10.10.199","viernes","1234","pruebas");
		}

		function haz_grabar()
		{
			$sql = "INSERT INTO $this->tabla ($this->campos) VALUES ($this->valores)";
			return $this->conexion->query($sql);
		}

		function ultimo()
		{
			return $this->conexion->insert_id;
		}
	}
	
	class Consultar
	{

		private $conexion, $tabla, $condicion;

		function __construct($t, $c)
		{
			$this->tabla = $t;
			$this->condicion = $c;
			$this->conexion = new mysqli("10.10.10.199","viernes","1234","pruebas");
		}

		function cambiarcondicion($c)
		{
			$this->condicion=$c;
		}

		function cambiartabla($t)
		{
			$this->tabla = $t;
		}

		function tablaycondicion($t,$c)
		{
			if($t!="")
			{
				$this->cambiartabla($t);
			}

			if($c!="")
			{
				$this->cambiarcondicion($c);
			}	
		}

		function haz_fetch()
		{
			$sql = "SELECT * FROM $this->tabla $this->condicion";
			$ejecutar = $this->conexion->query($sql);
			return $ejecutar->fetch_array();
		}

		function haz_query()
		{
			$sql = "SELECT * FROM $this->tabla $this->condcion";
			return $this->conexion->query($sql);
		}

		function haz_cuenta()
		{
			$sql="SELECT * FROM $this->tabla $this->condcion";
			$ejecutar = $this->conexion->query($sql);
			return $ejecutar->num_rows;

			// $ejecutar = $this->haz_query();
			// return $ejecutar->num_rows;
		}

	}

	class Modificar
	{
		private $tabla, $campos, $condicion, $conexion;

		function __construct($t,$c, $co)
		{
			$this->tabla = $t;
			$this->campos = $c;
			$this->condicion = $co;
			$this->conexion = new mysqli("10.10.10.199","viernes","1234","pruebas");
		}

		function cambia_condicion($co)
		{
			$this->condicion = $co;
		}

		function cambia_tabla($t)
		{
			$this->tabla = $t;
		}

		function cambia_campos($c)
		{
			$this->campos = $c;
		}

		function cambia_todo($t,$c,$co)
		{
			$this->cambia_tabla($t);
			$this->cambia_condicion($co);
			$this->cambia_campos($c);
		}

		function haz_modificacion()
		{
			$sql = "UPDATE $this->tabla SET $this->campos WHERE $this->condicion";
			return $this->conexion->query($sql);
		}
	}

	class Borrar
	{
		private $tabla, $condicion, $conexion;

		function __construct($t,$c)
		{
			$this->tabla=$t;
			$this->condicion = $c;
			$this->conexion = new mysqli("10.10.10.199","viernes","1234","pruebas");
		}

		function cambia_tabla($t)
		{
			$this->tabla = $t;
		}

		function cambia_condicion($c)
		{
			$this->condicion=$c;
		}

		function cambia_todo($t,$c)
		{
			$this->cambia_tabla($t);
			$this->cambia_condicion($c);
		}

		function haz_borrar()
		{
			$sql = "DELETE FROM $this->tabla WHERE $this->condicion";
			return $this->conexion->query($sql);
		}
	}
	




?>