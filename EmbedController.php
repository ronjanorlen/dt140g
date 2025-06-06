<?php
/**
 * Code block added to the EmbedController 
 */

$stages = $provider
            ->stages()
            ->select([
                'stages.id',
                'stages.name',
            ])
            ->public()
            ->get();

        return view('providers::settings.embed', [
            'stages' => $stages,
        ]);