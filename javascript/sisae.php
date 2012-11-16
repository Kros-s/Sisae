<?php

//***
//*** Conexión a la base de datos ***
//***

// Instanciamos un objeto global a todos los PHP que lo incluyen 
$sisae = new BD();

class BD {

  // Reemplazar con los datos de la base MySQL
  var $host = "localhost";
  var $user= "root";
  var $password = "";
  var $database = "sisae";
  var $conn;

  const ABIERTA = 1;
  const CERRADA = 0;
  var $status = "CERRADA";

  /**
  * Abre la base de datos
  */
  public function open() {
      $this->conn = mysql_connect($this->host, $this->user, $this->password) or die(mysql_error());
                         mysql_select_db($this->database, $this->conn) or die (mysql_error());

  }
  
  /**
  * Cierra la base de datos 
  *
  */
  public function close() {
      mysql_close($this->conn);
  }


  /**
  * Ejecuta una consulta que no devuelve resultados
  *
  * @param string $sql Consulta SQL
  */
  public function ExecuteNonQuery($sql){
      if ($this->status==BD::CERRADA) $this->open();
      $rs = mysql_query($sql, $this->conn);
    settype ($rs, "null");
  }


       /**
       * Ejecuta una consulta SQL
       *
       * @param string $query Conslta SQL
       * @return un array de registros, cada uno siendo un array asociativo de campos
       */
  public function Execute($query){
      if ($this->status==BD::CERRADA) $this->open();
	  //echo $query; //con esto verificmos que se realize el query
      $rs = mysql_query($query,$this->conn)or die(mysql_error());
      // Paso el recordset a array asociativo 
      $registros = array();

      while ($reg = mysql_fetch_array($rs)) {
            $registros[] = $reg;
      }
	  
    return $registros;
  }

  /**
  * Ejecuta una consulta devolviendo una fila (registro) con todods sus campos
  *
  * @param string $tableName Nombre de la Tabla
  * @param string $filter Filtro SQL para el Where
  * @return un array asociativo de campos
  */
  public function ExecuteRecord($tableName, $filter) {
      $todos = $this->Execute("SELECT * FROM $tableName  WHERE $filter");
	  if(!empty($todos))
	  {
		  return $todos[ 0];
	  }
  }

  /**
  * Ejecuta una consulta devolviando una columna (campo) con todos sus registros
  *
  * @param string $tableName Nombre de la tabla
  * @param string $field Nombre del campo a traer
  * @param string $filtro Filtro del Where (por lo menos debe ser 1=1
  * @return un array asociativo de valores de cada registro 
  */
 public function ExecuteField($tableName, $field, $filter) {
     $todos = $this->Execute("SELECT $field FROM $tableName WHERE $filter");
     $aux = array();
     foreach ($todos as $uno) {
          $aux[ ] = $uno[ 0];
     }

     return $aux;
 }
  
  /**
  * Trae todos los registros de una tabla 
  *
  * @param string $tableName Nombre de la tabla
  * @param string $orden Campo por el cual ordenar (opcional)
  * @return un array de registro, cada uno un array asociativos    
  */
  public function ExecuteTable($tableName, $orden = "") {
        if ($orden != "")
             return $this->Execute("SELECT * FROM " . $tableName . " ORDER BY " . $orden);
        else
             return $this->Execute("SELECT * FROM " . $tableName);
  }

  /**
  * Trae un solo valor de la base de datos
  *
  * @param string $query Consulta SQL (1*1)
  * @return el valor devuelto por la consulta 
  */
 public function ExecuteScalar($query) {
     if ($this->status==BD::CERRADA) $this->open();

     $rs = mysql_query($query, $this->conn) or die(mysql_error());

     $reg = mysql_fetch_array($rs);
     return $reg[ 0];
  }

  /**
  * Devuelve la cantidad de registros de una tabla 
  *
  * @param  string $tableName Nombre de la Tabla
  * @return Cantidad de Registros
  */
 public function RecordCount($tableName) {
     return $this->ExecuteScalar("SELECT COUNT(*) FROM " . $tableName);
  }
  
  /*
  * Inserta un valor dependiendo del Quey asignado
  *
  * @param string $query Datos a insertar
  * 
  */
  public function Upload($query){
	if ($this->status==BD::CERRADA) $this->open();
	$rs = mysql_query($query, $this->conn)or die(mysql_error());
	if($rs != 0)
	{
		$res = true;
	}else
	{
		$res = false;		
	}
	return $res;
  }
 /*
 * Permite realizar la verificacion de si un campo existe ya 
 * no olvidar que el query deve quedar asi "'$variable'" para que lo tome como dato
 * TRUE ES LLENO
 * FALSE ES VACIO
 *
 **/

public function ExecuteComparation($tableName, $field, $filterCompare) {
     $compara = $this->Execute("SELECT $field FROM $tableName WHERE $field = $filterCompare");//no olvidar poner al campo '' sencila para indicar comparacion
	 if(!empty($compara))
		 $comp = true;
	 else
		 $comp = false;
	 
	 return $comp;
 }
/*-----------------------------------------Fin de La clase--------------------------------*/
}


?>