<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Shopify\Clients\Rest;


class ProductController extends Controller
{
    public function create()
    {
        return view('product.create');
    }


    public function store(Request $request)
    {

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'product_type' => 'required|string|max:255',
        ]);

        try {
            $product = Product::create($validated);

            if ($product) {
                return redirect()->route('product.create')->with('success', 'Product created successfully!');
            } else {
                Log::error('Product creation failed', ['product_data' => $validated]);
                return redirect()->route('product.create')->withErrors('Product could not be created at this time.');
            }

            // $shopify = new Rest(env('SHOPIFY_STORE'), env('SHOPIFY_ACCESS_TOKEN'));

            // $payload = [
            //     'product' => [
            //         'title' => $validated['title'],
            //         'body_html' => $validated['description'],
            //         'product_type' => $validated['product_type'],
            //         'variants' => [
            //             [
            //                 'price' => $validated['price'],
            //             ]
            //         ]
            //     ]
            // ];

            // $response = $shopify->post('products', $payload);

            // if ($response->getStatus() === 201) {
            //     return redirect()->route('product.create')->with('success', 'Product created successfully!');
            // }

            // \Log::error('Shopify API Error', ['response' => $response->getDecodedBody()]);

            // return redirect()->back()->withErrors('Failed to create the product. Please try again later.');

        } catch (\Exception $e) {

            // \Log::error('Shopify Product Creation Exception', ['error' => $e->getMessage()]);

            // return redirect()->back()->withErrors('An unexpected error occurred. Please try again.');

            Log::error('Product creation error', ['error' => $e->getMessage()]);

            return redirect()->route('product.create')->withErrors('An unexpected error occurred while creating the product.');
        }
    }

}
