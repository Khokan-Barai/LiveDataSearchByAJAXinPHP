<?php
include("config.php");

if(isset($_POST['input'])){
    $input = $_POST['input'];

    $query = "SELECT * FROM search WHERE fname LIKE '%{$input}%' OR lname LIKE '%{$input}%' OR email LIKE '%{$input}%' /*LIMIT 3*/ ";

    $result = mysqli_query($db, $query);

    if(mysqli_num_rows($result)>0){?>
        <table class="table table-bordered table-striped mt-4">
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>
            <?
            while($row = mysqli_fetch_assoc($result)){?>
                <tr>
                    <td><? echo $row['id']?></td>
                    <td><? echo $row['fname']?></td>
                    <td><? echo $row['lname']?></td>
                    <td><? echo $row['email']?></td>
                </tr>
            <? } ?>
        </table>
    <?
    }else{
        echo "<h6 class='text-danger text-center mt-3'>No data found</h6>";
    }
}

?>