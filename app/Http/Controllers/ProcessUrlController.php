<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class ProcessUrlController extends Controller
{
    public function Url(Request $request)
    {
        $url = $request->input('url');
        // Ruta completa del ejecutable de Python
        $pythonPath = 'C:\laragon\bin\python\python-3.10\python.exe';
        $scriptPath = base_path('scripts/process_url_spacy.py');

        // Crear el proceso para ejecutar el script de Python directamente
        $process = new Process([$pythonPath, $scriptPath, $url]);
        $process->setWorkingDirectory(base_path('scripts'));
        $process->run();

        // Verificar si el proceso fue exitoso
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Obtener la salida del proceso
        $output = $process->getOutput();
        return response()->json(json_decode($output, true));
    }
}