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
            return redirect('/leave/notice')->with('success', 'New Notice Added To List');
        }

    public function destroy($id)
    {
        $leave_notice = LeaveNotice::find($id);
        $leave_notice->delete();
        return redirect('/leave/notice')->with('success-delete', 'Notice Delete Successfully');
    }
    public function edit($id)
    {
        $leave_notice_id = LeaveNotice::find($id);
        return view('page.leaveNoticeEdit', compact('leave_notice_id'));
    }
    public function update(Request $request,$id)
    {
        $notice_leave_edit = LeaveNotice::find($id);
        $notice_leave_edit->status =  $request->get('chk_status');
        $notice_leave_edit->start_date =  $request->get('start_date');
        $notice_leave_edit->end_date =  $request->get('end_date');
        $notice_leave_edit->any_message =  $request->get('any_message');
        $notice_leave_edit->save();

        return redirect('/leave/notice')->with('success-update', 'Leave Notice updated');
    }
}
