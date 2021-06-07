<?php
	
	class database {

		var $host = "localhost";
		var $uname = "root";
		var $pass = "";
		var $db = "travel";
		var $con ;

		function __construct (){
			$this->con=mysqli_connect($this->host, $this->uname, $this->pass, $this->db);
			mysqli_select_db($this->con, $this->db);
		}

		function tampil_data(){
			$data = mysqli_query($this->con, "select * from booking");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		function tampil(){
			$data = mysqli_query($this->con, "select * from user");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		function input($nama, $asal, $tujuan, $tanggal,$kelas){
			mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into 
			booking (nama,asal,tujuan,tanggal,kelas)
			values('$nama','$asal','$tujuan','$tanggal','$kelas')");
		}
		function inputuser($username, $password, $email){
			mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "insert into 
			user (username,password,email)
			values('$username','$password','$email')");
		}
		function hapus($id){
			mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from booking 
			where id='$id'");
		}
		function hapususer($id){
			mysqli_query(mysqli_connect($this->host, $this->uname, $this->pass, $this->db), "delete from user 
			where id='$id'");
		}
		function edit($id){
			$data = mysqli_query($this->con, "select * from booking where id='$id'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		function edituser($id){
			$data = mysqli_query($this->con, "select * from user where id='$id'");
			while($d = mysqli_fetch_array($data)){
				$hasil[] = $d;
			}
			return $hasil;
		}
		function update($id,$nama, $asal, $tujuan, $tanggal, $kelas){
			mysqli_query($this->con,"UPDATE booking SET 
			nama='$nama',asal='$asal',tujuan='$tujuan', tanggal='$tanggal', kelas='$kelas' WHERE id='$id'");
		}
		function updateuser($id,$username, $password, $email){
			mysqli_query($this->con,"UPDATE user SET 
			username='$username',password='$password',email='$email' WHERE id='$id'");
		}
		
	}
	
?>