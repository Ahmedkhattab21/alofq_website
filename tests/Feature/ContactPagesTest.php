<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use App\Models\QuoteRequest;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Tests\TestCase;

class ContactPagesTest extends TestCase
{
    use DatabaseTransactions;

    public function test_contact_and_quote_pages_are_available(): void
    {
        $this->get(route('contact'))->assertOk();
        $this->get(route('quote'))
            ->assertOk()
            ->assertSee('اطلب عرض سعر')
            ->assertSee(route('quote'), false);
    }

    public function test_contact_form_requires_valid_data(): void
    {
        $this->post(route('contact.store'), [])->assertSessionHasErrors([
            'name', 'phone', 'email', 'service', 'message',
        ]);
    }

    public function test_quote_form_requires_project_information(): void
    {
        $this->post(route('quote.store'), [])->assertSessionHasErrors([
            'name', 'phone', 'email', 'project_type', 'budget', 'details',
        ]);
    }

    public function test_valid_contact_and_quote_requests_are_saved(): void
    {
        $this->post(route('contact.store'), [
            'name' => 'أحمد محمد',
            'phone' => '0500000000',
            'email' => 'contact-test@example.com',
            'service' => 'web',
            'budget' => '20000',
            'message' => 'أرغب في إنشاء موقع إلكتروني للشركة.',
        ])->assertRedirect(route('thank-you'))
            ->assertSessionHas('submission', 'contact');

        $this->assertDatabaseHas((new ContactMessage())->getTable(), [
            'email' => 'contact-test@example.com',
            'service' => 'web',
            'status' => 'new',
        ]);

        $this->post(route('quote.store'), [
            'name' => 'أحمد محمد',
            'phone' => '0500000000',
            'email' => 'quote-test@example.com',
            'company' => 'شركة الاختبار',
            'project_type' => 'web',
            'budget' => 'growth',
            'details' => 'موقع شركة متكامل متعدد الصفحات.',
        ])->assertRedirect(route('thank-you'))
            ->assertSessionHas('submission', 'quote');

        $this->assertDatabaseHas((new QuoteRequest())->getTable(), [
            'email' => 'quote-test@example.com',
            'project_type' => 'web',
            'budget' => 'growth',
            'status' => 'new',
        ]);
    }
}
