
<?php

include_once"db.php";
class curd extends db
{




function create_user($data){
	$name=$data['name'];
	$lastname=$data['lastname'];
	$email=$data['email'];
	$username=$data['username'];
	$password=$data['password'];
	$type=$data['type'];
	$img=$data['image'];
	$uid=$this->last_user_id();
	$userid2=$uid+1;
	

	$query="INSERT INTO users (username,password,image,email,name,lastname,type,status) VALUES('$username','$password','$userid2','$email','$name','$lastname','$type',0)";
    if ($this->user_exist($username,$password)==0) {
    	$result=mysqli_query($this->connection,$query);
	
	if ($result) {
		move_uploaded_file($img,"../userphoto/$userid2.jpg");
		header("location:../register.php");
	}
    	
    }
    else {
    	header("location:../register.php");
    }

	
	
	

	
}

function user_exist($username,$password){
$query="select * from users where username='$username'";
$sql=mysqli_query($this->connection,$query);
$data=mysqli_num_rows($sql);
return $data;
}

function check_user($data){
	$username=$data['username'];
	$password=$data['password'];
	$remember=$data['remember'];
$query="SELECT * FROM users WHERE username='$username' and password='$password' and status=1";
$r1=mysqli_query($this->connection,$query);
$r2=mysqli_fetch_assoc($r1);
$type=$r2['type'];
$userid=$r2['id'];
if ($type) {
	if ($type=="مدیر") {

		header("location:../admin.php?id=$userid");
	}
	else
	if ($type=='استاد') {
		header("location:../teacher.php?id=$userid");
	}
	else
	{
       header("location:../student.php?id=$userid");
	}
}
else{
	header("location:../index.php");
}


}
function user_info($id){
$query="select * from users where id=$id";
$r1=mysqli_query($this->connection,$query);
while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;



}

function last_user_id(){

	$result=mysqli_query($this->connection,"select id from users order by id desc limit 1");
	$a=mysqli_fetch_assoc($result);
	return $a['id'];
	


}
function show_course(){
$query="select * from course";
$r1=mysqli_query($this->connection,$query);
while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;


}
function show_mycourse($id){
$query="select * from course where userid=$id";
$r1=mysqli_query($this->connection,$query);
while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;


}
function read_messege($id,$pid){

$query="select * from chat where (reciever=$id and senderrid=$pid) or (reciever=$pid and senderrid=$id) ;";
$r1=mysqli_query($this->connection,$query);
while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		if (!empty($data)) {
			return $data;
		}
		

}
function list_cours(){

$query="select * from course;";
$r1=mysqli_query($this->connection,$query);
while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;

}

function edite_password($id,$oldpassowrd,$newpassword){
     $uid= $id+0;
	$query="select count(id) as userid from users where password='$oldpassowrd'";
	$result=mysqli_query($this->connection,$query);
	$id=mysqli_fetch_assoc($result);
	$userid=$id['userid'];
	if ($userid>=1) {
		
		$query="update users set password='$newpassword' where id=$uid";
		mysqli_query($this->connection,$query);
	
	   header("location:../student_edite_password.php?id=$uid");

	}
	else{
		 header("location:../student_edite_password.php?id=$uid");
	}

}
function edite_user($password,$userid,$name,$lastname,$email,$photo,$username){

if($this->check_user_passowrd($password)){

	$query="update users set name='$name', lastname='$lastname',email='$email', username='$username' where id =$userid;  ";
	mysqli_query($this->connection,$query);
	if (!$photo) {
		move_uploaded_file($photo,"../userphoto/$userid.jpg");
		header("location:../student_edite.php?userid= $userid; ");
	}


}
else{

header("location:../student_edite.php?userid= $userid;");
}

}
function check_user_passowrd($password){
	$query="select count(id) as userid from users where password='$password'";
	$result=mysqli_query($this->connection,$query);
	$id=mysqli_fetch_assoc($result);
	$userid=$id['userid'];
	if ($userid>=1) {
	return true;
	}
	else{
		return false;
	}

}
function list_user_for_messege($userid){

$query="select  * from users order by type desc";
$r1=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;


}


function messege($messege,$name,$sid,$pid){

$date=date("Y/M/D");
$query="INSERT INTO chat (messege,date,senderrid,reciever) VALUES ('$messege','$date',$sid,$pid)";
mysqli_query($this->connection,$query);
header("location:../messege.php?id=$sid &name=$name &pid=$pid");


}

function course_info($id){
$query="select * from course where id=$id";
$r1=mysqli_query($this->connection,$query);
while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;



}

function show_user_for_messege($userid){
$query="select distinct(senderrid) from chat where reciever=$userid";
$r1=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
     if (!empty($data)) {
			return $data;
		}

}


	

function show_user_name($userid){
$query="select name,lastname from users where id=$userid";
$r1=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;


}
function get_messege($messegeid,$userid){
$query="select * from chat where senderrid=$messegeid and reciever=$userid order by id desc limit 1 ";
$r1=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;


}

function member_request(){
$query="select * from users where status=0 or status=-1";
$r1=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		if (!empty($data)) {
			return $data;
		}
		

}
function member_permission(){
$query="select * from users where status=1";
$r1=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($r1)) {
			$data[]=$post;
		}
		return $data;

}

function confirm_users($userid,$status2){
	$query="update users set status=$status2 where id=$userid";
	mysqli_query($this->connection,$query);
	header("location:../member.php");
}
function closed_users($userid,$status2){
	$query="update users set status=$status2 where id=$userid";
	mysqli_query($this->connection,$query);
	header("location:../member_permission.php");
}

function create_cours($userid,$shortname,$fullname,$file_name,$file_type){
$file_extension="";
list($n,$extension)=explode('/',$file_type);
if ($extension=="vnd.openxmlformats-officedocument.wordprocessingml.document") {
	$file_extension="docx";
}
else{
$file_extension=$extension;
}
$date=date("Y/M/D");
$coursid=$this->show_id('course');
$course_id=$coursid+1;
$filename=$course_id.".".$file_extension;
$query="insert into course (fullname,shortname,date,file,userid) values('$fullname','$shortname','$date','$filename',$userid)";
$result=mysqli_query($this->connection,$query);

if ($result) {

	move_uploaded_file($file_name,"../course_file/$filename");
	header("location:../teacher.php?id= $userid; ");
}

}

function show_id($table){

$query="select id from $table order by id desc limit 1";
$r=mysqli_query($this->connection,$query);
$id= mysqli_fetch_assoc($r);
return $id['id'];

}

function download_all_user_list(){
header("Content-Type: text/csv; charset=utf-8");
header('Content-Disposition: attachment;filename=All_user_list.csv');
$output = fopen('php://output', 'w');

$query="select username,password,email,name,lastname,type,status from users";
$sql=mysqli_query($this->connection,$query);
$columns_total = mysqli_num_fields($sql);
$headings=array("username","password","email","name","lastname","type","status");
fputcsv($output, $headings);
while ($row = mysqli_fetch_assoc($sql)){
$username=$row['username'];
$password=$row['password'];
$email=$row['email'];
$name=$row['name'];
$lastname=$row['lastname'];
$type=$row['type'];
$status=$row['status'];
$status2="";
if ($status==1) {
	$status2="فعال";
}
else
	if ($status==0) {
		$status2="غیر فعال";
	}
	else
	{
		$status2="مسدود شده";
	}
$data = array($username,$password,$email,$name,$lastname,$type,$status2);
fputcsv($output, $data);

}




}
function download_user_list($status){
header("Content-Type: text/csv; charset=utf-8");
header('Content-Disposition: attachment;filename=user_list.csv');
$output = fopen('php://output', 'w');
$headings=array("username","password","email","name","lastname","type","status");
fputcsv($output, $headings);

$query="select username,password,email,name,lastname,type,status from users where status='$status'";
$sql=mysqli_query($this->connection,$query);
while ($row = mysqli_fetch_assoc($sql)){
$username=$row['username'];
$password=$row['password'];
$email=$row['email'];
$name=$row['name'];
$lastname=$row['lastname'];
$type=$row['type'];
$status=$row['status'];
$status2="";
if ($status==1) {
	$status2="فعال";
}
else
	if ($status==0) {
		$status2="غیر فعال";
	}
	else
	{
		$status2="مسدود شده";
	}
$data = array($username,$password,$email,$name,$lastname,$type,$status2);
fputcsv($output, $data);

}




}

function Zip_download_file($fn,$fid){
$zip = new ZipArchive();
$filename = "../course_file/zip_file/$fid.zip";
$zip->open($filename, ZipArchive::CREATE);
$zip->addFile( "../course_file/$fn");
$this->downlaod_zip_file($filename);


}

function downlaod_zip_file($filename){
header("location:$filename");
}


function show_user_precentage(){
$query="select * from users where type='مدیر'";
$sql=mysqli_query($this->connection,$query);
$admin=mysqli_num_rows($sql);

$query="select * from users where type='استاد'";
$sql=mysqli_query($this->connection,$query);
$teacher=mysqli_num_rows($sql);

$query="select * from users where type='شاگرد'";
$sql=mysqli_query($this->connection,$query);
$student=mysqli_num_rows($sql);

$total=$admin+$teacher+$student;
$admin2=$admin/$total*100;
$teacher2=$teacher/$total*100;
$student2=$student/$total*100;

$data = array($admin2,$teacher2,$student2,$total);
return $data;

}

function list_my_cours($userid){
$query="select * from course where userid=$userid";
$sql=mysqli_query($this->connection,$query);

while ($post = mysqli_fetch_assoc($sql)) {
			$data[]=$post;
		}
		return $data;



}

function check_password_edite($newpass,$mainpass,$mainusername){
$query="select count(id) as count from users where username='$mainusername' and password='$newpass'";
$sql=mysqli_query($this->connection,$query);
if (!empty($sql)) {
$count=mysqli_fetch_assoc($sql);
$rek=$count['count'];
if (!empty($rek)) {
	echo 1;
}
else{
	echo 0;
}

}
else
{
	echo 0;
}	}


function delete_post($postid,$filename,$userid){
$query="delete from course where id=$postid";
$sql=mysqli_query($this->connection,$query);
if ($sql) {
	unlink("../course_file/$filename");
	header("location:../admin.php?id=$userid");
}


}

function users_json_file(){
$query="select * from users where status=1";
$res=mysqli_query($this->connection,$query);
while ($value=mysqli_fetch_assoc($res)) {
	$data[]=$value;
}
$json=json_encode($data);
$file=fopen("json/users.json", "w");
fwrite($file,$json);
fclose($file);

}

function show_user_count_from_jsonFile(){
$file=fopen("json/users.json","r");
$read2=fread($file,20024);
$decode_file=json_decode($read2,true);
return count($decode_file);
}


}
//$ob=new curd();
//$ob->create_user();
?>