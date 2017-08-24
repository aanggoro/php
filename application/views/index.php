ini adalah halaman utama, pemilik situs ini adalah <?php echo $nama; ?> <br>
status : <?php echo $status; ?>

<?php
  $plain_text = 'hello';
  $key = bin2hex($this->encryption->create_key(16));
  $encrypt = $this->encryption->encrypt($plain_text);

  echo $key.'<br>';

  echo $encrypt.'<br>';
  echo $this->encryption->decrypt($encrypt);
 ?>
