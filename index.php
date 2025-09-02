<?php include 'connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>

</head>
<bod>
    <h2>Student Registration Form</h2>
        <form action="insert.php" method="POST">
            Student Name:
           <input type="text" name="name" required><br><br>
            Mobile no: +95 <input type="text" name="mobile" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            Gender: 
            <input type="radio" name="gender" value="Male"   required> Male
            <input type="radio" name="gender" value="Female"  required> Female <br><br>
            Department:
            <input type="checkbox" name="dept[]" value="English"  > English
            <input type="checkbox" name="dept[]" value="Computer" > Computer
            <input type="checkbox" name="dept[]" value="Business" > Business <br><br>
            Address: <br>
            <textarea name="address"></textarea><br><br>
            <input type="submit" value="Register"><br>
            <button><a class="view" href="./view.php">View Registered Students</a></button>
        </form>

   
</body>
</html>
