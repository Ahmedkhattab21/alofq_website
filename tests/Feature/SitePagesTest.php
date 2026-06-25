<?php

namespace Tests\Feature;

use Tests\TestCase;

class SitePagesTest extends TestCase
{
    public function test_supporting_pages_are_available(): void
    {
        foreach (['privacy', 'faq', 'terms', 'thank-you', 'technologies'] as $route) {
            $this->get(route($route))->assertOk();
        }
    }

    public function test_unknown_page_uses_custom_404(): void
    {
        $this->get('/page-that-does-not-exist')
            ->assertNotFound()
            ->assertSee('الصفحة غير موجودة');
    }
}
