<?php
    require_once '../../../../libraries/functions/IncludeAll.php';
    require_once '../../../../libraries/functions/DBFetchInfo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore Our Terms and Conditions :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: | :: KeNHA</title>
    <meta name="description" content="Read the terms and conditions for using KeNHAVATE, Kenya's innovative road infrastructure authority platform.">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Base URL -->
    <base href="/KeNHAVATE/">
    <!-- Custom CSS-->
    <link rel="stylesheet" href="user/guest/css/terms-and-conditions.css">
    
</head>
<body class="d-flex justify-content-center">
    <div class="terms-and-conditions-content row w-100 m-0 p-0" style="background-image: url('image-library-KeNHA/Hand-holding-lightbulb (1).png'); background-size: cover; background-position: center; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-12 m-0 p-0 d-flex justify-content-center">
            <div class="row w-100 d-flex justify-content-center glassmorphic-colorless">
                <div class="p-0 col-md-10">    
                    
                    <?php include '../navbar/guest-nav.php'; ?>

                    <header>
                        <div class="header-bg"></div>
                        <div class="container">
                            <h1 class="header-animate">Terms and Conditions</h1>
                            <p class="header-animate">Read the terms and conditions for using KeNHAVATE's platform and services.</p>
                        </div>
                    </header>
                    
                    <main class="container">
                        <section class="intro">
                            <p class="animate">Terms of Use:</p>

                            <p class="animate">Last Revised: June, 2023.</p>
                            
                            <?php
                                $result = checkSession($con);
                                if ($result['total'] === 1) {
                                    // Output the total value

                                    /*
                                    echo $result['total'];

                                    // Check if data exists and output it in a human-readable format
                                    if (!empty($result['data'])) {
                                        // Convert array to a readable format for debugging (if needed)
                                        echo '<pre>';
                                        print_r($result['data']);
                                        echo '</pre>';
                                    } else {
                                        echo 'No data available';
                                    }*/

                                    // Output the HTML buttons
                                    echo '
                                        <strong class="btn btn-danger text-start animate"><i class="bi bi-exclamation-diamond-fill"></i> PLEASE READ THESE TERMS OF USE CAREFULLY. ONCE YOU HAVE REVIEWED THEM, YOU MAY AGREE TO CONTINUE AND LOGIN OR DISAGREE AND GO BACK BY CLICKING THE CORRESPONDING BUTTONS AT THE BOTTOM OF THE PAGE. ACCESSING OR USING THIS WEBSITE CONSTITUTES ACCEPTANCE OF THESE TERMS OF USE ("TERMS"), WHICH MAY BE REVISED BY KEENHA FROM TIME TO TIME, AND CREATES A BINDING AGREEMENT BETWEEN YOU, THE USER ("USER"), AND THE KENYA NATIONAL HIGHWAYS AUTHORITY (“KeNHA”). IF YOU DO NOT UNDERSTAND ANY PART OF THIS AGREEMENT, YOU ARE ADVISED TO CONSULT LEGAL COUNSEL. IF YOU DO NOT AGREE TO THESE TERMS, PLEASE DO NOT ACCESS OR USE THIS WEBSITE. THESE TERMS CONTAIN DISCLAIMERS AND OTHER PROVISIONS, INCLUDING:</strong>
                                    ';
                                }
                                else{
                                    echo '
                                        <strong class="text-danger animate"><i class="bi bi-exclamation-diamond-fill"></i> PLEASE READ THESE TERMS OF USE CAREFULLY. ACCESSING OR USING THIS WEBSITE, CONSTITUTES ACCEPTANCE OF THESE TERMS OF USE ("TERMS"), AS SUCH MAY BE REVISED BY KeNHA FROM TIME TO TIME, AND IS A BINDING AGREEMENT BETWEEN YOU, THE USER ("USER") AND KENYA NATIONAL HIGHWAYS AUTHORITY (“KeNHA”) GOVERNING THE USE OF THE WEBSITE. YOU ARE ADVISED TO CONSULT LEGAL COUNSEL SHOULD YOU NOT COMPREHEND ANY PART OF THIS AGREEMENT. IF USER DOES NOT AGREE TO THESE TERMS, USER SHOULD NOT ACCESS OR USE THIS WEBSITE. THESE TERMS CONTAIN DISCLAIMERS AND OTHER PROVISIONS TO THE EFFECT THAT:</strong>
                                    ';
                                }
                            ?>
                        </section>
                        <section class="terms-section my-5">
                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">1. LIMIT OUR LIABILITY TO USER:</h2>
                                <p>These Terms apply to your access to, and use of, all or part of any website or mobile application of KeNHA or its Contractors, Consultants, Service Providers and affiliates (collectively, "KeNHA"), and any other site, mobile application or online service where these Terms are posted (collectively, the "Sites"). These Terms do not alter in any way the terms or conditions of any other agreement you may have with KeNHA for products, services or otherwise. It is required by Law that all engagements on this site shall be governed by the provisions of the Access to Information Act and the Data Protection Act, Laws of Kenya. In the event there is any conflict or inconsistency between these Terms and any other terms of use that appear on the Sites, these Terms will govern. However, if you navigate or are redirected away from the Sites to a third-party site, you may be subject to alternative terms and conditions of use, as may be specified on such site, which will govern your use of that site. While we make reasonable efforts to provide accurate and timely information about KeNHA on the Sites, you should not assume that the information is always up to date or that the Sites contain all the relevant information available about KeNHA. In particular, if you are making an investment decision owing to information obtained with regards to KeNHA, please consult a number of different sources. These terms include an Arbitration provision that governs any disputes between you and us. Unless you opt out, as described below, this provision will: • Eliminate your right to a trial by court; and; • Substantially affect your rights, including preventing you from bringing, joining or participating in class action or consolidated proceedings. You agree that we may provide notices, disclosures and amendments to these Terms by electronic means, including by changing these Terms by posting revisions on the Sites.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">2. ELIGIBILITY:</h2>
                                <p>he Sites are not targeted towards, nor intended for use by, anyone under the age of 18. A USER MUST BE AT LEAST AGE 18 TO ACCESS AND USE THE SITES. If the User is between the ages of 13 and 18, he or she may only use the Sites under the supervision of a parent or legal guardian who agrees to be bound by these Terms. User represents and warrants that (a) he/she is not located in a country that is subject to a Kenya government embargo, or that has been designated by the Kenya government as a "terrorist supporting" country; and (b) he/she is not listed on any Kenya government list of prohibited or restricted parties. In order to participate in certain areas of our Sites, you will need to register for an account.</p>
                                <p>You agree to:</p>
                                <ul class="small-alphabetical-list">
                                    <li>(a). Create only one account.</li>
                                    <li>(b). Provide accurate, truthful , current and complete information when creating your account.</li>
                                    <li>(c). Maintain and promptly update your account information.</li>
                                    <li>(d). maintain the security of your account by not sharing your password with others and restricting access to your account and your computer.</li>
                                    <li>(e). Promptly notify KeNHA if you discover or otherwise suspect any security breaches relating to the Sites.</li>
                                    <li>(f). Take responsibility for all activities that occur under your account and accept all risks of unauthorized access.</li>
                                </ul>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">3. PRIVACY:</h2>
                                <p>Please read the Privacy Policy carefully to understand how KeNHA collects, uses and discloses personally identifiable information from its users. By accessing or using the Sites, you consent to all actions that we take with respect to your data consistent with our Privacy Policy.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">4. EMAIL COMMUNICATIONS:</h2>
                                <p>If a User signs up for a KeNHA account on the Sites, the User is, by default, opted in to receive promotional email communications from KeNHA ("Email Communications"). The User may, at the time of sign up, opt out of receiving Email Communications from KeNHA. Thereafter, the User may opt out of receiving Email Communications by adjusting the User’s profile settings in the User’s KeNHA account via www.kenha.co.ke.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">5. INTELLECTUAL PROPERTY - COPYRIGHT, TRADEMARKS, AND USER LICENSE:</h2>
                                <p>Unless otherwise indicated, the Sites and all content and other materials therein, including, without limitation, the KeNHA logo and all designs, text, graphics, pictures, information, data, software, sound files, other files and the selection and arrangement thereof (collectively, "Site Materials") are the property of KeNHA or its licensors or users and are protected by KENYA and international copyright laws. KeNHA, the KeNHA logo, and other KeNHA trademarks, service marks, graphics, and logos used in connection with the Sites are trade names, trademarks or registered trademarks of KeNHA (collectively "KeNHA Marks"). Other trademarks, service marks, graphics and logos used in connection with the Sites are the trademarks or registered trademarks of their respective owners (collectively "Third Party Marks"). The KeNHA Marks and Third-Party Marks may not be copied, imitated, or used, in whole or in part, without the prior written permission of KeNHA or the applicable trademark holder.</p>
                                <p>The Sites and the Content are protected by copyright, trademark, patent, trade secret, international treaties, state and federal laws, and other proprietary rights and also may have security components that protect digital information only as authorized by KeNHA or the owner of the Content. All rights not expressly granted are reserved.</p>
                                <p>Subject to these Terms, KeNHA grants the User a personal, non-exclusive, non-transferable, limited, and revocable license to use the Sites for personal use only in accordance with these Terms ("User License"). Any use of the Sites in any other manner, including, without limitation, resale, transfer, modification or distribution of the Sites or text, pictures, music, barcodes, video, data, hyperlinks, displays, and other content associated with the Sites ("Content") is prohibited. Unless explicitly stated herein, nothing in these Terms shall be construed as conferring in any manner, whether by implication, estoppel or otherwise, any title or ownership of, or exclusive use-rights to, any intellectual property or other right and any goodwill associated therewith. These Terms and User License also govern any updates to, or supplements or replacements for, the Sites, unless separate terms accompany such updates, supplements, or replacements, in which case the separate terms will apply.</p>
                                <p>If you believe any material available via the Sites infringes a copyright you own or control, you may file a notification of such infringement with our Designated Office as set forth below. KeNHA;</p>
                                <strong style="margin-bottom: 20px;">
                                    <span>Director, Policy, Research and Compliance.</span></br>
                                    <span><a href="mailto:dpsc@kenha.co.ke">mailto:dpsc@kenha.co.ke</a></span></br>
                                    <span>Block C, 4th Floor, Barabara Plaza,</span></br>
                                    <span>Mazao Road, JKIA Airport,</span></br>
                                    <span>Nairobi Kenya.</span></br>
                                </strong>
                                <p style="margin-top: 20px">You should note that if you knowingly misrepresent in your notification that the material or activity is infringing, you will be liable for any damages, including costs and attorneys' fees, incurred by us or the alleged infringer as the result of our relying upon such misrepresentation in removing or disabling access to the material or activity claimed to be infringing.</p>
                                <p>If a notice of copyright infringement has been filed against material posted by you on the Sites, you may make a counter-notification with our Designated Office listed above, provided that such counter-notification complies with the requirements of KIPI. If KeNHA receives a valid counter-notification, it may reinstate the removed or disabled material in accordance with the Kenya Industrial Property Institute (KIPI). In accordance with the KIPI and other applicable law, KeNHA has also adopted a policy of terminating, in appropriate circumstances and in our sole discretion, users who are deemed to be repeat infringers. KeNHA may also, in its sole discretion, limit access to the Sites and/or terminate the accounts of any users who infringe any intellectual property rights of others, whether or not there is any repeat infringement.</p>
                            </article>
                            
                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">6. ACCEPTABLE USE:</h2>
                                <p>User’s use of the Sites, any Content, and any information provided by the User including user names and passwords, addresses, e-mail addresses, phone number, financial information (such as credit card numbers), information related to a KeNHA Card or employer name ("User Information") transmitted in connection with the Sites is limited to the contemplated functionality of the Sites. In no event may the Sites be used in a manner that; (a) harasses, abuses, stalks, threatens, defames, or otherwise infringes or violates the rights of any other party (including but not limited to rights of publicity or other proprietary rights); (b) is unlawful, fraudulent, or deceptive; (c) provides sensitive personal information unless specifically requested by KeNHA, (d) includes spam or any unsolicited advertising; (e) uses technology or other means to access KeNHA or Content that is not authorized by KeNHA; (f) uses or launches any automated system, including without limitation, "robots," "spiders," or "offline readers," to access KeNHA or Content; (g) attempts to introduce viruses or any other computer code, files, or programs that interrupt, destroy, or limit the functionality of any computer software, hardware, or telecommunications equipment; (h) attempts to gain unauthorized access to KeNHA’ computer network or user accounts; (i) encourages conduct that would constitute a criminal offense or that gives rise to civil liability; (j) violates these Terms; (k) attempts to damage, disable, overburden, or impair KeNHA’ servers or networks; (l) impersonates any person or entity or otherwise misrepresents your identity or affiliation with another person or entity; or (m) fails to comply with applicable third party terms (collectively "Acceptable Use"). KeNHA reserves the right, in its sole discretion, to terminate any User License, terminate any User’s participation in the Sites, remove Content, or assert legal action with respect to Content or use of the Sites that KeNHA reasonably believes is or might be in violation of these Terms, or KeNHA policies including the KeNHA Card Terms and Conditions. KeNHA’ failure or delay in taking such actions does not constitute a waiver of its rights to enforce these Terms.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">7. USER CONTENT:</h2>
                                <p>KeNHA does not control, take responsibility for or assume liability for any User Content posted, stored or uploaded by you or any third party, or for any loss or damage thereto, nor is KeNHA liable for any user conduct or any mistakes, defamation, slander, libel, omissions, falsehoods, obscenity, pornography or profanity you may encounter. The interactive areas are generally designed as open and public community areas for connecting and sharing with other people. When you participate in these areas, you understand that certain information and content you choose to post may be displayed publicly. You are solely responsible for your use of the Sites and agree to use the interactive areas at your own risk. If you become aware of User Content that you believe violates these Terms (with the exception of copyright infringement which is addressed in the KIPI Act), you may report it by clicking on the "Report Abuse" or "Flag" links located just below each piece of User Content. Enforcement of these Terms however, is solely in our discretion and absence of enforcement in some instances does not constitute a waiver of our right to enforce the Terms in other instances.</p>
                                <p>In addition, these Terms do not create any private right of action on the part of any third party or any reasonable expectation or promise that the Sites will not contain any content that is prohibited by these Terms. Although KeNHA has no obligation to screen, edit or monitor any of the User Content posted on the Sites, KeNHA reserves the right, and has absolute discretion, to remove, screen or edit any User Content on the Sites at any time and for any reason without notice. You are solely responsible for creating backup copies and replacing any User Content you post or store on the Sites at your sole cost and expense. If you are viewing the Sites on a public computer or are otherwise using a computer to which multiple people have potential access, be sure to follow all relevant instructions to ensure you are sufficiently disconnected and logged off the Sites and the computer system you are using to prevent unauthorized User Content. You represent and warrant that your User Content is not subject to any confidentiality obligations and that you own and control all of the rights to the User Content, have the lawful right to distribute and produce such User Content, or otherwise have the right to grant the rights to KeNHA that you grant herein.</p>
                                <p> KeNHA claims no ownership or control over any User Content, except as otherwise provided herein, on the Sites or in a separate agreement. However, by submitting or posting User Content on the Sites, you grant KeNHA and its designees a worldwide, perpetual, irrevocable, non-exclusive, fully-paid up and royalty free license to use, sell, reproduce, prepare derivative works, combine with other works, alter, translate, distribute copies, display, perform, publish, license or sub-license the User Content and your name and likeness provided in connection with such use of your User Content. By posting User Content, you hereby release KeNHA and its agents and employees from any claims that such use, as authorized above, violates any of your rights and you understand that you will not be entitled to any compensation for any use of your User Content.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">8. SUBMISSION OF IDEAS:</h2>
                                <p>Separate and apart from the User Content you provide, you may submit questions, comments, feedback, suggestions, ideas, improvements, plans, notes, drawings, original or creative materials or other information about KeNHA, our Sites and our products (collectively, "Ideas") either through the portal or otherwise. The Ideas you submit are voluntary, non-confidential, gratuitous and non-committal. Please do not send us Ideas if you expect payment or wish to retain ownership or claim rights in them; You must also inform us if you have a pending or registered patent relative to the Idea. You represent and warrant that your Idea is not subject to any confidentiality obligations or third party intellectual property encumbrances and that you own and control all of the rights to the Idea and have the authority to grant the rights to KeNHA that you grant herein. By submitting your Idea, you grant KeNHA and its designees a worldwide, perpetual, irrevocable, non-exclusive, fully-paid up and royalty free license to use, sell, reproduce, prepare derivative works, combine with other works, alter, translate, distribute copies, display, perform, publish, license or sub-license the Idea and shall be entitled to the unrestricted use and dissemination of Ideas for any purpose, commercial or otherwise, without acknowledgment or compensation to you. By submitting your Idea, you hereby release KeNHA and its agents and employees from any claims that such use violates any of your rights. KeNHA shall own exclusive rights, including all intellectual property rights, to any work it creates or has created from the Idea or a similar idea of its own.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">9. LINKS TO SITES:</h2>
                                <p>You are granted a limited, non-exclusive right to create text hyperlinks to the Sites for noncommercial purposes, provided such links do not portray KeNHA in a false, misleading, derogatory or otherwise defamatory manner and provided further that the linking site does not contain any obscene, pornographic, sexually explicit or illegal material or any material that is offensive, harassing or otherwise objectionable. This limited right may be revoked at any time. In addition, you may not use KeNHA' logo or other proprietary graphics to link to our Sites without our express written permission. Further, you may not use, frame or utilize framing techniques to enclose any KeNHA trademark, logo or other proprietary information, including the images found at the Sites, the content of any text or the layout/design of any page or form contained on a page on the Sites without our express written consent. Except as noted above, you are not conveyed any right or license by implication, estoppel or otherwise in or under any patent, trademark, copyright or proprietary right of KeNHA or any third party. KeNHA makes no claim or representation regarding, and accepts no responsibility for, the quality, content, nature or reliability of websites linking to the Sites. Such sites are not under the control of KeNHA and KeNHA is not responsible for the content of any linked site or any link contained in a linked site, or any review, changes or updates to such sites.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">10. INDEMNIFICATION:</h2>
                                <p>The User agrees to defend, indemnify, and hold harmless KeNHA, its parent, subsidiary and other affiliated companies, independent contractors, service providers and consultants, and their respective employees, contractors, agents, officers, and directors ("KeNHA Indemnitees") from any and all claims, suits, damages, costs, lawsuits, fines, penalties, liabilities, and expenses (including attorneys’ fees) ("Claims") that arise from or relate to the User’s use or misuse of the Sites, violation of these Terms, violation of any rights of a third party, any User Content or Ideas you provide, or your conduct in connection with the Sites. Notwithstanding the foregoing, this indemnification provision shall not apply to any Claims caused by a KeNHA Indemnitee’s sole negligence. KeNHA reserves the right to assume the exclusive defense and control of any matter otherwise subject to indemnification by the User, in which event the User will cooperate in asserting any available defenses.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">11. WARRANTIES; DISCLAIMERS:</h2>
                                <p>KeNHA is providing the sites to the User "as is" and the User is using the sites at his or her own risk. to the fullest extent allowable under applicable law, KeNHA disclaims all warranties, whether express or implied, including any warranties that the sites are merchantable, reliable, available, accurate, fit for a particular purpose or need, non-infringing, free of defects or viruses, able to operate on an uninterrupted basis, that the use of the sites by the User is in compliance with laws applicable to the User, or that user information transmitted in connection with the sites will be successfully, accurately, or securely transmitted or received. The materials and information on the sites may include technical inaccuracies or typographical errors. Notwithstanding the foregoing, none of the disclaimers in this paragraph shall apply to warranties related to personal injury.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">12. NO LIABILITY:</h2>
                                <p>Subject to applicable law, including with respect to strict liability for personal injury or non-waivable statutory rights under Kenyan law, in no event shall KeNHA or its officers, directors, employees, shareholders or agents:
                                <ul>
                                    <li>(a). Be liable to the User with respect to use of the sites, the content or the materials contained in or accessed through the sites (including without limitation any damages caused by or resulting from reliance by a User on any information obtained from KeNHA), or any damages that result from mistakes, omissions, interruptions, deletion of files or email, errors, defects, viruses, delays in operation or transmission or any failure of performance, whether or not resulting from acts of god, communications failure, theft, destruction or unauthorized access to KeNHA records, programs or services.</li>
                                    <li>(b). Be liable to the User for any indirect, special, incidental, consequential, punitive or exemplary damages, including, without limitation, damages for loss of goodwill, lost profits, loss, theft or corruption of user information, or the inability to use the sites or any of their features. The User’s sole remedy is to cease use of the sites. If you reside in a jurisdiction other than Kenya, your jurisdiction may not allow the limitation of liability in contracts with consumers, and therefore, some or all of these limitations of liability may not apply to you.</p></li>
                                </ul>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">13. THIRD PARTY CONTENT, SITES, PRODUCTS AND SERVICES (INCLUDING ADVERTISING AND PROMOTIONS):</h2>
                                <p>KeNHA may provide third party content on the Sites (including embedded content) or links to third-party web pages, content, applications, products and services, including advertisements and promotions (collectively, "Third Party Content") as a service to those interested in this information. We do not control, endorse or adopt any Third-Party Content, including that the inclusion of any link does not imply affiliation, endorsement or adoption by KeNHA of any site or any information contained therein, and can make no guarantee as to its accuracy or completeness. You acknowledge and agree that KeNHA is not responsible or liable in any manner for any Third-Party Content and undertakes no responsibility to update or review such Third-Party Content. You agree to use such Third-Party Content contained therein at your own risk. When you visit other sites via Third Party Content, or participate in promotions or business dealings with third parties, you should understand that our terms and policies no longer govern, and that the terms and policies of those third-party sites will now apply. You should review the applicable terms and policies, including privacy and data gathering practices, of any site to which you navigate from our Sites. You must comply with any applicable third-party terms when using the Sites.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">14. MODIFICATIONS TO THE SITES:</h2>
                                <p>KeNHA reserves the right to modify or discontinue, temporarily or permanently, the Sites or any features or portions thereof without prior notice. You agree that KeNHA will not be liable for any modification, suspension or discontinuance of the Sites or any part thereof.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">15. FINANCIAL MATERIAL DISCLOSURES:</h2>
                                <p>Forward-Looking Statements: The Sites, and any documents issued by KeNHA and available through the Sites, may contain statements which constitute forward-looking statements within the meaning assigned within the jurisdiction of KENYA. Forward-looking statements can be identified by the fact that they do not relate strictly to historical or current facts. They often include words such as "believes," "expects," "anticipates," "estimates," "intends," "plans," "seeks" or words of similar meaning, or future or conditional verbs, such as "will," "should," "could" or "may." Forward-looking statements include statements made as to future operations, costs, capital expenditures, cash flow, product developments, operating efficiencies, sales and earnings estimates or trends and expansion plans, initiatives and projections. These forward-looking statements are based on our expectations as of the date such forward-looking statements are made and are neither predictions nor guarantees of future events or circumstances. Actual future results and trends may differ materially depending on a variety of factors including the risks detailed in the company’s filings with the Securities and Exchange Commission, including the "Risk Factors" section of KeNHA Annual Report on Form 10-K for the most recent fiscal year ended.</p>
                                <p>The company assumes no obligation to update any of these forward-looking statements. Press Releases: The information contained within press releases issued by KeNHA should not be deemed accurate or current except as of the date the release was posted. KeNHA specifically disclaims any duty to update, the information in the press releases. To the extent any information therein is forward-looking it is intended to fit within the safe harbor for forward-looking statements and is subject to material risk. Third-Party Financial Information: As a service, KeNHA may provide links to third-party websites or services that contain financial or investment information about KeNHA. KeNHA neither regularly monitors nor has control over the content of third parties' statements or websites. Accordingly, KeNHA does not endorse or adopt, nor make any representations or warranties whatsoever regarding the accuracy or completeness, of those websites or any information contained therein, including, without limitation, analysts' reports and stock quotes. Users visit these websites and use the information contained therein at their own risk.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">16. ARBITRATION:</h2>
                                <p>Please read this section carefully. It affects rights that you may otherwise have. It provides for resolution of most disputes through arbitration instead of court trials and class actions. Arbitration is more informal than a lawsuit in court, uses a neutral arbitrator instead of a judge or jury, and discovery is more limited. Arbitration is final and binding and subject to only very limited review by a court. This arbitration clause shall survive termination of these Terms. Binding Arbitration. This provision is intended to be interpreted broadly to encompass all disputes or claims arising out of or relating to these Terms, your use of the Sites, and your relationship with us. Any dispute or claim arising out of or relating to these Terms or use of the Sites and your relationship with KeNHA or any subsidiary, parent or affiliate company or companies (whether based in contract, tort, statute, fraud, misrepresentation or any other legal theory) will be resolved by binding arbitration, except that either of us may take claims to small claims court if they qualify for hearing by such a court. Opt-Out. Notwithstanding the above, you may choose to pursue your claim in court and not by arbitration if you opt out of this arbitration provision within 30 days from the earliest of the date you downloaded, installed, accessed or used the Sites (the "Opt Out Deadline") after these Terms have gone into effect. You may opt out of these arbitration procedures by sending us a written notice that you opt out to the following address:</p>
                                <strong style="margin-bottom: 20px;">
                                    <span>Director, Policy, Research and Compliance.</span></br>
                                    <span><a href="mailto:dpsc@kenha.co.ke">mailto:dpsc@kenha.co.ke</a></span></br>
                                    <span>Block C, 4th Floor, Barabara Plaza,</span></br>
                                    <span>Mazao Road, JKIA Airport,</span></br>
                                    <span>Nairobi Kenya.</span></br>
                                </strong>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">17. KENHA LEGAL SERVICES:</h2>
                                <p>Costs of Arbitration. Each party will bear the fees and expense of its own attorneys, experts, witnesses for filing, preparation and presentation of evidence at the arbitration. Class Action Waiver. You and we each agree that any proceeding, whether in arbitration or in court, will be conducted only on an individual basis and not in a class, consolidated or representative action. If a court or arbitrator determines in an action between you and us that this class action waiver is unenforceable, the arbitration agreement will be void as to you. If you opt out of the arbitration provision as specified above, this class action waiver provision will not apply to you. Neither you, nor any other customer, can be a class representative, class member, or otherwise participate in a class, consolidated or representative proceeding without having complied with the opt out procedure set forth above. If for any reason a claim proceeds in court rather than through arbitration, you and we each waive any right to a jury trial.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">18. GOVERNING LAW AND JURISDICTION:</h2>
                                <p>These Terms and use of the Sites are governed by the laws of Kenya, without regard any conflicts. The United Nations Convention on Contracts for the International Sale of Goods shall have no applicability. If the arbitration agreement is ever deemed unenforceable or void, the User irrevocably consents to the exclusive jurisdiction of Kenya, for purposes of any legal action arising out of or related to the use of the Sites or these Terms.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">19. TERMINATION:</h2>
                                <p>Notwithstanding any of these Terms, KeNHA reserves the right, without notice and in its sole discretion, to terminate your license to use the Sites and to block or prevent your future access to and use of the Sites. KeNHA’ failure or delay in taking such actions does not constitute a waiver of its rights to enforce these Terms.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">20. CHANGES:</h2>
                                <p>KeNHA reserves the right to change or modify these Terms or any other KeNHA policies related to use of the Sites at any time and at its sole discretion by posting revisions on the Sites. Continued use of the Sites following such changes or modifications to the Terms or other KeNHA policies will constitute acceptance of such changes or modifications.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">21. SEVERABILITY:</h2>
                                <p>If any provision of these Terms shall be deemed unlawful, void or for any reason unenforceable, then that provision shall be deemed severable from these Terms and shall not affect the validity and enforceability of any remaining provisions.</p>
                            </article>

                            <article class="animate d-grid">
                                <h2 class="px-1 px-md-3 px-lg-5">22. Contact Information</h2>
                                <p>If you have any questions, complains, or claims regarding the site and these Terms, please contact us at:</p>
                                <strong style="margin-bottom: 20px;">
                                    <span>Director, Policy, Research and Compliance.</span></br>
                                    <span><a href="mailto:dpsc@kenha.co.ke">mailto:dpsc@kenha.co.ke</a></span></br>
                                    <span>Block C, 4th Floor, Barabara Plaza,</span></br>
                                    <span>Mazao Road, JKIA Airport,</span></br>
                                    <span>Nairobi Kenya.</span></br>
                                </strong>
                            </article>
                            
                            
                            <?php
                                $result = checkSession($con);
                                if ($result['total'] === 1) {
                                    // Output the total value

                                    /*
                                    echo $result['total'];

                                    // Check if data exists and output it in a human-readable format
                                    if (!empty($result['data'])) {
                                        // Convert array to a readable format for debugging (if needed)
                                        echo '<pre>';
                                        print_r($result['data']);
                                        echo '</pre>';
                                    } else {
                                        echo 'No data available';
                                    }*/

                                    // Output the HTML buttons
                                    echo '
                                        <div class="d-flex justify-content-around mt-5">
                                            <button class="disagree-and-go-back btn d-flex justify-content-center" type="button" id="disagree&GoBack">
                                                Disagree <i class="bi bi-hand-thumbs-down-fill"></i>
                                            </button>
                                            <button class="agree-and-continue btn d-flex justify-content-center" type="button" id="agree&Continue">
                                                Agree & Continue <i class="bi bi-hand-thumbs-up-fill"></i>
                                            </button>
                                        </div>
                                    ';
                                }
                            ?>

                        </section>
                    </main>
                    
                    <?php include '../footer/guest-footer.php'; ?>
                </div>
            </div>
        </div>
    </div>
        
    <div class="terms-and-conditions-loader w-100 h-100 d-flex justify-content-center align-items-center">
        <lottie-player
            src="https://lottie.host/9af2d4e7-dd42-423a-8904-c7dc09ca2459/rqArWFcV5E.json"
            background="#000000"
            speed="1"
            style="width: 300px; height: 300px"
            loop 
            autoplay
            direction="1"
            mode="normal">
        </lottie-player>
    </div>
        
    <!-- Bootstrap 5 JS (Optional, only if you need Bootstrap JS functionality) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <!-- LordIcon js -->
    <script src="https://cdn.lordicon.com/lordicon.js"></script>

    <!-- LottieFlow animated Icon js -->
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>

    <!-- jQuery (required for your $(document).ready function) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Custom js -->
    <script src="user/guest/js/terms-and-conditions.js"></script>
</body>
</html>
