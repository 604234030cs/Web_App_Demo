<?php 
$host = "localhost";
$user = "root";
$passwd = "";
$dbname = "practice";
$conn = mysqli_connect($host, $user, $passwd, $dbname);
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}
/* echo "Connected successfully"; */
?>

<!DOCTYPE HTML>
<html>
    <head>
    <meta charset="utf8">
    <title>Web App Demo</title>
    </head>
    <body>
        <h1>ตารางพนักงาน</h1>
        <table border="1">
            <tr>
                <th>รหัสพนักงาน</th>
                <th>ชื่อ</th>
                <th>ตำแหน่ง</th>
                <th>รหัสหัวหน้า</th>
                <th>วันที่เริ่มว่าจ้าง</th>
                <th>เงินเดือน</th>
                <th>คอมมิชชั่น</th>
                <th>แผนก</th>
            </tr>
            <?php 
            $sql = "select EMPNO, ENAME, JOB, MGR, HIREDATE, SAL, COMM, DEPTNO from emp";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result)>0){
           
            while($row = mysqli_fetch_assoc($result)){ ?>
            <tr>
                <td><?php echo $row["EMPNO"] ?></td>
                <td><?php echo $row["ENAME"] ?></td>
                <td><?php echo $row["JOB"] ?></td>
                <td><?php echo $row["MGR"] ?></td>
                <td><?php echo $row["HIREDATE"] ?></td>
                <td><?php echo $row["SAL"] ?></td>
                <td><?php echo $row["COMM"] ?></td>
                <td><?php echo $row["DEPTNO"] ?></td>
            </tr>
            <?php } //end while
        } //end if  ?>
        </table>
    </body>


</html>