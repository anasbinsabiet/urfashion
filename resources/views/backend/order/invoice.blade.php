@php
$data = App\Models\Setting::find(4);
@endphp
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$setting->setting_name}}</title>
    <style>
        body {
            background-color: #F6F6F6;
            margin: 0;
            padding: 0;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            margin: 0;
            padding: 0;
        }

        p {
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin-right: auto;
            margin-left: auto;
        }

        .brand-section {
            /* background-color: #eeeeee; */
            padding: 10px 40px;
        }

        .logo {
            width: 50%;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
        }

        .col-6 {
            width: 50%;
            flex: 0 0 auto;
        }

        .text-white {
            color: #fff;
        }

        .company-details {
            float: right;
            text-align: right;
        }

        .body-section {
            padding: 16px;
            border: 1px solid #eeeeee;
        }

        .heading {
            font-size: 20px;
            margin-bottom: 08px;
        }

        .sub-heading {
            color: #262626;
            margin-bottom: 05px;
        }

        table {
            background-color: #fff;
            width: 100%;
            border-collapse: collapse;
            border-right: 0;
            border-left: 0;
            border-bottom: 0;
        }
        tfoot tr {
            border-bottom: 0;
        }

        table thead tr {
            background-color: #f2f2f2;
        }

        table td {
            vertical-align: middle !important;
            text-align: center;
        }

        table th,
        table td {
            padding-top: 08px;
            padding-bottom: 08px;
            border-right: 0;
            border-left: 0;
        }

        .text-right {
            text-align: end;
        }

        .w-20 {
            width: 20%;
        }

        .float-right {
            float: right;
        }
    </style>
    <style type="text/css">
        .styled-table {
            border-collapse: collapse;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            /*box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);*/
        }

        .styled-table thead tr {
            text-align: left;
        }

        .styled-table th,
        .styled-table td {
            padding: 12px 15px;
        }

        /* .styled-table tbody tr {
            border-bottom: 1px solid #dddddd !important;
            border-top: 1px solid #dddddd !important;
        }  */

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .styled-table tbody tr:last-of-type {
            border-bottom: 2px solid #009879;
        }

        .styled-table tbody tr.active-row {
            font-weight: bold;
            color: #009879;
        }

        .text-90.order-first .col-5 {
            text-align: right;
        }

        .text-secondary-d1 {
            padding-right: 15px;
        }

        .styled-table tbody tr:nth-of-type(even) {
            background-color: #eee;
        }
    </style>
</head>

<body>
    @php
    $path = 'frontend/images/logo.png';
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $logo = 'data:image/' . $type . ';base64,' . base64_encode($data);
    @endphp
    <div class="container">
        <div class="body-section">
            <div class="row">
                <table width="100%">
                    <tr>
                        <td width="50%" style="text-align: left;vertical-align: top;">
                            <img src="{{$logo}}" alt="UR Fashion" class="mw-100 h-30px h-md-40px" height="40" style="vertical-align: top;">
                        </td>
                        <td width="50%" style="text-align: right;">
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125"> urfashionbd.com</div>
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125"> www.facebook.com/urfashion21</div>
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125"> 35/A Purana Paltan Line (VIP Road)</div>
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125"> 1000, Dhaka, Bangladesh</div>
                            <div class="mt-1 mb-2 text-secondary-m1 text-600 text-125"> 01810098510</div>
                        </td>
                    </tr>
                </table>
            </div>

            <h3>Invoice</h3>
            <hr />
            <table width="100%">
                <tr>
                    <td width="50%" style="text-align: left;">
                        <strong>Customer Information</strong><br />
                        <p></p>
                        <p>Invoice No: {{$order->id}}</p>
                        <p>Date: {{ \Carbon\Carbon::parse($order->created_at)->format('d M Y')}}</p>
                        <p>Name: {{$order->name}}</p>
                        <p>Phone: {{$order->mobile}}</p>
                        <p>Address: {{$order->address}}</p>
                    </td>
                    <td width="50%" style="text-align: right;">
                        <strong>Reseller Information</strong><br />
                        <p></p>
                        <p>Reseller Name: UR Fashion</p>
                        <p>Shop Name: UR Fashion</p>
                        <p>Seller Mobile No: </p>
                        <p></p>
                    </td>
                </tr>
            </table>
            <br/><br/>
            <h5 class="heading" style="color: #333">Order Details</h5>
            <table class="styled-table" border="1">
                <thead>
                    <tr style="text-align: center;">
                        <!-- <th>SL</th> -->
                        <th class="text-nowrap">SKU</th>
                        <th class="text-nowrap" style="text-align: left;">Name</th>
                        <th class="text-nowrap">Size</th>
                        <th class="text-nowrap" style="width: 18%;">Unit Cost</th>
                        <th class="text-nowrap">Quantity</th>
                        <th class="text-nowrap">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $gtotal = 0;
                    @endphp
                    @foreach($orders as $row)
                    @php
                    $product_image = App\ColorImage::where('product_id', $row->product_id)->orderBy('color_id')->take(1)->first();
                    $gtotal += $row->grand_total + $row->product->setup_fee;
                    @endphp
                    <tr class="odd gradeX">
                        <td>{{$row->product->product_code}}</td>
                        <td style="text-align: left;">{{$row->product->product_name}}</td>
                        <td>{{$row->size}}</td>
                        <td>{!!$row->product->discount_price ? $row->product->discount_price : $row->product->selling_price!!}</td>
                        <td>{{$row->quantity}}</td>
                        <td>{{$row->product->discount_price ? $row->product->discount_price * $row->quantity : $row->product->selling_price * $row->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="3"></td>
                        <td class="text-center">Subtotal</td>
                        <td colspan="1"></td>
                        <td style="text-align: center;">{{$order->order_total}}</td>
                    </tr>
                </tfoot>
            </table>
            <br>
            <table width="100%">
                <tr>
                    <td width="50%" style="text-align: left;">
                    </td>
                    <td width="50%" style="text-align: right;">
                        Delivery Charge: {{$order->shipping_charge}} tk <span style="text-transform: lowercase;">({{$order->delivery_charge_status}})</span><br>
                        Total Due: {{$order->delivery_charge_status == 'Due' ? $order->order_total + $order->shipping_charge : $order->order_total}} tk<br>
                        @isset($order->paid_amount)Paid Amount: {{$order->paid_amount}} tk<br>
                        Grand Total: {{($order->delivery_charge_status == 'Due' ? $order->order_total + $order->shipping_charge : $order->order_total) - $order->paid_amount}} tk
                        @else
                        Grand Total: {{$order->delivery_charge_status == 'Due' ? $order->order_total + $order->shipping_charge : $order->order_total}} tk
                        @endisset
                    </td>
                </tr>
            </table>
            <br>
        </div>
        <div class="body-section" style="position: fixed;bottom:30;width:64%;margin-left: 11%;">
            <table width="100%">
                <tr>
                    <td width="50%" style="text-align: left;">
                        <p>Customer Signature</p>
                    </td>
                    <td width="50%" style="text-align: right;">
                        <p>Authorize Signature</p>
                    </td>
                </tr>
                <tr style="text-align: center; margin-left: 50%;">
                    <td width="100%" style="text-align: center;margin-left: 50%;">
                        <p style="text-align: center;margin-left: 50%;">Thank you for your order.</p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>