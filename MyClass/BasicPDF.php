<?php

namespace MyClass;

class BasicPDF implements PDFDownloader, HTMLDownloader
{
  
    public function __construct()
    {
        echo 'Ok';
    }
    
    public function downloadHTML():string
    {
        return 'HTML téléchargé '; 
    }
    
    public function downloadPDF():string
    {
        return 'PDF telechargé (Basic)';
    }
}