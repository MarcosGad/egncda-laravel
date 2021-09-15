<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Flight;
use App\redeem;
use Illuminate\Support\Facades\Auth;

class DoctorController extends Controller
{

    public function __construct()
    {
        $this->middleware('doc');
    }

    public function show($id)
    {
        $data= Flight::find($id);
        return view('details',compact('data'));
    }

    public function medical()
    {
        return view('medical')->with('cats', DB::select('select * from cat'));
    }

    public function certificate()
    {
        return view('certificate')->with('cats', DB::select('select * from cat'));
    }

    public function social()
    {
        return view('social');
    }

    public function cvs()
    {
        return view('cvs')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'));
    }

    public function basic_management()
    {
        return view('basic-management')
        ->with('basicmanagements', DB::select('select * from basic_managements'));
        
    }

    public function cvs_curriculum()
    {
        return view('cvs-curriculum')
        ->with('cvscurriculums', DB::select('select * from cvscurriculums'));
    }

    public function diabetes_curriculum()
    {
        return view('diabetes-curriculum')
        ->with('diabetescurriculums', DB::select('select * from diabetescurriculums'));
        
    }

    public function respiratory_curriculum()
    {
        return view('respiratory-curriculum')
        ->with('respiratorycurriculums', DB::select('select * from respiratorycurriculums'));
        
    }

    public function miscellaneous_curriculum()
    {
        return view('miscellaneous-curriculum')
        ->with('miscellaneouscurriculums', DB::select('select * from miscellaneouscurriculums'));
        
    }

     public function certificate_curriculum()
    {
        return view('certificate-curriculum')
        ->with('miscellaneouscurriculums', DB::select('select * from miscellaneouscurriculums'));
        
    }

    public function oncolcgy_curriculum()
    {
        return view('oncolcgy-curriculum')
        ->with('oncolcgycurriculums', DB::select('select * from oncolcgycurriculums'));
        
    }

    public function cvs_books()
    {
        return view('cvs-books')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1'));
    }

    public function diabetes_books()
    {
        return view('diabetes-books')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1'));
    }

    public function respiratory_books()
    {
        return view('respiratory-books')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1'));
    }

    public function oncolcgy_books()
    {
        return view('oncolcgy-books')
        ->with('books', Flight::all()->where('cat_id','=','4')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1'));   
    }

    public function miscellaneous_books()
    {
        return view('miscellaneous-books')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1'));
    }

    public function certificate_books()
    {
        return view('certificate-books')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1'));
    }

    
    public function clinical_scenarios()
    {
        return view('clinical-scenarios')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','2'));
    }

    public function diabetes_clinical_scenarios()
    {
        return view('diabetes-clinical-scenarios')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','2'));
    }

    public function respiratory_clinical_scenarios()
    {
        return view('respiratory-clinical-scenarios')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','2'));
    }

    public function oncology_clinical_scenarios()
    {
        return view('oncology-clinical-scenarios')
        ->with('books', Flight::all()->where('cat_id','=','4')->where('categoriesofdoctors_id','=','2'));
    }

    public function miscellaneous_clinical_scenarios()
    {
        return view('miscellaneous-clinical-scenarios')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','2'));
    }

    public function certificate_clinical_scenarios()
    {
        return view('miscellaneous-clinical-scenarios')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','2'));
    }


      
    public function updates_news()
    {
        return view('updates-news')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','4'));
    }

    public function diabetes_updates_news()
    {
        return view('diabetes-updates-news')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','4'));
    }

    public function respiratory_updates_news()
    {
        return view('respiratory-updates-news')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','4'));
    }

    public function oncology_updates_news()
    {
        return view('oncology-updates-news')
        ->with('books', Flight::all()->where('cat_id','=','4')->where('categoriesofdoctors_id','=','4'));
    }

    public function miscellaneous_updates_news()
    {
        return view('miscellaneous-updates-news')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','4'));
    }

    public function certificate_updates_news()
    {
        return view('miscellaneous-updates-news')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','4'));
    }


    public function guidelines()
    {
        return view('guidelines')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','3'));
    }

    public function diabetes_guidelines()
    {
        return view('diabetes-guidelines')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','3'));
    }

    public function respiratory_guidelines()
    {
        return view('respiratory-guidelines')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','3'));
    }

    public function oncology_guidelines()
    {
        return view('oncology-guidelines')
        ->with('books', Flight::all()->where('cat_id','=','4')->where('categoriesofdoctors_id','=','3'));
    }

    public function miscellaneous_guidelines()
    {
        return view('miscellaneous-guidelines')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','3'));
    }

    public function certificate_guidelines()
    {
        return view('miscellaneous-guidelines')
        ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','3'));
    }


    public function drug_index()
    {
        return view('drug-index')
        ->with('books', Flight::all()->where('cat_id','=','8'));
    }

    //cvs-curriculum

    public function cvs_introduction_to_ncds_and_burden_of_cv_diseases()
    {
        return view('cvs-introduction-to-ncds-and-burden-of-cv-diseases')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','1'));
    }

    public function cvs_hypertension()
    {
        return view('cvs-hypertension')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','2'));
    }

    
    public function cvs_risk_assessment_in_hypertension()
    {
        return view('cvs-risk-assessment-in-hypertension')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','3'));
    }

    public function cvs_interactive_case()
    {
        return view('cvs-interactive-case')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','4'));
    }

    public function cvs_latest_guidelines_of_hypertension()
    {
        return view('cvs-latest-guidelines-of-hypertension')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','5'));
    }

    public function cvs_atherosclerosis()
    {
        return view('cvs-atherosclerosis')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','6'));
    }

    public function cvs_cholesterol()
    {
        return view('cvs-cholesterol')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','7'));
    }

    public function cvs_dietary_and_life_style_recommendations()
    {
        return view('cvs-cholesterol')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','8'));
    }

    public function cvs_drug_therapy_overview()
    {
        return view('cvs-drug-therapy-overview')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','9'));
    }

    public function cvs_managing_cholesterol_interactive_case()
    {
        return view('cvs-managing-cholesterol-interactive-case')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','10'));
    }

    public function cvs_diabetes_for_the_cardiologist()
    {
        return view('cvs-managing-cholesterol-interactive-case')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','11'));
    }

    public function cvs_smoking_and_heart_diseases()
    {
        return view('cvs-smoking-and-heart-diseases')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','12'));
    }

    public function cvs_smoking_cessation_therapies_for_the_cardiologist()
    {
        return view('cvs-smoking-cessation-therapies-for-the-cardiologist')
        ->with('books', Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('cvscurriculums_id','=','13'));
    }

    //diabetes-curriculum

    public function diabetes_introduction_to_ncds_and_burden_of_diabetes()
    {
        return view('diabetes-introduction-to-ncds-and-burden-of-diabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','1'));
    }

    public function diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes()
    {
        return view('diabetes-pathogenesis-and-diagnosis-of-diabetes-and-prediabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','2'));
    }

    public function diabetes_nutrition_therapy_and_physical_activity()
    {
        return view('diabetes-nutrition-therapy-and-physical-activity')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','3'));
    }

    public function diabetes_smoking_and_related_to_incidence_of_diabetes()
    {
        return view('diabetes-smoking-and-related-to-incidence-of-diabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','4'));
    }

    public function diabetes_management_in_children_and_adolescents_with_diabetes()
    {
        return view('diabetes-management-in-children-and-adolescents-with-diabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','5'));
    }

    public function diabetes_psychosocial_aspects_of_diabetes()
    {
        return view('diabetes-psychosocial-aspects-of-diabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','6'));
    }

    public function diabetes_oral_health_and_diabetes()
    {
        return view('diabetes-oral-health-and-diabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','7'));
    }

    public function diabetes_sexual_health_in_diabetes()
    {
        return view('diabetes-sexual-health-in-diabetes')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','8'));
    }

    public function diabetes_insulin_therapy()
    {
        return view('diabetes-insulin-therapy')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','9'));
    }

    public function diabetes_interactive_case()
    {
        return view('diabetes-interactive-case')
        ->with('books', Flight::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('diabetescurriculums_id','=','10'));
    }

    //respiratory-curriculum

    public function respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_copd()
    {
        return view('respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-copd')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','1'));
    }
  
    public function respiratory_grading_and_grouping_of_copd()
    {
        return view('respiratory-grading-and-grouping-of-copd')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','2'));
    }

    public function respiratory_management_of_copd_stable_exacerbation()
    {
        return view('respiratory-management-of-copd-stable-exacerbation')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','3'));
    }

    public function respiratory_risk_factors_classifications_and_clinical_manifestations_of_lung_cancer()
    {
        return view('respiratory-risk-factors-classifications-and-clinical-manifestations-of-lung-cancer')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','4'));
    }

    public function respiratory_investigation_for_diagnosis_staging_of_lung_cancer()
    {
        return view('respiratory-investigation-for-diagnosis-staging-of-lung-cancer')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','5'));
    }
 
    public function respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_bronchial_asthma()
    {
        return view('respiratory-definition-pathogenesis-pathophysiology-risk-factors-of-bronchial-asthma')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','6'));
    }

    public function respiratory_diagnosis_of_bronchial_asthma_history_clinical_examination_spirometry()
    {
        return view('respiratory-diagnosis-of-bronchial-asthma-history-clinical-examination-spirometry')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','7'));
    }

    public function respiratory_assessment_of_bronchial_asthma_severity_control()
    {
        return view('respiratory-assessment-of-bronchial-asthma-severity-control')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','8'));
    }

    public function respiratory_medications_of_bronchial_asthma_pharmacologicalcontroller_reliever_add_on_and_non_pharmacological()
    {
        return view('respiratory-medications-of-bronchial-asthma-pharmacologicalcontroller-reliever-add-on-and-non-pharmacological')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','9'));
    }
    
    public function respiratory_guidelines_of_management_of_stable_asthma_and_exacerbations()
    {
        return view('respiratory-guidelines-of-management-of-stable-asthma-and-exacerbations')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','10'));
    }

    public function respiratory_normal_sleep_physiology_definition_risk_factors_and_pathogenesis_of_osa()
    {
        return view('respiratory-normal-sleep-physiology-definition-risk-factors-and-pathogenesis-of-osa')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','11'));
    }

    public function respiratory_clinical_manifestation_and_scoring_of_sleep_disordered_breathing()
    {
        return view('respiratory-clinical-manifestation-and-scoring-of-sleep-disordered-breathing')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','12'));
    }
  
    public function respiratory_burden_of_osa_on_different_body_system_brain_heart_diabetes_respiratory()
    {
        return view('respiratory-burden-of-osa-on-different-body-system-brain-heart-diabetes-respiratory')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','13'));
    }

    public function respiratory_diagnosis_of_osa_interpretation_of_sleep_report()
    {
        return view('respiratory-diagnosis-of-osa-interpretation-of-sleep-report')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','14'));
    }

    public function respiratory_ttt_of_osa_medical_and_surgical()
    {
        return view('respiratory-ttt-of-osa-medical-and-surgical')
        ->with('books', Flight::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('respiratorycurriculums_id','=','15'));
    }

//miscellaneous-curriculum

public function miscellaneous_mental_health()
{
    return view('miscellaneous-mental-health')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','3'));
}

//certificate-curriculum

public function certificate_smoking_cessation()
{
    return view('certificate-smoking-cessation')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','1'));
}

public function certificate_obesity_and_nutrition()
{
    return view('certificate-obesity-and-nutrition')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','2'));
}

public function certificate_mental_health()
{
    return view('certificate-mental-health')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','3'));
}

public function certificate_country_specific_health_issues()
{
    return view('certificate-country-specific-health-issues')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','4'));
}

public function certificate_basics_of_gcp_and_research()
{
    return view('certificate-basics-of-gcp-and-research')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','5'));
}

public function certificate_basics_of_medical_statistics()
{
    return view('certificate-basics-of-medical-statistics')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','5'));
}

public function certificate_conflict_resolution_and_basic_communication_skills()
{
    return view('certificate-conflict-resolution-and-basic-communication-skills')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','6'));
}

public function certificate_physical_exercise()
{
    return view('certificate-physical-exercise')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','7'));
}

public function certificate_digital_health()
{
    return view('certificate-digital-health')
    ->with('books', Flight::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','2')->where('miscellaneouscurriculums_id','=','8'));
}























    
    public function endocrinology()
    {
        return view('endocrinology');
    }

    public function respiratory()
    {
        return view('respiratory');
    }

    public function oncology()
    {
        return view('oncology');
    }

    public function cases()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','5');
        return view('exam', compact('questionnaires'))
        ->with('scoure',DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure'));
    }
    
    public function create()
    {
        return view('courses-registration');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            "first_name"=>['required', 'string', 'max:255'],
            "middle_name"=>['required', 'string', 'max:255'],
            "last_name"=>['required', 'string', 'max:255'],
            "mr_mrs"=>['required', 'string', 'max:255'],
            "dr"=>['required', 'string', 'max:255'],
            "prof"=>['required', 'string', 'max:255'],
            "nationality"=>['required', 'string', 'max:255'],
            "passport"=>['required', 'string', 'max:255'],
            "affiliation"=>['required', 'string', 'max:255'],
            "mobile_no"=>['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            "type_of_attendance"=>['required', 'string', 'max:255'],
            "type_of_contribution_submitted"=>['required', 'string', 'max:255'],
            "title_of_the_contribution"=>['required', 'string', 'max:255'],
            "conference_fee"=>['required', 'string', 'max:255'],
            "conference_dinner"=>['required', 'string', 'max:255'],
            "total_amount"=>['required', 'string', 'max:255'],
            "money_order_issued_on"=>['required', 'string', 'max:255'],
            "money_order_issued_to"=>['required', 'string', 'max:255'],
        ]);

        $redeem = redeem::create([
            "first_name" => $request->first_name,
            "middle_name" => $request->middle_name, 
            "last_name" => $request->last_name, 
            "mr_mrs" => $request->mr_mrs, 
            "dr" => $request->dr, 
            "prof" => $request->prof, 
            "nationality" => $request->nationality, 
            "passport" => $request->passport, 
            "affiliation" => $request->affiliation, 
            "mobile_no" => $request->mobile_no, 
            "email" => $request->email, 
            "type_of_attendance" => $request->type_of_attendance, 
            "type_of_contribution_submitted" => $request->type_of_contribution_submitted, 
            "title_of_the_contribution" => $request->title_of_the_contribution, 
            "conference_fee" => $request->conference_fee, 
            "conference_dinner" => $request->conference_dinner, 
            "total_amount" => $request->total_amount, 
            "money_order_issued_on" => $request->money_order_issued_on, 
            "money_order_issued_to" => $request->money_order_issued_to, 
              
        ]);
        return redirect()->back();
    }

    public function diabetesDoctor()
    {
        return view('diabetes-doctor')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'));
    }

    public function respiratoryDoctor()
    {
        return view('respiratory-doctor')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'));
    }

    public function oncologyDoctor()
    {
        return view('oncology-doctor')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'));
    }

    public function miscellaneousDoctor()
    {
        return view('miscellaneous-doctor')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'));
    }

    public function miscellaneousDoctorCertificate()
    {
        return view('certificate-miscellaneous')->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'));
    }

    public function diabetesBasicResources()
    {
        return view('diabetes-basic-resources')
        ->with('basicmanagements', DB::select('select * from basic_managements'));
        
    }
 
    public function respiratoryBasicResources()
    {
        return view('respiratory-basic-resources')
        ->with('basicmanagements', DB::select('select * from basic_managements'));
        
    }

    public function oncologyBasicResources()
    {
        return view('oncology-basic-resources')
        ->with('basicmanagements', DB::select('select * from basic_managements'));
        
    }

    public function miscellaneousBasicResources()
    {
        return view('miscellaneous-basic-resources')
        ->with('basicmanagements', DB::select('select * from basic_managements'));
        
    }


    public function certificateBasicResources()
    {
        return view('certificate-basic-resources')
        ->with('basicmanagements', DB::select('select * from basic_managements'));
        
    }


    public function diabetesAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','5');
        return view('diabetes-exam', compact('questionnaires'))
        ->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'))
        ->with('scoure',DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure'));
        
    }

    public function respiratoryAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','5');
        return view('respiratory-exam', compact('questionnaires'))
        ->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'))
        ->with('scoure',DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure'));
    }

    public function oncologyAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','4')->where('categoriesofdoctors_id','=','5');
        return view('oncology-exam', compact('questionnaires'))
        ->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'))
        ->with('scoure',DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure'));
    }

    public function miscellaneousAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','5');
        return view('miscellaneous-exam', compact('questionnaires'))
        ->with('categoriesofdoctors', DB::select('select * from categoriesofdoctors'))
        ->with('scoure',DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure'));
    }


    public function assessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','6');
        return view('assessment', compact('questionnaires'))
        ->with('scoure',DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure'));
    }
    



    

}
