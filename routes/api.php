<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('code','API\AtherApiController@code');
Route::post('login','API\userApiController@login');
Route::post('register','API\userApiController@register');
Route::get('redeemyourpoints','API\AtherApiController@redeemyourpoints');
Route::get('Name-d','API\userApiController@NameOfD');
Route::get('search/{search}','API\AtherApiController@search');
Route::post('contact','API\AtherApiController@contact');

Route::group(['middleware' => ['auth:api','verified']], function(){
    Route::post('details','API\userApiController@details'); 
    Route::get('redeemyourpointsforuser','API\userApiController@redeemyourpointsForUser');
    Route::get('medical','API\AtherApiController@medical');

    Route::get('cvs','API\AtherApiController@cvs');
    Route::get('diabetes','API\AtherApiController@diabetes');
    Route::get('respiratory','API\AtherApiController@respiratory');
    Route::get('oncology','API\AtherApiController@oncology');
    Route::get('miscellaneous','API\AtherApiController@miscellaneous');
    Route::get('certificate-miscellaneous','API\AtherApiController@certificate_miscellaneous');

    //basic resources
    Route::get('basic-resources','API\AtherApiController@basic_resources');
    Route::get('diabetes-basic-resources','API\AtherApiController@diabetesBasicResources');
    Route::get('respiratory-basic-resources','API\AtherApiController@respiratoryBasicResources');
    Route::get('oncology-basic-resources','API\AtherApiController@oncologyBasicResources');
    Route::get('miscellaneous-basic-resources','API\AtherApiController@miscellaneousBasicResources');
    Route::get('certificate-basic-resources','API\AtherApiController@certificateMiscellaneousBasicResources');

    //books
    Route::get('cvs-books','API\AtherApiController@cvs_books');
    Route::get('diabetes-books','API\AtherApiController@diabetes_books');
    Route::get('respiratory-books','API\AtherApiController@respiratory_books');
    Route::get('oncolcgy-books','API\AtherApiController@oncolcgy_books');
    Route::get('miscellaneous-books','API\AtherApiController@miscellaneous_books');
    Route::get('certificate-books','API\AtherApiController@certificate_books');

    //curriculum
    Route::get('cvs-curriculum','API\AtherApiController@cvs_curriculum');
    Route::get('diabetes-curriculum','API\AtherApiController@diabetes_curriculum');
    Route::get('respiratory-curriculum','API\AtherApiController@respiratory_curriculum');
    Route::get('miscellaneous-curriculum','API\AtherApiController@miscellaneous_curriculum');
    Route::get('oncolcgy-curriculum','API\AtherApiController@oncolcgy_curriculum');
    Route::get('certificate-curriculum','API\AtherApiController@certificate_curriculum');

/////////////////////////////////////////////////////////////////////////////////////////////////
Route::get('clinical-scenarios','API\AtherApiController@clinical_scenarios');
Route::get('diabetes-clinical-scenarios','API\AtherApiController@diabetes_clinical_scenarios');
Route::get('respiratory-clinical-scenarios','API\AtherApiController@respiratory_clinical_scenarios');
Route::get('oncology-clinical-scenarios','API\AtherApiController@oncology_clinical_scenarios');
Route::get('miscellaneous-clinical-scenarios','API\AtherApiController@miscellaneous_clinical_scenarios');
Route::get('certificate-clinical-scenarios','API\AtherApiController@certificate_clinical_scenarios');

Route::get('updates-news','API\AtherApiController@updates_news');
Route::get('diabetes-updates-news','API\AtherApiController@diabetes_updates_news');
Route::get('respiratory-updates-news','API\AtherApiController@respiratory_updates_news');
Route::get('oncology-updates-news','API\AtherApiController@oncology_updates_news');
Route::get('miscellaneous-updates-news','API\AtherApiController@miscellaneous_updates_news');
Route::get('certificate-updates-news','API\AtherApiController@certificate_updates_news');

Route::get('guidelines','API\AtherApiController@guidelines');
Route::get('diabetes-guidelines','API\AtherApiController@diabetes_guidelines');
Route::get('respiratory-guidelines','API\AtherApiController@respiratory_guidelines');
Route::get('oncology-guidelines','API\AtherApiController@oncology_guidelines');
Route::get('miscellaneous-guidelines','API\AtherApiController@miscellaneous_guidelines');
Route::get('certificate-guidelines','API\AtherApiController@certificate_guidelines');

Route::get('drug-index','API\AtherApiController@drug_index');

//cvs-curriculum
Route::get('cvs-introduction-to-ncds-and-burden-of-cv-diseases','API\AtherApiController@cvs_introduction_to_ncds_and_burden_of_cv_diseases');
Route::get('cvs-hypertension','API\AtherApiController@cvs_hypertension');
Route::get('cvs-risk-assessment-in-hypertension','API\AtherApiController@cvs_risk_assessment_in_hypertension');
Route::get('cvs-interactive-case','API\AtherApiController@cvs_interactive_case');
Route::get('cvs-latest-guidelines-of-hypertension','API\AtherApiController@cvs_latest_guidelines_of_hypertension');
Route::get('cvs-atherosclerosis','API\AtherApiController@cvs_atherosclerosis');
Route::get('cvs-cholesterol','API\AtherApiController@cvs_cholesterol');
Route::get('cvs-dietary-and-life-style-recommendations','API\AtherApiController@cvs_dietary_and_life_style_recommendations');
Route::get('cvs-drug-therapy-overview','API\AtherApiController@cvs_drug_therapy_overview');
Route::get('cvs-managing-cholesterol-interactive-case','API\AtherApiController@cvs_managing_cholesterol_interactive_case');
Route::get('cvs-diabetes-for-the-cardiologist','API\AtherApiController@cvs_diabetes_for_the_cardiologist');
Route::get('cvs-smoking-and-heart-diseases','API\AtherApiController@cvs_smoking_and_heart_diseases');
Route::get('cvs-smoking-cessation-therapies-for-the-cardiologist','API\AtherApiController@cvs_smoking_cessation_therapies_for_the_cardiologist');

//diabetes-curriculum
Route::get('diabetes-introduction-to-ncds-and-burden-of-diabetes','API\AtherApiController@diabetes_introduction_to_ncds_and_burden_of_diabetes');
Route::get('diabetes-pathogenesis-and-diagnosis-of-diabetes-and-prediabetes','API\AtherApiController@diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes');
Route::get('diabetes-nutrition-therapy-and-physical-activity','API\AtherApiController@diabetes_nutrition_therapy_and_physical_activity');
Route::get('diabetes-smoking-and-related-to-incidence-of-diabetes','API\AtherApiController@diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes');
Route::get('diabetes-management-in-children-and-adolescents-with-diabetes','API\AtherApiController@diabetes_management_in_children_and_adolescents_with_diabetes');
Route::get('diabetes-psychosocial-aspects-of-diabetes','API\AtherApiController@diabetes_psychosocial_aspects_of_diabetes');
Route::get('diabetes-oral-health-and-diabetes','API\AtherApiController@diabetes_oral_health_and_diabetes');
Route::get('diabetes-sexual-health-in-diabetes','API\AtherApiController@diabetes_sexual_health_in_diabetes');
Route::get('diabetes-insulin-therapy','API\AtherApiController@diabetes_insulin_therapy');
Route::get('diabetes-interactive-case','API\AtherApiController@diabetes_interactive_case');

//respiratory-curriculum
Route::get('respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-copd','API\AtherApiController@respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_copd');
Route::get('respiratory-grading-and-grouping-of-copd','API\AtherApiController@respiratory_grading_and_grouping_of_copd');
Route::get('respiratory-management-of-copd-stable-exacerbation','API\AtherApiController@respiratory_management_of_copd_stable_exacerbation');
Route::get('respiratory-risk-factors-classifications-and-clinical-manifestations-of-lung-cancer','API\AtherApiController@respiratory_risk_factors_classifications_and_clinical_manifestations_of_lung_cancer');
Route::get('respiratory-investigation-for-diagnosis-staging-of-lung-cancer','API\AtherApiController@respiratory_investigation_for_diagnosis_staging_of_lung_cancer');
Route::get('respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-bronchial-asthma','API\AtherApiController@respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_bronchial_asthma');
Route::get('respiratory-diagnosis-of-bronchial-asthma-history-clinical-examination-spirometry','API\AtherApiController@respiratory_diagnosis_of_bronchial_asthma_history_clinical_examination_spirometry');
Route::get('respiratory-assessment-of-bronchial-asthma-severity-control','API\AtherApiController@respiratory_assessment_of_bronchial_asthma_severity_control');
Route::get('respiratory-medications-of-bronchial-asthma-pharmacologicalcontroller-reliever-add-on-and-non-pharmacological','API\AtherApiController@respiratory_medications_of_bronchial_asthma_pharmacologicalcontroller_reliever_add_on_and_non_pharmacological');
Route::get('respiratory-guidelines-of-management-of-stable-asthma-and-exacerbations','API\AtherApiController@respiratory_guidelines_of_management_of_stable_asthma_and_exacerbations');
Route::get('respiratory-normal-sleep-physiology-definition-risk-factors-and-pathogenesis-of-osa','API\AtherApiController@respiratory_normal_sleep_physiology_definition_risk_factors_and_pathogenesis_of_osa');
Route::get('respiratory-clinical-manifestation-and-scoring-of-sleep-disordered-breathing','API\AtherApiController@respiratory_clinical_manifestation_and_scoring_of_sleep_disordered_breathing');
Route::get('respiratory-burden-of-osa-on-different-body-system-brain-heart-diabetes-respiratory','API\AtherApiController@respiratory_burden_of_osa_on_different_body_system_brain_heart_diabetes_respiratory');
Route::get('respiratory-diagnosis-of-osa-interpretation-of-sleep-report','API\AtherApiController@respiratory_diagnosis_of_osa_interpretation_of_sleep_report');
Route::get('respiratory-ttt-of-osa-medical-and-surgical','API\AtherApiController@respiratory_ttt_of_osa_medical_and_surgical');

//miscellaneous-curriculum
Route::get('miscellaneous-mental-health','API\AtherApiController@miscellaneous_mental_health');

//certificate-curriculum
Route::get('certificate-smoking-cessation','API\AtherApiController@certificate_smoking_cessation');
Route::get('certificate-obesity-and-nutrition','API\AtherApiController@certificate_obesity_and_nutrition');
Route::get('certificate-mental-health','API\AtherApiController@certificate_mental_health');
Route::get('certificate-country-specific-health-issues','API\AtherApiController@certificate_country_specific_health_issues');
Route::get('certificate-basics-of-gcp-and-research','API\AtherApiController@certificate_basics_of_gcp_and_research');
Route::get('certificate-basics-of-medical-statistics','API\AtherApiController@certificate_basics_of_medical_statistics');
Route::get('certificate-conflict-resolution-and-basic-communication-skills','API\AtherApiController@certificate_conflict_resolution_and_basic_communication_skills');
Route::get('certificate-physical-exercise','API\AtherApiController@certificate_physical_exercise');
Route::get('certificate-digital-health','API\AtherApiController@certificate_digital_health');



//////////////////////////////////////////////////////////////////////////////////////////////

    //assessment
    Route::get('exam','API\AtherApiController@cases');
    Route::get('diabetes-exam','API\AtherApiController@diabetesAssessment');
    Route::get('respiratory-exam','API\AtherApiController@respiratoryAssessment');
    Route::get('oncology-exam','API\AtherApiController@oncologyAssessment');
    Route::get('miscellaneous-exam','API\AtherApiController@miscellaneousAssessment');
    Route::get('certificate-exam','API\AtherApiController@certificateAssessment');

    Route::get('assessment','API\AtherApiController@assessment');

    
    Route::get('/surveys/{questionnaire}-{slug}', 'API\AtherApiController@surveys');
    Route::post('/surveys/{questionnaire}-{slug}', 'API\AtherApiController@addSurveys');
    Route::get('/case/{questionnaire}', 'API\AtherApiController@caseEam');

    //courses registration
    Route::post('courses-registration','API\AtherApiController@courses_registration'); 
   
});



//Rest password
Route::group([    
    'namespace' => 'Auth',    
    'middleware' => 'api',    
    'prefix' => 'password'
], function () {    
    Route::post('create', 'ResetPasswordApiController@create');
});

