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

</style>
</head>
<body>
<!-- Main content -->
<div class="main">
     <!-- Print button -->
     <button  id="printButton" onclick="printPage()">🖨️ Print</button>

     <h2 style="text-align: center;">PGSH Doctor's Contact Number 2023</h2>
 <p style="text-align: center;">Updated as at: 03/06/2023</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

 <!-- NAME OF DOCTORS -->
<tr>
  <th>NAME OF DOCTORS</th>
  <th>SPEED DIAL (START WITH 813)</th>
</tr>
<tr>
  <th colspan="3">CONSULTANT</th>
  
</tr>
<tr>
  <td>Dato’ Dr Zahir Husain Kamari</td>
  <td>030</td>
</tr>
<tr>
  <td>Dr Shamsuddin Abdul Aziz</td>
  <td>029</td>
</tr>
<tr>
  <td>Dr Rabindran Gandhi</td>
  <td>074</td>
</tr>
<tr>
  <td>Dr Nor Aizal Che Hamzah</td>
  <td>031</td>
</tr>
<tr>
  <td>Dr Aziz Rahman Ibramsha</td>
  <td>032</td>
</tr>
<tr>
  <td>Mr Abd Razak Samsudin</td>
  <td>082</td>
</tr>
<tr>
  <td>Dr. Che Wan Aminud-din</td>
  <td>037</td>
</tr>
<tr>
  <td>Dr Tye Yi Loon</td>
  <td>176</td>
</tr>
<tr>
  <td>Dr Nidzam Md Tahir</td>
  <td>042</td>
</tr>
<tr>
  <td>Dr Nik Azrita Dato’Haji Ariffin</td>
  <td>050</td>
</tr>
<tr>
  <td>Dr Lam Ruey Shyang</td>
  <td>106</td>
</tr>
<tr>
  <td>Dr Frienky Chong Wei Kee</td>
  <td>111</td>
</tr>
<tr>
  <td>Dr Khoo Shaw Ming</td>
  <td>097</td>
</tr>
<tr>
  <td>Dr Shahidi Bin Jamaludin</td>
  <td>084</td>
</tr>
<tr>
  <td>Dr Cheong Jack Pein</td>
  <td>110</td>
</tr>
<tr>
  <td>Dr Wan Adnan Wan Hussein</td>
  <td>168</td>
</tr>
<tr>
  <td>Dr Salmi Daraup</td>
  <td>149</td>
</tr>
<tr>
  <td>Dr Mohd Faiz Idris</td>
  <td>043</td>
</tr>
<tr>
  <th colspan="3">ANAESTHETIST</th>
</tr>
<tr>
  <td>Dr Baharuddin Baki</td>
  <td>034</td>
</tr>
<tr>
  <td>Dr Fadhlina Arifin</td>
  <td>126</td>
</tr>
<tr>
  <td>Dr Suryani Mohd Zaid</td>
  <td>096</td>
</tr>
<tr>
  <th colspan="3">RADIOLOGIST</th>
</tr>
<tr>
  <td>Dr Suzieta Zamrah</td>
  <td>086</td>
</tr>
<tr>
  <td>Dr Norani Mohd Jamil</td>
  <td>035</td>
</tr>
<tr>
  <th colspan="3">MEDICAL OFFICER</th>
</tr>
<tr>
  <td>Dr Ahmad Shafiq Ishak</td>
  <td>128</td>
</tr>
<tr>
  <td>Dr Wong Chun Keat</td>
  <td>107</td>
</tr>
<tr>
  <td>Dr Nooh Sainorudin</td>
  <td>153</td>
</tr>
<tr>
  <td>Dr Esmeth Abd Rahim</td>
  <td>108</td>
</tr>
<tr>
  <td>Dr Azhif Ezzudin Aminudin</td>
  <td>193</td>
</tr>
<tr>
  <th colspan="3">VISITING CONSULTANT</th>
</tr>
<tr>
  <td>Dr Subramaniam Raman</td>
  <td>052</td>
</tr>
<tr>
  <td>Dr Faizal Ali</td>
  <td>051</td>
</tr>
<tr>
  <td>Dr Zarina Zainan Abidin</td>
  <td>105</td>
</tr>

</table>
</div>

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
