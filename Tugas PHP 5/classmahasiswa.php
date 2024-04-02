<?php
// awali nama class dengan huruf besar
class Mahasiswa{
    // member 1 - variabel
    public $NIM;
    public $nama;
    public $univ;
    public $matkul;
    public $nilai;

    // member 2 - constructor
    public function __construct($NIM,$nama,$univ,$matkul,$nilai){
        $this->NIM=$NIM;
        $this->nama=$nama;
        $this->univ=$univ;
        $this->matkul=$matkul;
        $this->nilai=$nilai;
    }

    public function grade(){
        if ($this-> nilai >=85 && $this-> nilai <100 ) return "A";
        else if ($this-> nilai >=75 && $this-> nilai <85 ) return "B";
        else if ($this-> nilai >=60 && $this-> nilai <75 ) return "C";
        else if ($this-> nilai >=40 && $this-> nilai <60 ) return "D";
        else if ($this-> nilai >=0 && $this-> nilai <40 ) return "E";
        else return "";
    }
    
    public function keterangan(){
        switch($this->grade()){
            case 'A' : 
                return "Sangat Memuaskan";
            case 'B' : 
                return "Memuaskan";
            case 'C' : 
                return "Cukup";
            case 'D' : 
                return "Kurang";
            case 'E' : 
                return "Sangat Kurang";
            default:
                return "";
        }
    }

    public function status(){
        if($this->nilai>=65) return "Lulus";
        else return "Tidak Lulus" ;
    }
}
?>