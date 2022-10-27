<?php include  'header.php'?>

<div class = "content">
<table class="table" style = "margin-top: 4.2rem">
  <thead>
    <tr>
      <th scope="col">S.NO.</th>
      <th scope="col">CANDIDATE NAME</th>
      <th scope="col">POSITION</th>
      <th scope="col">YEAR PASS-OUT</th>
      <th scope="col">RESUME</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $sql = "Select name, apply, year, link from candidates";
        $result = mysqli_query($con, $sql);
        $i = 0;
        if($result -> num_rows > 0){
          while($rows = $result->fetch_assoc()){
            echo'
            <tr>
          <th scope="row">'.++$i.'</th>
          <td>'.$rows['name'].'</td>
          <td>'.$rows['apply'].'</td>
          <td>'.$rows['year'].'</td>
          <td><a href = "'.$rows['link'].'" ><i class="fa-solid fa-cloud-arrow-down fa-2x" style = "color: #0EA3FE ;"></i></td>
        </tr>';}}
        else{
          echo"";
        }
    ?>
  </tbody>
</table>
</div>