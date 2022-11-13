window.onload = function () {
    sonucAc();
};

const tckn = parseInt(document.getElementById("tckn").innerHTML);
const kayit_id = parseInt(document.getElementById("kayit_id").innerHTML);
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
      data: "tckn="+ tckn + "&kayit_id=" + kayit_id,
      success: function (response) {
        var sonuc = JSON.parse(response);
        
        KTA = sonuc.kta;
        KTB = sonuc.ktb;
        KTC = sonuc.ktc;
        KTD = sonuc.ktd;

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

    function DTSonuclari(type, data, low, high) {
      if (data < low) {
        document.getElementById(type).innerHTML += "Düşük";
        document.getElementById(type).style.color = "red";
      } else if(low <= data && data <= high) {
        document.getElementById(type).innerHTML += "İdeal";
        document.getElementById(type).style.color = "black";
      } else {
        document.getElementById(type).innerHTML += "Yüksek";
        document.getElementById(type).style.color = "green";
      }
    }

    DTSonuclari("gdp", gdp*100/72, 75, 85);
    DTSonuclari("bdp", bdp*100/36, 25, 35);
    DTSonuclari("pdp", gdp*100/32, 25, 35);

    DTgrafikCiz(gdp,bdp,pdp);

    // stepSize: aralık değeri = disadonukluk için 7, diğerleri için 8
    function ETSonuclari(type, data, stepSize) {
      if (data <= stepSize) {
        document.getElementById(type).innerHTML += "Düşük";
        document.getElementById(type).style.color = "red";
      } else if (stepSize < data && data <= stepSize * 2) {
        document.getElementById(type).innerHTML += "Düşük";
        document.getElementById(type).style.color = "orange";
      } else if (stepSize * 2 < data  && data <= stepSize * 3) {
        document.getElementById(type).innerHTML += "Orta";
        document.getElementById(type).style.color = "black";
      } else if (stepSize * 3 < data  && data <= stepSize * 4) {
        document.getElementById(type).innerHTML += "Yüksek";
        document.getElementById(type).style.color = "green";
      } else if (stepSize * 4 < data && data <= stepSize * 5) {
        document.getElementById(type).innerHTML += "Çok Yüksek";
        document.getElementById(type).style.color = "darkgreen";
      }
    }

    ETSonuclari("disadonuk", disadonukluk, 7);
    ETSonuclari("duygusaldenge", duygusalDenge, 8);
    ETSonuclari("ozdenetim", ozdenetim, 8);
    ETSonuclari("uyumluluk", uyumluluk, 8);
    ETSonuclari("yeniligeaciklik", yeniligeAciklik, 8);

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
                  data: [75, (25*2.14285714285714).toFixed(2), (25*2.5).toFixed(2)]
                },
                {
                  label: "En Yüksek",
                  backgroundColor: "lightblue",
                  borderColor: "blue",
                  borderWidth: 1,
                  data: [85, (35*2.14285714285714).toFixed(2), (30*2.5).toFixed(2)]
                },
                {
                  label: "Kişinin Puanı",
                  backgroundColor: "lightgreen",
                  borderColor: "green",
                  borderWidth: 1,
                  data: [(gdp*100/72).toFixed(2),((bdp*100/36)*2.14285714285714).toFixed(2),((pdp*100/32)*2.5).toFixed(2)]
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
            text: 'Dışa Dönüklük - ' + document.getElementById("disadonuk").innerHTML
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
            text: 'Duygusal Denge - ' + document.getElementById("duygusaldenge").innerHTML
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
            text: 'Özdenetim - ' + document.getElementById("ozdenetim").innerHTML
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
            text: 'Uyumluluk - ' + document.getElementById("uyumluluk").innerHTML
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
            text: 'Yeniliğe Açıklık - ' + document.getElementById("yeniligeaciklik").innerHTML
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


