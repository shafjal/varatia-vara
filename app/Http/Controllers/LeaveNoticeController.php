<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\LeaveNotice;
class LeaveNoticeController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }
            public function index()
        {       $leave_notices = LeaveNotice::all();
                return view('page.leaveNotice', compact('leave_notices'));
        }

            public function store(Request $request)
        {
            LeaveNotice::insert([
                'status' => $request->chk_status,
                'start_date' => $request->start_date,
                'end_date' => $request->end_date,
                'any_message' => $request->any_message,
            ]);
            return redirect('/leave/notice')->with('success', 'New Apartment Created');
        }

    public function destroy($id)
    {
        $leave_notice = LeaveNotice::find($id);
        $leave_notice->delete();
        return redirect('/leave/notice')->with('success-delete', 'Tenant data deleted!');
    }
}
