@extends('Frontend.master')
@section('title')
    Monosheba - Psychology Test
@endsection
@section('content')
    <div class="crumbs-area"style="height:220px ">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-8">
                    <div class="banner-content">
                        <h3>Question - Answer</h3>
                    </div>
                </div>
                <div class="col-md-6 col-sm-4">
                    <div class="crumbs">
                        <ul>
                            <li><a href="">Home</a></li>
                            <li><span>All Question</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="service-page-area pb--100">
    <div class="container">
        <div class="row" >
            <div class="col-lg-12 col-sm-6" id="question">
                <h2>{{$scalename}}</h2>
                <form name="form1" id="infoform"  onsubmit="return handleClick()">
                    <div class="table-responsive">
                    <table class="table" style="table-layout:revert; overflow: hidden;">
                        <thead class="qsn_hdr">
                        <tr>
                            {{--{{dd($scale)}}--}}
                            @if($scalename == 'Love obsession Scale')
                                <th>উক্তি সমূহ</th>
                                <th>হ্যাঁ</th>
                                <th>না</th>

                            @elseif($scalename == 'Marrital Scale')
                                <th>বিষয় সমূহ</th>
                                <th>পুরোপুরি সম্মতি <br> প্রদান</th>
                                <th>প্রায় সবসময়ই <br> সম্মত হই</th>
                                <th>হঠাৎ অসম্মতি <br> প্রদান করি</th>
                                <th> প্রায় প্রায়ই <br> অসম্মত</th>
                                <th> প্রায় সবসময়ই <br>অসম্মত</th>
                                <th>পুরোপুরি <br>অসম্মত</th>

                            @else
                            <th>বিবৃতি সমূহ</th>
                            <th>একেবারেই <br> হয় না</th>
                            <th>খুব সামান্য <br> হয়</th>
                            <th>মোটামুটি <br> হয়</th>
                            <th>বেশি হয়</th>
                            <th>অনেক বেশি <br> হয়</th>
                            @endif
                        </tr>
                        </thead>
                        <tbody class="qsn_bdy">
                        @foreach($scale as $scales)
                            <?php $no++?>
                        @if($scales->scale=='Love obsession Scale')
                                    <tr class="danger">
                                        <td>{{$scales->question}}</td>
                                        <td>
                                            <input type="radio"class="option-input radio" required value="1" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                    </tr>
                         @elseif($scales->scale=='Marrital Scale')
                            @if($scales->id=='130')
                                <tr class="danger">
                                    <td>&#9733;{{$scales->question}}</td>
                                    <td>
                                        <input type="radio"  class="option-input radio " required value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        স্বামী
                                    </td>
                                    <td>
                                        <input type="radio"  class="option-input radio "  required value="2" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        স্ত্রী

                                    </td>
                                    <td colspan="4">
                                        <input type="radio"  class="option-input radio"  required value="10" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        দুজনে
                                    </td>
                                    </td>
                                </tr>
                                @elseif($scales->id=='131')
                                    <tr class="danger">
                                        <td>&#9733;{{$scales->question}}</td>
                                        <td colspan="2">
                                            <input type="radio"  class="option-input radio" required value="10" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                            <br/>
                                            সর্বক্ষেত্রে একসাথে কাজ করি
                                        </td>

                                        <td >
                                            <input type="radio" class="option-input radio"  required value="8" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                            <br/>
                                            কিছু কিছু ক্ষেত্রে
                                        </td>

                                        <td>
                                            <input type="radio" class="option-input radio"  required value="3" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                            <br/>
                                            খুব কম ক্ষেত্রে</td>
                                        <td colspan="2">
                                            <input type="radio" class="option-input radio"  required value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                            <br/>
                                            কখনই না</td>
                                    </tr>

                            @elseif($scales->id=='132')
                                <tr class="danger">
                                    <td>&#9733;{{$scales->question}}</td>
                                    <td >
                                        <input type="radio" class="option-input radio" required value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        খুব বেশি
                                    </td>

                                    <td>
                                        <input type="radio" class="option-input radio"  required value="3" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        মাঝে মাঝে
                                    </td>

                                    <td >
                                        <input type="radio" class="option-input radio"  required value="8" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        কদাচিৎ</td>
                                    <td colspan="3">
                                        <input type="radio"  class="option-input radio"  required value="15" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        কখনই না</td>
                                </tr>

                            @elseif($scales->id=='133')
                                <tr class="danger">
                                    <td>&#9733;{{$scales->question}}</td>
                                    <td >
                                        <input type="radio" class="option-input radio" required value="10" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        সব ক্ষেত্রে
                                    </td>

                                    <td >
                                        <input type="radio"  class="option-input radio"  required value="10" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        বেশিরভাগ ক্ষেত্রে
                                    </td>

                                    <td>
                                        <input type="radio"  class="option-input radio"  required value="2" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        কদাচিৎ</td>
                                    <td colspan="4" >
                                        <input type="radio"  class="option-input radio"  required value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        কখনই না</td>
                                </tr>

                            @elseif($scales->id=='134')
                                <tr class="danger">
                                    <td>&#9733;{{$scales->question}}</td>
                                    <td colspan="2">
                                        <input type="radio"  class="option-input radio" required value="15" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        বর্তমান স্বামী/স্ত্রী কেই বিয়ে করবেন
                                    </td>

                                    <td colspan="2">
                                        <input type="radio"  class="option-input radio"  required value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        অন্য কাউকে বিয়ে করবেন
                                    </td>

                                    <td colspan="2">
                                        <input type="radio" class="option-input radio"  required value="1" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        <br/>
                                        কখনো বিয়ে ই করবেন নাহ
                                    </td>
                                </tr>
                                @else

                                    <tr class="danger">
                                        <td>&#9733;{{$scales->question}}</td>
                                        <td>
                                            <input type="radio" class="option-input radio" required value="5" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="4" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="3" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="2" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="1" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                    </tr>
                                    @endif
                          @else
                                    <tr class="danger">
                                        <td scope="row"> {{$scales->question}}</td>
                                        <td>
                                            <input type="radio" class="option-input radio" required value="0" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option- input radio" value="1" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="2" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="3" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                        <td>
                                            <input type="radio" class="option-input radio" value="4" id="qsn.{{$no}}" name="qsn.{{$no}}}"/>
                                        </td>
                                    </tr>
                          @endif
                        @endforeach
                        <tr>
                            <td colspan="5">
                                <input class="btn btn-primary pull-left" type='submit' value='Submit'/>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </form>
            </div>
            <div class="col-lg-12 col-sm-6" id="result" style="height: 400px">
                <div id="preloader" >
                    <div class="indicator text-center">
                        <h2>Analysing Your Scale</h2>
                        <svg width="16px" height="12px">
                            <polyline id="back" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                            <polyline id="front" points="1 6 4 6 6 11 10 1 12 6 15 6"></polyline>
                        </svg>
                    </div>
                </div>
                <div class="col-lg-12 text-center">
                    {{--<h2>Your Total Score</h2>--}}
                    <h2>আপনার {{$scalename}}</h2>
                    <h2 id="score" style="visibility: hidden;"></h2>
                    <h2 id="message"></h2>
                    <p>আপনার প্রশ্নোত্তর জন্য ধন্যবাদ</p>
                    <p>যেকোনো মুহূর্তে আপনি আমাদের PSYCHIATRICT এর কাছে আপনার সমস্যার কথা জিজ্ঞাসা করতে পারেন ।</p>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-js-script')
    <script>
        function myFunction() {
            $('#result').hide();
            $('#preloader').hide();
        }
        $(document).ready(function(){
            myFunction();
        });
    </script>

   <script>
       function handleClick() {
           var inputs = form1.elements;
           var radios = [];
           var result=0;
           //Loop and find only the Radios
           for (var i = 0; i < inputs.length; ++i) {
               if (inputs[i].type == 'radio') {
                   radios.push(inputs[i]);
                   if (radios[i].checked) {
                      var r=parseInt(radios[i].value);
                      var result=result+r;
                   }
               }
           }

         //  alert(result);
           $('#question').hide();
           $('#result').show();
           $('#preloader').show();
           if(result>=0 && result<=20){
               document.getElementById("message").innerHTML ='সামান্য';
           }else if(result>=21 && result<=40){
               document.getElementById("message").innerHTML ='পরিমিত রূপে';
           }else if(result>=41 && result<=60){
               document.getElementById("message").innerHTML ='খুব বেশি';
           }else{
               document.getElementById("message").innerHTML ='অত্যন্ত বেশি';
           }
           document.getElementById("score").innerHTML = result;
           $('#preloader').delay(2000).fadeOut('slow');
       }
   </script>
    <script>
        $('#infoform').submit(function (evt) {
            evt.preventDefault();

        })
    </script>
@stop