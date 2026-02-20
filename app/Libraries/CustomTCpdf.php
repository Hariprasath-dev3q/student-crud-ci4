<?php

namespace App\Libraries;

use TCPDF;

class CustomTCpdf extends TCPDF
{
  protected $model;

  public function __construct()
  {
    parent::__construct();
  }

  public function Footer()
  {
    $this->SetY(-15);
    $this->SetFont('helvetica', 'I', 9);
    $this->Cell(0, 10, 'Page ' . $this->getAliasNumPage().'/'. $this->getAliasNbPages() , 0, false, 'R');
  }
}
