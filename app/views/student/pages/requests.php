<?php
include APPROOT . '/views/includes/data.php';
include APPROOT . '/views/student/includes/header.php';
?>
<link rel="stylesheet" href="<?php echo URLROOT . '/public/css/student/request.css' ?>">
<div class="container">
<!-- 
        <h5>Select Number Of Rows</h5>
                <div class="form-group">          Show Numbers Of Rows        -->
                    <!-- <select class  ="form-control" name="state" id="maxRows"> -->
         <!--                 <option value="5000">Show ALL Rows</option>
                         <option value="5">5</option>
                         <option value="10">10</option>
                         <option value="15">15</option>
                         <option value="20">20</option>
                         <option value="50">50</option>
                         <option value="70">70</option>
                         <option value="100">100</option>
                    </select>
                    
                </div> -->
 -->

<style>

        .users-accounts {
            border-collapse: collapse;
            margin: 25px auto;
            font-size: 0.9em;
            width: 90%;
            min-width: 400px;
            border-radius: 5px 5px 0 0;
            overflow: hidden;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            color: var(--on-secondary);
        }

        .users-accounts thead tr {
            background-color: var(--primary);
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }

        .users-accounts th,
        .users-accounts td {
            padding: 12px 15px;
        }

        .users-accounts tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .users-accounts tbody tr:nth-of-type(even) {
            background-color: #FFF3F9;
        }

        .users-accounts tbody tr:last-of-type {
            border-bottom: 2px solid var(--primary);
        }

        .users-accounts tbody tr:hover {
            font-weight: bold;
            color: var(--primary);
        }

        .users-accounts tbody tr.active-row {
            font-weight: bold;
            color: var(--primary);
        }
        #myInput{
        background-image: url("http://localhost/public/img/students/search.png");
        background-position: 6px 8px;
        background-repeat: no-repeat;
        width: 44%;
        font-size: 16px;
        padding: 12px 20px 12px 40px;
        border: 1px solid #ddd;
        margin-bottom: 12px;
        background-size: 28px;
                }
    </style>
    <h4 style="margin: 30px 0;">Special Service Responses</h4>
    <div class="filter">
           
            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Tutor Responses" title="Type in a name">
    </div>

    <table class="users-accounts myTable" id= "myTable">    
        <thead center>
            
            <tr>
                <th>Lesson ID</th>
                <th>Purchase Date</th>
                <th>Tutor</th>
                <th>Subject</th>
                <th>Area</th>
                <th>Description</th>
                <th>Price</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>

    <tr>
        <td>Rajah Armstrong</td>
        <td>erat.neque@noncursusnon.ca</td>
        <td>1-636-140-1210</td>
        <td>Oct 26, 2015</td>
    </tr>
    <tr>
        <td>Kuame Parsons</td>
        <td>non.sapien@in.com</td>
        <td>1-962-122-8834</td>
        <td>Aug 2, 2015</td>
    </tr>
    <tr>
        <td>Ira Parker</td>
        <td>Vivamus.molestie.dapibus@quisturpisvitae.edu</td>
        <td>1-584-906-8572</td>
        <td>Sep 15, 2015</td>
    </tr>
    <tr>
        <td>Dante Carlson</td>
        <td>dis.parturient@mi.co.uk</td>
        <td>1-364-156-9666</td>
        <td>Nov 28, 2015</td>
    </tr>
    <tr>
        <td>Nathan Bernard</td>
        <td>Etiam.vestibulum.massa@nonummy.net</td>
        <td>1-646-420-3211</td>
        <td>Aug 4, 2016</td>
    </tr>

        </tbody>
        
    </table>

</div>
<!-- <script type="text/javascript" src="<?php echo URLROOT . '/app/views/student/pages/requestsjs.js' ?>"></script> -->
<!--        Start Pagination -->
     <!--        <div class='pagination-container' >
                <nav>
                  <ul class="pagination">
            
            <li data-page="prev" >
                                     <span> < <span class="sr-only">(current)</span></span>
                                    </li> -->
                   <!-- Here the JS Function Will Add the Rows
        <li data-page="next" id="prev">
                                       <span> > <span class="sr-only">(current)</span></span>
                                    </li>
                  </ul>
                </nav>
            </div> -->

</div> 


  <script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
<?php
include APPROOT . '/views/includes/footer.php';
?>