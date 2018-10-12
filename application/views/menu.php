<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url() ?>index.php/tkbot/characters">
  <img src="<?php echo base_url() ?>assets/img/logo.png" width="70" height="60" class="d-inline-block align-top" alt="">
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="<?php echo base_url() ?>index.php/tkbot/frame">Frames</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?php echo base_url() ?>index.php/api">API</a>
    </li>
  </ul>
  </div>
</nav>