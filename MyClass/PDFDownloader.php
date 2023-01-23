<?php

namespace MyClass; 

interface  PDFDownloader 
{
   
   public function __construct();
   public function downloadPDF():string;
}