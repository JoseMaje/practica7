<?php 
$mysqli=new mysqli("localhost","root","","bd_farmacia");
	if (mysqli_connect_errno()) {
	echo'conexion fallida:',mysqli_connect_error();
	exit(); }
include 'class.conexion.php';

class Farmacia{

	protected $usuario;
	protected $clave;
	protected $nombre;
	protected $correo;
	protected $id;

	public function __construct($usr, $cla, $nom, $cor, $id = ''){
		$db = new Conexion();

		$this->usuario= $usr;
		$this->clave = $cla;
		$this->nombre = $nom;
		$this->correo = $cor;
		$this->id = $id;
	}

	static function ningunDato(){
		return new self('', '', '', '', '');
	} 

	static function soloId($id){
		return new self('','','','', $id);
	}

	public function insert(){

		$db = new Conexion();

		$sql = "INSERT INTO `usuario`(`usuario`, `clave`, `nombre`, `correo`) VALUES ('$this->usuario', '$this->clave', '$this->nombre', '$this->correo')";

		$db->query($sql) ? header("location: admin_usuarios.php?res=insertado") : header("location: admin_usuarios.php?res=error");

	}

	public function update(){

		$db = new Conexion();

		$sql = "UPDATE `usuario` SET `usuario`='$this->usuario',`clave`='$this->clave',`nombre`='$this->nombre',`correo`='$this->correo' WHERE `id_usuario` = $this->id";
		
		$db->query($sql) ? header("location: admin_usuarios.php?res=editado") : header("location: admin_usuarios.php?res=error");

		
	}

public function delete(){
		$db = new Conexion();

		$sql = "DELETE FROM `usuario` WHERE `id_usuario` = $this->id";
		$db->query($sql) ? header("location: admin_usuarios.php?res=eliminado") : header("location: admin_usuarios.php?res=error");

		$result = $db->query($sql);

		return $result;
	}


	public function selectId(){
		$db = new Conexion();

		$sql = "SELECT * FROM `usuario` WHERE `id_usuario` = $this->id";

		$result = $db->query($sql);

		return $result;
	}

	public function select(){

		$db = new Conexion();

		$sql = "SELECT * FROM `usuario`";

		$result = $db->query($sql);

		return $result;

	}
	public function listar_categoria()
					{
						$sql=" SELECT * FROM categoria";
						$query=$this->db->query($sql);
						if($query->num_rows()>0)
						{
							return $query->result();
						}
						else
						return false;
					} 

}

 ?>