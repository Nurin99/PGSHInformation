<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
*{
  box-sizing: border-box;
}
body {
  font-family: "Arial", sans-serif;
  margin: 0;
  background-color: #f0f0f0;
}

.header {
  padding: 10px;
  text-align: left;
  background: #3498db;
  color: white;
}

.header-title {
  font-size: 40px;
  color: white;
}
/* Style for the header description */

.header-description {
  font-size: 24px;
  color: #e74c3c;}

/* Style the top navigation bar */
.navbar {
  background-color: #2c3e50;
  display: flex;
  justify-content: column; /* Align items to the start and end of the bar */
  align-items: flex-start; /* Align items to the left */
  padding: 10px;
}

/* Style for the navigation bar links */
.navbar a {
  color: #fff;
  text-decoration: none;
  padding: 10px 15px;
  transition: background-color 0.3s;
}

/* Set the navbar links to display block */
.navbar {
  /* Add display: block to .nav-item */
  display: block;
}

/* Right-aligned link */
/*.navbar a.right {
  /* Remove margin-left: auto; */


/* Change color on hover */
.navbar a:hover {
  background-color: #34495e; /* Change the background color on hover */
}

/* Column container */
.row {  
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
}

/* Create two unequal columns that sit next to each other */
/*.row {
  display: flex;
  justify-content: space-between;
}
/* Sidebar/left column */
.side {
  /*flex: 0.3; /* Set the width of the sidebar column to 30% of the row width */
  background-color: #f9f9f9; /* Set the background color of the sidebar column */
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add a subtle box shadow for a cleaner look */
}

/* Style for the main column */
.main {
  flex: 1; /* Take up the full width of the page */
  background-color: #fff;
  padding: 20px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
 /* Center-align text within the main content */
 text-align: justify;
}


/* Fake image, just for this example */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #34495e;
  color: #fff;
}
/* Responsive layout - when the screen is less than or equal to 700px wide */
@media screen and (max-width: 700px) {
  .navbar {
    flex-direction: column;
    align-items: center; /* Center-align all navigation items */
  }
  .nav-item.right {
    display: none; /* Hide right-aligned navigation items */
  }
  .header-title {
    font-size: 24px; /* Reduce header font size for smaller screens */
  }
  .header-description {
    font-size: 16px; /* Reduce header description font size for smaller screens */
  }
}
/* Responsive layout - when the screen is less than or equal to 600px wide */
@media screen and (max-width: 600px) {
  .main {
    padding: 10px; /* Reduce main content padding for smaller screens */
  }
  .board-member {
    width: 100%; /* Make board members take up full width on smaller screens */
  }
  .fakeimg {
    height: 40px; /* Reduce fake image height for smaller screens */
  }
}

/* Additional media query for screens smaller than or equal to 400px */
@media screen and (max-width: 400px) {
  .search-bar input[type="text"] {
    width: 90%; /* Increase search input width for very small screens */
  }
  .footer {
    font-size: 14px; /* Reduce footer font size for very small screens */
  }
}

/* Adjust dropdown position */
.navbar .nav-item {
  position: relative;
}

/* Hide dropdowns by default */
.dropdown {
  display: none;
  position: absolute;
  top: 100%;
  left: 0;
  background-color: #9f9494;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 10;
}
/* Display the dropdown when the parent link is hovered or focused */
.nav-item:hover .dropdown,
.dropdown:focus-within {
  display: block;}

/* Vertical alignment for dropdown links */
.dropdown a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: black;
}

/* Change color on hover */
.dropdown a:hover {
  background-color: #ad9e9e;
  color: black;
}

/* Set the navbar links to display horizontally */
.navbar {
  display: flex;
  flex-wrap: wrap;
}
/* Update the position to appear below the nav-item */
.dropdown {
  left: 0;
  top: 100%;
  margin-top: 0; /* Add this line to override any other margin settings */
}

/* Style for the search bar */
.search-bar {
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 10px;
  background-color: #2c3e50; /* Set the background color of the search bar */
}

/* Style for the search input */
.search-bar input[type="text"] {
  padding: 10px;
  width: 70%;
  border: none;
  border-radius: 5px;
  background-color: #f0f0f0; /* Set the background color of the search input */
}

/* Style for the search button */
.search-bar button {
  padding: 10px;
  margin-left: 10px;
  border: none;
  background-color: #3498db; /* Set the background color of the search button */
  color: #fff; /* Set the text color of the search button */
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s; /* Add a smooth transition effect for the background color */
}

/* Change background color on hover */
.search-bar button:hover {
  background-color: #2980b9; /* Change the background color of the search button on hover */
}

/* Responsive layout - when the screen is less than 700px wide */
@media screen and (max-width: 700px) {
  .search-bar {
    flex-direction: row;
    flex-wrap: wrap;
    justify-content: center;
  }
  .search-bar input[type="text"] {
    width: 100%;
    margin-bottom: 10px;
  }
}

/* Additional media query for screens smaller than 400px */
@media screen and (max-width: 400px) {
  .search-bar {
    flex-direction: column;
  }
}
.centered-image {
  display: block;
  margin: 0 auto;
}
/* Styling for the appointment table */
.appointment-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

.appointment-table th, .appointment-table td {
  border: 1px solid #ccc;
  padding: 10px;
  text-align: center;
}

.appointment-table th {
  background-color: #f0f0f0;
}
/* Board members styles */
.board-members {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
    }
    .board-member {
      width: 48%;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      padding: 10px;
      text-align: center;
    }
    .position {
      font-weight: bold;
    }
    .name {
      font-style: italic;
    }
     /* Style for the buttons */
.button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #9f9494;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-right: 10px; /* Add some spacing between buttons */
}

.button:hover {
    background-color: #2980b9;
}
  /* Style for the sub-dropdown */
.sub-dropdown {
    display: none;
    position: absolute;
    top: 0;
    left: 100%; /* Position it to the right of "ENCOREMED" dropdown */
    margin-top: 0;
    background-color: #9f9494;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
    z-index: 10;
}

/* Display the sub-dropdown when the "ENCOREMED" link is active */
.sub-dropdown.active {
    display: block;
}

/* Style for the sub-dropdown links */
.sub-dropdown a {
    display: block;
    padding: 10px;
    text-decoration: none;
    color: black;
}

/* Change color on hover for sub-dropdown links */
.sub-dropdown a:hover {
    background-color: #ad9e9e;
    color: black;
}

</style>
</head>
<body>
  
<?php
$departments = array(
  array("url" => "INSURANCEDIRECTORY.php", "name" => "INSURANCE"),
  array("url" => "NURSINGDIRECTORY.php", "name" => "MEDICAL/NURSE"),
  array("url" => "FINANCEDIRECTORY.php", "name" => "FINANCE"),
  array("url" => "BMSDIRECTORY.php", "name" =>"BMS"),
  array("url" => "ENCOREMEDDIRECTORY.php", "name" => "ENCOREMED"),
  array("url" => "ipaddress.php", "name" => "IP ADDRESS")
);

   function toggleDropdown($dropdownId) {
     $dropdown = document.getElementById($dropdownId);
     $style = $dropdown.style;
     $style->display = $style->display === 'none' ? 'block' : 'none';
     event.stopPropagation(); // Stop the click event from propagating
   }
   
   function search() {
     // Get the input value
     $searchValue = $_POST['searchInput'];
   
     // Perform your search operation here (e.g., redirect to search results page or show results on the same page).
     echo 'Search for: ' . $searchValue;
     // Add your search logic here...
   
     // For demonstration purposes, let's clear the input after the search button is clicked
     $_POST['searchInput'] = '';
   }
?>

<div class="header">
  <img src="https://media.kpjhealth.com.my/media/hospital/hosp-25/setting/1634883989_d272167c1fcbb4c82fcb.png" style="height:60px;">
  <h1 class="header-title">PGSH Information</h1>
  <p class="header-description">Care For Life </p>
</div>


  <!-- Navigation Bar -->
  <div class="navbar">
      <!-- Home link -->
      <div class="nav-item">
      <a href="home.php">HOME</a>
    </div>
  
    <!-- General link with dropdown -->
    <div class="nav-item right" onmouseover="toggleSubDropdown('encoremed-sub-dropdown', true)" onmouseout="toggleSubDropdown('encoremed-sub-dropdown', false)">
  <a href="#">GENERAL ▼</a>
  <div class="dropdown" id="general-directory-dropdown">
    <a class="button" href="https://ess.kpjhealth.com.my/kzhrweb/awlogin.aspx" target="_blank">HUMAN RESOURCES</a>
    <a class="button" href="http://10.130.146.3/bms/login.php" target="_blank">BMS</a>
    <a href="ipaddress.php">IP ADDRESS</a>
    <a class="button" href="https://sqm.kpjhealth.com.my/" target="_blank">CCX</a>
    <div class="nav-item right" onmouseover="toggleEncoremedDropdown(true)" onmouseout="toggleEncoremedDropdown(false)">
    <a href="#">ENCOREMED ►</a>
          <div class="sub-dropdown" id="encoremed-sub-dropdown">
                <a class="button" href="https://encoremed.io/dashboard/#login" target="_blank">Encoremed Appointment System</a>
                <a class="button" href="https://help.encoremed.io/_hcms/mem/login?redirect_url=/portal" target="_blank">Encoremed Portal</a>
            </div>
      </div>
    </div>
  </div>
       <!-- Department link with dropdown -->
  <div class="nav-item right">
    <a href="#" onclick="toggleDropdown('staff-directory-dropdown', event)">DEPARTMENT ▼</a>
  <div class="dropdown" id="staff-directory-dropdown">
    <a href="insurancedepartment.php">INSURANCE</a>
    <a href="medicaldepartment.php">OTHERS</a>
    </div>
  </div>

    <!-- Contact directory link with dropdown -->
    <div class="nav-item right">
    <a href="#" onclick="toggleDropdown('contact-directory-dropdown', event)">CONTACT DIRECTORY ▼</a>
  <div class="dropdown" id="contact-directory-dropdown">
    <a href="consultant.php" target="_blank">Consultant Speed Dial 2023</a>
    <a href="line.php">Line Directory 2023</a>
    <div class="nav-item right" onmouseover="toggleSpeedDialDropdown(true)" onmouseout="toggleSpeedDialDropdown(false)">
        <a href="#">Speed Dial Staff, Hospital and Insurance 2023 ►</a>
        <div class="sub-dropdown" id="speed-dial-sub-dropdown">
              <a href="staff.php" target="_blank">Staff</a>
              <a href="hospital.php" target="_blank">Hospital</a>
              <a href="others.php" target="_blank">Insurance</a>
        </div>
  </div>
  </div>
  </div>
  </div>

<!-- Main content -->
<div class="main">
    <h2 style="text-align: centre;">Welcome to the Insurance Department</h2>
    <!-- Add the following CSS rule to justify-align text -->
    <p style="text-align: justify;">List of Insurance.</p>
    <!-- Table for insurance links -->
<table class="appointment-table">
    <tr>
        <th>Others</th>
        <th></th>
  </tr>
    <tr>
        <td>Add Link</td>
        <td><button onclick="window.open('https://pruhas.prudential.com.my/HASTouch/login/login.do?__fsk=155269892', '_blank')">🌐</button></td>
    </tr>
    <tr>
        <td>Update LInk</td>
        <td><button onclick="window.open('https://ihpmy.com/eClaim/main.asp', '_blank')">🌐</button></td>
    </tr>
</table>
  </div>
  </div>
  </div>
<div class="footer">
  <h2>Footer</h2>
</div>
<script>
    /* JavaScript code to toggle the sub-dropdown for "ENCOREMED" */
function toggleEncoremedDropdown(active) {
    var encoremedDropdown = document.getElementById('encoremed-sub-dropdown');
    if (active) {
        encoremedDropdown.classList.add('active');
    } else {
        encoremedDropdown.classList.remove('active');
    }
}
/* JavaScript code to toggle the sub-dropdown for "Speed Dial Staff, Hospital, and Insurance" */
function toggleSpeedDialDropdown(active) {
    var speedDialDropdown = document.getElementById('speed-dial-sub-dropdown');
    if (active) {
        speedDialDropdown.classList.add('active');
    } else {
        speedDialDropdown.classList.remove('active');
    }
}
</script>

</body>
</html>

<?php 
}else{
   header("Location: index.php");
   exit();
}
?>
