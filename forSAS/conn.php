<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "forsas";
	var $koneksi="";

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}


	// function register($nama,$email,$nik,$password)
	// {	$pilih_db = mysql_select_db($database, $koneksi) or die (mysql_error());
	// 	$insert = mysqli_query($this->koneksi,"insert into user values ('','$nama','$email','$nik','$password')");
	// 	return $insert;
	// }

	function login($nik,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from user where nik='$nik'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			
			if($remember)
			{
				setcookie('nik', $nik, time() + (60 * 60 * 24 * 5), '/');
				setcookie('nama', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
			}
			$_SESSION['nik'] = $nik;
			$_SESSION['nama'] = $data_user['name'];
			$_SESSION['is_login'] = TRUE;
			return TRUE;
		}
	}

	function relogin($nik)
	{
		$query = mysqli_query($this->koneksi,"select * from user where nik='$nik'");
		$data_user = $query->fetch_array();
		$_SESSION['nik'] = $nik;
		$_SESSION['nama'] = $data_user['name'];
		$_SESSION['is_login'] = TRUE;
	}

	function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from kantor");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}
	function tambah_data($kode_kantor,$nama_kantor,$alamat,$no_telp)
	{
		mysqli_query($this->koneksi,"insert into kantor values ('','$kode_kantor','$nama_kantor','$alamat','$no_telp')");
	}

	function get_by_id($id_kantor)
	{
		$query = mysqli_query($this->koneksi,"select * from kantor where id='$id_kantor'");
		return $query->fetch_array();
	}
	function update_data($kode_kantor,$nama_kantor,$alamat,$no_telp,$id_kantor)
	{
		$query = mysqli_query($this->koneksi,"update kantor set kode_kantor='$kode_kantor',nama_kantor='$nama_kantor',alamat='$alamat',no_telp='$no_telp' where id='$id_kantor'");
	}
	function delete_data($id_kantor)
	{
		$query = mysqli_query($this->koneksi,"delete from kantor where id='$id_kantor'");
	}
	function tampil_laporan()
	{
		$data = mysqli_query($this->koneksi,"SELECT * FROM laporan, kantor  WHERE laporan.id_kantor = kantor.id ORDER BY id_laporan ASC");
		while($row = mysqli_fetch_array($data)){
			$hasil[] = $row;
		}
		return $hasil;
	}

	

	
} 


?>
