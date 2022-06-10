<?php
use Restserver\Libraries\REST_Controller;

defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class Pasien extends REST_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pasien_model', 'pasien');

    }
    public function index_get()
    {
        $id = $this->get('id');
        if ($id === null) {
            $pasien = $this->pasien->getPasien();
        } else {
            $pasien = $this->pasien->getPasien($id);
        }
        
        if ($pasien) {
            $this->response([
            'status' => true,
            'data' => $pasien
        ], REST_Controller::HTTP_OK);
        } else {
            $this->response([
                'status' => false,
                'message' => 'ID tidak ditemukan'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete()
    {
        $id = $this->delete('id');

        if ($id === null) {
            $this->response([
                'status' => false,
                'message' => 'Gunakan ID yang ada!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        } else {
            if ($this->pasien->deletePasien($id) > 0) {
                // ok
                $this->response ([
                    'status' => true,
                    'id' => $id,
                    'message' => 'Deleted the resource.'
                ], REST_Controller::HTTP_NO_CONTENT);
            } else {
                // id tidak ditemukan
                $this->response([
                    'status' => false,
                    'message' => 'ID tidak ditemukan'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post()
    {
        $data = [
            'nama' => $this->post('nama'),
            'alamat' => $this->post('alamat'),
            'tanggal_lahir' => $this->post('tanggal_lahir'),
            'jenis_kelamin' => $this->post('jenis_kelamin'),
            'riwayat_penyakit' => $this->post('riwayat_penyakit'),
        ];

        if( $this->pasien->createPasien($data) > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'Data pasien baru telah ditambahkan.'
            ],  REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status' => false,
                'message' => 'Data gagal ditambahkan.'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }

    public function index_put()
    {
        $id = $this->put('id');
        $data = [
            'nama' => $this->put('nama'),
            'alamat' => $this->put('alamat'),
            'tanggal_lahir' => $this->put('tanggal_lahir'),
            'jenis_kelamin' => $this->put('jenis_kelamin'),
            'riwayat_penyakit' => $this->put('riwayat_penyakit'),
        ];

        if($this->pasien->updatePasien($data, $id) > 0)
        {
            $this->response([
                'status' => true,
                'message' => 'Data telah diperbaharui'
            ],  REST_Controller::HTTP_NO_CONTENT);
        }else{
            $this->response([
                'status' => false,
                'message' => 'Data gagal diperbaharui!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}