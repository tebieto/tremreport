<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Monthly;
use App\Weekly;
use App\G12;
use App\Branch;
use App\Sectiona;
use App\Sectionb;
use App\Sectionc;
use App\Sectiond;
use App\Sectione;
Use Auth;
Use Session;
use Storage;

class SaveController extends Controller
{
    public function saveMonthly(Request $r)
	{
	
	$this->validate($r, [
		'month' => 'required',
		'year' => 'required',
		'branch' => 'required',
		'adults' => 'required',
		'children' => 'required',
		'total' => 'required',
		'newmembers' => 'required',
		'tithers' => 'required',
		'councilm' => 'required',
		'speciala' => 'required',
		'cspeciala' => 'required',
		'branchp' => 'required',
		'cbranchp' => 'required',
		'cmf' => 'required',
		'cwf' => 'required',
		'cyf' => 'required',
		'rcd' => 'required',
		'newcells' => 'required',
		'totalnc' => 'required',
	
	]);

	
	Sectiona::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'adults' => $r->adults,
		'children' => $r->children,
		'total' => $r->total
		
	]);
	
	Sectionb::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'newmembers' => $r->newmembers,
		'tithers' => $r->tithers
	]);
	
	Sectionc::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'councilm' => $r->councilm,
		'speciala' => $r->speciala,
		'cspeciala' => $r->cspeciala,
		'branchp' => $r->branchp,
		'cbranchp' => $r->cbranchp
	]);
	
	Sectiond::create([
		'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'cmf' => $r->cmf,
		'cwf' => $r->cwf,
		'cyf' => $r->cyf,
		'rcd' => $r->rcd
	]);
	
	Sectione::create([
	    'user_id' => Auth::id(),
		'month' => $r->month,
		'year' => $r->year,
		'branch' => $r->branch,
		'newcells' => $r->newcells,
		'totalnc' => $r->totalnc
	]); 
	
	
	
	Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
	
	}
	
	
	public function saveWeekly(Request $r)
	{
		
		
	$this->validate($r, [
	
		'branch' => 'required',
		'month' => 'required',
		'year' => 'required',
		'event' =>  'required',
		'men' =>  'required',
		'women' =>  'required',
		'children' => 'required',
		'total' =>  'required',
		'preacher' =>  'required'
	
	]);
	
		
	Weekly::create([
		'user_id' => Auth::id(),
		'branch' => $r->branch,
		'month' => $r->month,
		'year' => $r->year,
		'event' => $r->event,
		'men' => $r->men,
		'women' => $r->women,
		'children' => $r->children,
		'total' => $r->total,
		'preacher' => $r->preacher,
		
		]);
		
		Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
	}
	
	
	
	public function saveG12(Request $r)
	{
	
 $this->validate($r, [
 
		'branch' => 'required',
		'month' => 'required',
		'year' => 'required',
		'week' => 'required',
		'attendance' => 'required',
	
	]);	
	
		
	G12::create([
		'user_id' => Auth::id(),
		'branch' => $r->branch,
		'month' => $r->month,
		'year' => $r->year,
		'week' => $r->week,
		'attendance' => $r->attendance,
		]);
		
		Session::flash('success', 'Report submitted successfully.');
	return redirect()->back();
	
	}
	
	
	public function saveBranch(Request $r)
	{
	
 $this->validate($r, [
 
		'country' => 'required',
		'state' => 'required',
		'city' => 'required',
		'name' => 'required',
		'address' => 'required',
		'name' => 'required',
	
	]);	
	
		
	Branch::create([
		'user_id' => Auth::id(),
		'country' => $r->country,
		'state' => $r->state,
		'city' => $r->city,
		'name' => $r->name,
		'address' => $r->address,
		]);
		
		Session::flash('success', 'Branch created successfully.');
	return redirect()->back();
	
	}
	
	
	
}
