<?php
// require_once untuk menghubungkan ke file yang dituju
require_once "Pesawat.php"; 
require_once "Bandara.php";
// Konsep inheritance, inheritance adalah pewarisan atau penurunan. Dengan inheritance bisa menurunkan isi dari sebuah class ke class lain. Isi class yang dimaksud adalah property dan method, untuk menurunkan sebuah class dengan class lain dengan menggunakan keyword extends.
class Merpati extends Pesawat implements Bandara // class merpati extends mewarisi semua property dan method dari class pesawat didalamnya ada sebuah metod sama yaitu bahan bakar untuk implements digunakan untuk mewarisi intterface
{
    private $tahunpembuatan = 1; // private(visibility), hanya dapat digunakan di dalam sebuah kelas tertentu saja 

    public function __construct($tipe)// construct merupakan sebuah method khusus atau magic method fungsi method ini untuk mempersimpel program
    {
        $this->merk = get_class($this);//get_class memanggil di luar class yang di instance
        $this->tipe = $tipe;// $this berfungsi untuk mengambil isi dari property
    }

    public function bahanBakar() {//method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        return "Aftur \n";// return berfungsi untuk mengembalikan nilai
    }


    public function setTahunPembuatan($tahunpembuatan){//method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public) set untuk mengatur nilai
       return $this->tahunpembuatan= $tahunpembuatan;// return artinya mengembalikan nilai $this berfungsi untuk mengambil isi dari property
    }

    public function getTahunPembuatan(){//method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)  get untuk mengambil nilai
       return "Tahun pembuatan {$this->tahunpembuatan}";// return artinya mengembalikan nilai $this berfungsi untuk mengambil isi dari property
}

    public function Oli() {//method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        return "Eastman 2380 \n";// return berfungsi untuk mengembalikan nilai
    }
}