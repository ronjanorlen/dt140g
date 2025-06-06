<?php

/*** Test case for SendCommunicationController */

use App\Communication;
use Domain\Users\Models\User;

beforeEach(fn() => asAdmin());

test('send communication', function () {
    $customer = User::factory()->customer($this->provider)->create();

    $this
        ->post(route('providers.communications.store'), [
            'subject' => 'Test Subject',
            'body' => 'This is a test communication body.',
            'recipients' => [$customer->id]
        ])
        ->assertRedirect(route('providers.users.index'))
        ->assertSessionHasNoErrors()
        ->assertSessionHas('success');

    $this->assertDatabaseHas('communications', [
        'provider_id' => $this->provider->id,
        'subject' => 'Test Subject',
        'body' => 'This is a test communication body.'
    ]);
});
