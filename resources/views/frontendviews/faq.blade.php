@extends('frontendviews.main')

@section('content')

<section class="cmn_header_section space" style="background-image:url('{{asset('/public/4n61/images/service_bg.jpg')}}') ;">
    <div class="custom_container">
        <h1>Faq's</h1>
    </div>
</section>


<section class="contact_content space ">
    <div class="custom_container ">

        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        I have a question that isn’t addressed here. What should I do?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse  " aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Contact us directly via e-mail at <a href="mailto:laurie@4n6fanatics.com">laurie@4n6fanatics.com</a> or via phone at <a href="tel:541-821-
7612">541-821-7612</a></p>
                    </div>
                </div>
            </div>

        </div>
        <h2 class="faq_title">GENERAL QUESTIONS</h2>
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        What exactly is 4N6 Fanatics?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>4N6 Fanatics is an on-line database which tracks the award-winning history of
                            competitive speaking and acting events at the national and state levels from 2000 to present
                            day. In addition, we provide access to our unique VAULT OF CUTTINGS which contains
                            performance-ready selections for in-class and competitive performances. 4N6 Fanatics is not
                            a publishing company, and as such we do not sell individual scripts; rather we are a resource
                            to assist students, teachers and coaches locate quality performance material.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        What competition events does 4N6 Fanatics provide services for?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">

                        <p>Duo Interp, Humorous Interp, Dramatic Interp, Prose, Poetry, Declamation, Extemp
                            (100 topics each month), Impromptu Speaking, Original Oratory and Informative Speaking.
                            Our database can also be used to prepare unique Programs of Oral Interpretation (POI) based
                            on theme.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        How long has 4N6 Fanatics been in business?
                    </button>
                </h2>
                <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>4N6 Fanatics has been serving the educational community since 2003. Over 3,000
                            schools have utilized our services.</p>
                    </div>
                </div>
            </div>
        </div>
        <h2 class="faq_title"> MEMBERSHIP/PAYMENT QUESTIONS</h2>
        <div class="accordion" id="accordionExample">

            <div class="accordion-item">
                <h2 class="accordion-header" id="memberone">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membercollapseTwo" aria-expanded="false" aria-controls="membercollapseTwo">
                        How long does a membership to 4N6 Fanatics last?
                    </button>
                </h2>
                <div id="membercollapseTwo" class="accordion-collapse collapse" aria-labelledby="memberone" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Each membership is valid for 365 days from the date of activation.</p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="memberTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membercollapseThree" aria-expanded="false" aria-controls="membercollapseThree">
                        Can I get a membership for less than 1 year?
                    </button>
                </h2>
                <div id="membercollapseThree" class="accordion-collapse collapse" aria-labelledby="memberTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>no</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="memberThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membercollapsefour" aria-expanded="false" aria-controls="membercollapsefour">
                        Can multiple schools in my district use the same membership?
                    </button>
                </h2>
                <div id="membercollapsefour" class="accordion-collapse collapse" aria-labelledby="memberThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>No. Each membership is for one (1) school only. Member schools should not share
                            their log-in with other schools within or outside of their district.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="memberfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membercollapsefive" aria-expanded="false" aria-controls="membercollapsefive">
                        Do you accept purchase orders?
                    </button>
                </h2>
                <div id="membercollapsefive" class="accordion-collapse collapse" aria-labelledby="memberfour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Yes. We require payment or an approved PO to activate new memberships.
                            Approved PO’s should be e-mailed to <a href="mailto:laurie@4n6fanatics.com">laurie@4n6fanatics.com</a>. Payments for PO’s are due in
                            our offices ~6 weeks from the date of invoice to avoid interruption to services.
                        </p>
                    </div>
                </div>
            </div>

            <div class="accordion-item">
                <h2 class="accordion-header" id="memberfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#membercollapseseven" aria-expanded="false" aria-controls="membercollapseseven">
                        I need a Price Quote, W-9 Form or Vendor Forms completed for my district. What
                        should I do?
                    </button>
                </h2>
                <div id="membercollapseseven" class="accordion-collapse collapse" aria-labelledby="memberfive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Print a W-9 and PRICE QUOTE here (We’ll need to put a link to this file)
                            Send required Vendor Forms to us at <a href="mailto:laurie@4n6fanatics.com">laurie@4n6fanatics.com</a>. We’ll complete and return
                            them to you, usually the same day
                        </p>
                    </div>
                </div>
            </div>

        </div>
        <h2 class="faq_title">SERVICES PROVIDED QUESTIONS
        </h2>
        <div class="accordion" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#serviceone" aria-expanded="false" aria-controls="serviceone">
                        How many Full-Text links are available in the database?
                    </button>
                </h2>
                <div id="serviceone" class="accordion-collapse collapse" aria-labelledby="serviceheadingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Over 3,000 records in the database have links to the full text of the selection.
                            NOTE: These links will take you away from our website.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicetwo" aria-expanded="false" aria-controls="servicetwo">
                        How are Extemp Questions delivered?
                    </button>
                </h2>
                <div id="servicetwo" class="accordion-collapse collapse" aria-labelledby="serviceheadingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            100 Extemp Questions are upload near the 1st of each month. They can be
                            accessed as a .PDF file from the VAULT or through our Extemp Topic Generator, which
                            simulates an EXTEMP DRAW at a tournament. You can select Domestic, Foreign or Both and
                            even narrow the DRAW by theme.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#servicethree" aria-expanded="false" aria-controls="servicethree">
                        How many cuttings are stored in the VAULT?
                    </button>
                </h2>
                <div id="servicethree" class="accordion-collapse collapse" aria-labelledby="serviceheadingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Currently there are over 2,000 cuttings stored in the VAULT. Coaches receive a
                            weekly update each Monday alerting them of NEW CUTTINGS which are added throughout
                            the school year. Each cutting is complete with a suggested introduction and complete source
                            information.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingfour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#serviceFour" aria-expanded="false" aria-controls="serviceFour">
                        Are materials stored in the VAULT sufficient for proof of publication at regional,
                        state or national tournaments?
                    </button>
                </h2>
                <div id="serviceFour" class="accordion-collapse collapse" aria-labelledby="serviceheadingfour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Every state has different guidelines; however, 4N6 Fanatics is NOT a publishing
                            company. We recommend that coaches obtain the original source for proof of publication.
                            Complete source citations appear in the database and at the end of each selection stored in
                            the VAULT to aid in finding the original source documents if necessary.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingfive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#serviceFive" aria-expanded="false" aria-controls="serviceFive">
                        Do materials stored in the VAULT meet the requirements for competition in my
                        state?

                    </button>
                </h2>
                <div id="serviceFive" class="accordion-collapse collapse" aria-labelledby="serviceheadingfive" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Rules for each event category vary from state to state and over time.
                            Coaches/students should ALWAYS check CURRENT event rules for your tournament to ensure
                            compliance.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingsix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#serviceSix" aria-expanded="false" aria-controls="serviceSix">
                        Is there an additional charge to download material from the VAULT?
                    </button>
                </h2>
                <div id="serviceSix" class="accordion-collapse collapse" aria-labelledby="serviceheadingsix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            No. Each membership is complete with unlimited access and downloads for all
                            coaches/students at 1 school for 365 days.
                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingseven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#Seven" aria-expanded="false" aria-controls="Seven">
                        Can I restrict student access to VAULT FILES?

                    </button>
                </h2>
                <div id="Seven" class="accordion-collapse collapse" aria-labelledby="serviceheadingseven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Yes. As a coach you determine if your students can access VAULT FILES. If
                            restricted from VAULT FILES, your students will still be able to search the database and have
                            access to all other features of the membership. You can change this status at any time from
                            the Coach Dashboard.

                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingeight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#eight" aria-expanded="false" aria-controls="eight">
                        Can I see a sample of a CUTTING stored in the VAULT?

                    </button>
                </h2>
                <div id="eight" class="accordion-collapse collapse" aria-labelledby="serviceheadingeight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Yes. SAMPLE DUO CUTTING SAMPLE POETRY CUTTING

                        </p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="serviceheadingnine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#nine" aria-expanded="false" aria-controls="nine">
                        How do I convert a VAULT CUTTING from a .PDF file to an editable Word
                        document?

                    </button>
                </h2>
                <div id="nine" class="accordion-collapse collapse" aria-labelledby="serviceheadingnine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>
                            Save the .pdf file to a location on your computer. Open the I Love PDF website.
                            Select the PDF to Word option and follow the prompts.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>



@endsection