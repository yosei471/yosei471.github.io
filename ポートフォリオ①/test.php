<?php
  phpinfo();
?>
<?php
    $error = [];
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
      $post = filter_input_array(INPUT_POST, $_POST);
      if ($post['name'] === ''){
        $error['name'] = 'blank';
      }
      $error['name'] = ((string) filter_input(INPUT_POST, 'name') === '') ? 'blank' : null;
    }
  
?>