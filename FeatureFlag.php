<?php

/**
 * CustomerComms feature flag
 */

namespace Domain\Providers\Features;

use Domain\Providers\Models\Provider;

class CustomerComms
{
    /**
     * The allowed providers handle.
     * De leverantörer som får använda funktionen.
     */
    private const ALLOWED_PROVIDERS = [
        'dodays-demo',
        'demo-company-1',
        'demo-company-2',
    ];

    /**
     * Resolve the feature's initial value.
     * Funktion för att hantera om leverantören får använda funktionen eller ej.
     */
    public function resolve(Provider $provider): mixed
    {
        return in_array($provider->handle, self::ALLOWED_PROVIDERS);
    }
}
