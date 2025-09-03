<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>My Loan Application</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 12px;
            color: #333;
        }

        h1 {
            text-align: center;
            font-size: 20px;
            margin-bottom: 30px;
        }

        .section {
            margin-bottom: 20px;
        }

        h2 {
            font-size: 16px;
            margin-bottom: 8px;
            border-bottom: 1px solid #ccc;
            padding-bottom: 4px;
        }

        p {
            margin: 2px 0;
        }

        strong {
            display: inline-block;
            width: 220px;
        }

        img.signature {
            border: 1px solid #ccc;
            margin-top: 8px;
            max-height: 80px;
        }
    </style>
</head>

<body>
    <h1>Loan Application Details</h1>

    {{-- Company & Broker Info --}}
    <div class="section">
        <h2>Company / Broker Information</h2>
        <p><strong>Company Name:</strong> {{ $application->company_name }}</p>
        <p><strong>Broker Name:</strong> {{ $application->broker_name }}</p>
        <p><strong>Broker Email:</strong> {{ $application->broker_email }}</p>
        <p><strong>Broker Phone:</strong> {{ $application->broker_phone }}</p>
    </div>

    {{-- Loan Info --}}
    <div class="section">
        <h2>Loan Information</h2>
        <p><strong>Purchase Price:</strong> {{ $application->purchase_price }}</p>
        <p><strong>Desired Loan Amount:</strong> {{ $application->desired_loan_amount }}</p>
        <p><strong>Loan Purpose:</strong> {{ $application->loan_purpose }}</p>
        <p><strong>Loan Term (Months):</strong> {{ $application->loan_term_months }}</p>
        <p><strong>Loan Term (Years):</strong> {{ $application->loan_term_years }}</p>
        <p><strong>Loan Term ARM:</strong> {{ $application->loan_term_arm }}</p>
    </div>

    {{-- Property Info --}}
    <div class="section">
        <h2>Property Information</h2>
        <p><strong>Street Address:</strong> {{ $application->property_street_address }}</p>
        <p><strong>City:</strong> {{ $application->property_city }}</p>
        <p><strong>State:</strong> {{ $application->property_state }}</p>
        <p><strong>ZIP:</strong> {{ $application->property_zip }}</p>
        <p><strong>Generates Income:</strong> {{ $application->property_generates_income }}</p>
        <p><strong>Gross Monthly Rent:</strong> {{ $application->gross_monthly_rent }}</p>
        <p><strong>Expected Rent:</strong> {{ $application->expected_gross_monthly_rent }}</p>
        <p><strong>Number of Units:</strong> {{ $application->number_of_units }}</p>
        <p><strong>Yearly Property Taxes:</strong> {{ $application->yearly_property_taxes }}</p>
        <p><strong>Yearly HOA Dues:</strong> {{ $application->yearly_hoa_dues }}</p>
        <p><strong>Anticipated Rehab Cost:</strong> {{ $application->anticipated_rehab_cost }}</p>
        <p><strong>After Repair Value:</strong> {{ $application->after_repair_value }}</p>
        <p><strong>Original Cost:</strong> {{ $application->original_cost }}</p>
        <p><strong>As-Is Value:</strong> {{ $application->as_is_value }}</p>
    </div>

    {{-- Entity Info --}}
    <div class="section">
        <h2>Entity Information</h2>
        <p><strong>Entity Name:</strong> {{ $application->entity_name }}</p>
        <p><strong>Federal EIN:</strong> {{ $application->federal_ein }}</p>
        <p><strong>State Registered:</strong> {{ $application->state_registered }}</p>

        <p><strong>Bind Entity #1:</strong> {{ $application->bind_entity_name_1 }}
            ({{ $application->bind_entity_percent_1 }}%)</p>
        <p><strong>Bind Entity #2:</strong> {{ $application->bind_entity_name_2 }}
            ({{ $application->bind_entity_percent_2 }}%)</p>
        <p><strong>Bind Entity #3:</strong> {{ $application->bind_entity_name_3 }}
            ({{ $application->bind_entity_percent_3 }}%)</p>
    </div>

    {{-- Guarantor Info --}}
    <div class="section">
        <h2>Guarantor Information</h2>
        <p><strong>Full Name:</strong> {{ $application->guarantor_full_name }}</p>
        <p><strong>SSN:</strong> {{ $application->guarantor_ssn }}</p>
        <p><strong>DOB:</strong> {{ $application->guarantor_dob }}</p>
        <p><strong>Cell Phone:</strong> {{ $application->guarantor_cell_phone }}</p>
        <p><strong>Home Phone:</strong> {{ $application->guarantor_home_phone }}</p>
        <p><strong>Email:</strong> {{ $application->guarantor_email }}</p>
        <p><strong>Address:</strong> {{ $application->guarantor_street_address }}, {{ $application->guarantor_city }},
            {{ $application->guarantor_state }} {{ $application->guarantor_zip }}</p>
    </div>

    {{-- Employment Info --}}
    <div class="section">
        <h2>Employment Information</h2>
        <p><strong>Employer 1:</strong> {{ $application->employer_1 }} ({{ $application->position_1 }},
            {{ $application->years_with_company_1 }} years)</p>
        <p><strong>Employer 2:</strong> {{ $application->employer_2 }} ({{ $application->position_2 }},
            {{ $application->years_with_company_2 }} years)</p>
        <p><strong>Total Monthly Income:</strong> {{ $application->total_monthly_income }}</p>
        <p><strong>Estimated Credit Score:</strong> {{ $application->estimated_credit_score }}</p>
    </div>

    {{-- Signatures --}}
    <div class="section">
        <h2>Signatures</h2>
        <p><strong>Authorization Signature:</strong></p>
        @if ($application->authorization_signature)
            <img src="{{ $application->authorization_signature }}" class="signature">
        @endif

        @if ($application->pull_credit_report_signature)
            <p><strong>Pull Credit Report Signature:</strong> {{ $application->pull_credit_report_signature }}</p>
        @endif

        <p><strong>Guarantor Signature:</strong></p>
        @if ($application->guarantor_signature)
            <img src="{{ $application->guarantor_signature }}" class="signature">
        @endif

        <p><strong>Signature Date:</strong> {{ $application->guarantor_signature_date }}</p>
    </div>
</body>

</html>
