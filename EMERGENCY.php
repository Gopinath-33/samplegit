<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Leave Form</title>
  
  <style>
        body {
      font-family: Arial, sans-serif;
      background-color: #f8f9fa;
      margin: 0;
      padding: 0;
    }

    nav {
      text-align: center;
      background-color: #214569;
      color: white;
      padding: 10px;
      
    }


    .form-container {
      width: 80%;
      max-width: 900px;
      margin: 30px auto;
      background: white;
      padding: 20px 40px;
      border-radius: 12px;
      box-shadow: 0 0 10px rgba(0,0,0,0.2);
    }

    .form-container img.logo {
      width: 100px;
      display: block;
      margin: 0 auto 10px;
    }

    h3 {
      text-align: center;
      margin: 5px 0;
    }

    label {
      display: inline-block;
      width: 180px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="date"],
    input[type="time"],
    select,
    textarea {
      width: 60%;
      padding: 6px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    textarea {
      height: 80px;
      resize: none;
    }

    .name, .s-container, .reason, .signature {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 10px;
    }

    th, td {
      border: 1px solid #ccc;
      text-align: center;
      padding: 8px;
    }

    .alternate {
      font-weight: bold;
      text-align: left;
      margin-top: 20px;
    }

    input[type="submit"], button {
      background-color: #003366;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
    }

    input[type="submit"]:hover, button:hover {
      background-color: #0055a5;
    }

    hr {
      border: 1px solid #003366;
    }

    @media (max-width: 700px) {
      label {
        width: 100%;
        margin-bottom: 5px;
      }
      input, select, textarea {
        width: 100%;
      }
    }
    .signature{
      display: flex;
      justify-content: space-around;
      margin: 2%;
      
    }
    .hour{
      width: auto;
    }

    /* =========================================
       PRINT STYLES — clean, aligned printout
       ========================================= */
    @media print {
      @page {
        size: A4;
        margin: 12mm;
      }

      body {
        background: white;
        font-size: 12pt;
      }

      /* Hide everything that isn't part of the physical form */
      .no-print,
      button,
      input[type="submit"] {
        display: none !important;
      }

      nav {
        background: white !important;
        color: black !important;
        padding: 0 0 8px 0;
        border-bottom: 2px solid #000;
      }
      nav h2 { font-size: 16pt; margin: 0; }
      nav p { font-size: 10pt; margin: 2px 0 0; }

      .form-container {
        width: 100%;
        max-width: 100%;
        margin: 0;
        padding: 0;
        box-shadow: none;
        border-radius: 0;
      }

      h3 { font-size: 13pt; margin: 10px 0 4px; }

      hr { border: 1px solid #000; margin: 6px 0; }

      /* Turn inputs into clean fillable lines instead of boxed fields */
      .name, .s-container { margin-bottom: 10px; }

      label {
        width: 150px;
        font-size: 11pt;
        vertical-align: bottom;
      }

      input[type="text"],
      input[type="date"],
      input[type="time"],
      textarea {
        width: 55%;
        border: none;
        border-bottom: 1px solid #000;
        border-radius: 0;
        background: transparent;
        padding: 2px 4px;
        font-size: 11pt;
        color: #000;
      }

      textarea {
        height: 40px;
        resize: none;
      }

      /* Dropdowns: show as plain text on a line, not a boxed select */
      select {
        border: none;
        border-bottom: 1px solid #000;
        border-radius: 0;
        background: transparent;
        -webkit-appearance: none;
        appearance: none;
        width: auto;
        font-size: 11pt;
        padding: 2px 4px;
      }

      /* Alternate arrangement table: crisp borders, no zebra shadows */
      table {
        margin-top: 8px;
        page-break-inside: avoid;
      }
      th, td {
        border: 1px solid #000;
        padding: 6px;
        font-size: 10pt;
      }

      .alternate {
        font-size: 11pt;
        margin-top: 14px;
      }

      /* Signature row: even spacing with a printable line above each label */
      .signature {
        display: flex;
        justify-content: space-between;
        margin: 30px 0 0;
        padding: 0 10px;
      }
      .signature label {
        width: auto;
        border-top: 1px solid #000;
        padding-top: 6px;
        font-size: 10pt;
        font-weight: normal;
        text-align: center;
      }

      /* Avoid awkward page breaks mid-section */
      .form-container, .s-container, table, .signature {
        page-break-inside: avoid;
      }
    }
  </style>
</head>
<body>

  <nav>
    <h2>SRM TRICHY ARTS AND SCIENCE COLLEGE</h2>
    <p>THIRUCHIRAPALLI-621105</p>
  </nav>

  <div class="form-container">
    <h3>LEAVE CREDIT:EMERGENCY</h3>
    <hr>

    <form method="post" action="contact.php">

      <div class="name">
        <label>NAME:</label>
        <input type="text" id="fname" name="fname" placeholder="Enter Faculty Name">
        <button type="button" onclick="fillDepartment();fillDesignation();">Enter</button>
      </div>

      <div class="s-container">
        <label>DESIGNATION:</label>
        <input type="text" id="designation" name="designation"><br><br>

        <label>DEPARTMENT:</label>
        <input type="text" id="department" name="department"><br><br>

        <label>DATE FROM:</label>
        <input type="date" name="d_from"><br>
        <label>TO:</label>
        <input type="date" name="d_to"><br><br>

        <label>PER FROM:</label>
        <input type="time" name="time_from"><br>
        <label>TO:</label>
        <input type="time" name="time_to"><br><br>

        <label>LEAVE CREDIT:</label>
        <input type="text" name="Leave_credit"><br><br>

        <div class="reason">
          <label>REASON:</label>
          <textarea name="reason" placeholder="Enter reason here..."></textarea>
        </div>
      </div>

      <hr>

      <div class="alternate">
        <label>ALTERNATIVE ARRANGEMENTS</label>
      </div>

      <table>
        <tr>
          <th>DATE</th>
          <th>HOUR</th>
          <th>CLASS</th>
          <th>YEAR</th>
          <th>FACULTY NAME</th>
          <th>SIGNATURE</th>
        </tr>
        <tr>
          <td><input type="date" name="date_"></td>
          <td>
            <select name="hour_" class="hour">
              <option>1</option><option>2</option><option>3</option>
              <option>4</option><option>5</option><option>6</option>
            </select>
          </td>
          <td>
            <select name="class_">
              <option>BSC COMPUTER SCIENCE</option>
              <option>BCOM</option>
              <option>BCOM.CA</option>
              <option>BCA</option>
              <option>AIML</option>
              <option>BBA</option>
            </select>
          </td>
          <td>
            <select name="year_">
              <option>1 YEAR</option>
              <option>2 YEAR</option>
              <option>3 YEAR</option>
            </select>
          </td>
          <td>
            <select name="afname_">
              <option>M RAMESH KANNAN</option>
              <option>INDHUJA</option>
              <option>ANAND SELVAKUMAR</option>
              <option>AMUTHA</option>
            </select>
          </td>
          <td></td>
        </tr>
      </table>

      <br>
      <div class="signature">
        <label>SIGNATURE OF STAFF </label>
        <label>SIGNATURE OF HOD </label>
        <label>VICE PRINCIPAL  </label>
        <label >PRINCIPAL</label>
      </div>

      <center>
        <input type="submit" value="Submit">
        <button type="button" onclick="window.print()">Print</button>
      </center>

    </form>
  </div>

  <script>
    const facultyDepartments = {
      "M RAMESH KANNAN": "COMPUTER SCIENCE",
      "INDHUJA": "COMPUTER SCIENCE",
      "ANAND SELVAKUMAR": "COMPUTER SCIENCE",
      "AMUTHA": "COMPUTER SCIENCE",
    };

    const facultyDesignation = {
      "M RAMESH KANNAN": "HEAD OF THE DEPARTMENT-(HOD)",
      "INDHUJA": "ASSISTANT PROFESSOR",
      "ANAND SELVAKUMAR": "ASSISTANT PROFESSOR",
      "AMUTHA": "ASSISTANT PROFESSOR",
    };

    function fillDepartment() {
      let name = document.getElementById("fname").value.trim().toUpperCase();
      document.getElementById("department").value = facultyDepartments[name] || "Not Found";
    }

    function fillDesignation() {
      let name = document.getElementById("fname").value.trim().toUpperCase();
      document.getElementById("designation").value = facultyDesignation[name] || "Not Found";
    }
  </script>
</body>
</html>