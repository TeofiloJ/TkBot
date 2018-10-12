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

      <div class='row border'>
        <div class='col-sm-6'>

        </div>
        <div class='col-sm-6'>
          <img class='img-fluid portrait' src='https://i.imgur.com/aOHX45D.jpg'/>
        </div>
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
          getData(character, command);
        
        });
      
        $("#command").change(function(event) {
          event.preventDefault();
          var character = $("input#character").val();
          var command = $("input#command").val();     
          getData(character, command);
        
        });


    function getData(character, command){
      var test = "http://localhost/TkBot/index.php/api/characters/lars";
      console.log(test);
      jQuery.ajax({
      type: "GET",
      url: "http://localhost/TkBot/index.php/api/movesets/lars",
      dataType: 'json',
      success: function(data) {
        var tab = document.getElementByID("tableau")
        while(tab.firstChild){
          tab.removeChild(tab.firstChild);
        }
        
        for (var ligne in data){
          var row = document.createElement("tr");
          for (var element in ligne){
            var cell = document.createElement("td");
                cell.innderText = data[element];
                row.appendChild(cell);
          }
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
