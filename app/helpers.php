<?php

use Illuminate\Support\Facades\Storage;

function storage() {
    return 'gcs';
}

function disk() {
    return Storage::disk(storage());
}

function disk_get_url($path, $add_minute=null) {

    if(str($path)->startsWith('gcs')) {
        return disk()->temporaryUrl($path, $add_minute ?? now()->addMinutes(30));
    } else {
        return disk()->url($path);
    }
}
