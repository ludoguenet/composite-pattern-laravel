<?php

it('returns a successful response', function () {
    $response = $this->get('/budget');

    $response->assertSee(280000);
});
