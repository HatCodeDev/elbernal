<?php

namespace App\Http\Controllers;

use App\Models\Tostado;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\Models\User;
use Illuminate\Http\Request;

class PDFController extends Controller
{
    protected $fpdf;

    public function __construct(Fpdf $fpdf)
    {
        $this->fpdf = $fpdf;
    }

    public function generatePDF()
    {
        $users = User::all();

        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial', 'B', 12);

        // Títulos de las columnas
        $this->fpdf->Cell(10, 10, '#', 1);
        $this->fpdf->Cell(50, 10, 'Name', 1);
        $this->fpdf->Cell(80, 10, 'Email', 1);
        // $this->fpdf->Cell(50, 10, 'Action', 1);
        $this->fpdf->Ln();

        // Datos de los usuarios
        foreach ($users as $user) {
            $this->fpdf->Cell(10, 10, $user->id, 1);
            $this->fpdf->Cell(50, 10, $user->name, 1);
            $this->fpdf->Cell(80, 10, $user->email, 1);
            // $this->fpdf->Cell(50, 10, 'Show | Edit | Delete', 1); // Ajusta según tus necesidades
            $this->fpdf->Ln();
        }

        $this->fpdf->Output();

        exit;
    }

    public function generateTostadoPDF()
    {
        $tostados = Tostado::all(); // Reemplaza "Tostado" con el nombre de tu modelo
    
        $this->fpdf->AddPage();
        $this->fpdf->SetFont('Arial', 'B', 12);
    
        // Títulos de las columnas
        $this->fpdf->Cell(10, 10, '#', 1);
        $this->fpdf->Cell(80, 10, 'Tipo de Tostado', 1);
        // Agrega más celdas según tus necesidades
        $this->fpdf->Ln();
    
        // Datos de los tipos de tostado
        foreach ($tostados as $tostado) {
            $this->fpdf->Cell(10, 10, $tostado->id, 1);
            $this->fpdf->Cell(80, 10, $tostado->tostado, 1);
            // Agrega más celdas según tus necesidades
            $this->fpdf->Ln();
        }
    
        $this->fpdf->Output();
    
        exit;
    }
}
