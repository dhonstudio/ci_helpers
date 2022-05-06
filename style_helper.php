<?php

$ci = get_instance();

$ci->css = [
    'bootstrap4'        => '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">',
    'bootstrap5'        => '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">',
    'bootstrap-icons'   => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.7.1/font/bootstrap-icons.css" integrity="sha512-V/16/YNWHyRzk7KwjMaRnwztuPcKdZhOA/DQjTmfzOdQ86B/ajDXFL3alrxyr0fBYROOk4PU26Bm7nmHUB8nEg==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
    'datatables'        => '<link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />',
    'datatables111'     => '<link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet" />',
    'datatablesFH'      => '<link href="https://cdn.datatables.net/fixedheader/3.2.2/css/fixedHeader.dataTables.min.css" rel="stylesheet" />',
    'fontawesome4'      => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">',
    'fontawesome5'      => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
    'sb-admin'          => '<link href="https://dhonstudio.com/assets/vendor/sb-admin/css/styles.css" rel="stylesheet" />',
    'sb-admin-2'        => '<link href="https://dhonstudio.com/assets/vendor/sb-admin-2/css/sb-admin-2.min.css" rel="stylesheet">',
    'sb-admin-2-font'   => '<link href="https://dhonstudio.com/assets/vendor/sb-admin-2/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">',
    'sb-landingpage'    => '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/startbootstrap-landing-page/5.0.9/css/landing-page.min.css" integrity="sha512-VQ39cuBEpcyaHlg16L9J8U8sZt6Tikc6heQzx5nh1dqe6hHGjCHrLMg+EyAkHRxr6qj9FN1eAFhpNSAda6qNqg==" crossorigin="anonymous" referrerpolicy="no-referrer" />',
    'w3css'             => '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">',
];

$ci->font = [
    'google-ElsieSwashCaps' => '<link href="https://fonts.googleapis.com/css?family=Elsie+Swash+Caps:400,900" rel="stylesheet">',
    'google-Lato'           => '<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">',
    'google-Montserrat'     => '<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">',
    'google-Nunito'         => '<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">',
    'google-OpenSans'       => '<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">',
    'google-Poppins'        => '<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">',
    'google-Raleway'        => '<link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">',
    'google-SourceSansPro'  => '<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">',
];

$ci->js = [
    'bootstrap4'        => '<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>',
    'bootstrap5'        => '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.1.3/js/bootstrap.min.js" integrity="sha512-OvBgP9A2JBgiRad/mM36mkzXSXaJE9BEIENnVEmeZdITvwT09xnxLtT4twkCa8m/loMbPHsvPl0T8lRGVBwjlQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>',
    'bootstrap-bundle4' => '<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/js/bootstrap.bundle.min.js" integrity="sha512-mULnawDVcCnsk9a4aG1QLZZ6rcce/jSzEGqUkeOLy0b6q0+T6syHrxlsAGH7ZVoqC93Pd0lBqd6WguPWih7VHA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>',
    'bootstrap-bundle5' => '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>',
    'chart28'           => '<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>',
    'datatables'        => '<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>',
    'datatables111'     => '<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>',
    'datatablesFH'      => '<script src="https://cdn.datatables.net/fixedheader/3.2.2/js/dataTables.fixedHeader.min.js"></script>',
    'fontawesome5'      => '<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>',
    'jquery35'          => '<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>',
    'jquery36'          => '<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>',
    'jquery-easing'     => '<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js" integrity="sha512-0QbL0ph8Tc8g5bLhfVzSqxe9GERORsKhIn1IrpxDAgUsbBGz/V7iSav2zzW325XGd1OMLdL4UiqRJj702IeqnQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>',
    'sb-admin'          => '<script src="https://dhonstudio.com/assets/vendor/sb-admin/js/scripts.js"></script>',
    'sb-admin-2'        => '<script src="https://dhonstudio.com/assets/vendor/sb-admin-2/js/sb-admin-2.min.js"></script>',
];
