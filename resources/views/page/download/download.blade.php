@extends('admin.layout.app')

@section('title','Download')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-xs-12 mi5table">
                <h4>Download for MI5</h4>
                <div class="table-responsive" style="background: white;">
                    <table summary="This table shows how to create responsive tables using Bootstrap's default functionality" class="table table-bordered table-hover csstable">

                        <thead>
                        <tr class="bg-success">
                            <th>Name</th>
                            <th>Description</th>
                            <th>Release</th>
                            <th>Size</th>
                            <th>Download</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td><img src="{{asset('admin/icon/zip.png')}}" alt="ZIP Icon" class="icon1">MI5 (V 5.1)</td>
                            <td>MI5 Window Karaoke Software</td>
                            <td>28-1-2019</td>
                            <td>143 MB</td>
                            <td><a href="{{route('fivewinsoft')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/zip.png')}}" alt="DATABASe Icon" class="icon1">MI5_DatabaseEditor (V 5.2)</td>
                            <td>MI5 သီခ်င္းအသစ္ထည့္ရန္အတြက္</td>
                            <td>28-1-2019</td>
                            <td>33.4 MB</td>
                            <td><a href="{{route('fivedatabasedit')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/zip.png')}}" alt="ZIP Icon" class="icon1">VidCoder(V 2.5)</td>
                            <td>MI5 မွ support လုပ္သည့္ သီခ်င္းဖိုင္ေျပာင္းရန္</td>
                            <td>28-1-2019</td>
                            <td>12.0 MB</td>
                            <td><a href="{{route('fivevidcode')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/zip.png')}}" alt="ZIP Icon" class="icon1">DirectXUpdate</td>
                            <td>MI5 Database Editor တြင္ သီခ်င္းအသံမထြက္လ်င္ Install လုပ္ရန္ </td>
                            <td>28-1-2019</td>
                            <td>95.9 MB</td>
                            <td><a href="{{route('directx')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/zip.png')}}" alt="ZIP Icon" class="icon1">Ramdisk</td>
                            <td>MI5 window karaoke software အတြက္</td>
                            <td>28-1-2019</td>
                            <td>1.93 MB</td>
                            <td><a href="{{route('fiveram')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/dbase.png')}}" alt="DATABASe Icon" class="icon1">Database</td>
                            <td>MI5 Database (တရုတ္သီခ်င္းအစံု)</td>
                            <td>28-1-2019</td>
                            <td>84.2 MB</td>
                            <td><a href="{{route('fivedata')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/apk.png')}}" alt="APK Icon" class="icon1">MI5Droid (V 5.1.2)</td>
                            <td>MI5 Android Tablet APK</td>
                            <td>28-1-2019</td>
                            <td>21.1 MB</td>
                            <td><a href="{{route('fiveapk')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/pdf.png')}}" alt="PDF Icon" class="icon1">MI5 DatabaseEditor .pdf</td>
                            <td>MI5 database ထဲသို႔ သီခ်င္းထည့္သြင္းနည္းစာအုပ္ (pdf)</td>
                            <td>28-1-2019</td>
                            <td>16 MB</td>
                            <td><a href="{{route('databasepdf')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/pdf.png')}}" alt="PDF Icon" class="icon1">MI5 Karaoke Software InstallationGuide.pdf</td>
                            <td>MI5 karaoke software ထည့္သြင္းနည္း စာအုပ္ (pdf)</td>
                            <td>28-1-2019</td>
                            <td>3.16 MB</td>
                            <td><a href="{{route('fiveinstallpdf')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        <tr>
                            <td><img src="{{asset('admin/icon/pdf.png')}}" alt="PDF Icon" class="icon1">MI5 Tablet InstallationGuide pdf</td>
                            <td>MI5 Karaoke tablet ထည့္သြင္းနည္း စာအုပ္ (pdf)</td>
                            <td>28-1-2019</td>
                            <td>1.16 MB</td>
                            <td><a href="{{route('fivetabletguide')}}"><i class="fa fa-download icon" style="font-size:20px;color:red; display: block; text-align: center;"></i></a></td>
                        </tr>
                        </tbody>

                    </table>
                </div><!--end of .table-responsive-->
            </div>
        </div>

    </div>

    @endsection