<?php

namespace CleaniqueCoders\LaravelReview\Tests;

class ReviewTest extends TestCase
{
    /** @test */
    public function it_has_users_table()
    {
        $this->assertHasTable('users');
    }

    /** @test */
    public function it_has_reviews_table()
    {
        $this->assertHasTable('reviews');
    }

    /** @test */
    public function it_has_mandatory_fields_in_reviews_table()
    {
        $columns = [
            'id', 'hashslug', 'user_id',
            'name', 'description',
            'is_approved', 'approved_at',
            'is_rejected', 'rejected_at', 'rejected_count',
            'deleted_at', 'created_at', 'updated_at',
        ];
        $this->assertTableHasColumns('reviews', $columns);
    }

    /** @test */
    public function it_has_review_reviewers_table()
    {
        $this->assertHasTable('review_reviewers');
    }

    /** @test */
    public function it_has_mandatory_fields_in_review_reviewers_table()
    {
        $columns = [
            'id', 'hashslug',
            'review_id', 'reviewed_by', 'reviewed_at', 'is_reviewed',
            'is_approved', 'approved_at',
            'is_rejected', 'rejected_at', 'rejected_count',
            'deleted_at', 'created_at', 'updated_at',
        ];
        $this->assertTableHasColumns('review_reviewers', $columns);
    }
}
