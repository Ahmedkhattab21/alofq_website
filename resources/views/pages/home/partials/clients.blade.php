<section id="clients" class="brand-logos-section clients-section">
    <div class="brand-section-decoration" aria-hidden="true">
        <span class="brand-diagonal brand-diagonal--three"></span>
        <span class="brand-float brand-float--four"></span>
        <span class="brand-float brand-float--five"></span>
    </div>

    <div class="container mx-auto px-margin-desktop relative z-10">
        <header class="brand-section-heading reveal">
            <span class="brand-section-kicker stagger-item">ثقة نعتز بها</span>
            <h2 class="brand-section-title stagger-item">عملاؤنا</h2>
            <p class="brand-section-subtitle stagger-item">
                نعتز بثقة عملائنا من مختلف القطاعات، ونسعى دائمًا لبناء حلول رقمية تحقق أهدافهم وتدعم نمو أعمالهم.
            </p>
            <span class="brand-section-divider stagger-item" aria-hidden="true"></span>
        </header>

        <div class="clients-grid reveal">
            @foreach ($clients as $client)
                <x-logo-card
                    :name="$client->name"
                    :label="$client->category_label"
                    :icon="$client->icon"
                    class="stagger-item"
                />
            @endforeach
        </div>
    </div>
</section>
