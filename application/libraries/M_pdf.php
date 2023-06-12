<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
 
 include_once APPPATH.'third_party/mpdfv1/autoload.php';
 
class M_pdf {
 
    public $param;
    public $pdf;
 
    public function __construct()
    {
        //$this->param =$param;
        $mpdf = new \Mpdf\Mpdf(array('', '', 0, '', 15, 15, 16, 16, 9, 9, 'L'));
        echo "ccc";
        $this->pdf = $mpdf; //new mPDF($this->param);
        //$mpdf->WriteHTML('<h1>Hello world!</h1>');
		//$mpdf->Output(FCPATH."assets/upload/output_pdf_name.pdf",'F');
       // echo "dddd";
    }
}