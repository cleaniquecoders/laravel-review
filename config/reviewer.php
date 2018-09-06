<?php


return [
    'counter' => [
        'max_rejection' => env('REVIEW_MAX_REJECTION', 3),
    ],
    'models' => [
        'review'      => \CleaniqueCoders\LaravelReview\Models\Review::class,
        'reviewers'   => \CleaniqueCoders\LaravelReview\Models\Reviewer::class,
        'user'        => \App\User::class,
        'reviewed_by' => \App\User::class,
    ],
    'table_names' => [
        'reviewed_by' => 'users',
    ],
];
