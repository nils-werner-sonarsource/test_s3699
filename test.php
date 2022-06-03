<?php

function test($filetarget, $pdf_data) {
    $return = file_put_contents($filetarget, $pdf_data);
    if (!$return) {
        return false;
    } else {
        return true;
    }
}