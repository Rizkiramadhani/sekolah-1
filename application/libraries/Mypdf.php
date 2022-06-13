<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once('assets/dompdf/autoload.inc.php');

use Dompdf\Dompdf;

class Mypdf
{
    protected $ci;

    public function __construct()
    {
        $this->ci   = &get_instance();
    }

    public function generate($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('legal', 'portrait');
        $dompdf->render();
        $dompdf->stream("laporansekolah.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }

    public function generatesiswa($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('legal', 'portrait');
        $dompdf->render();
        $dompdf->stream("laporandatasiswa.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }

    public function generateguru($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('legal', 'portrait');
        $dompdf->render();
        $dompdf->stream("laporandataguru.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }

    public function generateraporcover($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("cover.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }

    public function generatehal1($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hal1.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }
    public function generatehal2($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hal2.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }
    public function generatehal3($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hal3.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }
    public function generatehal4($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hal4.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }
    public function generatehal5($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hal5.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }
    public function generatehal6($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();
        $dompdf->stream("hal6.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }

    public function generatejadwal($view, $data = array())
    {
        $dompdf = new Dompdf();
        $html = $this->ci->load->view($view, $data, TRUE);

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'landscape');
        $dompdf->render();
        $dompdf->stream("jadwalpelajaran.pdf", array("Attachment" => false));
        // $this->template->load('Laporanpegawai/index', $data);
    }
}
