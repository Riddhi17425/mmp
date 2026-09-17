<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Blog;
use Illuminate\Support\Carbon;

class SitemapController extends Controller
{
    public function index()
    {
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";

        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        // 1. HOME PAGE

        $xml .= "<url>\n";

        $xml .= "<loc>"
            . htmlspecialchars(url('/'), ENT_XML1, 'UTF-8')
            . "</loc>\n";

        $xml .= "<lastmod>"
            . Carbon::now()->toAtomString()
            . "</lastmod>\n";

        $xml .= "<priority>1.00</priority>\n";

        $xml .= "</url>\n";

        // 2. PRODUCT CATEGORIES

        $categories = Category::where('is_delete', '0')
            ->whereNotNull('category_url')
            ->where('category_url', '!=', '')
            ->get();

        foreach ($categories as $category)
        {
            $loc = route('product', [
                'url' => $category->category_url,
            ]);

            $xml .= "<url>\n";

            $xml .= "<loc>"
                . htmlspecialchars($loc, ENT_XML1, 'UTF-8')
                . "</loc>\n";

            if ($category->updated_at)
            {

                $xml .= "<lastmod>"
                    . Carbon::parse($category->updated_at)->toAtomString()
                    . "</lastmod>\n";
            }

            $xml .= "<priority>0.80</priority>\n";

            $xml .= "</url>\n";
        }

        // 3. PRODUCT DETAIL PAGES

        $products = Product::where('is_delete', '0')
            ->whereNotNull('producturl')
            ->where('producturl', '!=', '')
            ->get();

        foreach ($products as $product)
        {
            $loc = route('productdetail', [
                'url' => $product->producturl,
            ]);

            $xml .= "<url>\n";

            $xml .= "<loc>"
                . htmlspecialchars($loc, ENT_XML1, 'UTF-8')
                . "</loc>\n";

            if ($product->updated_at)
            {

                $xml .= "<lastmod>"
                    . Carbon::parse($product->updated_at)->toAtomString()
                    . "</lastmod>\n";
            }

            $xml .= "<priority>0.80</priority>\n";

            $xml .= "</url>\n";
        }

        // 4. STATIC FRONTEND PAGES

        $staticRoutes = [
            'pharmaindustry',
            'chemicalindustry',
            'Watertreatment',
            'foodbeverage',
            'textiletndustry',
            'dairyindustry',
            'oilandgasindustry',
            'cementindustry',
            'powerindustry',
            'casestudy',
            'about',
            'zerofoaming',
            'filter-cartridges-in-usa',
            'certifications',
            'partnership',
            'landing-page',
            'contact',
            'pp-filtration-yarn-in-usa',
            'melt-blown-filter-cartridges-in-usa',
            'wound-filter-cartridges-in-usa',
            'wound-filter-cartridges-machine-in-usa',
            'mrb',
            'mab',
            'liquidbag',
            'woundfiltercartridgemachine',
            'career',
            'event',
            'machinery',
            'blog',
        ];

        foreach ($staticRoutes as $routeName)
        {
            try
            {
                $loc = route($routeName);
            }
            catch (\Throwable $e)
            {
                continue;
            }

            $xml .= "<url>\n";

            $xml .= "<loc>"
                . htmlspecialchars($loc, ENT_XML1, 'UTF-8')
                . "</loc>\n";

            $xml .= "<lastmod>"
                . Carbon::now()->toAtomString()
                . "</lastmod>\n";

            $xml .= "<priority>0.60</priority>\n";

            $xml .= "</url>\n";
        }

        // 5. BLOG DETAIL PAGES

        $blogs = blog::where('is_delete', '0')
            ->where('status', 'Active')
            ->whereNotNull('url')
            ->where('url', '!=', '')
            ->get();

        foreach ($blogs as $blog)
        {
            $loc = route('blogdetail', [
                'url' => $blog->url,
            ]);

            $xml .= "<url>\n";

            $xml .= "<loc>"
                . htmlspecialchars($loc, ENT_XML1, 'UTF-8')
                . "</loc>\n";

            if ($blog->updated_at)
            {
                $xml .= "<lastmod>"
                    . Carbon::parse($blog->updated_at)->toAtomString()
                    . "</lastmod>\n";
            }

            $xml .= "<priority>0.60</priority>\n";

            $xml .= "</url>\n";
        }

        // END SITEMAP

        $xml .= '</urlset>';
        
        return response($xml, 200, [
            'Content-Type' => 'application/xml; charset=UTF-8',
        ]);
    }
}