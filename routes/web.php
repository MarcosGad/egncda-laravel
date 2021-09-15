<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about-as', function () {
    return view('about-as');
})->name('about-as');

Route::get('/navigation', function () {
    return view('navigation');
})->name('navigation');

Route::get('/results', function () {
    $user= App\User::where('first_name','like', '%' .request('search'). '%')->get()->where('user_type','=','1');
    return view('results')
    ->with('users',$user)
    ->with('first_name','Result: '.request('search'))
    ->with('query',request('search'));
})->name('results');

Auth::routes(['verify' => true]);
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/redeemyourpoints', 'HomeController@redeemyourpoints')->name('redeemyourpoints');
Route::get('/contactus', 'PagesController@create')->name('contactus');
Route::post('/contactus', 'PagesController@store')->name('contactus');
Route::get('/certificate', 'DoctorController@certificate')->name('certificate');


Route::get('/login_p', 'PagesController@loginB')->name('login_p');
Route::get('/register_p', 'PagesController@registerB')->name('register_p');

Route::get('/register', 'PagesController@register')->name('register');
Route::get('/code', 'PagesController@code')->name('code');
Route::post('code', 'PagesController@gocode')->name('code');

Route::get('/codePa', 'PagesController@codePa')->name('codePa');
Route::post('codePa', 'PagesController@gocodePa')->name('codePa');

//Doctor
Route::get('/medical', 'DoctorController@medical')->name('medical');
Route::get('/social', 'DoctorController@social')->name('social');

Route::get('/cvs', 'DoctorController@cvs')->name('cvs');
Route::get('/diabetes', 'DoctorController@diabetesDoctor')->name('diabetes');
Route::get('/respiratory', 'DoctorController@respiratoryDoctor')->name('respiratory');
Route::get('/oncology', 'DoctorController@oncologyDoctor')->name('oncology');
Route::get('/miscellaneous', 'DoctorController@miscellaneousDoctor')->name('miscellaneous');
Route::get('/certificate-miscellaneous', 'DoctorController@miscellaneousDoctorCertificate')->name('certificate-miscellaneous');
Route::get('/assessment', 'DoctorController@assessment')->name('assessment');
Route::get('/drug-index', 'DoctorController@drug_index')->name('drug-index');

//books
Route::get('/cvs-books', 'DoctorController@cvs_books')->name('cvs-books');
Route::get('/diabetes-books', 'DoctorController@diabetes_books')->name('diabetes-books');
Route::get('/respiratory-books', 'DoctorController@respiratory_books')->name('respiratory-books');
Route::get('/oncolcgy-books', 'DoctorController@oncolcgy_books')->name('oncolcgy-books');
Route::get('/miscellaneous-books', 'DoctorController@miscellaneous_books')->name('miscellaneous-books');
Route::get('/certificate-books', 'DoctorController@certificate_books')->name('certificate-books');

Route::get('/clinical-scenarios', 'DoctorController@clinical_scenarios')->name('clinical-scenarios');
Route::get('/diabetes-clinical-scenarios', 'DoctorController@diabetes_clinical_scenarios')->name('diabetes-clinical-scenarios');
Route::get('/respiratory-clinical-scenarios', 'DoctorController@respiratory_clinical_scenarios')->name('respiratory-clinical-scenarios');
Route::get('/oncology-clinical-scenarios', 'DoctorController@oncology_clinical_scenarios')->name('oncology-clinical-scenarios');
Route::get('/miscellaneous-clinical-scenarios', 'DoctorController@miscellaneous_clinical_scenarios')->name('miscellaneous-clinical-scenarios');
Route::get('/certificate-clinical-scenarios', 'DoctorController@certificate_clinical_scenarios')->name('certificate-clinical-scenarios');

Route::get('/guidelines', 'DoctorController@guidelines')->name('guidelines');
Route::get('/diabetes-guidelines', 'DoctorController@diabetes_guidelines')->name('diabetes-guidelines');
Route::get('/respiratory-guidelines', 'DoctorController@respiratory_guidelines')->name('respiratory-guidelines');
Route::get('/oncology-guidelines', 'DoctorController@oncology_guidelines')->name('oncology-guidelines');
Route::get('/miscellaneous-guidelines', 'DoctorController@miscellaneous_guidelines')->name('miscellaneous-guidelines');
Route::get('/certificate-guidelines', 'DoctorController@certificate_guidelines')->name('certificate-guidelines');


Route::get('/updates-news', 'DoctorController@updates_news')->name('updates-news');
Route::get('/diabetes-updates-news', 'DoctorController@diabetes_updates_news')->name('diabetes-updates-news');
Route::get('/respiratory-updates-news', 'DoctorController@respiratory_updates_news')->name('respiratory-updates-news');
Route::get('/oncology-updates-news', 'DoctorController@oncology_updates_news')->name('oncology-updates-news');
Route::get('/miscellaneous-updates-news', 'DoctorController@miscellaneous_updates_news')->name('miscellaneous-updates-news');
Route::get('/certificate-updates-news', 'DoctorController@certificate_updates_news')->name('certificate-updates-news');

//cvs-curriculum
Route::get('/cvs-introduction-to-ncds-and-burden-of-cv-diseases', 'DoctorController@cvs_introduction_to_ncds_and_burden_of_cv_diseases')->name('cvs-introduction-to-ncds-and-burden-of-cv-diseases');
Route::get('/cvs-hypertension', 'DoctorController@cvs_hypertension')->name('cvs-hypertension');
Route::get('/cvs-risk-assessment-in-hypertension', 'DoctorController@cvs_risk_assessment_in_hypertension')->name('cvs-risk-assessment-in-hypertension');
Route::get('/cvs-interactive-case', 'DoctorController@cvs_interactive_case')->name('cvs-interactive-case');
Route::get('/cvs-latest-guidelines-of-hypertension', 'DoctorController@cvs_latest_guidelines_of_hypertension')->name('cvs-latest-guidelines-of-hypertension');
Route::get('/cvs-atherosclerosis', 'DoctorController@cvs_atherosclerosis')->name('cvs-atherosclerosis');
Route::get('/cvs-cholesterol', 'DoctorController@cvs_cholesterol')->name('cvs-cholesterol');
Route::get('/cvs-dietary-and-life-style-recommendations', 'DoctorController@cvs_dietary_and_life_style_recommendations')->name('cvs-dietary-and-life-style-recommendations');
Route::get('/cvs-drug-therapy-overview', 'DoctorController@cvs_drug_therapy_overview')->name('cvs-drug-therapy-overview');
Route::get('/cvs-managing-cholesterol-interactive-case', 'DoctorController@cvs_managing_cholesterol_interactive_case')->name('cvs-managing-cholesterol-interactive-case');
Route::get('/cvs-diabetes-for-the-cardiologist', 'DoctorController@cvs_diabetes_for_the_cardiologist')->name('cvs-diabetes-for-the-cardiologist');
Route::get('/cvs-smoking-and-heart-diseases', 'DoctorController@cvs_smoking_and_heart_diseases')->name('cvs-smoking-and-heart-diseases');
Route::get('/cvs-smoking-cessation-therapies-for-the-cardiologist', 'DoctorController@cvs_smoking_cessation_therapies_for_the_cardiologist')->name('cvs-smoking-cessation-therapies-for-the-cardiologist');

//diabetes-curriculum
Route::get('/diabetes-introduction-to-ncds-and-burden-of-diabetes', 'DoctorController@diabetes_introduction_to_ncds_and_burden_of_diabetes')->name('diabetes-introduction-to-ncds-and-burden-of-diabetes');
Route::get('/diabetes-pathogenesis-and-diagnosis-of-diabetes-and-prediabetes', 'DoctorController@diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes')->name('diabetes-pathogenesis-and-diagnosis-of-diabetes-and-prediabetes');
Route::get('/diabetes-nutrition-therapy-and-physical-activity', 'DoctorController@diabetes_nutrition_therapy_and_physical_activity')->name('diabetes-nutrition-therapy-and-physical-activity');
Route::get('/diabetes-smoking-and-related-to-incidence-of-diabetes', 'DoctorController@diabetes_smoking_and_related_to_incidence_of_diabetes')->name('diabetes-smoking-and-related-to-incidence-of-diabetes');
Route::get('/diabetes-management-in-children-and-adolescents-with-diabetes', 'DoctorController@diabetes_management_in_children_and_adolescents_with_diabetes')->name('diabetes-management-in-children-and-adolescents-with-diabetes');
Route::get('/diabetes-psychosocial-aspects-of-diabetes', 'DoctorController@diabetes_psychosocial_aspects_of_diabetes')->name('diabetes-psychosocial-aspects-of-diabetes');
Route::get('/diabetes-oral-health-and-diabetes', 'DoctorController@diabetes_oral_health_and_diabetes')->name('diabetes-oral-health-and-diabetes');
Route::get('/diabetes-sexual-health-in-diabetes', 'DoctorController@diabetes_sexual_health_in_diabetes')->name('diabetes-sexual-health-in-diabetes');
Route::get('/diabetes-insulin-therapy', 'DoctorController@diabetes_insulin_therapy')->name('diabetes-insulin-therapy');
Route::get('/diabetes-interactive-case', 'DoctorController@diabetes_interactive_case')->name('diabetes-interactive-case');

//respiratory-curriculum
Route::get('/respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-copd', 'DoctorController@respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_copd')->name('respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-copd');
Route::get('/respiratory-grading-and-grouping-of-copd', 'DoctorController@respiratory_grading_and_grouping_of_copd')->name('respiratory-grading-and-grouping-of-copd');
Route::get('/respiratory-management-of-copd-stable-exacerbation', 'DoctorController@respiratory_management_of_copd_stable_exacerbation')->name('respiratory-management-of-copd-stable-exacerbation');
Route::get('/respiratory-risk-factors-classifications-and-clinical-manifestations-of-lung-cancer', 'DoctorController@respiratory_risk_factors_classifications_and_clinical_manifestations_of_lung_cancer')->name('respiratory-risk-factors-classifications-and-clinical-manifestations-of-lung-cancer');
Route::get('/respiratory-investigation-for-diagnosis-staging-of-lung-cancer', 'DoctorController@respiratory_investigation_for_diagnosis_staging_of_lung_cancer')->name('respiratory-investigation-for-diagnosis-staging-of-lung-cancer');
Route::get('/respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-bronchial-asthma', 'DoctorController@respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_bronchial_asthma')->name('respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-bronchial-asthma');
Route::get('/respiratory-diagnosis-of-bronchial-asthma-history-clinical-examination-spirometry', 'DoctorController@respiratory_diagnosis_of_bronchial_asthma_history_clinical_examination_spirometry')->name('respiratory-diagnosis-of-bronchial-asthma-history-clinical-examination-spirometry');
Route::get('/respiratory-assessment-of-bronchial-asthma-severity-control', 'DoctorController@respiratory_assessment_of_bronchial_asthma_severity_control')->name('respiratory-assessment-of-bronchial-asthma-severity-control');
Route::get('/respiratory-medications-of-bronchial-asthma-pharmacologicalcontroller-reliever-add-on-and-non-pharmacological', 'DoctorController@respiratory_medications_of_bronchial_asthma_pharmacologicalcontroller_reliever_add_on_and_non_pharmacological')->name('respiratory-medications-of-bronchial-asthma-pharmacologicalcontroller-reliever-add-on-and-non-pharmacological');
Route::get('/respiratory-guidelines-of-management-of-stable-asthma-and-exacerbations', 'DoctorController@respiratory_guidelines_of_management_of_stable_asthma_and_exacerbations')->name('respiratory-guidelines-of-management-of-stable-asthma-and-exacerbations');
Route::get('/respiratory-normal-sleep-physiology-definition-risk-factors-and-pathogenesis-of-osa', 'DoctorController@respiratory_normal_sleep_physiology_definition_risk_factors_and_pathogenesis_of_osa')->name('respiratory-normal-sleep-physiology-definition-risk-factors-and-pathogenesis-of-osa');
Route::get('/respiratory-clinical-manifestation-and-scoring-of-sleep-disordered-breathing', 'DoctorController@respiratory_clinical_manifestation_and_scoring_of_sleep_disordered_breathing')->name('respiratory-clinical-manifestation-and-scoring-of-sleep-disordered-breathing');
Route::get('/respiratory-burden-of-osa-on-different-body-system-brain-heart-diabetes-respiratory', 'DoctorController@respiratory_burden_of_osa_on_different_body_system_brain_heart_diabetes_respiratory')->name('respiratory-burden-of-osa-on-different-body-system-brain-heart-diabetes-respiratory');
Route::get('/respiratory-diagnosis-of-osa-interpretation-of-sleep-report', 'DoctorController@respiratory_diagnosis_of_osa_interpretation_of_sleep_report')->name('respiratory-diagnosis-of-osa-interpretation-of-sleep-report');
Route::get('/respiratory-ttt-of-osa-medical-and-surgical', 'DoctorController@respiratory_ttt_of_osa_medical_and_surgical')->name('respiratory-ttt-of-osa-medical-and-surgical');

//miscellaneous-curriculum
Route::get('/miscellaneous-mental-health', 'DoctorController@miscellaneous_mental_health')->name('miscellaneous-mental-health');




//certificate-curriculum
Route::get('/certificate-smoking-cessation', 'DoctorController@certificate_smoking_cessation')->name('certificate-smoking-cessation');
Route::get('/certificate-obesity-and-nutrition', 'DoctorController@certificate_obesity_and_nutrition')->name('certificate-obesity-and-nutrition');
Route::get('/certificate-mental-health', 'DoctorController@certificate_mental_health')->name('certificate-mental-health');
Route::get('/certificate-country-specific-health-issues', 'DoctorController@certificate_country_specific_health_issues')->name('certificate-country-specific-health-issues');
Route::get('/certificate-basics-of-gcp-and-research', 'DoctorController@certificate_basics_of_gcp_and_research')->name('certificate-basics-of-gcp-and-research');
Route::get('/certificate-basics-of-medical-statistics', 'DoctorController@certificate_basics_of_medical_statistics')->name('certificate-basics-of-medical-statistics');
Route::get('/certificate-conflict-resolution-and-basic-communication-skills', 'DoctorController@certificate_conflict_resolution_and_basic_communication_skills')->name('certificate-conflict-resolution-and-basic-communication-skills');
Route::get('/certificate-physical-exercise', 'DoctorController@certificate_physical_exercise')->name('certificate-physical-exercise');
Route::get('/certificate-digital-health', 'DoctorController@certificate_digital_health')->name('certificate-digital-health');




Route::get('/profile',  'HomeController@indextwo')->name('profile');
Route::post('/profile', 'HomeController@update')->name('profile');





















Route::get('/basic-resources', 'DoctorController@basic_management')->name('basic-resources');
Route::get('/diabetes-basic-resources', 'DoctorController@diabetesBasicResources')->name('diabetes-basic-resources');
Route::get('/oncology-basic-resources', 'DoctorController@oncologyBasicResources')->name('oncology-basic-resources');
Route::get('/respiratory-basic-resources', 'DoctorController@respiratoryBasicResources')->name('respiratory-basic-resources');
Route::get('/miscellaneous-basic-resources', 'DoctorController@miscellaneousBasicResources')->name('miscellaneous-basic-resources');
Route::get('/certificate-basic-resources', 'DoctorController@certificateBasicResources')->name('certificate-basic-resources');

Route::get('/cvs-curriculum', 'DoctorController@cvs_curriculum')->name('cvs-curriculum');
Route::get('/diabetes-curriculum', 'DoctorController@diabetes_curriculum')->name('diabetes-curriculum');
Route::get('/respiratory-curriculum', 'DoctorController@respiratory_curriculum')->name('respiratory-curriculum');
Route::get('/miscellaneous-curriculum', 'DoctorController@miscellaneous_curriculum')->name('miscellaneous-curriculum');
Route::get('/certificate-curriculum', 'DoctorController@certificate_curriculum')->name('certificate-curriculum');
Route::get('/oncolcgy-curriculum', 'DoctorController@oncolcgy_curriculum')->name('oncolcgy-curriculum');

Route::post('add', 'AddController@add')->name('add');


//courses-registration
Route::get('/courses-registration', 'DoctorController@create')->name('courses-registration');
Route::post('/courses-registration', 'DoctorController@store')->name('courses-registration');


//confer
Route::get('/confer', 'AddController@index')->name('confer');
Route::get('confer/delete/{id}', 'AddController@destroy')->name('confer.delete');

//ex
Route::get('/exm', 'AddController@exm')->name('exm');
//Route::get('/exmcvs', 'AddController@exmcvs')->name('exmcvs');



Route::get('/comment', 'AddController@comment')->name('comment');
Route::get('comment/delete/{id}', 'AddController@destroyComment')->name('comment.delete');
Route::get('/exam', 'DoctorController@cases')->name('exam');
Route::get('/diabetes-exam', 'DoctorController@diabetesAssessment')->name('diabetes-exam');
Route::get('/respiratory-exam', 'DoctorController@respiratoryAssessment')->name('respiratory-exam');
Route::get('/oncology-exam', 'DoctorController@oncologyAssessment')->name('oncology-exam');
Route::get('/miscellaneous-exam', 'DoctorController@miscellaneousAssessment')->name('miscellaneous-exam');
Route::get('/certificate-exam', 'DoctorController@miscellaneousAssessment')->name('certificate-exam');





Route::get('/questionnaires/create', 'QuestionnaireController@create');
//Route::get('/questionnaires/createcvs', 'QuestionnaireController@create');


Route::post('/questionnaires', 'QuestionnaireController@store');
Route::get('/questionnaires/{questionnaire}', 'QuestionnaireController@show');


Route::get('/questionnaires/{questionnaire}/questions/create', 'QuestionController@create');
Route::post('/questionnaires/{questionnaire}/questions', 'QuestionController@store');
Route::delete('/questionnaires/{questionnaire}/questions/{question}', 'QuestionController@destroy');

Route::get('/surveys/{questionnaire}-{slug}', 'SurveyController@create');
Route::post('/surveys/{questionnaire}-{slug}', 'SurveyController@store');
Route::get('/massage', 'SurveyController@massage')->name('massage');

//add codes
Route::get('/add-codes', 'AddController@addCodes')->name('add-codes');


//dashboard
Route::get('/add', 'HomeController@add')->name('add');
Route::get('users', 'AddController@users')->name('users');

Route::get('/uploads/{id}', 'DoctorController@show');
