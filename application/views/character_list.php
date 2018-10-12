<div id="list-character" class="container-fluid col"></div>

<script>
    function getCharacter(){
      jQuery.ajax({
      type: "GET",
      url: "<?php echo base_url()?>" + "index.php/api/characters/",
      dataType: 'json',
      success: function(data) {
          var list = document.getElementById('list-character');
          for(var character of data){
              var char_link = document.createElement('a');
              char_link.href="<?php echo base_url()?>" + "index.php/api/characters/"+character.name
              var char_img = document.createElement('img');
              char_img.src = character.portrait;
              char_img.classList.add('portrait-link');

              char_link.appendChild(char_img);
              list.appendChild(char_link);
          }
      }
    })
    }

    getCharacter();


</script>