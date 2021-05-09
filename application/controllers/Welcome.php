<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function verificar_acesso() {
        if (!$this->session->userdata('logado')) {
            redirect('welcome/entrar');
        }
    }

    public function index() {
        redirect('welcome/inicio');
    }

    public function inicio() {
        $this->load->view('includes/header');
        $this->load->view('inicio');
        $this->load->view('includes/footer');
    }

	public function sair() {
        $this->load->view('login');
    }

	public function loginPost() {
        redirect('welcome');
    }

	public function motoristas() {
        $this->load->view('includes/header');
        $this->load->view('motoristas');
        $this->load->view('includes/footer');
    }

	public function motoristasAdd() {
        $this->load->view('includes/header');
        $this->load->view('motoristas-add');
        $this->load->view('includes/footer');
    }

	public function motoristaPerfil() {
        $this->load->view('includes/header');
        $this->load->view('motoristas-perfil');
        $this->load->view('includes/footer');
    }

	public function transacao() {
        $this->load->view('includes/header');
        $this->load->view('transacao/transacao-listar');
        $this->load->view('includes/footer');
    }

	public function transacaoAdd() {
        $this->load->view('includes/header');
        $this->load->view('transacao/transacao-add');
        $this->load->view('includes/footer');
    }

	public function veiculo() {
        $this->load->view('includes/header');
        $this->load->view('veiculo/veiculo-listar');
        $this->load->view('includes/footer');
    }

	public function veiculoAdd() {
        $this->load->view('includes/header');
        $this->load->view('veiculo/veiculo-add');
        $this->load->view('includes/footer');
    }
}
