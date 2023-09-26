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
    /* Hide the print button in print view */
    @media print {
      #printButton {
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

@media print {
  #printButton {
    display: none;
  }
  .red-box {
    background-color: red;
    color: white;
  }
}
.yellow-box {
  background-color: yellow;
  color: black;
}
.IndianRed-box {
  background-color: IndianRed;
  color: black;
}
/* Apply uppercase style to all td elements within the table */
.appointment-table td {
text-transform: uppercase;
}

</style>
</head>
<body>
<!-- Main content -->
<div class="main">
     <!-- Print button -->
     <button  id="printButton" onclick="printPage()">🖨️ Print</button>
     <h2 style="text-align: center;">SPEED DIAL STAFF, HOSPITAL & INSURANCE</h2>
  <p style="text-align: center;">UPDATED AS AT: 03/06/23</p>
  <p style="text-align: center;">HOSPITAL</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

  <tr>
    <th>SPEED DIAL</th>
    <th>GENERAL</th>
  </tr>
  <tr>
    <td>004</td>
    <td>Hospital Sultan Ismail (HSI)</td>
    
  </tr>
  <tr>
    <td>014</td>
    <td>Klinik Wakaf PG</td>
    
  </tr>
  <tr>
    <td>026</td>
    <td>KPJ Johor</td>
    
  </tr>
  <tr>
    <td>027</td>
    <td>KPJ Puteri</td>
    
  </tr>
  <tr>
    <td>028</td>
    <td>KPJ Healthcare Berhad (HQ)</td>
    
  </tr>
  <tr>
    <td>040</td>
    <td>Hospital Sultanah Aminah JB (HSA)</td>
    
  </tr>
  <tr>
    <td>049</td>
    <td>Fabric Care JB</td>
    
  </tr>
  <tr>
    <td>056</td>
    <td>Jabatan Kesihatan (PHI)</td>
    
  </tr>
  <tr>
    <td>091</td>
    <td>Columbia Asia (Nusajaya)</td>
    
  </tr>
  <tr>
    <td>092</td>
    <td>Regency Hospital</td>
    
  </tr>
</table>
<table class="appointment-table">
 <tr>
    <th>DEPARTMENT</th>
    <th>TEL NO</th>
  </tr>
  <!-- Diamond Ward -->
  <tr>
    <td>Diamond Ward</td>
    <td>010 3411098</td>
    
  </tr>
  <!-- Sapphire Ward -->
  <tr>
    <td>Sapphire Ward</td>
    <td>010 3411097</td>
    
  </tr>
  <!-- Amber Ward -->
  <tr>
    <td>Amber Ward</td>
    <td>010 3411196</td>
    
  </tr>
  <!-- Ruby Ward -->
  <tr>
    <td>Ruby Ward</td>
    <td>010 3411094</td>
    
  </tr>
  <!-- A&E -->
  <tr>
    <td>A&E</td>
    <td>010 3411091</td>
    
  </tr>
  <!-- Infection Control -->
  <tr>
    <td>Infection Control</td>
    <td>010 3411214</td>
    
  </tr>
  <!-- Pharmacy Services -->
  <tr>
    <td>Pharmacy Services</td>
    <td>010 3411060</td>
    
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
