<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models;
use App\Models\DataGedung;
use App\Models\DataMonitoring;
use CodeIgniter\HTTP\IncomingRequest;
use CodeIgniter\HTTP\Request;
use CodeIgniter\HTTP\Response;
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

    public function grafik()
    {
        echo view('layout/header');
        echo view('monitoring/grafik');
        echo view('layout/footer');
    }
    
    public function tambahIface()
    {
        $gedungs = new DataGedung();
        $gedungs = $gedungs->asArray()->findAll();
        
        echo view('layout/header');
        echo view('monitoring/tambah', [
            'gedungs' => $gedungs
        ]);
        echo view('layout/footer');
    }

    public function tambah()
    {
        try {
            $waktu =  $this->request->getPost('waktu-tanggal')." ".$this->request->getPost('waktu-jam');
            $data['id_gedung']  = $this->request->getPost('gedung');
            $data['waktu_rekord']   = $waktu;
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

    public function getDataMonitoring(){
        $monitoring = new DataMonitoring();
        $monitoring = $monitoring->asArray()->findAll();
        $this->response->setJSON($monitoring, true);
        print_r(json_encode($monitoring));
    }
}
