<?php

namespace App\Http\Controllers;

use DB;
use Excel;
use Illuminate\Http\Request;

/**
 * 
 */
class ExcelController extends Controller
{
	public function create(Request $request)
	{
		$e = Excel::create('demofile', function($excel){
				$excel->sheet('sheet_one');
				$excel->setTitle('Our new awesome title')
					->setCreator('User')
					->setCompany('Company');

				$excel->setDescription('Tes demo create xls');
			});

		$e->string('xls');
	}
}