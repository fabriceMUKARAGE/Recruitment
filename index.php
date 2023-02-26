<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="stylesheet" href="./index.css">
    <title>Recruiters and Students/Graduates</title>
  </head>
  <body>
  <section>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark mt-2">
            <div class="container-fluid">
             <a class="navbar-brand fw-bold" href="#"><img src="ourlogo.png" alt="Logo image" width="150" height="150"></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse">
                <ul class="navbar-nav ">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>
    <div class="displaying">
        <div class="txt">
            <p><span>Connecting Recruiters <br>and Students/Graduates</span></p>
            <a class="bt"  href="./login.php"><button style="background-color: #3c3c3c; color: white; padding: 5px 10px; border-radius: 5px;" type="submit" id='connect'>Login</button></a>
            <a class="bt"><button style="background-color: #3c3c3c; color: white; padding: 5px 10px; border-radius: 5px;" type="submit" onclick="toggleDropdown()">Register As ▼</button></a>

            <ul class="bt" id="dropdown">
              <li><a style="color: white;" href="./student/register/register.php">Student</a></li>
              <li><a style="color: white;" href="./recruiter/register/register.php">Recruiter</a></li>
            </ul>

            <style>
              /* Hide the dropdown list by default */
              #dropdown {
                display: none;
                position: absolute;
                margin-left: 50%;
              }
              /* Show the dropdown list when the button is clicked */
              #dropdown.show {
                display: block;
              }
              ul {
                list-style: none;
              }
            </style>

            <script>
              function toggleDropdown() {
                var dropdown = document.getElementById("dropdown");
                dropdown.classList.toggle("show");
              }
              function goToPage(event) {
                var link = event.target;
                window.location.href = link.href;
              }
              var links = document.querySelectorAll("#dropdown a");
              links.forEach(function(link) {
                link.addEventListener("click", goToPage);
              });
            </script>

        </div>
    </div>
  </section>
  <section></section>
</body>
</html>