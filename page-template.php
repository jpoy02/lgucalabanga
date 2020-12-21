<?php
$currentPage = 'under-construction';
include($_SERVER['DOCUMENT_ROOT'] . "/includes/components/header.php");



?>

<div class="container">
    <div class="main form-application">

        <div class="row">
            <div class="col-md-9">
                <h1>Application for Locational Clearance / Certificate of Zoning Compliance</h1>
                <hr>
                <p class="mb-4">Fill up the required fields to continue</p>

                <form action="fpdfSingle.php" target="_blank" method="POST">

                    <div class="form-group">
                        <label for="input">1. NAME OF APPLICANT</label>
                        <div class="row">
                            <div class="col-md-4 mb-2">
                                <input type="text" class="form-control" id="input" placeholder="Last" name="lastName" required>
                                <!-- <div class="invalid-feedback">Please fill out this field.</div> -->
                                <div class="invalid-tooltip">
                                    Please choose a unique and valid username.
                                </div>
                            </div>
                            <div class="col-md-4 mb-2">
                                <input type="text" class="form-control" id="input" placeholder="First " name="firstName">
                            </div>
                            <div class="col-md-4 mb-2">
                                <input type="text" class="form-control" id="input" placeholder="Middle" name="middleName">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="input">2. ADDRESS OF APPLICANT</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="applicantAddress">
                    </div>

                    <div class="form-group">
                        <label for="input">3. NAME OF CORPORATION</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="corporationName">
                    </div>

                    <div class="form-group">
                        <label for="input">4. ADDRESS OF CORPORATION</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="corporationAddress">
                    </div>

                    <div class="form-group">
                        <label for="input">5. NAME OF AUTHORIZED REPRESENTATIVE</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="authRepName">
                    </div>

                    <div class="form-group">
                        <label for="input">6. ADDRESS OF AUTHORIZED REPRESENTATIVE</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="authRepAddress">
                    </div>

                    <div class="form-group">
                        <label for="input">7. PROJECT TPYE</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="projectType">
                    </div>

                    <div class="form-group">
                        <label for="input">8. PROJECT NATURE</label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="projectNature">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">9. PROJECT LOCATION</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" name="projectLocation" placeholder="-"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="input">10. PROJECT AREA - LOT, FLOOR/BLDG AREA (in sqm.)</label>
                                <input type="number" class="form-control mb-2" id="input" placeholder="Lot Area" name="lotArea">
                                <input type="number" class="form-control" id="input" placeholder="Floor/Bldg Area" name="floorBldgArea">
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="mb-3">11. RIGHT OVER LAND</label>
                                <select class="custom-select rol-select mb-2" name="rightOverLand">
                                    <option selected value="Landowner">Landowner </option>
                                    <option value="Lessee">Lessee </option>
                                    <option value="Others">Others (Specify) </option>
                                </select>
                                <input type="text" class="form-control form-control rol-specify" id="input" placeholder="(Specify)" name="rightOverLandSpec">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <label class="mb-3">12. PROJECT TENURE</label>
                            <div class="form-group">
                                <select class="custom-select mb-2 proj-tenure-select" name="projectTenure">

                                    <option selected value="Permanent">Permanent </option>
                                    <option value="Temporary">Temporary (Specify) </option>
                                </select>
                                <input type="text" class="form-control form-control proj-tenure-specify" id="input" placeholder="(Specify)" name="projectTenureSpec">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="mb-3">13. EXISTING LAND USES OF PROJECT SITE</label>
                        <select class="custom-select mb-2 existing-land-select" size="1" name="existingLandUses">
                            <option selected value="Residential">Residential </option>
                            <option value="institutional">Institutional </option>
                            <option value="Industrial">Industrial </option>
                            <option value="Commercial">Commercial </option>
                            <option value="Vacant/Idle">Vacant/Idle </option>
                            <option value="Tenanted">Tenanted </option>
                            <option value="Non-Tenanted">Non-Tenanted </option>
                            <option value="Agricultural">Agricultural (Specify) </option>
                            <option value="Others">Others (Specify) </option>
                        </select>
                        <input type="text" class="form-control form-control existing-land-specify" id="input" placeholder="(Specify)" name="existingLandUsesSpec">
                    </div>

                    <div class="form-group">
                        <label for="input">14. PROJECT COST/CAPITALIZATION (in pesos, write in words and figures) </label>
                        <input type="text" class="form-control" id="input" placeholder="-" name="projectCost">
                    </div>

                    <div class="form-group">
                        <label for="">15. IF THE PROJECT APPLIED FOR IS THE SUBJECT OF WRITTEN NOTICES FROM THIS OFFICE/BOARD AND/OR DEPUTIZED ZONING ADMINISTRATOR TO THE EFFECT OF REQUIRING FOR PRESENTATION OF LOCATIONAL CLEARANCE/CERTIFICATE OF ZONING COMPLIANCE (LC/CZC) OR TO APPLY FOR LOCATIONAL CLEARANCE</label>
                        <div class="pl-3 mt-3">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="radio15" id="" value="Yes">
                                <div class="secondary-label">Yes</div>
                            </div>
                            <div class="form-check form-check-inline pl-3">
                                <input class="form-check-input" type="radio" name="radio15" id="" value="No" checked>
                                <div class="secondary-label">No</div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="">If yes, answer the following:</label>
                        <div class="mb-1">a. Name of Deputized Zoning Administrator</div>
                        <input type="text" class="form-control mb-1 notice" id="" placeholder="-" value="" name="nameDeputizedZoningAdmin" disabled>
                        <div class="mb-1">b. Date of Notice(s)</div>
                        <input type="text" class="form-control mb-1 notice" id="" placeholder="-" value="" name="dateOfNotice" disabled>
                        <div class="mb-1">c. Order(s) Request indicated in the notice(s)</div>
                        <input type="text" class="form-control mb-1 notice" id="" placeholder="-" value="" name="ordersRequest" disabled>
                    </div>

                    <div class="form-group">
                        <label class="mb-3">16. PREFERRED MODE OF RELEASE DECISION</label>
                        <select class="custom-select mb-2" size="1" name="prefModeRelease">
                            <option value="Pick-Up" selected>Pick-up</option>
                            <option value="By-Mail">By mail to applicant or authorized representative </option>
                        </select>
                    </div>
                    <hr>
                    <div class="note"><span>*</span> Kindly fill the required fields</div>

                    <div class="submit-container">
                        <button class="cancel-btn">Cancel</button>
                        <input class="submit-btn" type="submit">
                    </div>
                </form>

            </div>
            <div class="col-md-3">
                <div class="logo-container">
                    <img src="/img/serbisyo.png" alt="" class="img-serbisyo">
                </div>


            </div>
        </div>


    </div>

</div>

<script src="/js/form.js"></script>

<?php
include($_SERVER['DOCUMENT_ROOT'] . "/includes/components/footer.php");
?>