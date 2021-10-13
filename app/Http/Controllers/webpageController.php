<?php

namespace App\Http\Controllers;

use App\BankCompany;
use App\inboxMessage;
use App\inventoryItem;
use App\itemGroup;
use App\stockGroup;
use  App\itemsSales;
use App\subscriptions;
use Carbon\Carbon;
use App\salesOrder;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class webpageController extends Controller
{
    function format_date($date)
    {
        $date = date_format(date_create($date), "d-m-Y");
        $moon = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );
        $temp = explode('-', $date);

        // variabel temp 0 = date
        // variabel temp 1 = moon
        // variabel temp 2 = tahun

        return $temp[0] . ' ' . $moon[(int)$temp[1]] . ' ' . $temp[2];
    }
    function penyebut($nilai)
    {
        $nilai = abs($nilai);
        $huruf = array("", "Satu", "Dua", "Tiga", "Empat", "Lima", "Enam", "Tujuh", "Delapan", "Sembilan", "Sepuluh", "Sebelas");
        $temp = "";
        if ($nilai < 12) {
            $temp = " " . $huruf[$nilai];
        } else if ($nilai < 20) {
            $temp = $this->penyebut($nilai - 10) . " Belas";
        } else if ($nilai < 100) {
            $temp = $this->penyebut($nilai / 10) . " Puluh" . $this->penyebut($nilai % 10);
        } else if ($nilai < 200) {
            $temp = " Seratus" . $this->penyebut($nilai - 100);
        } else if ($nilai < 1000) {
            $temp = $this->penyebut($nilai / 100) . " Ratus" . $this->penyebut($nilai % 100);
        } else if ($nilai < 2000) {
            $temp = " Seribu" . $this->penyebut($nilai - 1000);
        } else if ($nilai < 1000000) {
            $temp = $this->penyebut($nilai / 1000) . " Ribu" . $this->penyebut($nilai % 1000);
        } else if ($nilai < 1000000000) {
            $temp = $this->penyebut($nilai / 1000000) . " Juta" . $this->penyebut($nilai % 1000000);
        } else if ($nilai < 1000000000000) {
            $temp = $this->penyebut($nilai / 1000000000) . " Milyar" . $this->penyebut(fmod($nilai, 1000000000));
        } else if ($nilai < 1000000000000000) {
            $temp = $this->penyebut($nilai / 1000000000000) . " Trilyun" . $this->penyebut(fmod($nilai, 1000000000000));
        }
        return $temp;
    }
    public function index()
    {
        $itemGroup = itemGroup::orderBy('created_at', 'ASC')->get();
        foreach ($itemGroup as $itemGals => $item) {
            $itemGroup[$itemGals]->img = DB::table('images_item_groups')
                ->where('itemGroupId', $item->id)
                ->inRandomOrder()
                ->get();
        }
        $stock = stockGroup::orderBy('created_at', 'DESC')->get();
        foreach ($stock as $stockImg => $imgItem) {
            $stock[$stockImg]->img = DB::table('images_stock_groups')
                ->where('stockGroupId', $imgItem->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.home', ['itemGroup' => $itemGroup, 'stock' => $stock, 'stocks' => $stock]);
        // return $stock->img;
    }
    public function store()
    {
        return view('webpage.store');
    }
    public function products()
    {
        $itemGroup = itemGroup::orderBy('created_at', 'ASC')->get();
        foreach ($itemGroup as $itemGals => $item) {
            $itemGroup[$itemGals]->img = DB::table('images_item_groups')
                ->where('itemGroupId', $item->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.product.home', ['itemGroup' => $itemGroup]);
    }
    public function contactUs()
    {
        return view('webpage.contactus');
    }
    public function aboutUs()
    {
        return view('webpage.aboutus');
    }
    public function outerwear()
    {
        return view('webpage.product.outerwear');
    }
    public function groupProduct($stockgroup_id)
    {
        $item = DB::table('inventory_items')
            ->join('stock_groups', 'inventory_items.stock_group', '=', 'stock_groups.id')
            ->select('inventory_items.*', 'stock_groups.stockgroup_id', 'stock_groups.name', 'stock_groups.remarks',)
            ->where('stockgroup_id', $stockgroup_id)
            ->orderBy('inventory_items.created_at', 'DESC')
            ->get();
        foreach ($item as $itemGals => $items) {
            $item[$itemGals]->img = DB::table('inventory-items-images')
                ->where('itemid', $items->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.product.shirts', ['item' => $item]);
    }
    public function privacyPolicy()
    {
        return view('webpage.ToSPP.policy');
    }
    public function termsCondition()
    {
        return view('webpage.ToSPP.terms');
    }
    public function addSubscription(Request $request)
    {
        $sub = new subscriptions();
        $sub->email = $request->email;
        $sub->save();
        return 200;
    }
    public function sendMessage(Request $request)
    {
        // dd($request->all());
        $inbox = new inboxMessage();
        $inbox->name = $request->name;
        $inbox->email = $request->email;
        $inbox->phone = $request->phone;
        $inbox->subject = $request->subject;
        $inbox->message = $request->message;
        $inbox->save();
        return response()->json(['success' => 'success'], 200);
    }

    // Process Management
    public function getItemFromItemGroup($itemgroup_id)
    {
        $item = DB::table('inventory_items')
            ->join('item_groups', 'inventory_items.item_group', '=', 'item_groups.id')
            ->select('inventory_items.*', 'item_groups.itemgroup_id', 'item_groups.name', 'item_groups.remarks',)
            ->where('itemgroup_id', $itemgroup_id)
            ->orderBy('inventory_items.created_at', 'DESC')
            ->get();
        foreach ($item as $itemGals => $items) {
            $item[$itemGals]->img = DB::table('inventory-items-images')
                ->where('itemid', $items->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.product.sub', ['item' => $item]);
        // return $item;
    }
    public function getItemDetailsFromItemGroup($itemgroup_id, $id)
    {
        $item = DB::table('inventory_items')
            ->join('item_groups', 'inventory_items.item_group', '=', 'item_groups.id')
            ->select('inventory_items.*', 'item_groups.itemgroup_id', 'item_groups.name', 'item_groups.remarks',)
            ->where('inventory_items.id', $id)
            ->orderBy('inventory_items.created_at', 'DESC')
            ->get();
        foreach ($item as $itemGals => $items) {
            $item[$itemGals]->img = DB::table('inventory-items-images')
                ->where('itemid', $items->id)
                ->inRandomOrder()
                ->get();
        }
        $itemRelated = DB::table('inventory_items')
            ->join('item_groups', 'inventory_items.item_group', '=', 'item_groups.id')
            ->select('inventory_items.*', 'item_groups.itemgroup_id', 'item_groups.name', 'item_groups.remarks',)
            ->where('itemgroup_id', $itemgroup_id)
            ->orderBy('inventory_items.created_at', 'DESC')
            ->get();
        foreach ($itemRelated as $itemGalss => $itemsRelated) {
            $itemRelated[$itemGalss]->img = DB::table('inventory-items-images')
                ->where('itemid', $itemsRelated->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.product.detail', ['item' => $item, 'itemRelated' => $itemRelated]);
        // return $item;
    }
    public function getItemDetailsFromStockGroup($stockgroup_id, $id)
    {
        $item = DB::table('inventory_items')
            ->join('stock_groups', 'inventory_items.item_group', '=', 'stock_groups.id')
            ->select('inventory_items.*', 'stock_groups.stockgroup$stockgroup_id', 'stock_groups.name', 'stock_groups.remarks',)
            ->where('inventory_items.id', $id)
            ->orderBy('inventory_items.created_at', 'DESC')
            ->get();
        foreach ($item as $itemGals => $items) {
            $item[$itemGals]->img = DB::table('inventory-items-images')
                ->where('itemid', $items->id)
                ->inRandomOrder()
                ->get();
        }
        $itemRelated = DB::table('inventory_items')
            ->join('stock_groups', 'inventory_items.item_group', '=', 'stock_groups.id')
            ->select('inventory_items.*', 'stock_groups.stockgroup$stockgroup_id', 'stock_groups.name', 'stock_groups.remarks',)
            ->where('stockgroup$stockgroup_id', $stockgroup_id)
            ->orderBy('inventory_items.created_at', 'DESC')
            ->get();
        foreach ($itemRelated as $itemGalss => $itemsRelated) {
            $itemRelated[$itemGalss]->img = DB::table('inventory-items-images')
                ->where('itemid', $itemsRelated->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.product.detail', ['item' => $item, 'itemRelated' => $itemRelated]);
        // return $item;
    }
    public function cart()
    {
        $bank = BankCompany::where('company_id', 1)->with('company', 'bank')->get();
        return view('webpage.cart', ['bank' => $bank]);
        // return $bank;
    }
    public function addToCart(Request $req, $id)
    {
        $item = inventoryItem::find($id);
        // dd($id);
        $itemsSales = new itemsSales();
        $itemsSales->item_code = $id;
        $itemsSales->qtyOrdered = 1;
        $itemsSales->qtyShipped = '0';
        $itemsSales->qtyReturns = '0';
        $itemsSales->unit = $item->unit;
        $itemsSales->price = $item->price;

        $itemsSales->salesingId = $request->so_number ?? '0';
        $itemsSales->so_status = $request->so_status ?? '1';
        $itemsSales->created_by = 0;
        $itemsSales->updated_by = 0;
        $itemsSales->save();
        if (!$item) {
            abort(404);
        }
        $cart = session()->get('cart');

        // ngecek cart kosong dan ini merupakan produk yang pertama
        if (!$cart) {
            $cart = [
                $id => [
                    "id" => $item->id,
                    "nama_item" => $item->item_name,
                    "quantity" => 1,
                    "price" => $item->price
                ]
            ];
            session()->put('cart', $cart);
            return redirect()->back()->with('selamat', 'Product added to cart successfully!');
        }

        // jika cart tidak kosong, dan cek, jikaa produk ini ada, maka quantity di increment
        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
            session()->put('cart', $cart);
            return redirect()->back()->with('selamat', 'Product added to cart successfully!');
        }

        // jikaa iitem tidak ada di cart, maka tambahkan item ke cart dengan quantity 1
        $cart[$id] = [
            "id" => $item->id,
            "nama_item" => $item->item_name,
            "quantity" => 1,
            "fileimg" => $item->fileimg
        ];
        session()->put('cart', $cart);
        return redirect()->back()->with('selamat', 'Product added to cart successfully!');
    }
    public function checkout(Request $req)
    {
        $title = 'SO';
        $date = date('Ymd');
        $num = rand(0, 99999);

        $mix = $title . '.' . $date . '.' . $num;

        $salesOrd = new salesOrder();
        $salesOrd->so_number = $mix;
        $salesOrd->ecom_order_note = $req->ordernote;
        $salesOrd->ecom_label_recipient = $req->label;
        $salesOrd->ecom_recipient_name = $req->nama_penerima;
        $salesOrd->ecom_contact_num = $req->nohp;
        $salesOrd->ecom_city = $req->city;
        $salesOrd->ecom_zipcode = $req->zipcode;
        $salesOrd->ecom_address = $req->address;
        $salesOrd->ecom_courier = $req->pengiriman;
        $salesOrd->ecom_bank_id = $req->pembayaran;
        $salesOrd->status = 0;
        $salesOrd->type = 1;
        $salesOrd->created_by = 0;
        $salesOrd->updated_by = 0;

        $salesOrd->save();
        DB::table('items_sales')
            ->where('so_status', '=', '1')
            // PO Status 2, means having a purchasing ID
            ->update(array('salesingId' => $salesOrd->so_number, 'so_status' => '2'));

        // Report Checkout
        $salesOrder = salesOrder::where('so_number', $salesOrd->so_number)->with('bank')->first();
        $itemSales = itemsSales::where('salesingId', $salesOrder->so_number)->with('item')->get();
        $bankAccount = BankCompany::where('bank_id', $salesOrder->ecom_bank_id)->with('bank')->first();

        $item = [];
        $total = 0;
        foreach ($itemSales as $x) {
            $total = $total + $x->price * $x->qtyOrdered;
            $data = [
                "name" => $x->item->item_name,
                "price" => $x->price,
                "qty" => $x->qtyOrdered,
                "remark" => $x->remarks,
                "unit" => $x->unit,
                "priceAmount" => $x->price * $x->qtyOrdered
            ];
            array_push($item, $data);
        }

        $tax = 10;
        $taxVat = $total * $tax / 100;

        $tax = 10;
        $taxVat = $total * $tax / 100;

        $data = [
            "title" => "SALES ORDER",
            "soNumber" => $salesOrder->so_number,
            "orderDate" => $this->format_date($salesOrder->order_date),
            "createdAt" => $this->format_date($salesOrder->created_at),
            "remark" => $salesOrder->remarks,
            "customerName" => $salesOrder->ecom_recipient_name,
            "customerAddress" => $salesOrder->cecom_address,
            "customerEmail" => $salesOrder->ecom_contact_num,
            "bankPaymentName" => $bankAccount->bank->name,
            "bankCode" => $bankAccount->bank->code,
            "bankPaymentAccountName" => $bankAccount->account_name,
            "bankPaymentNo" => $bankAccount->account_no,
            "items" => $item,
            "tax" => $tax,
            "total" => $total,
            'taxVat' => $taxVat,
            'grandTotal' => $total + $taxVat,
            'counted' => $this->penyebut($total + $taxVat) . " Rupiah",
        ];
        return view('webpage.product.payment', $data);
    }
    public function removeitem(Request $request)
    {
        if ($request->id) {

            $cart = session()->get('cart');

            if (isset($cart[$request->id])) {

                unset($cart[$request->id]);

                session()->put('cart', $cart);
            }

            session()->flash('success', 'Product removed successfully');
        }
    }

    public function requestQuot(Request $req)
    {
        $quot = new quotation();
        $quot->request_name = $req->request_name;
        $quot->request_company = $req->request_company;
        $quot->email = $req->email;
        $quot->phone = $req->phone;
        $quot->messages = $req->messages;
        $quot->save();
        $lastId = $quot->id;

        $data = Session::get('cart');
        $idData = array_keys($data);

        foreach ($idData as $dataId) {
            $item_details = DB::table('quotation_details')
                ->insert([
                    'quotation_id' => $lastId,
                    'item_id' => $dataId,
                ]);
        }

        $itemId = itemproduk::find($idData);
        // foreach ($itemId as $dataa) {
        //     dd($dataa);
        // }
        \Mail::to($quot->email)->send(new ConfirmUserOrder($quot, $itemId));
        \Mail::to('info@putrakaryalogamsukses.com')->send(new PenawaranBaru($quot, $itemId));
        session()->flush();
        return redirect('/cart')->with('selamat', 'Your request quotation order has been succesfully received. And within 2x24 hours, please wait for our responds. And if we have no responds, you can remind us from info@putrakaryalogamsukses.com. Thank you :)');
    }
    public function payment()
    {
        return view('webpage.product.payment');
    }
}
