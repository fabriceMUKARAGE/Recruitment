<?php
// session_start();
// $Email = $_SESSION['email'];
// echo "Welcome " . $Email;
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../style.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.css" />
    <!-- Boxicons CDN Link -->
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="sidebar">
      <ul class="nav-links">
        <li>
          <a href="#" class="active">
            <i class='fas fa-user' ></i>
            <span class="links_name">Students in the system</span>
          </a>
        </li>

        <li>
          <a href="#" class="active">
            <i class='fas' ></i>
            <span class="links_name">My account</span>
          </a>
        </li>

        <li class="log_out">
          <a href="../../login.php">
            <i class='bx bx-log-out'></i>
            <span class="links_logout" style="font-size: 20px;">Sign out</span>
          </a>
        </li>
      </ul>
  </div>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard" style="color: black; font-size: 40px;">Hire Students/Graduates</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="display">
        <div class="info">
          <h4 style="color:#2B5105">Check them by their:</h4>
          <div class="dropdown-container">
          <button class="dropdown-button">Major of Study ▼</button>
          <div class="dropdown-items">
            <a href="./cs.php">Computer Science</a>
            <a href="#">Computer Engineering</a>
            <a href="#">Business Administration</a>
            <a href="#">Mechanical Engineering</a>
            <a href="#">Electrical and Electronics Engineering</a>
            <a href="#">Management Information System</a>
          </div>
          </div>
          <style>
          /* Style the dropdown container */
          .dropdown-container {
          position: relative;
          display: inline-block;
          }

          /* Style the dropdown button */
          .dropdown-button {
          background-color: #4CAF50;
          color: white;
          padding: 12px;
          font-size: 16px;
          border: none;
          cursor: pointer;
          }

          /* Style the dropdown items (hidden by default) */
          .dropdown-items {
          display: none;
          position: absolute;
          z-index: 1;
          }

          /* Style the links in the dropdown */
          .dropdown-items a {
          color: black;
          padding: 12px 16px;
          text-decoration: none;
          display: block;
          }

          /* Style the links on hover */
          .dropdown-items a:hover {
          background-color: #4CAF50;
          }

          /* Show the dropdown items when the button is clicked */
          .dropdown-container .dropdown-button:focus + .dropdown-items {
          display: block;
          }

          .dropdown-items a {
            background-color: #F2F2F2; /* Set the background color of the dropdown container */
            border: none; /* Remove the border of the dropdown container */
            padding: 8px 16px; /* Add padding to the dropdown container */
            font-size: 16px; /* Set the font size of the dropdown container */
            color: #333; /* Set the font color of the dropdown container */
          }
          /* Style the hover state of the options */
      
          </style>

          <script>
            // Toggle the dropdown items when the button is clicked
          var dropdownButton = document.querySelector(".dropdown-button");
          dropdownButton.addEventListener("click", function() {
          this.focus();
          });

          </script>
          <a href="./page3.php"><button style="background-color: #4CAF50; color: white; padding: 12px; font-size: 16px; border: none; cursor: pointer;" type="submit" id='connect'>Resumes</button></a>
          <a href="./page2.php"><button style="background-color: #4CAF50; color: white; padding: 12px; font-size: 16px; border: none; cursor: pointer;" type="submit" id='connect'>Skills</button></a>
    
    
        </div>
      </div>
       <div class="ml-5 mr-5">
      <hr class="my-1">
    <div class="table-responsive" id="showUser">

    </div>
  </div>
  </div>
  </section>

  <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.21/datatables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="script.js"></script>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if(sidebar.classList.contains("active")){
      sidebarBtn.classList.replace("bx-menu" ,"bx-menu-alt-right");
    }else
      sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
</script>
 
<script type="text/javascript">
$(document).ready(function() {

    ShowAllUsers();

    function ShowAllUsers() {
          $.ajax({
              url: ["../controller/cs.php"],
              type: "POST",
              data: {
                  action: "view"
              },
              success:function(response) {
                  // console.log(response);
                  $("#showUser").html(response);
                  $("table").DataTable();
              }
          });
      }



    })
</script> 

</body>
</html>
