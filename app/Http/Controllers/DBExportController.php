<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class DBExportController extends Controller
{
    public function exportLicenceCondition(Request $request)
    {
        $result = DB::table('licence_condition')
        ->orderBy('id', 'asc')
        ->get();
        return $this->sendResponse($result->toArray(), 'licences');
    }

	public function exportChild(Request $request)
    {
        if ($request->message == 'licences')
        {
            
            if ($request->id == 1)//Аннулированная (Истечение срока)
            {
                
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '1')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '1')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();
                
                return $this->sendResponse($result->toArray(), 'users');
            }
            if ($request->id == 2)//Действующая
            {
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '2')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '2')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();

                return $this->sendResponse($result->toArray(), 'users');
            }
            if ($request->id == 3)//Аннулированная (Переоформленная)
            {
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '3')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '3')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();

                return $this->sendResponse($result->toArray(), 'users');
            }
            if ($request->id == 4)//Аннулированная (Прочая)
            {
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '4')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '4')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();

                return $this->sendResponse($result->toArray(), 'users');
            }
            if ($request->id == 5)//Аннулированная (Нарушение условий лицензирования)
            {
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '5')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '5')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();

                return $this->sendResponse($result->toArray(), 'users');
            }
            if ($request->id == 6)//Аннулированная (Отказ владельца)
            {
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '6')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '6')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();

                return $this->sendResponse($result->toArray(), 'users');
            }
            if ($request->id == 7)//Аннулированная (Ликвидация предприятия)
            {
                $subsoil_user_id_array = DB::table('licence')//Количество записей
                ->select('subsoil_user_id')
                ->distinct('subsoil_user_id')
                ->where('licence_condition_id', '7')
                ->get();

                for ( $i=0; $i < count($subsoil_user_id_array);$i++)
                {
                    $subsoil_user_id_array_unit = DB::table('licence')
                    ->select('subsoil_user_id')
                    ->distinct('subsoil_user_id')
                    ->where('licence_condition_id', '7')
                    ->get()[$i]->subsoil_user_id; 

                    $array[]=$subsoil_user_id_array_unit;
                }

                $result = DB::table('subsoil_user')
                ->whereIn('id', $array)
                ->get();

                return $this->sendResponse($result->toArray(), 'users');
            }
        }
        
    }

	public function exportLicence(Request $request)
    {
        $result = DB::table('licence')->get();
        return $this->sendResponse($result->toArray(), 'licence');
    }

	public function searchUser(Request $request)
    {
        $result = DB::table('subsoil_user')
		->where('name', 'like', '%$search%')
		->get();
        return $this->sendResponse($result->toArray(), 'users');
    }

	public function sendResponse($result, $message) {
		$response = [
			'success' => true,
			'data'    => $result,
			'message' => $message,
		];

		return response()->json($response, 200);
	}
}
