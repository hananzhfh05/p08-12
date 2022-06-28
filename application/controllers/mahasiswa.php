<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {

public function index(){

    $this->load->model('mahasiswa_models','mhs1');
    $this->mhs1->id=1;
    $this->mhs1->nim='0110121054';
    $this->mhs1->nama='Faiz Fikri';
    $this->mhs1->gender='L';
    $this->mhs1->ipk=3.75;

    $this->load->model('mahasiswa_models','mhs2');
    $this->mhs2->id=2;
    $this->mhs2->nim='0110121055';
    $this->mhs2->nama='Hana Nazhifah';
    $this->mhs2->gender='P';
    $this->mhs2->ipk=4.0;

    $this->load->model('mahasiswa_models','mhs3');
    $this->mhs3->id=3;
    $this->mhs3->nim='0110121056';
    $this->mhs3->nama='Tiara Andini';
    $this->mhs3->gender='P';
    $this->mhs3->ipk=3.25;
        
    $list_mhs = [$this->mhs1, $this->mhs2, $this->mhs3];

    $data['mahasiswa1']=$this->mhs1;
    $data['list_mahasiswa']=$list_mhs;

    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/index.php',$data);
    $this->load->view('layout/footer');
}
public function create(){
    $data['judul']='Form Kelola Mahasiswa';
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/create',$data);
    $this->load->view('layout/footer');
}
public function save(){
    $this->load->model('mahasiswa_models','mhs1');

    $this->mhs1->nim = $this->input->post('nim');
    $this->mhs1->nama = $this->input->post('nama');
    $this->mhs1->gender = $this->input->post('jk');
    $this->mhs1->prodi = $this->input->post('prodi');
    $this->mhs1->tmp_lahir = $this->input->post('tmp_lahir');
    $this->mhs1->tgl_lahir = $this->input->post('tgl_lahir');
    $this->mhs1->ipk = $this->input->post('ipk');

    // die(print_r($this->mhs1));
    $data['mhs1']=$this->mhs1;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('mahasiswa/view',$data);
    $this->load->view('layout/footer');
}
}