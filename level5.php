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
  <p style="text-align: center;">LEVEL 5</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

 <!-- Include LEVEL 5 content here -->
<!-- PATIENT SERVICES -->
<tr>
  <th colspan="3">PATIENT SERVICES</th>
</tr>
<tr>
  <td>Puan Nursyifa Mohd Khalid (HOS)</td>
  <td>3892</td>
  <td></td>
</tr>
<tr>
<th colspan="3">BLOOD TAKING</th>
</tr>
<tr>
  <td>Work Area</td>
  <td>3870</td>
  <td></td>
</tr>
<tr>
<th colspan="3">SPECIAL DIAGNOSTIC</th>
</tr>
<tr>
  <td>Treatment Room</td>
  <td>3869</td>
  <td></td>
</tr>
<tr>
<th colspan="3">ECHO ROOM</th>
</tr>
<tr>
  <td>Work Area</td>
  <td>3945</td>
  <td></td>
</tr>
<tr>
<th colspan="3">REGISTRATION COUNTER</th>
</tr>
<tr>
  <td>Medical Record Counter</td>
  <td>3920</td>
  <td></td>
</tr>
<tr>
  <td>GL Counter</td>
  <td>3919</td>
  <td></td>
</tr>
<tr>
  <td>No Fax</td>
  <td>257 3918</td>
  <td></td>
</tr>
<tr>
<!-- CONSULTANT CLINIC -->
<tr>
  <th colspan="3">CONSULTANT CLINIC</th>
</tr>
<tr>
  <td>Clinic 1 Dato' Dr Zahir Husain Kamari</td>
  <td>3901</td>
  <td>135</td>
</tr>
<tr>
  <td>Clinic 2 Dr Shamsuddin Abdul Aziz</td>
  <td>3902</td>
  <td>136</td>
</tr>
<tr>
  <td>Clinic 3 Dr Rabindran Gandhi</td>
  <td>3903</td>
  <td>3929</td>
</tr>
<tr>
  <td>Clinic 4 Dr Nor Aizal Che Hamzah</td>
  <td>3904</td>
  <td>3930</td>
</tr>
<tr>
  <td>Clinic 5 Dr Aziz Rahman Ibramsha</td>
  <td>3905</td>
  <td>139</td>
</tr>
<tr>
  <td>Clinic 6 Dr Cheong Jack Pein</td>
  <td>3906</td>
  <td>3932</td>
</tr>
<tr>
  <td>Clinic 7 Dr Che Wan Aminuddin</td>
  <td>3907</td>
  <td>3949</td>
</tr>
<tr>
  <td>Clinic 8 Dr Mohd Faiz Idris</td>
  <td>3942</td>
  <td>3925</td>
</tr>
<tr>
  <td>Clinic 9 Dr Mohd Nidzam Md Tahir</td>
  <td>3909</td>
  <td>3935</td>
</tr>
<tr>
  <td>Clinic 10 Dr Nik Azrita Dato'Haji Ariffin</td>
  <td>3910</td>
  <td>3936</td>
</tr>
<tr>
  <td>Clinic 11 Dr Wan Adnan Wan Hussein</td>
  <td>3911</td>
  <td>3937</td>
</tr>
<tr>
  <td>Clinic 12 Dr Khoo Shaw Ming</td>
  <td>3912</td>
  <td>3938</td>
</tr>
<tr>
  <td>Clinic 13 Dr Shahidi Jamaludin</td>
  <td>3913</td>
  <td>3939</td>
</tr>
<tr>
  <td>Clinic 14 Dr Lam Ruey Shyang</td>
  <td>3914</td>
  <td>3940</td>
</tr>
<tr>
  <td>Clinic 15 Dr Frienky Chong Wei Kee</td>
  <td>3915</td>
  <td>3941</td>
</tr>
<tr>
  <td>Clinic 16 Dr Tye Yi Loon</td>
  <td>3908</td>
  <td>3934</td>
</tr>
<tr>
  <td>Clinic 17 Dr Salmi Daraup</td>
  <td>5117</td>
  <td>3926</td>
</tr>
<tr>
  <td>Counsultant Lounge</td>
  <td>3943</td>
  <td></td>
</tr>
<tr>
<th colspan="3">EXECUTIVE SCREENING SUITE</th>
</tr>
<tr>
  <td>Medical Officer</td>
  <td>3947</td>
  <td></td>
</tr>
<tr>
  <td>Counter</td>
  <td>3880</td>
  <td></td>
</tr>
<tr>
<th colspan="3">AUDIOLOGIST</th>
</tr>
<tr>
  <td>Puan Nurul Amira Omar</td>
  <td>5129</td>
  <td></td>
</tr>
<tr>
<th colspan="3">DIETITIAN</th>
</tr>
<tr>
  <td>Puan Siti Munirah Mahmud (HOS)</td>
  <td>5005</td>
  <td></td>
</tr>
<tr>
<th colspan="3">NURSING EDUCATION</th>
</tr>
<tr>
  <td>Puan Nabilah Laila Zainal Abidin (AUM)</td>
  <td>3946</td>
  <td></td>
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
