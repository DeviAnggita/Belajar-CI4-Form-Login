<?php

namespace App\Controllers;

class Home extends BaseController
{
    //localhost:8080
    public function index() 
    {
        return view('welcome_message');
    }

    //localhost:8080//home/coba
    public function coba() 
    {
        echo "Hello World..coba";
    }

    //localhost:8080//home/cetaknama/Devi/19
    public function cetakNama($nama, $umur)
    {
        echo "Nama Saya :".$nama."</br>";
        echo "Umur Saya :".$umur."</br>";
    }

    //penggunaan remap sama ke function remaap 
    //localhost:8080/home/coba => akan ke halaman index (welcome message)
    //localhost:8080/home/index => ini rahasia
    //===================================================================
    // public function _remap($method)
    // {
    //     if($method === 'coba') { 
    //         return $this -> index();
    //     } else
    //     {
    //         return $this -> rahasia();
    //     }
    // }
    
    //hanya bisa diakses di kelas ini
    //localhost:8080/home/rahasia => tidak bisa diakses 
   
    private function rahasia()
    {
        echo "ini rahasia";
    }


    public function cetakView()
    {
        return view('cetak_view');
    }

    //localhost:8080/home/cetakNamaView/Devi/20
    public function cetakNamaView($nama,$umur)
    {
        $data['nama']=$nama;
        $data['umur']=$umur;
        $data['fakultas']="SV";
        $data['prodi']="D3TI";
        //echo view ('cetak_nama', $data , ['cache' =>60]);
        return view('cetak_nama',$data);
    }

    public function cetakArray()
    {
        $data =[
            'title'    => 'My Real Title',
            'heading'    => 'My Real Heading',
        ];
        $data['todo_list']=['Clean House','Call Mom','Run Errands'];
        return view('cetak_array',$data);
    }

    public function cetakObj()
    {
        $this->nama="devi";
        $this->umur=19;

        $data =[
            'title'    => 'My Real Title',
            'heading'    => 'My Real Heading',
        ];

        $data['obj']=$this;
        return view('cetak_obj', $data);
    }

}
