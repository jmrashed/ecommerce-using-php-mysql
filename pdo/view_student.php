<?php
    require './student.php';
    $ob_student=new Student();
    $pages=0;
    if(isset($_GET['page'])) {
        if($_GET['page'] == 1) {
            $pages=0;
        } else {
            $pages=$_GET['page']*5-5;
        }
    }
    $student_info=$ob_student->select_all_student_info_for_pagination($pages);

   
//    while ($row=$student_info->fetch(PDO::FETCH_ASSOC) ) {
//        echo '<pre>';
//        print_r($row);
//    }
?>
<hr/>
<a href="add_student.php">Add Student</a> ||
<a href="view_student.php">View Student</a>
<hr/>

<form action="" method="post">
    <fieldset>
        <legend align="center">All Student Information Goes Here</legend>
        <hr/>
        <h2 style="text-align: center; color: #6600ff; "><?php if(isset($message)) { echo $message; unset($message); } ?></h2>
        <table border="1" width="800" align="center">
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Phone Number</td>
                <td>Email Address</td>
                <td>Action</td>
            </tr>
            <?php while ($row=$student_info->fetch(PDO::FETCH_ASSOC) ) { ?>
            <tr>
                <td><?php echo $row['student_id']; ?></td>
                <td><?php echo $row['student_name']; ?></td>
                <td><?php echo $row['phone_number']; ?></td>
                <td><?php echo $row['email_address']; ?></td>
                <td>
                    <a href="">Edit</a> ||
                    <a href="">Delete</a>
                </td>
            </tr>
            <?php } ?>
        </table>
        <?php 
            $student_info=$ob_student->select_all_student_info();
            $total_row=$student_info->rowCount($student_info);
            $total_page=  ceil($total_row/5);
            //echo $total_page;
            for($i=1; $i<=$total_page; $i++){
                ?><a href="?page=<?php echo $i; ?>" style="text-decoration: none; "><?php echo $i.' '; ?></a><?php
            }
        ?>
    </fieldset>
</form>