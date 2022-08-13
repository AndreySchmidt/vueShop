<?php

namespace App\Http\Controllers\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use App\Models\ProductTag;
use App\Models\ColorProduct;
use Illuminate\Support\Facades\Storage;

class StoreController extends Controller
{
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();

        // положит картинку и вернет путь
        $data['preview_image'] = Storage::disk('public')->put('/images', $data['preview_image']);

        $tagIds = $data['tags'];
        $colorIds = $data['colors'];

        unset($data['tags'], $data['colors']);

        $product = Product::firstOrCreate(['title'=>$data['title']], $data);

        foreach($tagIds AS $id)
        {
            ProductTag::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'tag_id' => $id,
                ]
            );
        }

        foreach($colorIds AS $id)
        {
            ColorProduct::firstOrCreate(
                [
                    'product_id' => $product->id,
                    'color_id' => $id,
                ]
            );
        }

        return redirect()->route('product.index');
    }
}
