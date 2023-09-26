<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}

/* Styling for the appointment table */
.appointment-table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

/* Center the vertical lines for all table cells */
.appointment-table th,
.appointment-table td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: center;
  vertical-align: middle; /* Center-align the text vertically */
}

.appointment-table th {
  background-color: #f0f0f0; 
}
/* Styles for the container div */
.container {
      text-align: center; /* Center-align the content inside the container */
    }
/* Styles for the print button */
#printButton {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 15px;
      font-size: 16px;
      cursor: pointer;
      margin-right: 10px;
      float: right; /* Float the button to the left */
    }
    @media print {
  #printButton {
    display: none;
  }
  .red-box {
    background-color: red;
    color: white;
  }
  #searchInput {
    display: none;
  }
}

    .appointment-table td:first-child {
    text-transform: uppercase;
  }
  
.red-box {
  background-color: red; /* Set background color to red */
  color: white; /* Set text color to white for better visibility */
}

.appointment-table td:nth-child(odd),
.appointment-table th:nth-child(odd) {
  width: 50%; /* Set a fixed width of 50% for odd-numbered columns (left column) */
}

.appointment-table td:nth-child(even),
.appointment-table th:nth-child(even) {
  width: 50%; /* Set a fixed width of 50% for even-numbered columns (right column) */
}


</style>
</head>
<body>
<!-- Main content -->
<div class="main">
     <!-- Print button -->
     <button  id="printButton" onclick="printPage()">🖨️ Print</button>

     <h2 style="text-align: center;">KPJ PASIR GUDANG SPECIALIST HOSPITAL DIRECTORY</h2>
  <p style="text-align: center;">UPDATED AS AT: 03/06/23</p>
  <p style="text-align: center;">LEVEL 3</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

<!-- Include LEVEL 3 content here -->
<!-- ADMINISTRATION -->
<tr>
<th colspan="3">ADMINISTRATION</th>
</tr>
<tr>
<td>Encik Mohd Azhar Abdullah (RCEO)</td>
<td>3887</td>
</tr>
<tr>
<td>Dr Shamsuddin Abdul Aziz (MD)</td>
<td>3889</td>
</tr>
<tr>
<td>Encik Khairul Hasanain Abdul Hamid (CEO)</td>
<td>3888</td>
</tr>
<tr>
<td>Puan NoorAtikah Cholan (OM)</td>
<td>5060</td>
</tr>
<tr>
<td>Puan Rahmah Shafhani Hassan (Secretary)</td>
<td>5018</td>
</tr>
<tr>
<td>Puan Nur Laily Mohd Ramly (Admin Executive)</td>
<td>3865</td>
</tr>
<tr>
<td>Puan Zuraihan Kamaruddin (Outsource)</td>
<td>3894</td>
</tr>
<tr>
<td>Board Room</td>
<td>3864</td>
</tr>
<tr>
<td>Dewan Anugerah</td>
<td>3997</td>
</tr>
<tr>
<td>Fax No</td>
<td>257 3974</td>
</tr>

<!-- NURSING EDUCATION -->
<tr>
<th colspan="3">NURSING EDUCATION</th>
</tr>
<tr>
<td>Puan Hafizah Hamidon (CNO)</td>
<td>3862</td>
</tr>
<tr>
<td>Work Area</td>
<td>3863</td>
</tr>

<!-- QUALITY -->
<tr>
<th colspan="3">QUALITY</th>
</tr>
<tr>
<td>Puan Nur Nabilah Mustafa (HOS)</td>
<td>3873</td>
</tr>
<tr>
<td>Cik Siti Farzana Izzati</td>
<td>3886</td>
</tr>

<!-- INFECTION CONTROL -->
<tr>
<th colspan="3">INFECTION CONTROL</th>
</tr>
<tr>
<td>Puan Nurul Nadia Abd Aziz (ICO)</td>
<td>3874</td>
</tr>

<!-- LABORATORY -->
<tr>
<th colspan="3">LABORATORY</th>
</tr>
<tr>
<td>Puan Nor Azrin Ahmad Huzairi (HOS)</td>
<td>3853</td>
</tr>
<tr>
<td>Work Area</td>
<td>3851</td>
</tr>
<tr>
<td>Counter</td>
<td>3852</td>
</tr>

<!-- GROUP HUMAN RESOURCE MANAGEMENT -->
<tr>
<th colspan="3">GROUP HUMAN RESOURCE MANAGEMENT</th>
</tr>
<tr>
<td>Cik Siti Syahirah Mohd Zainal (HOS)</td>
<td>3855</td>
</tr>
<tr>
<td>Puan Nur Amanina Aina Abdullah</td>
<td>5111</td>
</tr>
<tr>
<td>Cik Syazwani Najwa Shahidi</td>
<td>3893</td>
</tr>
<tr>
<td>Cik Ani Marahaini Rahmat</td>
<td>3854</td>
</tr>

<!-- FINANCE -->
<tr>
<th colspan="3">FINANCE</th>
</tr>
<tr>
<td>Cik NorHafizah Hanafi (Finance Manager)</td>
<td>3857</td>
</tr>
<tr>
<td>Account 1 (Azlina & Syazerina)</td>
<td>3985</td>
</tr>
<tr>
<td>Account 2 (Nazurah)</td>
<td>3856</td>
</tr>
<tr>
<td>Credit Control 1 (Asima & Hayati)</td>
<td>3856</td>
</tr>
<tr>
<td>Credit Control 2 (Fatin & Suriani)</td>
<td>5115</td>
</tr>
<tr>
<td>Credit Control 3 (Kaiyisah)</td>
<td>3988</td>
</tr>
<tr>
<td>Submission Admission 1 (Faridah)</td>
<td>3998</td>
</tr>
<tr>
<td>Submission Admission 2 (Queen)</td>
<td>3983</td>
</tr>
<tr>
<td>Submission Admission 3 (Fatin)</td>
<td>3989</td>
</tr>
<tr>
<td>No Fax</td>
<td>257 9372</td>
</tr>

<!-- INFORMATION TECHNOLOGY -->
<tr>
<th colspan="3">INFORMATION TECHNOLOGY</th>
</tr>
<tr>
<td>Encik Khairul Safwan (HOS)</td>
<td>3836</td>
</tr>
<tr>
<td>Work Area 1 (Akmal)</td>
<td>3866</td>
</tr>
<tr>
<td>Work Area 2 (Marina)</td>
<td>5118</td>
</tr>
<tr>
<td>Work Area 3 (Faiz)</td>
<td>3838</td>
</tr>

<!-- PURCHASING & CENTRAL STORE -->
<tr>
<th colspan="3">PURCHASING & CENTRAL STORE</th>
</tr>
<tr>
<td>Encik Muhamad Razif Sadon (HOS)</td>
<td>3861</td>
</tr>
<tr>
<td>Work Area</td>
<td>3860</td>
</tr>
<tr>
<td>Fax No</td>
<td>257 3973</td>
</tr>

<!-- DIALYSIS -->
<tr>
<th colspan="3">DIALYSIS</th>
</tr>
<tr>
<td>Puan Nabila Adnan (RN Incharge)</td>
<td>3958</td>
</tr>
<tr>
<td>Registration Counter</td>
<td>3955</td>
</tr>
<tr>
<td>Counter 1</td>
<td>3956</td>
</tr>
<tr>
<td>Counter 2</td>
<td>3957</td>
</tr>
</table>
</div>
  <!-- JavaScript for printing -->
  <script>
    // Function to trigger the print dialog
    function printPage() {
      window.print();
    }
  // Function to filter the table rows based on the search input
  function filterTable() {
    const input = document.getElementById('searchInput');
    const filter = input.value.toLowerCase();
    const table = document.querySelector('.appointment-table');
    const rows = table.querySelectorAll('tr');

    rows.forEach(row => {
      const cells = row.querySelectorAll('td, th');
      let found = false;

      cells.forEach(cell => {
        if (cell.textContent.toLowerCase().includes(filter)) {
          found = true;
        }
      });
    if (row.querySelector('th')) {
      // This row is a section title
      if (found) {
        // If the section title matches the search, show the entire section
        currentSection = row;
        row.style.display = '';
      } else {
        // Hide the section title if it doesn't match the search
        row.style.display = 'none';
        currentSection = null;
      }
    } else if (found || (currentSection && currentSection.style.display !== 'none')) {
      // Show the row if it matches the search or if it's part of the current visible section
      row.style.display = '';
    } else {
      // Hide the row if it doesn't match the search and is not part of the current visible section
      row.style.display = 'none';
    }
  });
}

  // Attach an event listener to the input field
  document.getElementById('searchInput').addEventListener('input', filterTable)

  </script>
</body>
</html>
