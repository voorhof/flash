<?php

namespace Voorhof\Flash\Tests;

use Orchestra\Testbench\TestCase;
use Voorhof\Flash\Facades\Flash;
use Voorhof\Flash\FlashServiceProvider;

class FlashTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [FlashServiceProvider::class];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Flash' => Flash::class,
        ];
    }

    /** @test */
    public function it_can_flash_a_success_message()
    {
        Flash::success('Test success message');

        $this->assertEquals('Test success message', session('flash_message'));
        $this->assertEquals('success', session('flash_level'));
    }

    /** @test */
    public function it_can_flash_a_warning_message()
    {
        Flash::warning('Test warning message');

        $this->assertEquals('Test warning message', session('flash_message'));
        $this->assertEquals('warning', session('flash_level'));
    }

    /** @test */
    public function it_can_flash_a_danger_message()
    {
        Flash::danger('Test danger message');

        $this->assertEquals('Test danger message', session('flash_message'));
        $this->assertEquals('danger', session('flash_level'));
    }

    /** @test */
    public function it_can_flash_an_info_message()
    {
        Flash::info('Test info message');

        $this->assertEquals('Test info message', session('flash_message'));
        $this->assertEquals('info', session('flash_level'));
    }
}
