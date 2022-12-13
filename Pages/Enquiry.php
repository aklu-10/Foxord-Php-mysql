<?php
    include_once('../Components/Header.php');
    include_once('../Components/Navbar.php');
?>

<section class="enquiry">

    <?php 

        if(isset($_POST['submit']))
        {
            echo "<h1 style='background-color:orangered; color:white; padding:10px;'>FORM SUBMITTED</h1>";
            echo "<p>We will solve your query in few minutes</p>";

            $conn=mysqli_connect("localhost", "root", "", "foxord");
            
            $query = "insert into enquiry(email,phonenumber) values('{$_POST['email']}','{$_POST['phone']}')";

            $res=mysqli_query($conn,$query);
            
            mysqli_close($conn);

        }else
        {
            echo "
            
            <h2>ENQUIRY FORM</h2>
            <form action='{$_SERVER['PHP_SELF']}' method='POST'>

                <input type='text' placeholder='Email' name='email'>
                <input type='text' placeholder='Phone number' name='phone'>
                <button type='submit' name='submit'>Send</button>

            </form>
        ";
        }

    ?>

</section>

<?php
    include_once('../Components/Footer.php');
?>