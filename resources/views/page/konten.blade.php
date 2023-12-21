<?php

if(isset($_GET['url'])){
    $url=$_ GET['url'];

    switch ($url) {
        case 'galeri':
           include "page.galery"
            break;
        
        default:
            # code...
            break;
    }
}