<?php

namespace App\Http\Controllers;

use App\Quote;
use Illuminate\Http\Request;

class QuoteController extends Controller
{


    public function random(){
        $quote = Quote::inRandomOrder()->limit(1)->first();
        return redirect('/' . $quote->getKey());
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function uniqueQuote($id){
        $quote = Quote::find($id);
        if(!$quote){
            return redirect('/');
        }
        return view('quote', ['quote' => Quote::find($id)]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $newQuote = new Quote;

        // $newQuote->content = "If you want to become a great chef, you have to work with great chefs. And that's exactly what I did.";

        // $newQuote->save();
        return Quote::orderBy('RANDOM()')->limit(1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Batch creation 
        $data = json_decode($request->getContent());
        
        foreach($data as $raw_quote){
	        $newQuote = new Quote();
	        $newQuote->content = $raw_quote;
	        $newQuote->save();
        }

        //@todo
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function show(Quote $quote)
    {
        return view('quote', $quote);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function edit(Quote $quote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quote $quote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quote  $quote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quote $quote)
    {
        //
    }
}
