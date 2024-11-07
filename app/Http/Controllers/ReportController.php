<?php

namespace App\Http\Controllers;

use App\Models\payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class ReportController extends Controller
{
    public function report($pid){

        $pdf = App::make('dompdf.wrapper');
$pdf->loadHTML('<h1>Test</h1>');
return $pdf->stream();



     $payment=payment::findOrfail($pid);
     $pdf=App::make('dompdf.wrapper');
     $print="<div style='margin:20px; padding:20px'>";
     $print.="<h1> payment Recipt</h1>";
     $print.="<he/>";
     $print.="<p> Receipt no :</p>".$pid."</b> </p>";
     $print.="<p> Date : <b>" .$payment->paid_date ."</b></p>";
     $print.="<p> Enrollment no : <b>" .$payment->enrollment->enroll_on ."</b> </p>";

     $print.="<hr/>";

     //table creation

     $print.="<tr>";
     $print.="<td>Batch</td>";
     $print.="<td>Amount</td>";
     $print.="<tr>";

     $print.="<tr>";
     $print.="<td> <h3>".$payment->enrollment->batch->name ."</h3></td>";
     $print.="<td> <h3>".$payment->amount."</h3></td>";
     $print.="<tr>";

     $print.="</table>";

     $print.="<hr/>";


     $print.="<span> printed Date : <b>" . date('y-m-d') . "</b> </span>";


     $print.="</div>";
     $pdf->loadHTML($print);
     return  $pdf->stream();   

    }
}
