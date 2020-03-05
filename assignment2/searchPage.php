<?php
//echo "searchPage";
$sql = "select `FirstName`, `LastName`, `Email` from $db.Players where FirstName like '%$fistname%' or LastName like '%$lastName%' or email like '%$email%' order by firstName Asc";
$result = $con->query($sql);
print<<<HTML
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">
        </div>

        <div class="col-md-10">

HTML;
echo "<table><th>First name</th><th>Last Name</th><th>Email</th>";
while ($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row['FirstName']."</td>";
    echo "<td>".$row['LastName']."</td>";
    echo "<td>".$row['Email']."</td>";
}
echo "</table></div></div></div>";


 ?>
