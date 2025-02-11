<?php
use App\Models\Employer;
use App\Models\Job;

//test('example', function () {
//    expect(true)->toBeFalse();
//});

/*


it('belongs to an employer', function () {
    // Arrange - Act - Assert

    // Arrange - create the test in order to test
        // create an Employer
        $employer = Employer::factory()->create();

        // 'it' which is method name refers to the job, but we don't have a job yet, so let's create a job:
        $job = Job::factory()->create(['employer_id' => $employer->id,]);

        // if you want to overwrite any value, pass it as an array.

    // Act - perform some kind of action
        // interact with the codebase the way you want

    // Assert - what do you expect to happen in response to the action

    // Act and Assert
        expect($job->employer->is($employer))->toBeTrue();

        // 'is()' checking that the instance you had passed is the current instance or not.
});

*/

// Example of Test Driven Development - TDD Approach

    // A Job can have Tags.
it('can have tags', function() {

    // Arrange
    $job = Job::factory()->create();

    // Act
    // attach a tag with a job
    $job->tag('Frontend');

    // Assert
    // job has a collection of tags containing at least one tag
    expect($job->tags)->toHaveCount(1);
});
