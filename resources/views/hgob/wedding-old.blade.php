@section('meta')
<meta name="title" content="{{ $setting->meta_title }}">
<meta name="description" content="{{ $setting->meta_description }}">
<meta name="keywords" content="{{ implode(',', $setting->meta_keyword) }}">
<title>{{ $setting->meta_title }}</title>
<meta property="og:url" content="{{ route('honeymoon') }}">
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $setting->meta_title }}">
<meta property="og:description" content="{{ $setting->meta_description }}">
<meta property="og:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<meta name="twitter:title" content="{{ $setting->meta_title }} | Hanging Gardens of Bali">
<meta name="twitter:description" content="{{ $setting->meta_description }}">
<meta name="twitter:image" content="{{ asset('storage/' . $setting->banner_image) }}">

<link rel="canonical" href="{{ route('honeymoon') }}" />
@endsection

@push('css')

@endpush

@push('js')
<script type="text/javascript">
    $('.experience-slider').slick({
		infinite: true,
		speed: 500,
		fade: true,
		cssEase: 'linear',
		slidesToShow: 1,
		slidesToScroll: 1,
		autoplay: true,
		autoplaySpeed: 3000,
		arrows: false,
	});
</script>
@endpush

<x-desktop>
    <!-- Content -->
    <section class="header-image">
        <img src="{{ asset('storage/' . $setting->banner_image) }}" class="w-100 vh-100" alt="{{ $setting->meta_title }}">
    </section>

    <section class="description">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-10 offset-md-1 text-center">
                    <h1 class="underline fw-bold text-uppercase">Bali Wedding Venue</h1>
                    <p>The Hanging Gardens of Bali was created to be something magical and authentic in the heart of the Balinese Jungle.
                    </p>
                    <p>Overlooking the Ayung River and ancient Dalem Segara Temple, the Bali luxury romantic resort stands on the edge of a stunning valley, surrounded by lush rainforest and picturesque rice terrace. Serene surroundings, legendary service and Top Balinese Hospitality with world-class food and beverage options will make your 'once-in-a-lifetime' choice endlessly remains.
                    </p>
                    <p>An award-winning destination proudly holding the title of the "World's First Seven-Star Boutique Hotel" and designated as the one of the world's most desirable destination to visit. TripAdvisor and Conde Nast Traveller named our twin-tiered cascading pool as the "World's Best Swimming Pool" and the number one Bali honeymoon resort.
                    </p>
                    <p>Your wedding at Hanging Gardens of Bali will create special memories that you will never forget.</p>
                    <a href="https://www.hanginggardensofbali.com/themes/mindimedia-theme/assets/download/wedding-1.pdf" download="wedding" class="btn btn-gold text-uppercase px-3 py-2 rounded-0"><i class="fas fa-download me-2"></i> Download Brochure</a>
                </div>
            </div>
        </div>
    </section>
    <section class="py-90 bg-light-gray" id="wed-intimate-wedding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 order-1">
                    <div class="pt-0 pb-5 border-bottom border-secondary">
                        <h2 class="experience-title mt-0">The Intimate Wedding</h2>
                        <p class="experience-subtitle mt-3 mb-0">Wedding ceremony venue at Twin Tiered Cascading Pool</p>
                    </div>
                    <div class="py-5 border-bottom border-secondary fs-4">
                        Spend your special day intimately at a stunning riverside where the Balinese jungle meets the rushing waters of the holy Ayung River.
                    </div>
                    <div class="py-5 border-bottom border-secondary">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0 me-2" data-bs-toggle="modal" data-bs-target="#wedding-58">View Details</button>
                                <form id="enquiryForm-58" method="post" action="https://www.hanginggardensofbali.com/enquiry">
                                    <input type="hidden" name="package_name" value="The Intimate Wedding">
                                    <input type="hidden" name="package_excerpt" value="Spend your special day intimately at a stunning riverside where the Balinese jungle meets the rushing waters of the holy Ayung River.">
                                    <input type="hidden" name="package_image" value="https://www.hanginggardensofbali.com/storage/app/uploads/public/629/47e/947/62947e947576f017252231.jpg">
                                    <button type="submit" class="btn btn-sm btn-gold text-uppercase py-2 px-3 rounded-0">Inquire Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1 order-2 d-flex align-items-center justify-content-center">
                    <div class="d-inline-flex flex-column align-items-center">
                        <p class="experience-text-share">Share <i class="fas fa-long-arrow-alt-down"></i></p>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u=https://www.hanginggardensofbali.com/weddings#wed-intimate-wedding" target="_blank" class="experience-share experience-share-fb"><i class="fab fa-facebook-f"></i></a>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//twitter.com/intent/tweet?text=The Intimate Wedding: https://www.hanginggardensofbali.com/weddings#wed-intimate-wedding" target="_blank" class="experience-share experience-share-tw"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-3">
                    <div class="h-100 experience-slider">
                        <div class="ratio ratio-4x3">
                            <img src="https://www.hanginggardensofbali.com/storage/app/uploads/public/629/47e/947/62947e947576f017252231.jpg" class="w-100 object-fit-cover object-position-center" alt="The Intimate Wedding">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="wedding-58" tabindex="-1" aria-labelledby="wedding-58-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="wedding-58-label">The Intimate Wedding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Spend your special day intimately at a stunning riverside where the Balinese jungle meets the rushing waters of the holy Ayung River.</p>
                    <p>Accommodation</p>
                    <ul>
                        <li>Two-night accommodation for Bridal Couple in a One Bedroom Riverside Pool Villa</li>
                        <li>Return airport transport for Bride and Groom</li>
                        <li>Daily a la carte and buffet breakfast</li>
                        <li>Honeymoon setup in villa on wedding night</li>
                    </ul>
                    <p>Event Inclusions</p>
                    <ul>
                        <li>Wedding ceremony venue at Twin Tiered Cascading Pool or Riverside Spa Gazebo</li>
                        <li>Marriage celebrant (non-legal) and commemorative ceremonial certificate</li>
                        <li>Classic wedding ceremony decoration with one wedding arch, altar table with flower arrangement, flower petals on the aisle, flower shower, wedding signboard with Bride and Groom's names</li>
                        <li>Standard sound system for ceremony with 3 microphones, 2 speakers and mixers</li>
                        <li>Hanging Gardens of Bali's wedding team to assist during ceremony</li>
                        <li>All events and Banjar Fees</li>
                    </ul>
                    <p>Culinary Experience</p>
                    <ul>
                        <li>Wedding toast for couple with refreshing Rosella Honey Tea</li>
                        <li>2 glasses of sparkling wine during dinner</li>
                        <li>In-Villa Dining Romantic Dinner for the bridal couple</li>
                    </ul>
                    <p>Bridal Couple</p>
                    <ul>
                        <li>90-minute Bliss Spa Treatment at The Spa Collection</li>
                    </ul>
                    <p>&nbsp;</p>
                </div>
                <div class="modal-footer">
                    <a href="https://www.hanginggardensofbali.com/enquiry" class="btn btn-sm btn-gold text-uppercase py-2 px-3 rounded-0">Inquire Now</a>
                    <button type="button" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <section class="py-90" id="wed-hanging-gardens-wedding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 order-3">
                    <div class="pt-0 pb-5 border-bottom border-secondary">
                        <h2 class="experience-title mt-0">The Hanging Gardens Wedding</h2>
                        <p class="experience-subtitle mt-3 mb-0">Wedding ceremony venue at Twin Tiered Cascading Pool</p>
                    </div>
                    <div class="py-5 border-bottom border-secondary fs-4">
                        For a truly memorable magical wedding, couples may reserve exclusive use of Hanging Gardens of Bali "The World’s Best Swimming Pool" for their celebration.
                    </div>
                    <div class="py-5 border-bottom border-secondary">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0 me-2" data-bs-toggle="modal" data-bs-target="#wedding-62">View Details</button>
                                <form id="enquiryForm-62" method="post" action="https://www.hanginggardensofbali.com/enquiry">
                                    <input type="hidden" name="package_name" value="The Hanging Gardens Wedding">
                                    <input type="hidden" name="package_excerpt" value="For a truly memorable magical wedding, couples may reserve exclusive use of Hanging Gardens of Bali &quot;The World’s Best Swimming Pool&quot; for their celebration.">
                                    <input type="hidden" name="package_image" value="https://www.hanginggardensofbali.com/storage/app/uploads/public/629/47f/518/62947f518295e837351976.jpg">
                                    <button type="submit" class="btn btn-sm btn-gold text-uppercase py-2 px-3 rounded-0">Inquire Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1 order-2 d-flex align-items-center justify-content-center">
                    <div class="d-inline-flex flex-column align-items-center">
                        <p class="experience-text-share">Share <i class="fas fa-long-arrow-alt-down"></i></p>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u=https://www.hanginggardensofbali.com/weddings#wed-hanging-gardens-wedding" target="_blank" class="experience-share experience-share-fb"><i class="fab fa-facebook-f"></i></a>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//twitter.com/intent/tweet?text=The Hanging Gardens Wedding: https://www.hanginggardensofbali.com/weddings#wed-hanging-gardens-wedding" target="_blank" class="experience-share experience-share-tw"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-1">
                    <div class="h-100 experience-slider">
                        <div class="ratio ratio-4x3">
                            <img src="https://www.hanginggardensofbali.com/storage/app/uploads/public/629/47f/518/62947f518295e837351976.jpg" class="w-100 object-fit-cover object-position-center" alt="The Hanging Gardens Wedding">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="wedding-62" tabindex="-1" aria-labelledby="wedding-62-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="wedding-62-label">The Hanging Gardens Wedding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>For a truly memorable magical wedding, couples may reserve the exclusive use of Hanging Gardens of Bali "The World&rsquo;s Best Swimming Pool" for their celebration.</p>
                    <p><strong>Accommodation</strong></p>
                    <ul>
                        <li>Two-night accommodation on 5 units villa (3 units of 1 Bedroom Riverside Pool Villa and 2 units of Family Pool Villa) that can accommodate up to 12 guests</li>
                        <li>Return airport transfer for all in-house guests</li>
                        <li>Daily a la carte and buffet breakfast for all in-house guests</li>
                        <li>1 time floating boat breakfast in Villa for bridal couple</li>
                        <li>Honeymoon setup in villa on wedding day</li>
                    </ul>
                    <p><strong>Event Inclusion</strong></p>
                    <ul>
                        <li>Wedding ceremony venue at Twin Tiered Cascading Pool or Deck (add time slot available for wedding ceremony)</li>
                        <li>Marriage celebrant (non-legal) and commemorative ceremonial certificate</li>
                        <li>Standard sound system for ceremony with 3 microphones, 2 speakers and mixers</li>
                        <li>All events and Banjar Fees</li>
                    </ul>
                    <p><strong>Culinary Experience</strong></p>
                    <ul>
                        <li>20 glasses of non-alcoholic wedding toast with Rosella Honey Tea</li>
                        <li>2 glasses of sparkling wine for bridal couple's toast</li>
                    </ul>
                    <p><strong>Bride and Groom&nbsp;</strong></p>
                    <ul>
                        <li>90-minute Bliss Spa Treatment at The Spa Collection for bridal couple</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="https://www.hanginggardensofbali.com/enquiry" class="btn btn-sm btn-gold text-uppercase py-2 px-3 rounded-0">Inquire Now</a>
                    <button type="button" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <section class="py-90 bg-light-gray" id="wed-hidden-palace-wedding">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-5 order-1">
                    <div class="pt-0 pb-5 border-bottom border-secondary">
                        <h2 class="experience-title mt-0">The Hidden Palace Wedding</h2>
                        <p class="experience-subtitle mt-3 mb-0">Wedding ceremony venue at Hidden Palace Pool</p>
                    </div>
                    <div class="py-5 border-bottom border-secondary fs-4">
                        Celebrate your wedding in a Bali Luxury Romantic Resort, the luxurious Hidden Palace five-bedroom villa.
                    </div>
                    <div class="py-5 border-bottom border-secondary">
                        <div class="row">
                            <div class="col-12 d-flex align-items-center">
                                <button class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0 me-2" data-bs-toggle="modal" data-bs-target="#wedding-63">View Details</button>
                                <form id="enquiryForm-63" method="post" action="https://www.hanginggardensofbali.com/enquiry">
                                    <input type="hidden" name="package_name" value="The Hidden Palace Wedding">
                                    <input type="hidden" name="package_excerpt" value="Celebrate your wedding in a Bali Luxury Romantic Resort, the luxurious Hidden Palace five-bedroom villa.">
                                    <input type="hidden" name="package_image" value="https://www.hanginggardensofbali.com/storage/app/uploads/public/629/47e/ec4/62947eec447a3080200128.jpg">
                                    <button type="submit" class="btn btn-sm btn-gold text-uppercase py-2 px-3 rounded-0">Inquire Now</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-1 order-2 d-flex align-items-center justify-content-center">
                    <div class="d-inline-flex flex-column align-items-center">
                        <p class="experience-text-share">Share <i class="fas fa-long-arrow-alt-down"></i></p>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//www.facebook.com/sharer/sharer.php?u=https://www.hanginggardensofbali.com/weddings#wed-hidden-palace-wedding" target="_blank" class="experience-share experience-share-fb"><i class="fab fa-facebook-f"></i></a>
                        <a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=700');return false;" href="//twitter.com/intent/tweet?text=The Hidden Palace Wedding: https://www.hanginggardensofbali.com/weddings#wed-hidden-palace-wedding" target="_blank" class="experience-share experience-share-tw"><i class="fab fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-12 col-md-6 order-3">
                    <div class="h-100 experience-slider">
                        <div class="ratio ratio-4x3">
                            <img src="https://www.hanginggardensofbali.com/storage/app/uploads/public/629/47e/ec4/62947eec447a3080200128.jpg" class="w-100 object-fit-cover object-position-center" alt="The Hidden Palace Wedding">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="wedding-63" tabindex="-1" aria-labelledby="wedding-63-label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fw-bold text-uppercase" id="wedding-63-label">The Hidden Palace Wedding</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Celebrate your wedding in a Bali Luxury Romantic Resort, the luxurious Hidden Palace five-bedroom villa.</p>
                    <p><strong>Accommodation</strong></p>
                    <ul>
                        <li>Two-night accommodation in Hidden Palace for up to 10 guests</li>
                        <li>Return airport transfer for all in-house guests</li>
                        <li>Daily a la carte and buffet breakfast for all-in house guests</li>
                        <li>Honeymoon setup in bridal couple's room on wedding day</li>
                    </ul>
                    <p><strong>Event Inclusion</strong></p>
                    <ul>
                        <li>Wedding ceremony venue at Hidden Palace Pool or Living Room with a capacity for up to 40 guests</li>
                        <li>Marriage celebrant (non-legal) and commemorative ceremonial certificate</li>
                        <li>Standard sound system for ceremony with 3 microphones, 2 speakers and mixers</li>
                        <li>All events and Banjar fees</li>
                    </ul>
                    <p><strong>Culinary Experience</strong></p>
                    <ul>
                        <li>40 glasses of non-alcoholic wedding toast with Rosella Honey Tea</li>
                        <li>2 glasses of Jepun by Hatten sparkling wine for bridal couple's toast</li>
                    </ul>
                    <p><strong>Bride and Groom</strong></p>
                    <ul>
                        <li>90-minute Bliss Spa Treatment at The Spa Collection for bridal couple</li>
                    </ul>
                    <p><strong>Additional Benefits</strong></p>
                    <ul>
                        <li>Exclusively use of 2,000sqm Hidden Palace with its own funicular</li>
                        <li>24 hours personal butler service</li>
                        <li>In-Villa private chef and personal kitchen services</li>
                        <li>Guided morning walks and mountain bikes activity</li>
                        <li>One bottle of Champagne on arrival</li>
                        <li>Complimentary laundry 20 pieces per day (excluding dry cleaning &amp; express service) and is non-accumulative</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <a href="https://www.hanginggardensofbali.com/enquiry" class="btn btn-sm btn-gold text-uppercase py-2 px-3 rounded-0">Inquire Now</a>
                    <button type="button" class="btn btn-sm btn-outline-gold text-uppercase py-2 px-3 rounded-0" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</x-desktop>