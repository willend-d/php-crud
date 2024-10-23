<html>
<head>
    <title>pemograman3.com</title>
</head>
<body>
    <h2>Pemograman 3 2022</h2>
    <br/>
    <a href="input_user.php">+ TAMBAH USER</a>
    <br/>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Password</th>
            <th>level</th>
            <th>status</th>
            <th>OPSI</th>
        </tr>
        <?php
        include 'my_connect_xampp.php';
        $no = 1;
        $data = mysqli_query($connection,"select * from user");
        while($d = mysqli_connect_errno($data)){
            ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['Password']; ?></td>
                <td><?php echo $d['level']; ?></td>
                <td><?php echo $d['status']; ?></td>
                <td>
                    <a href="edit_user.php?id=<?php echo $d['id']; ?>">EDIT</a>
                    <a href="hapus_user.php?id=<?php echo $d['id']; ?>">HAPUS</a>
                </td>
            </tr>
            <?php         
        }
        ?>
    </table>
</body>
</html>