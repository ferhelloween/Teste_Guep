<?php
 /**
 * Classe Abstrata responsável por centralizar a conexão
 * com o banco de dados
 * 
 *   
 * Diretório Pai - lib
 * Arquivo - PersistModelAbstract.php
 */
abstract class PersistModelAbstract
{
    /**
    * Variável responsável por guardar dados da conexão do banco
    * @var resource
    */
    protected $db;
      
	  
	//Conexão com o SQL Server  
    function __construct()
    {
         
		$this->db = new PDO('odbc:Driver={SQL Server};Server=.;Database=Passagem; Uid=usr_des_001;Pwd=usr_des_001'); 	
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	   /*if(!isset(self::$db)) {
				self::$db = new PDO('odbc:Driver={SQL Server};Server=.;Database=Passagem; Uid=usr_des_001;Pwd=usr_des_001');
				self::$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$db->setAttribute(PDO::ATTR_ORACLE_NULLS, PDO::NULL_EMPTY_STRING);
          } 
			return self::$db;*/
		}
   	} 
	
	
 

?>