@once('schema-local-business')
@php
    $schema = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => ['LocalBusiness', 'ProfessionalService'],
                '@id' => 'https://www.galeranchnotary.com/#business',
                'name' => 'Gale Ranch Notary',
                'alternateName' => 'Gale Ranch Notary, Apostille and Financial Services',
                'url' => 'https://www.galeranchnotary.com/',
                'image' => 'https://www.galeranchnotary.com/images/thumbnail.png',
                'logo' => 'https://www.galeranchnotary.com/images/Logo.png',
                'description' => 'Premium notary public, apostille, trusts and estates, immigration, and financial services in San Ramon, CA. Mobile notary serving the Tri-Valley and Bay Area.',
                'telephone' => '+1-925-322-3131',
                'email' => 'Govind@GaleRanchNotary.com',
                'address' => [
                    '@type' => 'PostalAddress',
                    'streetAddress' => '6156 West Branch Rd',
                    'addressLocality' => 'San Ramon',
                    'addressRegion' => 'CA',
                    'postalCode' => '94582',
                    'addressCountry' => 'US',
                ],
                'geo' => [
                    '@type' => 'GeoCoordinates',
                    'latitude' => 37.7623,
                    'longitude' => -121.9512,
                ],
                'areaServed' => [
                    ['@type' => 'City', 'name' => 'San Ramon'],
                    ['@type' => 'City', 'name' => 'Dublin'],
                    ['@type' => 'City', 'name' => 'Pleasanton'],
                    ['@type' => 'City', 'name' => 'Livermore'],
                    ['@type' => 'City', 'name' => 'Walnut Creek'],
                    ['@type' => 'City', 'name' => 'Danville'],
                ],
                'priceRange' => '$$',
                'sameAs' => [
                    'https://www.facebook.com/galeranchnotary/',
                    'https://www.instagram.com/galeranchnotary/',
                    'https://www.yelp.com/biz/gale-ranch-notary-and-apostille-san-ramon-2',
                    'https://www.linkedin.com/in/galeranchnotary',
                    'https://twitter.com/ggrajan13',
                    'https://g.page/GaleRanchNotary',
                ],
                'hasOfferCatalog' => [
                    '@type' => 'OfferCatalog',
                    'name' => 'Notary and Related Services',
                    'itemListElement' => [
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Notary Public Services']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Apostille Services']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Legal Services']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Immigration Services']],
                        ['@type' => 'Offer', 'itemOffered' => ['@type' => 'Service', 'name' => 'Financial Services']],
                    ],
                ],
            ],
            [
                '@type' => 'WebSite',
                '@id' => 'https://www.galeranchnotary.com/#website',
                'url' => 'https://www.galeranchnotary.com/',
                'name' => 'Gale Ranch Notary',
                'publisher' => ['@id' => 'https://www.galeranchnotary.com/#business'],
            ],
        ],
    ];
@endphp
<script type="application/ld+json">{!! json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}</script>
@endonce
