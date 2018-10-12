<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

	<div class="container-fluid">

  <div class="container">
        <form>
          <div class="row">
            <div class="col-md-3">            
                <div class="input-group mb-2 mt-2">
                  <div class="input-group-prepend">
                    <div class="input-group-text">
                      Character
                    </div>
                  </div>
                  <input type="text" class="form-control" id="character" placeholder="Lars">
                </div>
            </div>
            <div class="col-md-9">
              <div class="input-group mb-2 mt-2 ">
                <div class="input-group-prepend">
                  <div class="input-group-text">Options</div>
                </div>
                <input type="text" class="form-control" id="command" placeholder="f1+2">
              </div>
            </div>
          </div>
        </form>

      
          <script>
   function getCharacter(character){
      character = character?character+"/":"";
      var test = escape("<?php echo base_url()?>" + "index.php/api/characters/" + character);
      console.log(test);
      jQuery.ajax({
      type: "GET",
      url: "<?php echo base_url()?>" + "index.php/api/characters/" + character,
      dataType: 'json',
      success: function(data) {
      var char = document.getElementById("character")

      var nom = document.getElementById("nom");
      nom.innerText=data[0].proper_name;
      var image = document.getElementById("image");
      image.src=data[0].portrait;

        console.log(data);      

      }
    })
    }
    </script>
    <div class='row' id='character'>
          <img id="image" class='img-fluid portrait mb-2' src=''/>
          <p id="nom" class='col mb-2'></p>       
      </div>

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
        <tbody id="tableau">
        <script>
            // Ajax post

        $("#character").change(function(event) {
          event.preventDefault();
          var character = $("input#character").val();
          var command = $("input#command").val();
          getCharacter(character);     
          getData(character, command);
          
        
        });
      
        $("#command").change(function(event) {
          event.preventDefault();
          var character = $("input#character").val();
          var command = $("input#command").val();
          getCharacter(character);     
          getData(character, command);
        
        });

    function getData(character, command){
      character = character?character+"/":"";
      command = command?command:"";
      var test = "<?php echo base_url()?>" + "index.php/api/movesets/" +escape( character + command);
      console.log(test);
      jQuery.ajax({
      type: "GET",
      url: "<?php echo base_url()?>" + "index.php/api/movesets/" + character + command,
      dataType: 'json',
      success: function(data) {
        var tab = document.getElementById("tableau")
        while(tab.firstChild){
          tab.removeChild(tab.firstChild);
        }
        console.log(data);
        for (var ligne of data){
          var row = document.createElement("tr");

          var cell = document.createElement("td");
          cell.innerText = ligne.command;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.hit_level;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.damage;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.start_up_frame;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.block_frame;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.hit_frame;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.counter_hit_frame;
          row.appendChild(cell);
          var cell = document.createElement("td");
          cell.innerText = ligne.notes;
          row.appendChild(cell);


          tab.appendChild(row);
        }

      }
    })
    }
</script>


    </div>
  </div>
  
  </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
