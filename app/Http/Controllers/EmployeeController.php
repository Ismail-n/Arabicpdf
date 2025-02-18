<?php
namespace App\Http\Controllers;

use PDF;

class EmployeeController extends Controller
{
    /**
     * undocumented function summary
     *
     * Undocumented function long description
     *
     * @param Type $var Description
     * @return type
     * @throws conditon
     **/
    public function showPDF()
    {
        # code...
        // dd("hrere");
        $data = [
            'foo' => 'bar',
        ];
        $pdf = PDF::loadView('pdf.document', $data);

        return $pdf->stream('document.pdf');
    }
}
