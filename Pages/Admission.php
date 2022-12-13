<?php
    include_once('../Components/Header.php');
?>

    <section class="Admission">
    
    <a href="../index.php" class="navigate"> <- Home</a>

    <img src="../img/admission.jpg" alt="registerationPageBackgroundImage">

    <h2>Registration Form</h2>


    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

        <input type="text" placeholder="Full Name" name="fullName" required>

        <input type="text" placeholder="Father's Name" name="fatherName" required>

        <input type="text" placeholder="Mother's Name" name="motherName" required>

        <input type="text" placeholder="Address" name="address" required>
        
        <input type="text" minlength="10" placeholder="Phone Number" name="phone" required>

        <input type="email" placeholder="Email" name="email" required>

        <select id="" required name="course">
        <option selected disabled>Select Course</option>
        <option value="BCA">BCA</option>
        <option value="MCA">MCA</option>
        <option value="BTECH">BTECH</option>
        <option value="POLYTECHNIC">POLYTECHNIC</option>
        <option value="BFA">BFA</option>
        </select>

        <fieldset>
            <p> &nbsp; Upload passport size photo</p>
            <input type="file" required name="photo">
        </fieldset>
 
        <button type="submit">Register</button>

    </form>
</section>


<?php


    if(isset($_FILES['photo']))
    {
        $fullname=$_POST['fullName'];
        $fathername=$_POST['fatherName'];
        $mothername=$_POST['motherName'];
        $address=$_POST['address'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $course=$_POST['course'];
        $filename=$_FILES['photo']['name'];
        $tmpname=$_FILES['photo']['tmp_name'];

        include_once('../Database/connectivity.php');

        $query = "Insert into admission(fullname,fathername,mothername,address,phone,email,course,photo) values('$fullname','$fathername','$mothername','$address','$phone','$email','$course','$filename')";

        mysqli_query($conn,$query);

        session_start();
        $_SESSION['fullname'] = $fullname;

        move_uploaded_file($tmpname, "../upload/" . $filename);
        
        header("Location: http://localhost/university/pages/pdf/pdf.php");
    }



?>

<?php
    include_once('../Components/Footer.php');
?>