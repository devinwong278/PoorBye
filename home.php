<?php include 'inc/header.php';?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
  </head>
  <link rel="shortcut icon" href="/LOGO.png" type="image/x-icon" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
  <link rel="stylesheet" href="homeStyle.css" />
  <body>
    <!-- Awal home-->
    <!-- bagian dompet -->
    <div class="wallet">
      <div class="dompet">
        <img src="keperluan home/dompet.png" alt="" />
        <div class="textDom">
          <h3>ASETKU:</h3>
          <div class="nom">
            <p>Rp</p>
            <p id="asetku"></p>
            <!-- <h2>3,000,000</h2> -->
          </div>
        </div>
      </div>
      <div class="pict">
        <img src="keperluan home/babi.png" alt="" />
        <img src="keperluan home/calculator.png" alt="" id="gone" />
      </div>
    </div>
    <!-- bagian pemasukan pengeluaran -->
    <div class="catatan">
      <div class="kotak">
        <div class="teks" id="masuk">
          <img src="keperluan home/pemasukn.png" alt="" />
          <h3>Pemasukan</h3>
        </div>
        <div class="nominal">
        <p>Rp</p>
        <p id="pemasukan"></p>
        </div>
      </div>
      <div class="kotak">
        <div class="teks" id="keluar">
          <img src="keperluan home/pengeluaran.png" alt="" />
          <h3>Pengeluaran</h3>
        </div>
        <div class="nominal">
          <p>Rp</p>
          <p id="pengeluaran"></p>
        </div>
      </div>
      <div class="kotak">
        <div class="teks" id="tab">
          <img src="keperluan home/tabungan.png" alt="" />
          <h3>Tabungan</h3>
        </div>
        <div class="nominal">
          <p>Rp</p>
          <p id="tabungan"></p>
        </div>
      </div>
      <div class="tambah">
        <button>
          <img src="keperluan home/tambah.png" alt="" />
        </button>
      </div>
    </div>
    <!-- bagian news -->
    <div class="news">
      <div class="teksNews">
        <img src="keperluan home/news.png" alt="" />
        <p>Berita minggu ini</p>
      </div>
      <div class="newsBox">
        <div class="carousel" id="carousel">
          <!-- <a href="news.html" class="berita" style="text-decoration: none">
            <img src="news/phk.png" alt="" />
            <div class="teksBerita">
              <h6>7 Jurus Jitu Menyiapkan Modal Bagi Korban PHK yang Ingin Wirausaha</h6>
              <p>Gelombang pemutusan hubungan kerja (PHK) diperkirakan masih terus menghantui..</p>
            </div>
          </a>
          <a href="#" class="berita" draggable="false" style="text-decoration: none">
            <img src="news/goto.png" alt="" />
            <div class="teksBerita">
              <h6>GoTo Respons Soal Isu PHK, Saham Melesat Hari Ini</h6>
              <p>PT GoTo Gojek Tokopedia Tbk (GOTO) buka suara terkait kabar akan melakukan pemutusan...</p>
            </div>
          </a>
          <a href="#" class="berita" draggable="false" style="text-decoration: none">
            <img src="news/emas.png" alt="" />
            <div class="teksBerita">
              <h6>Inflasi AS Turun, Harga Emas Menguat di Rp974 per Gram</h6>
              <p>Harga jual emas PT Aneka Tambang (Persero) Tbk atau Antam berada di posisi ..</p>
            </div>
          </a>
          <a href="#" class="berita" draggable="false" style="text-decoration: none">
            <img src="news/inflasi.png" alt="" />
            <div class="teksBerita">
              <h6>Menanti Rilis Data Inflasi AS, IHSG Diprediksi Lesu Pagi Ini</h6>
              <p>Indeks Harga Saham Gabungan (IHSG) diperkirakan melemah pada perdagangan Jumat (11/11)..</p>
            </div>
          </a> -->
        </div>
      </div>
    </div>
    <!-- bagian rekomen -->
    <div class="rekomen">
      <div class="RekomText">
        <img src="keperluan home/rekomen medal.png" alt="" />
        <p>6 Rekomendasi Saham</p>
      </div>
      <div class="listrekomen">

        <div class="imgrekomen">
          <img src="keperluan home/rekomensaham/bca43.png" alt=""> 
          <img src="keperluan home/rekomensaham/bri43.png" alt=""> 
          <img src="keperluan home/rekomensaham/antam43.png" alt=""> 
          <img src="keperluan home/rekomensaham/telkom43.png" alt=""> 
          <img src="keperluan home/rekomensaham/goto43.png" alt=""> 
          <img src="keperluan home/rekomensaham/bni43.png" alt=""> 
        </div>

        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>

          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
          {
          "symbols": [
            {
              "description": "BBCA",
              "proName": "IDX:BBCA"
            },
            {
              "description": "BBRI",
              "proName": "IDX:BBRI"
            },
            {
              "description": "ANTM",
              "proName": "IDX:ANTM"
            },
            {
              "description": "TLKM",
              "proName": "IDX:TLKM"
            },
            {
              "description": "GOTO",
              "proName": "IDX:GOTO"
            },
            {
              "description": "BBNI",
              "proName": "IDX:BBNI"
            }
          ],
          "colorTheme": "light",
          "isTransparent": true,
          "showSymbolLogo": false,
          "locale": "id"
        }
          </script>
        </div>


        <!-- <div class="slider">
          <a href="/bbca.html" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bca.png" alt="" />
            <div class="boxText">
              <h3>BBCA</h3>
              <h6>8850</h6>
              <p id="naik">50(0.57%)</p>
            <div class="tradingview-widget-container">
              <div class="tradingview-widget-container__widget"></div>
              <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Pasar hari ini</span></a> oleh TradingView</div>
              <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
              {
              "symbols": [
                {
                  "description": "BBCA",
                  "proName": "IDX:BBCA"
                }
              ],
              "colorTheme": "light",
              "isTransparent": false,
              "showSymbolLogo": true,
              "locale": "id"
            }
              </script>
            </div>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bbri.png" alt="" />
            <div class="boxText">
              <h3>BBRI</h3>
              <h6>4650</h6>
              <p id="naik">120(2.65%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/itmg.png" alt="" />
            <div class="boxText">
              <h3>ITMG</h3>
              <h6>37550</h6>
              <p id="turun">2825(7.00%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/adro.png" alt="" />
            <div class="boxText">
              <h3>ADRO</h3>
              <h6>3490</h6>
              <p id="naik">10(0.29%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/MDKA.png" alt="" />
            <div class="boxText">
              <h3>MDKA</h3>
              <h6>4450</h6>
              <p id="naik">350(8.54%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bmri.png" alt="" />
            <div class="boxText">
              <h3>BMRI</h3>
              <h6>10425</h6>
              <p id="naik">325(3.22%)</p>
            </div>
          </a>
        </div> -->
      </div>
    </div>
    <!-- bagian grafik dan running grade -->
    <div class="GrafikTrade">
      <div class="grafikBox">
        <h1>Indeks Harga Saham Gabungan</h1>
        <div class="period">
          <div class="price">
          </div>
        </div>
        <!-- Widget Grafik -->
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div id="tradingview_f9cce"></div>
          <!-- <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/symbols/IDX-COMPOSITE/" rel="noopener" target="_blank"><span class="blue-text">COMPOSITE quotes</span></a> by TradingView</div> -->
          <script type="text/javascript" src="https://s3.tradingview.com/tv.js"></script>
          <script type="text/javascript">
          new TradingView.MediumWidget(
          {
          "symbols": [
            [
              "IHSG",
              "IDX:COMPOSITE|1D"
            ]
          ],
          "chartOnly": false,
          "width": '100%',
          "height": 600,
          "locale": "id",
          "colorTheme": "light",
          "autosize": false,
          "showVolume": false,
          "hideDateRanges": false,
          "hideMarketStatus": false,
          "hideSymbolLogo": false,
          "scalePosition": "right",
          "scaleMode": "Normal",
          "fontFamily": "-apple-system, BlinkMacSystemFont, Trebuchet MS, Roboto, Ubuntu, sans-serif",
          "fontSize": "10",
          "noTimeScale": false,
          "valuesTracking": "1",
          "changeMode": "price-and-percent",
          "chartType": "line",
          "container_id": "tradingview_f9cce"
        }
          );
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
      <div class="runningBox">
        <h1>Grafik Saham</h1>
        <!-- <table class="running-table">
          <thead>
            <td>Waktu</td>
            <td>Kode</td>
            <td>Aksi</td>
            <td>Harga</td>
            <td>Vol</td>
          </thead>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="naik">Beli</td>
            <td>438</td>
            <td>728</td>
          </tr>
          <tr>
            <td>11:29:59</td>
            <td>PNLF</td>
            <td id="turun">Jual</td>
            <td>438</td>
            <td>728</td>
          </tr>
        </table> -->
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <!-- <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/markets/stocks-indonesia/" rel="noopener" target="_blank"><span class="blue-text">Saham hari ini</span></a> oleh TradingView</div> -->
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-hotlists.js" async>
          {
          "colorTheme": "light",
          "dateRange": "1M",
          "exchange": "IDX",
          "showChart": true,
          "locale": "id",
          "largeChartUrl": "",
          "isTransparent": true,
          "showSymbolLogo": true,
          "showFloatingTooltip": false,
          "width": "96%",
          "height": "600",
          "plotLineColorGrowing": "rgba(41, 98, 255, 1)",
          "plotLineColorFalling": "rgba(41, 98, 255, 1)",
          "gridLineColor": "rgba(240, 243, 250, 0)",
          "scaleFontColor": "rgba(106, 109, 120, 1)",
          "belowLineFillColorGrowing": "rgba(41, 98, 255, 0.12)",
          "belowLineFillColorFalling": "rgba(41, 98, 255, 0.12)",
          "belowLineFillColorGrowingBottom": "rgba(41, 98, 255, 0)",
          "belowLineFillColorFallingBottom": "rgba(41, 98, 255, 0)",
          "symbolActiveColor": "rgba(41, 98, 255, 0.12)"
        }
          </script>
        </div>
        <!-- TradingView Widget END -->
      </div>
    </div>
    <!-- bagian saham, crypto, forex -->
    <div class="invest">
      <!-- bagian stocks -->
      <h3 class="judul">Stocks</h3>
      <div class="listInvest">
        <div class="imglists">
          <img src="keperluan home/rekomensaham/bca43.png" alt=""> 
          <img src="keperluan home/rekomensaham/bri43.png" alt=""> 
          <img src="keperluan home/rekomensaham/antam43.png" alt=""> 
          <img src="keperluan home/rekomensaham/telkom43.png" alt=""> 
          <img src="keperluan home/rekomensaham/goto43.png" alt=""> 
          <img src="keperluan home/rekomensaham/bni43.png" alt=""> 
        </div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <!-- <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Pasar hari ini</span></a> oleh TradingView</div> -->
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
          {
          "symbols": [
            {
              "description": "BBCA",
              "proName": "IDX:BBCA"
            },
            {
              "description": "BBRI",
              "proName": "IDX:BBRI"
            },
            {
              "description": "ANTM",
              "proName": "IDX:ANTM"
            },
            {
              "description": "TLKM",
              "proName": "IDX:TLKM"
            },
            {
              "description": "GOTO",
              "proName": "IDX:GOTO"
            },
            {
              "description": "BBNI",
              "proName": "IDX:BBNI"
            }
          ],
          "colorTheme": "light",
          "isTransparent": true,
          "showSymbolLogo": false,
          "locale": "id"
        }
          </script>
        </div>
        <!-- TradingView Widget END -->
        <!-- <div class="slider">
          <a href="/bbca.html" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bca.png" alt="" />
            <div class="boxText">
              <h3>BBCA</h3>
              <h6>8850</h6>
              <p id="naik">50(0.57%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bbri.png" alt="" />
            <div class="boxText">
              <h3>BBRI</h3>
              <h6>4650</h6>
              <p id="naik">120(2.65%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/itmg.png" alt="" />
            <div class="boxText">
              <h3>ITMG</h3>
              <h6>37550</h6>
              <p id="turun">2825(7.00%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/adro.png" alt="" />
            <div class="boxText">
              <h3>ADRO</h3>
              <h6>3490</h6>
              <p id="naik">10(0.29%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/MDKA.png" alt="" />
            <div class="boxText">
              <h3>MDKA</h3>
              <h6>4450</h6>
              <p id="naik">350(8.54%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bmri.png" alt="" />
            <div class="boxText">
              <h3>BMRI</h3>
              <h6>10425</h6>
              <p id="naik">325(3.22%)</p>
            </div>
          </a>
        </div> -->
      </div>
      <!-- bagian crypto -->
      <h3 class="judul">Crypto</h3>
      <div class="listInvest">
        <div class="imglists">
          <img src="keperluan home/rekomensaham/btc43.png" alt=""> 
          <img src="keperluan home/rekomensaham/bnb43.png" alt=""> 
          <img src="keperluan home/rekomensaham/doge43.png" alt=""> 
          <img src="keperluan home/rekomensaham/eth43.png" alt=""> 
          <img src="keperluan home/rekomensaham/xrp43.png" alt=""> 
          <img src="keperluan home/rekomensaham/ada43.png" alt=""> 
        </div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <!-- <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Pasar hari ini</span></a> oleh TradingView</div> -->
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
          {
          "symbols": [
            {
              "description": "BTC",
              "proName": "CRYPTOCAP:BTC"
            },
            {
              "description": "BNB",
              "proName": "CRYPTOCAP:BNB"
            },
            {
              "description": "DOGE",
              "proName": "CRYPTOCAP:DOGE"
            },
            {
              "description": "ETH",
              "proName": "CRYPTOCAP:ETH"
            },
            {
              "description": "XRP",
              "proName": "CRYPTOCAP:XRP"
            },
            {
              "description": "ADA",
              "proName": "CRYPTOCAP:ADA"
            }
          ],
          "colorTheme": "light",
          "isTransparent": true,
          "showSymbolLogo": false,
          "locale": "id"
        }
          </script>
        </div>
        <!-- TradingView Widget END -->
        <!-- <div class="slider">
          <a href="/bbca.html" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bca.png" alt="" />
            <div class="boxText">
              <h3>BBCA</h3>
              <h6>8850</h6>
              <p id="naik">50(0.57%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bbri.png" alt="" />
            <div class="boxText">
              <h3>BBRI</h3>
              <h6>4650</h6>
              <p id="naik">120(2.65%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/itmg.png" alt="" />
            <div class="boxText">
              <h3>ITMG</h3>
              <h6>37550</h6>
              <p id="turun">2825(7.00%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/adro.png" alt="" />
            <div class="boxText">
              <h3>ADRO</h3>
              <h6>3490</h6>
              <p id="naik">10(0.29%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/MDKA.png" alt="" />
            <div class="boxText">
              <h3>MDKA</h3>
              <h6>4450</h6>
              <p id="naik">350(8.54%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bmri.png" alt="" />
            <div class="boxText">
              <h3>BMRI</h3>
              <h6>10425</h6>
              <p id="naik">325(3.22%)</p>
            </div>
          </a>
        </div> -->
      </div>
      <!-- bagian forex -->
      <h3 class="judul">Forex</h3>
      <div class="listInvest">
        <div class="imglists">
          <img src="keperluan home/rekomensaham/eurgbp43.png" alt=""> 
          <img src="keperluan home/rekomensaham/eurjpy43.png" alt=""> 
          <img src="keperluan home/rekomensaham/eurusd43.png" alt=""> 
          <img src="keperluan home/rekomensaham/gbpaud43.png" alt=""> 
          <img src="keperluan home/rekomensaham/gbpusd43.png" alt=""> 
          <img src="keperluan home/rekomensaham/jpyusd43.png" alt=""> 
        </div>
        <!-- TradingView Widget BEGIN -->
        <div class="tradingview-widget-container">
          <div class="tradingview-widget-container__widget"></div>
          <!-- <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/markets/" rel="noopener" target="_blank"><span class="blue-text">Pasar hari ini</span></a> oleh TradingView</div> -->
          <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
          {
          "symbols": [
            {
              "description": "EURGBP",
              "proName": "FX:EURGBP"
            },
            {
              "description": "EURJPY",
              "proName": "FX:EURJPY"
            },
            {
              "description": "EURUSD",
              "proName": "FX:EURUSD"
            },
            {
              "description": "GBPAUD",
              "proName": "FX:GBPAUD"
            },
            {
              "description": "GBPUSD",
              "proName": "FX:GBPUSD"
            },
            {
              "description": "JPYUSD",
              "proName": "FX_IDC:JPYUSD"
            }
          ],
          "colorTheme": "light",
          "isTransparent": true,
          "showSymbolLogo": false,
          "locale": "id"
        }
          </script>
        </div>
        <!-- TradingView Widget END -->
        <!-- <div class="slider">
          <a href="/bbca.html" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bca.png" alt="" />
            <div class="boxText">
              <h3>BBCA</h3>
              <h6>8850</h6>
              <p id="naik">50(0.57%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bbri.png" alt="" />
            <div class="boxText">
              <h3>BBRI</h3>
              <h6>4650</h6>
              <p id="naik">120(2.65%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/itmg.png" alt="" />
            <div class="boxText">
              <h3>ITMG</h3>
              <h6>37550</h6>
              <p id="turun">2825(7.00%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/adro.png" alt="" />
            <div class="boxText">
              <h3>ADRO</h3>
              <h6>3490</h6>
              <p id="naik">10(0.29%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/MDKA.png" alt="" />
            <div class="boxText">
              <h3>MDKA</h3>
              <h6>4450</h6>
              <p id="naik">350(8.54%)</p>
            </div>
          </a>
          <a href="#" class="InvestBox" draggable="false">
            <img src="keperluan home/rekomensaham/bmri.png" alt="" />
            <div class="boxText">
              <h3>BMRI</h3>
              <h6>10425</h6>
              <p id="naik">325(3.22%)</p>
            </div>
          </a>
        </div> -->
      </div>
    </div>
    <!-- akhir home -->
    <script src="HomeJS.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
  <?php 

    $id_user = $_SESSION["id"];
    
    // var_dump($id_user);

    $total_aset = mysqli_fetch_all(mysqli_query($link,"
    SELECT
      FORMAT(sum(a.nominal),0)
    FROM 
      `aset` a 
    WHERE
      a.idUser = $id_user
    "), MYSQLI_ASSOC)[0]['FORMAT(sum(a.nominal),0)'];

    $total_pemasukan = mysqli_fetch_all(mysqli_query($link,"
      SELECT
        FORMAT(SUM(nominal),0)
      FROM
        transaksi t
      WHERE
        t.idJenisTransaksi = 1 AND t.idUser = $id_user
      GROUP BY idUser
      "), MYSQLI_ASSOC)[0]['FORMAT(SUM(nominal),0)'];

    $total_pengeluaran = mysqli_fetch_all(mysqli_query($link,"
      SELECT
        FORMAT(SUM(nominal),0)
      FROM
        transaksi t
      WHERE
        t.idJenisTransaksi = 2 AND t.idUser = $id_user
      GROUP BY idUser
    "), MYSQLI_ASSOC)[0]['FORMAT(SUM(nominal),0)'];
    
    // var_dump($total_pemasukan);
    
    $total_tabungan = mysqli_fetch_all(mysqli_query($link,"
      SELECT
        FORMAT(a.nominal,0)
      FROM 
        `aset` a 
      WHERE
        a.idUser = $id_user AND a.idAset = 70
    "), MYSQLI_ASSOC)[0]['FORMAT(a.nominal,0)']; 

    $berita = mysqli_fetch_all(mysqli_query($link,"
    SELECT 
     *
    FROM
      `berita`
    WHERE
      DATEDIFF(now(), tanggal) <= 7
    "), MYSQLI_ASSOC);

    // var_dump($berita);

  ?>

  <script>
    
    
    var total_aset = <?php echo json_encode($total_aset); ?>;
    var total_pemasukan = <?php echo json_encode($total_pemasukan); ?>;
    var total_pengeluaran = <?php echo json_encode($total_pengeluaran); ?>;
    var total_tabungan = <?php echo json_encode($total_tabungan); ?>;

    var aset = document.getElementById("asetku");
    var pemasukan = document.getElementById("pemasukan");
    var pengeluaran = document.getElementById("pengeluaran");
    var tabungan = document.getElementById("tabungan");

    aset.innerHTML = total_aset;
    pemasukan.innerHTML = total_pemasukan;
    pengeluaran.innerHTML = total_pengeluaran;
    tabungan.innerHTML = total_tabungan;
    
    var berita = <?php echo json_encode($berita); ?>;
    console.log(berita);
    var carousel_list = document.getElementById('carousel');
    console.log(carousel_list);
    berita.forEach(element => {
      var boxberita = document.createElement('a');
      boxberita.setAttribute('class','berita');
      boxberita.setAttribute('href',element['link']);

      var fotoberita = document.createElement('img');
      fotoberita.src = 'foto_berita/' + element['idBerita'] + '.png';

      var textberita = document.createElement('div');
      textberita.setAttribute('class','teksBerita');

      var judulberita = document.createElement('h6');
      judulberita.innerHTML = element['judul'];

      var descberita = document.createElement('p');
      descberita.innerHTML = element['deskripsi'];

      textberita.appendChild(judulberita);
      textberita.appendChild(descberita);

      boxberita.appendChild(fotoberita);
      boxberita.appendChild(textberita);

      carousel_list.appendChild(boxberita);
    })

  </script>

</html>

<?php include 'inc/footer.php';?>