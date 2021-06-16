<?php
include './backend/db_connection.php';
?>
<!DOCTYPE html>
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
            <?php include 'sidebar.php'; ?>
            <div>

                <div class="container">
                    <div style="display:100%">


                        <div style="padding:20px">

                    
                            <div class="title-light" >
                                <label>Want to add a New Doctor?</label>
                                <div style="margin-left: auto">
                                <a href="./create-doctor.php"><button class="btn-main">Create</button></a>
                                                                    </div>
                            </div>
                                    <div class="title-main" >
                                <label >Doctor Details</label>
                            </div>
                            <div style="margin-top: 30px">
                                <table style="width: 100%" border="1" >
                                    <thead>
                                    <th>Doctor Name</th>
                                    <th>Doctor Specialization</th>
                                    <th>Doctor Payment</th>
                                    <th>Doctor Hospital</th>


                                    </thead>

                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM doctor";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['Dname']; ?></td>
                                                    <td><?php echo $row['Dspecialization']; ?></td>
                                                    <td><?php echo $row['Dpayment']; ?></td>
                                                    <td><?php echo $row['Dhospital']; ?></td>
                                                    <td>
                                                        <a href="edit-doctor.php?id=<?php echo $row['DID']; ?>"><button style="color: black">Edit</button></a>
                                                        |         
                                                        <a href="backend/delete-doctor.php?id=<?php echo $row['DID']; ?>"><button style="color: black">Delete</button></a>

                                                    </td>
                                                </tr>

                                                </div>
                                                <?php
                                            }
                                        } else {
                                            echo "No results";
                                        }
                                        $conn->close();
                                        ?>
                                    </tbody>

                                </table>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
    </body>
</html>

