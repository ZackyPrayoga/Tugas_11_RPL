<?php

  class Siswa {
      public  $nama       = "Zacky";
      public $kelas       = "11";
      protected  $jurusan = "RPL";
      private $nis        = "06252";
      function tampilkanDataSiswa(){
          echo "nama    : $this->nama    <br>";
          echo "kelas   : $this->kelas   <br>";
          echo "jurusan : $this->jurusan <br>";
          echo "nis     : $this->nis     <br>";
      }
  }  
  
  class rpl extends siswa{
      
  }
  
  $siswa1 = new Siswa("");
  $siswa1->tampilkanDataSiswa();
?>