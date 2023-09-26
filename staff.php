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
<p style="text-align: center;">STAFF</p>
  <input type="text" id="searchInput" placeholder="Search...">
  <table class="appointment-table">

<!-- DIAL -->
<tr>
  <th>DIAL</th>
  <th>STAFF NAME</th>
  <th>SERVICES</th>
</tr>
<tr>
  <th colspan="3">TOP MANAGEMENT</th>
</tr>
<tr>
<tr>
  <td class="IndianRed-box">001</td>
  <td class="IndianRed-box">En Khairul Hasanain</td>
  <td class="IndianRed-box">CEO KPJPGSH</td>
</tr>
<tr>
  <td>183</td>
  <td>Pn NoorAtikah Cholan</td>
  <td>Operation Manager</td>
</tr>
<tr>
  <td>011</td>
  <td>Mdm Hafizah</td>
  <td>Chief Nursing Officer</td>
</tr>

<!-- NURSING -->
<tr>
  <th colspan="3">NURSING</th>
</tr>
<tr>
  <td>006</td>
  <td>Pn Ruslina</td>
  <td>UM - ICU/Cath Lab</td>
</tr>
<tr>
  <td>087</td>
  <td>Pn Nor Liana</td>
  <td>UM - Scope/Citrine Ward</td>
</tr>
<tr>
  <td>057</td>
  <td>Pn Saruni</td>
  <td>UM - Sapphire</td>
</tr>
<tr>
  <td>018</td>
  <td>Pn Suzana</td>
  <td>UM - Diamond</td>
</tr>
<tr>
  <td>162</td>
  <td>Pn Azliwatie</td>
  <td>AUM- OT</td>
</tr>
<tr>
  <td>046</td>
  <td>Pn Fadzlina</td>
  <td>UM - Ruby/WCU</td>
</tr>
<tr>
  <td>047</td>
  <td>Pn Florence</td>
  <td>UM - A&E</td>
</tr>
<tr>
  <td>008</td>
  <td>Pn Nurul Nadia</td>
  <td>Infection Controls Officer</td>
</tr>
<tr>
  <td>080</td>
  <td>Pn Nabilah Laila</td>
  <td>AUM - Education</td>
</tr>
<tr>
  <td>152</td>
  <td>Pn Nabila</td>
  <td>RN Incharge - Dialysis</td>
</tr>
<tr>
  <td>127</td>
  <td>Pn Nor Hidayah Razi</td>
  <td>RN Incharge - Amber</td>
</tr>
<tr>
  <td class="yellow-box">169</td>
  <td class="yellow-box">Bed Management Coordinator</td>
  <td class="yellow-box"></td>
</tr>

<!-- SERVICE QUALITY MANAGEMENT -->
<tr>
  <th colspan="3">CUSTOMER CARE EXPERIENCE</th>
</tr>
<tr>
  <td>021</td>
  <td>Pn Suriatulakma</td>
  <td>HOS-SQM</td>
</tr>
<tr>
  <td>129</td>
  <td>En Zulhelmi</td>
  <td>Officer SQM</td>
</tr>

<!-- MARCOMM -->
<tr>
  <th colspan="3">MARCOMM</th>
</tr>
<tr>
  <td>095</td>
  <td>En Erman</td>
  <td>HOS - MarComm</td>
</tr>
<tr>
  <td>098</td>
  <td>Cik Azzy</td>
  <td>MarComm</td>
</tr>
<tr>
  <td>044</td>
  <td>Cik Luciana</td>
  <td>MarComm</td>
</tr>
<tr>
  <td>139</td>
  <td>Pn Syazwani</td>
  <td>MarComm</td>
</tr>
<tr>
  <td>136</td>
  <td>Pn Rosmina</td>
  <td>MarComm</td>
</tr>
<tr>
  <td>094</td>
  <td>En Raden</td>
  <td>MarComm</td>
</tr>

<!-- DIETITIAN -->
<tr>
  <th colspan="3">DIETITIAN</th>
</tr>
<tr>
  <td>013</td>
  <td>Puan Siti Munirah</td>
  <td>Dietitian</td>
</tr>
<tr>
  <td>291</td>
  <td>Cik Nur Nadzirah</td>
  <td>Dietitian</td>
</tr>

<!-- TOTAL MEAL SOLUTION -->
<tr>
  <th colspan="3">TOTAL MEAL SOLUTION</th>
</tr>
<tr>
  <td>100</td>
  <td>Pn Ezzah</td>
  <td>Regional TMS</td>
</tr>

<!-- MAINTENANCE -->
<tr>
  <th colspan="3">MAINTENANCE</th>
</tr>
<tr>
  <td>138</td>
  <td>En Sulaiman</td>
  <td>Chargeman</td>
</tr>
<tr>
  <td>012</td>
  <td>Pn Fatin Aman</td>
  <td>Biomedical</td>
</tr>
<tr>
  <td>010</td>
  <td>Pn Hafidah</td>
  <td>Biomedical</td>
</tr>
<tr>
  <td>048</td>
  <td>En Shahridz</td>
  <td>Maintenance</td>
</tr>
<tr>
  <td>073</td>
  <td>En Firdaus</td>
  <td>Maintenance</td>
</tr>
<tr>
  <td>020</td>
  <td>En Shafiz</td>
  <td>Maintenance</td>
</tr>
<tr>
  <td>114</td>
  <td>En Izad</td>
  <td>Maintenance</td>
</tr>
<tr>
  <td>124</td>
  <td>En Amir</td>
  <td>Maintenance</td>
</tr>

<!-- MEDICAL RECORD -->
<tr>
  <th colspan="3">MEDICAL RECORD</th>
</tr>
<tr>
  <td>009</td>
  <td>Pn Siti Abidah</td>
  <td>HOS - Medical Record</td>
</tr>

<!-- FINANCE -->
<tr>
  <th colspan="3">FINANCE</th>
</tr>
<tr>
  <td>003</td>
  <td>Cik NorHafizah</td>
  <td>Finance Manager</td>
</tr>
<tr>
  <td>019</td>
  <td>Pn Norlela</td>
  <td>HOS-Admission/Discharge</td>
</tr>
<tr>
  <td>024</td>
  <td>Pn Suriani</td>
  <td>Credit Control</td>
</tr>
<tr>
  <td>041</td>
  <td>Pn Noradila</td>
  <td>Billing Supervisor</td>
</tr>

<!-- QUALITY -->
<tr>
  <th colspan="3">QUALITY</th>
</tr>
<tr>
  <td>039</td>
  <td>Cik Nur Nabilah</td>
  <td>Quality Services</td>
</tr>
<!-- GROUP HUMAN RESOURCE MANAGEMENT -->
<tr>
  <th colspan="3">GROUP HUMAN RESOURCE MANAGEMENT</th>
</tr>
<tr>
  <td>109</td>
  <td>Cik Siti Syahirah</td>
  <td>HOS - GHRM</td>
</tr>
<tr>
  <td>055</td>
  <td>En Rashid</td>
  <td>Driver</td>
</tr>
<tr>
  <td>078</td>
  <td>En Fikri</td>
  <td>Driver</td>
</tr>

<!-- INFORMATION TECHNOLOGY -->
<tr>
  <th colspan="3">INFORMATION TECHNOLOGY</th>
</tr>
<tr>
  <td>015</td>
  <td>En Khairul</td>
  <td>HOS - IT</td>
</tr>
<tr>
  <td>062</td>
  <td>En Akmal</td>
  <td>IT</td>
</tr>
<tr>
  <td>101</td>
  <td>Cik Faiz</td>
  <td>IT</td>
</tr>
<tr>
  <td>161</td>
  <td>Cik Marina</td>
  <td>IT</td>
</tr>

<!-- PURCHASING -->
<tr>
  <th colspan="3">PURCHASING</th>
</tr>
<tr>
  <td>165</td>
  <td>En Razif</td>
  <td>HOS - Purchasing</td>
</tr>

<!-- PATIENT SERVICES -->
<tr>
  <th colspan="3">PATIENT SERVICES</th>
</tr>
<tr>
  <td>120</td>
  <td>Pn Nursyifa</td>
  <td>HOS - PTS</td>
</tr>

<!-- PHARMACY -->
<tr>
  <th colspan="3">PHARMACY</th>
</tr>
<tr>
  <td>081</td>
  <td>Miss Yong Tsuey Li</td>
  <td>HOS - Pharmacist</td>
</tr>

<!-- DIAGNOSTIC IMAGING -->
<tr>
  <th colspan="3">DIAGNOSTIC IMAGING</th>
</tr>
<tr>
  <td>002</td>
  <td>En Zainuddin</td>
  <td>HOS - D.I.S</td>
</tr>
<tr>
  <td>060</td>
  <td>En Syukri</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>063</td>
  <td>Pn Hafina</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>064</td>
  <td>Pn Zulaikha</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>099</td>
  <td>Pn Afiqah</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>123</td>
  <td>En Haliem</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>131</td>
  <td>En Fadzli</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>130</td>
  <td>Pn Siti Nurul Syafiqah</td>
  <td>D.I.S</td>
</tr>
<tr>
  <td>045</td>
  <td>Cik Diana</td>
  <td>D.I.S</td>
</tr>

<!-- PHYSIOTHERAPY -->
<tr>
  <th colspan="3">PHYSIOTHERAPY</th>
</tr>
<tr>
  <td>007</td>
  <td>Pn Nurul Huda</td>
  <td>HOS-Physio</td>
</tr>
<tr>
  <td>102</td>
  <td>Cik Amira</td>
  <td>Physio</td>
</tr>
<tr>
  <td>103</td>
  <td>En Faizal Ashram</td>
  <td>Physio</td>
</tr>
<tr>
  <td>117</td>
  <td>Pn Heryati</td>
  <td>Physio</td>
</tr>
<tr>
  <td>089</td>
  <td>En Eddin</td>
  <td>Physio</td>
</tr>
<tr>
  <td>116</td>
  <td>En Justin Jerome</td>
  <td>Physio</td>
</tr>

<!-- LABORATORY -->
<tr>
  <th colspan="3">LABORATORY</th>
</tr>
<tr>
  <td>017</td>
  <td>Pn Azrin</td>
  <td>HOS - Laboratory</td>
</tr>
<tr>
  <td>069</td>
  <td>En Norman</td>
  <td>Laboratory - Rider</td>
</tr>
<tr>
  <td>065</td>
  <td>Pn Hafizah</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>066</td>
  <td>En Zurayushaznan</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>067</td>
  <td>En Sirajuddin</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>076</td>
  <td>Cik Nazirah</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>068</td>
  <td>Pn Erina</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>070</td>
  <td>Pn Yuzie</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>189</td>
  <td>Cik Nazatul</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>190</td>
  <td>Cik Aleesa</td>
  <td>Laboratory</td>
</tr>
<tr>
  <td>104</td>
  <td>En Hamzi</td>
  <td>Laboratory</td>
</tr>

<!-- LABORATORY ONCALL -->
<tr>
  <td class="yellow-box">196</td>
  <td class="yellow-box">LABORATORY ONCALL</td>
  <td class="yellow-box"></td>
</tr>

<!-- ... (Laboratory OnCall entries) ... -->

<!-- AUDIOLOGIST -->
<tr>
  <th colspan="3">AUDIOLOGIST</th>
</tr>
<tr>
  <td>191</td>
  <td>Pn Amira</td>
  <td>Audiology</td>
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
