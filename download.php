<?php
include 'connection.php';
$output = '';
if(isset($_POST['download'])){
    $sql = "SELECT * FROM employee";
    $result = $con->query($sql);
   
    if(mysqli_num_rows($result) > 0){
        $output .='<table class="table" border="1">
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Password</th>
                    </tr>';

        while($row = mysqli_fetch_assoc($result)){
           $output.= '<tr>
                        <td>'.$row['username'].'</td>
                        <td>'.$row['email'].'</td>
                        <td>'.$row['phoneNumber'].'</td>
                        <td>'.$row['gender'].'</td>
                        <td>'.$row['password'].'</td>
                 </tr>';
        }
        echo '</table>';
        if(true){
            header('Content-type: application/xls');
            header('Content-Disposition: attachment; filename=reports.xls');
        }else{
            header('Content-type: application/doc');
            header('Content-Disposition: attachment; filename=reports.doc');
        }
        echo $output;
    } else {
        echo 'No data was found';
    }  
}
?>