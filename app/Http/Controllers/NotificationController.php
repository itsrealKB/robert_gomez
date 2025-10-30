<?php

namespace App\Http\Controllers;

use App\Models\Notification;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NotificationController extends Controller
{
    public function unread()
    {
        $notifications = Notification::where('is_read', 0)
            ->where('receiver_id',auth()->id())
            ->with('sender')
            ->latest()
            ->get();

        return response()->json([
            'status' => true,
            'data' => $notifications
        ],200);
    }

    public function unreadAppraiser()
    {
        $notifications = Notification::where('is_read', 0)
            ->where('receiver_id',auth()->id())
            ->with('sender')
            ->latest()
            ->get();

        return response()->json([
            'status' => true,
            'data' => $notifications
        ],200);
    }

    public function markAsRead($id)
    {
        $notification = Notification::findOrFail($id);

        $notification->update([
            'is_read' => 1
        ]);

        if(Auth::user()->role == 'agent')
        {
            return redirect()->route('view', $notification->assignment_id);
        }

        return redirect()->route('admin.assign.detail', $notification->assignment_id);
    }

    public function readAll()
    {
        $user_id = auth()->id();

        DB::table('notifications')
            ->where('receiver_id', $user_id)
            ->where('is_read', 0)
            ->update(['is_read' => 1, 'updated_at' => now()]);

        return redirect()->back();
    }
}
