<?php
if(isset($_POST['tenHoa'])) {
	$tenHoa = $_POST['tenHoa'];
	include("database.php");
	$db = new database();
	$sql = "SELECT * FROM hoa WHERE TenHoa LIKE '%$tenHoa%'";
	$kq = $db->loadAllRows($sql);
}
?>
<?php
if(!$kq){
	echo "Không tìm thấy";
}else{
	foreach($kq as $hoa){
		echo"
		<div class='ketQuaHoa'>
			<span><a href='chi_tiet_hoa.php?id=".$hoa['MaHoa']."'>".$hoa['TenHoa']."</a></span>
		</div>";
	}
}
?>