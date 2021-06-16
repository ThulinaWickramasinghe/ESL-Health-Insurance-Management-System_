<!DOCTYPE html>
<?php include './backend/db_connection.php';?>

<html>
    <head>
        <title>Admin Panel</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="header">
            <center>ESL Health Management System Admin Panel
            </center>	

        </div>
        <div style="">
                        <?php include 'sidebar.php';?>
            <div>

                <div class="container">
                    <div style="display:100%">
                        <div style="padding:20px">

                            <div class="title" style="border: 1px solid;padding: 30px;">
                                Update Doctor Details
                            </div>
                        </div>
                        <div style="padding:20px">
                            <?php
                            //test data
                            //$id=1;
                            
                            //Get the value of the id send through the link
                            $id=$_GET['id'];
                           
                            $sql = "SELECT * FROM doctor Where DID='$id'";
                            
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="title" style="border: 1px solid;padding: 30px;">
                                        <form style="text-align: center" method="POST" action="./backend/update-doctor.php">
                                            <div style="padding: 20px">
                                                <span>Doctor Name</span>
                                                <input type="text" name="dname" value="<?php echo $row["Dname"] ?>">
                                            </div>

                                            <div style="padding: 20px">
                                                <span>Doctor Specialization </span>
                                                <input type="text" name="dspecialization" value="<?php echo $row["Dspecialization"] ?>">
                                            </div>

                                            <div style="padding: 20px">
                                                <span>Doctor Payment</span>
                                                <input type="text" name="dpayment" value="<?php echo $row["Dpayment"] ?>">
                                            </div>

                                            <div style="padding: 20px">
                                                <span>Doctor Hospital</span>
                                                <input type="text" name="dhospital" value="<?php echo $row["Dhospital"] ?>">
                                            </div>
                                            <input type="hidden" name="id" value="<?php echo $id?>">
                                            
                                            <div><button class="btn">Update</button><div>

                                                    </form>
                                                </div>
                                            </div>



                                    </div>
                                    <?php
                                }
                            } else {
                                echo "No results";
                            }
                            $conn->close();
                            ?>


                        </div>
                    </div>
                </div>
                </body>
                </html>