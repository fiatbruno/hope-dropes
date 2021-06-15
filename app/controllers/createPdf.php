<?php
class createPdf extends CI_Controller{
    function __construct(){
        parent::__construct();

    }
    public function addToPdf(){
        $this->load->library("Pdf");
        $this->load->database();
        $this->load->model('selection');
        $data['h']=$this->selection->getData();
        $pdf=new Pdf('L','mm',"A4",true,'UTF-8', false);
        $pdf->AddPage();
        $pdf->SetTitle('users full information');
        $pdf->SetMargins(30,30);
        // $tcpdf->SetFooterMargin(20);
        $pdf->SetAutoPageBreak(true);
        $pdf->SetAuthor('Beulla');
        $pdf->SetFont('Helvetica','',9);
        $pdf->SetTextColor(2,60,70);
        $pdf->SetDisplayMode('real','default');
        $pdf->SetLeftMargin(10);
        // width,height,content,border,following,,fill
        $pdf->Cell(25,10,'userName',1,0,'C',FALSE);
        $pdf->Cell(20,10,'City',1,0,'C',FALSE);
        $pdf->Cell(20,10,'Region',1,0,'C',FALSE);
        $pdf->Cell(20,10,'Country',1,0,'C',FALSE);
        $pdf->Cell(20,10,'Latitude',1,0,'C',FALSE);
        $pdf->Cell(20,10,'Longitude',1,0,'C',FALSE);
        $pdf->Cell(20,10,'Postal',1,0,'C',FALSE);
        $pdf->Cell(45,10,'Timezone',1,1,'C',FALSE);
        

        foreach($data['h']->result() as $row){
            $pdf->Cell(25,10,$row->username,1,0,'C',FALSE);
            $pdf->Cell(20,10,$row->city,1,0,'C',FALSE);
            $pdf->Cell(20,10,$row->region,1,0,'C',FALSE);
            $pdf->Cell(20,10,$row->country,1,0,'C',FALSE);
            $pdf->Cell(20,10,$row->latitude,1,0,'C',FALSE);
            $pdf->Cell(20,10,$row->longitude,1,0,'C',FALSE);
            $pdf->Cell(20,10,$row->postal,1,0,'C',FALSE);
            $pdf->Cell(45,10,$row->timezone,1,1,'C',FALSE);
        }
       if($pdf->Output()){
           echo "success";
       }
       else{
           echo "noooo";
       }
    }
}
?>