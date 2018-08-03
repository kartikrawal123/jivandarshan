<?php
$team = PostType::make('teams', 'Teams', 'Team')->set([
'public' => true,
'has_archive' => true,
'supports' => ['title', 'editor','thumbnail'],
'rewrite' => [
'slug' => 'teams'
]
]);
$rewriteParameters = $team->get('rewrite');
$slug = $rewriteParameters['slug'];
Metabox::make('link', 'teams')->set([
    Field::text('facebook'),
    Field::text('pinterest')
]);
Metabox::make('Occupation', 'teams')->set([
    Field::text('occupation')
]);

