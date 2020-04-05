<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <?php 
    include "config.php";
    $sql= "SELECT * FROM student JOIN studentclass WHERE student.sclass=studentclass.cid ORDER BY sid" ;
    $result= mysqli_query($conn,$sql) or die("invalid Query");
    if(mysqli_num_rows($result)>0){
    ?>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php
            while($row = mysqli_fetch_assoc($result)){
                ?>
            <tr>
                <td><?php echo $row['sid']?></td>
                <td><?php echo $row['sname']?></td>
                <td><?php echo $row['cname']?></td>
                <td><?php echo $row['sphone']?></td>
                <td><?php echo $row['saddress']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['sid'];?>">Edit</a>
                    <a href="delete-inline.php?id=<?php echo $row['sid'];?>">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
    <?php } ?>
</div>
</div>
</body>
</html>
