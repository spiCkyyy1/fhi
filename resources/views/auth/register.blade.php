@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.brighttheme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.buttons.min.css">
@endsection
@section('content')

<div class="unix-login">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-lg-offset-3">
                <div class="login-content">
                    <div class="login-form">
                        <h4>Sign Up</h4>

                        <div class="register-link m-t-15 text-center">
                            <p>
                                Don't have account ?
                                <a href="javascript:;" id="signUpBtn"> Sign Up Here</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal custom fade" id="forgotUser" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding: 35px 20px;">
                <h4>
                    <span class="glyphicon glyphicon-lock"></span> Forgot Username
                </h4>
                <p>
                    Please enter the email address associated with your account. Your
                    username will be emailed to that address.
                </p>
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
            </div>
            <div class="modal-body">
                <div class="horizontal-form">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="col-sm-3 control-label" style="color: #000;"
                            >Email Address
                            </label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" placeholder="" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary" id="signup-btn">
                        Email Username
                    </button>
                    <button
                        type="button"
                        class="btn btn-primary"
                        id="signup-btn"
                        data-dismiss="modal"
                    >
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal custom fade" id="signUp" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header" style="padding: 35px 20px;">
                <button type="button" class="close" data-dismiss="modal">
                    &times;
                </button>
                <h4><span class="glyphicon glyphicon-lock"></span> Sign Up</h4>
            </div>
            <div class="modal-body">
                <div class="form-step license">
                    <h2 class="heading">License Agreement</h2>
                    <div
                        class="x-panel-body x-panel-body-noheader"
                        id="ext-gen93"
                        style="
									padding: 10px;
									overflow: auto;
									width: 100%;
									height: 253px;
								"
                    >
                        <p>
                            READ CAREFULLY THIS AGREEMENT BEFORE ACCESSING, RECEIVING,
                            DOWNLOADING, SYNCING, OR USING THE SOFTWARE CONTAINED ON THE
                            FHRI.COM WEBSITE.
                        </p>

                        <p>
                            BY CLICKING ON THE “ACCEPT” BUTTON, YOU BECOME A PARTY TO THIS
                            AGREEMENT AND AGREE TO BE BOUND BY ALL OF ITS TERMS. IF YOU DO
                            NOT AGREE TO THE TERMS OF THIS AGREEMENT, THEN YOU MAY NOT
                            PROCEED FURTHER AND YOU ARE NOT AUTHORIZED TO USE ANY OF THE
                            SOFTWARE (DEFINED BELOW) FROM FHRI.
                        </p>

                        <p>
                            WITHOUT LIMITING THE FOREGOING, USE OF ANY SOFTWARE CONTAINED
                            ON THE FHRI.COM WEBSITE INDICATES YOUR ACCEPTANCE OF THE TERMS
                            OF THIS AGREEMENT AND ANY SUPPLEMENTAL TERMS AND CONDITIONS
                            POSTED ON http://www.fhri.com GOVERNING USE OF SOFTWARE.
                        </p>

                        <h1>
                            LICENSE AGREEMENT AND CONSENT TO RELEASE CONTACT INFORMATION
                        </h1>

                        <p>
                            The terms and conditions contained in this License Agreement
                            and Consent to Release Contact Information ("Agreement"),
                            including the terms incorporated by reference herein, shall
                            govern the relationship between Financial &amp; Health
                            Research Institute LLC (“FHRI”, “we”, or “us”) and the party
                            (“you”) acquiring the software, user interfaces, applications
                            and media associated therewith (“Software”) from TDS and by
                            clicking the acceptance button you acknowledge that you have
                            read this Agreement, understand the Agreement, and accept and
                            agree to be bound by all of the terms and conditions set forth
                            herein without exception, deletion or alteration. Moreover, in
                            order to be permitted to use the Software and the website
                            associated therewith, you also accept and agree to be bound by
                            all of the provisions of the Terms of Use posted at
                            www.fhri.com, without exception, deletion or alteration.
                        </p>

                        <p>
                            The Software is only available to persons who can form legally
                            binding contracts under applicable law. Without limiting the
                            foregoing, the Software is not available to individuals under
                            the age of 18. If you do not qualify, you are not permitted to
                            use the Software.
                        </p>

                        <h2>I. Registration</h2>

                        <p>
                            Upon registration, you must provide FHRI with accurate,
                            complete registration information. It is your ongoing
                            responsibility to inform FHRI of any changes to that
                            information (including in particular your e-mail address) by
                            e-mailing support@fhri.com.
                        </p>

                        <p>
                            Each registration is single-user only. Upon registration, you
                            will choose a user name and password. FHRI does not permit any
                            sharing of your user name and password with any other party,
                            or making available a single name and password to multiple
                            users on a network.
                        </p>

                        <p>
                            You are responsible for all use of the FHRI websites made by
                            you or anyone else using your user name and password. You are
                            also responsible for preventing unauthorized use of your ID.
                            If you believe there has been any breach of security, such as
                            the disclosure, theft or unauthorized use of your ID, you must
                            immediately notify us by emailing support@fhri.com.
                        </p>

                        <h2>
                            II. CONSENT TO DISCLOSE CONTACT INFORMATION TO FINANCIAL
                            PROFESSIONALS
                        </h2>

                        <p>
                            THE SITES CONTAIN AN ADVISOR NETWORK COMPRISED OF INDEPENDENT
                            FINANCIAL PROFESSIONALS. BY YOUR ACCEPTANCE OF THIS AGREEMENT,
                            YOU ARE AGREEING THAT FHRI MAY SUBMIT YOUR PERSONAL CONTACT
                            INFORMATION PROVIDED UPON REGISTRATION FOR DISCLOSURE TO THE
                            ADVISOR NETWORK. YOUR CONTACT INFORMATION MAY BE PROVIDED TO A
                            FINANCIAL ADVISOR OR THEIR REPRESENTATIVE IN ORDER FOR AN
                            ADVISOR TO CONTACT YOU TO DISCUSS FINANCIAL PRODUCTS AND
                            SERVICES. IF YOU SUBMIT INFORMATION REGARDING THE NATURE OF
                            YOUR ASSETS, SUCH INFORMATION MAY ALSO BE DISCLOSED TO AN
                            INDEPENDENT FINANCIAL ADVISOR OR THEIR REPRESENTATIVE.
                            INDEPENDENT FINANCIAL ADVISORS ARE NOT EMPLOYEES OF FHRI AND
                            YOU ARE NOT OBLIGATED TO PURCHASE ANY FINANCIAL PRODUCTS OR
                            SERVICES. IF YOU DO NOT AGREE TO FHRI’S RELEASE OF YOUR
                            CONTACT INFORMATION YOU MUST CLICK THE “I DECLINE” BUTTON TO
                            REJECT THIS AGREEMENT AND YOU ARE NOT AUTHORIZED TO USE THE
                            SOFTWARE.
                        </p>

                        <h2>III. License</h2>

                        <p>
                            FHRI grants to you a nonexclusive, nontransferable license to
                            use the Software within the United States solely for your
                            personal, non-commercial, non-governmental, use only as
                            intended by FHRI and as authorized in this Agreement. The
                            Software may only be used for lawful purposes. Transmission or
                            solicitation of any material that violates United States
                            federal, state or other laws that apply in the US or in your
                            local area is prohibited. This may include material that is
                            obscene, threatening, harassing, libelous, or in any way a
                            violation of intellectual property laws or a third party’s
                            intellectual property rights.
                        </p>

                        <p>
                            We may suspend or terminate your license to use the Software
                            at any time, with or without cause, and with or without notice
                            to you.
                        </p>

                        <h2>IV. Limited Use</h2>

                        <p>
                            You may not modify, copy, reproduce, reverse engineer, or
                            decompile the Software or create derivative works based on the
                            Software. You may not distribute, rent, lease, sell, license,
                            or otherwise transfer any rights in the Software to any third
                            party. You must retain all copyright and trademark notices on
                            the Software and take reasonable steps to protect FHRI’s
                            intellectual property rights. Except as specifically set forth
                            in this Agreement, FHRI owns and retains all right, title, and
                            interest in the Software and any related materials. This
                            Agreement does not transfer any ownership rights in the
                            Software or any related materials to you or to any third
                            party. You may not assign any rights granted to you by FHRI
                            with respect to this License to any third party. Any attempted
                            assignment shall render your license to use the Software void.
                        </p>

                        <h2>V. Email and Other Communications</h2>

                        <p>
                            You may update or edit personal information pertaining to your
                            account information by contacting support@fhri.com.
                        </p>

                        <p>
                            We, or our agent, may periodically send you e-mail messages
                            and other communications regarding your account. From time to
                            time, we may provide you with information and offers about
                            other products and services offered by FHRI, including
                            software subscriptions, online services, and other premium
                            products and services. If you do not wish to receive such
                            information or offers, you may opt-out by following the
                            directions contained in such email advertisement or by
                            contacting support@fhri.com.
                        </p>

                        <h2>VI. Disclaimer</h2>

                        <p>
                            THE SOFTWARE IS PROVIDED ON AN "AS IS" BASIS AND TO THE
                            MAXIMUM EXTENT PERMITTED BY LAW, FHRI MAKES NO WARRANTY OF ANY
                            KIND, EXPRESS OR IMPLIED, AND ALL WARRANTIES AND
                            REPRESENTATIONS, INCLUDING, WITHOUT LIMITATION, WARRANTIES OF
                            MERCHANTABILITY, FITNESS FOR A PARTICULAR PURPOSE,
                            NONINFRINGEMENT, QUALITY, ACCURACY, RELIABILITY, AND
                            EFFECTIVENESS ARE HEREBY EXPRESSLY DISCLAIMED. YOU ASSUME THE
                            ENTIRE RISK AS TO THE QUALITY AND PERFORMANCE OF THE SOFTWARE.
                            SHOULD THE SOFTWARE PROVE DEFECTIVE, YOU ASSUME THE ENTIRE
                            RISK AND COST ASSOCIATED WITH SUCH DEFECT AND ANY SERVICE AND
                            REPAIR. TO THE EXTENT THAT ANY IMPLIED WARRANTIES CANNOT BE
                            DISCLAIMED BY APPLICABLE LAW, SUCH WARRANTY IS LIMITED TO
                            THIRTY (30) DAYS FROM THE DATE OF INITIAL DOWNLOAD OR
                            INSTALLATION OF THE SOFTWARE PROVIDED TO YOU.
                        </p>

                        <h2>VII. Limitation of Liability</h2>

                        <p>
                            TO THE MAXIMUM EXTENT ALLOWED BY LAW, FHRI IS NOT LIABLE FOR
                            ANY INDIRECT, CONSEQUENTIAL, INCIDENTAL OR SPECIAL DAMAGES,
                            REGARDLESS OF WHETHER FORESEEABLE, INCLUDING WITHOUT
                            LIMITATION THE LOSS OF PROFITS, REVENUE, DATA, OR USE OR COST
                            OF SUBSTITUTE GOODS OR SERVICES INCURRED BY YOU OR ANY THIRD
                            PARTY, WHETHER IN AN ACTION IN CONTRACT OR TORT BASED ON A
                            WARRANTY, EVEN IF TDS HAS BEEN ADVISED OF THE POSSIBILITY OF
                            SUCH DAMAGES.
                        </p>

                        <h2>VIII. Indemnification</h2>

                        <p>
                            You agree to indemnify, hold harmless and defend FHRI, its
                            parent companies, subsidiaries, affiliates, successors, and
                            authorized agents, and each of its directors, officers,
                            employees, agents, and contractors from and against any claim,
                            liability or cause of action arising from or relating to your
                            use of the Software or use by any third party on your behalf.
                        </p>

                        <h2>IX. Updates</h2>

                        <p>
                            We may, from time to time, update the Software or its related
                            materials and in doing so, incur no obligation to furnish such
                            revisions to you, although updates may be made available to
                            you from time to time in our sole discretion.
                        </p>

                        <h2>X. Premium Content</h2>

                        <p>
                            Certain materials ("Premium Content") may be available to you
                            on a paid-for subscription basis. Premium Content will be
                            identified and you will be requested to give credit card
                            details if you decide to make a purchase. If FHRI (or its
                            designated agent) does not receive payment authorization from
                            your credit card clearing service, FHRI may immediately
                            suspend or terminate your use of the FHRI websites. You are
                            responsible for the payment of all charges associated with the
                            use of the FHRI websites using your ID.
                        </p>

                        <p>
                            You may use the FHRI websites to access and purchase products
                            or services from third parties. For such purposes, your
                            contract for such products will be with the third party and
                            not with FHRI. FHRI is not responsible for the availability or
                            content of third party sites and will not be a party to, or in
                            any way responsible for, any transaction concerning goods or
                            services available from such third party sites.
                        </p>

                        <h2>XI. Proprietary Material</h2>

                        <p>
                            The Sites contain proprietary information of FHRI and its
                            licensors. You agree that You will not in any way interfere
                            with any rights of FHRI with respect to its proprietary
                            information. You are prohibited from modifying, translating,
                            decompiling, disassembling or reverse engineering or otherwise
                            attempting to determine the source code for the operation of
                            the Services.
                        </p>

                        <p>
                            In order to protect FHRI’s proprietary information, You agree
                            not to develop, create, implement, provide, sell, rent, or
                            resell (or offer to do any of the foregoing) any product or
                            service within the United States and Canada which competes
                            with the Services provided hereunder while you are a User and
                            for a period of one (1) year following termination of this
                            Agreement.
                        </p>

                        <h2>XII. Termination of End User License</h2>

                        <p>
                            If you fail to comply with any of terms of this Agreement the
                            license granted by this Agreement shall automatically
                            terminate and you must promptly return all materials,
                            including documentation, of FHRI. Nevertheless, in the event
                            of such termination, all the provisions of this Agreement
                            which operate to protect the rights of FHRI with respect to
                            the Software shall continue in force and effect.
                        </p>

                        <h2>XIII. Equitable Relief</h2>

                        <p>
                            It is understood and agreed that, notwithstanding any
                            provision of this Agreement, nothing set forth herein shall
                            restrict FHRI’s ability to obtain any equitable remedy,
                            including but not limited to injunctive relief, relating to
                            this Agreement.
                        </p>

                        <h2>XIV. Governing Law and Venue</h2>

                        <p>
                            This Agreement shall be interpreted in accordance with the
                            laws of the State of Nevada. The parties agree that the UN
                            Convention on Contracts for the International Sale of Goods
                            shall not apply to this Agreement or provision thereof. In the
                            event any part of this Agreement is invalidated by any
                            authority of competent jurisdiction, the remaining portions
                            shall remain in full force and effect. The venue for any
                            action or proceeding commenced with regard to this Agreement
                            shall be brought in Clark County, Nevada, U.S.A.
                        </p>

                        <h2>XV. Legal Fees</h2>

                        <p>
                            In the event of a legal action or proceeding brought by either
                            party in connection with this Agreement, the prevailing party
                            in such action shall be entitled to recover from the
                            non-prevailing party, in addition to any other relief granted,
                            reasonable attorneys’ fees, costs and expenses.
                        </p>

                        <h2>XVI. Arbitration.</h2>

                        <p>
                            Any controversy, claim or dispute arising out of or relating
                            to this Agreement, shall be determined by arbitration in Clark
                            County, Nevada, before a sole arbitrator mutually agreed upon.
                            The arbitration shall be administered by JAMS pursuant to its
                            rules and regulations. If the Parties are unable to agree on
                            an arbitrator within 30 days of the filing of the demand for
                            arbitration, an arbitrator shall be selected pursuant to the
                            rules and procedures of JAMS. The non-prevailing party shall
                            bear all costs and expenses, including attorneys' fees,
                            administrative costs and the fees of the arbitrator in
                            connection with such arbitration. The arbitration award shall
                            be in writing and, shall specify the factual and legal basis
                            for the award and shall be conclusive and final. Judgment on
                            the award may be entered in any court having jurisdiction.
                        </p>

                        <h2>XVII. Entire Agreement; Headings; Amendment</h2>

                        <p>
                            This Agreement constitutes the entire agreement between the
                            parties and supersedes any prior agreements. The headings to
                            the section used in this Agreement are used for convenience
                            only and shall have no substantive meaning. FHRI may amend or
                            modify this Agreement at anytime by posting such amended
                            term(s) at http://www.fhri.com. If you do not agree to FHRI’s
                            modifications to this Agreement, you are not permitted to use
                            the FHRI websites and your license shall be considered
                            terminated. Any other amendments or modifications to this
                            Agreement are only effective if agreed to in writing by FHRI.
                        </p>

                        <p>
                            Copyright © 2013 Financial &amp; Health Research Institute,
                            LLC. All Rights Reserved.
                        </p>

                        <p>
                            Questions regarding these terms may be submitted in writing to
                            Financial &amp; Health Research Institute LLC, 7835 S Rainbow
                            Blvd., Suite 4-231, Las Vegas, Nevada 89139 U.S.A.
                        </p>

                        <p>Version Date: May 6, 2013</p>
                    </div>
                    <div class="x-form-item" tabindex="-1" id="ext-gen94">
                        <label
                            for="ext-comp-1004"
                            style="width: 300px;"
                            class="x-form-item-label"
                        >I have read and accept the License Agreement:</label
                        >
                        <div
                            class="x-form-element"
                            id="x-form-el-ext-comp-1004"
                            style="padding-left: 305px;"
                        >
                            <div class="x-form-check-wrap" id="ext-gen95">
                                <input
                                    type="checkbox"
                                    autocomplete="off"
                                    id="ext-comp-1004"
                                    name="acceptTerms"
                                    class="x-form-checkbox x-form-field license-agreement"
                                />
                            </div>
                        </div>
                        <div class="x-form-clear-left"></div>
                    </div>
                </div>
                <div class="form-step registeration-code">
                    <h2 class="heading">Registration Code</h2>
                    <div
                        class="x-panel-body x-panel-body-noheader x-panel-body-noborder"
                        id="reg-code"
                        style="height: 328px;"
                    >
                        <p id="ext-gen112">
                            Please enter your registration code below. If you do not have
                            a registration code call (877) 411-3030 to get one today.
                        </p>
                        <form method="POST" id="ext-gen110" class="x-form">
                            <div class="x-form-item" tabindex="-1" id="ext-gen114">
                                <label
                                    for="ext-comp-1006"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Registration Code:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1006"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1006"
                                        name="code"
                                        class="x-form-text x-form-field x-form-invalid"
                                        style="width: 200px;"
                                    />
                                    <div
                                        class="x-form-invalid-icon"
                                        id="ext-gen124"
                                        style="left: 407px; top: 0px; visibility: visible;"
                                    ></div>
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                        </form>
                    </div>
                    <div class="signup-form hidden">
                        <form role="form">
                            <div class="form-group">
                                <label for="usrname"
                                ><span class="glyphicon glyphicon-user"></span>
                                    Username</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="usrname"
                                    placeholder="Enter email"
                                />
                            </div>
                            <div class="form-group">
                                <label for="psw"
                                ><span class="glyphicon glyphicon-eye-open"></span>
                                    Password</label
                                >
                                <input
                                    type="text"
                                    class="form-control"
                                    id="psw"
                                    placeholder="Enter password"
                                />
                            </div>
                            <div class="checkbox">
                                <label
                                ><input type="checkbox" value="" checked />Remember
                                    me</label
                                >
                            </div>
                            <button type="submit" class="btn btn-success btn-block">
                                <span class="glyphicon glyphicon-off"></span> Login
                            </button>
                        </form>
                    </div>
                </div>
                <div class="form-step signup-form">
                    <h2 class="heading">Contact Information</h2>
                    <div
                        class="x-panel-body x-panel-body-noheader x-panel-body-noborder"
                        id="ext-gen189"
                        style="height: 328px;"
                    >
                        <form method="POST" id="ext-gen190" class="x-form">
                            <div class="x-form-item" tabindex="-1" id="ext-gen193">
                                <label
                                    for="ext-comp-1008"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >First Name:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1008"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1008"
                                        name="firstName"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen198">
                                <label
                                    for="ext-comp-1009"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Last Name:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1009"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1009"
                                        name="lastName"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen203">
                                <label
                                    for="ext-comp-1010"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Email:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1010"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1010"
                                        name="email"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen209">
                                <label
                                    for="ext-comp-1011"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Phone:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1011"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1011"
                                        name="phone"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen214">
                                <label
                                    for="ext-comp-1012"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Address 1:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1012"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1012"
                                        name="street1"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen219">
                                <label
                                    for="ext-comp-1013"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Address 2:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1013"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1013"
                                        name="street2"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen224">
                                <label
                                    for="ext-comp-1014"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >City:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1014"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1014"
                                        name="city"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen229">
                                <label
                                    for="ext-comp-1015"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >State/Province:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1015"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1015"
                                        name="state"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen234">
                                <label
                                    for="ext-comp-1016"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Zip/Postal Code:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1016"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1016"
                                        name="zip"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen239">
                                <label
                                    for="ext-comp-1017"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Country:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1017"
                                    style="padding-left: 205px;"
                                >
                                    <div
                                        class="x-form-field-wrap"
                                        id="ext-gen240"
                                        style="width: 175px;"
                                    >
                                        <select name="country" id="select-country">
                                            <option value="usa">United States</option>
                                            <option value="pakistan">Pakistan</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="form-step security-info">
                    <h2 class="heading">Security Information</h2>
                    <div
                        class="x-panel-body x-panel-body-noheader x-panel-body-noborder"
                        id="ext-gen314"
                        style="height: 328px;"
                    >
                        <form method="POST" id="ext-gen315" class="x-form">
                            <div class="x-form-item" tabindex="-1" id="ext-gen318">
                                <label
                                    for="ext-comp-1033"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Username:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1033"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1033"
                                        name="username"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                    <div
                                        class="x-form-invalid-icon"
                                        id="ext-gen413"
                                        style="left: 382px; top: 0px; visibility: hidden;"
                                    ></div>
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen324">
                                <label
                                    for="ext-comp-1034"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Password:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1034"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="password"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1034"
                                        name="password"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen330">
                                <label
                                    for="ext-comp-1035"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Confirm Password:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1035"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="password"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1035"
                                        name="confirmPassword"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen336">
                                <label
                                    for="ext-comp-1036"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Security Question:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1036"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1036"
                                        name="question"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                            <div class="x-form-item" tabindex="-1" id="ext-gen341">
                                <label
                                    for="ext-comp-1037"
                                    style="width: 200px;"
                                    class="x-form-item-label"
                                >Security Answer:</label
                                >
                                <div
                                    class="x-form-element"
                                    id="x-form-el-ext-comp-1037"
                                    style="padding-left: 205px;"
                                >
                                    <input
                                        type="text"
                                        size="20"
                                        autocomplete="off"
                                        id="ext-comp-1037"
                                        name="answer"
                                        class="x-form-text x-form-field"
                                        style="width: 175px;"
                                    />
                                </div>
                                <div class="x-form-clear-left"></div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="form-step confirmation">
                    <h2 class="heading">Thank You for Registering</h2>
                    <div
                        class="x-window-body"
                        id="ext-gen367"
                        style="
									padding: 10px;
									background-color: white;
									overflow: auto;
									height: 313px;
								"
                    >
                        <p>
                            Your registration is now complete and your account is ready
                            for use. To get started, click the "Go to Login" button below
                            and enter your username and password.
                        </p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="btn-group btn-group-sm">
                    <button type="button" class="btn btn-primary" id="signup-prv">
                        Previous
                    </button>
                    <button type="button" class="btn btn-primary" id="signup-next">
                        Next
                    </button>
                    <button type="button" class="btn btn-primary" id="signup-btn">
                        Signup
                    </button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">
                        Cancel
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pnotify/3.0.0/pnotify.buttons.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#ext-comp-1004").click(function(){
                if($(this).is(":checked")){
                    $("#signup-next").prop("disabled", false);
                }
            });
            $("#ext-comp-1006").keyup(function(){
               if(this.value.length > 3){
                   $("#signup-next").prop("disabled", false);
               }
            });
            $("#ext-comp-1008").keyup(function(){
               if(this.value.length >= 3 && $("#ext-comp-1009").val().length >= 3 && isEmail($("#ext-comp-1010").val())){
                   $("#signup-next").prop("disabled", false);
               }
            });

            $("#ext-comp-1009").keyup(function(){
               if(this.value.length >= 3 && $("#ext-comp-1008").val().length >= 3 && isEmail($("#ext-comp-1010").val())){
                   $("#signup-next").prop("disabled", false);
               }
            });

            $("#ext-comp-1010").keyup(function(){
               if($("#ext-comp-1009").val().length >= 3 && $("#ext-comp-1008").val().length >= 3 && isEmail($(this).val())){
                   $("#signup-next").prop("disabled", false);
               }
            });
            $("#ext-comp-1033").keyup(function(){
                if($(this).val().length >= 3 && $("#ext-comp-1034").val().length >= 3 && $("$ext-comp-1034").val() == $("#ext-comp-1035").val()){
                    $("#signup-next").prop("disabled", false);
                }
            });
            $("#ext-comp-1034").keyup(function(){
                if($(this).val().length >= 3 && $("#ext-comp-1033").val().length >= 3 && $(this).val() == $("#ext-comp-1035").val()){
                    $("#signup-next").prop("disabled", false);
                }
            });
            $("#ext-comp-1035").keyup(function(){
                if($("#ext-comp-1033").val().length >= 3 && $("#ext-comp-1034").val().length >= 3 && $(this).val() == $("#ext-comp-1034").val()){
                    $("#signup-next").prop("disabled", false);
                }
            });
            $("#forgotUserBtn").click(function () {
                $("#forgotUser").modal();
            });
            $("#forgotPassBtn").click(function () {
                $("#forgotPass").modal();
            });

            $("#signUpBtn").click(function () {
                $("#signup-next").prop("disabled", true);
                $("#signup-prv").prop("disabled", true);
                $("#signup-btn").prop("disabled", true);
                $("#signUp").modal();
            });

            // signup-form
            var nextBtn = $("#signup-next");
            var prvBtn = $("#signup-prv");
            var signupBtn = $("#signup-btn");
            var total_screens = 4;
            var x = 1;
            nextBtn.click(function () {
                x++;
                $("#signup-prv").prop("disabled", false);
                $(this).prop("disabled", true);
                if($("#ext-comp-1006").val().length > 3 && x == 2){
                    $(this).prop("disabled", false);
                }
                if($("#ext-comp-1008").val().length >= 3 && $("#ext-comp-1009").val().length >= 3
                    && isEmail($("#ext-comp-1010").val())
                    && x == 3){
                    $(this).prop("disabled", false);
                }
                if($("#ext-comp-1033").val().length >= 3 && $("#ext-comp-1034").val().length >= 3
                    && $(this).val() == $("#ext-comp-1034").val()
                    && x == 4){
                    $(this).prop("disabled", false);
                }

                var nextDiv = $(".form-step:visible").next(".form-step");
                if (nextDiv.length == 0) {
                    // wrap around to beginning
                    // nextDiv = $(".form-step:first");
                    nextDiv = $(".form-step:last");
                }
                $(".form-step").hide();
                nextDiv.show();
                if(x == 5){
                    var registration_code = $("#ext-comp-1006").val();
                    var first_name = $("#ext-comp-1008").val();
                    var last_name = $("#ext-comp-1009").val();
                    var email = $("#ext-comp-1010").val();
                    var phone = $("#ext-comp-1011").val();
                    var address1 = $("#ext-comp-1012").val();
                    var address2 = $("#ext-comp-1013").val();
                    var city = $("#ext-comp-1014").val();
                    var state = $("#ext-comp-1015").val();
                    var postal_code = $("#ext-comp-1016").val();
                    var country = $("#select-country").val();
                    var user_name = $("#ext-comp-1033").val();
                    var password = $("#ext-comp-1034").val();
                    var password_confirmation = $("#ext-comp-1035").val();
                    var security_question = $("#ext-comp-1036").val();
                    var security_answer = $("#ext-comp-1037").val();

                    $.post("/register", {
                        "_token": "{{ csrf_token() }}",
                        registration_code: registration_code,
                        first_name: first_name,
                        last_name: last_name,
                        email: email,
                        phone: phone,
                        address1: address1,
                        address2: address2,
                        city: city,
                        state: state,
                        postal_code: postal_code,
                        country: country,
                        user_name: user_name,
                        password: password,
                        password_confirmation: password_confirmation,
                        security_question: security_question,
                        security_answer: security_answer
                    },
                    function(data, status){
                        PNotify.removeAll();
                        new PNotify({
                            title: 'Success',
                            text: 'Success Registered.',
                            type: 'success'
                        });
                        setTimeout(function(){
                            window.location = '{!! url()->current() !!}' + '/login';
                        },2000);
                    }).error(function(data, status){
                        PNotify.removeAll();
                        new PNotify({
                            title: 'Error',
                            text: 'Sorry, something went wrong.',
                            type: 'error'
                        });
                        return false;
                    });
                }
            });

            prvBtn.click(function () {
                x--;
                var prevDiv = $(".form-step:visible").prev(".form-step");
                if($("#ext-comp-1004").is(":checked") && x == 1){
                    $("#signup-next").prop("disabled", false);
                }
                if($("#ext-comp-1006").val().length > 3 && x == 2){
                    $("#signup-next").prop("disabled", false);
                }
                if($("#ext-comp-1008").val().length >= 3 && $("#ext-comp-1009").val().length >= 3
                    && isEmail($("#ext-comp-1010").val())
                    && x == 3){
                    $("#signup-next").prop("disabled", false);
                }
                if($("#ext-comp-1033").val().length >= 3 && $("#ext-comp-1034").val().length >= 3
                    && $(this).val() == $("#ext-comp-1034").val()
                    && x == 4){
                    $("#signup-next").prop("disabled", false);
                }
                if (prevDiv.length == 0) {
                    // wrap around to end
                    // prevDiv = $(".form-step:last");
                    prevDiv = $(".form-step:first");
                }
                $(".form-step").hide();
                prevDiv.show();
            });
        });
        function isEmail(email) {
            var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            return regex.test(email);
        }
    </script>
@endsection
