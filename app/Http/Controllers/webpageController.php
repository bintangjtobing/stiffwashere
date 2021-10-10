<?php

namespace App\Http\Controllers;

use App\inboxMessage;
use App\inventoryItem;
use App\itemGroup;
use App\subscriptions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class webpageController extends Controller
{
    public function index()
    {
        $itemGroup = itemGroup::orderBy('created_at', 'ASC')->get();
        foreach ($itemGroup as $itemGals => $item) {
            $itemGroup[$itemGals]->img = DB::table('images_item_groups')
                ->where('itemGroupId', $item->id)
                ->inRandomOrder()
                ->get();
        }
        return view('webpage.home', ['itemGroup' => $itemGroup]);
        // return $itemGroup;
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
    public function shirts()
    {
        return view('webpage.product.shirts');
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
    public function cart()
    {
        return view('webpage.cart');
    }
    public function addToCart(Request $req, $id)
    {
        $item = inventoryItem::find($id);
        // dd($id);

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
}
