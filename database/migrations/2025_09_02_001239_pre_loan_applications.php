<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PreLoanApplications extends Migration
{
    public function up()
    {
        Schema::create('pre_loan_applications', function (Blueprint $table) {
            $table->id();
            // Step 1
            $table->text('company_name')->nullable();
            $table->text('broker_name')->nullable();
            $table->text('broker_email')->nullable();
            $table->text('broker_phone')->nullable();
            // Step 2
            $table->text('purchase_price')->nullable();
            $table->text('desired_loan_amount')->nullable();
            $table->text('loan_purpose')->nullable();
            $table->text('loan_term_months')->nullable();
            $table->text('loan_term_years')->nullable();
            $table->text('loan_term_arm')->nullable();
            // Step 3
            $table->text('property_street_address')->nullable();
            $table->text('property_city')->nullable();
            $table->text('property_state')->nullable();
            $table->text('property_zip')->nullable();
            $table->text('property_generates_income')->nullable();
            $table->text('gross_monthly_rent')->nullable();
            $table->text('expected_gross_monthly_rent')->nullable();
            $table->text('number_of_units')->nullable();
            $table->text('yearly_property_taxes')->nullable();
            $table->text('yearly_hoa_dues')->nullable();
            $table->text('anticipated_rehab_cost')->nullable();
            $table->text('after_repair_value')->nullable();
            $table->text('original_cost')->nullable();
            $table->text('as_is_value')->nullable();
            // Step 4
            $table->text('entity_name')->nullable();
            $table->text('federal_ein')->nullable();
            $table->text('state_registered')->nullable();
            // Step 5
            $table->text('bind_entity_name_1')->nullable();
            $table->text('bind_entity_percent_1')->nullable();
            $table->text('bind_entity_name_2')->nullable();
            $table->text('bind_entity_percent_2')->nullable();
            $table->text('bind_entity_name_3')->nullable();
            $table->text('bind_entity_percent_3')->nullable();
            // Step 6
            $table->text('available_cash_to_close')->nullable();
            $table->text('bank_1_name')->nullable();
            $table->text('bank_1_acc')->nullable();
            $table->text('bank_1_amount')->nullable();
            $table->text('bank_1_other_assets')->nullable();
            $table->text('bank_1_value')->nullable();
            $table->text('bank_2_name')->nullable();
            $table->text('bank_2_acc')->nullable();
            $table->text('bank_2_amount')->nullable();
            $table->text('bank_2_other_assets')->nullable();
            $table->text('bank_2_value')->nullable();
            $table->text('bank_3_name')->nullable();
            $table->text('bank_3_acc')->nullable();
            $table->text('bank_3_amount')->nullable();
            $table->text('bank_3_other_assets')->nullable();
            $table->text('bank_3_value')->nullable();
            $table->text('bank_4_name')->nullable();
            $table->text('bank_4_acc')->nullable();
            $table->text('bank_4_amount')->nullable();
            $table->text('bank_4_other_assets')->nullable();
            $table->text('bank_4_value')->nullable();
            // Step 7
            $table->text('find_property')->nullable();
            $table->text('payoff_strategy')->nullable();
            $table->text('rehab_time')->nullable();
            $table->text('funds_usage')->nullable();
            $table->text('fix_flip_profit')->nullable();
            $table->text('hold_rent_income')->nullable();
            $table->text('experience_description')->nullable();
            // Step 8
            $table->text('guarantor_full_name')->nullable();
            $table->text('guarantor_ssn')->nullable();
            $table->text('guarantor_dob')->nullable();
            $table->text('guarantor_cell_phone')->nullable();
            $table->text('guarantor_home_phone')->nullable();
            $table->text('guarantor_email')->nullable();
            $table->text('guarantor_street_address')->nullable();
            $table->text('guarantor_city')->nullable();
            $table->text('guarantor_state')->nullable();
            $table->text('guarantor_zip')->nullable();
            $table->text('employer_1')->nullable();
            $table->text('position_1')->nullable();
            $table->text('years_with_company_1')->nullable();
            $table->text('employer_2')->nullable();
            $table->text('position_2')->nullable();
            $table->text('years_with_company_2')->nullable();
            $table->text('total_monthly_income')->nullable();
            $table->text('estimated_credit_score')->nullable();
            $table->text('completed_flips')->nullable();
            // Step 9: 13 questions (yes/no)
            $table->text('question_0')->nullable();
            $table->text('question_1')->nullable();
            $table->text('question_2')->nullable();
            $table->text('question_3')->nullable();
            $table->text('question_4')->nullable();
            $table->text('question_5')->nullable();
            $table->text('question_6')->nullable();
            $table->text('question_7')->nullable();
            $table->text('question_8')->nullable();
            $table->text('question_9')->nullable();
            $table->text('question_10')->nullable();
            $table->text('question_11')->nullable();
            $table->text('question_12')->nullable();
            $table->text('authorization_signature')->nullable();
            $table->text('pull_credit_report_signature')->nullable();
            // Step 10
            $table->text('guarantor_signature')->nullable();
            $table->text('guarantor_signature_date')->nullable();
            $table->timestamps();
        });
    }
    public function down()
    {
        Schema::dropIfExists('pre_loan_applications');
    }
}
