<?php

use Illuminate\Support\Facades\DB;


DB::transaction(function(){

DB::table('users')->insert(['name'=>'abolfazl']);
DB::table('usadasdasdsers')->where('id',1)->update(['name'=>'abolfazl']);

});
