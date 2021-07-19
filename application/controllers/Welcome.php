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

	public function funcionario() {
        $this->load->view('includes/header');
        $this->load->view('funcionario/funcionario-listar');
        $this->load->view('includes/footer');
    }

	public function funcionarioAdd() {
        $this->load->view('includes/header');
        $this->load->view('funcionario/funcionario-add');
        $this->load->view('includes/footer');
    }

	public function funcionarioPerfil() {
        $this->load->view('includes/header');
        $this->load->view('funcionario/funcionario-perfil');
        $this->load->view('includes/footer');
    }

    public function utilizador() {
        $this->load->view('includes/header');
        $this->load->view('utilizador/utilizador-listar');
        $this->load->view('includes/footer');
    }

	public function utilizadorAdd() {
        $this->load->view('includes/header');
        $this->load->view('utilizador/utilizador-add');
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

    public function transacaoVer() {
        $this->load->view('includes/header');
        $this->load->view('transacao/transacao-ver');
        $this->load->view('includes/footer');
    }

    public function transacaoAddEntrada() {
        $this->load->view('includes/header');
        $this->load->view('transacao/transacao-add-entrada');
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
