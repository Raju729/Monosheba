/**
 * Created by Raju on 1/16/2018.
 */
// $(document).ready(function(){
//     // $("#err_for_tid").hide();
//     // $("#err_for_tfname").hide();
//     // $("#err_for_tlname").hide();
//     // $("#err_for_tpass").hide();
//     // $("#err_for_tgender").hide();
//     // $("#err_for_treligion").hide();
//     // $("#err_for_tdob").hide();
//     // $("#err_for_tage").hide();
//     // $("#err_for_tcontact").hide();
//     // $("#err_for_timg").hide();
//     // $("#err_for_tpaddr").hide();
//     // $("#err_for_tpraddr").hide();
//
//
//     $('#first_name').on('input', function() {
//             check_first_name();
//
//     });
//
//     $('#teacher_id').on('input', function() {
//         check_teacher_id();
//
//     });
//
//     $('#last_name').on('input', function() {
//         check_last_name();
//
//     });
//
//     $('#password').on('input', function() {
//         check_password();
//
//     });
//
//     $('#gender').on('input', function() {
//         check_gender();
//
//     });
//
//     $('#religion').on('input', function() {
//         check_religion();
//
//     });
//
//     $('#contact').on('input', function() {
//         check_contact();
//
//     });
//
//     $('#datepicker').on('input', function() {
//         check_datepicker();
//
//     });
//     $('#image').on('input', function() {
//         check_image();
//
//     });
//     $('#age').on('input', function() {
//         check_age();
//
//     });
//     $('#present_address').on('input', function() {
//         check_present_address();
//
//     });
//     $('#permanent_address').on('input', function() {
//         check_permanent_address();
//
//     });
//
//         function check_first_name(){
//             if($('#first_name').val()==''){
//                 $('#err_for_tfname').html("Require First name");
//                 // $('#first_name').css("border-color", "red");
//                 $('#err_for_tfname').show();
//                 return false;
//             }
//             else{
//                 var nameformet=/^[a-zA-Z\s]+$/;
//                 if(!nameformet.test($('#first_name').val())){
//                     $('#err_for_tfname').html("Invalid First name !!  Numeric value not support");
//                     $('#err_for_tfname').show();
//                 }
//                 else{
//                     // $('#first_name').css("border-color", "black");
//                     $('#err_for_tfname').hide();
//                     return true;
//                 }
//
//             }
//         }
//         function check_last_name(){
//         if($('#last_name').val()==''){
//             $('#err_for_tlname').html("Require last name");
//             $('#err_for_tlname').show();
//             return false;
//         }
//         else{
//             var nameformet=/^[a-zA-Z\s]+$/;
//             if(!nameformet.test($('#last_name').val())){
//                 $('#err_for_tlname').html("Invalid Last name !!  Numeric value not support");
//                 $('#err_for_tlname').show();
//             }
//             else{
//                 $('#err_for_tlname').hide();
//                 return true;
//             }
//
//         }
//     }
//
//
//
//     });


