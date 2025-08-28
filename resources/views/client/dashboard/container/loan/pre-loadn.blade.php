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
                    <form class="col-span-2 flex flex-col gap-8">
                        <!-- Step 1: Additional Information -->
                        <div x-show="step === 1" class="flex flex-col gap-8">
                            <div class="w-full flex items-center gap-4">
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="componyName"
                                        class="text-md font-normal leading-tight tracking-tight">Company
                                        Name:</label>
                                    <input id="componyName" name="componyName" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="brokerName" class="text-md font-normal leading-tight tracking-tight">Broker
                                        Name:</label>
                                    <input id="brokerName" name="brokerName" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                            </div>
                            <div class="w-full flex items-center gap-4">
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="brokerEmail" class="text-md font-normal leading-tight tracking-tight">Broker
                                        Email:</label>
                                    <input id="brokerEmail" name="brokerEmail" type="email"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="brokerPhone" class="text-md font-normal leading-tight tracking-tight">Broker
                                        Phone:</label>
                                    <input id="brokerPhone" name="brokerPhone" type="number"
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
                                    <label for="loanAmount"
                                        class="text-md font-normal leading-tight tracking-tight">Purchase Price
                                        if you're purchasing:</label>
                                    <input id="loanAmount" name="loanAmount" type="number"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="loanPurpose"
                                        class="text-md font-normal leading-tight tracking-tight">Desired Loan
                                        Amount:</label>
                                    <input id="loanPurpose" name="loanPurpose" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                                <div class="w-full flex flex-col gap-1.5">
                                    <label for="loanPurpose"
                                        class="text-md font-normal leading-tight tracking-tight">Purpose of the
                                        loan:</label>
                                    <input id="loanPurpose" name="loanPurpose" type="text"
                                        class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                </div>
                            </div>
                            <div class="w-full flex flex-col gap-2">
                                <label for="loanPurpose" class="text-md font-normal leading-tight tracking-tight">Desired
                                    Loan
                                    term:</label>
                                <div class="flex items-center gap-4">
                                    <div class="flex flex-col gap-2">
                                        (Months)
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-1">
                                                <span>3</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>6</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>9</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>12</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>18</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                            <div class="flex items-center gap-1">
                                                <span>36</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center gap-2">
                                        ( Years )
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-1">
                                                <span>3</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-center gap-2">
                                        ( A.R.M )
                                        <div class="flex items-center gap-2">
                                            <div class="flex items-center gap-1">
                                                <span>3</span>
                                                <input id="loanPurpose" name="loanPurpose" type="checkbox"
                                                    class="rounded-full" />
                                            </div>
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
                        <!-- Step 3: Additional Information -->
                        <div x-show="step === 3" class="flex flex-col gap-8">
                            <div class="w-full flex flex-col items-center gap-4">
                                <div class="w-full">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Subject
                                            Property Street Address:</label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Subject
                                            Property Street Address:</label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Broker
                                            Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Broker
                                            Email:</label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <p class="text-md font-normal leading-tight tracking-tight">Does the property generate
                                        income?
                                    </p>
                                    <div class="flex items-center gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Yes</label>
                                        <input id="componyName" name="componyName" type="checkbox"
                                            class="rounded-full" />
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">No</label>
                                        <input id="brokerName" name="brokerName" type="checkbox" class="rounded-full" />
                                    </div>
                                    <div class="flex items-center gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">It
                                            will</label>
                                        <input id="brokerEmail" name="brokerEmail" type="checkbox"
                                            class="rounded-full" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Actual or
                                            expected Gross Monthly Rent:
                                        </label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Actual or
                                            expected Gross Monthly Rent:
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Number of
                                            Units
                                        </label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Yearly
                                            property taxes (estimate):
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Yearly HOA
                                            Dues:
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Cost of
                                            Anticipated Rehab:
                                        </label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Estimated
                                            After Repair Value:
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Original
                                            Cost (If refinance)
                                        </label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Estimated
                                            "AS IS" Value:
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text"
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
                                        <label for="componyName"
                                            class="text-md font-normal leading-tight tracking-tight">Entity
                                            Name:</label>
                                        <input id="componyName" name="componyName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Federal
                                            EIN:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">State
                                            Registered:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
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
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Percent %
                                            owned
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Percent %
                                            owned
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Percent %
                                            owned
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
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
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Tot.
                                            Available cash to close: (Available liquid cash)</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 1
                                            Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 2
                                            Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 3
                                            Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Bank 4
                                            Name:</label>
                                        <input id="brokerName" name="brokerName" type="text"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Acc.# (Last
                                            3 Dig.)
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Amount:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Other
                                            Assets:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerEmail"
                                            class="text-md font-normal leading-tight tracking-tight">Value:
                                        </label>
                                        <input id="brokerEmail" name="brokerEmail" type="email"
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
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">How did you
                                            find this property?</label>
                                        <textarea id="brokerName" name="brokerName" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">How do you
                                            intend to pay off this loan?
                                        </label>
                                        <textarea id="brokerName" name="brokerName" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex items-center gap-1.5">
                                        <label for="brokerName"
                                            class="text-md text-nowrap font-normal leading-tight tracking-tight">How long
                                            will it take you to rehab (if rehab loan)? (in months)
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20">
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">How will you
                                            use the funds provided by this loan?
                                        </label>
                                        <textarea id="brokerName" name="brokerName" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20"></textarea>
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex items-center gap-1.5">
                                        <label for="brokerName"
                                            class="text-md text-nowrap font-normal leading-tight tracking-tight">Fix&Flip:
                                            How much
                                            will you profit?
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20">
                                    </div>
                                    <div class="w-full flex items-center gap-1.5">
                                        <label for="brokerName"
                                            class="text-md text-nowrap font-normal leading-tight tracking-tight">Hold &
                                            Rent: Expected
                                            monthly net income
                                        </label>
                                        <input id="brokerName" name="brokerName" type="text" rows="5"
                                            class="w-full px-3 py-2 dark:bg-black dark:border-gray-700 rounded-md border border-black/20">
                                    </div>
                                </div>
                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label for="brokerName"
                                            class="text-md font-normal leading-tight tracking-tight">Do you have
                                            any Fix & Flip, rehabbing or renting experience? If yes, please describe
                                        </label>
                                        <textarea id="brokerName" name="brokerName" type="text" rows="5"
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
                                        <label class="text-md font-normal">Full Name:</label>
                                        <input type="text" name="fullName"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">SSN (Last 4 Digits):</label>
                                        <input type="text" name="ssn"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">DOB:</label>
                                        <input type="date" name="dob"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">Cell Phone:</label>
                                        <input type="text" name="cellPhone"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">Home Phone:</label>
                                        <input type="text" name="homePhone"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">Email Address:</label>
                                        <input type="email" name="email"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">Street Address:</label>
                                        <input type="text" name="streetAddress"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">City:</label>
                                        <input type="text" name="city"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">State:</label>
                                        <input type="text" name="state"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label class="text-md font-normal">Zip:</label>
                                        <input type="text" name="zip"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <h2 class="font-semibold text-lg mt-6">EMPLOYER INFORMATION:</h2>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Employer #1:</label>
                                        <input type="text" name="employer1"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Position:</label>
                                        <input type="text" name="position1"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Years With Company:</label>
                                        <input type="number" name="years1"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Employer #2:</label>
                                        <input type="text" name="employer2"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Position:</label>
                                        <input type="text" name="position2"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Years With Company:</label>
                                        <input type="number" name="years2"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                </div>

                                <div class="w-full flex flex-col gap-1.5">
                                    <label>Total Monthly Income:</label>
                                    <input type="text" name="income"
                                        class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                </div>

                                <div class="w-full flex items-center gap-4">
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>Estimated Credit Score:</label>
                                        <input type="text" name="creditScore"
                                            class="w-full px-3 py-2 border border-black/20 rounded-md dark:bg-black dark:border-gray-700" />
                                    </div>
                                    <div class="w-full flex flex-col gap-1.5">
                                        <label>How Many Completed Flips In Previous 24 Months:</label>
                                        <input type="text" name="flips"
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
                            <div class="w-full rounded-2xl shadow-md">
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
                                                <label class="flex items-center gap-1">
                                                    <input type="radio" name="q{{ $index }}" value="yes"
                                                        class="text-blue-600">
                                                    Yes
                                                </label>
                                                <label class="flex items-center gap-1">
                                                    <input type="radio" name="q{{ $index }}" value="no"
                                                        class="text-blue-600" checked>
                                                    No
                                                </label>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="mt-6 text-md text-black dark:text-white leading-relaxed">
                                    Each of the undersigned hereby authorize Lender and Lender's actual or potential
                                    lenders,
                                    agents, brokers, processors,
                                    attorneys, insurers, servicers, successors and assigns (collectively "Lender") to make
                                    all
                                    inquiries it deems necessary
                                    to verify the accuracy of the information provided herein, and to determine my/our
                                    credit
                                    worthiness. This includes
                                    my/our and my company’s past and present employment, earnings records, bank accounts,
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
                                    the company’s program.
                                    Additionally, this information may be used to determine fees, pricing, and other
                                    compensating
                                    factors associated with
                                    your private money funding. It will not be disclosed outside the company and its
                                    affiliates
                                    except as required and
                                    permitted by law. You do not have to provide this information, but if you do not your
                                    application for approval as a
                                    prospective private funding borrower may be delayed or rejected.
                                </div>
                                <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
                                    <div class="flex flex-col w-full sm:w-1/2">
                                        <label class="text-black dark:text-white text-sm">Signature</label>
                                        <input type="text" name="signature"
                                            class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                    </div>
                                    <div class="flex flex-col w-full sm:w-1/2">
                                        <label class="text-black dark:text-white text-sm">Please Pull This Credit Report To
                                            Help Determine Pricing</label>
                                        <input type="text" name="signature"
                                            class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
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
                                    The loan requested pursuant to this application (the “Loan”) will be secured by a
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
                                    My transmission of this application as an “electronic record” containing my “electronic
                                    signature,” as those terms are defined in applicable federal and/or state laws, or my
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
                            <div class="flex w-full items-center gap-4">
                                <div class="flex items-center gap-2">
                                    <label class="text-black dark:text-white text-sm">Guarantor Signature</label>
                                    <input type="text" name="signature"
                                        class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                                <div class="flex items-center gap-2">
                                    <label class="text-black dark:text-white text-sm">Date</label>
                                    <input type="text" name="signature"
                                        class="mt-1 p-2 border rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-600">
                                </div>
                            </div>
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
    @endsection
