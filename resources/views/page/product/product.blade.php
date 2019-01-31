@extends('admin.layout.app')

@section('title','Products')

@section('content')

    <div class="container">
        <h4 class="mi5_h4">MI5 Karaoke System</h4>
        <div class="row product-blade-row1" style="width: 98%; margin-left: auto; margin-right: auto;">
            <div class="col-lg-4 col-md-4 productimg1">
                <a href=""><img src="{{asset('/admin/img/Remote.png')}}" alt="MI5 IMG" class="mi5_product_img1"></a>
                <p class="product_over1">Remote Version</p>
                <div class="row" style="width: 98%; margin-left: auto; margin-right: auto; background: #ffffff80;">
                    <div class="col-xs-6" style="border-right: 1px solid #000;">
                        {{--<a href="{{route('fiveremote')}}" class="detail1" onclick="fivedetail()"><p>Detail</p></a>--}}
                        <a href="#fivedetail" class="detail1"><p>Detail</p></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#five_remotescreenshot" class="screenshot1"><p>Screenshot</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 productimg2">
                <a href=""><img src="{{asset('/admin/img/Tablet.png')}}" alt="MI5 IMG" class="mi5_product_img2"></a>
                <p class="product_over2">Tablet Version</p>

                <div class="row" style="width: 98%; margin-left: auto; margin-right: auto; background: #ffffff50;">
                    <div class="col-xs-6" style="border-right: 1px solid #000;">
                        <a href="#fivetab_detail" class="tabbut1"><p>Detail</p></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="#fivetab_screen" class="tabbut2"><p>Screenshot</p></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 productimg3">
                <a href=""><img src="{{asset('/admin/img/Touchscreen.png')}}" alt="MI5 IMG" class="mi5_product_img3"></a>
                <p class="product_over3">Touchscreen Version</p>

                <div class="row" style="width: 98%; margin-left: auto; margin-right: auto; background: #ffffff50;">
                    <div class="col-xs-6" style="border-right: 1px solid #000;">
                        <a href="" class="detail1"><p>Detail</p></a>
                    </div>
                    <div class="col-xs-6">
                        <a href="" class="screenshot1"><p>Screenshot</p></a>
                    </div>
                </div>
            </div>
        </div>

{{--######################################################################################--}}
        {{--Detail & ScreenShot Start--}}

        <div class="container">
            <div id="fivedetail">
                <div class="mi5remote-title">
                    <h4>MI5 Remote Version Detail</h4>
                </div>
                <div class="remote_content">
                    <img src="{{asset('/admin/img/page/remoteedit-1.png')}}" alt="mi5Remote">
                </div>
            </div>

            {{--mi5 remoteScreenshot start--}}
            <div id="five_remotescreenshot" style="width: 98%; margin-left: auto; margin-right: auto; margin-top: 50px;">
                <div class="row screenshot_row1">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic1.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic2.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic3.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic4.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic5.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic6.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic7.jpg')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <img src="{{asset('admin/img/page/Graphic8.jpg')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>
            </div>
        </div>

        {{--mi5 TabletVersion Start--}}
        <div class="container">
            <div id="fivetab_detail">
                <div class="tab_title">
                    <h4>MI5 Tablet Version Detail</h4>
                </div>
                <div class="tablet_content">
                    <p>
                        <mark>[1]&nbsp; The same UI on Tablet and Touchscreen </mark><br><br>
                        &emsp;&emsp;Tablet ႏွင့္ Touchscreen အသုံးျပဳပုံမွာ အတူတူပဲျဖစ္ပါသည ္။  Tablet မွာ သုံးရတာတမ်ဳိး ၊ Touchscreen မွာ သုံးရတာ တမ်ဳိးမျဖစ္<br>
                        &emsp;&emsp;ေတာ့ပါ။<br><br>

                        <mark>[2]&nbsp; Great Application</mark><br><br>
                        &emsp;&emsp;> MI5 Tablet Software  လွပေသသပ္ျပီျပီး ေပါ့ပါးျမန္ဆန္ပါတယ္။ သိန္းဂဏန္းရွိေသာ Data မ်ားကုိပင္ ျမန္ျမန္ဆန္ဆန္ရွာႏုိင္ပါတယ္။<br>
                        &emsp;&emsp;> ေစ်းေပါသည့္ တရုတ္ Tablet မ်ားႏွင့္ပင္ ေပါ့ေပါ့ပါးပါးအလုပ္လုပ္ႏုိင္ပါတယ္။<br>
                        &emsp;&emsp;> Resolution မ်ဳိးစုံ ( 800x600, 1024x768, 1280x800, 1920x1080 )  Screen Ratio မ်ဳိးစုံ (4:3, 16:9 ,16:10) မွာလုုပ္လုပ္ပါတယ္<br>
                        &emsp;&emsp;> ျမန္မာFont  / ရွမ္း Font မ်ားထည့္သြင္းရန္မလုိပါ။<br>
                        &emsp;&emsp;> wifi ခ်ိတ္ဆက္သည့္စနစ္မွာလည္းလုံး၀ေသခ်ာတိက်ပါတယ္။ Tablet / Mobile ဖုန္း ရာနဲခ်ိျပီးခ်ိတ္ဆက္အသုံးျပဳႏုိင္ပါတယ္။<br><br>

                        <mark>[2]&nbsp; One Time Pasword Login</mark><br><br>
                        &emsp;&emsp;MI5 Karaoke စနစ္မွာ  Wifi  Tablet/Phone ေတြကုိ ရာနဲ႕ခ်ိျပီ ခ်ိတ္ဆက္အသုံးျပဳႏုိင္ျခင္း ၊ KTV လာ ဧည့္မ်ား၏ Mobile ဖုန္းမ်ားႏွင့္ပါ<br>
                        &emsp;&emsp;အသုံးျပဳႏုိင္ျခင္းတုိ႕ေၾကာင့္ One Time Password Login လုိအပ္လာပါတယ္။ ၄င္း Password မွာတခါသုံး ျဖစ္ပါတယ္။<br>
                        &emsp;&emsp;> Karaoke စက္အဖြင့္အပိတ္ တခါလုပ္တုိင္း ၊ Section Control softwre မွ New Section လုပ္တုိင္း Password ေျပာင္းေပးပါတယ္။<br>
                        &emsp;&emsp;> ပထမ section မွဧည္သည္မ်ား၏ Moblie ဖုန္မ်ာကုိလည္း connection ျဖုတ္ျပစ္လုိက္မွာပါျဖစ္ပါတယ္။<br>
                        &emsp;&emsp;ထုိမွသာ ဒုတိယ ၀င္ေယာက္လာေသာ ဧည့္သည္မ်ား၏ Mobile ဖုန္းမ်ားႏွင့္ မေရာေထြးမွာျဖစ္ပါတယ္။<br>
                        &emsp;&emsp;> ခ်ိန္ဆက္ထားသည့္ Mobile ဖုန္း အေရအတြက္  ႏွင့္ Password ကုိ TV ၏ဘယ္ဖက္အေပၚေဒါင့္တြင္ေဖၚျပထားပါတယ္။<br><br>

                        <mark>[3]&nbsp; Database auto download</mark><br><br>
                        &emsp;&emsp;ယခင္ MI4 အထိ သီခ်င္းအသစ္ထြက္ပါက Database ႏွင့္ ေတးစီရီဓါတ္ပုံမ်ား ကုိ USB မွတဆင့္ထည့္သြင္းေပးရပါတယ္။<br>
                        &emsp;&emsp;ယခု MI5 တြင္ Database အသစ္ႏွင့္ ဓါတ္ပုံမ်ားကုိ wifi မတဆင့္ အလုိေလွ်ာက္ Downlaoad ဆြဲသြားမွာျဖစ္ပါတယ္။<br><br>

                        <mark>[4]&nbsp; Remote video playback</mark><br><br>
                        &emsp;&emsp;ကာရာအုိေက စက္ထဲမွသီခ်င္းမ်ားကုိ wifi မွတဆင့္   Tablet ေပၚမွ တုိက္ရုိက္ဖြင္ၾကည့္ႏုိင္ပါသည္။<br><br>

                        <mark>[5]&nbsp; Adjust  Music And Key Level</mark><br><br>
                        &emsp;&emsp;Bass ၊ Mid ၊ Treble တုိ႕ကုိ အတင္/အခ် ကုိ (+-1ဆင့္) ျပဳလုပ္ႏုိင္ျပီး ၊ Key အတင္/အခ် ကုိေတာ့ (+-3 ဆင့္) ျပဳလုပ္ႏုိင္ပါတယ္။<br>
                        &emsp;&emsp;ထုိသုိ အတင္အခ်ျပဳလုပ္သည့္အခါတိုင္း Level ဘယ္ေလာက္အတင္အခ် လုပ္ထားသည္ကုိျပသေပးရပါတယ္။<br>
                        &emsp;&emsp;ထုိသုိ႕ျပသရမွာ ခ်ိတ္ဆက္ထားသည့္ Tablet/Mobile ဖုန္းအာလုံ ၊ Touchscreen ႏွင့္ TV ေပၚတုိ႕တြင္  တျပိဳင္တည္း ျပသေပးရပါတယ္။<br>
                        &emsp;&emsp;ဥပမာ၊ တဦးဥိးက Mobile ဖုန္းျဖင့္ Key တဆင့္ တင္လုိက္လွ်င္ က်န္ေနသည့္ Mobile ဖုန္း/ Tablet ေပၚတြင္ပါတျပိဳင္တည္းေျပာင္းသြားျခင္းျဖစ္သည္။<br>
                        &emsp;&emsp;ဒါကုိ synchronizationလုိ႕ေခၚပါတယ္။<br><br>

                        <mark>[6]&nbsp; Playlist  Synchronization</mark><br><br>
                        &emsp;&emsp;တေယာက္ေယာက္ Mobile ဖုန္းနဲ႕သီခ်င္းတင္မယ္။ ေနာက္အျခားတေယာက္က Tabletနဲ႕ ထည့္ျပိးသားသီခ်င္းေတြကုိ ေနရာေရြ႔မယ္။<br>
                        &emsp;&emsp;ေနာက္အျခားတေယာက္က Remote နဲ႕ သီခ်င္းထည့္မယ္။ ေနာက္အျခားတေယာက္က ဖုန္းနဲ႕ ထည္းျပီသားသီခ်င္းေတြကုိျပန္ဖ်က္ေနမယ္<br>
                        &emsp;&emsp;ဒီလုိမ်ဳးိ Tablet ေတြ ၊ ဖုန္းေတြ ၊ Touchscreen နဲ Remote Control ေတြနဲ႕မ်ဳိးစုံလုပ္ေနႏုိင္ပါတယ္။ ဒါေပမယ္ တင္ထားေသာသီခ်င္း<br>
                        &emsp;&emsp;List ဟာ အားလုံးဆီမွာ တျပိဳင္တည္း Update ျဖစ္ေနမွာပါ ။  ဒါကုိလည္း synchronizationလုိ႕ေခၚပါတယ္။<br><br>

                        <mark>[6]&nbsp; Lighting  Control</mark><br><br>
                        &emsp;&emsp;Tablet/ Touchscreen တုိ႕မွ KTV အခန္းမိးအဖြင့္အပိတ္မ်ား ၊ RGB အေရာင္ေျပာင္းျခင္းမ်ား ကုိထိမ္းခ်ဳပ္ႏုိင္ပါသည္။<br>
                        &emsp;&emsp;(အေသးစိပ္ကုိ   Lighting  Control  တြင္ၾကည့္ပါ။)<br><br>

                        <mark>[7]&nbsp; Food menu</mark><br><br>
                        &emsp;&emsp;KTV အခန္းထဲမွ အစားေသာက္မ်ာကုိ မွာယုူႏုိင္ပါျပီ ။ က်သင့္ေငြ Bill ကုိလည္းစစ္ေဆးႏုိင္ပါျပီ။<br><br>

                        <mark>[8]&nbsp; Favourate  Song Selection</mark><br><br>
                        &emsp;&emsp;သီခ်င္းမ်ားကုိ ရွာေဖြျပီး စိတ္ၾကိဳက္ လက္ေရြးစင္ ထဲသုိ႕ထည့္သြင္းထားႏုိင္ပါသည္ ။ လူအေယာက္ 900စာ သိမ္းထားေပးႏုိင္ပါသည္။<br>
                        &emsp;&emsp;ျပီလွ်င္လဲ ၄င္းသီခ်င္းမ်ားကုိလြယ္ကူစြာျပန္လည္ေခၚယူ သီဆုိႏုိင္ပါသည္။<br>
                        &emsp;&emsp;server ႏွင့္ ခ်ိန္ဆက္အသုံးျပဳသည့္ KTV ဆုိင္မ်ားတြင္ အခန္းတခန္းခန္းထဲမွာ   လက္ေရြးစင္ထဲကုိ သီခ်င္းအသစ္ထည့္လုိက္လွ်င္လည္း။<br>
                        &emsp;&emsp;အျခားအခန္းမ်ား မွလည္း  ၄င္းသီခ်င္းကုိျပန္လည္ ေခၚယူသီဆုိႏုိင္ပါသည္။<br>
                    </p>
                </div>
            </div>

            <div id="fivetab_screen" style="width: 98%; margin-left: auto; margin-right: auto; margin-top: 50px;">
                <div class="row screenshot_row1">
                    <div class="col-lg-6 col-md-6">
                        <h6>Home Screen</h6>
                        <img src="{{asset('admin/img/tablet/home.png')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>ျမန္မာသီခ်င္းကို ေတးစီးရီးျဖင့္ရြာျခင္း</h6>
                        <img src="{{asset('admin/img/tablet/2.png')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <h6>စာအုပ္ပံုစံျဖင့္ရွာျခင္း</h6>
                        <img src="{{asset('admin/img/tablet/3.png')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>အဆိုေတာ္ျဖင့္ရွာျခင္း</h6>
                        <img src="{{asset('admin/img/tablet/4.png')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <h6>Tablet ေပၚမွ Karaoke စက္ထဲမွ သီခ်င္းမ်ားကိုဖြင့္ၾကည့့္ျခင္း</h6>
                        <img src="{{asset('admin/img/tablet/5.png')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>သီခ်င္းမ်ားကိုေရွ႕ေနာက္ေနရာေျပာင္း</h6>
                        <img src="{{asset('admin/img/tablet/6.png')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <h6>Key အတင္အခ် ၊ Music ခ်ိန္ညွိ</h6>
                        <img src="{{asset('admin/img/tablet/7.png')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>KTV အခန္းအတြင္းမီးမ်ားအဖြင့္အပိတ္</h6>
                        <img src="{{asset('admin/img/tablet/8.png')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>

                <div class="row screenshot_row2">
                    <div class="col-lg-6 col-md-6">
                        <h6>အစားအေသာက္မွာျခင္း</h6>
                        <img src="{{asset('admin/img/tablet/9.png')}}" alt="mi5Screenshot" class="five_screen1">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <h6>သီခ်င္းမ်ားကိုစိတ္ၾကိဳက္လက္ေရြးစင္ျပဳလုပ္ျခင္း</h6>
                        <img src="{{asset('admin/img/tablet/10.png')}}" alt="mi5Screenshot" class="five_screen2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection