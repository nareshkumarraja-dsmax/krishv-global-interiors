@extends('layouts.main')
@section('title', 'Krishvglobalinteriors.com/terms-and-conditions')

@section('main-container')
    {{-- Terms And Condition Section --}}
    <section class="policy-section space">
        <div class="container">
            <h2 class="site-section-heading mb-4">
                Terms and  <span> Conditions</span>
            </h2>
            <div class="policy-content">
                <div class="sec-policy">
                    <h6 class="policy-title">1. Acceptance of Terms</h6>
                    <p class="policy-para">By accessing or using the Krish-V Interiors website (the “Website”), you agree to comply with and be bound by these Terms and Conditions (“Terms”). If you disagree with these Terms, please do not use the Website.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">2. Changes to Terms</h6>
                    <p class="policy-para">Krish-V Interiors reserves the right to modify, update, or revise these Terms at any time. Any changes will be effective immediately upon posting on the Website. Your continued use of the Website after such changes shall constitute your acceptance of the revised Terms.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">3. Privacy Policy</h6>
                    <p class="policy-para">Your website use is also governed by our Privacy Policy, which can be found here. Please review the Privacy Policy to understand how we collect, use, and protect your personal information.
                    </p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">4. Intellectual Property</h6>
                    <p class="policy-para">All content, images, designs, logos, trademarks, and other intellectual property on the Website are the property of Krish-V Interiors or its licensors and are protected by applicable copyright, trademark, and other intellectual property laws. You may not use, reproduce, or distribute any content from the Website without our prior written consent.
                    </p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">5. Use of the Website</h6>
                    <p class="policy-para">You agree to use the Website for lawful purposes only and in a manner that does not violate these Terms or any applicable laws or regulations.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">6. User Accounts</h6>
                    <p class="policy-para">If you create an account on the Website, you are responsible for maintaining the confidentiality of your account information and all activities under your account. You must notify us immediately of any unauthorized use of your account.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">7. Links to Third-Party Websites</h6>
                    <p class="policy-para">The Website may contain links to third-party websites. Krish-V Interiors is not responsible for these third-party websites’ content, accuracy, or availability. Including any such links does not imply endorsement or affiliation with those websites.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">8. Limitation of Liability</h6>
                    <p class="policy-para">Krish-V Interiors shall not be liable for any direct, indirect, incidental, consequential, or punitive damages arising from your use of the Website or any information or content provided.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">9. Indemnification</h6>
                    <p class="policy-para">You agree to indemnify and hold Krish-V Interiors, its officers, directors, employees, and agents harmless from any claims, losses, or damages, including attorney’s fees, arising from or related to your use of the Website or violating these Terms.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">10. Termination</h6>
                    <p class="policy-para">Krish-V Interiors reserves the right to terminate or suspend your access to the Website at any time, with or without cause and without notice.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">11. Governing Law</h6>
                    <p class="policy-para">These Terms are governed by and construed following the laws of Karnataka. Any disputes arising under or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts in Karnataka.</p>
                </div>

                <div class="sec-policy">
                    <h6 class="policy-title">12. Contact Us</h6>
                    <p class="policy-para">If you have any questions or concerns about these Terms, please get in touch with us at info@krishvinteriors.com.</p>
                </div>
            </div>
        </div>
    </section>

    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')
@endsection
