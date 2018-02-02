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

        $docs = Documents::with('Categories')
                           ->with('SousDomaines')
                           ->where('created_at', '>=', $debut)
                           ->where('created_at', '<=', $fin)
                           ->where('categories_id','=',4)
                           ->get();

        $header = "";//"<h4 align='center'>Fiche des documents enregistrées entre le $debut et le $fin<br><br></h4>";
        
        $contains = '<table class="maintable" width="100%">';
        $contains .= '<tr><td/><td/></tr><tr>';
        //for($i=0;$i<5;$i++) {
        for($i=0; $i<count($docs); $i++) {
            $contains .= $this->buildBlock($docs[$i%count($docs)], $i);
            if($i>0 && $i%2==1) $contains .= '</tr><tr>';
        }
        $contains .= '</tr>'; //close at the closed
                
        $contains .= '</table>';
        
        $style = '<style>
        html, body, table {margin:0;}
        .maintable td{ font-size: 1.2em; }
        .maintable{ table-layout: fixed; border: none; border-spacing: 0px;}
        .block{ overflow:hidden; line-height:2; width:125mm; height:88.5mm; page-break-inside: avoid; border: 1px dashed #999;}
        </style>';
        $html = '<html><head>'.$style.'</head><body>'.$header.$contains.'</body></html>';

        if(isset($request['debug'])) return $html;

        $html = preg_replace('/>\s+</', "><", $html);
        $dompdf->loadHtml($html);
        
        $dompdf->setPaper('A4', 'landscape');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        return $dompdf->stream('Fiches Catalographiques.pdf',array('Attachment'=>0));
    }

    private function buildBlock($doc, $i){
        $domaine = '';
        $sousdomaine = '';
        if(isset($doc->SousDomaines)) {
            $domaine = $doc->SousDomaines->Domaines->NomDomaines;
            $sousdomaine     = $doc->SousDomaines->NomSousDomaines;
        }

        $displayHack = '';// ($i==7)?'style="page-break-after:always;background:red;height:50mm;"':'';

        $block = <<<"ENDHTML"
        <td class='block' valign='top' $displayHack>
            <div style='position:relative; width:100%; height:87.5mm; overflow:hidden; padding: 30px;'>
                <table style='position:absolute;' width='100%' height='100%'>
                    <tr>
                        <td style='text-align:left;'>
                            $doc->CoteDocuments
                        </td>
                        <td style='text-align:right;'>
                        $domaine
                        </td>
                    </tr>
                    <tr>
                        <td>$doc->Section</td>
                    </tr>
                    <tr>
                        <td>$doc->TitreDocuments</td>
                    </tr>
                    <tr>
                        <td>$doc->Auteur, $doc->AnneePublicationDocuments</td>
                    </tr>
                    <tr>
                        <td></td>
                        <td style='text-align:right;'>
                            $sousdomaine
                        </td>
                    </tr>
                </table>
            </div>
        </td>
ENDHTML;

        return $block;
    }


}
