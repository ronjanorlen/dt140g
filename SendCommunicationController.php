<?php

/** Controller for sending communications */

namespace App\Providers\Communication\Controllers;

use Illuminate\Http\Request;
use Domain\Communication\Models\Communication;
use Domain\Users\Enums\Role;

class SendCommunicationController
{
    public function __invoke(Request $request)
    {
        Communication::create([
            'provider_id' => provider()->id,
            'subject' => $request->input('subject'),
            'body' => $request->input('body'),
        ]);


        return redirect()
            ->route('providers.users.index', ['filter[role]' => Role::customer])
            ->with('success', 'Communication sent successfully.');
    }
}
