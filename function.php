<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'kuizonline')
    or die('sambungan gagal');
  echo "berjaya";
}
