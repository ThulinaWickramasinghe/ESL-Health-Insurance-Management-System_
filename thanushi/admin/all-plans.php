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
            <center>ESM Heath Management System Admin Panel
            </center>	

        </div>
        <div style="">
            <?php include 'sidebar.php'; ?>
            <div>

                <div class="container">
                    <div style="display:100%">


                        <div style="padding:20px">

                    
                            <div class="title-light" >
                                <label>Want to add a New Helth Plan?</label>
                                <div style="margin-left: auto">
                                    <button class="btn-main">Create</button>
                                </div>
                            </div>
                                    <div class="title-main" >
                                <label >All Plans</label>
                            </div>
                            <div style="margin-top: 30px">
                                <table style="width: 100%" border="1" >
                                    <thead>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Description</th>
                                    <th>Options</th>


                                    </thead>

                                    <tbody>
                                        <?php
                                        $sql = "SELECT * FROM healthplans";
                                        $result = $conn->query($sql);

                                        if ($result->num_rows > 0) {
                                            // output data of each row
                                            while ($row = $result->fetch_assoc()) {
                                                ?>
                                                <tr>
                                                    <td><?php echo $row['Pname']; ?></td>
                                                    <td><?php echo $row['Pprice']; ?></td>
                                                    <td><?php echo $row['Pdescription']; ?></td>
                                                    <td>
                                                        <a href="edit-health-plan.php?id=<?php echo $row['PID']; ?>"><button style="color: black">Edit</button></a>
                                                        |         
                                                        <a href="backend/delete-healthplan.php?id=<?php echo $row['PID']; ?>"><button style="color: black">Delete</button></a>

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

