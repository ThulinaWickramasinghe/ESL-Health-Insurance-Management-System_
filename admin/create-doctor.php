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

                            <div class="title-main" >
                                <label>Add new doctor</label>
                            </div>
                            
   
                        </div>
                        <div style="padding:20px">

                            <div class="title" style="border: 1px solid;padding: 30px;">
                                <form style="text-align: center" method="POST" action="./backend/insert_doctor.php">
                                    <div style="padding: 20px">
                                        <span>Doctor Name</span>
                                        <input type="text" name="dname" required="">
                                    </div>

                                    <div style="padding: 20px">
                                        <span>Doctor Specialization </span>
                                        <input type="text" name="dspecialization"  required="">
                                    </div>

                                    <div style="padding: 20px">
                                        <span>Doctor Payment</span>
                                        <input type="text" name="Dpayment" required="">
                                    </div>

                                    <div style="padding: 20px">
                                        <span>Doctor Hospital </span>
                                        <input type="text" name="dhospital"  required="">
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