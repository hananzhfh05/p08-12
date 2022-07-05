<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dosen extends CI_Controller {

public function index(){

    $this->load->model('dosen_models','dsn1');
    $this->dsn1->id=1;
    $this->dsn1->nidn='123456';
    $this->dsn1->nama='Indah Puspita';
    $this->dsn1->gender='P';
    $this->dsn1->pendidikan='S1';

    $this->load->model('dosen_models','dsn2');
    $this->dsn2->id=2;
    $this->dsn2->nidn='789101';
    $this->dsn2->nama='Fitria Sari';
    $this->dsn2->gender='P';
    $this->dsn2->pendidikan='S3';

    $this->load->model('dosen_models','dsn3');
    $this->dsn3->id=3;
    $this->dsn3->nidn='121314';
    $this->dsn3->nama='Karim';
    $this->dsn3->gender='L';
    $this->dsn3->pendidikan='S1';
        
    $list_dsn = [$this->dsn1, $this->dsn2, $this->dsn3];

    $data['dosen1']=$this->dsn1;
    $data['list_dsn']=$list_dsn;

    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('dosen/index.php',$data);
    $this->load->view('layout/footer');
}
public function create(){
    $data['judul']='Form Kelola Dosen';
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('dosen/create',$data);
    $this->load->view('layout/footer');
}
public function save(){
    $this->load->model('dosen_models','dsn1');

    $this->dsn1->nidn = $this->input->post('nidn');
    $this->dsn1->nama = $this->input->post('nama');
    $this->dsn1->gender = $this->input->post('jk');
    $this->dsn1->pendidikan = $this->input->post('pendidikan');
    $this->dsn1->tmp_lahir = $this->input->post('tmp_lahir');
    $this->dsn1->tgl_lahir = $this->input->post('tgl_lahir');
    
    // die(print_r($this->mhs1));
    $data['dsn1']=$this->dsn1;
    $this->load->view('layout/header');
    $this->load->view('layout/sidebar');
    $this->load->view('dosen/view',$data);
    $this->load->view('layout/footer');
}
}