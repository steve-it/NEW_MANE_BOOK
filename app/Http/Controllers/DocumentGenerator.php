<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
                           ->get();

        $header = "";//"<h4 align='center'>Fiche des documents enregistrées entre le $debut et le $fin<br><br></h4>";
        
        $contains = '<table class="maintable" width="100%">';
        $contains .= '<tr>';
        for($i=0;$i<20;$i++) {
        //for($i=0; $i<count($docs); $i++) {
            $contains .= $this->buildBlock($docs[$i%count($docs)], $i);
            if($i>0 && $i%2==1) $contains .= '</tr><tr>';
        }
        $contains .= '</tr>'; //close at the closed
                
        $contains .= '</table>';
        
        $style = '<style>
        html, body, table {margin:0;}
        .maintable td{ font-size: 1.05em; }
        .maintable{ table-layout: fixed; border: none; border-spacing: 0px;}
        .block{ overflow:hidden; line-height:2; width:125mm; height:88.5mm; page-break-inside: avoid; border: 1px dashed #999;}
        .lowline{ line-height:0.98em }
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

        $injectIf = function ($data, $prefix=' ', $suffix=', '){
            if($data){
                return $prefix.trim($data).$suffix;
            }
            return '';
        };

        $displayHack = '';// ($i==7)?'style="page-break-after:always;background:red;height:50mm;"':'';

        $storagePath  = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix(); 
        $logoPath = $storagePath.'public/logoenam.jpg';
        
        $block = "
        <td class='block' valign='top' $displayHack>
            <div style='position:relative; width:100%; height:87.5mm; overflow:hidden; padding: 30px;'>
                <table style='position:absolute;' width='100%' height='100%'>
                    <tr>
                        <td style='text-align:left;' width='33%'>
                            <strong>$doc->CoteDocuments</strong>
                        </td>
                        <td style='text-align:center;font-size:0.8em;' width='33%'>
                            <img src='$logoPath' width=50><br>
                            <em>Bibliothèque de l'ENAM</em>
                        </td>
                        <td style='text-align:right;' width='33%'>
                            <strong>$domaine</strong>
                        </td>
                    </tr>
                    <tr>
                        <td colspan='3'>
                            <br>
                            <strong>$doc->TitreDocuments</strong> / $doc->Auteur 
                            ".$injectIf($doc->LieuEditionDocuments, ' - ', '')."
                            ".$injectIf($doc->AnneePublicationDocuments, ', ','')."
                        </td>
                    </tr>
                    <tr>
                        <td colspan='3' class='lowline'>
                            ".$injectIf($doc->EditionsDocuments)."
                            ".$injectIf($doc->AnneeEditionDocuments)."
                            ".$injectIf($doc->MaisonEditionDocuments)."
                            ".$injectIf($doc->LongueurEditionDocuments, ' ', 'cm, ')."
                            ".$injectIf($doc->AdresseMaisonEdition)."
                            ".$injectIf($doc->IllustrationDocuments)."
                            ".$injectIf($doc->ReliureDocuments, ' ', '.')."
                            ".$injectIf($doc->NumeroEntresDocuments, ' - N° ')."
                            ".$injectIf($doc->PeriodiciteDocuments, ' - ')."
                        </td>
                    </tr>
                    <tr><td><br></td></tr>
                    <tr style='vertical-align:top;'>
                        <td colspan='2' class='lowline'>
                            ".$injectIf($doc->IsbnDocuments, 'ISBN: ', '<br>')."
                            ".$injectIf($doc->IssnDocuments, 'ISSN: ', '')."
                        </td>
                        <td style='text-align:right;'>
                            $doc->NbreExemplaireEdition exemplaire(s)<br>
                        </td>
                    </tr>

                    <tr>
                        <td colspan='3' style='text-align:right;'>
                            <strong>$sousdomaine</strong>
                        </td>
                    </tr>
                </table>
            </div>
        </td>";

        return $block;
    }


}
