<?php 

if(isset($_GET['page'])){
    if("home" == $_GET['page']){
        include "pages/include/home.php";
    }elseif("about" == $_GET['page']){
        include "pages/include/template-parts/about.php";
    }
    elseif("services" == $_GET['page']){
        include "pages/include/template-parts/service.php";
    }
    elseif("portfolio" == $_GET['page']){
        include "pages/include/template-parts/portfolio.php";
    }
    elseif("contact" == $_GET['page']){
        include "pages/include/template-parts/contact.php";
    }
    elseif("hireme" == $_GET['page']){
        include "pages/include/template-parts/hireme.php";
    }
}