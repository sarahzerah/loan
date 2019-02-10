    <?php
    include 'connect.php';
    include 'session.php';

    if (isset($_POST['submit'])) {

        
        // $Membershipno = mysqli_real_escape_string($con,ucfirst($_POST['Membershipno']));
        $Firstname=mysqli_real_escape_string($con, $_POST['Firstname']);
        $Lastname=mysqli_real_escape_string($con, $_POST['Lastname']); 
        $IdPassport=mysqli_real_escape_string($con, $_POST['IdPassport']); 
        $DOB= $_POST['DOB'];
        $Homeaddress= mysqli_real_escape_string($con,$_POST['Homeaddress']);
        $OfficeTell= mysqli_real_escape_string($con,$_POST['OfficeTell']);
        $Mobileno= mysqli_real_escape_string($con,$_POST['Mobileno']);
        $Pinno=mysqli_real_escape_string($con, $_POST['Pinno']); 
        $Email = mysqli_real_escape_string($con,$_POST['Email']);
        $Town= mysqli_real_escape_string($con,$_POST['Town']);
        $Estatehouse= mysqli_real_escape_string($con,$_POST['Estatehouse']);
        $Lived= mysqli_real_escape_string($con,$_POST['Lived']);
       


        // $dateCreated=date("Y-m-d");
        //username and password is auto generated when adding new member. 
        // $username = $firstName[0].$middleName[0].$lastName;
        // $password = md5($birthDate);
        

        $sql = "INSERT INTO members (Firstname, Lastname, IdPassport, DOB, Homeaddress, OfficeTell, Mobileno, Pinno,
                                    Email, Town, Estatehouse, Lived, Status)

                 VALUES ('$Firstname', '$Lastname', '$IdPassport', '$DOB', '$Homeaddress', '$OfficeTell', '$Mobileno', 
                 '$Pinno', '$Email', '$Town', '$Estatehouse', '$Lived', 'Active')";

          $run= mysqli_query($con,$sql);

        if ($run) {
           
            header("Location:members-table.php?success=User successfully added");
        } 
        else {
            header("Location:membership-form.php?error=Sorry, could not add new user, Try again");
        }
    }
        
?>