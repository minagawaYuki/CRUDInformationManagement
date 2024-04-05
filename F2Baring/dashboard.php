<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboardstyle.css">
    <title>Document</title>
</head>
<body>
    <div class="landing-page">
        <div class="navbar">
            <h1>Logo</h1>
            <nav>
                <div class="user-profile">
                    <p>User1</p>
                </div>
            </nav>
        </div>
    </div>
    <div class="content">
        <h1>This is the landing page.</h1>
        <p>Spotify is a digital music, podcast, and video service that gives you
        access to millions of songs and other content from creators all over the world.
        Basic functions such as playing music are totally free, but you can also choose to upgrade to Spotify Premium.
        </p>
    </div>

    <div class="user-playlist">
        <div><h1>User Playlists</h1></div>
        <table id="tblStudentRecords" class="table" cellspacing="0" width="100%">
            
        </table>
    </div>
    
    <div class="registered-users-table">
        <div class="registered-users"><h1>List of Users Registered</h1></div>
        <?php
            $mysqli = new mysqli('localhost', 'root', '', 'dbbaringf2') or die (mysqli_error($mysqli));
            $resultset = $mysqli->query("SELECT * from tbluserprofile1") or die ($mysqli->error);   
        ?>
        <table id="tblStudentRecords" class="table" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>Seq Number</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody><?php
                        while($row = $resultset->fetch_assoc()):
                    ?>
                    <tr>
                        <td><?php echo $row['userid'] ?></td>
                        <td><?php echo $row['firstname'] ?></td>
                        <td><?php echo $row['lastname'] ?></td>
                        <td><?php echo $row['gender'] ?></td>
                        <td>
                            <a href="">VIEW</a>
                            <a href="">DELETE</a>
                        </td>
                    </tr>
                    <?php endwhile;?>
                </tbody>
        </table>
    </div>
    
</body>
</html>