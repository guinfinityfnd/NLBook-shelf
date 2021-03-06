<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link rel="shortcut icon" href="/globe.gif">
    <link rel="stylesheet" href="darkmode.css">
    <title>Thinking</title>
</head>
<style>
    .col-lg-3{
        border: 1px solid red;
        margin-top: 2px;
        border-top-right-radius: 20px;
        border-bottom-left-radius: 20px;
    }
    
    .think-style{
        padding: 3px;
        line-height: 30px;
    }
    
    .think-style::before , .think-style::after{
        content: ' \2B50';
    }
    #more{display: none;}
    .myBtn{color: blue;}
</style>
<body>
    <div class="container-fluid">
        <div class="form-check form-switch" id="darkmode">
            <input class="form-check-input" type="checkbox" id="flexSwitchCheck" style="cursor: pointer;" onclick="changeMode()">
            <label class="form-check-label" for="flexSwitchCheckChecked">Night</label>
        </div><br>
        <span onclick="history.back()" id="his-back">Back</span>
        <button class="topButton" onclick="topFunction()">&#8896;</button><br><br>
        <div class="container">
            <div class="row align-items-start">
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        မုန်တိုင်းကျပြီးတိုင်း သီချင်းဆိုမပြတ်တဲ့ ငှက်ကလေးများနဲ့တူပါစေ။
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        သင့်ရဲ့ဘဝမှာ ခလုတ်ကန်သင်းတွေပြည့်နေတယ်လို့<span id="dots" style="color: rgb(255, 47, 47); font-size: 1.5em;">...</span><span id="more">သင်မြင်ရင်အဲဒီခလုတ်ကန်သင်းတွေကိုလှေကားထစ်လိုသဘောထားလိုက်ပါ။သင်မြင်ရင်အဲဒီခလုတ်ကန်သင်းတွေကိုလှေကားထစ်လိုသဘောထားလိုက်ပါ။</span>
                        <span class="myBtn" style="cursor: pointer;">&#8667;</span>
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        ဘဝကိုနားလည်ပါ ဘဝရဲ့ဖိစီးမှုအောက်ကိုတော့မရောက်ပါစေနဲ့။
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        မှောင်မဲနေတာကိုကျိန်ဆဲနေတာထက် ဖယောင်းတိုင်လေးတစ်တိုင်ထွန်းလိုက်တာက ပိုကောင်းပါတယ်။
                    </p>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        ဆုံးရှုံးမှုရဲ့ ဟိုးတစ်ဖက်ကမ်းမှာ အောင်မြင်မှုဆိုတာရှိပါတယ်။
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        ဘဝဆိုတာဘာမှမဟုတ်ပါဘူး အခွင့်အလမ်းတစ်ခုပါပဲ။
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        ယနေ့ပြီးစီးနိုင်တာကို ယခုပဲလုပ်လိုက်ပါ။
                    </p>
                </div>
                <div class="col-lg-3">
                    <p class="text-break think-style">
                        ပြောတဲ့အတိုင်းလုပ်ပါ။တွေးတဲ့အတိုင်းပြောပါ။တွေးသမျှကိုတော့ မပြောလိုက်ပါနဲ့
                    </p>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            ပညာရှိ ဉပမာတစ်ခုက ငြင်းခုံနေမှုတစ်ခုထောင်ထက်ပိုကောင်းပါသည်။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            လက်တွေ့ စမ်းသပ်ဖူးသူပြောတာကိုသာ ယုံပါ။
                            <!-- မိတ်ဆွေကောင်းတစ်ယောက်ရဖို့အတွက်မိတ်ဆွေတစ်ယောက်ဖြစ်ပါစေ။ -->
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            နှစ်ကြိမ်တိုင်းတာပါ ဒါပေမယ့် တစ်ကြိမ်တည်းဖြတ်ပါ။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            အပြစ်တင်ခြင်း အပြစ်မြင်ခြင်း၊ကြောက်ရွံ့ခြင်းနဲ့ဖြည့်လို့မပြည့်နိုင်တဲ့ မျှော်လင့်ခြင်း တို့ဟာ လူရဲ့စွမ်းအားကို ဝါးမျိုစားသုံသူကြီးသုံးဦးပါပဲ။
                        </p>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            ပြောစရာရှိတာ ပြောပါ၊အကြောင်းမရှိဘဲ မပြောပါနဲ့။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            မင်းရဲ့အိပ်မက်တွေ ဓူဝံကြယ်လို ဖြစ်ပါစေ။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            မိတ်ဆွေကောင်းတစ်ယောက်ရဖို့အတွက်မိတ်ဆွေတစ်ယောက်ဖြစ်ပါစေ။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            ဘဝဆိုတာ စာအုပ်တစ်အုပ်ပါ။သင်ဟာ အဲ့ဒီစာအုပ်ရဲ့စာရေးဆရာတစ်ယောက်ဖြစ်ပါတယ်။
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            လူပျင်းဟာ သူ့ရဲ့ပျင်းရိမှုနဲ့ အလုပ်ရှုပ်နေတယ်။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style" style="color: aqua;">
                            အဆင့်အတန်းမြင့်ချင်ရင် ကိုယ့်ကိုကိုယ် ထိန်းသိမ်းပါ။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            အဖြေကောင်းရဖို့ မေးခွန်းကောင်းတွေမေးပါ။
                        </p>
                    </div>
                    <div class="col-lg-3">
                        <p class="text-break think-style">
                            ထူးချွန်ကောင်းမွန်မှုဟာ ဘယ်တော့မှ မတော်တဆဖြစ်လာတာမျိုးမဟုတ်ပါ။
                    </div>
                </div>
                
            </div>
        </body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script>
            let ele = document.body;
            function changeMode(params) {
                ele.classList.toggle('dark-mode');                    
            };
            $(document).ready(function() {
                $('.myBtn').click(function (params) {
                    var change = $(this).parent().toggleClass('getit');
                    $(this).parent().children('#more').toggle();
                    var check_first= change.hasClass('getit');
                    let check = check_first ? 'OK' : 'see';
                    $(this).text(check);
                    if(check_first){
                        $(this).parent().children('span#dots').css('display','none');
                    }else{
                        $(this).parent().children('span#dots').css('display','inline');
                    };
                    
                });
            });
                    const topButtonTag = document.querySelector('.topButton');
              window.onscroll = function() {
                scrollFunction();
              }
              function scrollFunction() {
                if (document.body.scrollTop>20 || document.documentElement.scrollTop>20) {
                  topButtonTag.style.display = 'block';
                }else{
                  topButtonTag.style.display = 'none';
                }
              }
              
              function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
              }
        </script>
        </html>