<?php
//v5

session_start();
$_SESSION["pixel"] = $_GET['pixel'] ?? '';
$_SESSION["utm_source"] = $_GET['utm_source'] ?? '';
$_SESSION["aff_click_id"] = $_GET['aff_click_id'] ?? '';
$_SESSION["sub1"] = $_GET['sub1'] ?? '';
$_SESSION["custom1"] = $_GET['custom1'] ?? '';
$_SESSION["sub_id2"] = $_GET['sub_id2'] ?? '';
$_SESSION["sub_id3"] = $_GET['sub_id3'] ?? '';
$_SESSION["sub_id4"] = 'faid_1';
$_SESSION["sub_id5"] = $_GET['sub_id5'] ?? '';
$_SESSION["aff_param1"] = $_GET['aff_param1'] ?? '';
$_SESSION["aff_param2"] = $_GET['aff_param2'] ?? '';
$_SESSION["aff_param3"] = $_GET['aff_param3'] ?? '';
$_SESSION["aff_param4"] = $_GET['aff_param4'] ?? '';
$_SESSION["aff_param5"] = $_GET['aff_param5'] ?? '';

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PARASOTIN</title>
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="-1">
    <meta name="keywords" content="">
    <meta name="description" content="PARASOTIN">
    <script type='text/javascript'>window.ladi_viewport = function () {
            var screen_width = window.ladi_screen_width || window.screen.width;
            var width = window.outerWidth > 0 ? window.outerWidth : screen_width;
            var widthDevice = width;
            var is_desktop = width >= 768;
            var content = "";
            if (typeof window.ladi_is_desktop == "undefined" || window.ladi_is_desktop == undefined) {
                window.ladi_is_desktop = is_desktop;
            }
            if (!is_desktop) {
                widthDevice = 420;
            } else {
                widthDevice = 1200;
            }
            content = "width=" + widthDevice + ", user-scalable=no";
            var scale = 1;
            if (!is_desktop && widthDevice != screen_width && screen_width > 0) {
                scale = screen_width / widthDevice;
            }
            if (scale != 1) {
                content += ", initial-scale=" + scale + ", minimum-scale=" + scale + ", maximum-scale=" + scale;
            }
            var docViewport = document.getElementById("viewport");
            if (!docViewport) {
                docViewport = document.createElement("meta");
                docViewport.setAttribute("id", "viewport");
                docViewport.setAttribute("name", "viewport");
                document.head.appendChild(docViewport);
            }
            docViewport.setAttribute("content", content);
        };
        window.ladi_viewport();
       </script>
    <link rel="preconnect" href="https://fonts.googleapis.com/" crossorigin>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Open Sans:bold,regular&display=swap" as="style"
          onload="this.onload = null; this.rel = 'stylesheet';">
    <link type="text/css" rel="stylesheet" href="files/css/all.css"/>
    <script type="text/javascript">
        function dtime(daysBefore) {
            var d = new Date(new Date() - 24 * 3600 * 1000 * daysBefore);
            var month = ["01", "02", "03", "04", "05", "06", "07", "08", "09", "10", "11", "12"];
            document.write(d.getDate() + "." + month[d.getMonth()] + "." + d.getFullYear());
        }

        function year() {
            let d = new Date();
            document.write(d.getFullYear());
        }</script>
</head>
<body>
<div class="ladi-wraper">
    <div id="SECTION1" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="GROUP9" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="FORM2" data-config-id="" class='ladi-element'>
                        <div action="send.php" method="post" class='ladi-form'>
                            <div id="BUTTON3" class='ladi-element'>
                                <div class='ladi-button'>
                                    <div class="ladi-button-background"></div>
                                    <div id="BUTTON_TEXT3" class='ladi-element'><p class='ladi-headline'>MUA NGAY</p>
                                    </div>
                                </div>
                            </div>
                            <div id="FORM_ITEM7" class='ladi-element'>
                                <div class="ladi-form-item-container">
                                    <div class="ladi-form-item-background"></div>
                                    <div class='ladi-form-item'><textarea autocomplete="off" tabindex="4" name="message"
                                                                          required class="ladi-form-control"
                                                                          placeholder="Search here..."></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="SHAPE8" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 1672.2646 1896.0833" class=""
                                 fill="rgba(228, 228, 228, 1.0)">
                                <path d="M1152 832q0-185-131.5-316.5T704 384 387.5 515.5 256 832t131.5 316.5T704 1280t316.5-131.5T1152 832zm512 832q0 52-38 90t-90 38q-54 0-90-38l-343-342q-179 124-399 124-143 0-273.5-55.5t-225-150-150-225T0 832t55.5-273.5 150-225 225-150T704 128t273.5 55.5 225 150 150 225T1408 832q0 220-124 399l343 343q37 37 37 90z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION10" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="GROUP16" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="PARAGRAPH12" class='ladi-element'><p class='ladi-paragraph'>TOP NEWS</p></div>
                    <div id="PARAGRAPH13" class='ladi-element'><p class='ladi-paragraph'>DIGITAL SHOWCASE</p></div>
                </div>
            </div>
            <div id="LINE17" class='ladi-element'>
                <div class='ladi-line'>
                    <div class="ladi-line-container"></div>
                </div>
            </div>
            <div id="BUTTON21" class='ladi-element'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT21" class='ladi-element'><p class='ladi-headline'>Ubat dan Herba</p></div>
                </div>
            </div>
            <div id="BUTTON23" class='ladi-element'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT23" class='ladi-element'><p class='ladi-headline'>Pemakanan &amp; Pemakanan</p>
                    </div>
                </div>
            </div>
            <div id="BUTTON27" class='ladi-element'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT27" class='ladi-element'><p class='ladi-headline'>Pendidikan seksual</p></div>
                </div>
            </div>
            <div id="BUTTON29" class='ladi-element'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT29" class='ladi-element'><p class='ladi-headline'>E-MAGAZINE</p></div>
                </div>
            </div>
            <div id="GROUP289" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="BUTTON19" class='ladi-element'>
                        <div class='ladi-button'>
                            <div class="ladi-button-background"></div>
                            <div id="BUTTON_TEXT19" class='ladi-element'><p class='ladi-headline'>RUMAH</p></div>
                        </div>
                    </div>
                    <div id="BUTTON25" class='ladi-element'>
                        <div class='ladi-button'>
                            <div class="ladi-button-background"></div>
                            <div id="BUTTON_TEXT25" class='ladi-element'><p class='ladi-headline'><span
                                            style="font-weight: 700;">Teknologi dan Perubatan</span></p></div>
                        </div>
                    </div>
                    <div id="BUTTON31" class='ladi-element'>
                        <div class='ladi-button'>
                            <div class="ladi-button-background"></div>
                            <div id="BUTTON_TEXT31" class='ladi-element'><p class='ladi-headline'>Etalase Digital
                                </p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="IMAGE34" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div data-action="true" id="IMAGE227" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="LINE237" class='ladi-element'>
                <div class='ladi-line'>
                    <div class="ladi-line-container"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION48" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="GROUP65" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE63" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="IMAGE64" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GROUP60" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="PARAGRAPH59" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="font-weight: bold;">Share</span></p></div>
                    <div id="SHAPE54" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class="" fill="rgba(16, 72, 145, 1.0)">
                                <path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE55" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class=""
                                 fill="rgba(48, 202, 232, 1.0)">
                                <path d="M1620 408q-67 98-162 167 1 14 1 42 0 130-38 259.5T1305.5 1125 1121 1335.5t-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5T221 1033q33 5 61 5 43 0 85-11-112-23-185.5-111.5T108 710v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5T820 653q-8-38-8-74 0-134 94.5-228.5T1135 256q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE56" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 1536 1896.0833" class=""
                                 fill="rgba(48, 129, 232, 1.0)">
                                <path d="M349 625v991H19V625h330zm21-306q1 73-50.5 122T184 490h-2q-82 0-132-49T0 319q0-74 51.5-122.5T186 148t133 48.5T370 319zm1166 729v568h-329v-530q0-105-40.5-164.5T1040 862q-63 0-105.5 34.5T871 982q-11 30-11 81v553H531q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5T1157 602q171 0 275 113.5t104 332.5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE57" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                 fill="rgba(132, 132, 132, 1.0)">
                                <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="PARAGRAPH61" class='ladi-element'><p class='ladi-paragraph'><span style="font-style: italic;">“Terdapat beribu-ribu parasit yang hidup di hati, otak, paru-paru, darah, perut, dan kebanyakannya berbahaya. Ia bermula dengan nafas berbau. "</span><br>
                </p></div>
            <div id="IMAGE62" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH66" class='ladi-element'><p class='ladi-paragraph'><span style="font-style: italic;">Cacing hidup dalam pundi hempedu.</span><br>
                </p></div>
            <div id="IMAGE67" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH68" class='ladi-element'><p class='ladi-paragraph'><span style="font-style: italic;">Parasit yang hidup di dalam otak boleh menyebabkan kanser.</span><br>
                </p></div>
            <div id="GROUP47" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="GROUP45" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="BOX44" class='ladi-element'>
                                <div class='ladi-box'></div>
                            </div>
                            <div id="SHAPE43" class='ladi-element'>
                                <div class='ladi-shape'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                         preserveAspectRatio="none" viewBox="0 0 1427.7599 1896.0833" class=""
                                         fill="rgba(255, 255, 255, 1.0)">
                                        <path d="M1408 1405q0 120-73 189.5t-194 69.5H267q-121 0-194-69.5T0 1405q0-53 3.5-103.5t14-109T44 1084t43-97.5 62-81 85.5-53.5T346 832q9 0 42 21.5t74.5 48 108 48T704 971t133.5-21.5 108-48 74.5-48 42-21.5q61 0 111.5 20t85.5 53.5 62 81 43 97.5 26.5 108.5 14 109 3.5 103.5zm-320-893q0 159-112.5 271.5T704 896 432.5 783.5 320 512t112.5-271.5T704 128t271.5 112.5T1088 512z"></path>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="PARAGRAPH46" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="font-weight: 700;">Penjagaan kesihatan dan teknologi<br></span>Oleh: Annise
                            Diyaz<br></p></div>
                </div>
            </div>
            <div id="PARAGRAPH36" class='ladi-element'><p class='ladi-paragraph'>AMARAN DOKTOR! Nafas berbau adalah
                    tanda bahaya, penyakit parasit<br></p></div>
            <div id="PARAGRAPH186" class='ladi-element'><p class='ladi-paragraph'>Teknologi perubatan</p></div>
            <div id="SHAPE187" class='ladi-element'>
                <div class='ladi-shape'>
                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" preserveAspectRatio="none"
                         viewBox="0 0 1280 1896.0833" class="" fill="rgba(180, 180, 180, 1.0)">
                        <path d="M1107 877l-742 742q-19 19-45 19t-45-19l-166-166q-19-19-19-45t19-45l531-531-531-531q-19-19-19-45t19-45L275 45q19-19 45-19t45 19l742 742q19 19 19 45t-19 45z"></path>
                    </svg>
                </div>
            </div>
            <div id="PARAGRAPH51" class='ladi-element'><p class='ladi-paragraph'>Nafas berbau adalah petanda amaran
                    banyak masalah kesihatan.<br></p></div>
            <div id="PARAGRAPH37" class='ladi-element ldp-js-date2'>
                <p class='ladi-paragraph'><span style="font-weight: 400;"><script>dtime(0)</script></span><br></p>
            </div>
            <div id="GROUP239" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="SHAPE49" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                 fill="rgba(180, 180, 180, 1.0)">
                                <path d="M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9M12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17M12,4.5C7,4.5 2.73,7.61 1,12C2.73,16.39 7,19.5 12,19.5C17,19.5 21.27,16.39 23,12C21.27,7.61 17,4.5 12,4.5Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="PARAGRAPH50" class='ladi-element'><p class='ladi-paragraph'>425 bacaan</p></div>
                    <div id="GROUP238" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="SHAPE38" class='ladi-element'>
                                <div class='ladi-shape'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                         preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                         fill="rgba(0, 0, 0, 1.0)">
                                        <path d="M9,22A1,1 0 0,1 8,21V18H4A2,2 0 0,1 2,16V4C2,2.89 2.9,2 4,2H20A2,2 0 0,1 22,4V16A2,2 0 0,1 20,18H13.9L10.2,21.71C10,21.9 9.75,22 9.5,22V22H9M10,16V19.08L13.08,16H20V4H4V16H10Z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="SHAPE39" class='ladi-element'>
                                <div class='ladi-shape'>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                         preserveAspectRatio="none" viewBox="0 0 1792 1896.0833" class=""
                                         fill="rgba(0, 0, 0, 1.0)">
                                        <path d="M896 1664q-26 0-44-18l-624-602q-10-8-27.5-26T145 952.5 77 855 23.5 734 0 596q0-220 127-344t351-124q62 0 126.5 21.5t120 58T820 276t76 68q36-36 76-68t95.5-68.5 120-58T1314 128q224 0 351 124t127 344q0 221-229 450l-623 600q-18 18-44 18z"></path>
                                    </svg>
                                </div>
                            </div>
                            <div id="PARAGRAPH40" class='ladi-element'><p class='ladi-paragraph'>17</p></div>
                            <div id="PARAGRAPH41" class='ladi-element'><p class='ladi-paragraph'>33</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GROUP242" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="GROUP241" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="PARAGRAPH193" class='ladi-element'><p class='ladi-paragraph'><span
                                            style="font-weight: 700;">Life Shining bebas daripada "Parasit", kisah pakar parasit terkenal</span><br>
                                </p></div>
                            <div id="IMAGE194" class='ladi-element'>
                                <div class='ladi-image'>
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH197" class='ladi-element'><p class='ladi-paragraph'><span
                                            style="font-weight: 700;">Para saintis mengatakan kesimpulan yang mengerikan: 90% orang dijangkiti parasit.</span><br>
                                </p></div>
                            <div id="IMAGE198" class='ladi-element'>
                                <div class='ladi-image'>
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH200" class='ladi-element'><p class='ladi-paragraph'><span
                                            style="font-weight: 700;">Terkejut! Doktor menyiarkan klip amaran menarik cacing pita babi keluar dari mulut mereka.</span><br>
                                </p></div>
                            <div id="IMAGE201" class='ladi-element'>
                                <div class='ladi-image'>
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                            <div id="PARAGRAPH203" class='ladi-element'><p class='ladi-paragraph'><span
                                            style="font-weight: 700;">Ini adalah gambar parasit dalam daging ikan. Mengingatkan orang yang suka ikan yang dimasak.</span><br>
                                </p></div>
                            <div id="IMAGE204" class='ladi-element'>
                                <div class='ladi-image'>
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="PARAGRAPH191" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="font-weight: 700;">Berita berkaitan</span><br></p></div>
                    <div id="LINE192" class='ladi-element'>
                        <div class='ladi-line'>
                            <div class="ladi-line-container"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div data-action="true" id="IMAGE107" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div data-action="true" id="BUTTON108" class='ladi-element ladi-animation'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT108" class='ladi-element'><p class='ladi-headline'>Pesan sekarang</p></div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION69" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="PARAGRAPH70" class='ladi-element'><p class='ladi-paragraph'>Salam semua, saya Annise yang sering
                    mengisi ruangan ini. Semoga anda semua saling mengingati. Maaf. Dah lama tak bercakap, sebab banyak
                    aktiviti nak buat. Namun, kini, saya kembali. Oleh itu saya ingin berkongsi sedikit pengalaman dalam
                    membasmi parasit.<br>
                    <br>Apabila anda melihat orang yang anda sayangi dalam kesakitan dan penderitaan, anda tidak dapat
                    menahannya. Adakah anda berasa teruk? Inilah yang berlaku kepada kita. Jadi kami ingin memberitahu
                    anda tentang apa yang berlaku kepada orang yang sangat saya sayangi. Sebagai contoh untuk dijadikan
                    pengajaran kepada semua orang, agar anda tidak akan pernah merasa seperti kami.<br></p></div>
            <div id="PARAGRAPH71" class='ladi-element'><p class='ladi-paragraph'>Kami telah berkahwin dan telah pergi
                    selama 27 tahun. Kami tidak pernah bergaduh, dan rakan-rakan kami masih suka memanggil kami
                    "Pengantin Baru" sepanjang masa, kami berdua merancang untuk melakukan hubungan seks secara tetap
                    pada bila-bila masa dan di mana sahaja untuk keharmonian rumah tangga masa depan.<br><br>Tetapi
                    permulaan masalah adalah di mana suami saya mula merungut. Dia mula mengalami nafas berbau dan bau
                    mulut semakin teruk setiap hari, kerana kami adalah doktor. Tindakan pertama yang diambil ialah
                    pergi ke doktor gigi dan diperiksa perutnya. Tetapi tidak ada perkara besar yang berlaku.<br></p>
            </div>
            <div id="IMAGE73" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH74" class='ladi-element'><p class='ladi-paragraph'>Suami saya mula kembung perut, kini
                    kurang makan dan rasa lebih kurus.<br></p></div>
        </div>
    </div>
    <div id="SECTION77" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="PARAGRAPH78" class='ladi-element'><p class='ladi-paragraph'>Kemudian dia mula mengalami gejala lain
                    yang lebih membimbangkan<br></p></div>
            <div id="PARAGRAPH79" class='ladi-element'><p class='ladi-paragraph'>Dan kemudian kami mula mendengar dia
                    mengadu tentang penyakit lain. Kemudian, adakah masih masalah yang sama atau ada masalah di bahagian
                    jantung atau hati. Saya membawanya untuk elektrokardiogram, ujian darah, tetapi hasilnya ternyata
                    baik-baik saja. Tidak ada yang salah sama sekali
                    <br>
                    <br>Perkara yang paling teruk ialah hubungan dalam perkahwinan kami semakin teruk. Suatu hari suami
                    saya ingin bercinta. Namun, ternyata dia mengalami masalah ereksi. Kami tidak percaya lelaki kuat
                    seperti dia, tiba-tiba menjadi tua, dengan pandangan kosong seperti dia tertekan.<br></p></div>
            <div id="PARAGRAPH80" class='ladi-element'><p class='ladi-paragraph'>Saya membawanya ke hospital lain untuk
                    diperiksa. Doktor di sana mendiagnosis dia menghidap jangkitan parasit. Atau secara mudahnya,
                    terdapat parasit dalam perutnya, dan hampir 70% badan suami saya sudah dipenuhi dengan parasit. Kami
                    keliru, kerana kami tidak tahu bagaimana parasit ini memasuki tubuhnya. Kerana rumah kami sangat
                    bersih, semua makanan disediakan dengan baik, dimakan panas, selalu makan dengan sudu. <span
                            style="font-weight: 700;">Mendengar ini, dia juga tercengang. Semua gejala ini menjadi tanda amaran bahawa parasit berada di dalam badan anda.</span><br>
                </p></div>
            <div id="IMAGE81" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH82" class='ladi-element'><p class='ladi-paragraph'>Gambar ultrabunyi suami saya<br></p>
            </div>
            <div id="PARAGRAPH83" class='ladi-element'><p class='ladi-paragraph'>Apa yang doktor katakan itu sentiasa
                    terngiang-ngiang di fikiran kita. Bagaimana itu berlaku, Tanpa berlengah saya membawanya untuk
                    pemeriksaan kesihatan lanjut. Kemudian kami bertanya kepada ramai kenalan yang juga doktor. Apa yang
                    mereka gambarkan juga membuatkan kami sangat terkejut.<br></p></div>
        </div>
    </div>
    <div id="SECTION84" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="BOX85" class='ladi-element'>
                <div class='ladi-box'></div>
            </div>
            <div id="PARAGRAPH87" class='ladi-element'>
                <p class='ladi-paragraph'>09 November
                    <script>year()</script>
                    <br><span style="color: rgb(132, 132, 132); font-style: italic;">"Semua simptom yang ada pada suami anda adalah tanda-tanda awal jangkitan parasit atau cacing. Apabila terdapat parasit dalam badan, kesihatan mula merosot perlahan-lahan, tetapi tidak begitu jelas pada peringkat awal. Simptom utama yang pertama kali muncul adalah berpanjangan. nafas berbau, kembung perut, kemurungan, sakit kepala, garis bawah mata hitam, hilang selera makan, sakit sendi, dan lain-lain. Jika terdapat parasit lelaki dalam badan mereka ia menyebabkan prostatitis. Zakar tidak boleh ereksi, aka disfungsi seksual, malah untuk jantung, malah hati. Pada wanita parasit menyebabkan vaginitis, bengkak ovari, cystitis. Tisu dalam ovari membesar secara tidak normal, kanser ovari, bengkak buah pinggang, saluran kencing dan jangkitan buah pinggang. Masalah ini boleh berlaku kepada sesiapa sahaja termasuk kanak-kanak kecil dan kanak-kanak kecil. Mereka akan sentiasa basah mata . Mungkin kebanyakan simptom yang muncul pada peringkat awal kelihatan ringan, jadi selalu diabaikan. Apabila dibiarkan terlalu lama Ama akan merosakkan organ dalaman dan menyebabkan kematian.</span><br>
                </p>
            </div>
            <div id="PARAGRAPH88" class='ladi-element'><p class='ladi-paragraph'><span style="font-style: italic;">Tahukah anda lebih 850,000 orang di Malaysia mati tanpa mengetahui puncanya adalah parasit? Ia dipanggil penuai suram, tidak kelihatan dan tersembunyi di mana-mana dan dalam apa jua bentuk. Sama ada ikan, sayur-sayuran, buah-buahan yang dimakan oleh semua orang setiap hari.</span><br>
                </p></div>
            <div id="PARAGRAPH90" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 700;">Larva cacing yang masuk ke dalam badan melalui makanan seperti ikan, sayur, daging, dan buah-buahan yang kita beli dari pasar atau pasar raya.</span><br>
                </p></div>
        </div>
    </div>
    <div id="SECTION91" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="PARAGRAPH92" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 400;">Kami mula mencari penawarnya. Kerana kami tidak mahu duduk diam, melihat orang tersayang menderita setiap hari, dan hampir tidak tidur. Memutuskan untuk membaca banyak buku, dan meminta nasihat daripada seorang kawan yang bergelar doktor. Saya pun cuba ajak suami makan ubat. Tetapi ubat-ubatan ini tidak berfungsi dengan baik, sebenarnya simptom suami saya semakin teruk dan saya berasa sedih kerana tidak dapat membantu suami saya walaupun saya seorang doktor sebenar.</span><br>
                </p></div>
            <div id="PARAGRAPH93" class='ladi-element'><p class='ladi-paragraph'>Kami cuba membuat penyelidikan di
                    internet, dan kami menemui Parasotin<br></p></div>
            <div id="PARAGRAPH95" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 400;">Hampir 250,000 orang telah pulih sepenuhnya daripada jangkitan parasit atau parasit. Dengan mengambil produk ini dalam masa 2 hari, lebih daripada 300 parasit berbeza berkesan dikeluarkan dari badan.</span><br>
                </p></div>
            <div id="PARAGRAPH96" class='ladi-element'><p class='ladi-paragraph'><span style="color: rgb(0, 0, 0);">Keputusan tinjauan: Kaedah deworming yang berkesan<br></span>
                </p></div>
            <div id="PARAGRAPH97" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 400;">Pada mulanya mereka ingin tahu. Namun, kerana keadaan suaminya semakin hari semakin teruk. Saya memutuskan untuk mencubanya yang akan dicuba dalam beberapa hari.<br></span><br>Pada
                    waktu pagi kami benarkan suami saya memakannya. Dan pada sebelah petang mereka makan sekali lagi.
                    Kini keadaannya telah bertambah baik. Dia mula makan lebih banyak. Nafas busuk telah hilang. Dan
                    kebanyakan parasit telah dikeluarkan. Kami berasa lega kerana<span
                            style="color: rgb(23, 100, 200);"> <a href="#SECTION296" target="_self">Parasotin</a>&nbsp;</span>sangat
                    baik sehingga kami tidak boleh bercakap dengan betul.<br></p></div>
            <div id="PARAGRAPH98" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 400;">Selepas 1 hari, hati dan usus kembali 65% dari fungsi normal, buah pinggang dan denyutan jantung kembali normal selepas 3 hari, suami berkata bahawa dia kini beku semula. Semua bahan semulajadi yang terdapat dalam Parasotin adalah penjana semula tisu yang berkesan. Akibatnya, deworming dan pemulihan boleh menjadi lebih cepat.</span><br>
                </p></div>
            <div id="GROUP236" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="GROUP245" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="IMAGE233" class='ladi-element'>
                                <div class='ladi-image'>
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                            <div id="IMAGE235" class='ladi-element'>
                                <div class='ladi-image'>
                                    <div class="ladi-image-background"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="IMAGE254" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION89" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="IMAGE100" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH101" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 400;">Selepas 5 hari, suami kembali untuk pemeriksaan kesihatan semula. Pada masa ini tiada gejala yang menunjukkan kehadiran parasit atau cacing di dalam badan. Tetapi ia juga boleh mengeluarkan telur cacing dan bahan berbahaya lain dalam beberapa jam sahaja. </span><span
                            style="color: rgb(23, 100, 200); text-decoration-line: underline;"><a href="#SECTION296"
                                                                                                  target="_self">Parasotin</a></span><span
                            style="font-weight: 400;">&nbsp; juga membantu menguatkan sistem imun dan membantu melindungi sel daripada parasit, membantu mencegah parasit atau cacing dalam badan untuk jangka masa yang lama, seminggu kemudian suaminya telah pulih.<br></span>
                    <br>Sebaik sahaja kami mengetahui sebab kami tidak dapat mengenali Parasotin terlebih dahulu, kerana
                    ia tidak terdapat di kebanyakan farmasi. Sebabnya, pengeluar takut ada peluang untuk menaikkan harga
                    sehingga terlalu mahal di pasaran. Dengan prestasi cemerlang dan kos pemasaran yang perlu dibayar
                    oleh syarikat farmaseutikal. Bagi mengelakkan perkara ini termasuklah masalah produk tiruan.
                    Pengilang memutuskan untuk tidak dijual di farmasi. Tetapi bagi mereka yang ingin memesan terus dari
                    tapak pengilang.<br></p></div>
            <div id="IMAGE102" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div data-action="true" id="BUTTON243" class='ladi-element ladi-animation'>
                <div class='ladi-button'>
                    <div class="ladi-button-background"></div>
                    <div id="BUTTON_TEXT243" class='ladi-element'><p class='ladi-headline'>ORDER PARASOTIN SEKARANG</p>
                    </div>
                </div>
            </div>
            <div id="NOTIFY255" class='ladi-element ladi-notify-transition' style="opacity:0;top:-162px">
                <div class="ladi-notify">
                    <div class="ladi-notify-image"><img src="files/img/spiner.gif"/></div>
                    <div class="ladi-notify-title">Nội dung cột [Title]</div>
                    <div class="ladi-notify-content">Nội dung cột [Content]</div>
                    <div class="ladi-notify-time">Nội dung cột [Time]</div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION103" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="PARAGRAPH104" class='ladi-element'><p class='ladi-paragraph'><span style="font-weight: 400;">Selepas 5 hari, suami kembali untuk pemeriksaan kesihatan semula. Pada masa ini tiada gejala yang menunjukkan kehadiran parasit atau cacing di dalam badan. Tetapi ia juga boleh mengeluarkan telur cacing dan bahan berbahaya lain dalam beberapa jam sahaja. </span><span
                            style="color: rgb(23, 100, 200);"><a href="#SECTION296" target="_self">Parasotin</a>&nbsp;&nbsp;</span><span
                            style="font-weight: 400;">juga membantu menguatkan sistem imun dan membantu melindungi sel daripada parasit, membantu mencegah parasit atau cacing dalam badan untuk jangka masa yang lama, seminggu kemudian suaminya telah pulih.<br></span>
                    <br>Sebaik sahaja kami mengetahui sebab kami tidak dapat mengenali Parasotin terlebih dahulu, kerana
                    ia tidak terdapat di kebanyakan farmasi. Sebabnya, pengeluar takut ada peluang untuk menaikkan harga
                    sehingga terlalu mahal di pasaran. Dengan prestasi cemerlang dan kos pemasaran yang perlu dibayar
                    oleh syarikat farmaseutikal. Bagi mengelakkan perkara ini termasuklah masalah produk tiruan.
                    Pengilang memutuskan untuk tidak dijual di farmasi. Tetapi bagi mereka yang ingin memesan terus dari
                    tapak pengilang.<br></p></div>
        </div>
    </div>
    <div id="SECTION323" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="BOX326" class='ladi-element'>
                <div class='ladi-box'></div>
            </div>
            <div data-action="true" id="PARAGRAPH327" class='ladi-element ldp-js-date2'><p class='ladi-paragraph'><span
                            style="color: rgb(201, 31, 23); font-weight: 700;">Pesanan daripada pengilang!</span>&nbsp;Bagi
                    mengekalkan keberkesanan jangka panjang dan merawat penyakit secara pasti, kami menyediakan pakej
                    kombo untuk pelanggan, khususnya seperti berikut:<br>
                    <br>Jimat sehingga IDR 470,000 dengan membeli 3 produk
                    <br>Jimat sehingga IDR 660,000 dengan membeli 4 produk
                    <br>Jimat sehingga IDR 850,000 dengan membeli 5 produk<br>
                    <br>Diskaun tambahan 7.5% tambahan dan baucar percuma sehingga IDR 300,000 (*Apabila anda membeli
                    rawatan kombo)<br></p></div>
        </div>
    </div>
    <div id="SECTION296" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="GROUP298" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="GROUP299" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="BOX300" class='ladi-element'>
                                <div class='ladi-box'></div>
                            </div>
                            <div id="PARAGRAPH301" class='ladi-element'><p class='ladi-paragraph'>Kesihatan
                                    <br></p></div>
                        </div>
                    </div>
                    <div id="GROUP302" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="BOX303" class='ladi-element'>
                                <div class='ladi-box'></div>
                            </div>
                            <div id="PARAGRAPH304" class='ladi-element'><p class='ladi-paragraph'>Nafas berbau</p></div>
                        </div>
                    </div>
                    <div id="GROUP305" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="BOX306" class='ladi-element'>
                                <div class='ladi-box'></div>
                            </div>
                            <div id="PARAGRAPH307" class='ladi-element'><p class='ladi-paragraph'>Kongsi</p></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH308" class='ladi-element'><p class='ladi-paragraph'>Tag:</p></div>
                    <div id="SHAPE309" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                 fill="rgba(132, 132, 132, 1.0)">
                                <path d="M5.5,7A1.5,1.5 0 0,0 7,5.5A1.5,1.5 0 0,0 5.5,4A1.5,1.5 0 0,0 4,5.5A1.5,1.5 0 0,0 5.5,7M21.41,11.58C21.77,11.94 22,12.44 22,13C22,13.55 21.78,14.05 21.41,14.41L14.41,21.41C14.05,21.77 13.55,22 13,22C12.45,22 11.95,21.77 11.58,21.41L2.59,12.41C2.22,12.05 2,11.55 2,11V4C2,2.89 2.89,2 4,2H11C11.55,2 12.05,2.22 12.41,2.58L21.41,11.58M13,20L20,13L11.5,4.5L4.5,11.5L13,20Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="GROUP310" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="PARAGRAPH311" class='ladi-element ldp-js-date2'>
                        <p class='ladi-paragraph'>Diskaun 50%
                            <script>dtime(0)</script>
                        </p>
                    </div>
                    <div id="PARAGRAPH312" class='ladi-element'><p class='ladi-paragraph'>Harga asal:&nbsp;RM298</p>
                    </div>
                    <div id="PARAGRAPH313" class='ladi-element'><p class='ladi-paragraph'>Harga baru: RM149/ produk</p>
                    </div>
                </div>
            </div>
            <div id="IMAGE314" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH315" class='ladi-element'><p class='ladi-paragraph'>Pesanan akan dihantar terus ke <span
                            style="font-weight: bold;">RUMAH</span> anda mengikut keperluan anda sambil mematikan
                    piawaian pencegahan wabak.<br></p></div>
            <div id="FORM318" data-config-id="622b010d44292b0039c51f20" class='ladi-element'>
                <form action="send.php" method="post" class='ladi-form'>
                    <div id="BUTTON319" class='ladi-element ladi-animation'>
                        <button type="submit" name="submit" class='ladi-button'>
                            <div class="ladi-button-background"></div>
                            <div id="BUTTON_TEXT319" class='ladi-element'><p class='ladi-headline'>ORDER</p></div>
                        </button>
                    </div>
                    <div id="FORM_ITEM321" class='ladi-element'>
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item-background"></div>
                            <div class='ladi-form-item'><input name="name" minlength="2" maxlength="32" required
                                                               class="ladi-form-control" type="text"
                                                               placeholder="Nama lengkap" value=""/></div>
                        </div>
                    </div>
                    <div id="FORM_ITEM322" class='ladi-element'>
                        <div class="ladi-form-item-container">
                            <div class="ladi-form-item-background"></div>
                            <div class='ladi-form-item'><input name="phone" minlength="10" maxlength="15" required
                                                               class="ladi-form-control" type="tel"
                                                               placeholder="Nombor telefon" value=""/></div>
                        </div>
                    </div>
                    <input type="hidden" name="aff_click_id" value="<?php echo $_SESSION["aff_click_id"]; ?>"/>
                    <input type="hidden" name="sub1" value="<?php echo $_SESSION["sub1"]; ?>">
                    <input type="hidden" name="pixel" value="<?php echo $_SESSION["pixel"]; ?>">
                    <input type="hidden" name="custom1" value="<?php echo $_SESSION["custom1"]; ?>">
                    <input type="hidden" name="sub_id2" value="<?php echo $_SESSION["sub_id2"]; ?>">
                    <input type="hidden" name="sub_id3" value="<?php echo $_SESSION["sub_id3"]; ?>">
                    <input type="hidden" name="sub_id4" value="<?php echo $_SESSION["sub_id4"]; ?>">
                    <input type="hidden" name="sub_id5" value="<?php echo $_SESSION["sub_id5"]; ?>">
                    <input type="hidden" name="aff_param1" value="<?php echo $_SESSION["aff_param1"]; ?>">
                    <input type="hidden" name="aff_param2" value="<?php echo $_SESSION["aff_param2"]; ?>">
                    <input type="hidden" name="aff_param3" value="<?php echo $_SESSION["aff_param3"]; ?>">
                    <input type="hidden" name="aff_param4" value="<?php echo $_SESSION["aff_param4"]; ?>">
                    <input type="hidden" name="aff_param5" value="<?php echo $_SESSION["aff_param5"]; ?>"></form>
            </div>
        </div>
    </div>
    <div id="SECTION106" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="GROUP131" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="BOX123" class='ladi-element'>
                        <div class='ladi-box'></div>
                    </div>
                    <div id="FORM124" data-config-id="" class='ladi-element'>
                        <div action="send.php" method="post" class='ladi-form'>
                            <div id="BUTTON125" class='ladi-element'>
                                <div class='ladi-button'>
                                    <div class="ladi-button-background"></div>
                                    <div id="BUTTON_TEXT125" class='ladi-element'><p class='ladi-headline'>MUA NGAY</p>
                                    </div>
                                </div>
                            </div>
                            <div id="FORM_ITEM129" class='ladi-element'>
                                <div class="ladi-form-item-container">
                                    <div class="ladi-form-item-background"></div>
                                    <div class='ladi-form-item'><textarea autocomplete="off" tabindex="4" name="message"
                                                                          required class="ladi-form-control"
                                                                          placeholder="Komentar"></textarea></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="PARAGRAPH130" class='ladi-element'><p class='ladi-paragraph'>Komen
                    <br></p></div>
            <div id="IMAGE138" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH132" class='ladi-element'><p class='ladi-paragraph'>Agak menakutkan. Saya gembira kerana
                    semua isu akhirnya diselesaikan dengan cara yang baik. Dan suami tercinta anda masih sihat! Terima
                    kasih banyak atas perkongsian. Beritahu kami tentang produk ini. Sekarang, saya telah memesan
                    Parasotin dari pautan yang disediakan. Sebab order sebab sekarang saya mengalami simptom yang sama
                    seperti suami awak, kalau tak baca cerita awak mungkin tak terfikir, ini permulaan yang sangat
                    bahaya.</p></div>
            <div id="IMAGE134" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH135" class='ladi-element'><p class='ladi-paragraph'>Azzir Hafiz<br></p></div>
            <div id="PARAGRAPH136" class='ladi-element'><p class='ladi-paragraph'><span
                            style="color: rgb(48, 131, 232);">Suka</span> ● <span style="color: rgb(48, 129, 232);">Balas </span>●
                    <span style="color: rgb(228, 228, 228);">2 jam lalu</span></p></div>
            <div id="GROUP286" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE144" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH140" class='ladi-element'><p class='ladi-paragraph'>Saya banyak membaca tentang
                            yang ini. Saya ingin tahu pada mulanya, jadi saya memutuskan untuk mencubanya. Sekarang,
                            saya juga terkejut mengapa terdapat banyak parasit dalam diri saya<br></p></div>
                    <div id="IMAGE141" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH142" class='ladi-element'><p class='ladi-paragraph'>Aisyah Naradji
                            <br></p></div>
                    <div id="PARAGRAPH143" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 132, 232);">Balas</span> ● <span
                                    style="color: rgb(228, 228, 228);">2 jam lalu</span></p></div>
                </div>
            </div>
            <div id="GROUP285" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="PARAGRAPH146" class='ladi-element'><p class='ladi-paragraph'>Selepas saya selesai membaca
                            ini, kerana saya mengalami simptom yang sama. Jadi saya fikir saya akan makan Parasotin
                            sekarang jadi saya memesan dari sini.<br></p></div>
                    <div id="IMAGE147" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH148" class='ladi-element'><p class='ladi-paragraph'>Shazana</p></div>
                    <div id="PARAGRAPH149" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 132, 232);">Balas</span> ● <span
                                    style="color: rgb(228, 228, 228);">3 jam lalu</span></p></div>
                </div>
            </div>
            <div id="GROUP288" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE152" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH153" class='ladi-element'><p class='ladi-paragraph'>Peng Joon</p></div>
                    <div id="GROUP287" class='ladi-element'>
                        <div class='ladi-group'>
                            <div id="PARAGRAPH151" class='ladi-element'><p class='ladi-paragraph'>Apabila saya selesai
                                    membaca cerita ini, nampaknya saya mengalami simptom yang sama. Jadi saya fikir saya
                                    akan mengambil Parasotin sekarang, jadi saya memesannya, sebenarnya jika saya hanya
                                    mempunyai satu gejala. Ini menunjukkan bahawa badan dijangkiti parasit! Mulut saya
                                    mula berbau busuk dan kemudian saya juga mendapat vaginitis. Semasa saya membaca
                                    ini, saya menjadi tertekan. Kadang-kadang sebelah sakit juga. Pada mulanya saya
                                    fikir kerana terlalu banyak bekerja, saya berasa lebih baik apabila saya mengambil
                                    Parasotin. Mesti sebab parasit tu dah mati, dah 2 bulan baru rasa sedap! Sesiapa
                                    yang mengalami simptom seperti ini, cubalah!<br></p></div>
                            <div id="PARAGRAPH154" class='ladi-element'><p class='ladi-paragraph'><span
                                            style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                            style="color: rgb(48, 132, 232);">Balas</span> ● <span
                                            style="color: rgb(228, 228, 228);">5 jam lalu</span></p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION155" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="IMAGE161" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH157" class='ladi-element'><p class='ladi-paragraph'>Semua ahli keluarga ambil Parasotin,
                    sekarang mulut pun tak berbau lagi. Suami saya juga tidak menyakiti hati saya, dan anak-anak tidur
                    lebih lena. Tiada lendir dan ruam. Anda tidak pernah tahu di mana dan bila anda akan mendapat
                    parasit. Lebih baik melindunginya.<br>
                </p></div>
            <div id="IMAGE158" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH159" class='ladi-element'><p class='ladi-paragraph'>Syafa Humaira</p></div>
            <div id="PARAGRAPH160" class='ladi-element'><p class='ladi-paragraph'><span
                            style="color: rgb(48, 131, 232);">Suka</span> ● <span style="color: rgb(48, 132, 232);">Balas</span>
                    ● <span style="color: rgb(228, 228, 228);">5 jam lalu</span></p></div>
            <div id="GROUP248" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE168" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH163" class='ladi-element'><p class='ladi-paragraph'>Saya memesan untuk kegunaan.
                            Suami juga kehilangan "kuasa" di atas katil, tidak seperti sebelum ini. Saya tidak sangka ia
                            disebabkan oleh parasit. Tetapi selepas makan Parasotin semuanya kembali normal. Nafas
                            segar, sekarang pun dah makan tiap 3 bulan, simpan saja.<br></p></div>
                    <div id="IMAGE164" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH165" class='ladi-element'><p class='ladi-paragraph'>Rania Kamaruddin</p></div>
                    <div id="PARAGRAPH166" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 132, 232);">Balas&nbsp;</span>● <span
                                    style="color: rgb(228, 228, 228);">5 jam lalu</span></p></div>
                </div>
            </div>
            <div id="GROUP249" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="PARAGRAPH170" class='ladi-element'><p class='ladi-paragraph'>Sebelum membuat pesanan, kami
                            cuba membaca bahan-bahan dengan teliti. Lihat bahawa ia hanya diperbuat daripada ekstrak
                            bahan semulajadi.Ubat ini juga sesuai untuk semua orang yang mempunyai alahan dadah. Kami
                            mempunyai banyak masalah dengan alahan dadah. Jadi kita kena lebih berhati-hati! Kita tidak
                            boleh makan ubat cacing lain kerana alahan. Tetapi semasa makan yang ini, saya melihat hasil
                            yang sangat baik. Tiada vaginitis pada masa ini. Saya tidak mahu memikirkan berapa banyak
                            cacing dalam badan saya ketika itu. Tetapi sekarang saya tidak risau. Kesihatan yang jauh
                            lebih baik.<br></p></div>
                    <div id="IMAGE171" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH172" class='ladi-element'><p class='ladi-paragraph'>Siti Ashira</p></div>
                    <div id="PARAGRAPH173" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 132, 232);">Balas</span>&nbsp;● <span
                                    style="color: rgb(228, 228, 228);">7 jam lalu</span></p></div>
                </div>
            </div>
            <div id="GROUP250" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE213" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH209" class='ladi-element'><p class='ladi-paragraph'>Saya memesan dari tautan ini 3
                            hari yang lalu, sekarang barangnya sudah sampai. Tidak ada masalah sama sekali, pas saya
                            memakanannya pun rasanya tidak aneh dan sangat bagus untuk kesahatan.<br></p></div>
                    <div id="IMAGE210" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH211" class='ladi-element'><p class='ladi-paragraph'>Putra Nandana&nbsp;<br></p>
                    </div>
                    <div id="PARAGRAPH212" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 132, 232);">Balas</span> ● <span
                                    style="color: rgb(228, 228, 228);">8 jam lalui</span></p></div>
                </div>
            </div>
            <div id="GROUP251" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="IMAGE219" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH215" class='ladi-element'><p class='ladi-paragraph'>Saya pesan makan juga..
                            Hasilnya saya lebih "Mighty", dan tidak sesusah dulu. Saya tidak sangka ia disebabkan oleh
                            parasit. Tetapi selepas makan Parasotin semuanya kembali normal. Nafas segar, dan sekarang
                            saya makan setiap 3 bulan, simpan.<br></p></div>
                    <div id="IMAGE216" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH217" class='ladi-element'><p class='ladi-paragraph'>Azhar Mukhil</p></div>
                    <div id="PARAGRAPH218" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 130, 232);">Balas</span>&nbsp;● <span
                                    style="color: rgb(228, 228, 228);">8 jam lalu</span></p></div>
                </div>
            </div>
            <div id="GROUP253" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="PARAGRAPH221" class='ladi-element'><p class='ladi-paragraph'>Betapa menakutkannya?</p>
                    </div>
                    <div id="IMAGE222" class='ladi-element'>
                        <div class='ladi-image'>
                            <div class="ladi-image-background"></div>
                        </div>
                    </div>
                    <div id="PARAGRAPH223" class='ladi-element'><p class='ladi-paragraph'>Malika Sayidah</p></div>
                    <div id="PARAGRAPH224" class='ladi-element'><p class='ladi-paragraph'><span
                                    style="color: rgb(48, 131, 232);">Suka</span> ● <span
                                    style="color: rgb(48, 132, 232);">Balas</span> ● <span
                                    style="color: rgb(228, 228, 228);">9 jam lalu</span></p></div>
                </div>
            </div>
            <div data-action="true" id="IMAGE328" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
        </div>
    </div>
    <div id="SECTION177" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container">
            <div id="IMAGE178" class='ladi-element'>
                <div class='ladi-image'>
                    <div class="ladi-image-background"></div>
                </div>
            </div>
            <div id="PARAGRAPH179" class='ladi-element'>
                <p class='ladi-paragraph'>Copyright@
                    <script>year()</script>
                </p>
            </div>
            <div id="GROUP180" class='ladi-element'>
                <div class='ladi-group'>
                    <div id="SHAPE182" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                 fill="rgba(228, 228, 228, 1.0)">
                                <path d="M19,4V7H17A1,1 0 0,0 16,8V10H19V13H16V20H13V13H11V10H13V7.5C13,5.56 14.57,4 16.5,4M20,2H4A2,2 0 0,0 2,4V20A2,2 0 0,0 4,22H20A2,2 0 0,0 22,20V4C22,2.89 21.1,2 20,2Z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE183" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 1664 1896.0833" class=""
                                 fill="rgba(228, 228, 228, 1.0)">
                                <path d="M1620 408q-67 98-162 167 1 14 1 42 0 130-38 259.5T1305.5 1125 1121 1335.5t-258 146-323 54.5q-271 0-496-145 35 4 78 4 225 0 401-138-105-2-188-64.5T221 1033q33 5 61 5 43 0 85-11-112-23-185.5-111.5T108 710v-4q68 38 146 41-66-44-105-115t-39-154q0-88 44-163 121 149 294.5 238.5T820 653q-8-38-8-74 0-134 94.5-228.5T1135 256q140 0 236 102 109-21 205-78-37 115-142 178 93-10 186-50z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE184" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 1536 1896.0833" class=""
                                 fill="rgba(228, 228, 228, 1.0)">
                                <path d="M349 625v991H19V625h330zm21-306q1 73-50.5 122T184 490h-2q-82 0-132-49T0 319q0-74 51.5-122.5T186 148t133 48.5T370 319zm1166 729v568h-329v-530q0-105-40.5-164.5T1040 862q-63 0-105.5 34.5T871 982q-11 30-11 81v553H531q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5T1157 602q171 0 275 113.5t104 332.5z"></path>
                            </svg>
                        </div>
                    </div>
                    <div id="SHAPE185" class='ladi-element'>
                        <div class='ladi-shape'>
                            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%"
                                 preserveAspectRatio="none" viewBox="0 0 24 24" class=""
                                 fill="rgba(228, 228, 228, 1.0)">
                                <path d="M20,8L12,13L4,8V6L12,11L20,6M20,4H4C2.89,4 2,4.89 2,6V18A2,2 0 0,0 4,20H20A2,2 0 0,0 22,18V6C22,4.89 21.1,4 20,4Z"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div id="PARAGRAPH240" class='ladi-element'><p class='ladi-paragraph'>Produk ini bukan ubat dan tidak
                    mempunyai kesan sebagai pengganti ubat</p></div>
        </div>
    </div>
    <div id="SECTION_POPUP" class='ladi-section'>
        <div class='ladi-section-background'></div>
        <div class="ladi-container"></div>
    </div>
</div>
<div id="backdrop-popup" class="backdrop-popup"></div>
<div id="backdrop-dropbox" class="backdrop-dropbox"></div>
<div id="lightbox-screen" class="lightbox-screen"></div>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('form').forEach(function (form) {
            if (form.elements['phone'] !== undefined) {
                let phone = form.elements['phone'];
                let name = form.elements['name'];
                let submitBtn = form.elements['submit'];

                let phoneRegExp = new RegExp("^(\\+60|0)\\d{8,9}$");

                name.addEventListener('keypress', (function (e) {
                    if (!isNaN(e.key)) {
                        e.preventDefault();
                    }
                }));
                phone.addEventListener('keypress', function (e) {
                    if (e.which != 8 && e.which != 43 && isNaN(String.fromCharCode(e.which))) {
                        e.preventDefault();
                    }
                });
                phone.addEventListener('focus', function () {
                    if (this.value.length === 0) {
                        this.value = '+60';
                        this.selectionStart = this.value.length;
                    }
                });

                form.addEventListener('submit', function (e) {
                    if (!phoneRegExp.test(phone.value)) {
                        e.preventDefault();
                        alert("Format telefon tidak sah");
                        return false;
                    }
                    submitBtn.disabled = true;
                    return true;
                });
            }
        });
        //link scroll
        document.querySelectorAll('div[data-action="true"], a:not([target="_blank"]').forEach(function (link) {
            link.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector('form').scrollIntoView({behavior: "smooth", block: "center"});
            });
        });
    });
</script>
<script src="files/js/notify.js" type="text/javascript"></script>
</body>
</html>
