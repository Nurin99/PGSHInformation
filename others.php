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
<p style="text-align: center;">INSURANCE & OUTSOURCE</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

<!-- DIAL -->
<tr>
  <th>DIAL</th>
  <th>STAFF NAME</th>
  <th>SERVICES</th>
</tr>
<!-- OUTSOURCE -->
<tr>
  <th colspan="3">OUTSOURCE</th>
</tr>
<tr>
  <td>016</td>
  <td>Pn Zuraihan</td>
  <td>HOS - Outsource</td>
</tr>
<tr>
  <td>025</td>
  <td>En Zulzharfan</td>
  <td>Security Guard</td>
</tr>
<tr>
  <td>023</td>
  <td>Pn Hazimah</td>
  <td>Easy Clean</td>
</tr>
<tr>
  <td>077</td>
  <td>Pn Norita</td>
  <td>Linen</td>
</tr>

</table>

<table class="appointment-table">
<tr>
  <th>SPEED DIAL</th>
  <th>INSURANCES</th>
</tr>
<tr>
  <td>045</td>
  <td>AIA</td>

</tr>
<tr>
  <td>053</td>
  <td>PM Care</td>

</tr>
<tr>
  <td>054</td>
  <td>Compumed</td>
  
</tr>
<tr>
  <td>058</td>
  <td>Asia Assistance 1</td>
  
</tr>
<tr>
  <td>059</td>
  <td>Asia Assistance 2</td>
  
</tr>
<tr>
  <td>083</td>
  <td>Asia Assistance 3</td>
  
</tr>
<tr>
  <td>088</td>
  <td>Asia Assistance 4</td>
  
</tr>
<tr>
  <td>061</td>
  <td>AIA 2</td>
  
</tr>
<tr>
  <td>071</td>
  <td>MediExpress</td>
  
</tr>
<tr>
  <td>072</td>
  <td>AIA Jalan Ampang</td>
  
</tr>
<tr>
  <td>079</td>
  <td>MiCares</td>
  
</tr>
<tr>
  <td>090</td>
  <td>Manulife</td>
  
</tr>
<tr>
  <td>093</td>
  <td>Prudential</td>
  
</tr>
<tr>
  <td>033</td>
  <td>Manulife COSSB</td>
  
</tr>
<tr>
  <td>112</td>
  <td>Mediclinic 1</td>
  
</tr>
<tr>
  <td>113</td>
  <td>Mediclinic 2</td>
 
</tr>
<tr>
  <td>118</td>
  <td>Etiqa</td>
  
</tr>
<tr>
  <td>166</td>
  <td>Quepacs</td>
  
</tr>
<tr>
  <td>167</td>
  <td>Emas</td>
 
</tr>
<tr>
  <td>045</td>
  <td>AIA</td>
  
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
