<?php

namespace App\Http\Controllers;

use App\Models\Tostado;
use App\Models\Bebida;
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

    public function generateBebidaPDF()
    {
        $bebidas = Bebida::with('tostado')->get(); // Traer bebidas con su relación de tostado

        $this->fpdf->AddPage('L'); // Añadir página en formato horizontal
        $this->fpdf->SetFont('Arial', 'B', 12);

        // Títulos de las columnas
        $this->fpdf->Cell(10, 10, '#', 1);
        $this->fpdf->Cell(30, 10, 'Tipo', 1);
        $this->fpdf->Cell(80, 10, 'Tostado', 1);
        $this->fpdf->Cell(20, 10, 'Precio', 1);
        $this->fpdf->Cell(50, 10, 'Filtración', 1);
        $this->fpdf->Cell(20, 10, 'Altura', 1);
        $this->fpdf->Cell(40, 10, 'Complementos', 1);
        $this->fpdf->Cell(30, 10, 'Imagen', 1); // Añadir columna para la imagen
        $this->fpdf->Ln();

        // Datos de las bebidas
        foreach ($bebidas as $bebida) {
            $this->fpdf->Cell(10, 10, $bebida->id, 1);
            $this->fpdf->Cell(30, 10, utf8_decode($bebida->tipo), 1);
            $this->fpdf->Cell(80, 10, utf8_decode($bebida->tostado->tostado), 1); // Asumiendo que tienes la relación definida
            $this->fpdf->Cell(20, 10, number_format($bebida->precio, 2), 1);
            $this->fpdf->Cell(50, 10, utf8_decode($bebida->filtracion), 1);
            $this->fpdf->Cell(20, 10, utf8_decode($bebida->altura), 1);
            $this->fpdf->Cell(40, 10, utf8_decode($bebida->complementos), 1);

            // Añadir imagen si existe
            if ($bebida->imagen) {
                $imagenPath = storage_path('app/public/' . $bebida->imagen);
                if (file_exists($imagenPath)) {
                    $this->fpdf->Cell(30, 10, $this->fpdf->Image($imagenPath, $this->fpdf->GetX(), $this->fpdf->GetY(), 10), 1);
                } else {
                    $this->fpdf->Cell(30, 10, 'No Image', 1);
                }
            } else {
                $this->fpdf->Cell(30, 10, 'No Image', 1);
            }

            $this->fpdf->Ln();
        }

        $this->fpdf->Output();

        exit;
    }

}
