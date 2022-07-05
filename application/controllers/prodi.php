<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class prodi extends CI_Controller {

    public function index(){

        $this->load->model('prodi_models','prodi1');
        $this->prodi1->id=1;
        $this->prodi1->kode='123';
        $this->prodi1->nama='PPKN';
        $this->prodi1->sks='4';
        
        $this->load->model('prodi_models','prodi2');
        $this->prodi2->id=2;
        $this->prodi2->kode='456';
        $this->prodi2->nama='Statistika';
        $this->prodi2->sks='4';

        $this->load->model('prodi_models','prodi3');
        $this->prodi3->id=3;
        $this->prodi3->kode='789';
        $this->prodi3->nama='Jaringan Komputer';
        $this->prodi3->sks='3';
            
        $list_prodi = [$this->prodi1, $this->prodi2, $this->prodi3];
    
        $data['prodi1']=$this->prodi1;
        $data['list_prodi']=$list_prodi;
    
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/index.php',$data);
        $this->load->view('layout/footer');
    }
    public function create(){
        $data['judul']='Form Kelola Prodi';
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/create',$data);
        $this->load->view('layout/footer');
    }
    public function save(){
        $this->load->model('prodi_models','prodi1');
    
        $this->prodi1->kode = $this->input->post('kode');
        $this->prodi1->nama = $this->input->post('nama');
        $this->prodi1->sks = $this->input->post('sks');
    
        // die(print_r($this->mhs1));
        $data['prodi1']=$this->prodi1;
        $this->load->view('layout/header');
        $this->load->view('layout/sidebar');
        $this->load->view('prodi/view',$data);
        $this->load->view('layout/footer');
    }

    // public function index(){
    //     $this->load->model('prodi_models','prodi');
    //     $list_prodi = $this->prodi->getAll();
    
    //     $data['list_prodi'] = $list_prodi;
    //     $this->load->view('layout/header');
    //     $this->load->view('layout/sidebar');
    //     $this->load->view('prodi/index.php',$data);
    //     $this->load->view('layout/footer');
    // }
}