<?php

namespace App\Http\Controllers\Libs;

use Lang;
use PDF;

class PdfLib
{

  private $pdfObj;
  public $pdfName;
  public $pdfData;
  public $options = [
    'charset' => 'UTF-8',
    'font' => "Helvetica",
    'fontSize' => 8,
    'fontColor' => array(.25, .25, .25),
    'co_x' => 50,
    'co_y' => '',
    'msg' => ''
  ];

  public function __construct($pdfData, $pdfName)
  {
    if (empty($pdfData))
      throw new Exception("Error pdfData");
      
    if (empty($pdfName))
      throw new Exception("Error pdfName");

    $this->pdfData = $pdfData;
    $this->pdfName = $pdfName;
    $this->options['msg'] = Lang::get('aroaden.page_from_to', ['from' => "{PAGE_NUM}", 'to' => "{PAGE_COUNT}"]);
  }

  public function downloadPdf()
  {
    $this->renderPdf();

    return $this->pdfObj->download($this->pdfName);
  }

  private function renderPdf()
  {
    $this->pdfObj = PDF::loadHTML($this->pdfData, $this->options['charset']);

    $this->pdfObj->output();
    $dom_pdf = $this->pdfObj->getDomPDF();
    $canvas = $dom_pdf->get_canvas();

    $this->options['co_y'] = $canvas->get_height() - 35;

    $canvas->page_text(
      $this->options['co_x'],
      $this->options['co_y'],
      $this->options['msg'],
      $this->options['font'],
      $this->options['fontSize'],
      $this->options['fontColor']
    );
  }

}