<?php

if(is_dir('vendor')){
    //jika ada maka hapus foldernya terlebih dahulu
    shell_exec('rm -rf vendor');
    makeVendor();
}else {
    makeVendor();
}

function makeVendor(){
    shell_exec('npm installl; composer update');
    shell_exec('mv node_modules vendor');
    echo "Done. Your Awesome";
}