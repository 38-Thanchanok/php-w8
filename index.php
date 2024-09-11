<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $db = "students-list";

    $conn = mysqli_connect($server, $user, $password, $db);
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);}
    $sql = "SELECT * FROM students ORDER BY class ASC";
    $data = $conn -> query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://bootswatch.com/5/minty/bootstrap.min.css" rel="stylesheet">
    <title>38-Thanchanok</title>
</head>
<body>
    <div class="container pb-4 px-2">
        <h3 class="card bg-secondary display-5 p-3 text-center">รายชื่อทั้งหมด</h3>
        <table class="table text-center">
            <thead>
                <tr>
                    <th>เลขประจำตัว</th>
                    <th>ชื่อ - นามสกุล</th>
                    <th>ระดับชั้น</th>
                    <th>Email</th>
                    <th>Username</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($list = mysqli_fetch_assoc($data)) {?>
                    <tr>
                        <td><?php echo $list["s_id"]?></td>
                        <td><?php echo $list["fname"]." ".$list["lname"]?></td>
                        <td><?php echo $list["class"]?></td>
                        <td><?php echo $list["email"]?></td>
                        <td><?php echo $list["username"]?></td>
                    </tr>
                <?php }?>
            </tbody>
        </table>
    </div>
</body>
</html>
