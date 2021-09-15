<?php

namespace App\Http\Controllers\API;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use DB;
use App\Code;
use App\Flight;
use App\usersEam;
use App\docScoure;
use App\User;
use App\redeem;
use App\comment_eams;


class AtherApiController extends Controller
{
    public function code(Request $request)
    {

        $validator = $this->validate($request,[
            "code"=>'required',
        ]);
        
        $codes  = DB::select('select numbercode from codes where status	= 0');
        $code = array();
        foreach ($codes as $s) {
            array_push($code,$s->numbercode);
        };
            if (in_array($request->code,$code))
            {
                //Code::where('numbercode', $request->code)->update(array('status' => 1));
                $status = true;
                return response()->json(['status'=> $status]);
            }
            else
            {
                $status = false;
                return response()->json(['status'=> $status]);
            };
    }

    public function medical()
    {
        $medical =  DB::select('select * from cat');
        return response()->json($medical);
    }



//categoriesofdoctors
    public function cvs()
    {
        $cvs =  DB::select('select * from categoriesofdoctors');
        return response()->json($cvs);
    }

    public function diabetes()
    {
        $diabetes =  DB::select('select * from categoriesofdoctors');
        return response()->json($diabetes);
    }

    public function respiratory()
    {
        $respiratory =  DB::select('select * from categoriesofdoctors');
        return response()->json($respiratory);
    }

    public function oncology()
    {
        $oncology =  DB::select('select * from categoriesofdoctors');
        return response()->json($oncology);
    }

    public function miscellaneous()
    {
        $miscellaneous =  DB::select('select * from categoriesofdoctors');
        return response()->json($miscellaneous);
    }




//basic resources
    public function basic_resources()
    {
        $basic_resources =  DB::select('select * from basic_managements');
        return response()->json($basic_resources);
    }

    public function diabetesBasicResources()
    {
        $diabetesBasicResources =  DB::select('select * from basic_managements');
        return response()->json($diabetesBasicResources);
    }

    public function respiratoryBasicResources()
    {
        $respiratoryBasicResources =  DB::select('select * from basic_managements');
        return response()->json($respiratoryBasicResources);
    }

    public function oncologyBasicResources()
    {
        $oncologyBasicResources =  DB::select('select * from basic_managements');
        return response()->json($oncologyBasicResources);
    }

    public function miscellaneousBasicResources()
    {
        $miscellaneousBasicResources =  DB::select('select * from basic_managements');
        return response()->json($miscellaneousBasicResources);
    }







//books
    public function cvs_books()
    {
        $books =  Flight::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','1')->where('basicmanagements_id','=','1');
        return response()->json($books);
    }

    public function diabetes_books()
    {
 
        $diabetes_books =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 1');
        return response()->json($diabetes_books);
    }

    public function respiratory_books()
    {
        $respiratory_books =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 1');
        return response()->json($respiratory_books);
    }

    public function oncolcgy_books()
    {
        $oncolcgy_books = DB::select('select * from flights where cat_id = 4 and categoriesofdoctors_id = 1 and basicmanagements_id = 1');
        return response()->json($oncolcgy_books);
    }

    public function miscellaneous_books()
    {
        $miscellaneous_books =  DB::select('select * from flights where cat_id = 5 and categoriesofdoctors_id = 1 and basicmanagements_id = 1');
        return response()->json($miscellaneous_books);
    }




//curriculum
    public function cvs_curriculum()
    {
        $cvs_curriculum =   DB::select('select * from cvscurriculums');
        return response()->json($cvs_curriculum);
    }

    public function diabetes_curriculum()
    {
        $diabetes_curriculum =   DB::select('select * from diabetescurriculums');
        return response()->json($diabetes_curriculum);
    }

    public function respiratory_curriculum()
    {
        $respiratory_curriculum =   DB::select('select * from respiratorycurriculums');
        return response()->json($respiratory_curriculum);
    }

    public function miscellaneous_curriculum()
    {
        $miscellaneous_curriculum =   DB::select('select * from miscellaneouscurriculums');
        return response()->json($miscellaneous_curriculum);
    }

    public function oncolcgy_curriculum()
    {
        $oncolcgy_curriculum =   DB::select('select * from oncolcgycurriculums');
        return response()->json($oncolcgy_curriculum);
    }




   //assessment
    public function cases()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','1')->where('categoriesofdoctors_id','=','5');
        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        return response()->json(['questionnaires'=>$questionnaires,'scoure'=>$scoure]);
    }

 

    public function diabetesAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','2')->where('categoriesofdoctors_id','=','5');
        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        return response()->json(['questionnaires'=>$questionnaires,'scoure'=>$scoure]);
    }

  

    public function respiratoryAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','3')->where('categoriesofdoctors_id','=','5');
        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        return response()->json(['questionnaires'=>$questionnaires,'scoure'=>$scoure]);
    }

    public function oncologyAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','4')->where('categoriesofdoctors_id','=','5');
        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        return response()->json(['questionnaires'=>$questionnaires,'scoure'=>$scoure]);
    }

    public function miscellaneousAssessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','5')->where('categoriesofdoctors_id','=','5');
        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        return response()->json(['questionnaires'=>$questionnaires,'scoure'=>$scoure]);
    }

    public function assessment()
    {
        $questionnaires = \App\Questionnaire::all()->where('cat_id','=','6');
        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        return response()->json(['questionnaires'=>$questionnaires,'scoure'=>$scoure]);
    }
////////////////////////////////////////////////////////////////////////////////////////////////////

public function clinical_scenarios()
{
    $clinical_scenarios =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 2');
    return response()->json($clinical_scenarios);
}

public function diabetes_clinical_scenarios()
{
    $diabetes_clinical_scenarios =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 2');
    return response()->json($diabetes_clinical_scenarios);
}

public function respiratory_clinical_scenarios()
{
    $respiratory_clinical_scenarios =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 2');
    return response()->json($respiratory_clinical_scenarios);
}

public function oncology_clinical_scenarios()
{
    $oncology_clinical_scenarios =  DB::select('select * from flights where cat_id = 4 and categoriesofdoctors_id = 2');
    return response()->json($oncology_clinical_scenarios);
}

public function miscellaneous_clinical_scenarios()
{
    $miscellaneous_clinical_scenarios =  DB::select('select * from flights where cat_id = 5 and categoriesofdoctors_id = 2');
    return response()->json($miscellaneous_clinical_scenarios);
}

public function updates_news()
{
    $updates_news =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 4');
    return response()->json($updates_news);
}

public function diabetes_updates_news()
{
    $diabetes_updates_news =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 4');
    return response()->json($diabetes_updates_news);
}

public function respiratory_updates_news()
{
    $respiratory_updates_news =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 4');
    return response()->json($respiratory_updates_news);
}

public function oncology_updates_news()
{
    $oncology_updates_news =  DB::select('select * from flights where cat_id = 4 and categoriesofdoctors_id = 4');
    return response()->json($oncology_updates_news);
}

public function miscellaneous_updates_news()
{
    $miscellaneous_updates_news =  DB::select('select * from flights where cat_id = 5 and categoriesofdoctors_id = 4');
    return response()->json($miscellaneous_updates_news);
}

public function guidelines()
{
    $guidelines =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 3');
    return response()->json($guidelines);
}

public function diabetes_guidelines()
{
    $diabetes_guidelines =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 3');
    return response()->json($diabetes_guidelines);
}

public function respiratory_guidelines()
{
    $respiratory_guidelines =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 3');
    return response()->json($respiratory_guidelines);
}

public function oncology_guidelines()
{
    $oncology_guidelines =  DB::select('select * from flights where cat_id = 4 and categoriesofdoctors_id = 3');
    return response()->json($oncology_guidelines);
}

public function miscellaneous_guidelines()
{
    $miscellaneous_guidelines =  DB::select('select * from flights where cat_id = 5 and categoriesofdoctors_id = 3');
    return response()->json($miscellaneous_guidelines);
}

public function drug_index()
{
    $drug_index =  DB::select('select * from flights where cat_id = 8');
    return response()->json($drug_index);
}


//cvs-curriculum
public function cvs_introduction_to_ncds_and_burden_of_cv_diseases()
{
    $cvs_introduction_to_ncds_and_burden_of_cv_diseases =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 1');
    return response()->json($cvs_introduction_to_ncds_and_burden_of_cv_diseases);
}

public function cvs_hypertension()
{
    $cvs_hypertension =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 2');
    return response()->json($cvs_hypertension);
}

public function cvs_risk_assessment_in_hypertension()
{
    $cvs_risk_assessment_in_hypertension =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 3');
    return response()->json($cvs_risk_assessment_in_hypertension);
}

public function cvs_interactive_case()
{
    $cvs_interactive_case =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 4');
    return response()->json($cvs_interactive_case);
}

public function cvs_latest_guidelines_of_hypertension()
{
    $cvs_latest_guidelines_of_hypertension =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 5');
    return response()->json($cvs_latest_guidelines_of_hypertension);
}

public function cvs_atherosclerosis()
{
    $cvs_atherosclerosis =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 6');
    return response()->json($cvs_atherosclerosis);
}

public function cvs_cholesterol()
{
    $cvs_cholesterol =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 7');
    return response()->json($cvs_cholesterol);
}

public function cvs_dietary_and_life_style_recommendations()
{
    $cvs_dietary_and_life_style_recommendations =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 8');
    return response()->json($cvs_dietary_and_life_style_recommendations);
}

public function cvs_drug_therapy_overview()
{
    $cvs_drug_therapy_overview =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 9');
    return response()->json($cvs_drug_therapy_overview);
}

public function cvs_managing_cholesterol_interactive_case()
{
    $cvs_managing_cholesterol_interactive_case =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 10');
    return response()->json($cvs_managing_cholesterol_interactive_case);
}

public function cvs_diabetes_for_the_cardiologist()
{
    $cvs_diabetes_for_the_cardiologist =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 11');
    return response()->json($cvs_diabetes_for_the_cardiologist);
}

public function cvs_smoking_and_heart_diseases()
{
    $cvs_smoking_and_heart_diseases =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 12');
    return response()->json($cvs_smoking_and_heart_diseases);
}

public function cvs_smoking_cessation_therapies_for_the_cardiologist()
{
    $cvs_smoking_cessation_therapies_for_the_cardiologist =  DB::select('select * from flights where cat_id = 1 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and cvscurriculums_id = 13');
    return response()->json($cvs_smoking_cessation_therapies_for_the_cardiologist);
}


//diabetes-curriculum
public function diabetes_introduction_to_ncds_and_burden_of_diabetes()
{
    $diabetes_introduction_to_ncds_and_burden_of_diabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 1');
    return response()->json($diabetes_introduction_to_ncds_and_burden_of_diabetes);
}

public function diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes()
{
    $diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 2');
    return response()->json($diabetes_pathogenesis_and_diagnosis_of_diabetes_and_prediabetes);
}

public function diabetes_nutrition_therapy_and_physical_activity()
{
    $diabetes_nutrition_therapy_and_physical_activity =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 3');
    return response()->json($diabetes_nutrition_therapy_and_physical_activity);
}

public function diabetes_smoking_and_related_to_incidence_of_diabetes()
{
    $diabetes_smoking_and_related_to_incidence_of_diabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 4');
    return response()->json($diabetes_smoking_and_related_to_incidence_of_diabetes);
}

public function diabetes_management_in_children_and_adolescents_with_diabetes()
{
    $diabetes_management_in_children_and_adolescents_with_diabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 5');
    return response()->json($diabetes_management_in_children_and_adolescents_with_diabetes);
}

public function diabetes_psychosocial_aspects_of_diabetes()
{
    $diabetes_psychosocial_aspects_of_diabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 6');
    return response()->json($diabetes_psychosocial_aspects_of_diabetes);
}

public function diabetes_oral_health_and_diabetes()
{
    $diabetes_oral_health_and_diabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 7');
    return response()->json($diabetes_oral_health_and_diabetes);
}

public function diabetes_sexual_health_in_diabetes()
{
    $diabetes_sexual_health_in_diabetes =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 8');
    return response()->json($diabetes_sexual_health_in_diabetes);
}

public function diabetes_insulin_therapy()
{
    $diabetes_insulin_therapy =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 9');
    return response()->json($diabetes_insulin_therapy);
}

public function diabetes_interactive_case()
{
    $diabetes_interactive_case =  DB::select('select * from flights where cat_id = 2 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and diabetescurriculums_id = 10');
    return response()->json($diabetes_interactive_case);
}

//respiratory-curriculum
public function respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_copd()
{
    $respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_copd =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 1');
    return response()->json($respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_copd);
}

public function respiratory_grading_and_grouping_of_copd()
{
    $respiratory_grading_and_grouping_of_copd =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 2');
    return response()->json($respiratory_grading_and_grouping_of_copd);
}

public function respiratory_management_of_copd_stable_exacerbation()
{
    $respiratory_management_of_copd_stable_exacerbation =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 3');
    return response()->json($respiratory_management_of_copd_stable_exacerbation);
}

public function respiratory_risk_factors_classifications_and_clinical_manifestations_of_lung_cancer()
{
    $respiratory_risk_factors_classifications_and_clinical_manifestations_of_lung_cancer =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 4');
    return response()->json($respiratory_risk_factors_classifications_and_clinical_manifestations_of_lung_cancer);
}

public function respiratory_investigation_for_diagnosis_staging_of_lung_cancer()
{
    $respiratory_investigation_for_diagnosis_staging_of_lung_cancer =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 5');
    return response()->json($respiratory_investigation_for_diagnosis_staging_of_lung_cancer);
}

public function respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_bronchial_asthma()
{
    $respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_bronchial_asthma =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 6');
    return response()->json($respiratory_definition_pathogenesis_pathophysiology_risk_factors_of_bronchial_asthma);
}

public function respiratory_diagnosis_of_bronchial_asthma_history_clinical_examination_spirometry()
{
    $respiratory_diagnosis_of_bronchial_asthma_history_clinical_examination_spirometry =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 7');
    return response()->json($respiratory_diagnosis_of_bronchial_asthma_history_clinical_examination_spirometry);
}

public function respiratory_assessment_of_bronchial_asthma_severity_control()
{
    $respiratory_assessment_of_bronchial_asthma_severity_control =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 8');
    return response()->json($respiratory_assessment_of_bronchial_asthma_severity_control);
}

public function respiratory_medications_of_bronchial_asthma_pharmacologicalcontroller_reliever_add_on_and_non_pharmacological()
{
    $respiratory_medications_of_bronchial_asthma_pharmacologicalcontroller_reliever_add_on_and_non_pharmacological =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 9');
    return response()->json($respiratory_medications_of_bronchial_asthma_pharmacologicalcontroller_reliever_add_on_and_non_pharmacological);
}

public function respiratory_guidelines_of_management_of_stable_asthma_and_exacerbations()
{
    $respiratory_guidelines_of_management_of_stable_asthma_and_exacerbations =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 10');
    return response()->json($respiratory_guidelines_of_management_of_stable_asthma_and_exacerbations);
}

public function respiratory_normal_sleep_physiology_definition_risk_factors_and_pathogenesis_of_osa()
{
    $respiratory_normal_sleep_physiology_definition_risk_factors_and_pathogenesis_of_osa =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 11');
    return response()->json($respiratory_normal_sleep_physiology_definition_risk_factors_and_pathogenesis_of_osa);
}

public function respiratory_clinical_manifestation_and_scoring_of_sleep_disordered_breathing()
{
    $respiratory_clinical_manifestation_and_scoring_of_sleep_disordered_breathing =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 12');
    return response()->json($respiratory_clinical_manifestation_and_scoring_of_sleep_disordered_breathing);
}

public function respiratory_burden_of_osa_on_different_body_system_brain_heart_diabetes_respiratory()
{
    $respiratory_burden_of_osa_on_different_body_system_brain_heart_diabetes_respiratory =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 13');
    return response()->json($respiratory_burden_of_osa_on_different_body_system_brain_heart_diabetes_respiratory);
}

public function respiratory_diagnosis_of_osa_interpretation_of_sleep_report()
{
    $respiratory_diagnosis_of_osa_interpretation_of_sleep_report =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 14');
    return response()->json($respiratory_diagnosis_of_osa_interpretation_of_sleep_report);
}

public function respiratory_ttt_of_osa_medical_and_surgical()
{
    $respiratory_ttt_of_osa_medical_and_surgical =  DB::select('select * from flights where cat_id = 3 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and respiratorycurriculums_id = 15');
    return response()->json($respiratory_ttt_of_osa_medical_and_surgical);
}

//miscellaneous-curriculum
public function miscellaneous_mental_health()
{
    $miscellaneous_mental_health =  DB::select('select * from flights where cat_id = 5 and categoriesofdoctors_id = 1 and basicmanagements_id = 2 and miscellaneouscurriculums_id = 3');
    return response()->json($miscellaneous_mental_health);
}










///////////////////////////////////////////////////////////////////////////////
    public function surveys(\App\Questionnaire $questionnaire, $slug)
    {
        $questionnaire->load('questions.answers');
        return response()->json($questionnaire);
    }
    
    public function addSurveys(\App\Questionnaire $questionnaire)
    {

        $data = request()->validate([
            'responses.*.answer_id' => 'required',
            'comment' => 'required',
        ]);

        $res  = DB::select('select number_answer from questions where questionnaire_id =' . $questionnaire->id);
        $Canswer = array();
        foreach ($res as $r) {
            array_push($Canswer,$r->number_answer);
        };
        
        $resTwo  = $data['responses'];
        $answer = array();
        foreach ($resTwo as $i => $item) {
            array_push($answer,$resTwo[$i]['answer_id']);
        };
        

        $r = array_map(function($Canswer, $answer) {
        return $Canswer === $answer;
        }, $Canswer, $answer);

        $Ranswer = count(array_filter($r));
        $result = count($Canswer) - $Ranswer;

        $final = count($Canswer) - $result;
        
        $check  = usersEam::select('questionnaire_id')->where('user_id',Auth::id())->where('questionnaire_id','=',$questionnaire->id)->get();

        if(count($check) == 1){
             return redirect()->route('assessment')->with('success','This exam has been completed');
        }
        
        $usersEam = usersEam::create([
            "user_id" => Auth::id(),
            "questionnaire_id" => $questionnaire->id
        ]);

        $docScoure = docScoure::create([
            "doctor_id" => Auth::id(),
            "scoure" => $final
        ]);

        $scoure = DB::table('doc_scoures')->where('doctor_id','=', Auth::id())->sum('scoure');
        User::where('id', Auth::id())->update(['scoure' => $scoure]);

        $comment_eams = comment_eams::create([
            "first_name" => Auth::user()->first_name,
            "questionnaire_title" => $questionnaire->title,
            "comment" => $data['comment']
        ]);

        $success = 'Thank You' . $final . '/' . count($Canswer);
        return response()->json($success);
    }


    public function courses_registration(Request $request)
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
            'email' => ['required', 'string', 'email', 'max:255'],
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
        $success = 'The registration is done';
        return response()->json($success);
    }

    
    public function redeemyourpoints()
    {
        $users_doc = User::orderBy('scoure', 'DESC')->where('user_type',1)->get();
        return response()->json($users_doc);
    }
    
    //eam
    public function caseEam(\App\Questionnaire $questionnaire)
    {
         $case = usersEam::all()->where('user_id','=',Auth::id())->where('questionnaire_id','=',$questionnaire->id);
        $caseC = count($case);
        return response()->json($caseC);
    }
    
    
    //search
    public function search()
    {
        $doctors = User::where('first_name', 'like' ,  '%' . request('search') . '%' )->where('user_type','1')->get();
        return response()->json($doctors);
    }
    
    //contact us
    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        
        Mail::to('info@egncda.com')->send(new ContactFormMail($data));  
        return response()->json([
            'message' => 'Thank You!'
        ]);
    }
    
    
}
