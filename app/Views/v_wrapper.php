<?php
  if (session()->get('id')!='')
  {
    echo view('layout/v_head.php');
    echo view('layout/v_header.php');
    echo view('layout/v_navbar.php');
    echo view('layout/v_content.php');
    echo view('layout/v_footer.php');
    echo view('layout/v_script.php');
  }
  else{
    echo view('v_login');
  }
?>