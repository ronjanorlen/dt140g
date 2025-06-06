<?php
            Route::prefix('communications')->name('communications.')->group(function () {
                Route::post('/', SendCommunicationController::class)->name('store');
            });