<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/affiliate/includes/header.php';

?>

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
      display: flex;
      height:100vh;
      width:80vw;
      margin:0 auto;
      transform:translate(0,4%)
      
  }
  .form{
    position: absolute;
    top: 0;
    left: 0;

    height: 80%;
    width: 100%;

  }

  .field{
    height: 20%;
    
  }
  .field span{
    position: absolute;
    left: 50px;
    margin: 20px;
    padding: 10px;
    
  }

  input[type=text], select{
    position: absolute;
    right: 100px;
    margin: 20px;
    overflow-y: auto;
    width: 60%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    resize: vertical;
  }

  .button{
    position: absolute;
    right: 100px;
    background-color: #7879F1;
    color: white;
    border: none;
    border-radius: 25px;
    cursor: pointer;
    padding: 8px 50px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 15px;
    font-family: 'Roboto', sans-serif;
    margin: 10px;
    
  }

  @media only screen and (max-width: 1000px){
    .field span{
        margin: 0;
    }
    input[type=text], select{
        left: 20px;
        margin: 35px;
    }
    .button{
        right: 30%;
    }
  }
    
  </style>
 
<div class="container">
  <div class="form">
    <form action="../complaint" method="get">
        <div class="field"><span>Username</span><input type="text" name="username" id="username" placeholder="username"></div>
        <div class="field"><span>Email</span><input type="text" name="email" id="email" placeholder="email"></div>
        <div class="field"><span>Complaint type</span>
            <select name="type">
                <option value="">--Select Type--</option>
                <option value="">Tutor</option>
                <option value="">Student</option>
                <option value="">Affiliate</option>
            </select></div>
        <div class="field"><span>Complaint</span><input type="text" name="complaint" id="complaint"></div>
        <button type="submit" name="submit" class="button">Submit</button>
    </form>
  </div>
</div>

<?php include APPROOT . '/views/includes/footer.php';?> 