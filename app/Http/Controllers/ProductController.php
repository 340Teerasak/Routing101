<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{

    private $products = [
        ['id' => 1, 'name' => 'ROG Phone 8',
       'description' => ' Snapdragon 8 Gen 3, หน้าจอ AMOLED 6.78',
       'price' => 794,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/DCB7E40C-CB0E-45CD-8BF8-6E8E7E71BCE7'],
        ['id' => 2, 'name' => 'ROG Phone 9',
       'description' => 'powered by the 3-nanometer Snapdragon® 8 Elite Mobile Platform',
       'price' => 1200,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/76197E5F-0FDF-497E-A90A-2253D6E3FA11/w1000/h732'],
        ['id' => 3, 'name' => 'ROG Zephyrus G16',
       'description' => 'Intel Core Ultra 9-185H การ์ดจอRTX 4070',
       'price' => 2323,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/6A42560A-BF3E-4940-9AE6-DF6D3794C70A'],
        ['id' => 4, 'name' => 'ROG Zephyrus G14',
       'description' => 'AMD Ryzen™ 9 8945HS',
       'price' => 2059,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/3D241166-0518-4745-B481-D901886BFD14'],
        ['id' => 5, 'name' => 'Asus ROG Zephyrus G15',
       'description' => 'AMD Ryzen™ 9 5900HS',
       'price' => 1470,
       'image' => 'https://media-cdn.bnn.in.th/122211/Asus-Notebook-ROG-ZEPHYRUS-G15-GA503QS-HQ104T-Grey-1-square_medium.jpg'],
        ['id' => 6, 'name' => 'ROG Delta S EVA Edition',
       'description' => 'Industry-leading high-resolution ESS 9281 with QUAD DAC™ technology, plus MQA technology support delivers impeccably detailed, true-to-life audio',
       'price' => 235,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/11A6F5F4-FE72-411A-857B-CDBD7E5D5DA3/w717/h525'],
        ['id' => 7, 'name' => 'ROG Fusion II 300',
       'description' => 'High-resolution ESS 9280 with Quad DAC™ technology for realistic, unparalleled gaming audio',
       'price' => 88,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/AE87E296-D3B4-4286-B174-8A50EB4F642E/w717/h525'],
        ['id' => 8, 'name' => 'ROG Azoth Extreme',
       'description' => 'ROG Azoth Extreme 75% gaming custom keyboard featuring a full aluminum alloy chassis',
       'price' => 203,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/EE775D8C-D6ED-45F7-83DB-2B275BDC772C/w717/h525/w273'],
        ['id' => 9, 'name' => 'ROG Falchion Ace',
       'description' => 'ROG Falchion Ace 65% compact gaming keyboard with pre-lubed ROG NX mechanical switches with ROG switch stabilizer',
       'price' => 76,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/EE4EA6C5-0938-4292-BFA6-DC0A56756148/w717/h525/w273'],
        ['id' => 10, 'name' => 'ROG Claymore II',
       'description' => 'ROG Claymore II modular TKL 80%/100% gaming mechanical keyboard with ROG RX Optical Mechanical Switches,',
       'price' => 182,
       'image' => 'https://dlcdnwebimgs.asus.com/gain/7BDBE811-9350-400C-BE5E-AB1614972EC4/w717/h525'],
        ];

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Inertia::render('Products/Index',['products'=>$this->products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = collect($this->products)->firstWhere('id',$id);

        if(!$products){
            abort(404,'Product not found');
        }
        return Insertia::render('Products/Show',['Product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
