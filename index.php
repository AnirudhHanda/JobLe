<?php 
  include  'header.php';
  
?>


<!-- Page content -->
<div class="content">
<p>
  <!-- <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
    Link with href
  </a> -->
  <button class="btn btn-primary" style = "margin-top: 65px;" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
    Post Job
  </button>

<div class="collapse" id="collapseExample">
  <div class="card card-body" style = "margin-right: 22px">
  <form  method = "Post">
  <div class="form-group">
    <label for="Company name">Company Name</label>
    <input type="text" class="form-control" id="" name = "cname">
  </div>
  <div class="form-group">
    <label for="exampleInputPosition">Position</label>
    <input type="text" class="form-control" id="exampleInputPosition" name = "pos">
  </div>
  <div class="form-group">
    <label for="JobDesc">Job Description</label>
    <input type="text" class="form-control" id="JobDesc" name = "jdesc">
  </div>
  <div class="form-group">
    <label for="skills">Skills</label>
    <input type="text" class="form-control" id="skills" name = "skills">
  </div>
  <div class="form-group">
    <label for="CTC">CTC</label>
    <input type="text" class="form-control" id="CTC" name = "ctc">
  </div>
  <button type="submit" class="btn btn-primary" name = "go" value = "">Submit</button>
</form>
  </div>
</div>
</p>
<table class="table" style = "margin-top: 20px">
  <thead>
    <tr>
      <th scope="col">S.NO</th>
      <th scope="col">COMPANY NAME</th>
      <th scope="col">POSITION</th>
      <th scope="col">CTC</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
      <th scope="row">1</th>
      <td>TCS</td>
      <td>Software Developer</td>
      <td>8 LPA</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Quantum</td>
      <td>Research Head</td>
      <td>12 LPA</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Zurich Polytechnic</td>
      <td>Physics Intern</td>
      <td>12000 PM</td>
    </tr> -->
    <?php 
      $sql = "Select id, cname, position, CTC FROM jobs";
      $result = mysqli_query($con, $sql);
      $i=0;
      if($result->num_rows >=0){
        while($rows=$result->fetch_assoc()) {
          echo'
          <tbody>
          <tr>
            <td>'.++$i.'</td>
            <td>'.$rows['cname'].'</td>
            <td>'.$rows['position'].'</td>
            <td>'.$rows['CTC'].'</td>;
          </tr>';
        }
        
      }
      
    ?>
  </tbody>
</table>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>


</html>
