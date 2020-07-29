<?php 

namespace App\Controllers;
use \Mpdf\Mpdf;
use App\Models\Store;

class ExportDataController extends BaseController
{
    public function export(){
        $mpdf = new Mpdf([
            'mode' => 'utf-8',
            'orientation' => 'P'
        ]);
        $model = new Store();
        $data = $model->findAll();
        $content = view('export-data/products', ['data'=>$data]);
        $mpdf->Bookmark('Start of the document');
        $mpdf->WriteHTML($content);
        return redirect()->to($mpdf->Output('filename.pdf', 'I'));
    }
}