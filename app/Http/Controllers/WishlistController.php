<?php

namespace App\Http\Controllers;

use App\Wishlist;
use Auth;

class WishlistController extends Controller
{
    private $repo;

    public function __construct(Wishlist $wishlist)
    {
        $this->repo = $wishlist;
    }


    public function addToWishList($id)
    {
        $data = [];
        $userId = Auth::id();
        $isAdded = $this->repo->checkIfInWishList($id);
        // check if the user is auth or not
        if (Auth::check()) {
            // check if item is in wishlist..
            if ($isAdded) {
                Wishlist::where('product_id', $id)->where('user_id', $userId)->delete();
                $count = Wishlist::where('user_id', $userId)->count();
                return \Response::json(['error' => 'Product Removed on wishlist', 'count_remove' => $count]);

            } else {
                $data['user_id'] = $userId;
                $data['product_id'] = $id;
                Wishlist::create($data);
                $count = Wishlist::where('user_id', $userId)->count();
                return \Response::json(['success' => 'Product Added on wishlist', 'count_add' => $count]);

            }
        } else {
            \Response::json(['error' => 'Login']);
            return redirect()->route('login');
        }
    }
}
