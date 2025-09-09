@extends('layouts.main')
@section('title', 'Krishvglobalinteriors.com/privacy-policy')

@section('main-container')
    {{-- Privacy policy section --}}
    <section class="policy-section space">
        <div class="container">
            <h2 class="site-section-heading ">
                Privacy <span> Policy</span>
            </h2>
            <div class="row justify-content-lg-between align-items-end">
                <div class="col-lg-12 pt-3 wow fadeInUp" data-wow-delay="0.1s">
                    <p class="sub-title gradient-text-policy mt-2">Effective Date: July, 2024</p>
                </div>
            </div>
            <div class="policy-content">
                <div class="sec-policy">
                    <h6 class="policy-title">1. Introduction</h6>
                    <p class="policy-para">This Privacy Policy describes how Krish-V Interiors (“we,” “our,” or “us”) collects, uses, and protects personal information that you provide to us through our Website at https://www.krishvinteriors.com (the “Website”). By using the Website, you consent to the practices described in this Privacy Policy.</p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">2. Information We Collect</h6>
                    <p class="policy-para"><strong>A.</strong> Personal Information: We may collect personal information, such as your name, email address, phone number, and mailing address, when you voluntarily provide it through forms on the Website, such as when you sign up for our newsletter or request information.<br />
                    When you voluntarily send us electronic mail / fillup the form, we will keep a record of this information so that we can respond to you. We only collect information from you when you register on our site or fill out a form. Also, when filling out a form on our site, you may be asked to enter your: name, e-mail address or phone number. You may, however, visit our site anonymously. In case you have submitted your personal information and contact details, we reserve the rights to Call, SMS, Email or WhatsApp about our products and offers, even if your number has DND activated on it.?<br/><br/>
                    <strong>B.</strong> Automatically Collected Information: We may automatically collect certain information when you visit the Website, including your IP address, browser type, operating system, and browsing activity. We may use cookies and similar tracking technologies to collect this information.</p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">3. How We Use Your Information</h6>
                    <p class="policy-para">We may use your personal information for the following purposes:
                    <ul>
                        <li>To respond to your inquiries and provide the services or information you request.</li>
                        <li>To send you newsletters, promotional materials, or other communications if you have opted to receive them.</li>
                        <li> To improve the Website’s functionality and user experience.</li>
                        <li> To analyze usage patterns and trends on the Website.</li>
                        <li>To protect the security and integrity of the Website.</li>
                    </ul>
                    </p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">4. Sharing Your Information</h6>
                    <p class="policy-para">We may share your personal information with third parties only in the following circumstances:
                    <ul>
                        <li>With your explicit consent.</li>
                        <li>To comply with legal obligations or respond to lawful requests from government authorities.</li>
                        <li>To protect our rights, privacy, safety, or property.</li>
                        <li>In connection with the sale, merger, or transfer of all or part of our business.</li>
                    </ul>
                    </p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">5. Data Security</h6>
                    <p class="policy-para">We take reasonable measures to safeguard your personal information from unauthorized access, disclosure, alteration, or destruction. However, no method of transmission over the Internet or electronic storage is entirely secure, and we cannot guarantee its absolute security.</p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">6. Your Choices</h6>
                    <p class="policy-para">You may choose not to provide personal information to us, but this may limit your ability to access certain features or services on the Website.<br/>
                    You can opt out of receiving promotional emails from us by following the instructions provided in the emails or by contacting us at info@krishvinteriors.com.</p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">7. Third-Party Links</h6>
                    <p class="policy-para">The Website may contain links to third-party websites. We are not responsible for these third-party websites’ privacy practices or content. We encourage you to review the privacy policies of those websites before providing any personal information.</p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">8. Changes to this Privacy Policy</h6>
                    <p class="policy-para">We may update this Privacy Policy to reflect changes to our information practices. Any updates will be posted on this page with a revised effective date. We encourage you to review this Privacy Policy periodically.</p>
                </div>
                <div class="sec-policy">
                    <h6 class="policy-title">9. Contact Us</h6>
                    <p class="policy-para">If you have questions or concerns about this Privacy Policy or our data practices, please get in touch with us at info@krishvinteriors.com.</p>
                </div>
            </div>
        </div>
    </section>
    @include('content.forms.enquiry')
    @include('content.forms.scripts.enquiry_script')
@endsection
