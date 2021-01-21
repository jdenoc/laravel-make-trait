<?php

namespace Jdenoc\MakeTrait\Tests;

use Illuminate\Support\Facades\Artisan;
use Orchestra\Testbench\TestCase;
use Jdenoc\MakeTrait\MakeTraitServiceProvider;

class MakeTraitTest extends TestCase {

    protected function getPackageProviders($app){
        return [MakeTraitServiceProvider::class];
    }

    public function testGenerateTraitFile(){
        $trait_name = 'TestFileTrait';

        Artisan::call('make:trait', ['name'=>$trait_name]);
        $this->assertFileExists(app_path('Traits/'.$trait_name.'.php'));
    }
    
}
