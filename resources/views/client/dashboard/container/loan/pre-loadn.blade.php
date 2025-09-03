@extends('layouts.user')

@section('title', $title ?? 'Default Title')

@section('content')
    <div class="w-full min-h-screen flex flex-col gap-4 mt-10">
        <div class="w-full h-full flex flex-col items-center justify-center gap-4">
            <div x-data="{ step: 1 }" class="w-full">
                <div class="w-full flex flex-col pb-4 gap-4 border-b border-black dark:border-gray-700">
                    <div class="w-full flex flex-col gap-4">
                        <h1 class="text-2xl  text-black dark:text-white leading-tight tracking-tight font-medium">
                            STEPS FORM
                        </h1>
                        <div>
                            <h1 class="text-4xl text-[#000D51] dark:text-white leading-tight tracking-tight font-semibold">
                                PRE-LOAN APPLICATION</h1>
                        </div>
                        <div>
                            <p class=" text-lg text-black dark:text-white leading-normal font-medium">Whoever is
                                careless with the truth in small matters cannot be trusted with important matters. <span
                                    class="text-lg text-black dark:text-white leading-normal font-semibold">Albert
                                    Einstein</span>
                                Please, take a moment to analyze all the information needed and fill out the pre-loan
                                application
                                to the best of your knowledge. “Trust, but verify.” <span
                                    class="text-lg text-black dark:text-white leading-normal font-semibold">Ronald
                                    Reagan.</span>
                            </p>
                            <p class=" text-lg text-black dark:text-white leading-normal font-medium">Providing wrong
                                or incomplete information may result in a request for further evidence causing a delay in
                                the
                                decision-making process or a complete denial of funding.</p>
                        </div>
                        <div class="flex items-center gap-2">
                            <button type="button"
                                :class="step === 1 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 1">Step 1</button>
                            <button type="button"
                                :class="step === 2 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 2">Step 2</button>
                            <button type="button"
                                :class="step === 3 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 3">Step 3</button>
                            <button type="button"
                                :class="step === 4 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 4">Step 4</button>
                            <button type="button"
                                :class="step === 5 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 5">Step 5</button>
                            <button type="button"
                                :class="step === 6 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 6">Step 6</button>
                            <button type="button"
                                :class="step === 7 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 7">Step 7</button>
                            <button type="button"
                                :class="step === 8 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 8">Step 8</button>
                            <button type="button"
                                :class="step === 9 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 9">Step 9</button>
                            <button type="button"
                                :class="step === 10 ? 'bg-[#000D51] text-white' : 'bg-gray-200 text-black'"
                                class="px-4 py-2 rounded-lg font-semibold" @click="step = 10">Step 10</button>
                        </div>
                    </div>
                </div>
                <div class="w-full flex flex-col gap-4 pt-4">
                    <div class="w-fit bg-[#000D51] px-8 py-3">
                        <template x-if="step === 1">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                1. BROKER INFORMATION</h1>
                        </template>
                        <template x-if="step === 2">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                2. LOAN TYPE AND TERMS</h1>
                        </template>
                        <template x-if="step === 3">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                3. PROPERTY INFORMATION</h1>
                        </template>
                        <template x-if="step === 4">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                4. BORROWING ENTITY INFORMATION</h1>
                        </template>
                        <template x-if="step === 5">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                5. PERSON ELIGIBLE TO BIND ENTITY</h1>
                        </template>
                        <template x-if="step === 6">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                6. ASSETS</h1>
                        </template>
                        <template x-if="step === 7">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                7. LOAN SUMMARY OVERVIEW AND EXIT STRATEGY</h1>
                        </template>
                        <template x-if="step === 8">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                8. PERSONAL GUARANTOR INFORMATION</h1>
                        </template>
                        <template x-if="step === 9">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                9. DECLARATIONS BORROWER</h1>
                        </template>
                        <template x-if="step === 10">
                            <h1 class="text-3xl  text-white dark:text-white leading-tight tracking-tight font-semibold">
                                10. GUARANTOR SIGNATURE</h1>
                        </template>
                    </div>
                    <form action="{{ route('preloan.submit') }}" method="POST" class="col-span-2 flex flex-col gap-8">
                        @csrf
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        <!-- Step 1: Additional Information -->
                        <div x-show="step === 1" class="flex flex-col gap-8">
                            <div class="w-full flex items-center gap-4">
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="company_name"
                                        class="text-md font-normal leading-tight tracking-tight">Company
                                        Name:</label>
                                    <input id="company_name" name="company_name" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="broker_name" class="text-md font-normal leading-tight tracking-tight">Broker
                                        Name:</label>
                                    <input id="broker_name" name="broker_name" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                            </div>
                            <div class="w-full flex items-center gap-4">
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="broker_email"
                                        class="text-md font-normal leading-tight tracking-tight">Broker
                                        Email:</label>
                                    <input id="broker_email" name="broker_email" type="email"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="broker_phone"
                                        class="text-md font-normal leading-tight tracking-tight">Broker
                                        Phone:</label>
                                    <input id="broker_phone" name="broker_phone" type="number"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                            </div>
                            <div class="flex justify-end gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 2">Next</button>
                            </div>
                        </div>
                        <!-- Step 2: Additional Information -->
                        <div x-show="step === 2" class="flex flex-col gap-8">
                            <div class="w-full flex items-center gap-4">
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="purchase_price"
                                        class="text-md font-normal leading-tight tracking-tight">Purchase Price
                                        if you're purchasing:</label>
                                    <input id="purchase_price" name="purchase_price" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="desired_loan_amount"
                                        class="text-md font-normal leading-tight tracking-tight">Desired Loan
                                        Amount:</label>
                                    <input id="desired_loan_amount" name="desired_loan_amount" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="loan_purpose"
                                        class="text-md font-normal leading-tight tracking-tight">Purpose of the
                                        loan:</label>
                                    <input id="loan_purpose" name="loan_purpose" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <div class="flex flex-col gap-2">
                                    <label for="loan_term_type"
                                        class="text-md font-normal leading-tight tracking-tight">Desired
                                        Loan
                                        term:</label>
                                    <div class="flex flex-col gap-2">
                                        (Months)
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-1">
                                                <span>3</span>
                                                <input id="loan_term_3_months" name="loan_term" type="radio"
                                                    value="3_months" class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>6</span>
                                                <input id="loan_term_6_months" name="loan_term" type="radio"
                                                    value="6_months" class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>9</span>
                                                <input id="loan_term_9_months" name="loan_term" type="radio"
                                                    value="9_months" class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>12</span>
                                                <input id="loan_term_12_months" name="loan_term" type="radio"
                                                    value="12_months" class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>18</span>
                                                <input id="loan_term_18_months" name="loan_term" type="radio"
                                                    value="18_months" class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>36</span>
                                                <input id="loan_term_36_months" name="loan_term" type="radio"
                                                    value="36_months" class="rounded-full" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        ( Years )
                                        <div class="flex items-center gap-2">
                                            <select name="loan_term_years" id="loan_term_years"
                                                class="px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"
                                                onchange="handleYearsSelection(this)">
                                                <option value="">Select Years</option>
                                                <option value="1_year">1 Year</option>
                                                <option value="2_years">2 Years</option>
                                                <option value="3_years">3 Years</option>
                                                <option value="4_years">4 Years</option>
                                                <option value="5_years">5 Years</option>
                                                <option value="10_years">10 Years</option>
                                                <option value="15_years">15 Years</option>
                                                <option value="20_years">20 Years</option>
                                                <option value="25_years">25 Years</option>
                                                <option value="30_years">30 Years</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="flex flex-col gap-2">
                                        ( A.R.M )
                                        <div class="flex items-center gap-2">
                                            <select name="loan_term_arm" id="loan_term_arm"
                                                class="px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"
                                                onchange="handleArmSelection(this)">
                                                <option value="">Select A.R.M</option>
                                                <option value="3_1_arm">3/1 ARM</option>
                                                <option value="5_1_arm">5/1 ARM</option>
                                                <option value="7_1_arm">7/1 ARM</option>
                                                <option value="10_1_arm">10/1 ARM</option>
                                                <option value="3_6_arm">3/6 ARM</option>
                                                <option value="5_6_arm">5/6 ARM</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 1">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 3">Next</button>
                            </div>
                        </div>
                        <script>
                            // Handle single selection across all loan term options
                            function clearOtherSelections(exceptType) {
                                // Clear months radio buttons
                                if (exceptType !== 'months') {
                                    const monthsRadios = document.querySelectorAll('input[name="loan_term"]');
                                    monthsRadios.forEach(radio => radio.checked = false);
                                }

                                // Clear years dropdown
                                if (exceptType !== 'years') {
                                    document.getElementById('loan_term_years').value = '';
                                }

                                // Clear ARM dropdown
                                if (exceptType !== 'arm') {
                                    document.getElementById('loan_term_arm').value = '';
                                }
                            }

                            // Handle months selection
                            document.addEventListener('change', function(e) {
                                if (e.target.name === 'loan_term') {
                                    clearOtherSelections('months');
                                    console.log('Selected loan term (months):', e.target.value);
                                }
                            });

                            // Handle years dropdown selection
                            function handleYearsSelection(select) {
                                if (select.value) {
                                    clearOtherSelections('years');
                                    console.log('Selected loan term (years):', select.value);
                                }
                            }

                            // Handle ARM dropdown selection
                            function handleArmSelection(select) {
                                if (select.value) {
                                    clearOtherSelections('arm');
                                    console.log('Selected loan term (ARM):', select.value);
                                }
                            }

                            // Get final selected value for form submission
                            function getFinalLoanTermValue() {
                                // Check months
                                const selectedMonth = document.querySelector('input[name="loan_term"]:checked');
                                if (selectedMonth) {
                                    return {
                                        type: 'months',
                                        value: selectedMonth.value
                                    };
                                }

                                // Check years
                                const selectedYear = document.getElementById('loan_term_years').value;
                                if (selectedYear) {
                                    return {
                                        type: 'years',
                                        value: selectedYear
                                    };
                                }

                                // Check ARM
                                const selectedArm = document.getElementById('loan_term_arm').value;
                                if (selectedArm) {
                                    return {
                                        type: 'arm',
                                        value: selectedArm
                                    };
                                }

                                return null;
                            }
                        </script>
                        <!-- Step 3: Additional Information -->
                        <div x-show="step === 3" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div class="w-full">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="property_street_address"
                                            class="text-md font-normal leading-tight tracking-tight">Subject
                                            Property Street Address:</label>
                                        <input id="property_street_address" name="property_street_address" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="property_city"
                                            class="text-md font-normal leading-tight tracking-tight">City:</label>
                                        <input id="property_city" name="property_city" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="property_state"
                                            class="text-md font-normal leading-tight tracking-tight">State:</label>
                                        <input id="property_state" name="property_state" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="property_zip"
                                            class="text-md font-normal leading-tight tracking-tight">Zip:</label>
                                        <input id="property_zip" name="property_zip" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <p class="text-md font-normal leading-tight tracking-tight">Does the property generate
                                        income?</p>
                                    <div class="flex items-center gap-1.5">
                                        <label for="property_generates_income_yes"
                                            class="text-md font-normal leading-tight tracking-tight">Yes</label>
                                        <input id="property_generates_income_yes" name="property_generates_income"
                                            value="1" type="radio" class="rounded-full" />
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <label for="property_generates_income_no"
                                            class="text-md font-normal leading-tight tracking-tight">No</label>
                                        <input id="property_generates_income_no" name="property_generates_income"
                                            value="0" type="radio" class="rounded-full" />
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <label for="property_generates_income_will"
                                            class="text-md font-normal leading-tight tracking-tight">It will</label>
                                        <input id="property_generates_income_will" name="property_generates_income"
                                            value="2" type="radio" class="rounded-full" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="gross_monthly_rent"
                                            class="text-md font-normal leading-tight tracking-tight">Actual or
                                            expected Gross Monthly Rent:
                                        </label>
                                        <input id="gross_monthly_rent" name="gross_monthly_rent" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="expected_gross_monthly_rent"
                                            class="text-md font-normal leading-tight tracking-tight">Actual or
                                            expected Gross Monthly Rent:
                                        </label>
                                        <input id="expected_gross_monthly_rent" name="expected_gross_monthly_rent"
                                            type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="number_of_units"
                                            class="text-md font-normal leading-tight tracking-tight">Number of
                                            Units
                                        </label>
                                        <input id="number_of_units" name="number_of_units" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="yearly_property_taxes"
                                            class="text-md font-normal leading-tight tracking-tight">Yearly
                                            property taxes (estimate):
                                        </label>
                                        <input id="yearly_property_taxes" name="yearly_property_taxes" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="yearly_hoa_dues"
                                            class="text-md font-normal leading-tight tracking-tight">Yearly HOA
                                            Dues:
                                        </label>
                                        <input id="yearly_hoa_dues" name="yearly_hoa_dues" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="anticipated_rehab_cost"
                                            class="text-md font-normal leading-tight tracking-tight">Cost of
                                            Anticipated Rehab:
                                        </label>
                                        <input id="anticipated_rehab_cost" name="anticipated_rehab_cost" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="after_repair_value"
                                            class="text-md font-normal leading-tight tracking-tight">Estimated
                                            After Repair Value:
                                        </label>
                                        <input id="after_repair_value" name="after_repair_value" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="original_cost"
                                            class="text-md font-normal leading-tight tracking-tight">Original
                                            Cost (If refinance)
                                        </label>
                                        <input id="original_cost" name="original_cost" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="as_is_value"
                                            class="text-md font-normal leading-tight tracking-tight">Estimated
                                            "AS IS" Value:
                                        </label>
                                        <input id="as_is_value" name="as_is_value" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 2">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 4">Next</button>
                            </div>
                        </div>
                        <!-- Step 4: Additional Information -->
                        <div x-show="step === 4" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div class="w-full">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="entity_name"
                                            class="text-md font-normal leading-tight tracking-tight">Entity
                                            Name:</label>
                                        <input id="entity_name" name="entity_name" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="federal_ein"
                                            class="text-md font-normal leading-tight tracking-tight">Federal
                                            EIN:</label>
                                        <input id="federal_ein" name="federal_ein" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="state_registered"
                                            class="text-md font-normal leading-tight tracking-tight">State
                                            Registered:
                                        </label>
                                        <input id="state_registered" name="state_registered" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 3">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 5">Next</button>
                            </div>
                        </div>
                        <!-- Step 5: Additional Information -->
                        <div x-show="step === 5" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bind_entity_name_1"
                                            class="text-md font-normal leading-tight tracking-tight">Name:</label>
                                        <input id="bind_entity_name_1" name="bind_entity_name_1" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bind_entity_percent_1"
                                            class="text-md font-normal leading-tight tracking-tight">Percent %
                                            owned
                                        </label>
                                        <input id="bind_entity_percent_1" name="bind_entity_percent_1" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bind_entity_name_2"
                                            class="text-md font-normal leading-tight tracking-tight">Name:</label>
                                        <input id="bind_entity_name_2" name="bind_entity_name_2" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bind_entity_percent_2"
                                            class="text-md font-normal leading-tight tracking-tight">Percent %
                                            owned
                                        </label>
                                        <input id="bind_entity_percent_2" name="bind_entity_percent_2" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bind_entity_name_3"
                                            class="text-md font-normal leading-tight tracking-tight">Name:</label>
                                        <input id="bind_entity_name_3" name="bind_entity_name_3" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bind_entity_percent_3"
                                            class="text-md font-normal leading-tight tracking-tight">Percent %
                                            owned
                                        </label>
                                        <input id="bind_entity_percent_3" name="bind_entity_percent_3" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 4">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 6">Next</button>
                            </div>
                        </div>
                        <!-- Step 6: Additional Information -->
                        <div x-show="step === 6" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="available_cash_to_close"
                                            class="text-md font-normal leading-tight tracking-tight">Tot.
                                            Available cash to close: (Available liquid cash)</label>
                                        <input id="available_cash_to_close" name="available_cash_to_close" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_1_name"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 1
                                            Name:</label>
                                        <input id="bank_1_name" name="bank_1_name" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_1_acc"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="bank_1_acc" name="bank_1_acc" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_1_amount"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="bank_1_amount" name="bank_1_amount" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_1_other_assets"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="bank_1_other_assets" name="bank_1_other_assets" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_1_value"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="bank_1_value" name="bank_1_value" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_2_name"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 2
                                            Name:</label>
                                        <input id="bank_2_name" name="bank_2_name" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_2_acc"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="bank_2_acc" name="bank_2_acc" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_2_amount"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="bank_2_amount" name="bank_2_amount" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_2_other_assets"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="bank_2_other_assets" name="bank_2_other_assets" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_2_value"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="bank_2_value" name="bank_2_value" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_3_name"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 3
                                            Name:</label>
                                        <input id="bank_3_name" name="bank_3_name" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_3_acc"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="bank_3_acc" name="bank_3_acc" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_3_amount"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="bank_3_amount" name="bank_3_amount" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_3_other_assets"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="bank_3_other_assets" name="bank_3_other_assets" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_3_value"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="bank_3_value" name="bank_3_value" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_4_name"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 4
                                            Name:</label>
                                        <input id="bank_4_name" name="bank_4_name" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_4_acc"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="bank_4_acc" name="bank_4_acc" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_4_amount"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="bank_4_amount" name="bank_4_amount" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_4_other_assets"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="bank_4_other_assets" name="bank_4_other_assets" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="bank_4_value"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="bank_4_value" name="bank_4_value" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 5">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 7">Next</button>
                            </div>
                        </div>
                        <!-- Step 7: Additional Information -->
                        <div x-show="step === 7" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="find_property"
                                            class="text-md font-normal leading-tight tracking-tight">How did you
                                            find this property?</label>
                                        <textarea id="find_property" name="find_property" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="payoff_strategy"
                                            class="text-md font-normal leading-tight tracking-tight">How do you
                                            intend to pay off this loan?
                                        </label>
                                        <textarea id="payoff_strategy" name="payoff_strategy" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex items-center gap-1.5">
                                        <label for="rehab_time"
                                            class="text-md text-nowrap font-normal leading-tight tracking-tight">How long
                                            will it take you to rehab (if rehab loan)? (in months)
                                        </label>
                                        <input id="rehab_time" name="rehab_time" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20">
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="funds_usage"
                                            class="text-md font-normal leading-tight tracking-tight">How will you
                                            use the funds provided by this loan?
                                        </label>
                                        <textarea id="funds_usage" name="funds_usage" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex items-center gap-1.5">
                                        <label for="fix_flip_profit"
                                            class="text-md text-nowrap font-normal leading-tight tracking-tight">Fix&Flip:
                                            How much
                                            will you profit?
                                        </label>
                                        <input id="fix_flip_profit" name="fix_flip_profit" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20">
                                    </div>
                                    <div class="w-full flex items-center gap-1.5">
                                        <label for="hold_rent_income"
                                            class="text-md text-nowrap font-normal leading-tight tracking-tight">Hold &
                                            Rent: Expected
                                            monthly net income
                                        </label>
                                        <input id="hold_rent_income" name="hold_rent_income" type="text"
                                            rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20">
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="experience_description"
                                            class="text-md font-normal leading-tight tracking-tight">Do you have
                                            any Fix & Flip, rehabbing or renting experience? If yes, please describe
                                        </label>
                                        <textarea id="experience_description" name="experience_description" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 6">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 8">Next</button>
                            </div>
                        </div>
                        <!-- Step 8: Additional Information -->
                        <div x-show="step === 8" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <h2 class="font-semibold text-lg mt-6">GUARANTOR FULL NAME (INCLUDE JR. OR SIR. AS
                                    APPLICABLE):
                                </h2>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_full_name" class="text-md font-normal">Full Name:</label>
                                        <input type="text" name="guarantor_full_name" id="guarantor_full_name"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_ssn" class="text-md font-normal">SSN (Last 4
                                            Digits):</label>
                                        <input type="text" name="guarantor_ssn" id="guarantor_ssn"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_dob" class="text-md font-normal">DOB:</label>
                                        <input type="text" name="guarantor_dob" id="guarantor_dob"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_cell_phone" class="text-md font-normal">Cell Phone:</label>
                                        <input type="text" name="guarantor_cell_phone" id="guarantor_cell_phone"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_home_phone" class="text-md font-normal">Home Phone:</label>
                                        <input type="text" name="guarantor_home_phone" id="guarantor_home_phone"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_email" class="text-md font-normal">Email Address:</label>
                                        <input type="email" name="guarantor_email" id="guarantor_email"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_street_address" class="text-md font-normal">Street
                                            Address:</label>
                                        <input type="text" name="guarantor_street_address"
                                            id="guarantor_street_address"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_city" class="text-md font-normal">City:</label>
                                        <input type="text" name="guarantor_city" id="guarantor_city"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_state" class="text-md font-normal">State:</label>
                                        <input type="text" name="guarantor_state" id="guarantor_state"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="guarantor_zip" class="text-md font-normal">Zip:</label>
                                        <input type="text" name="guarantor_zip" id="guarantor_zip"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <h2 class="font-semibold text-lg mt-6">EMPLOYER INFORMATION:</h2>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="employer_1">Employer #1:</label>
                                        <input type="text" name="employer_1" id="employer_1"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="position_1">Position:</label>
                                        <input type="text" name="position_1" id="position_1"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="years_with_company_1">Years With Company:</label>
                                        <input type="number" name="years_with_company_1" id="years_with_company_1"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="employer_2">Employer #2:</label>
                                        <input type="text" name="employer_2" id="employer_2"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="position_2">Position:</label>
                                        <input type="text" name="position_2" id="position_2"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="years_with_company_2">Years With Company:</label>
                                        <input type="number" name="years_with_company_2" id="years_with_company_2"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="total_monthly_income">Total Monthly Income:</label>
                                    <input type="text" name="total_monthly_income" id="total_monthly_income"
                                        class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="estimated_credit_score">Estimated Credit Score:</label>
                                        <input type="text" name="estimated_credit_score" id="estimated_credit_score"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="completed_flips">How Many Completed Flips In Previous 24
                                            Months:</label>
                                        <input type="text" name="completed_flips" id="completed_flips"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 7">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 9">Next</button>
                            </div>
                        </div>
                        <!-- Step 9: Additional Information -->
                        <div x-show="step === 9" class="flex flex-col gap-8">
                            <div class="w-full">
                                <div class="space-y-6 rounded-b-2xl">
                                    @php
                                        $questions = [
                                            'Are There Any Outstanding Judgements Against You?',
                                            'Have You, Or Any Officer Of Your Company, Or Any Guarantor Been Involved In Bankruptcy?',
                                            'Are You Personally Or Is Your Business Involved In Any Lawsuits Or Pending Litigation?',
                                            'Have You Directly Or Indirectly Been Obligated On Any Loan Of Which Resulted In Foreclosure, Transfer Of Title In Lieu Of Foreclosure, Or Judgment?',
                                            'Are You, Or Your Business, Presently Delinquent Or In Default On Any Federal Debt Or Any Other Loan, Mortgage, Financial Obligation, Bond, Or Loan Guarantee?',
                                            'Are You Obligated To Pay Any Alimony Or Child Support?',
                                            'Are You A Guarantor, Co-Maker, Or Endorser For Any Debt Of An Individual, Corporation, Or Partnership?',
                                            'Is Any Of Your Stated Income Likely To Be Reduced Or Interrupted Within The Next Year?',
                                            'Do You Have Any Outstanding Letters Of Credit Or Surety Bonds?',
                                            'Are Any Of Your Personal Or Business Tax Obligations Past Due?',
                                            'Other Contingent Liabilities (Describe):',
                                            'Are You A U.S. Citizen?',
                                            'Are You A Permanent Resident Alien?',
                                        ];
                                    @endphp

                                    @foreach ($questions as $index => $question)
                                        <div class="flex flex-col sm:flex-row sm:items-center justify-between">
                                            <p class="text-black dark:text-white font-medium">{{ $question }}</p>
                                            <div class="flex items-center gap-4 mt-2 sm:mt-0">
                                                <label for="question_{{ $index }}" class="flex items-center gap-1">
                                                    <input type="radio" name="question_{{ $index }}"
                                                        value="yes" class="text-blue-600">
                                                    Yes
                                                </label>
                                                <label for="question_{{ $index }}" class="flex items-center gap-1">
                                                    <input type="radio" name="question_{{ $index }}"
                                                        value="no" class="text-blue-600" checked>
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <p class="mt-6 text-md text-black dark:text-white leading-relaxed">
                                    Each of the undersigned hereby authorize Lender and Lender's actual or potential
                                    lenders,
                                    agents, brokers, processors,
                                    attorneys, insurers, servicers, successors and assigns (collectively "Lender") to make
                                    all
                                    inquiries it deems necessary
                                    to verify the accuracy of the information provided herein, and to determine my/our
                                    credit
                                    worthiness. This includes
                                    my/our and my company's past and present employment, earnings records, bank accounts,
                                    stock
                                    holdings, insurance
                                    information and any other asset balances needed to process this private funding
                                    application.
                                    I/we also hereby authorize
                                    the release of any information necessary for any purpose related to our credit
                                    transaction with
                                    Lender, including but
                                    not limited to a background check and an Office of Foreign Assets Control (OFAC)
                                    inquiry. The
                                    information obtained is
                                    only to be used in the processing of my private funding application. This authorization
                                    expires
                                    after 120 days from the
                                    date indicated below. I/we further authorize Lender to order a private funding credit
                                    report and
                                    verify all other credit
                                    information, including past and present mortgage and landlord references. It is
                                    understood that
                                    the photocopy of this
                                    document shall also serve as authorization to provide the information requested an
                                    electronic
                                    signature will serve as a
                                    legal signature. Privacy Act Notice: This information is to be used for the company and
                                    its
                                    affiliates collecting it or
                                    their assignees in determining whether you qualify for a prospective private funding
                                    loan under
                                    the company's program.
                                    Additionally, this information may be used to determine fees, pricing, and other
                                    compensating
                                    factors associated with
                                    your private money funding. It will not be disclosed outside the company and its
                                    affiliates
                                    except as required and
                                    permitted by law. You do not have to provide this information, but if you do not your
                                    application for approval as a
                                    prospective private funding borrower may be delayed or rejected.
                                </p>
                                <div class="w-full mt-6 flex flex-col items-center justify-between gap-4">
                                    <div class="flex flex-col w-full">
                                        <label for="authorization_signature"
                                            class="text-black dark:text-white text-sm">Signature</label>
                                        <div class="border rounded-lg overflow-hidden">
                                            <canvas id="signature-pad_9" width="1920" height="128"
                                                class="w-full h-32 bg-white dark:bg-black block touch-none"></canvas>
                                        </div>
                                        <div class="flex gap-2 mt-2">
                                            <button type="button" id="clear-signature_9"
                                                class="px-4 py-1 text-sm bg-red-600 text-white rounded-lg">Clear</button>
                                        </div>
                                        <!-- hidden input to store base64 signature -->
                                        <input type="hidden" name="authorization_signature" id="signature-input_9">
                                    </div>
                                    <script>
                                        (function() {
                                            const canvas = document.getElementById('signature-pad_9');
                                            const clearBtn = document.getElementById('clear-signature_9');
                                            const signatureInput = document.getElementById('signature-input_9');

                                            if (!canvas || !clearBtn || !signatureInput) return;

                                            const ctx = canvas.getContext('2d');

                                            // Set canvas actual size for better resolution
                                            function resizeCanvas() {
                                                const rect = canvas.getBoundingClientRect();
                                                const devicePixelRatio = window.devicePixelRatio || 1;

                                                canvas.width = rect.width * devicePixelRatio;
                                                canvas.height = rect.height * devicePixelRatio;

                                                ctx.scale(devicePixelRatio, devicePixelRatio);
                                                canvas.style.width = rect.width + 'px';
                                                canvas.style.height = rect.height + 'px';

                                                setStrokeStyle();
                                            }

                                            function setStrokeStyle() {
                                                ctx.strokeStyle = document.documentElement.classList.contains('dark') ? 'white' : '#000D51';
                                                ctx.lineWidth = 2;
                                                ctx.lineCap = 'round';
                                                ctx.lineJoin = 'round';
                                            }

                                            resizeCanvas();
                                            canvas.style.cursor = 'crosshair';

                                            let isDrawing = false;

                                            function getPointerPosition(e) {
                                                const rect = canvas.getBoundingClientRect();
                                                const clientX = e.touches ? e.touches[0].clientX : e.clientX;
                                                const clientY = e.touches ? e.touches[0].clientY : e.clientY;

                                                return {
                                                    x: clientX - rect.left,
                                                    y: clientY - rect.top
                                                };
                                            }

                                            function startDrawing(e) {
                                                e.preventDefault();
                                                isDrawing = true;
                                                setStrokeStyle();
                                                const pos = getPointerPosition(e);
                                                ctx.beginPath();
                                                ctx.moveTo(pos.x, pos.y);
                                            }

                                            function draw(e) {
                                                e.preventDefault();
                                                if (!isDrawing) return;

                                                const pos = getPointerPosition(e);
                                                ctx.lineTo(pos.x, pos.y);
                                                ctx.stroke();
                                                ctx.beginPath();
                                                ctx.moveTo(pos.x, pos.y);
                                            }

                                            function stopDrawing(e) {
                                                e.preventDefault();
                                                if (!isDrawing) return;
                                                isDrawing = false;
                                                signatureInput.value = canvas.toDataURL('image/png');
                                            }

                                            // Mouse events
                                            canvas.addEventListener('mousedown', startDrawing);
                                            canvas.addEventListener('mousemove', draw);
                                            canvas.addEventListener('mouseup', stopDrawing);
                                            canvas.addEventListener('mouseleave', stopDrawing);

                                            // Touch support for mobile
                                            canvas.addEventListener('touchstart', startDrawing, {
                                                passive: false
                                            });
                                            canvas.addEventListener('touchmove', draw, {
                                                passive: false
                                            });
                                            canvas.addEventListener('touchend', stopDrawing, {
                                                passive: false
                                            });

                                            clearBtn.addEventListener('click', () => {
                                                ctx.clearRect(0, 0, canvas.width, canvas.height);
                                                signatureInput.value = '';
                                            });

                                            // Update stroke color on theme change
                                            const observer = new MutationObserver(setStrokeStyle);
                                            observer.observe(document.documentElement, {
                                                attributes: true,
                                                attributeFilter: ['class']
                                            });
                                        })();
                                    </script>
                                    <div class="flex flex-col w-full">
                                        <label for="pull_credit_report_signature"
                                            class="text-black dark:text-white text-sm">Please Pull This Credit Report To
                                            Help Determine Pricing</label>
                                        <input type="checkbox" name="pull_credit_report_signature"
                                            id="pull_credit_report_signature"
                                            class="mt-1 py-5 px-10 border bg-white dark:bg-black dark:border-gray-700 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between gap-2">
                                <button type="button" class="px-6 py-2 rounded-lg bg-gray-300 text-black font-semibold"
                                    @click="step = 8">Previous</button>
                                <button type="button" class="px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold"
                                    @click="step = 10">Next</button>
                            </div>
                        </div>
                        <!-- Step 10: Additional Information -->
                        <div x-show="step === 10" class="flex flex-col gap-8">
                            <div class="flex flex-col gap-3">
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    Each of the undersigned parties specifically represents to the Lender, and to each of
                                    its actual
                                    and potential agents,
                                    brokers, processors, attorneys, insurers, servicers, successors, and assigns, and agrees
                                    and
                                    acknowledges that:
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    The information provided in this application is true and correct as of the date set
                                    forth
                                    opposite the signature, and
                                    any intentional or negligent misrepresentation of this information contained in this
                                    application
                                    may result in civil
                                    liability to any person who may suffer any loss due to reliance upon any
                                    misrepresentation that
                                    I have made in this
                                    application and/or criminal penalties.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    The loan requested pursuant to this application (the "Loan") will be secured by a
                                    mortgage or
                                    deed of trust on the
                                    property described in this application.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    The property will not be used for any illegal or prohibited purpose or use.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    The property will be non-owner occupied.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    Lender and its successors and assigns may retain the original and/or electronic record
                                    of this
                                    application, whether or
                                    not the loan is approved and/or funded.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    Lender and each of Lender's actual or potential successors, assigns, servicers, brokers,
                                    agents,
                                    insurers, and representatives may continuously rely on the information contained in this
                                    application, and I am obligated to amend and/or supplement the information provided in
                                    this
                                    application if any of the information changes.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    Any of the successors or assigns of the aforementioned parties, in addition to any other
                                    rights
                                    and remedies that they may have related to such delinquency, may report my name and
                                    account
                                    information to one or more of the consumer credit reporting agencies.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    Neither Lender nor any of its agents, brokers, insurers, servicers, successors, or
                                    assigns has
                                    made any representation or warranty, express or implied, to me regarding the property or
                                    the
                                    condition or value of the property.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    My transmission of this application as an "electronic record" containing my "electronic
                                    signature," as those terms are defined in applicable federal and/or state laws, or my
                                    facsimile
                                    transmission of this application containing a facsimile of my signature, shall be
                                    effective,
                                    enforceable, and valid as if a paper version of this application were delivered
                                    containing my
                                    original written signature.
                                </p>
                                <p class="text-md text-black dark:text-white leading-relaxed font-normal">
                                    Each of the undersigned parties hereby acknowledge and agree that Lender, any owner of
                                    the Loan,
                                    each of their servicers, successors, and
                                    assigns may verify or re-verify any information contained in this application or obtain
                                    any
                                    information or data relating to the Loan, for
                                    legitimate business purpose through any source including a source named in this
                                    application or
                                    any credit reporting agency.
                                </p>
                            </div>
                            <div class="flex w-full flex-col gap-4">
                                <div>
                                    <label class="text-black dark:text-white text-sm">Guarantor Signature</label>
                                    <div class="border rounded-lg overflow-hidden">
                                        <canvas id="signature-pad" width="1920" height="128"
                                            class="w-full h-32 bg-white dark:bg-black block touch-none"></canvas>
                                    </div>
                                    <div class="flex gap-2 mt-2">
                                        <button type="button" id="clear-signature"
                                            class="px-4 py-1 text-sm bg-red-600 text-white rounded-lg">Clear</button>
                                    </div>
                                    <input type="hidden" name="guarantor_signature" id="signature-input">
                                </div>
                                <div>
                                    <label for="guarantor_signature_date"
                                        class="text-black dark:text-white text-sm">Date</label>
                                    <input type="date" name="guarantor_signature_date" id="guarantor_signature_date"
                                        class="mt-1 p-2 border rounded-lg dark:bg-black dark:border-gray-700 focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                            </div>
                            <script>
                                (function() {
                                    const canvas = document.getElementById('signature-pad');
                                    const clearBtn = document.getElementById('clear-signature');
                                    const signatureInput = document.getElementById('signature-input');

                                    if (!canvas || !clearBtn || !signatureInput) return;

                                    const ctx = canvas.getContext('2d');

                                    // Set canvas actual size for better resolution
                                    function resizeCanvas() {
                                        const rect = canvas.getBoundingClientRect();
                                        const devicePixelRatio = window.devicePixelRatio || 1;

                                        canvas.width = rect.width * devicePixelRatio;
                                        canvas.height = rect.height * devicePixelRatio;

                                        ctx.scale(devicePixelRatio, devicePixelRatio);
                                        canvas.style.width = rect.width + 'px';
                                        canvas.style.height = rect.height + 'px';

                                        setStrokeStyle();
                                    }

                                    function setStrokeStyle() {
                                        ctx.strokeStyle = document.documentElement.classList.contains('dark') ? 'white' : '#000D51';
                                        ctx.lineWidth = 2;
                                        ctx.lineCap = 'round';
                                        ctx.lineJoin = 'round';
                                    }

                                    resizeCanvas();
                                    canvas.style.cursor = 'crosshair';

                                    let isDrawing = false;

                                    function getPointerPosition(e) {
                                        const rect = canvas.getBoundingClientRect();
                                        const clientX = e.touches ? e.touches[0].clientX : e.clientX;
                                        const clientY = e.touches ? e.touches[0].clientY : e.clientY;

                                        return {
                                            x: clientX - rect.left,
                                            y: clientY - rect.top
                                        };
                                    }

                                    function startDrawing(e) {
                                        e.preventDefault();
                                        isDrawing = true;
                                        setStrokeStyle();
                                        const pos = getPointerPosition(e);
                                        ctx.beginPath();
                                        ctx.moveTo(pos.x, pos.y);
                                    }

                                    function draw(e) {
                                        e.preventDefault();
                                        if (!isDrawing) return;

                                        const pos = getPointerPosition(e);
                                        ctx.lineTo(pos.x, pos.y);
                                        ctx.stroke();
                                        ctx.beginPath();
                                        ctx.moveTo(pos.x, pos.y);
                                    }

                                    function stopDrawing(e) {
                                        e.preventDefault();
                                        if (!isDrawing) return;
                                        isDrawing = false;
                                        signatureInput.value = canvas.toDataURL('image/png');
                                    }

                                    // Mouse events
                                    canvas.addEventListener('mousedown', startDrawing);
                                    canvas.addEventListener('mousemove', draw);
                                    canvas.addEventListener('mouseup', stopDrawing);
                                    canvas.addEventListener('mouseleave', stopDrawing);

                                    // Touch support for mobile
                                    canvas.addEventListener('touchstart', startDrawing, {
                                        passive: false
                                    });
                                    canvas.addEventListener('touchmove', draw, {
                                        passive: false
                                    });
                                    canvas.addEventListener('touchend', stopDrawing, {
                                        passive: false
                                    });

                                    clearBtn.addEventListener('click', () => {
                                        ctx.clearRect(0, 0, canvas.width, canvas.height);
                                        signatureInput.value = '';
                                    });

                                    // Update stroke color on theme change
                                    const observer = new MutationObserver(setStrokeStyle);
                                    observer.observe(document.documentElement, {
                                        attributes: true,
                                        attributeFilter: ['class']
                                    });
                                })();
                            </script>
                            <div class=" text-black dark:text-white text-sm">
                                If there are more guarantors, please complete the " guarantor add-on form" for each
                                guarantor.
                            </div>
                            <button type="submit"
                                class="w-fit px-6 py-2 rounded-lg bg-[#000D51] text-white font-semibold">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
