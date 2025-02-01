<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class MongoController extends Controller
{
    public static function searchMovie(){
        return view('namaz-vakitleri');
    }
    public static function searchMovieAjax(Request $request){
        
        $token = $request->session()->token();
        $_token = $request->post('_token');
        if($token==$_token){
            $return['state']=1;
            $return['_content']='Token Geçerli';
            $il_adi = $request->post('il_adi');
            $tarih = $request->post('tarih');
            $n_tarih = '0';
            if($tarih){
                $parse_tarih=explode('-',$tarih);
                $n_tarih=$parse_tarih[2].'.'.$parse_tarih[1].'.'.$parse_tarih[0];
            }
            $result = DB::connection('mongodb')->table('nmz_vkt')->where('il_adi', '=', $il_adi)->where('tarih', '=', $n_tarih)->first();            
            $_html='';
            if($result){
                $_html.='<table class="table">';
                    $_html.='<thead>';
                        $_html.='<tr>';
                            $_html.='<th>Tarih</th>';
                            $_html.='<th>İmsak</th>';
                            $_html.='<th>Güneş</th>';
                            $_html.='<th>Öğle</th>';
                            $_html.='<th>İkindi</th>';
                            $_html.='<th>Akşam</th>';
                            $_html.='<th>Yatsı</th>';
                        $_html.='</tr>';
                    $_html.='</thead>';
                    $_html.='<tbody>';
                        $_html.='<tr>';
                            $_html.='<td>'.$result->tarih.'</td>';
                            $_html.='<td>'.$result->imsak.'</td>';
                            $_html.='<td>'.$result->gunes.'</td>';
                            $_html.='<td>'.$result->ogle.'</td>';
                            $_html.='<td>'.$result->ikindi.'</td>';
                            $_html.='<td>'.$result->aksam.'</td>';
                            $_html.='<td>'.$result->yatsi.'</td>';
                        $_html.='</tr>';
                    $_html.='</tbody>';                    
                $_html.='</table>';
            }else{
                $_html.='<div class="alert alert-warning" role="alert">';
                    $_html.='İl ve tarih seçimini yaparak listeleme yapabilirsiniz';
                $_html.='</div>'; 
            }
            $return['_html']=$_html;
        }else{
            $return['state']=0;
            $return['_content']='Token Geçersiz';
        }
        echo json_encode($return);
        die();
    }
}
