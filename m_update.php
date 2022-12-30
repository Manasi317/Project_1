<?php
session_start();
if ($_SESSION['u_type'] == "A")
{
?>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Panel</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style5.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>

<body>

    <div class="wrapper">
        <!-- Sidebar Holder -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3>Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                <h4>Menu</h4>
                <li >
                   <a href="index5.php" >Dashboard</a>
                </li>

                  <li>
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Admin</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li class="active">
                            <a href="m_insert.php">Insert Admin</a>
                        </li>
                        <li>
                            <a href="m_delete.php">Delete Admin</a>
                        </li>
                        <li>
                            <a href="m_update.php">Update Admin</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#UserSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">User</a>
                    <ul class="collapse list-unstyled" id="UserSubmenu">
                        <li>
                            <a href="u_insert.php">Insert User</a>
                        </li>
                        <li>
                            <a href="u_delete.php">Delete User</a>
                        </li>
                        <li>
                            <a href="u_update.php">Update User</a>
                        </li>

                    </ul>
                </li>
                <li>

                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Quiz</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="insert_quiz.php">Insert Quiz</a>
                        </li>
                        <li>
                            <a href="edit_quiz.php">Update Quiz</a>
                        </li>

                    </ul>
                </li>

                <li>

                    <a href="#SurveySubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Survey</a>
                    <ul class="collapse list-unstyled" id="SurveySubmenu">
                        <li>
                            <a href="setQuestion.php">Insert Entries</a>
                        </li>
                        <li>
                            <a href="editSur.php">Delete Entries</a>
                        </li>

                    </ul>
                </li>
                <li>
                                <a href="chatbox.php">ChatBox</a>
                                
                </li>



        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="navbar-btn">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="login.php">Log Out</a>
                            </li>

                        </ul>
                    </div>
                </div>
            </nav>
            <div style="margin:top:5px;">
              <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Type</th>
        <th scope="col">Delete</th>

      </tr>
    </thead>
    <tbody>
            <?php
                $servername = "localhost";
            	$username = "root";
            	$password = "";
            	$dbname="hackathon";
            	// Create connection
            	$conn = mysqli_connect($servername, $username, $password,$dbname);
                if(!$conn)
                {
                    echo "cant connect to database";
                }
                $sql='Select * from user where u_type="A"';
                $records = mysqli_query($conn, $sql);
            ?>
            <br><br>

            <?php
                while($row=mysqli_fetch_array($records))
                {
                    echo "<tr><form action=update.php method=post>";
                    echo "<td><input type=text name=u_name value='".$row['u_name']."'></td>";
                    echo "<td><input type=text name=u_type value='".$row['u_type']."'></td>";
                    echo "<input type=hidden name=id value='".$row['id']."'></td>";
                    echo "<td><input type=submit>";
                    echo "</form></tr>";
               }
            ?>
          </tbody>
        </table>
          </div>
  </div>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
                $(this).toggleClass('active');
            });
        });
    </script>
</body>

</html>
<?php
}
else{
   
    header("location:login.php"); // redirect to login page!
}
?>
