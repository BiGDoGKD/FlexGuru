<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';

?>

<style>
  header {
    width: 100vw;
    height: 10vh;
    background-color: blueviolet;

  }

  .input {
    font-weight: 500;
    width: 350px;
    font-size: 14px;
    color: #495055;
    padding: 13px 25px;
    border-radius: 24px;
    border: 2px solid #d9d9d9;
    outline: none;
  }

  footer {
    width: 100vw;
    height: 10vh;
    background-color: blueviolet;
    position: absolute;
    bottom: 0;

  }

  .container {
    display: flex;
    height: 600px;
    width: 80vw;
    margin: 0 auto;
    transform: translate(0, 4%)
  }

  .form {
    position: absolute;
    top: 0;
    left: 40%;

    height: 60%;
    width: 70%;

  }

  .field {
    height: 20%;

  }

  .field span {
    position: absolute;
    left: 50px;
    margin: 20px;
    padding: 10px;

  }

  input[type=text],
  select {
    position: absolute;
    right: 100px;
    margin: 20px;
    overflow-y: auto;
    width: 60%;
    padding: 10px;
    border: 2px solid #d9d9d9;
    border-radius: 24px;
    box-sizing: border-box;
    resize: vertical;
    font-weight: 500;

  }

  .button {
    position: absolute;
    right: 100px;
    background-color: #7879F1;
    color: white;
    top: 466px;
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

  .image {

    position: absolute;
    width: 250px;
    height: 300px;
    left: 50px;
    top: 230px;
  }

  @media only screen and (max-width: 1000px) {
    .field span {
      margin: 0;
    }

    input[type=text],
    select {
      left: 20px;
      margin: 35px;
    }

    .button {
      right: 30%;
    }
  }

  #userimg {
    width: 440px;
    position: relative;
    top: -121px;
    left: 166px;
  }

  #complaint {
    position: absolute;
    left: 232px;
    top: 245px;
  }
</style>






<div class="image">

  <img src="<?php echo URLROOT . '/public/img/svg/complaint.svg' ?>" id="userimg" alt="">

</div>

<div class="container">

  <div class="form">

    <form action="<?php echo URLROOT; ?>/student/complaint" method="POST">

      <div class="field"><span>Username</span><input class="input" type="text" name="username" id="username" placeholder="username"></div>
      <div class="field"><span>Email</span><input type="text" name="email" id="email" placeholder="email"></div>
      <div class="field"><span>Complaint type</span>

        <select name="type">

          <option value="">--Select Type--</option>
          <option value="Technical related issues">Tutor Related Complaints</option>
          <option value="Service related issues">Platform related complaints</option>
          <option value="Service related issues">Other</option>
        

        </select>

      </div>

      <div class="field"><span>Complaint</span>

        <textarea cols="50" rows="10" name="complaint" id="complaint"></textarea>

      </div>
      <button type="submit" name="submit" class="button">Submit</button>
    </form>
  </div>
</div>

<?php include APPROOT . '/views/includes/footer.php'; ?>