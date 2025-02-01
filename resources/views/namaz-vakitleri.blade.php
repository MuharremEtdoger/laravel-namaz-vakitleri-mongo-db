
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MongoDB Namaz Vakitleri</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/mongo.css">
</head>
<body>
    <section class="namaz-vakitleri-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-primary" role="alert">
                        İl ve tarih seçimini yaparak listeleme yapabilirsiniz
                    </div>                    
                </div>
            </div>
            <div class="row filter-row">
                <div class="col-md-2">
                @csrf
                    <select class="form-control" name="il_adi">
                        <option>İL SEÇİN</option><option value="1" data-name="adana">Adana</option><option value="2" data-name="adiyaman">Adıyaman</option><option value="3" data-name="afyonkarahisar">Afyonkarahisar</option><option value="4" data-name="agri">Ağrı</option><option value="5" data-name="amasya">Amasya</option><option value="6" data-name="ankara">Ankara</option><option value="7" data-name="antalya">Antalya</option><option value="8" data-name="artvin">Artvin</option><option value="9" data-name="aydin">Aydın</option><option value="10" data-name="balikesir">Balıkesir</option><option value="11" data-name="bilecik">Bilecik</option><option value="12" data-name="bingl">Bingöl</option><option value="13" data-name="bitlis">Bitlis</option><option value="14" data-name="bolu">Bolu</option><option value="15" data-name="burdur">Burdur</option><option value="16" data-name="bursa">Bursa</option><option value="17" data-name="canakkale">Çanakkale</option><option value="18" data-name="cankiri">Çankırı</option><option value="19" data-name="corum">Çorum</option><option value="20" data-name="denizli">Denizli</option><option value="21" data-name="diyarbakir">Diyarbakır</option><option value="22" data-name="edirne">Edirne</option><option value="23" data-name="elazig">Elazığ</option><option value="24" data-name="erzincan">Erzincan</option><option value="25" data-name="erzurum">Erzurum</option><option value="26" data-name="eskisehir">Eskişehir</option><option value="27" data-name="gaziantep">Gaziantep</option><option value="28" data-name="giresun">Giresun</option><option value="29" data-name="gumushane">Gümüşhane</option><option value="30" data-name="hakkari">Hakkari</option><option value="31" data-name="hatay">Hatay</option><option value="32" data-name="isparta">Isparta</option><option value="33" data-name="mersin">Mersin</option><option value="34" data-name="istanbul">İstanbul</option><option value="35" data-name="izmir">İzmir</option><option value="36" data-name="kars">Kars</option><option value="37" data-name="kastamonu">Kastamonu</option><option value="38" data-name="kayseri">Kayseri</option><option value="39" data-name="kirklareli">Kırklareli</option><option value="40" data-name="kirsehir">Kırşehir</option><option value="41" data-name="kocaeli">Kocaeli</option><option value="42" data-name="konya">Konya</option><option value="43" data-name="kutahya">Kütahya</option><option value="44" data-name="malatya">Malatya</option><option value="45" data-name="manisa">Manisa</option><option value="46" data-name="kahramanmaras">Kahramanmaraş</option><option value="47" data-name="mardin">Mardin</option><option value="48" data-name="mugla">Muğla</option><option value="49" data-name="mus">Muş</option><option value="50" data-name="nevsehir">Nevşehir</option><option value="51" data-name="nigde">Niğde</option><option value="52" data-name="ordu">Ordu</option><option value="53" data-name="rize">Rize</option><option value="54" data-name="sakarya">Sakarya</option><option value="55" data-name="samsun">Samsun</option><option value="56" data-name="siirt">Siirt</option><option value="57" data-name="sinop">Sinop</option><option value="58" data-name="sivas">Sivas</option><option value="59" data-name="tekirdag">Tekirdağ</option><option value="60" data-name="tokat">Tokat</option><option value="61" data-name="trabzon">Trabzon</option><option value="62" data-name="tunceli">Tunceli</option><option value="63" data-name="sanliurfa">Şanlıurfa</option><option value="64" data-name="usak">Uşak</option><option value="65" data-name="van">Van</option><option value="66" data-name="yozgat">Yozgat</option><option value="67" data-name="zonguldak">Zonguldak</option><option value="68" data-name="aksaray">Aksaray</option><option value="69" data-name="bayburt">Bayburt</option><option value="70" data-name="karaman">Karaman</option><option value="71" data-name="kirikkale">Kırıkkale</option><option value="72" data-name="batman">Batman</option><option value="73" data-name="sirnak">Şırnak</option><option value="74" data-name="bartin">Bartın</option><option value="75" data-name="ardahan">Ardahan</option><option value="76" data-name="igdir">Iğdır</option><option value="77" data-name="yalova">Yalova</option><option value="78" data-name="karabuk">Karabük</option><option value="79" data-name="kilis">Kilis</option><option value="80" data-name="osmaniye">Osmaniye</option><option value="81" data-name="duzce">Düzce</option>                      
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="date" name="nmz_date" class="form-control">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-info search-namaz">Getir</button>
                </div>
            </div>
            <div class="row result-area">
                <div class="col-md-12 result-area">

                </div>
            </div>
        </div>
    </section>
</body>
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script src="assets/js/mongo.js"></script>
</html>