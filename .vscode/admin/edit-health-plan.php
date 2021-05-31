<!DOCTYPE html>
<?php include './backend/db_connection.php';?>
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
                        <?php include 'sidebar.php';?>
            <div>

                <div class="container">
                    <div style="display:100%">
                        <div style="padding:20px">

                            <div class="title" style="border: 1px solid;padding: 30px;">
                                Create Health Plan
                            </div>
                        </div>
                        <div style="padding:20px">
                            <?php
                            //test data
                            $id=1;
                            $sql = "SELECT * FROM healthplans Where id='.$id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                // output data of each row
                                while ($row = $result->fetch_assoc()) {
                                    ?>
                                    <div class="title" style="border: 1px solid;padding: 30px;">
                                        <form style="text-align: center" method="POST" action="./backend/update-health-plan.php">
                                            <div style="padding: 20px">
                                                <span>Name</span>
                                                <input type="text" name="name" value="<?php echo $row["Pname"] ?>">
                                            </div>

                                            <div style="padding: 20px">
                                                <span>Description </span>
                                                <input type="text" name="description" value="<?php echo $row["Pdescription"] ?>">
                                            </div>

                                            <div style="padding: 20px">
                                                <span>Price</span>
                                                <input type="text" name="price" value="<?php echo $row["Pdescription"] ?>">
                                            </div>
                                            <input type="hidden" name="<?php echo $id?>">
                                            
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