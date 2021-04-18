<?php
  $c_name = $this->request->getParam('controller');
  $a_name = $this->request->getParam('action');

  // echo $a_name;
  // exit;
?>
<nav class="navbar navbar-expand-lg navbar-light ">

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mx-auto">

          <li class=<?= $a_name == 'home'?'active':'' ?>>
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'blogs','action'=>'home']); ?>>Home</a>
          </li>

          <li class="<?= $a_name == 'about'?'active':'' ?>">
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'blogs','action'=>'about']); ?>>About</a>
          </li>
          <li class="<?= $a_name == 'contact'?'active':'' ?>">
            <a class="nav-link" href=<?= $this->Url->build(['controller'=>'blogs','action'=>'contact']); ?>>Contact</a>
          </li>
        </ul>
      </div>

    </nav>