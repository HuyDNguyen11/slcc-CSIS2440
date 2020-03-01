<?php
//write the search statment
$search = "select `PlanetName`,`PosX`, `PosY`, `PosZ`, `Description`, `Faction`, `Active` from heroku_521233846929941.Planets where PlanetName like '%$name%'order by PlanetName Asc; ";
$return = $conn->query($search);
if (!$return) {
    $message = "Whole query " . $search;
    echo $message;
    die('Invalid query: ' . mysqli_error($conn));
}
echo "<table><th>Name</th><th width='10%'>X,Y,Z</th><th>Description</th><th>Faction</th>"
 . "<th>Station</th>";
while ($row = $return->fetch_assoc()) {
    echo "<tr><td>".$row['PlanetName']."</td>";
    echo "<td>".$row['PosX'].", ".$row['PosY'].", ".$row['PosZ']."</td>";
    echo "<td>".$row['Description']."</td>";
    echo "<td>".$row['Faction']."</td>";
    echo "<td>".$row['Active']."</td></tr>";

    }
echo "</table>";
