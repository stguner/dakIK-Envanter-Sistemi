function sonucAc() {
    const tckn = document.getElementById("tckn").innerHTML;
    var ctx = document.getElementById("myChart");
    $KTsoruSayisi = 40;
    $DTsoruSayisi = 35;
    $ETsoruSayisi = 39;
    $neseliVeHayalci = 0;
    $otoriter = 0;
    $sakin = 0;
    $titiz = 0;
    $KTB = 0;
    $KTA = 0;
    $KTC = 0;
    $KTD = 0;
    $DT0 = 0;
    $DT1 = 0;
    $DT2 = 0;
    $DT3 = 0;
    $DT4 = 0;
    $ET5 = 0;
    $ET1 = 0;
    $ET2 = 0;
    $ET3 = 0;
    $ET4 = 0;
    $gdp = 0;
    $bdp = 0;
    $pdp = 0;
    $disadonukluk = 0;
    $duygusalDenge = 0;
    $ozdenetim = 0;
    $uyumluluk = 0;
    $yeniligeAciklik = 0;
    for (let i = 1; i < $KTsoruSayisi + 1; i++) {
        $.ajax({
            type: 'POST',
            url: 'islemler.php?mode=KTsonuclariGetir',
            data: "soruid=" + i + '&tckn=' + tckn,
            success: function (msg) {
                if ("B" == msg.toString()) {
                    $KTB++;
                } else if ("D" == msg.toString()) {
                    $KTD++;
                } else if ("C" == msg.toString()) {
                    $KTC++;
                } else if ("A" == msg.toString()) {
                    $KTA++;
                }
                $neseliVeHayalci = ($KTA * 100 / 40);
                $otoriter = ($KTB * 100 / 40);
                $sakin = ($KTC * 100 / 40);
                $titiz = ($KTD * 100 / 40);

                $("#otoriter").html('<div class="col-md-6 d-flex align-items-center justify-content-center" id="otoriter">%' + $otoriter + '</div>');
                $("#neseli").html('<div class="col-md-6 d-flex align-items-center justify-content-center" id="neseliVeHayalci">%' + $neseliVeHayalci + '</div>');
                $("#sakin").html('<div class="col-md-6 d-flex align-items-center justify-content-center" id="sakin">%' + $sakin + '</div>');
                $("#titiz").html('<div class="col-md-6 d-flex align-items-center justify-content-center" id="titiz">%' + $titiz + '</div>');
                var chart = new CanvasJS.Chart("chartContainer1", {
                    animationEnabled: true,
                    data: [{
                        type: "doughnut",
                        startAngle: 60,
                        //innerRadius: 60,
                        indexLabelFontSize: 17,
                        indexLabel: "{label} - #percent%",
                        toolTipContent: "<b>{label}:</b> {y} (#percent%)",
                        dataPoints: [
                            { y: $neseliVeHayalci, label: "Neşeli - Hayalci" },
                            { y: $otoriter, label: "Otoriter" },
                            { y: $sakin, label: "Sakin" },
                            { y: $titiz, label: "Titiz-İdealist" },
                        ]
                    }]
                });
                chart.render();
            }

        });

    }
    // Doughnut Chart 

    for (let i = 1; i < $DTsoruSayisi + 1; i++) {
        $.ajax({
            type: 'POST',
            url: 'islemler.php?mode=DTsonuclariGetir',
            data: "soruid=" + i + '&tckn=' + tckn,
            success: function (msg) {
                if (i == 1 || i == 3 || i == 4 || i == 6 || i == 7 || i == 10 || i == 16 || i == 12 || i == 14 || i == 18 || i == 19 || i == 22 || i == 25 || i == 24 || i == 27 || i == 28 || i == 30 || i == 35) {
                    $gdp += parseInt(msg[0]);
                }
                if (i == 8 || i == 13 || i == 20 || i == 23 || i == 26 || i == 31 || i == 32 || i == 33 || i == 34) {
                    $bdp += parseInt(msg[0]);
                }
                if (i == 2 || i == 5 || i == 9 || i == 11 || i == 15 || i == 17 || i == 21 || i == 29) {
                    $pdp += parseInt(msg[0]);
                }
                if ("0" == msg.toString()) {
                    $DT0++;
                } else if ("1" == msg.toString()) {
                    $DT1++;
                } else if ("2" == msg.toString()) {
                    $DT2++;
                } else if ("3" == msg.toString()) {
                    $DT3++;
                } else if ("4" == msg.toString()) {
                    $DT4++;
                }
                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    axisY2: {
                        title: "Billions of Barrels",
                        titleFontColor: "#4F81BC",
                        lineColor: "#4F81BC",
                        labelFontColor: "#4F81BC",
                        tickColor: "#4F81BC"
                    },
                    axisY: {
                        title: "%",
                        titleFontColor: "#C0504E",
                        lineColor: "#C0504E",
                        labelFontColor: "#C0504E",
                        tickColor: "#C0504E"
                    },
                    axisY3: {
                        title: "Millions of Barrels/day",
                        titleFontColor: "green",
                        lineColor: "green",
                        labelFontColor: "green",
                        tickColor: "green"
                    },
                    toolTip: {
                        shared: true
                    },
                    legend: {
                        cursor: "pointer",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                        type: "column",
                        name: "En Düşük",
                        legendText: "En Düşük",
                        showInLegend: true,
                        dataPoints: [
                            { label: "Girişken D. Puanı", y: 75 },
                            { label: "Baskıcı D. Puanı", y: 25 },
                            { label: "Pasif D. Puanı", y: 25 }
                        ]
                    }, {

                        type: "column",
                        name: "En yüksek",
                        legendText: "En Yüksek",
                        showInLegend: true,
                        dataPoints: [
                            { label: "Girişken D. Puanı", y: 85 },
                            { label: "Baskıcı D. Puanı", y: 35 },
                            { label: "Pasif D. Puanı", y: 30 }
                        ]
                    },
                    {
                        type: "column",
                        name: "Kişinin Puanı",
                        legendText: "Kişinin Puanı",
                        showInLegend: true,
                        dataPoints: [
                            { label: "Girişken D. Puanı", y: ($gdp * 100 / 72) },
                            { label: "Baskıcı D. Puanı", y: ($bdp * 100 / 36) },
                            { label: "Pasif D. Puanı", y: ($pdp * 100 / 32) }
                        ]
                    }]
                });
                chart.render();

                function toggleDataSeries(e) {
                    if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    }
                    else {
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }

                if (($gdp * 100 / 72) < 75) {
                    document.getElementById("gdp").innerHTML = "Düşük";
                } else if (($gdp * 100 / 72) >= 75 && ($gdp * 100 / 72) <= 85) {
                    document.getElementById("gdp").innerHTML = "İdeal";
                } else {
                    document.getElementById("gdp").innerHTML = "Yüksek";
                }

                if (($bdp * 100 / 36) < 25) {
                    document.getElementById("bdp").innerHTML = "Düşük";
                } else if (($bdp * 100 / 36) >= 25 && ($bdp * 100 / 36) <= 35) {
                    document.getElementById("bdp").innerHTML = "İdeal";
                } else {
                    document.getElementById("bdp").innerHTML = "Yüksek";
                }

                if (($pdp * 100 / 32) < 25) {
                    document.getElementById("pdp").innerHTML = "Düşük";
                } else if (($pdp * 100 / 32) >= 25 && ($pdp * 100 / 32) <= 30) {
                    document.getElementById("pdp").innerHTML = "İdeal";
                } else {
                    document.getElementById("pdp").innerHTML = "Yüksek";
                }

            }


        });

    }

    for (let i = 1; i < $ETsoruSayisi + 1; i++) {
        $.ajax({
            type: 'POST',
            url: 'islemler.php?mode=ETsonuclariGetir',
            data: "soruid=" + i + '&tckn=' + tckn,
            success: function (msg) {
                if (i == 1 || i == 2 || i == 8 || i == 10 || i == 11 || i == 13 || i == 39) {
                    $disadonukluk += parseInt(msg[0]);
                }
                if (i == 7 || i == 15 || i == 17 || i == 20 || i == 23 || i == 30 || i == 32 || i == 35) {
                    $duygusalDenge += parseInt(msg[0]);
                }
                if (i == 5 || i == 6 || i == 14 || i == 16 || i == 27 || i == 29 || i == 36 || i == 38) {
                    $ozdenetim += parseInt(msg[0]);
                }
                if (i == 3 || i == 18 || i == 21 || i == 25 || i == 28 || i == 33 || i == 34 || i == 37) {
                    $uyumluluk += parseInt(msg[0]);
                }
                if (i == 4 || i == 9 || i == 12 || i == 19 || i == 22 || i == 24 || i == 26 || i == 31) {
                    $yeniligeAciklik += parseInt(msg[0]);
                }
                if ("1" == msg.toString()) {
                    $ET1++;
                } else if ("2" == msg.toString()) {
                    $ET2++;
                } else if ("3" == msg.toString()) {
                    $ET3++;
                } else if ("4" == msg.toString()) {
                    $ET4++;
                } else if ("5" == msg.toString()) {
                    $ET5++;
                }


                
                

            }
        });
    }

    document.getElementById("grafikler").style.display = 'flex';
    document.getElementById("sonucAc").style.display = 'none';
}


function telNoAc() {
    var x = document.getElementById("telNoFront");
    var y = document.getElementById("emailFront");
    if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "block";
    } else {
        x.style.display = "none";
        y.style.display = "none";
    }
}



