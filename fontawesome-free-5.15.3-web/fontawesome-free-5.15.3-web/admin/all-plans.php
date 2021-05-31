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
            <?php include 'sidebar.php';?>
            <div>

                <div class="container">
                    <div style="display:100%">
                        <div style="padding:20px">

                            <div class="titlse" style="border: 1px solid;padding: 30px;">
                                All Plans
                            </div>
                            <div style="display: flex;flex-wrap: wrap;width: 100%">
                                <?php
                      
                                $sql = "SELECT * FROM healthplans";
                                $result = $conn->query($sql);

                                if ($result->num_rows > 0) {
                                    // output data of each row
                                    while ($row = $result->fetch_assoc()) {
                                        ?>
                                        <div style="width: 33.4%">
                                            <a href="edit-health-plan.php?id?"<button style="width: 100%;color: black">Event Name</button>>
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
                </div>
                </body>
                </html>