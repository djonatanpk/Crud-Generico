 <?php 
 
 require_once "Conexao.php";  
 require_once "crudIntro.class.php"; 
 
 // Consumindo métodos do CRUD genérico 
 
 // Atribui uma conexão PDO   
 $pdo = Conexao::getInstance();  
 
 // Atribui uma instância da classe Crud, passando como parâmetro a conexão PDO e o razao da tabela  
 $crud = Crud::getInstance($pdo, 'EMPRESA');  
 
 // Inseri os dados do usuário
 //$arrayUser = array('razao' => 'Taberna do Barbeiro', 'logo' => '');  
 //$retorno   = $crud->insert($arrayUser);  

//$arrayUser = array('razao' => 'João da Silva', 'logo' => ''); 
//$arrayCond = array('id=' => 1); 
//$retorno = $crud->update($arrayUser, $arrayCond); 

 // Exclui o registro do usuário com id 1 
$arrayCond = array('ID=' => 1); 
$retorno = $crud->delete($arrayCond); 

// Consulta os dados do usuário com id 1 
//$sql = "SELECT razao, logo FROM EMPRESA"; 
//$arrayParam = array(1); 
//$dados = $crud->getSQLGeneric($sql, $arrayParam, FALSE);
//var_dump($dados);
