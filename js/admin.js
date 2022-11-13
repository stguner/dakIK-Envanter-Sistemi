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
var KTA = 0;
var KTB = 0;
var KTC = 0;
var KTD = 0;
var gdp = 0;
var bdp = 0;
var pdp = 0;
var disadonukluk = 0;
var duygusalDenge = 0;
var ozdenetim = 0;
var uyumluluk = 0;
var yeniligeAciklik = 0;

function sonucAc() {
    $.ajax({
      async: false,
      type: "GET",
      url: "islemler.php?mode=sonuclar",
      data: { tckn: tckn },
      success: function (response) {
        var sonuc = JSON.parse(response);
        
        KTA = sonuc.KTA;
        KTB = sonuc.KTB;
        KTC = sonuc.KTC;
        KTD = sonuc.KTD;

        gdp = sonuc.gdp;
        bdp = sonuc.bdp;
        pdp = sonuc.pdp;

        disadonukluk = sonuc.disadonukluk;
        duygusalDenge = sonuc.duygusalDenge;
        ozdenetim = sonuc.ozdenetim;
        uyumluluk = sonuc.uyumluluk;
        yeniligeAciklik = sonuc.yeniligeAciklik;
      }
    });

    neseliVeHayalci = ((KTA/40)*100);
    otoriter = ((KTB/40)*100);
    sakin = ((KTC/40)*100);
    titiz = ((KTD/40)*100);
    KTgrafikCiz(otoriter,neseliVeHayalci,sakin,titiz);


    if (((gdp*100)/72) < 75) {
      document.getElementById("gdp").innerHTML = "Düşük";
      document.getElementById("gdp").style.color = "red";
  } else if (((gdp*100)/72) >= 75 && ((gdp*100)/72) <= 85) {
      document.getElementById("gdp").innerHTML = "İdeal";
      document.getElementById("gdp").style.color = "black";
  } else {
      document.getElementById("gdp").innerHTML = "Yüksek";
      document.getElementById("gdp").style.color = "green";
  }

  if ((bdp * 100 / 36) < 25) {
      document.getElementById("bdp").innerHTML = "Düşük";
      document.getElementById("bdp").style.color = "red";
  } else if ((bdp * 100 / 36) >= 25 && (bdp * 100 / 36) <= 35) {
      document.getElementById("bdp").innerHTML = "İdeal";
      document.getElementById("bdp").style.color = "black";
  } else {
      document.getElementById("bdp").innerHTML = "Yüksek";
      document.getElementById("bdp").style.color = "green";
  }

  if ((pdp * 100 / 32) < 25) {
      document.getElementById("pdp").innerHTML = "Düşük";
      document.getElementById("pdp").style.color = "red";
  } else if ((pdp * 100 / 32) >= 25 && (pdp * 100 / 32) <= 30) {
      document.getElementById("pdp").innerHTML = "İdeal";
      document.getElementById("pdp").style.color = "black";
  } else {
      document.getElementById("pdp").innerHTML = "Yüksek";
      document.getElementById("pdp").style.color = "green";
  }
    DTgrafikCiz(gdp,bdp,pdp);

    if (disadonukluk <= 7) { //Dışa Dönüklük
      document.getElementById("disadonuk").innerHTML = "Düşük";
      document.getElementById("disadonuk").style.color = "red";
  } else if (disadonukluk >= 8 && disadonukluk <= 14) {
      document.getElementById("disadonuk").innerHTML = "Düşük";
      document.getElementById("disadonuk").style.color = "orange";
  } else if (disadonukluk >= 15 && disadonukluk <= 21) {
      document.getElementById("disadonuk").innerHTML = "Orta";
      document.getElementById("disadonuk").style.color = "black";
  } else if (disadonukluk >= 22 && disadonukluk <= 28) {
      document.getElementById("disadonuk").innerHTML = "Yüksek";
      document.getElementById("disadonuk").style.color = "green";
  } else if (disadonukluk >= 29 && disadonukluk <= 35) {
      document.getElementById("disadonuk").innerHTML = "Çok Yüksek";
      document.getElementById("disadonuk").style.color = "darkgreen";
  }

  if (duygusalDenge <= 8) { //Duygusal Denge
      document.getElementById("duygusaldenge").innerHTML = "Düşük";
      document.getElementById("duygusaldenge").style.color = "red";
  } else if (duygusalDenge >= 9 && duygusalDenge <= 16) {
      document.getElementById("duygusaldenge").innerHTML = "Düşük";
      document.getElementById("duygusaldenge").style.color = "orange";
  } else if (duygusalDenge >= 17 && duygusalDenge <= 24) {
      document.getElementById("duygusaldenge").innerHTML = "Orta";
      document.getElementById("duygusaldenge").style.color = "black";
  } else if (duygusalDenge >= 25 && duygusalDenge <= 32) {
      document.getElementById("duygusaldenge").innerHTML = "Yüksek";
      document.getElementById("duygusaldenge").style.color = "green";
  } else if (duygusalDenge >= 33 && duygusalDenge <= 40) {
      document.getElementById("duygusaldenge").innerHTML = "Çok Yüksek";
      document.getElementById("duygusaldenge").style.color = "darkgreen";
  }

  if (ozdenetim <= 8) { //Öz Denetim
      document.getElementById("ozdenetim").innerHTML = "Düşük";
      document.getElementById("ozdenetim").style.color = "red";
  } else if (ozdenetim >= 9 && ozdenetim <= 16) {
      document.getElementById("ozdenetim").innerHTML = "Düşük";
      document.getElementById("ozdenetim").style.color = "orange";
  } else if (ozdenetim >= 17 && ozdenetim <= 24) {
      document.getElementById("ozdenetim").innerHTML = "Orta";
      document.getElementById("ozdenetim").style.color = "black";
  } else if (ozdenetim >= 25 && ozdenetim <= 32) {
      document.getElementById("ozdenetim").innerHTML = "Yüksek";
      document.getElementById("ozdenetim").style.color = "green";
  } else if (ozdenetim >= 33 && ozdenetim <= 40) {
      document.getElementById("ozdenetim").innerHTML = "Çok Yüksek";
      document.getElementById("ozdenetim").style.color = "darkgreen";
  }

  if (uyumluluk <= 8) { //Uyumluluk
      document.getElementById("uyumluluk").innerHTML = "Düşük";
      document.getElementById("uyumluluk").style.color = "red";
  } else if (uyumluluk >= 9 && uyumluluk <= 16) {
      document.getElementById("uyumluluk").innerHTML = "Düşük";
      document.getElementById("uyumluluk").style.color = "orange";
  } else if (uyumluluk >= 17 && uyumluluk <= 24) {
      document.getElementById("uyumluluk").innerHTML = "Orta";
      document.getElementById("uyumluluk").style.color = "black";
  } else if (uyumluluk >= 25 && uyumluluk <= 32) {
      document.getElementById("uyumluluk").innerHTML = "Yüksek";
      document.getElementById("uyumluluk").style.color = "green";
  } else if (uyumluluk >= 33 && uyumluluk <= 40) {
      document.getElementById("uyumluluk").innerHTML = "Çok Yüksek";
      document.getElementById("uyumluluk").style.color = "darkgreen";
  }

  if (yeniligeAciklik <= 8) { //Yeniliğe Açıklık
      document.getElementById("yeniligeaciklik").innerHTML = "Düşük";
      document.getElementById("yeniligeaciklik").style.color = "red";
  } else if (yeniligeAciklik >= 9 && yeniligeAciklik <= 16) {
      document.getElementById("yeniligeaciklik").innerHTML = "Düşük";
      document.getElementById("yeniligeaciklik").style.color = "orange";
  } else if (yeniligeAciklik >= 17 && yeniligeAciklik <= 24) {
      document.getElementById("yeniligeaciklik").innerHTML = "Orta";
      document.getElementById("yeniligeaciklik").style.color = "black";
  } else if (yeniligeAciklik >= 25 && yeniligeAciklik <= 32) {
      document.getElementById("yeniligeaciklik").innerHTML = "Yüksek";
      document.getElementById("yeniligeaciklik").style.color = "green";
  } else if (yeniligeAciklik >= 33 && yeniligeAciklik <= 40) {
      document.getElementById("yeniligeaciklik").innerHTML = "Çok Yüksek";
      document.getElementById("yeniligeaciklik").style.color = "darkgreen";
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
    document.getElementById("neseli").innerHTML += neseli;
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
                  data: [75, 25*2.14285714285714, 25*2.5]
                },
                {
                  label: "En Yüksek",
                  backgroundColor: "lightblue",
                  borderColor: "blue",
                  borderWidth: 1,
                  data: [85, 35*2.14285714285714, 30*2.5]
                },
                {
                  label: "Kişinin Puanı",
                  backgroundColor: "lightgreen",
                  borderColor: "green",
                  borderWidth: 1,
                  data: [(gdp*100/72),((bdp*100/36)*2.14285714285714),((pdp*100/32)*2.5)]
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


