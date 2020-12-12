<?php
error_reporting(0);
$link = mysqli_connect("localhost", "root", "", "Customer");
mysqli_set_charset($link, 'utf8');
$sql = "Select * from members";
$result = mysqli_query($link, $sql);
$dbarr = mysqli_fetch_all($result, MYSQLI_ASSOC);
$num_record = mysqli_num_rows($result);
echo "Number of email sending: ".$num_record."<p>";
echo '<style>
div {
  display: flex;
  justify-content: center;
}
.styled-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  font-family: sans-serif;
  min-width: 400px;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
}

.styled-table th,
.styled-table td {
  padding: 12px 15px;
  text-align: center;
}

.styled-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}
</style>
<div>
<table class="styled-table"  style="width: 40%">
  <thead>
    <tr>
      <th>NO.</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>E-mail</th>
      <th>Product</th>
    </tr>
  <thead>
';
foreach ($dbarr as $row){

echo '
  <tbody>
    <tr style="text-align: center;">
      <td>'.$row['countID'].'</td>
      <td>'.$row['first_name'].'</td>
      <td>'.$row['last_name'].'</td>
      <td>'.$row['email'].'</td>
      <td>'.$row['product'].'</td>
    </tr>
  <tbody>
';
}
echo '
</table>
</div>';
mysqli_close($link);
?>

<a href="../index.html">homepage</a>