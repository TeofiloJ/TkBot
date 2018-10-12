<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<div class="container-fluid">

  <div class="container">

    <div class="row">
      <div class="col-md-12">
        <form>
          <div class="form-row">
            <div class="col">
              <input type="text" class="form-control" placeholder="Enter a value, eg : Lars 11f">
            </div>
          </div>
        </form>
      </div>
    </div>

    <?php
      echo "<div class='row' display='none'>";
      echo "  <div class='col-sm-6'>";
      echo "";
      echo "  </div>";
      echo "  <div class='col-sm-6'>";
      echo "    <img class='img-fluid portrait' src='https://i.imgur.com/aOHX45D.jpg'/>";
      echo " </div>";
      echo "</div>";
    ?>

    <div class="results">

          <!--Table-->
      <table id="tablePreview" class="table">
      <!--Table head-->
        <thead>
          <tr>            
            <th>Command</th>
            <th>Hit level</th>
            <th>Damage</th>
            <th>Start up frame</th>
            <th>Block frame</th>
            <th>Hit frame</th>
            <th>Counter hit frame</th>
            <th>Note</th>
          </tr>
        </thead>
        <!--Table head-->
        <!--Table body-->
        <tbody>
          <tr>
            <td>Otto</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>Mark</td>
          </tr>
        </tbody>
        <!--Table body-->
      </table>
      <!--Table-->
    </div>
  </div>
  
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
