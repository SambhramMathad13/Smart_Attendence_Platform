<?php 
include 'connect.php';

$datee = $_POST['datee'];
$class= $_POST['class_name'];
$p="P";
$a="A";
$sql = "SELECT roll FROM attendencee WHERE datee='$datee' AND class_name='$class' AND `status`='$p'";
$res = mysqli_query($conn, $sql);
$num_p=mysqli_num_rows($res);

$sqll = "SELECT roll FROM attendencee WHERE datee='$datee' AND class_name='$class' AND `status`='$a'";
$ress = mysqli_query($conn, $sqll);
$num_a=mysqli_num_rows($ress);
$res="";
$slno=1;
if (mysqli_num_rows($ress) > 0) {
    while ($row = mysqli_fetch_assoc($ress)) {

        $res = $res ."<tr class='h5'>
        <th scope='row' class='col-1'>".$slno."</th>
        <td class='col-5'>".$row['roll']."</td>
    </tr>";
    $slno++;
    }
}
echo $num_p."___";
echo $num_a."___";
echo $res

?> 