<?php

// membuat class 
// Diawali dengan menuliskan keyword Class, diikuti nama dan dibatasi dengan { } untuk menyimpan property dan method 
// Class Pesawat {
//    public $p; property
// public function a() {
// }
// }

abstract class Pesawat// Abstract Class adalah sebuah class yang tidak bisa di-instansiasi dan berperan sebagai ‘kerangka dasar’ bagi class turunannya. 
{
    protected $merk;// protected, property dan methodnya hanya dapat digunakan di dalam sebuah kelas beserta turunannya. property variabel yang ada di dalam class. visibility (protected)
    protected $tipe;// protected, property dan methodnya hanya dapat digunakan di dalam sebuah kelas beserta turunannya. property variabel yang ada di dalam class. visibility (protected)
    protected $ketinggian = 0; // protected, property dan methodnya hanya dapat digunakan di dalam sebuah kelas beserta turunannya. property variabel yang ada di dalam class. visibility (protected)

    public function nyalakan() { // public, dapat digunakan dimana saja, bahkan diluar kelas. method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        echo "Menyalakan {$this->merk} {$this->tipe} \n";// echo berfungsi untuk mencetak ke layar 
    }

    public function matikan() { //  method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        echo "Matikan {$this->merk} {$this->tipe} \n";// echo berfungsi untuk mencetak ke layar $this berfungsi untuk mengambil isi dari property
    }

    public function KetinggianUp() { // public, dapat digunakan dimana saja, bahkan diluar kelas.method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        if ($this->ketinggian < 5) { // if berfungsi untuk mengeksekusi beberapa kode jika satu kondisi benar $this berfungsi untuk mengambil isi dari property
            $this->ketinggian++; // $this berfungsi untuk mengambil isi dari property
            echo "Ketinggian naik {$this->merk} {$this->tipe} \n"; // echo berfungsi untuk mencetak ke layar $this berfungsi untuk mengambil isi dari property
        }
    }

    public function KetinggianDown() { // public, dapat digunakan dimana saja, bahkan diluar kelas. method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        if ($this->ketinggian !=  0) { // if berfungsi untuk mengeksekusi beberapa kode jika satu kondisi benar $this berfungsi untuk mengambil isi dari property
            $this->ketinggian--;// $this berfungsi untuk mengambil isi dari property
            echo "ketinggian turun {$this->merk} {$this->tipe} \n";// echo berfungsi untuk mencetak ke layar $this berfungsi untuk mengambil isi dari property
        }
    }
    abstract public function bahanBakar(); //method abstract implementasinya ada di kelas turunanya.

    public function getMerk() { // public, dapat digunakan dimana saja, bahkan diluar kelas.method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        return $this->merk . "\n"; // return berfungsi untuk mengembalikan nilai $this berfungsi untuk mengambil isi dari property
    }

    public function getTipe() { // public, dapat digunakan dimana saja, bahkan diluar kelas.method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public)
        return $this->tipe. "\n"; // return artinya mengembalikan nilai $this berfungsi untuk mengambil isi dari property
    }

    public function getKetinggian() { // public, dapat digunakan dimana saja, bahkan diluar kelas.method adalah function yang ada di dalam class.cara membuat method sama seperti function didalam php penulisannya sama tapi di tambah dengan visibility didepannya. (public) getketinggian artinya Get untuk mengambil nilai.
        return "ketinggian sekarang : {$this->ketinggian} \n"; // return berfungsi untuk mengembalikan nilai // $this berfungsi untuk mengambil isi dari property
    }
}