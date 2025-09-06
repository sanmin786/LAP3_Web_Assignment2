<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        button{
            margin-top:20px;
        }
        .view{
        
            text-decoration: none;
        }
    </style>
</head>
<body>

    <h2>Registered Students</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Name</th><th>Mobile</th><th>Email</th><th>Gender</th><th>Department</th><th>Address</th><th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM students");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>".$row['name']."</td>
                <td>".$row['mobile']."</td>
                <td>".$row['email']."</td>
                <td>".$row['gender']."</td>
                <td>".$row['department']."</td>
                <td>".$row['address']."</td>
                <td>
                    <a href='edit.php?id=".$row['id']."'>Edit</a> | 
                    <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Delete?\")'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    <button><a class="view" href="./index.php">Go to register</a></button>
</body>
</html>
