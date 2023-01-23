<?php

namespace MyClass; 


class PDFDownloaderService 
{
    public function downloadPDF(PDFDownloader $basicPDF)
    {
        return $basicPDF->downloadPDF();
    }
}