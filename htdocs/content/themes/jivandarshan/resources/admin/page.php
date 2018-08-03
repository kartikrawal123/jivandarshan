<?php
//
////Metabox::make('about', 'page')->set([
////    Field::textarea('aboutbgi', ['title' => 'About bgi']),
////    Field::textarea('ourinfrastructure', ['title' => 'Our Infrastructure']),
////    Field::media('pic', ['title' => 'Thumbnail']),
////    Field::text('Projects', ['title' => 'Total Projects'], ['class' => 'custom-text-class']),
////    Field::text('Clients', ['title' => 'Total Clients'], ['class' => 'custom-text-class']),
////    Field::text('Awards', ['title' => 'Total Awards'], ['class' => 'custom-text-class']),
////    Field::text('Workers', ['title' => 'Total Workers'], ['class' => 'custom-text-class'])
////]);
////
////Metabox::make('product', 'page')->set([
////    Field::textarea('aboutbgi', ['title' => 'About bgi']),
////    Field::textarea('ourinfrastructure', ['title' => 'Our Infrastructure']),
////    Field::media('pic', ['title' => 'Thumbnail']),
////]);
////
////Metabox::make('contact', 'page')->set([
////    Field::textarea('Address', ['title' => 'Address']),
////    Field::text('Email', ['title' => 'Emails']),
////    Field::text('CallNow', ['title' => 'Call Now']),
////    Field::text('Time', ['title' => 'Time'], ['class' => 'custom-text-class'])
////]);
////Metabox::make('map', 'page')->set([
////    Field::text('latitude', ['title' => 'Map latitude']),
////    Field::text('longitude', ['title' => 'Map longitude']),
////
////]);
//
//
//$about = get_page_by_path('about-us');
//
//if (themosis_is_post($about->ID))
//{
//    Metabox::make('Additional', 'page')->set([
//        Field::textarea('about', ['title' => 'About JD']),
//        Field::textarea('ourinfrastructure', ['title' => 'Our Infrastructure']),
//        Field::media('aboutpic', ['title' => 'Thumbnail']),
//        Field::text('Projects', ['title' => 'Total Projects'], ['class' => 'custom-text-class']),
//        Field::text('Clients', ['title' => 'Total Clients'], ['class' => 'custom-text-class']),
//        Field::text('Awards', ['title' => 'Total Awards'], ['class' => 'custom-text-class']),
//        Field::text('Workers', ['title' => 'Total Workers'], ['class' => 'custom-text-class'])
//    ]);
//
//
//
//
//
//}
//$contact = get_page_by_path('contact-us');
//
//if (themosis_is_post($contact->ID))
//{
//    Metabox::make('Additional', 'page')->set([
//        Field::textarea('Address', ['title' => 'Address']),
//        Field::text('Email', ['title' => 'Emails']),
//        Field::text('CallNow', ['title' => 'Call Now']),
//        Field::text('Time', ['title' => 'Time'], ['class' => 'custom-text-class'])
//    ]);
//}