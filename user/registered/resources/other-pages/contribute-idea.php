<?php
    
    include '../../../../libraries/functions/IncludeAll.php';
    include '../../../../libraries/functions/DBFetchInfo.php';

    //confirm session is set
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Transform Kenya's highways with your innovative ideas on KeNHAVATE. Submit your concepts easily, collaborate with others, and potentially earn rewards for your contributions.">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <!-- Base URL -->
    <base href="/KeNHAVATE/">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="user/registered/css/contribute-idea.css">
    <title>Contribute Your Idea :: | :: KeNHAVATE :: | :: Kenya National Highway Authority :: |:: KeNHA</title>





    <!-- border radius

        are the main border radius utility classes:

        .rounded: Applies a small border-radius (0.25rem).
        .rounded-sm: Applies a smaller border-radius (0.2rem).
        .rounded-lg: Applies a larger border-radius (0.3rem).
        .rounded-pill: Applies a fully rounded border radius (50%).
        .rounded-circle: Applies a circular border radius (for square elements).
        .rounded-0: Removes the border radius (no rounding).

    -->
        
</head>
<body>
    <div class="contribute-idea-content container-fluid d-flex justify-content-center p-0 m-0">
        <div class="row w-100">
            <nav id="sidebar" class="col-lg-3 d-flex flex-column sidebar">
                <?php include '../navbar/registered-nav.php'; ?>
            </nav>
            
            <main class="col-lg-9 main-content p-0">
                <nav class="sticky-top d-flex px-4 py-3 mb-2" style="z-index: 1; background-color: var(--white-color);">
                    <div class="d-flex justify-content-between align-items-center w-100">
                        
                        <button id="sidebarToggle2" class="d-lg-none toggle-btn" style="outline: none; border: none; box-shadow: none; background-color: transparent;">
                            <lottie-player
                                src="image-library-KeNHA/lottieflow-menu-nav-03-000000-easey.json" 
                                background="transparent" 
                                speed="1" 
                                style="width: 30px; height: 30px;" 
                                loop 
                                autoplay>
                            </lottie-player>
                        </button>
                        <h4 class="mb-0">Contribute Idea</h4>
                        <i class="bi bi-bell"></i>
                    </div>
                </nav>
                
                <div class="px-4">
                    <div class="mb-4 d-flex justify-content-center">
                        <form id="searchForm" action="#" method="GET" class="px-3 d-flex align-items-center justify-content-center rounded" style="gap: 10px; border: 1px solid var(--bs-gray); width: fit-content;">
                            <i class="bi bi-search text-light"></i> 
                            <input class="p-2" type="search" name="" id="" placeholder="search here...">
                        </form>
                    </div>
                    <div class="mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title d-flex flex-row justify-content-center text-danger w-100" style="gap: 10px;">
                                    <i class="bi bi-exclamation-circle-fill"></i> Polite Notice!
                                </h5>
                                <p class="card-text">
                                    1. Submissions found to be plagiarized will result in the permanent suspension of your account on this platform.
                                </p>
                                <p class="card-text">
                                    2. KeNHA disclaims any responsibility for the submission of plagiarized content or instances of copyright infringement, including potential legal actions. Each individual is solely accountable for their submissions and any resulting consequences.
                                </p>
                                <p class="card-text">
                                    3. We strongly advise you to secure copyright for your submissions through the Kenya Industrial Property Institute (KIPI) to mitigate any potential risks.
                                </p>
                                <p class="card-text">
                                    4. Please be aware that maintaining the integrity of your work is paramount. Engage in thorough research and proper citation practices to ensure originality and avoid any infringements on intellectual property rights.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="mb-4">
                        <form class="form br-normal p-4 px-lg-5" id="ideaSubmissionForm">
                            <h1 class="text-center">Idea Contribution Form</h1>

                            <div class="text-danger mb-3"><i>All fields are mandatory. Please fill in this form</i></div>

                            <div class="section-A d-grid">
                                <h3 class="mb-3" style="text-decoration: underline;">Section A</h3>
                                <!-- Yes/No Question -->
                                <div class="form-group d-flex flex-column mb-5">
                                    <label for="collaborationIdea">Do you want to avail your idea for collaboration with other users?</label>
                                    <small class="form-text text-muted mb-2">Select "Yes" to allow others to collaborate with you on your idea and "No" to keep your idea to your self.</small>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="collaboration" id="collabYes" value="yes" required>
                                        <label class="form-check-label" for="collabYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="collaboration" id="collabNo" value="no">
                                        <label class="form-check-label" for="collabNo">No</label>
                                    </div>
                                </div>

                                <!-- Individual or Team -->
                                <div class="form-group mb-5">
                                    <label class="mb-2">Is this work individual or a team?</label>
                                    <select class="form-control" id="workType" required>
                                        <option value="">Select...</option>
                                        <option value="individual">Individual</option>
                                        <option value="team">Team</option>
                                    </select>
                                </div>

                                <!-- Team Members Input -->
                                <div class="form-group mb-5" id="teamMembersDropdown" style="display: none;">
                                    <label>Number of team members:</label>
                                    <select class="form-control" id="numberOfMembers">
                                        <option value="">Select...</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                                
                                <div>
                                    <h6 class="fw-bolder text-danger" id="teamMembersInputsHeader">List the Email Addresses of All Team Members Stated Above:</h6>
                                    <div class="form-group mb-5" id="teamMembersInputs"></div>
                                </div>

                                <!-- Kenha Staff Question -->
                                <div class="form-group mb-3">
                                    <label>Are you a Kenha staff?</label><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kenhaStaff" id="kenhaYes" value="yes" required>
                                        <label class="form-check-label" for="kenhaYes">Yes</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="kenhaStaff" id="kenhaNo" value="no">
                                        <label class="form-check-label" for="kenhaNo">No</label>
                                    </div>
                                </div>

                                <!-- Email Input -->
                                <div class="form-group mb-5" id="workEmailGroup">
                                    <label for="workEmail">Work Email:</label>
                                    <input type="email" class="form-control" id="workEmail" required>
                                </div>
                                
                                <div class="form-group mb-5" id="personalEmailGroup" style="display: none;">
                                    <label for="personalEmail">Personal Email:</label>
                                    <input type="email" class="form-control" id="personalEmail">
                                </div>

                                <!-- Designation Dropdown -->
                                <div class="form-group mb-5">
                                    <label for="designation">Designation:</label>
                                    <select class="form-control" id="designation" required>
                                        <option value="">Select...</option>
                                        <option value="manager">Manager</option>
                                        <option value="engineer">Engineer</option>
                                        <option value="analyst">Analyst</option>
                                        <option value="staff">Staff</option>
                                        <option value="other">Other</option>
                                    </select>
                                </div>

                                <button type="button" class="btn btn-send d-flex flex-row align-items-center mb-1" style="gap: 10px; width: fit-content; justify-self: center;">
                                    Continue to Section 2 
                                    <lottie-player
                                        src="image-library-KeNHA/lottieflow-arrow-06-02-000000-easey.json" 
                                        background="transparent" 
                                        speed="1" 
                                        style="width: 30px; height: 30px;" 
                                        loop 
                                        autoplay>
                                    </lottie-player>
                                </button>
                            </div>

                            <div class="section-B">
                                <h3 class="mb-3" style="text-decoration: underline;">Section B</h3>
                                <h6 class="text-danger mb-5"><i>* Fill In The Required Details In Abstract Form Below *</i></h6>

                                    <div class="row row-1">
                                
                                        <div class="form-group col-lg-6 mb-5" id="ideaTitleGroup">
                                            <label class="mb-2" for="ideaTitle">1. State Your Idea Title:</label>
                                            <input type="text" class="form-control mb-2" id="ideaTitle" oninput="updateCharacterCount('ideaTitle', 30, 'countIdeaTitle30')">
                                            <span class="text-danger">(Characters Remaining: <span id="countIdeaTitle30">30</span>)</span>
                                        </div>

                                        <div class="form-group col-lg-6 mb-5" id="innovationAreasGroup">
                                            <label class="mb-2" for="innovationAreas">2: Select Your Innovation Areas:</label>
                                            <select class="form-control mb-2" id="innovationAreas" name="innovationAreas">
                                                <option value="" disabled="" selected="">Select an option</option>
                                                <option value="Customer Delivery Service">CUSTOMER DELIVERY SERVICE</option>
                                                <option value="Quality and Safety">QUALITY AND SAFETY</option>
                                                <option value="Road Construction Materials">ROAD CONSTRUCTION MATERIALS</option>
                                                <option value="Road Construction Technologies">ROAD CONSTRUCTION TECHNOLOGIES</option>
                                                <option value="Climate Resilience">CLIMATE RESILIENCE</option>
                                                <option value="Value for Money">VALUE FOR MONEY</option>
                                                <option value="Revenue Generation">REVENUE GENERATION</option>
                                                <option value="Other">OTHER</option>
                                            </select>
                                            <span class="text-danger">Choose an Area Where Idea is Applicable</span>
                                        </div>

                                    </div>

                                    <div class="row row-2">
                                        
                                        <div class="form-group col-lg-6 mb-5" id="ideaDescriptionGroup">
                                            <label class="mb-2" for="ideaDescription">3. Briefly Describe Your Idea:</label>
                                            <textarea class="form-control mb-2" id="ideaDescription" rows="4" oninput="updateCharacterCount('ideaDescription', 200, 'countIdeaDescription200')"></textarea>
                                            <span class="text-danger">(Characters Remaining: <span id="countIdeaDescription200">200</span>)</span>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 mb-5" id="ideaProblemStatementGroup">
                                            <label class="mb-2" for="ideaProblemStatement">4. Describe the Problem Statement for Your Idea:</label>
                                            <textarea class="form-control mb-2" id="ideaProblemStatement" rows="4" oninput="updateCharacterCount('ideaProblemStatement', 200, 'countIdeaProblemStatement200')"></textarea>
                                            <span class="text-danger">(Characters Remaining: <span id="countIdeaProblemStatement200">200</span>)</span>
                                        </div>

                                    </div>
                                    
                                    <div class="row row-3">
                                        
                                        <div class="form-group col-lg-6 mb-5" id="ideaProposedSolutionGroup">
                                            <label class="mb-2" for="ideaProposedSolution">5. Outline Your Proposed Solution:</label>
                                            <textarea class="form-control mb-2" id="ideaProposedSolution" rows="4" oninput="updateCharacterCount('ideaProposedSolution', 300, 'countIdeaProposedSolution300')"></textarea>
                                            <span class="text-danger">(Characters Remaining: <span id="countIdeaProposedSolution300">300</span>)</span>
                                        </div>
                                        
                                        <div class="form-group col-lg-6 mb-5" id="ideaBenefitAnalysisGroup">
                                            <label class="mb-2" for="ideaBenefitAnalysis">6. Provide Your Benefit Analysis:</label>
                                            <textarea class="form-control mb-2" id="ideaBenefitAnalysis" rows="4" oninput="updateCharacterCount('ideaBenefitAnalysis', 300, 'countIdeaBenefitAnalysis300')"></textarea>
                                            <span class="text-danger">(Characters Remaining: <span id="countIdeaBenefitAnalysis300">300</span>)</span>
                                        </div>

                                    </div>

                                    <div class="row row-4">

                                        <div class="form-group col-lg-6 mb-5" id="ideaProposalPDFGroup">
                                            <label class="mb-2" for="ideaProposalPDF">7. Upload Your Full Proposal (PDF only):</label>
                                            <input type="file" class="form-control mb-2" id="ideaProposalPDF" accept=".pdf" required>
                                            <small class="text-danger"><strong>(PDF Maximum Size is 20MB)</strong></small>
                                        </div>

                                        <div class="form-group col-lg-6 d-flex flex-column mb-5" id="ideaCheckGroup">
                                            <label class="mb-2" for="ideaCheck">8. Check to Affirm That This Idea is Entirely Your Own & Has Not Been Plagiarized:</label>
                                            <div>                                                    
                                                <input class="form-check-input" type="radio" name="ideaCheck" id="ideaCheck">
                                                <small class="">I certify that this idea is uniquely mine and has not been taken from others.</small>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="d-flex justify-content-between mb-1">
                                        <button type="button" class="btn btn-send d-flex flex-row align-items-center" style="gap: 10px; width: fit-content;">
                                            <lottie-player
                                                src="image-library-KeNHA/lottieflow-arrow-06-01-000000-easey.json" 
                                                background="transparent" 
                                                speed="1" 
                                                style="width: 30px; height: 30px;" 
                                                loop 
                                                autoplay>
                                            </lottie-player> Back to Section 2
                                        </button>
                                        <button type="Submit" class="btn btn-send d-flex flex-row align-items-center" style="gap: 10px; width: fit-content;">
                                            Submit 
                                            <lottie-player
                                                src="image-library-KeNHA/lottieflow-social-networks-15-9-000000-easey.json" 
                                                background="transparent" 
                                                speed="1" 
                                                style="width: 30px; height: 30px;" 
                                                loop 
                                                autoplay>
                                            </lottie-player>
                                        </button>
                                    </div>

                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
        
    <div class="contribute-idea-loader w-100 h-100 d-flex justify-content-center align-items-center">
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
    <script src="https://cdn.jsdelivr.net/npm/@lottiefiles/lottie-player@latest"></script>

    <!-- jQuery (required for your $(document).ready function) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- moment.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- Custom js -->
    <script src="user/registered/js/contribute-idea.js"></script>
    
</body>
</html>