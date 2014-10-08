<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title><?php wp_title( '|', true, 'right' ); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/css/layout.css" rel="stylesheet" type="text/css" />
    <?php wp_head(); ?>
</head>

<body>

    <div id="header">
        <a href="#">
            <img src="<?php echo get_template_directory_uri(); ?>/logo.png" alt="Dettol" height="62" width="60" />
        </a>
        <a href="#" class="right">
            <img src="<?php echo get_template_directory_uri(); ?>/logo-right.png" alt="Dettol" height="62" width="60" />
        </a>
    </div>
    <div class="clearfix"></div>

    <div id="side">
        <ul>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'MEREKA YANG MEMBUTUHKAN' ) ) ); ?>">MEREKA YANG MEMBUTUHKAN</a>
            </li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'DUKUNGAN YANG DITERIMA' ) ) ); ?>">DUKUNGAN YANG DITERIMA</a>
            </li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'GALERI DUKUNGAN ANDA' ) ) ); ?>">GALERI DUKUNGAN ANDA</a>
            </li>
            <li><a href="<?php echo esc_url( get_permalink( get_page_by_title( 'ULURKAN TANGAN' ) ) ); ?>">ULURKAN TANGAN</a>
            </li>
        </ul>
    </div>