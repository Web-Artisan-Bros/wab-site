<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeamController extends Controller {
  public function show($name) {
//      return view("team.$slug");
    
    if ($name === 'marius') {
      return view('team.marius');
    } elseif ($name === 'florian') {
      return view('team.florian');
    }
    
    return abort(404);
  }
  
  public function vcard($name) {
    $team = [
      "marius"  => [
        "firstName" => "Marius",
        "lastName"  => "Leica",
        "title"     => "CEO",
        "tel"       => "+393290241530",
        "email"     => "marius.leica@webartisanbros.com",
        "photo"     => "marius.png"
      ],
      "florian" => [
        "firstName" => "Florian Robert",
        "lastName"  => "Leica",
        "title"     => "CTO",
        "tel"       => "+393202942127",
        "email"     => "florian.leica@webartisanbros.com",
        "photo"     => "florian.png"
      ]
    ];
    
    $data = $team[$name];
    
    $website = "https://www.webartisanbros.com";
    
    // url immagine
    $profileImg = public_path("assets/" . $data["photo"]);
    $profile64  = base64_encode(file_get_contents($profileImg));
    
    $vcard = "BEGIN:VCARD\r\n
VERSION:3.0\r\n
N:{$data["lastName"]};{$data["firstName"]};\r\n
ORG:Web Artisan Bros\r\n
TITLE:{$data["title"]}\r\n
TEL:{$data["tel"]}\r\n
EMAIL;CHARSET=UTF-8;type=WORK,INTERNET:{$data["email"]}\r\n
URL;type=WORK;CHARSET=UTF-8:$website\r\n
URL:$website/team/$name\r\n
PHOTO;PNG;ENCODING=BASE64:$profile64\r\n
END:VCARD\r\n
";
    
    $headers = [
      'Content-Type'        => 'text/x-vcard',
      'Content-Disposition' => "attachment; filename=\"{$data["lastName"]} {$data["firstName"]}\.vcf\"",
    ];
    
    return response($vcard, 200, $headers);
  }
}
