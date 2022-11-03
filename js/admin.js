window.onload = function () {
    sonucAc();
};

const tckn = document.getElementById("tckn").innerHTML;
const KTsoruSayisi = 40;
const DTsoruSayisi = 35;
const ETsoruSayisi = 39;
var neseliVeHayalci = 0;
var otoriter;
var sakin = 0;
var titiz = 0;
var KTB = 0;
var KTA = 0;
var KTC = 0;
var KTD = 0;
var DT0 = 0;
var DT1 = 0;
var DT2 = 0;
var DT3 = 0;
var DT4 = 0;
var ET5 = 0;
var ET1 = 0;
var ET2 = 0;
var ET3 = 0;
var ET4 = 0;
var gdp = 0;
var bdp = 0;
var pdp = 0;
var disadonukluk = 0;
var duygusalDenge = 0;
var ozdenetim = 0;
var uyumluluk = 0;
var yeniligeAciklik = 0;

function sonucAc() {
    for (let i = 1; i < KTsoruSayisi + 1; i++) {
        $.ajax({
            async:false,
            type: 'POST',
            url: 'islemler.php?mode=KTsonuclariGetir',
            data: "soruid=" + i + '&tckn=' + tckn + '&KTA=' + KTA+ '&KTB=' + KTB+ '&KTC=' + KTC+ '&KTD=' + KTD,
            success: function (msg) {
                if ("B" == msg.toString()) {
                    KTB++;
                } else if ("D" == msg.toString()) {
                    KTD++;
                } else if ("C" == msg.toString()) {
                    KTC++;
                } else if ("A" == msg.toString()) {
                    KTA++;
                }
                neseliVeHayalci = (KTA * 100 / 40);
                otoriter = (KTB * 100 / 40);
                sakin = (KTC * 100 / 40);
                titiz = (KTD * 100 / 40);
            }

        });

    }
    KTgrafikCiz(otoriter,neseliVeHayalci,sakin,titiz);

    for (let i = 1; i < DTsoruSayisi + 1; i++) {
        $.ajax({
            async:false,
            type: 'POST',
            url: 'islemler.php?mode=DTsonuclariGetir',
            data: "soruid=" + i + '&tckn=' + tckn,
            success: function (msg) {
                if (i == 1 || i == 3 || i == 4 || i == 6 || i == 7 || i == 10 || i == 16 || i == 12 || i == 14 || i == 18 || i == 19 || i == 22 || i == 25 || i == 24 || i == 27 || i == 28 || i == 30 || i == 35) {
                    gdp += parseInt(msg[0]);
                }
                if (i == 8 || i == 13 || i == 20 || i == 23 || i == 26 || i == 31 || i == 32 || i == 33 || i == 34) {
                    bdp += parseInt(msg[0]);
                }
                if (i == 2 || i == 5 || i == 9 || i == 11 || i == 15 || i == 17 || i == 21 || i == 29) {
                    pdp += parseInt(msg[0]);
                }
                if ("0" == msg.toString()) {
                    DT0++;
                } else if ("1" == msg.toString()) {
                    DT1++;
                } else if ("2" == msg.toString()) {
                    DT2++;
                } else if ("3" == msg.toString()) {
                    DT3++;
                } else if ("4" == msg.toString()) {
                    DT4++;
                }


                if ((gdp * 100 / 72) < 75) {
                    document.getElementById("gdp").innerHTML = " - Düşük";
                    document.getElementById("gdp").style.color = "red";
                } else if ((gdp * 100 / 72) >= 75 && (gdp * 100 / 72) <= 85) {
                    document.getElementById("gdp").innerHTML = " - İdeal";
                    document.getElementById("gdp").style.color = "black";
                } else {
                    document.getElementById("gdp").innerHTML = " - Yüksek";
                    document.getElementById("gdp").style.color = "green";
                }

                if ((bdp * 100 / 36) < 25) {
                    document.getElementById("bdp").innerHTML = " - Düşük";
                    document.getElementById("bdp").style.color = "red";
                } else if ((bdp * 100 / 36) >= 25 && (bdp * 100 / 36) <= 35) {
                    document.getElementById("bdp").innerHTML = " - İdeal";
                    document.getElementById("bdp").style.color = "black";
                } else {
                    document.getElementById("bdp").innerHTML = " - Yüksek";
                    document.getElementById("bdp").style.color = "green";
                }

                if ((pdp * 100 / 32) < 25) {
                    document.getElementById("pdp").innerHTML = " - Düşük";
                    document.getElementById("pdp").style.color = "red";
                } else if ((pdp * 100 / 32) >= 25 && (pdp * 100 / 32) <= 30) {
                    document.getElementById("pdp").innerHTML = " - İdeal";
                    document.getElementById("pdp").style.color = "black";
                } else {
                    document.getElementById("pdp").innerHTML = " - Yüksek";
                    document.getElementById("pdp").style.color = "green";
                }

            }


        });

    }

    DTgrafikCiz(gdp,bdp,pdp);

    for (let i = 1; i < ETsoruSayisi + 1; i++) {
        $.ajax({
            async:false,
            type: 'POST',
            url: 'islemler.php?mode=ETsonuclariGetir',
            data: "soruid=" + i + '&tckn=' + tckn + '&disadonukluk=' + disadonukluk,
            success: function (msg) {
                if (i == 1 || i == 2 || i == 8 || i == 10 || i == 11 || i == 13 || i == 39) {
                    disadonukluk += parseInt(msg[0]);
                }
                if (i == 7 || i == 15 || i == 17 || i == 20 || i == 23 || i == 30 || i == 32 || i == 35) {
                    duygusalDenge += parseInt(msg[0]);
                }
                if (i == 5 || i == 6 || i == 14 || i == 16 || i == 27 || i == 29 || i == 36 || i == 38) {
                    ozdenetim += parseInt(msg[0]);
                }
                if (i == 3 || i == 18 || i == 21 || i == 25 || i == 28 || i == 33 || i == 34 || i == 37) {
                    uyumluluk += parseInt(msg[0]);
                }
                if (i == 4 || i == 9 || i == 12 || i == 19 || i == 22 || i == 24 || i == 26 || i == 31) {
                    yeniligeAciklik += parseInt(msg[0]);
                }
                if ("1" == msg.toString()) {
                    ET1++;
                } else if ("2" == msg.toString()) {
                    ET2++;
                } else if ("3" == msg.toString()) {
                    ET3++;
                } else if ("4" == msg.toString()) {
                    ET4++;
                } else if ("5" == msg.toString()) {
                    ET5++;
                }
                if (disadonukluk <= 7) { //Dışa Dönüklük
                    document.getElementById("disadonuk").innerHTML = " - Düşük";
                    document.getElementById("disadonuk").style.color = "red";
                } else if (disadonukluk >= 8 && disadonukluk <= 14) {
                    document.getElementById("disadonuk").innerHTML = " - Düşük";
                    document.getElementById("disadonuk").style.color = "orange";
                } else if (disadonukluk >= 15 && disadonukluk <= 21) {
                    document.getElementById("disadonuk").innerHTML = " - Orta";
                    document.getElementById("disadonuk").style.color = "black";
                } else if (disadonukluk >= 22 && disadonukluk <= 28) {
                    document.getElementById("disadonuk").innerHTML = " - Yüksek";
                    document.getElementById("disadonuk").style.color = "green";
                } else if (disadonukluk >= 29 && disadonukluk <= 35) {
                    document.getElementById("disadonuk").innerHTML = " - Çok Yüksek";
                    document.getElementById("disadonuk").style.color = "darkgreen";
                }

                if (duygusalDenge <= 8) { //Duygusal Denge
                    document.getElementById("duygusaldenge").innerHTML = " - Düşük";
                    document.getElementById("duygusaldenge").style.color = "red";
                } else if (duygusalDenge >= 9 && duygusalDenge <= 16) {
                    document.getElementById("duygusaldenge").innerHTML = " - Düşük";
                    document.getElementById("duygusaldenge").style.color = "orange";
                } else if (duygusalDenge >= 17 && duygusalDenge <= 24) {
                    document.getElementById("duygusaldenge").innerHTML = " - Orta";
                    document.getElementById("duygusaldenge").style.color = "black";
                } else if (duygusalDenge >= 25 && duygusalDenge <= 32) {
                    document.getElementById("duygusaldenge").innerHTML = " - Yüksek";
                    document.getElementById("duygusaldenge").style.color = "green";
                } else if (duygusalDenge >= 33 && duygusalDenge <= 40) {
                    document.getElementById("duygusaldenge").innerHTML = " - Çok Yüksek";
                    document.getElementById("duygusaldenge").style.color = "darkgreen";
                }

                if (ozdenetim <= 8) { //Öz Denetim
                    document.getElementById("ozdenetim").innerHTML = " - Düşük";
                    document.getElementById("ozdenetim").style.color = "red";
                } else if (ozdenetim >= 9 && ozdenetim <= 16) {
                    document.getElementById("ozdenetim").innerHTML = " - Düşük";
                    document.getElementById("ozdenetim").style.color = "orange";
                } else if (ozdenetim >= 17 && ozdenetim <= 24) {
                    document.getElementById("ozdenetim").innerHTML = " - Orta";
                    document.getElementById("ozdenetim").style.color = "black";
                } else if (ozdenetim >= 25 && ozdenetim <= 32) {
                    document.getElementById("ozdenetim").innerHTML = " - Yüksek";
                    document.getElementById("ozdenetim").style.color = "green";
                } else if (ozdenetim >= 33 && ozdenetim <= 40) {
                    document.getElementById("ozdenetim").innerHTML = " - Çok Yüksek";
                    document.getElementById("ozdenetim").style.color = "darkgreen";
                }

                if (uyumluluk <= 8) { //Uyumluluk
                    document.getElementById("uyumluluk").innerHTML = " - Düşük";
                    document.getElementById("uyumluluk").style.color = "red";
                } else if (uyumluluk >= 9 && uyumluluk <= 16) {
                    document.getElementById("uyumluluk").innerHTML = " - Düşük";
                    document.getElementById("uyumluluk").style.color = "orange";
                } else if (uyumluluk >= 17 && uyumluluk <= 24) {
                    document.getElementById("uyumluluk").innerHTML = " - Orta";
                    document.getElementById("uyumluluk").style.color = "black";
                } else if (uyumluluk >= 25 && uyumluluk <= 32) {
                    document.getElementById("uyumluluk").innerHTML = " - Yüksek";
                    document.getElementById("uyumluluk").style.color = "green";
                } else if (uyumluluk >= 33 && uyumluluk <= 40) {
                    document.getElementById("uyumluluk").innerHTML = " - Çok Yüksek";
                    document.getElementById("uyumluluk").style.color = "darkgreen";
                }

                if (yeniligeAciklik <= 8) { //Yeniliğe Açıklık
                    document.getElementById("yeniligeaciklik").innerHTML = " - Düşük";
                    document.getElementById("yeniligeaciklik").style.color = "red";
                } else if (yeniligeAciklik >= 9 && yeniligeAciklik <= 16) {
                    document.getElementById("yeniligeaciklik").innerHTML = " - Düşük";
                    document.getElementById("yeniligeaciklik").style.color = "orange";
                } else if (yeniligeAciklik >= 17 && yeniligeAciklik <= 24) {
                    document.getElementById("yeniligeaciklik").innerHTML = " - Orta";
                    document.getElementById("yeniligeaciklik").style.color = "black";
                } else if (yeniligeAciklik >= 25 && yeniligeAciklik <= 32) {
                    document.getElementById("yeniligeaciklik").innerHTML = " - Yüksek";
                    document.getElementById("yeniligeaciklik").style.color = "green";
                } else if (yeniligeAciklik >= 33 && yeniligeAciklik <= 40) {
                    document.getElementById("yeniligeaciklik").innerHTML = " - Çok Yüksek";
                    document.getElementById("yeniligeaciklik").style.color = "darkgreen";
                }

            }
        });
    }
    ETgrafikCiz1(disadonukluk);
    ETgrafikCiz2(duygusalDenge);
    ETgrafikCiz3(ozdenetim);
    ETgrafikCiz4(uyumluluk);
    ETgrafikCiz5(yeniligeAciklik);
    document.getElementById("grafikler").style.display = 'flex';
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


function KTgrafikCiz(otoriter,neseli,sakin,titiz){
    document.getElementById("otoriter").innerHTML += otoriter;
    document.getElementById("neseli").innerHTML += neseliVeHayalci;
    document.getElementById("sakin").innerHTML += sakin;
    document.getElementById("titiz").innerHTML += titiz;

    var xValues = ["Otoriter", "neseli", "sakin", "titiz"];
    var yValues = [otoriter, neseli, sakin, titiz];
    var barColors = [
        "red",
        "yellow",
        "green",
        "blue"
    ];

    new Chart("myChart", {
        type: "pie",
        data: {
            labels: xValues,
            datasets: [{
                backgroundColor: barColors,
                data: yValues
            }]
        },
        options: {
            legend: {
                display: false
            }
        }
    });
}

function DTgrafikCiz(gdp,bdp,pdp){

    new Chart("canvas", {
        type: "bar",
        data: {
            labels: [
                "Kişilik D. Puanı",
                "Baskıcı D. Puanı",
                "Pasif D. Puanı"
              ],
            datasets: [
                {
                  label: "En Düşük",
                  backgroundColor: "pink",
                  borderColor: "red",
                  borderWidth: 1,
                  data: [75, 25, 25]
                },
                {
                  label: "En Yüksek",
                  backgroundColor: "lightblue",
                  borderColor: "blue",
                  borderWidth: 1,
                  data: [85, 35, 30]
                },
                {
                  label: "Kişinin Puanı",
                  backgroundColor: "lightgreen",
                  borderColor: "green",
                  borderWidth: 1,
                  data: [gdp,bdp,pdp]
                }
              ]
        },
        options: {
            legend: {
                display: false
            }
        }
    });
}

function ETgrafikCiz1(disadonukluk){

    new Chart("chart", {
        type: 'gauge',
        data: {
          //labels: ['Success', 'Warning', 'Warning', 'Error'],
          datasets: [{
            data: [7,14,21,28,35],
            value: [disadonukluk],
            backgroundColor: ['red', 'orange','yellow','green', 'darkgreen'],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Dışa Dönüklük'
          },
          layout: {
            padding: {
              bottom: 30
            }
          },
          needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 1)'
          },
          valueLabel: {
            formatter: Math.round
          }
        }
      });
}

function ETgrafikCiz2(duygusalDenge){

    new Chart("chart2", {
        type: 'gauge',
        data: {
          //labels: ['Success', 'Warning', 'Warning', 'Error'],
          datasets: [{
            data: [8,16,24,32,40],
            value: [duygusalDenge],
            backgroundColor: ['red', 'orange','yellow','green', 'darkgreen'],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Duygusal Denge'
          },
          layout: {
            padding: {
              bottom: 30
            }
          },
          needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 1)'
          },
          valueLabel: {
            formatter: Math.round
          }
        }
      });
}

function ETgrafikCiz3(ozdenetim){

    new Chart("chart3", {
        type: 'gauge',
        data: {
          //labels: ['Success', 'Warning', 'Warning', 'Error'],
          datasets: [{
            data: [8,16,24,32,40],
            value: [ozdenetim],
            backgroundColor: ['red', 'orange','yellow','green', 'darkgreen'],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Özdenetim'
          },
          layout: {
            padding: {
              bottom: 30
            }
          },
          needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 1)'
          },
          valueLabel: {
            formatter: Math.round
          }
        }
      });
}

function ETgrafikCiz4(uyumluluk){

    new Chart("chart4", {
        type: 'gauge',
        data: {
          //labels: ['Success', 'Warning', 'Warning', 'Error'],
          datasets: [{
            data: [8,16,24,32,40],
            value: [uyumluluk],
            backgroundColor: ['red', 'orange','yellow','green', 'darkgreen'],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Uyumluluk'
          },
          layout: {
            padding: {
              bottom: 30
            }
          },
          needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 1)'
          },
          valueLabel: {
            formatter: Math.round
          }
        }
      });
}

function ETgrafikCiz5(yeniligeAciklik){

    new Chart("chart5", {
        type: 'gauge',
        data: {
          //labels: ['Success', 'Warning', 'Warning', 'Error'],
          datasets: [{
            data: [8,16,24,32,40],
            value: [yeniligeAciklik],
            backgroundColor: ['red', 'orange','yellow','green', 'darkgreen'],
            borderWidth: 2
          }]
        },
        options: {
          responsive: true,
          title: {
            display: true,
            text: 'Yeniliğe Açıklık'
          },
          layout: {
            padding: {
              bottom: 30
            }
          },
          needle: {
            // Needle circle radius as the percentage of the chart area width
            radiusPercentage: 2,
            // Needle width as the percentage of the chart area width
            widthPercentage: 3.2,
            // Needle length as the percentage of the interval between inner radius (0%) and outer radius (100%) of the arc
            lengthPercentage: 80,
            // The color of the needle
            color: 'rgba(0, 0, 0, 1)'
          },
          valueLabel: {
            formatter: Math.round
          }
        }
      });
}


