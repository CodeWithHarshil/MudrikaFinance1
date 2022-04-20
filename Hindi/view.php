<!DOCTYPE html>
<!-- Code By Webdevtrick ( https://webdevtrick.com ) -->
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Bootstrap Datatable | Webdevtrick.com</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css'>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,500" rel="stylesheet"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
  <link rel="stylesheet" href="style.css">
</head>

<body>


<div class="row">
<div class="container"> 
<?php
include("config.php");
$result1=mysqli_query($conn,"SELECT * from career ORDER by id DESC")
?>


  <h1>Career Details</h1> 
  <table class="table responsive" id="sort">
	<thead>
		<tr>
      <th scope="col">id</th>
      <th scope="col">First Name</th>
      <th scope="col">Last Name</th>
      <th scope="col">Apply Job</th>
      <th scope="col">Email</th>
      <th scope="col">Mobile</th>
      <th scope="col">Message</th>
      <th scope="col">upload</th>
      <th scope="col">File Uploaded</th>
		</tr>
	</thead>
	<tbody>
  <?php
  while($res = mysqli_fetch_array($result1)) {         
    echo "<tr>";
    echo "<td>".$res['id']."</td>";
  
   //  echo "<td>".$res['AGENT_ID']."</td>";                 
    echo "<td>".$res['FNAME']."</td>";
    echo "<td>".$res['LNAME']."</td>";
    echo "<td>".$res['SELECT1']."</td>";    
    echo "<td>".$res['EMAIL']."</td>";    
    echo "<td>".$res['MOBILE']."</td>";    
    echo "<td>".$res['TEXT1']."</td>";    
    echo "<td>".$res['uploaded_on']."</td>";  
  //  echo "<img src= $res[file_name] >"; 
    echo "<td><a href='file.php?id=$res[id]'>UploadFile</a>";

    
    
  
   }
?>

	</tbody>
</table>
</div>
</div>
<div class="row">
<div class="container"> 
<?php
include("config.php");
$result=mysqli_query($conn,"SELECT * from contact ORDER by id DESC")
?>


  <h1>Contact Details</h1> 
  <table class="table responsive" id="sort">
	<thead>
		<tr>
    <th scope="col">id</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Subject</th>
      <th scope="col">Message</th>
		</tr>
	</thead>
	<tbody>
  <?php
  while($res = mysqli_fetch_array($result)) {         
    echo "<tr>";
    echo "<td>".$res['id']."</td>";
  
    //  echo "<td>".$res['AGENT_ID']."</td>";                 
     echo "<td>".$res['NAME']."</td>";
     echo "<td>".$res['EMAIL']."</td>";
     echo "<td>".$res['SUBJECT']."</td>";    
     echo "<td>".$res['MSG']."</td>";    
}
?>

	</tbody>
</table>
</div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/js/dataTables.bootstrap.min.js"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.0/moment.min.js'></script>
<script  src="function.js"></script>

</body>
</html>

<style>
  /* Code By Webdevtrick ( https://webdevtrick.com ) */
table {
  width: 100%;
  border-collapse: collapse;
}

tr:nth-of-type(odd) {
  background: #f4f4f4;
}

tr:nth-of-type(even) {
  background: #fff;
}

th {
  background: #5cb85c;
  color: #ffffff;
  font-weight: 300;
}

td,
th {
  padding: 10px;
  border: 1px solid #ccc;
  text-align: left;
}

td:nth-of-type(1) {
  font-weight: 500 !important;
}

td {
  font-family: 'Roboto', sans-serif !important;
  font-weight: 300;
  line-height: 20px;
}

span {
  font-style: italic
}

@media only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px) {

  table.responsive,
  .responsive thead,
  .responsive tbody,
  .responsive th,
  .responsive td,
  .responsive tr {
    display: block !important;
  }

  .responsive thead tr {
    position: absolute !important;
    top: -9999px;
    left: -9999px;
  }

  .responsive tr {
    border: 1px solid #ccc;
  }

  .responsive td {
    border: none;
    border-bottom: 1px solid #eee !important;
    position: relative !important;
    padding-left: 25% !important;
  }

  .responsive td:before {
    position: absolute !important;
    top: 6px;
    left: 6px;
    width: 45%;
    padding-right: 10px;
    white-space: nowrap !important;
    font-weight: 500 !important;
  }

 
  .responsive td:before {
    content: attr(data-table-header) !important;
  }
}
</style>

<script>$(document).ready(function() {
   $("#sort").DataTable({
      columnDefs : [
    { type : 'date', targets : [3] }
],  
   });
});</script>