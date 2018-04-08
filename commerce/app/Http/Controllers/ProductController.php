<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
Use Alert;
use App\Http\Requests;
use App\Product;
use Session;
use Charts;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()

    {
        $products=Product::all();

        return view('admin.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user=Auth::user();
        //validation
        $this->validate($request,[
         'title'=>'required',
         'price'=>'required',
         'description'=>'required',

        ]);
       //handel file upload
       if($request->hasFile('image')){
        $file = $request->file('image') ;
        
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/images/' ;
        $file->move($destinationPath,$fileName);
    }
    else{
       $fileName='noimage.jpg';
   }

   //add product
   $product= new Product;
$product->title=$request->input('title');
$product->price=$request->input('price');
$product->description=$request->input('description');
$product->network=$request->input('network');
$product->release_date=$request->input('release_date');
$product->camera=$request->input('camera');
$product->os=$request->input('os');
$product->size=$request->input('size');
$product->cpu=$request->input('cpu');
$product->status=$request->input('status');
$product->categ=$request->input('categ');
$product->image=$fileName;
$product->user_id=$user->id;
$product->save();
alert()->message('Product Added Successfuly');
return redirect('/adminpanel/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        return view('admin.product.edit',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         //validation
         $this->validate($request,[
            'title'=>'required',
            'price'=>'required',
            'description'=>'required',
   
           ]);
        
   
      //add product
      $product= Product::find($id);
   $product->title=$request->input('title');
   $product->price=$request->input('price');
   $product->description=$request->input('description');
   $product->network=$request->input('network');
$product->release_date=$request->input('release_date');
$product->camera=$request->input('camera');
$product->os=$request->input('os');
$product->size=$request->input('size');
$product->cpu=$request->input('cpu');
   $product->status=$request->input('status');
   
   $product->save();
   return redirect('/adminpanel/products');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product=Product::find($id);
        $product->delete();
       
        return redirect('/adminpanel/products');
    }
    public function showAllProducts()
    {
        $product=Product::where('status',1)->paginate(6);
        return view('website.pro.index',compact('product'));
    }
    /*
    public function addToCart(Request $request, $id)
    {
        $product=Product::find($id);
        $oldcart=Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldcart);
        $cart->add($product,$product->id);
        $request->session()->put('cart',$cart);
       // dd($request->session()->get($cart));
        return redirect('website.pro.index');
    }
    */
    public function samsung()
    {
        $product=Product::where('categ',4)->where('status',1)->paginate(6);
        return view('website.pro.index',compact('product'));
    }
    public function huawei()
    {
        $product=Product::where('categ',1)->where('status',1)->paginate(6);
        return view('website.pro.index',compact('product'));
    }
    public function oppo()
    {
        $product=Product::where('categ',3)->where('status',1)->paginate(6);
        return view('website.pro.index',compact('product'));
    }
    public function motrola()
    {
        $product=Product::where('categ',2)->where('status',1)->paginate(6);
        return view('website.pro.index',compact('product'));
    }
    public function iphone()
    {
        $product=Product::where('categ',0)->where('status',1)->paginate(6);
        return view('website.pro.index',compact('product'));
    }
    public function cartView()
    {
        return view ('website.pro.cart');
    }

    public function singleProduct($id)
    {
        $product= Product::find($id);
        return view('website.pro.singlepro',compact('product'));
    }
    public function productChart()
    {
        $chart = Charts::database(Product::all(), 'bar', 'highcharts')
        ->responsive(false)
        ->width(0)
        ->title("Monthly Product Insertion")
        ->elementLabel("Total Products")
        ->dimensions(1000, 500)
        ->groupByMonth('2018', true);
        return view('admin.product.chart',compact('chart'));

    }


    public function productSalesChart()
    {
        $chart = Charts::database(Product::all(), 'bar', 'highcharts')
        ->responsive(false)
        ->width(0)
        
        ->dimensions(1000, 500)
        ->groupBy('categ',null, [0 => 'Iphone', 1 => 'Huawei ', 2 => 'Motrola',3 => 'Oppo', 4 => 'Samsung']);
        return view('admin.product.salesChart',compact('chart'));

    }


}
