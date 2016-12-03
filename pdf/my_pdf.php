<?php
$con = mysqli_connect('localhost', 'root', '', 'db_seip_ecommerce28');
$sql = "SELECT * FROM tbl_student";
$query_result = mysqli_query($con, $sql);

if (isset($_POST['btn'])) {

    require './dompdf/dompdf_config.inc.php';
    $obj_dom = new DOMPDF();

    $pdf_content = "
            <table border='1' width='800' align='center'>
            <tr>
                <td>Student ID</td>
                <td>Student Name</td>
                <td>Phone Number</td>
                <td>Email Address</td>
            </tr>
                 ";
    while ($row = mysqli_fetch_assoc($query_result)) {
        $pdf_content.=" 
            <tr>
                <td>$row[student_id]</td>
                <td>$row[student_name]</td>
                <td>$row[phone_number]</td>
                <td>$row[email_address]</td>
            </tr>
                ";
    }
    $pdf_content.="
            </table>
                ";
    //$pdf_content=$_POST['pdf_content'];
    //$pdf_content = file_get_contents('test.php');
    $obj_dom->load_html($pdf_content);
    $obj_dom->render();
    $obj_dom->stream('<?php ?>.pdf');
}
?>
<table border="1" width="800" align="center">
    <tr>
        <td>Student ID</td>
        <td>Student Name</td>
        <td>Phone Number</td>
        <td>Email Address</td>
        <td>Action</td>
    </tr>
<?php while ($row = mysqli_fetch_assoc($query_result)) { ?>
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


<form action="" method="post">
    <table>
        <tr>
            <td></td>
            <td>
                <input type="submit" name="btn" value="CLick ME">
            </td>
        </tr>
    </table>
</form>