<?php

require('dbConnect.php');
    $sql = "SELECT * FROM `trips` ORDER BY id DESC";
//excute the query

$result = mysqli_query($conn,$sql);

//check if the results exist
$numrows = mysqli_num_rows($result);

?>
<div class="container mt-5 text-white">

    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Start</th>
                        <th scope="col">Destinatin</th>
                        <th scope="col">Date</th>
                        <th scope="col">Heads</th>
                        <th scope="col">Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
  if($numrows>0){
      //get the results
      //get the results an acco
      while($row = mysqli_fetch_assoc($result)){
        //echo $row['name'].$row['phone'];
      
        echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['phone']."</td>";
            echo "<td>".$row['start']."</td>";
            echo "<td>".$row['destination']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['heads']."</td>";
            echo "<td>".$row['duration']."</td>";
            $id = $row['id'];
            
           
        echo "</tr>";
      }

  }else{
      echo "<h3>No students available</h3>";
  }

  ?>
                </tbody>
            </table>
        </div>
    </div>
</div>