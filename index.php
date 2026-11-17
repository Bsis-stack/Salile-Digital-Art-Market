<?php

session_start();

require('model/database.php');
require('model/login_db.php');
require('model/movie_db.php');
require('model/tv_show_db.php');
require('model/music_db.php');
require('model/podcast_db.php');
require('model/book_db.php');
require('model/comedy_db.php');
require('model/search_db.php');
require('model/buy_db.php');
//require('model/salile_db.php');


$action = filter_input(INPUT_POST, 'action');
 $member = filter_input(INPUT_GET, 'member');

if ($action === null) {
    $action = filter_input(INPUT_GET, 'action');

    if ($action === null) {
        $action = 'salile';
    }
}


/* FRONT PAGE */
if ($action === 'salile') {

    include('salile.php');
}


/* LOGIN PAGE */
else if ($action === 'login') {

    include('login.php');
}




else if ($action === 'check_login') {

    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');

    $user = get_user_by_username($db, $username);

    header('Content-Type: application/json');

    if ($user && password_verify($password, $user['password'])) {

        session_regenerate_id(true);
        $_SESSION['username'] = $user['username'];

        echo json_encode([
            'success' => true
        ]);

    } else {

        echo json_encode([
            'success' => false
        ]);
    }

    exit();
}


/* HOME PAGE */
else if ($action === 'home') {

    include('home.php');
}











else if ($action === 'music') {

    $member = filter_input(INPUT_GET, 'member');
    $branch = filter_input(INPUT_GET, 'branch');

    if ($member === 'popular') {
        $music = popular_music($branch);
        include('mainViews/music/music_list.php');
    }
    else if ($member === 'new') {
        $music = new_music($branch);
        include('mainViews/music/music_list.php');
    }
    else if ($member === 'exclusive') {
        $music = exclusive_music($branch);
        include('mainViews/music/music_list.php');
    }
    else if ($branch !== null) {
        $music = all_music($branch);
        include('mainViews/music/music_list.php');
    }
    else {
        $recommendations = [];

        foreach (['country', 'pop', 'reggae', 'rock'] as $ge) {
            $recommendations[$ge] = popular_music($ge);
        }

        include('mainViews/music/music.php');
    }
}


















/* MOVIE PAGE */
else if ($action === 'movie') {
 if ($member === null) {
        $member = filter_input(INPUT_GET, 'member');
        
    }
    
    

    
   
$branch = filter_input(INPUT_GET, 'branch');
    /* POPULAR */
    if ($member === 'popular') {
        $mov = popular_movie($branch);
        include('mainViews/movie/popular_movie.php');
    }

    /* NEW */
    else if ($member === 'new') {
        $mov = new_movie($branch);
        include('mainViews/movie/new_movie.php');
    }

    /* INTERNATIONAL */
    else if ($member === 'international') {
        $mov = international_movie($branch);
        include('mainViews/movie/international.php');
    }

    /* USA */
    else if ($member === 'usa') {
        $mov = usa_movie($branch);
        include('mainViews/movie/usa_movie.php');
    }

    /* EXCLUSIVE */
    else if ($member === 'exclusive') {
        $mov = exclusive_movie($branch);
        include('mainViews/movie/exclusive.php');
    }

    /* DEFAULT */
    else {
        $mov = all_movie($branch);
        include('mainViews/movie/all_movie.php');
    }
}





















/* TV SHOW PAGE */
else if ($action === 'tv_show') {

    $member = filter_input(INPUT_GET, 'member');
    $branch = filter_input(INPUT_GET, 'branch');

    /* POPULAR */
    if ($member === 'popular') {

        $show = popular_tv_show($branch);
        include('mainViews/tv_show/popular_tv_show.php');
    }

    /* NEW */
    else if ($member === 'new') {

        $show = new_tv_show($branch);
        include('mainViews/tv_show/new_tv_show.php');
    }

    /* INTERNATIONAL */
    else if ($member === 'international') {

        $show = international_tv_show($branch);
        include('mainViews/tv_show/international_tv_show.php');
    }

    /* USA */
    else if ($member === 'usa') {

        $show = usa_tv_show($branch);
        include('mainViews/tv_show/usa_tv_show.php');
    }

    /* EXCLUSIVE */
    else if ($member === 'exclusive') {

        $show = exclusive_tv_show($branch);
        include('mainViews/tv_show/exclusive_tv_show.php');
    }

    /* DEFAULT */
    else {

        $show = all_tv_show($branch);
        include('mainViews/tv_show/tv_show.php');
    }
}
























else if ($action === 'comedy') {

    $branch = filter_input(INPUT_GET, 'branch');

    if ($branch !== null) {

        include('mainViews/comedy/comedy_type.php');

    } else {

        include('mainViews/comedy/comedy.php');

    }
}










else if ($action === 'podcast') {

    $branch = filter_input(INPUT_GET, 'branch');
    $member = filter_input(INPUT_GET, 'member');

    if ($branch !== null && $member !== null) {

        if ($member === 'popular') {
            $podcasts = popular_podcast($branch);
        }
        else if ($member === 'recent') {
            $podcasts = recent_podcast($branch);
        }
        else if ($member === 'hot') {
            $podcasts = hot_podcast($branch);
        }
        else if ($member === 'exclusive') {
            $podcasts = exclusive_podcast($branch);
        }
        else {
            $podcasts = [];
        }

        include('mainViews/podcast/podcast_type.php');
    }
    else {
        include('mainViews/podcast/podcast.php');
    }
}







else if ($action === 'book') {

    $branch = filter_input(INPUT_GET, 'branch');
    $member = filter_input(INPUT_GET, 'member');

    if ($branch !== null && $member !== null) {

        if ($member === 'popular') {
            $books = popular_book($branch);
        }
        else if ($member === 'recent') {
            $books = recent_book($branch);
        }
        else if ($member === 'hot') {
            $books = hot_book($branch);
        }
        else if ($member === 'exclusive') {
            $books = exclusive_book($branch);
        }
        else {
            $books = [];
        }

        include('mainViews/book/book_type.php');
    }
    else {
        include('mainViews/book/book.php');
    }
}






else if ($action === 'search') {

    $keyword = trim(filter_input(INPUT_GET, 'keyword') ?? '');

    if ($keyword !== '') {
        $pro = search_products($keyword);
    } else {
        $pro = [];
    }

    include('other/searchP.php');
}






else if ($action === 'buy') {

    // Save the selected deal
    if (isset($_GET['deal'])) {

        $deal = $_GET['deal'];

        if (!in_array($deal, ['regular', 'blue', 'gold', 'diamond'], true)) {
            $deal = 'regular';
        }

        $_SESSION['deal'] = $deal;
    }

    // Remember the selected deal
    $deal = $_SESSION['deal'] ?? 'regular';

    $product_id = filter_input(
        INPUT_GET,
        'product_id',
        FILTER_VALIDATE_INT
    );

    $pro = false;

    if ($product_id && $product_id > 0) {
        $pro = get_buyout_product($product_id);
    }

    $cart = [];
    $total = 0;

    $movies = 0;
    $tv = 0;
    $music = 0;

    if (!empty($_SESSION['cart'])) {

        foreach ($_SESSION['cart'] as $id) {

            $item = get_buyout_product($id);

            if ($item) {

                $cart[] = $item;
                $total += $item['price'];

                if ($item['category_id'] == 3) {
                    $movies++;
                } elseif ($item['category_id'] == 2) {
                    $tv++;
                } elseif ($item['category_id'] == 1) {
                    $music++;
                }
            }
        }
    }

    $requirements = [
        'blue' => ['quantity' => 1, 'discount' => 5],
        'gold' => ['quantity' => 2, 'discount' => 10],
        'diamond' => ['quantity' => 3, 'discount' => 20]
    ];

    $discount = 0;

    if (isset($requirements[$deal])) {

        $quantity = $requirements[$deal]['quantity'];

        if ($movies >= $quantity &&
            $tv >= $quantity &&
            $music >= $quantity) {

            $discount = $requirements[$deal]['discount'];
        }
    }

    $final_total = max(0, $total - $discount);

    include('mainViews/buy/buy.php');
}



else if ($action === 'add_cart') {

    $product_id = filter_input(
        INPUT_POST,
        'product_id',
        FILTER_VALIDATE_INT
    );

    $deal = $_POST['deal'] ?? 'regular';

    if (!in_array($deal, ['regular', 'blue', 'gold', 'diamond'], true)) {
        $deal = 'regular';
    }

    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = [];
    }

    if ($product_id && $product_id > 0) {

        $pro = get_buyout_product($product_id);

        if ($pro && !in_array($product_id, $_SESSION['cart'])) {
            $_SESSION['cart'][] = $product_id;
        }
    }

    header('Location: index.php?action=buy&deal=' . $deal);
    exit;
}


else if ($action === 'remove_cart') {

    $product_id = filter_input(
        INPUT_POST,
        'product_id',
        FILTER_VALIDATE_INT
    );

    if ($product_id && isset($_SESSION['cart'])) {

        $_SESSION['cart'] = array_values(
            array_filter(
                $_SESSION['cart'],
                function($id) use ($product_id) {
                    return $id != $product_id;
                }
            )
        );
    }

    header('Location: index.php?action=buy');
    exit;
}




else if ($action === 'checkout') {

    $ca = [];
    $to = 0;

    $movies = 0;
    $tv = 0;
    $music = 0;

    if (!empty($_SESSION['cart'])) {

        foreach ($_SESSION['cart'] as $id) {

            $i = get_buyout_product($id);

            if ($i) {

                $ca[] = $i;
                $to += $i['price'];

                if ($i['category_id'] == 3) {
                    $movies++;
                } elseif ($i['category_id'] == 2) {
                    $tv++;
                } elseif ($i['category_id'] == 1) {
                    $music++;
                }
            }
        }
    }

    $deal = $_SESSION['deal'] ?? 'regular';

    $requirements = [
        'blue' => ['quantity' => 1, 'discount' => 5],
        'gold' => ['quantity' => 2, 'discount' => 10],
        'diamond' => ['quantity' => 3, 'discount' => 20]
    ];

    $d = 0;

    if (isset($requirements[$deal])) {

        $quantity = $requirements[$deal]['quantity'];

        if ($movies >= $quantity &&
            $tv >= $quantity &&
            $music >= $quantity) {

            $d = $requirements[$deal]['discount'];
        }
    }

    $final_total = max(0, $to - $d);

    include('mainViews/buy/checkout.php');
}



else if ($action === 'confirm_order') {

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header('Location: index.php?action=buy');
        exit;
    }

    if (empty($_SESSION['cart'])) {
        header('Location: index.php?action=buy');
        exit;
    }

    $deal = $_POST['deal'] ?? 'regular';

    if (!in_array($deal, ['regular', 'blue', 'gold', 'diamond'], true)) {
        $deal = 'regular';
    }

    $_SESSION['cart'] = [];

    include('mainViews/buy/confirmation.php');
}

else if ($action === 'contact') {

    include('other/contact.php');
}



else if ($action === 'services') {

    include('other/service.php');
}


else if ($action === 'support') {

    include('other/support.php');
}


else if ($action === 'about') {

    include('other/about.php');
}




else {

    include('salile.php');
}

?>