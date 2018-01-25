<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dompdf\Dompdf;
use App\Documents;

class DocumentGenerator extends Controller
{
    //
    public function ficheCatalographique(Request $request)
    {
        // instantiate and use the dompdf class
        $dompdf = new Dompdf();

        $debut = $request->debut;
        $fin   = $request->fin;

        $docs = Documents::with('Categories')->with('SousDomaines')->get();

        $header = "Fiche des documents enregistrées entre le $debut et le $fin<br><br>";
        
        $contains = '<table class="maintable" width="100%">';
        foreach ($docs as $key => $doc) {
            if($key%2) $contains .= '<tr>'; 
            $contains .= $this->buildBlock($doc);
            if($key%2) $contains .= '</tr>';
        }
        $contains .= '</table>';

        $style = '<style>
        table td{font-size: 1em;}
        .maintable{border: 1px solid #CCC; border-spacing: 15px;}
        .block{padding: 10px; border: 1px solid #000;}
        </style>';
        $html = '<html><body>'.$style.$header.$contains.'</body></html>';

        if(isset($request['debug'])) return $html;

        $dompdf->loadHtml($html);
        
        // $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream('Fiches Catalographiques.pdf',array('Attachment'=>0));
    }

    private function buildBlock($data){

    $block = <<<'ENDHTML'
    <td class='block'>
            <table>
            <tr>
                <td>Titre, auteur, année de publication<br><br><td>
            </tr>
            <tr>
                <td>Cote<br><br><td>
            </tr>
            </table>
    </td>
ENDHTML;

        return $block;
    }


}
