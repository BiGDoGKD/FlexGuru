<!-- FONT AWESOME CSS FOR ICONS  -->
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

<!-- ALL CSS STYLESHEETS GOES HERE  -->
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/crystalys-v2.css' ?>">
<style>
	header{
    width:100vw;
    height:10vh;
    background-color:blueviolet;

  }

  footer{
    width:100vw;
    height:10vh;
    background-color:blueviolet;
    position:absolute;
    bottom:0;

  }

  .container{
    background-color: #cacaca;
      display: block;
      height:90vh;
      width:80vw;
      margin:5px auto;
      transform:translate(0,4%);
      border-radius: 10px;
      
  }

  .cards{
    position: absolute;
    top: 50px;
    left: 5%;
    height: 90px;
    width: 200px;
    border-radius: 20px;
    background-color: #7879F1;
    color: white;
    font-size: 22px;
    font-family: Arial, Helvetica, sans-serif;
    line-height: 200%;
    padding-left: 10px;
  }
  
  .box{
    position: absolute;
    top: 160px;
    left: 5%;
    background-color: white;
    height: 65%;
    width: 90%;
    border-radius: 20px;
  }
  .styled-table {
    border-collapse: collapse;
    margin-top: 50px;
    margin-left: 5% ;
    width: 80%;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.styled-table thead tr {
    background-color: #7879F1;
    color: #ffffff;
    text-align: left;
}
.styled-table th,
.styled-table td {
    padding: 12px 15px;
}
.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #7879F1;
}

@media screen and (max-width: 850px){
    .styled-table {
        margin-left: auto ;
    }
  }

  </style>
 
<div class="container">
  <h5 style="text-align: center; color: #8d8d8d; font-family: Arial, Helvetica, sans-serif;">User Complaints</h5>
  <div class="cards">
    Total Complaints <br> 05
  </div>
  <div class="box">
    <center>
      <table class="styled-table">  
        <thead>
          <tr>
            <th>Complaint ID</th>
            <th>User name</th>
            <th>Email</th>
            <th>Type</th>
            <th>Time</th>
            <th>Complaint</th>
            <th>Processing</th>
            <th>Delete</th>  
          </tr>
        </thead>
        <tbody>
          <?php foreach ($data as $row): ?>
          <tr>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
            <td><?php echo  $row["complainID"] ;?></td>
          </tr>
          <?php endforeach;?>     
        </tbody>
      </table>
    </center>   
  </div>
</div>
