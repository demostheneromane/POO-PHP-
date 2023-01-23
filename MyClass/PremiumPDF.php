<?php

namespace MyClass;

class PremiumPDF implements PDFDownloader 
{
    public function __construct(){
        echo 'ok'; 
    }

    public function downloadPDF():string
    {
        return 'PDF telechargé Premium ';
    }
}