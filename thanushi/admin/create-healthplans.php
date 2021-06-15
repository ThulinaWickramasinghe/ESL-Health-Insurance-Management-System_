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

                            <div class="title-main" >
                                <label>Create Health Plan</label>
                            </div>
                            
   
                        </div>
                        <div style="padding:20px">

                            <div class="title" style="border: 1px solid;padding: 30px;">
                                <form style="text-align: center" method="POST" action="./backend/insert_healthplan.php">
                                    <div style="padding: 20px">
                                        <span>Name</span>
                                        <input type="text" name="name" required="">
                                    </div>

                                    <div style="padding: 20px">
                                        <span>Description </span>
                                        <input type="text" name="description"  required="">
                                    </div>

                                    <div style="padding: 20px">
                                        <span>Price</span>
                                        <input type="text" name="price" required="">
                                    </div>
                                    <div><button class="btn">Insert</button><div>

                                            </form>
                                        </div>
                                    </div>



                            </div>
                        </div>
                    </div>
                </div>
                </body>
                </html>