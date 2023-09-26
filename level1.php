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

@media print {
  #printButton {
    display: none;
  }
  .red-box {
    background-color: red;
    color: white;
  }
}

</style>
</head>
<body>
<!-- Main content -->
<div class="main">
     <!-- Print button -->
     <button  id="printButton" onclick="printPage()">🖨️ Print</button>

  <h2 style="text-align: center;">KPJ PASIR GUDANG SPECIALIST HOSPITAL DIRECTORY</h2>
  <p style="text-align: center;">UPDATED AS AT: 03/06/2023</p>
  <p style="text-align: center;">LEVEL 1</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

   <!-- Include LEVEL 1 content here -->
      <!-- SERVICE QUALITY MANAGEMENT (SQM) -->
     <tr>
  <td class="red-box">EMERGENCY CODE</td>
  <td class="red-box">111</td>
</tr>
<tr>
  <td>Operator Room</td>
  <td>0</td>
</tr>
<tr>
  <td>Information Counter</td>
  <td>3980</td>
</tr>
<tr>
  <th colspan="3">SERVICE QUALITY MANAGEMENT (SQM)</th>
</tr>
<tr>
  <td>Puan Suriatulakma Mustaffa (HOS)</td>
  <td>3948</td>
</tr>
<tr>
  <td>Encik Zulhelmi Sulaiman (Officer)</td>
  <td>5021</td>
</tr>
<tr>
  <td>Work Area</td>
  <td>3825</td>
</tr>

<!-- CONTROL ROOM -->
<tr>
  <th colspan="3">CONTROL ROOM</th>
</tr>
<tr>
  <td>Security Guard (Dynamic Guardforce)</td>
  <td>3928</td>
</tr>

<!-- ACCIDENT & EMERGENCY -->
<tr>
  <th colspan="3">ACCIDENT & EMERGENCY</th>
</tr>
<tr>
  <td class="red-box">EMERGENCY LINE</td>
  <td class="red-box">07 257 3900</td>
</tr>
<tr>
  <td>Puan Florence Anak Libau (UM)</td>
  <td>3809</td>
</tr>
<tr>
  <td>Registration Counter 1</td>
  <td>3969</td>
</tr>
<tr>
  <td>Registration Counter 2 (Sessional)</td>
  <td>3953</td>
</tr>
<tr>
  <td>Counter (Nurse Station)</td>
  <td>3814</td>
</tr>
<tr>
  <td>Work Area</td>
  <td>3815</td>
</tr>
<tr>
  <td>POE Counter</td>
  <td>3812</td>
</tr>

<!-- MEDICAL OFFICER -->
<tr>
  <th colspan="3">MEDICAL OFFICER</th>
</tr>
<tr>
  <td>Medical Officer 1</td>
  <td>3811</td>
</tr>
<tr>
  <td>Sessional Clinic (Consultant)</td>
  <td>3810</td>
</tr>

<!-- PHARMACY -->
<tr>
  <th colspan="3">PHARMACY</th>
</tr>
<tr>
  <td>Miss Yong Tsuey Li (HOS)</td>
  <td>3832</td>
</tr>
<tr>
  <td>Work Area (Miss Vysnavi & Puan Lathifa)</td>
  <td>3801</td>
</tr>
<tr>
  <td>Cashier</td>
  <td>3804</td>
</tr>
<tr>
  <td>Outpatient</td>
  <td>3805</td>
</tr>
<tr>
  <td>Inpatient</td>
  <td>3806</td>
</tr>
<tr>
  <td>Pharmacy Store</td>
  <td>3951</td>
</tr>
<tr>
  <td>Counter</td>
  <td>3842</td>
</tr>
<tr>
  <td>Fax No</td>
  <td>257 3842</td>
</tr>
<tr>
  <td>Fax No (same no with discharge fax)</td>
  <td>257 3950</td>
</tr>

<!-- DIAGNOSTIC IMAGING -->
<tr>
  <th colspan="3">DIAGNOSTIC IMAGING</th>
</tr>
<tr>
  <td>Dr Suzieta Zamrah (Radiologist)</td>
  <td>3823</td>
</tr>
<tr>
  <td>Dr Norani Mohd Jamil (Radiologist)</td>
  <td>3808</td>
</tr>
<tr>
  <td>Encik Zainudin Jabir (HOS)</td>
  <td>3816</td>
</tr>
<tr>
  <td>Counter</td>
  <td>3818</td>
</tr>
<tr>
  <td>Control Area</td>
  <td>3819</td>
</tr>

<!-- INSURANCE -->
<tr>
  <th colspan="3">INSURANCE</th>
</tr>
<tr>
  <td>Puan Norlela Ani Manap (HOS)</td>
  <td>3898</td>
</tr>
<tr>
  <td>Puan Siti Razmilawati (Case Review Officer)</td>
  <td>3827</td>
</tr>
<tr>
  <td>Counter 1</td>
  <td>3970</td>
</tr>
<tr>
  <td>Counter 2</td>
  <td>3824</td>
</tr>

<!-- ADMISSION -->
<tr>
  <th colspan="3">ADMISSION</th>
</tr>
<tr>
  <td>Puan Norlela Ani Manap (HOS)</td>
  <td>3898</td>
</tr>
<tr>
  <td>Work Area</td>
  <td>3828</td>
</tr>
<tr>
  <td>Counter</td>
  <td>5016</td>
</tr>

<!-- DISCHARGE -->
<tr>
  <th colspan="3">DISCHARGE</th>
</tr>
<tr>
  <td>Puan Noradila Kasim (Billing Supervisor)</td>
  <td>3831</td>
</tr>
<tr>
  <td>Work Area</td>
  <td>3721</td>
</tr>
<tr>
  <td>Counter</td>
  <td>3830</td>
</tr>
<tr>
  <td>Medical Report Counter</td>
  <td>5041</td>
</tr>
<tr>
  <td>Fax No</td>
  <td>257 3800</td>
</tr>

<!-- KITCHEN -->
<tr>
  <th colspan="3">KITCHEN(TMS)</th>
</tr>
<tr>
  <td>Work Area</td>
  <td>3987</td>
</tr>
      <!-- MARCOMM -->
<tr>
  <th colspan="3">MARCOMM</th>
</tr>
<tr>
  <td>Encik Erman Saniran (HOS)</td>
  <td>5029</td>
</tr>
<tr>
  <td>Cik Azzyati Che Alias</td>
  <td>5026</td>
</tr>
<tr>
  <td>Cik Luciana Melayu</td>
  <td>5119</td>
</tr>
<tr>
  <td>Puan Rosmina Ab Wahab</td>
  <td>5027</td>
</tr>
<tr>
  <td>Puan Nur Syazwani Zulkapeli</td>
  <td>5028</td>
</tr>

<!-- MAINTENANCE -->
<tr>
  <th colspan="3">MAINTENANCE</th>
</tr>
<tr>
  <td>Puan Fatin Aman (Biomedical)</td>
  <td>3835</td>
</tr>
<tr>
  <td>Work Area (Hafidah)</td>
  <td>3834</td>
</tr>
<tr>
  <td>Encik Sulaiman Hamin (Chargeman)</td>
  <td>5114</td>
</tr>
<tr>
  <td>Work Area (Sharina)</td>
  <td>5030</td>
</tr>
<tr>
  <td>Store</td>
  <td>3982</td>
</tr>

<!-- DRIVER ROOM -->
<tr>
  <th colspan="3">DRIVER ROOM</th>
</tr>
<tr>
  <td>Work Area</td>
  <td>3960</td>
</tr>

<!-- HOUSEKEEPING (EASY CLEAN) -->
<tr>
  <th colspan="3">HOUSEKEEPING (EASY CLEAN)</th>
</tr>
<tr>
  <td>Puan Hamimah Abdul Hamid</td>
  <td>5130</td>
</tr>
<tr>
  <td>Work Area</td>
  <td>3872</td>
</tr>

<!-- LINEN (FABRIC CARE) -->
<tr>
  <th colspan="3">LINEN (FABRIC CARE)</th>
</tr>
<tr>
  <td>Work Area</td>
  <td>3964</td>
</tr>

<!-- CAFETERIA -->
<tr>
  <th colspan="3">CAFETERIA</th>
</tr>
<tr>
  <td>Cashier</td>
  <td>3890</td>
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
