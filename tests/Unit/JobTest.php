<?php

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer', function () {
    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);
    expect($job->employer->is($employer))->toBeTrue();
});


it('can have tag!', function () {
    // AAA
    $job = Job::factory()->create();
    $job->tag('FrontEnd');
    expect($job->tags)->toHaveCount(1);
});
