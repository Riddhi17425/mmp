<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table      = 'product';
    protected $primarykey = 'id';

    protected $casts = [
        'product_tabs' => 'array',
    ];

    public function getListingImagesAttribute()
    {
        $productTabs = $this->product_tabs;
        if (is_string($productTabs)) {
            $decodedTabs = json_decode($productTabs, true);
            if (is_string($decodedTabs)) {
                $decodedTabs = json_decode($decodedTabs, true);
            }
            $productTabs = $decodedTabs;
        }

        $images = [];
        if (is_array($productTabs)) {
            foreach ($productTabs as $tab) {
                if (is_array($tab) && ! empty($tab['product_image'])) {
                    $images = array_merge($images, explode(',', $tab['product_image']));
                }
            }
        }

        if (empty($images) && ! empty($this->product_image)) {
            $images = explode(',', $this->product_image);
        }

        return array_values(array_filter(array_map('trim', $images), function ($image) {
            return $image !== '';
        }));
    }

}
