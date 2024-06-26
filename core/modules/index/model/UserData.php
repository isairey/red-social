<?php
/**
* @author evilnapsis
* @class UserData
* @brief Modelo de base de datos para la tabla de usuarios
**/
class UserData {
	public static $tablename = "user";


	public function Userdata(){
		$this->id = 0;
		$this->name = "";
		$this->lastname = "";
		$this->email = "";
		$this->password = "";
		$this->is_admin = 1;
		$this->created_at = "NOW()";
	}
	
	 function getid(){ return $this->id; }
	function getFullname(){ return $this->name." ".$this->lastname; }

	public function add(){
		$sql = "insert into user (name,lastname,email,code,password,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->email\",\"$this->code\",\"$this->password\",$this->created_at)";
		return Executor::doit($sql);
	}

	public function add2(){
		$sql = "insert into user (name,lastname,email,code,password,is_admin,created_at) ";
		$sql .= "value (\"$this->name\",\"$this->lastname\",\"$this->email\",\"$this->code\",\"$this->password\",\"$this->is_admin\",$this->created_at)";
		return Executor::doit($sql);
	}

	public static function sell($email){
		$sql = "select * from ".self::$tablename." where email=\"$email\" and is_admin = 1";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
		
	}

	public static function sel2($idd){
		$sql = "select * from ".self::$tablename." where id=\"$idd\" and is_admin = 1";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
		
	}


	public static function delete($id){
		$sql = "delete from ".self::$tablename." where id=$id";
		Executor::doit($sql);
	}
	public function del(){
		$sql = "delete from ".self::$tablename." where id=$this->id";
		Executor::doit($sql);
	}
	public function sel($name){
		$sql = "select id  from ".self::$tablename." where name=\"$name\"";
		Executor::doit($sql);
	}

// partiendo de que ya tenemos creado un objecto UserData previamente utilizamos el contexto
	public function update(){
		$sql = "update ".self::$tablename." set username=\"$this->username\",name=\"$this->name\",lastname=\"$this->lastname\",email=\"$this->email\",is_active=\"$this->is_active\" where id=$this->id";
		Executor::doit($sql);
	}

	public function update_passwd(){
		$sql = "update ".self::$tablename." set password=\"$this->password\" where id=$this->id";	
		Executor::doit($sql);
	}

	public static function update_active($ids){
		$sql = "update ".self::$tablename." set is_active = 0  where id=$ids";	
		Executor::doit($sql);
		$sql = "select * from ".self::$tablename." where id=$ids and is_active = 0";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public static function verificar($idss){
		if($idss==null){
			return null;
		}else{
		$sql = "select * from ".self::$tablename." where id=$idss and is_active = 0";
		$query = Executor::doit($sql);

		return Model::one($query[0],new UserData());
		}
	}


	public static function update_des($ids){
		$sql = "update ".self::$tablename." set is_active = 1  where id=$ids";	
		Executor::doit($sql);
		$sql = "select * from ".self::$tablename." where id=$ids and is_active = 1";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public static function getis_active($ids){
		$sql = "select * from ".self::$tablename." where id=$ids and is_active = 0";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}


	public function activate(){
		$sql = "update ".self::$tablename." set is_active=1 where id=$this->id";	
	Executor::doit($sql);
	}

	public static function getById($id){
		$sql = "select * from ".self::$tablename." where id=$id";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}

	public static function getByEmail($email){
		$sql = "select * from ".self::$tablename." where email=\"$email\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}


	public static function getLogin($email,$password){
		$sql = "select * from ".self::$tablename." where email=\"$email\" and password=\"$password\"";
		$query = Executor::doit($sql);
		return Model::one($query[0],new UserData());
	}


	public static function getAll(){
		$sql = "select * from ".self::$tablename;
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());

	}

	public static function getInactives(){
		$sql = "select * from ".self::$tablename." where is_active=0";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}

	public static function getActives(){
		$sql = "select * from ".self::$tablename." where is_active=1";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}
	
	public static function getLike($q){
		$sql = "select * from ".self::$tablename." inner join profile on (user.id=profile.user_id) where name like '%$q%' or lastname like '%$q%' ";
		$query = Executor::doit($sql);
		return Model::many($query[0],new UserData());
	}


}

?>