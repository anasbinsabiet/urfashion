<?php

namespace App\Http\Controllers\Backend;

use PDF;
use App\User;
use App\Models\Order;
use App\Models\Notification;
use App\Models\Setting;
use App\Models\District;
use App\Models\Division;
use App\Models\Shipping;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\ImprintArtworkOption;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function pending()
    {
        $data['data'] = Order::all();
        return view('backend.order.pending', $data);
    }

    public function orderAccept()
    {
        $data['data'] = Order::where('status', 1)->latest()->get();
        return view('backend.order.accept',$data);
    }
    public function progressDelivery()
    {
        $data['data'] = Order::where('status', 2)->latest()->get();
        return view('backend.order.progress-delivery',$data);
    }
    public function successDelivery()
    {
        $data['data'] = Order::where('status', 3)->latest()->get();
        return view('backend.order.success-delivery',$data);
    }
    public function orderCancel()
    {
        $data['data'] = Order::where('status', 4)->latest()->get();
        return view('backend.order.cancel',$data);
    }

    public function details($id)
    {
        $user_id = Order::find($id)->user_id;
        $data['user'] = User::where('id', $user_id)->first();
        $data['orders'] = OrderDetail::where('order_id', $id)->get();
        $orders = OrderDetail::where('order_id', $id)->get();
        $data['order'] = Order::where('id', $id)->first();
        $orderd = Order::where('id', $id)->first();
        $data['shipping'] = Shipping::where('order_id', $id)->first();
        $divisions = Division::where('id', $orderd->district)->first();
        $districts = District::where('id', $orderd->area)->first();
        

        return view('backend.order.details', $data, compact('orders','divisions','districts'));
    }

    public function invoice($id)
    {   
        $user_id = Order::find($id)->user_id;
        $data['user'] = User::where('id', $user_id)->first();
        $data['orders'] = OrderDetail::where('order_id', $id)->get();
        $data['order'] = Order::where('id', $id)->first();
        $data['shipping'] = Shipping::where('order_id', $id)->first();
        $data['setting'] = Setting::find(4);
        $pdf = PDF::loadView('backend.order.invoice', $data);
        return $pdf->download('invoice.pdf');
        // return view('backend.order.invoice', $data);
    }

    public function orderstatus_change(Request $request)
    {
        $order_id = $request->order_id;
        $order_status = $request->order_status;
        $order = Order::find($order_id);
        $order->status = $order_status;
        $order->save();

        $nt = new Notification;
        $nt->user_id =$order->user_id;
        $nt->reference =$order_id;
        $nt->title = 'Status of order no - '. $order_id.' has been updated!';
        $nt->save();

        return response()->json('success');
    }
    
    public function paymentAccept($id)
    {
        $order = Order::find($id);
        $order->status = 1;
        $order->save();
        $notification = array(
            'message' => 'Successfully Send To Progress Delivery!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function paymentCancel($id)
    {
        $order = Order::find($id);
        $order->status = 4;
        $order->save();
        $notification = array(
            'message' => 'Payment Canceled!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function deliveryProgress($id)
    {
        $order = Order::find($id);
        $order->status = 2;
        $order->save();
        $notification = array(
            'message' => 'Successfully Send To Delivery!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function deliveryDone($id)
    {
        $order = Order::find($id);
        $order->status = 3;
        $order->save();
        $notification = array(
            'message' => 'Delivery Done!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
