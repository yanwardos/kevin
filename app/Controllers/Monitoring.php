<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models;
use App\Models\DataGedung;
use App\Models\DataMonitoring;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Request;
use CodeIgniter\Router\Router;

class Monitoring extends Controller
{
    function __construct()
    {
        $this->db = \Config\Database::connect();
        helper('form', 'url');
    }

	public function index()
	{  
        $monitorings = new DataMonitoring();
        $monitorings = $monitorings->asArray()->findAll();
        
        $gedungs = new DataGedung();
        $gedungs = $gedungs->asArray()->findAll();

        echo view('layout/header');
        echo view('monitoring/index', [
            'monitorings'=>$monitorings,
            'gedungs' => $gedungs
        ]);
        echo view('layout/footer');
    }
    
    public function tambah()
    {
        try {
            $data['id_gedung']  = $this->request->getPost('gedung');
            $data['waktu_rekord']   = $this->request->getPost('waktu');
            $data['tegangan'] = $this->request->getPost('tegangan');
            $data['kwh'] = $this->request->getPost('kwh');
            $data['arus'] = $this->request->getPost('arus');
            $data['frekuensi'] = $this->request->getPost('frekuensi');
            $data['daya_aktif'] = $this->request->getPost('daya_aktif');
            $data['daya_tampak'] = $this->request->getPost('daya_tampak');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }

        try {
            $rekord = new DataMonitoring();
            $cek = $rekord->insert($data);
            return redirect()->to('/monitoring');
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
