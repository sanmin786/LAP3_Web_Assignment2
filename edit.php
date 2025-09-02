<?php
include 'connection.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM students WHERE id=$id");
$row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h2>Edit Student</h2>
    <form action="update.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>"><br><br>
        Mobile: <input type="text" name="mobile" value="<?php echo $row['mobile']; ?>"><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>"><br><br>
        Gender: 
        <input type="radio" name="gender" value="Male" <?php if($row['gender']=="Male") echo "checked"; ?>> Male
        <input type="radio" name="gender" value="Female" <?php if($row['gender']=="Female") echo "checked"; ?>> Female <br><br>
        Department:
        <?php $deptArr = explode(",", $row['department']); ?>
        <input type="checkbox" name="dept[]" value="English" <?php if(in_array("English", $deptArr)) echo "checked"; ?>> English
        <input type="checkbox" name="dept[]" value="Computer" <?php if(in_array("Computer", $deptArr)) echo "checked"; ?>> Computer
        <input type="checkbox" name="dept[]" value="Business" <?php if(in_array("Business", $deptArr)) echo "checked"; ?>> Business <br><br>
        Address:<br>
        <textarea name="address"><?php echo $row['address']; ?></textarea><br><br>
        <input type="submit" value="Update">
    </form>
</body>
</html>
