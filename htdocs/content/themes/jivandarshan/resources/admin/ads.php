<?php
$page = Page::make( 'ads-desktop-home', 'Ad Management' )->set( [
    'tabs'       => false,
    'capability' => 'manage_options',
    'icon'       => 'dashicons-admin-site',
    'position'   => 20,
    'menu'       => __( "Ad Management" )
] );

$sections[] = Section::make( 'desktop-home', 'Home Page' );


$settings['desktop-home'] = [
    Field::textarea( 'header-right', [
        'title' => 'header right - 728px width 90px height',
        'info'  => 'This ad will be displayed after header on homepage',
    ] ),

    Field::textarea( 'widget-ads', [
        'title' => 'widget ads responsive for mobile and desktop',
        'info'  => 'This ad will be displayed After first two-category section',
    ] ),
    Field::textarea( 'responsive-ads', [
        'title' => 'responsive for mobile and desktop',
        'info'  => 'This ad will be displayed After first two-category section',
    ] ),
];

$page->addSections( $sections );
$page->addSettings( $settings );

//
//$m_page = Page::make( 'ads-mobile-home', 'Ad Management-Mobile ' )->set( [
//    'tabs'       => false,
//    'capability' => 'manage_options',
//    'icon'       => 'dashicons-admin-site',
//    'position'   => 20,
//    'menu'       => __( "Ad Management-Mobile " )
//] );
//
//$m_sections[] = Section::make( 'mobile-home', 'Home Page' );
//
//
//$m_settings['mobile-home'] = [
//    Field::textarea( 'after-slider-section', [
//        'title' => 'After slider section',
//        'info'  => 'This ad will be displayed after slider section on homepage',
//    ] ),
//    Field::textarea( 'after-every-two-categorysection', [
//        'title' => 'After first two-category section',
//        'info'  => 'This ad will be displayed After first two-category section',
//    ] ),
//];
//
//
//$m_page->addSections( $m_sections );
//$m_page->addSettings( $m_settings );
//
//// Category Page
//$category = Page::make( 'ads-mobile-category', 'Category', 'ads-mobile-home' )->set( [
//    'tabs'       => false,
//    'capability' => 'manage_options',
//    'icon'       => 'dashicons-admin-site',
//    'position'   => 20,
//    'menu'       => __( "Category" )
//] );
//
//
//$categorysections[] = Section::make( 'category-home', 'Category Page' );
//$categorysettings['category-home'] = [
//    Field::textarea( 'after-every-two-category-row', [
//        'title' => 'after-every-two-category-row',
//        'info'  => 'This ad will be displayed after first three-category on categorypage',
//    ] ),
//];
//
//$category->addSections( $categorysections );
//$category->addSettings( $categorysettings );
//
//
//// Post Page
//$post = Page::make( 'ads-mobile-post', 'Post', 'ads-mobile-home' )->set( [
//    'tabs'       => false,
//    'capability' => 'manage_options',
//    'icon'       => 'dashicons-admin-site',
//    'position'   => 20,
//    'menu'       => __( "Postpage" )
//] );
//
//
//$postsections[] = Section::make( 'post-home', 'Post Page' );
//$postsettings['post-home'] = [
//    Field::textarea( 'after-first-paragraph', [
//        'title' => 'After first paragraph',
//        'info'  => 'This ad will be displayed After first paragraph on postpage',
//    ] ),
//    Field::textarea( 'after-three-image', [
//        'title' => 'After three image',
//        'info'  => 'This ad will be displayed After three image on postpage',
//    ] ),
//    Field::textarea( 'after-related', [
//        'title' => 'After related',
//        'info'  => 'This ad will be displayed After related stories on postpage',
//    ] ),
//];
//
//$post->addSections( $postsections );
//$post->addSettings( $postsettings );
//
//
////Global Header
//$global_mobile = Page::make( 'ads-mobile-global', 'Global-Header', 'ads-mobile-home' )->set( [
//    'tabs'       => false,
//    'capability' => 'manage_options',
//    'icon'       => 'dashicons-admin-site',
//    'position'   => 20,
//    'menu'       => __( "Global Header" )
//] );
//
//$m_sections_global[] = Section::make( 'mobile-global', 'Global Header' );
//
//
//$m_settings_global['mobile-global'] = [
//    Field::textarea( 'before-header', [
//        'title' => 'Before Header - 728px width 90px height',
//        'info'  => 'This ad will be displayed before the header section',
//    ] ),
//];
//
//
//$global_mobile->addSections( $m_sections_global );
//$global_mobile->addSettings( $m_settings_global );