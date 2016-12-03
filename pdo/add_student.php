<?php
    if(isset($_POST['btn'])) {
        require './student.php';
        $obj_student=new Student();
        $message=$obj_student->save_student_info($_POST);
    }
?>

<hr/>
<a href="add_student.php">Add Student</a> ||
<a href="view_student.php">View Student</a>
<hr/>

<form action="" method="post">
    <fieldset>
        <legend align="center">Add Student Form</legend>
        <hr/>
        <h2 style="text-align: center; color: #6600ff; "><?php if(isset($message)) { echo $message; unset($message); } ?></h2>
        <table border="1" width="700" align="center">
            <tr>
                <td>Student Name</td>
                <td><input type="text" name="student_name"></td>
            </tr>
            <tr>
                <td>Student Phone</td>
                <td><input type="number" name="phone_number"></td>
            </tr>
            <tr>
                <td>Email Address</td>
                <td><input type="email" name="email_address"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="btn" value="Save Student"></td>
            </tr>
        </table>
    </fieldset>
</form>